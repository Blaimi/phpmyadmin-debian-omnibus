<?php
/* $Id: ldi_check.php,v 1.11 2001/11/23 01:03:20 loic1 Exp $ */


/**
 * This file checks and builds the sql-string for
 * LOAD DATA INFILE 'file_name.txt' [REPLACE | IGNORE] INTO TABLE table_name
 *    [FIELDS
 *        [TERMINATED BY '\t']
 *        [OPTIONALLY] ENCLOSED BY "]
 *        [ESCAPED BY '\\' ]]
 *    [LINES TERMINATED BY '\n']
 *    [(column_name,...)]
 */


/**
 * Gets some core scripts
 */
require('./libraries/grab_globals.lib.php');
require('./libraries/common.lib.php');
 

/**
 * The form used to define the query has been submitted -> do the work
 */
if (isset($btnLDI) && ($textfile != 'none')) {
    if (!isset($replace)) {
        $replace = '';
    }

    // Formats the data posted to this script
    $textfile             = PMA_sqlAddslashes($textfile);
    if (get_magic_quotes_gpc()) {
        $field_terminater = stripslashes($field_terminater);
        $enclosed         = PMA_sqlAddslashes(stripslashes($enclosed));
        $escaped          = PMA_sqlAddslashes(stripslashes($escaped));
        $line_terminator  = stripslashes($line_terminator);
        $column_name      = PMA_sqlAddslashes(stripslashes($column_name));
    } else {
        $enclosed         = PMA_sqlAddslashes($enclosed);
        $escaped          = PMA_sqlAddslashes($escaped);
        $column_name      = PMA_sqlAddslashes($column_name);
    }
    
    // Builds the query
    $query     = 'LOAD DATA LOCAL INFILE \'' . $textfile . '\'';
    if (!empty($replace)) {
        $query .= ' ' . $replace;
    }
    $query     .= ' INTO TABLE ' . PMA_backquote($into_table);
    if (isset($field_terminater)) {
        $query .= ' FIELDS TERMINATED BY \'' . $field_terminater . '\'';
    }
    if (isset($enclose_option) && strlen($enclose_option) > 0) {
        $query .= ' OPTIONALLY';
    }
    if (strlen($enclosed) > 0) {
        $query .= ' ENCLOSED BY \'' . $enclosed . '\'';
    }
    if (strlen($escaped) > 0) {
        $query .= ' ESCAPED BY \'' . $escaped . '\'';
    }
    if (strlen($line_terminator) > 0){
        $query .= ' LINES TERMINATED BY \'' . $line_terminator . '\'';
    }
    if (strlen($column_name) > 0) {
        if (PMA_MYSQL_INT_VERSION >= 32306) {
            $query .= ' (';
            $tmp   = split(',( ?)', $column_name);
            for ($i = 0; $i < count($tmp); $i++) {
                if ($i > 0) {
                    $query .= ', ';
                }
                $query     .= PMA_backquote(trim($tmp[$i]));
            } // end for
            $query .= ')';
        } else {
            $query .= ' (' . $column_name . ')';
        }
    }

    // Executes the query
    // sql.php will stripslash the query if 'magic_quotes_gpc' is set to on
    if (get_magic_quotes_gpc()) {
        $sql_query = addslashes($query);
    } else {
        $sql_query = $query;
    }
    include('./sql.php');
}


/**
 * The form used to define the query hasn't been yet submitted -> loads it
 */
else {
    include('./ldi_table.php');
}
?>
