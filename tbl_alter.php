<?php
/* $Id: tbl_alter.php,v 1.20 2001/11/23 01:03:20 loic1 Exp $ */


/**
 * Gets some core libraries
 */
require('./libraries/grab_globals.lib.php');
if (!isset($submit_mult)) {
    if (isset($submit)) {
        $js_to_run = 'functions.js';
    }
    include('./header.inc.php');
}


/**
 * Defines the url to return to in case of error in a sql statement
 */
$err_url = 'tbl_properties.php'
         . '?lang=' . $lang
         . '&amp;server=' . $server
         . '&amp;db=' . urlencode($db)
         . '&amp;table=' . urlencode($table);


/**
 * Modifications have been submitted -> updates the table
 */
if (isset($submit)) {
    $field_cnt = count($field_orig);
    for ($i = 0; $i < $field_cnt; $i++) {
        if (get_magic_quotes_gpc()) {
            $field_name[$i]    = stripslashes($field_name[$i]);
            $field_default[$i] = stripslashes($field_default[$i]);
            $field_length[$i]  = stripslashes($field_length[$i]);
        }

        if (PMA_MYSQL_INT_VERSION < 32306) {
            PMA_checkReservedWords($field_name[$i], $err_url);
        }

        // Some fields have been urlencoded or double quotes have been translated
        // to "&quot;" in tbl_properties.php
        $field_orig[$i]     = urldecode($field_orig[$i]);
        if (str_replace('"', '&quot;', $field_orig[$i]) == $field_name[$i]) {
            $field_name[$i] = $field_orig[$i];
        }
        $field_default_orig[$i] = urldecode($field_default_orig[$i]);
        if (str_replace('"', '&quot;', $field_default_orig[$i]) == $field_default[$i]) {
            $field_default[$i]  = $field_default_orig[$i];
        }
        $field_length_orig[$i] = urldecode($field_length_orig[$i]);
        if (str_replace('"', '&quot;', $field_length_orig[$i]) == $field_length[$i]) {
            $field_length[$i] = $field_length_orig[$i];
        }
        if (!isset($query)) {
            $query = '';
        } else {
            $query .= ', CHANGE ';
        }
        $query .= PMA_backquote($field_orig[$i]) . ' ' . PMA_backquote($field_name[$i]) . ' ' . $field_type[$i];
        // Some field types shouldn't have lengths
        if ($field_length[$i] != ''
            && !eregi('^(DATE|DATETIME|TIME|TINYBLOB|TINYTEXT|BLOB|TEXT|MEDIUMBLOB|MEDIUMTEXT|LONGBLOB|LONGTEXT)$', $field_type[$i])) {
            $query .= '(' . $field_length[$i] . ')';
        }
        if ($field_attribute[$i] != '') {
            $query .= ' ' . $field_attribute[$i];
        }
        if ($field_default[$i] != '') {
            if (strtoupper($field_default[$i]) == 'NULL') {
                $query .= ' DEFAULT NULL';
            } else {
                $query .= ' DEFAULT \'' . PMA_sqlAddslashes($field_default[$i]) . '\'';
            }
        }
        if ($field_null[$i] != '') {
            $query .= ' ' . $field_null[$i];
        }
        if ($field_extra[$i] != '') {
            $query .= ' ' . $field_extra[$i];
        }
    } // end for

    // Optimization fix - 2 May 2001 - Robbat2
    $sql_query = 'ALTER TABLE ' . PMA_backquote($db) . '.' . PMA_backquote($table) . ' CHANGE ' . $query;
    $result    = mysql_query($sql_query) or PMA_mysqlDie('', '', '', $err_url);
    $message   = $strTable . ' ' . htmlspecialchars($table) . ' ' . $strHasBeenAltered;
    $btnDrop   = 'Fake';
    include('./tbl_properties.php');
    exit();
}


/**
 * No modifications yet required -> displays the table fields
 */
else {
    if (!isset($selected)) {
        $selected[]   = $field;
        $selected_cnt = 1;
    } else {
        $selected_cnt = count($selected);
    }

    // TODO: optimize in case of multiple fields to modify
    for ($i = 0; $i < $selected_cnt; $i++) {
        if (get_magic_quotes_gpc()) {
            $field = PMA_sqlAddslashes(stripslashes($selected[$i]), TRUE);
        } else {
            $field = PMA_sqlAddslashes($selected[$i], TRUE);
        }
        $local_query   = 'SHOW FIELDS FROM ' . PMA_backquote($db) . '.' . PMA_backquote($table) . " LIKE '$field'";
        $result        = mysql_query($local_query) or PMA_mysqlDie('', $local_query, '', $err_url);
        $fields_meta[] = mysql_fetch_array($result);
        mysql_free_result($result);
    }

    $num_fields  = count($fields_meta);
    $action      = 'tbl_alter.php';
    include('./tbl_properties.inc.php');
}


/**
 * Displays the footer
 */
require('./footer.inc.php');
?>
