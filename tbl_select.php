<?php
/* $Id: tbl_select.php,v 1.29 2001/12/24 11:18:29 loic1 Exp $ */


/**
 * Gets some core libraries
 */
require('./libraries/grab_globals.lib.php');
require('./libraries/common.lib.php');


/**
 * Defines the url to return to in case of error in a sql statement
 */
$err_url = $goto
         . '?lang=' . $lang
         . '&amp;server=' . $server
         . '&amp;db=' . urlencode($db)
         . '&amp;table=' . urlencode($table);


/**
 * Not selection yet required -> displays the selection form
 */
if (!isset($param) || $param[0] == '') {
    include('./header.inc.php');

    // Gets the list and number of fields
    $local_query = 'SHOW FIELDS FROM ' . PMA_backquote($db) . '.' . PMA_backquote($table);
    $result      = @mysql_query($local_query);
    if (!$result) {
        PMA_mysqlDie('', $local_query, '', $err_url);
    }
    else {
        $fields_cnt        = mysql_num_rows($result);
        while ($row = mysql_fetch_array($result)) {
            $fields_list[] = $row['Field'];
            $type          = $row['Type'];
            // reformat mysql query output - staybyte - 9. June 2001
            $shorttype     = substr($type, 0, 3);
            if ($shorttype == 'set' || $shorttype == 'enu') {
                $type      = eregi_replace(',', ', ', $type);
                // Removes automatic MySQL escape format
                $type      = str_replace('\'\'', '\\\'', $type);
            }
            $type          = eregi_replace('BINARY', '', $type);
            $type          = eregi_replace('ZEROFILL', '', $type);
            $type          = eregi_replace('UNSIGNED', '', $type);
            if (empty($type)) {
                $type      = '&nbsp;';
            }
            $fields_type[] = $type;
        } // end while
        mysql_free_result($result);
        ?>
<form method="post" action="tbl_select.php">
    <input type="hidden" name="server" value="<?php echo $server; ?>" />
    <input type="hidden" name="lang" value="<?php echo $lang; ?>" />
    <input type="hidden" name="db" value="<?php echo $db; ?>" />
    <input type="hidden" name="table" value="<?php echo $table; ?>" />
    <input type="hidden" name="goto" value="<?php echo $goto; ?>" />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php echo $strSelectFields; ?>&nbsp;:<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="param[]" size="10" multiple="multiple">
        <?php
        echo "\n";
        // Displays the list of the fields
        for ($i = 0 ; $i < $fields_cnt; $i++) {
            echo '        <option value="' . urlencode($fields_list[$i]) . '" selected="selected">' . htmlspecialchars($fields_list[$i]) . '</option>' . "\n";
        }
        ?>
    </select><br />
    <ul>
        <li>
            <div style="margin-bottom: 10px">
            <?php echo $strLimitNumRows . "\n"; ?>
            <input type="text" size="4" name="session_max_rows" value="<?php echo $cfgMaxRows; ?>" />
            </div>
        </li>
        <li>
            <?php echo $strAddSearchConditions; ?><br />
            <input type="text" name="where" />&nbsp;
            <?php echo PMA_showDocuShort('F/u/Functions.html') . "\n"; ?>
            <br /><br />
            <?php echo '<i>' . $strOr . '</i> ' . $strDoAQuery; ?><br />
            <table border="<?php echo $cfgBorder; ?>">
            <tr>
                <th><?php echo $strField; ?></th>
                <th><?php echo $strType; ?></th>
                <th><?php echo $strValue; ?></th>
            </tr>
        <?php
        for ($i = 0; $i < $fields_cnt; $i++) {
            echo "\n";
            $bgcolor   = ($i % 2) ? $cfgBgcolorOne : $cfgBgcolorTwo;
            ?>
            <tr>
                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo htmlspecialchars($fields_list[$i]); ?></td>
                <td bgcolor="<?php echo $bgcolor; ?>"><?php echo $fields_type[$i]; ?></td>
                <td bgcolor="<?php echo $bgcolor; ?>">
                    <input type="text" name="fields[]" size="40" />
                    <input type="hidden" name="names[]" value="<?php echo urlencode($fields_list[$i]); ?>" />
                    <input type="hidden" name="types[]" value="<?php echo $fields_type[$i]; ?>" />
                </td>
            </tr>
            <?php
        } // end for
        echo "\n";
        ?>
            </table><br />
        </li>
        <li>
            <?php echo $strDisplayOrder; ?><br />
            <select name="orderField" style="vertical-align: middle">
                <option value="--nil--"></option>
        <?php
        echo "\n";
        for ($i = 0; $i < $fields_cnt; $i++) {
            echo '                ';
            echo '<option value="' . urlencode($fields_list[$i]) . '">' . htmlspecialchars($fields_list[$i]) . '</option>' . "\n";
        } // end for
        ?>
            </select>
            <input type="radio" name="order" value="ASC" checked="checked" />
            <?php echo $strAscending; ?>&nbsp;
            <input type="radio" name="order" value="DESC" />
            <?php echo $strDescending; ?><br /><br />
        </li>
    </ul>

    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="submit" value="<?php echo $strGo; ?>" />
</form>
        <?php
    } // end if
    echo "\n";
    include('./footer.inc.php');
}


/**
 * Selection criteria have been submitted -> do the work
 */
else {
    // Builds the query
    $sql_query = 'SELECT ' . PMA_backquote(urldecode($param[0]));
    $i         = 0;
    $c         = count($param);
    while ($i < $c) {
        if ($i > 0) {
            $sql_query .= ',' . PMA_backquote(urldecode($param[$i]));
        }
        $i++;
    }
    $sql_query .= ' FROM ' . PMA_backquote($table);
    // The where clause
    if ($where != '') {
        $sql_query .= ' WHERE ' . ((get_magic_quotes_gpc()) ? stripslashes($where) : $where);
    }
    else {
        $sql_query .= ' WHERE 1';
        for ($i = 0; $i < count($fields); $i++) {
            if (!empty($fields) && $fields[$i] != '') {
                if (strtoupper($fields[$i]) == 'NULL' || strtoupper($fields[$i]) == 'NOT NULL') {
                    $quot = '';
                    $cmp  = 'IS';
                }
                else if (eregi('char|blob|text', $types[$i])
                         || eregi('(set|enum)[(]', $types[$i])) {
                    $quot = '\'';
                    $cmp  = 'LIKE';
                    if (get_magic_quotes_gpc()) {
                        $fields[$i] = stripslashes($fields[$i]);
                    }
                    $fields[$i]     = PMA_sqlAddslashes($fields[$i], TRUE);
                }
                else if (eregi('date|time|year', $types[$i])) {
                    $quot = '\'';
                    $cmp  = '=';
                }
                else if (strstr($fields[$i], '%')) {
                    $quot = '\'';
                    $cmp  = 'LIKE';
                }
                else if (substr($fields[$i], 0, 1) == '<' || substr($fields[$i], 0, 1) == '>') {
                    $quot = '';
                    $cmp  = '';
                }
                else {
                    $quot = '';
                    $cmp  = '=';
                } // end if
                $sql_query .= ' AND ' . PMA_backquote(urldecode($names[$i])) . " $cmp $quot$fields[$i]$quot";
            } // end if
        } // end for
    } // end if
    if ($orderField != '--nil--') {
        $sql_query .= ' ORDER BY ' . PMA_backquote(urldecode($orderField)) . ' ' . $order;
    } // end if

    // The query will be stripslashed in sql.php if "magic_quotes_gpc" is on
    if (get_magic_quotes_gpc()) {
        $sql_query = addslashes($sql_query);
    }
    include('./sql.php');

}

?>
