<?php
/* $Id: tbl_addfield.php,v 1.22 2001/11/23 01:03:20 loic1 Exp $ */


/**
 * Get some core libraries
 */
require('./libraries/grab_globals.lib.php');
if (isset($submit)) {
    $js_to_run = 'functions.js';
}
require('./header.inc.php');


/**
 * Defines the url to return to in case of error in a sql statement
 */
$err_url = 'tbl_properties.php'
         . '?lang=' . $lang
         . '&amp;server=' . $server
         . '&amp;db=' . urlencode($db)
         . '&amp;table=' . urlencode($table);


/**
 * The form used to define the field to add has been submitted
 */
if (isset($submit)) {
    $query = '';

    // Builds the field creation statement and alters the table
    $field_cnt = count($field_name);
    for ($i = 0; $i < $field_cnt; ++$i) {
        if (get_magic_quotes_gpc()) {
            $field_name[$i] = stripslashes($field_name[$i]);
        }
        if (PMA_MYSQL_INT_VERSION < 32306) {
            PMA_checkReservedWords($field_name[$i], $err_url);
        }

        $query .= PMA_backquote($field_name[$i]) . ' ' . $field_type[$i];
        if ($field_length[$i] != ''
            && !eregi('^(DATE|DATETIME|TIME|TINYBLOB|TINYTEXT|BLOB|TEXT|MEDIUMBLOB|MEDIUMTEXT|LONGBLOB|LONGTEXT)$', $field_type[$i])) {
            if (get_magic_quotes_gpc()) {
                $query .= '(' . stripslashes($field_length[$i]) . ')';
            } else {
                $query .= '(' . $field_length[$i] . ')';
            }
        }
        if ($field_attribute[$i] != '') {
            $query .= ' ' . $field_attribute[$i];
        }
        if ($field_default[$i] != '') {
            if (strtoupper($field_default[$i]) == 'NULL') {
                $query .= ' DEFAULT NULL';
            } else if (get_magic_quotes_gpc()) {
                $query .= ' DEFAULT \'' . PMA_sqlAddslashes(stripslashes($field_default[$i])) . '\'';
            } else {
                $query .= ' DEFAULT \'' . PMA_sqlAddslashes($field_default[$i]) . '\'';
            }
        }
        if ($field_null[$i] != '') {
            $query .= ' ' . $field_null[$i];
        }
        if ($field_extra[$i] != '') {
            $query .= ' ' . $field_extra[$i];
            // An auto_increment field must be use as a primary key
            if ($field_extra[$i] == 'AUTO_INCREMENT' && isset($field_primary)) {
                $primary_cnt = count($field_primary);
                for ($j = 0; $j < $primary_cnt && $field_primary[$j] != $i; $j++) {
                    // void
                } // end for
                if ($field_primary[$j] == $i) {
                    $query .= ' PRIMARY KEY';
                    unset($field_primary[$j]);
                } // end if
            } // end if (auto_increment)
        }

        if ($after_field != '--end--') {
            // Only the first field can be added somewhere else than at the end
            if ($i == 0) {
                if ($after_field == '--first--') {
                    $query .= ' FIRST';
                } else {
                    if (get_magic_quotes_gpc()) {
                        $query .= ' AFTER ' . PMA_backquote(stripslashes(urldecode($after_field)));
                    } else {
                        $query .= ' AFTER ' . PMA_backquote(urldecode($after_field));
                    }
                }
            } else {
                if (get_magic_quotes_gpc()) {
                    $query .= ' AFTER ' . PMA_backquote(stripslashes($field_name[$i-1]));
                } else {
                    $query .= ' AFTER ' . PMA_backquote($field_name[$i-1]);
                }
            }
        }
        $query .= ', ADD ';
    } // end for
    $query = ereg_replace(', ADD $', '', $query);

    $sql_query     = 'ALTER TABLE ' . PMA_backquote($db) . '.' . PMA_backquote($table) . ' ADD ' . $query;
    $result        = mysql_query($sql_query) or PMA_mysqlDie('', '', '', $err_url);
    $sql_query_cpy = $sql_query . ';';

    // Builds the primary keys statements and updates the table
    $primary = '';
    if (isset($field_primary)) {
        $primary_cnt = count($field_primary);
        for ($i = 0; $i < $primary_cnt; $i++) {
            $j       = $field_primary[$i];
            $primary .= PMA_backquote($field_name[$j]) . ', ';
        } // end for
        $primary     = ereg_replace(', $', '', $primary);
        if (!empty($primary)) {
            $sql_query      = 'ALTER TABLE ' . PMA_backquote($db) . '.' . PMA_backquote($table) . ' ADD PRIMARY KEY (' . $primary . ')';
            $result         = mysql_query($sql_query) or PMA_mysqlDie('', '', '', $err_url);
            $sql_query_cpy  .= "\n" . $sql_query . ';';
        }
    } // end if
     
    // Builds the indexes statements and updates the table
    $index = '';
    if (isset($field_index)) {
        $index_cnt = count($field_index);
        for ($i = 0; $i < $index_cnt; $i++) {
            $j     = $field_index[$i];
            $index .= PMA_backquote($field_name[$j]) . ', ';
        } // end for
        $index     = ereg_replace(', $', '', $index);
        if (!empty($index)) {
            $sql_query      = 'ALTER TABLE ' . PMA_backquote($db) . '.' . PMA_backquote($table) . ' ADD INDEX (' . $index . ')';
            $result         = mysql_query($sql_query) or PMA_mysqlDie('', '', '', $err_url);
            $sql_query_cpy  .= "\n" . $sql_query . ';';
        }
    } // end if
     
    // Builds the uniques statements and updates the table
    $unique = '';
    if (isset($field_unique)) {
        $unique_cnt = count($field_unique);
        for ($i = 0; $i < $unique_cnt; $i++) {
            $j      = $field_unique[$i];
            $unique .= PMA_backquote($field_name[$j]) . ', ';
        } // end for
        $unique = ereg_replace(', $', '', $unique);
        if (!empty($unique)) {
            $sql_query      = 'ALTER TABLE ' . PMA_backquote($db) . '.' . PMA_backquote($table) . ' ADD UNIQUE (' . $unique . ')';
            $result         = mysql_query($sql_query) or PMA_mysqlDie('', '', '', $err_url);
            $sql_query_cpy  .= "\n" . $sql_query . ';';
        }
    } // end if
     

    // Builds the fulltext statements and updates the table
    $fulltext = '';
    if (PMA_MYSQL_INT_VERSION >= 32323 && isset($field_fulltext)) {
        $fulltext_cnt = count($field_fulltext);
        for ($i = 0; $i < $fulltext_cnt; $i++) {
            $j        = $field_fulltext[$i];
            $fulltext .= PMA_backquote($field_name[$j]) . ', ';
        } // end for
        $fulltext = ereg_replace(', $', '', $fulltext);
        if (!empty($fulltext)) {
            $sql_query      = 'ALTER TABLE ' . PMA_backquote($db) . '.' . PMA_backquote($table) . ' ADD FULLTEXT (' . $fulltext . ')';
            $result         = mysql_query($sql_query) or PMA_mysqlDie('', '', '', $err_url);
            $sql_query_cpy  .= "\n" . $sql_query . ';';
        }
    } // end if

    // Go back to table properties
    $sql_query = $sql_query_cpy;
    unset($sql_query_cpy);
    $message   = $strTable . ' ' . htmlspecialchars($table) . ' ' . $strHasBeenAltered;
    include('./tbl_properties.php');
    exit();
} // end do alter table

/**
 * Displays the form used to define the new field
 */
else{
    $action = 'tbl_addfield.php';
    include('./tbl_properties.inc.php');

    // Diplays the footer
    echo "\n";
    include('./footer.inc.php');
}

?>
