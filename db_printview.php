<?php
/* $Id: db_printview.php,v 1.16 2001/11/23 19:13:07 loic1 Exp $ */


/**
 * Gets the variables sent or posted to this script, then displays headers
 */
require('./libraries/grab_globals.lib.php');
require('./header.inc.php');


/**
 * Defines the url to return to in case of error in a sql statement
 */
$err_url = 'db_details.php'
         . '?lang=' . $lang
         . '&amp;server=' . $server
         . '&amp;db=' . urlencode($db);


/**
 * Gets the list of the table in the current db and informations about these
 * tables if possible
 */
// staybyte: speedup view on locked tables - 11 June 2001
if (PMA_MYSQL_INT_VERSION >= 32303) {
    // Special speedup for newer MySQL Versions (in 4.0 format changed)
    if ($cfgSkipLockedTables == TRUE && PMA_MYSQL_INT_VERSION >= 32330) {
        $local_query  = 'SHOW OPEN TABLES FROM ' . PMA_backquote($db);
        $result        = mysql_query($query) or PMA_mysqlDie('', $local_query, '', $err_url);
        // Blending out tables in use
        if ($result != FALSE && mysql_num_rows($result) > 0) {
            while ($tmp = mysql_fetch_array($result)) {
                // if in use memorize tablename
                if (eregi('in_use=[1-9]+', $tmp)) {
                    $sot_cache[$tmp[0]] = TRUE;
                }
            }
            mysql_free_result($result);

            if (isset($sot_cache)) {
                $local_query = 'SHOW TABLES FROM ' . PMA_backquote($db);
                $result      = mysql_query($query) or PMA_mysqlDie('', $local_query, '', $err_url);
                if ($result != FALSE && mysql_num_rows($result) > 0) {
                    while ($tmp = mysql_fetch_array($result)) {
                        if (!isset($sot_cache[$tmp[0]])) {
                            $local_query = 'SHOW TABLE STATUS FROM ' . PMA_backquote($db) . ' LIKE \'' . addslashes($tmp[0]) . '\'';
                            $sts_result  = mysql_query($local_query) or PMA_mysqlDie('', $local_query, '', $err_url);
                            $sts_tmp     = mysql_fetch_array($sts_result);
                            $tables[]    = $sts_tmp;
                        } else { // table in use
                            $tables[]    = array('Name' => $tmp[0]);
                        }
                    }
                    mysql_free_result($result);
                    $sot_ready = TRUE;
                }
            }
        }
    }
    if (!isset($sot_ready)) {
        $local_query = 'SHOW TABLE STATUS FROM ' . PMA_backquote($db);
        $result      = mysql_query($local_query) or PMA_mysqlDie('', $local_query, '', $err_url);
        if ($result != FALSE && mysql_num_rows($result) > 0) {
            while ($sts_tmp = mysql_fetch_array($result)) {
                $tables[] = $sts_tmp;
            }
            mysql_free_result($result);
        }
    }
    $num_tables = (isset($tables) ? count($tables) : 0);
} // end if (PMA_MYSQL_INT_VERSION >= 32303)
else {
    $result     = mysql_list_tables($db);
    $num_tables = @mysql_numrows($result);
    for ($i = 0; $i < $num_tables; $i++) {
        $tables[] = mysql_tablename($result, $i);
    }
    mysql_free_result($result);
}


/**
 * If there is at least one table, displays the printer friendly view, else
 * an error message
 */
// 1. No table
if ($num_tables == 0) {
    echo $strNoTablesFound;
}
// 2. Shows table informations on mysql >= 3.23 - staybyte - 11 June 2001
else if (PMA_MYSQL_INT_VERSION >= 32300) {
    ?>

<!-- The tables list -->
<table border="<?php echo $cfgBorder; ?>">
<tr>
    <th>&nbsp;<?php echo ucfirst($strTable); ?>&nbsp;</th>
    <th><?php echo ucfirst($strRecords); ?></th>
    <th><?php echo ucfirst($strType); ?></th>
    <?php
    if ($cfgShowStats) {
        echo '<th>' . ucfirst($strSize) . '</th>';
    }
    echo "\n";
    ?>
</tr>
    <?php
    $i = $sum_entries = $sum_size = 0;
    while (list($keyname, $sts_data) = each($tables)) {
        $table     = $sts_data['Name'];
        $bgcolor   = ($i++ % 2) ? $cfgBgcolorOne : $cfgBgcolorTwo;
        echo "\n";
        ?>
<tr>
    <td bgcolor="<?php echo $bgcolor; ?>" nowrap="nowrap">
        &nbsp;<b><?php echo htmlspecialchars($table); ?>&nbsp;</b>&nbsp;
    </td>
        <?php
        echo "\n";
        $mergetable         = FALSE;
        $nonisam            = FALSE;
        if (isset($sts_data['Type'])) {
            if ($sts_data['Type'] == 'MRG_MyISAM') {
                $mergetable = TRUE;
            } else if (!eregi('ISAM|HEAP', $sts_data['Type'])) {
                $nonisam    = TRUE;
            }
        }

        if (isset($sts_data['Rows'])) {
            if ($mergetable == FALSE) {
                if ($cfgShowStats && $nonisam == FALSE) {
                    $tblsize                        =  $sts_data['Data_length'] + $sts_data['Index_length'];
                    $sum_size                       += $tblsize;
                    if ($tblsize > 0) {
                        list($formated_size, $unit) =  PMA_formatByteDown($tblsize, 3, 1);
                    } else {
                        list($formated_size, $unit) =  PMA_formatByteDown($tblsize, 3, 0);
                    }
                } else if ($cfgShowStats) {
                    $formated_size                  = '&nbsp;-&nbsp;';
                    $unit                           = '';
                }
                $sum_entries                        += $sts_data['Rows'];
            }
            // MyISAM MERGE Table
            else if ($cfgShowStats && $mergetable == TRUE) {
                $formated_size = '&nbsp;-&nbsp;';
                $unit          = '';
            }
            else if ($cfgShowStats) {
                $formated_size = 'unknown';
                $unit          = '';
            }
            ?>
    <td align="right" bgcolor="<?php echo $bgcolor; ?>">
            <?php
            echo "\n" . '        ';
            if ($mergetable == TRUE) {
                echo '<i>' . number_format($sts_data['Rows'], 0, $number_decimal_separator, $number_thousands_separator) . '</i>' . "\n";
            } else {
                echo number_format($sts_data['Rows'], 0, $number_decimal_separator, $number_thousands_separator) . "\n";
            }
            ?>
    </td>
    <td nowrap="nowrap" bgcolor="<?php echo $bgcolor; ?>">
        &nbsp;<?php echo (isset($sts_data['Type']) ? $sts_data['Type'] : '&nbsp;'); ?>&nbsp;
    </td>
            <?php
            if ($cfgShowStats) {
                echo "\n";
                ?>
    <td align="right" bgcolor="<?php echo $bgcolor; ?>" nowrap="nowrap">
        &nbsp;<?php echo $formated_size . ' ' . $unit . "\n"; ?>
    </td>
                <?php
                echo "\n";
            } // end if
        } else {
            ?>
    <td colspan="3" align="center" bgcolor="<?php echo $bgcolor; ?>">
        <?php echo $strInUse . "\n"; ?>
    </td>
            <?php
        }
        echo "\n";
        ?>
</tr>
        <?php
    }
    // Show Summary
    if ($cfgShowStats) {
        list($sum_formated, $unit) = PMA_formatByteDown($sum_size, 3, 1);
    }
    echo "\n";
    ?>
<tr>
    <th align="center">
        &nbsp;<b><?php echo sprintf($strTables, number_format($num_tables, 0, $number_decimal_separator, $number_thousands_separator)); ?></b>&nbsp;
    </th>
    <th align="right" nowrap="nowrap">
        <b><?php echo number_format($sum_entries, 0, $number_decimal_separator, $number_thousands_separator); ?></b>
    </th>
    <th align="center">
        <b>--</b>
    </th>
    <?php
    if ($cfgShowStats) {
        echo "\n";
        ?>
    <th align="right" nowrap="nowrap">
        <b><?php echo $sum_formated . ' ' . $unit; ?></b>
    </th>
        <?php
    }
    echo "\n";
    ?>
</tr>
</table>
    <?php
} // end case mysql >= 3.23

// 3. Shows tables list mysql < 3.23
else {
    $i = 0;
    echo "\n";
    ?>

<!-- The tables list -->
<table border="<?php echo $cfgBorder; ?>">
<tr>
    <th>&nbsp;<?php echo ucfirst($strTable); ?>&nbsp;</th>
    <th><?php echo ucfirst($strRecords); ?></th>
</tr>
    <?php
    while ($i < $num_tables) {
        $bgcolor = ($i % 2) ? $cfgBgcolorOne : $bgcolor = $cfgBgcolorTwo;
        echo "\n";
        ?>
<tr>
    <td bgcolor="<?php echo $bgcolor; ?>" nowrap="nowrap">
        <b><?php echo htmlspecialchars($tables[$i]); ?>&nbsp;</b>
    </td>
    <td align="right" bgcolor="<?php echo $bgcolor; ?>" nowrap="nowrap">
        &nbsp;<?php PMA_countRecords($db, $tables[$i]); ?> 
    </td>
</tr>
        <?php
        $i++;
    } // end while
    echo "\n";
    ?>
</table>
    <?php
} // end if


/**
 * Displays the footer
 */
echo "\n";
require('./footer.inc.php');
?>
