<?php
/* $Id: mult_submits.inc.php,v 1.8 2001/12/06 19:35:14 loic1 Exp $ */


/**
 * Confirmation form if required or include of other scripts
 */
if (!empty($submit_mult)
    && (!empty($selected_db) || !empty($selected_tbl) || !empty($selected_fld))) {

    if (get_magic_quotes_gpc()) {
        $submit_mult  = stripslashes($submit_mult);
    }
    if (!empty($selected_db)) {
        $selected     = $selected_db;
        $what         = 'drop_db';
    } else if (!empty($selected_tbl)) {
    	if ($submit_mult == $strPrintView) {
            include('./tbl_printview.php');
            exit();
        } else {    
            $selected = $selected_tbl;
            $what     = (($submit_mult == $strDrop) ? 'drop_tbl' : 'empty_tbl');
        }
    } else {
        $selected     = $selected_fld;
        if ($submit_mult == $strDrop) {
            $what     = 'drop_fld';
        } else {
            include('./tbl_alter.php');
            exit();
        }
    }

    // Builds the query
    $full_query     = '';
    $selected_cnt   = count($selected);
    for ($i = 0; $i < $selected_cnt; $i++) {
        switch ($what) {
            case 'drop_db':
                $full_query .= 'DROP DATABASE '
                            . PMA_backquote(htmlspecialchars(urldecode($selected[$i])))
                            . ';<br />';
                break;

            case 'drop_tbl':
                $full_query .= (empty($full_query) ? 'DROP TABLE ' : ', ')
                            . PMA_backquote(htmlspecialchars(urldecode($selected[$i])))
                            . (($i == $selected_cnt - 1) ? ';<br />' : '');
                break;

            case 'empty_tbl':
                $full_query .= 'DELETE FROM '
                            . PMA_backquote(htmlspecialchars(urldecode($selected[$i])))
                            . ';<br />';
                break;

            case 'drop_fld':
                if ($full_query == '') {
                    $full_query .= 'ALTER TABLE '
                                . PMA_backquote(htmlspecialchars($table))
                                . '<br />&nbsp;&nbsp;DROP '
                                . PMA_backquote(htmlspecialchars(urldecode($selected[$i])))
                                . ',';
                } else {
                    $full_query .= '<br />&nbsp;&nbsp;DROP '
                                . PMA_backquote(htmlspecialchars(urldecode($selected[$i])))
                                . ',';
                }
                if ($i == $selected_cnt-1) {
                    $full_query = ereg_replace(',$', ';<br />', $full_query);
                }
                break;
        } // end switch
    }

    // Displays the form
    echo $strDoYouReally . '&nbsp;:<br />' . "\n";
    echo '<tt>' . $full_query . '</tt>&nbsp;?<br/>' . "\n";
    ?>
<form action="<?php echo $action; ?>" method="post">
    <input type="hidden" name="lang" value="<?php echo $lang; ?>" />
    <input type="hidden" name="server" value="<?php echo $server; ?>" />
    <?php
    echo "\n";
    if ($action == 'db_details.php') {
        echo '    <input type="hidden" name="db" value="' . $db . '" />' . "\n";
    } else if ($action == 'tbl_properties.php') {
        echo '    <input type="hidden" name="db" value="' . $db . '" />' . "\n";
        echo '    <input type="hidden" name="table" value="' . $table . '" />' . "\n";
    }
    for ($i = 0; $i < $selected_cnt; $i++) {
        echo '    <input type="hidden" name="selected[]" value="' . $selected[$i] . '" />' . "\n";
    }
    ?>
    <input type="hidden" name="query_type" value="<?php echo $what; ?>" />
    <input type="submit" name="mult_btnDrop" value="<?php echo $strYes; ?>" />
    <input type="submit" name="mult_btnDrop" value="<?php echo $strNo; ?>" />
</form>
    <?php
    echo"\n";

    include('./footer.inc.php');
    exit();
}

/**
 * Executes the query
 */
else if ((get_magic_quotes_gpc() && stripslashes($mult_btnDrop) == $strYes)
         || $mult_btnDrop == $strYes) {

    $sql_query      = '';
    $selected_cnt   = count($selected);
    for ($i = 0; $i < $selected_cnt; $i++) {
        switch ($query_type) {
            case 'drop_db':
                $a_query   = 'DROP DATABASE '
                           . PMA_backquote(urldecode($selected[$i]));
                $reload    = 1;
                break;

            case 'drop_tbl':
                $sql_query .= (empty($sql_query) ? 'DROP TABLE ' : ', ')
                           . PMA_backquote(urldecode($selected[$i]))
                           . (($i == $selected_cnt-1) ? ';' : '');
                $reload    = 1;
                break;

            case 'empty_tbl':
                $a_query   = 'DELETE FROM '
                           . PMA_backquote(urldecode($selected[$i]));
                break;

            case 'drop_fld':
                $sql_query .= (empty($sql_query) ? 'ALTER TABLE ' . PMA_backquote($table) : ',')
                           . ' DROP ' . PMA_backquote(urldecode($selected[$i]))
                           . (($i == $selected_cnt-1) ? ';' : '');
                break;
        } // end switch

        // All "DROP TABLE" and "DROP FIELD" statements will be run at once below
        if ($query_type != 'drop_tbl' && $query_type != 'drop_fld') {
            $sql_query .= $a_query . ';' . "\n";

            if ($query_type != 'drop_db') {
                mysql_select_db($db);
            }
            $result = @mysql_query($a_query) or PMA_mysqlDie('', $a_query, FALSE, $err_url);
        } // end if
    } // end for

    if ($query_type == 'drop_tbl' || $query_type == 'drop_fld') {
        mysql_select_db($db);
        $result = @mysql_query($sql_query) or PMA_mysqlDie('', '', FALSE, $err_url);
    }

    PMA_showMessage($strSuccess);
}

?>
