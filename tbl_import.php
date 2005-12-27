<?php
/* $Id: tbl_import.php,v 2.3 2005/11/18 12:50:49 cybot_tm Exp $ */
// vim: expandtab sw=4 ts=4 sts=4:

require_once('./libraries/common.lib.php');

/**
 * Gets tables informations and displays top links
 */
require_once('./tbl_properties_common.php');
require_once('./tbl_properties_table_info.php');
/**
 * Displays top menu links
 */
require_once('./tbl_properties_links.php');

$import_type = 'table';
require_once('./libraries/display_import.lib.php');

/**
 * Displays the footer
 */
require_once('./footer.inc.php');
?>

