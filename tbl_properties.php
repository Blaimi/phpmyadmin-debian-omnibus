<?php
/* $Id: tbl_properties.php,v 2.7 2005/11/18 12:50:49 cybot_tm Exp $ */
// vim: expandtab sw=4 ts=4 sts=4:

require_once('./libraries/common.lib.php');

/**
 * Runs common work
 */
require('./tbl_properties_common.php');
require_once('./libraries/sql_query_form.lib.php');

$err_url   = 'tbl_properties.php' . $err_url;
$goto = 'tbl_properties.php';
$back = 'tbl_properties.php';

/**
 * Get table information
 */
require_once('./tbl_properties_table_info.php');

/**
 * Displays top menu links
 */
require_once('./tbl_properties_links.php');

/**
 * Query box, bookmark, insert data from textfile
 */
PMA_sqlQueryForm();

/**
 * Displays the footer
 */
require_once('./footer.inc.php');
?>
