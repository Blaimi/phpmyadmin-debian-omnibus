<?php
/* $Id: db_import.php,v 2.2 2005/11/18 12:50:49 cybot_tm Exp $ */
// vim: expandtab sw=4 ts=4 sts=4:

require_once('./libraries/common.lib.php');

/**
 * Gets tables informations and displays top links
 */
require('./db_details_common.php');
require('./db_details_db_info.php');

$import_type = 'database';
require('./libraries/display_import.lib.php');

/**
 * Displays the footer
 */
require('./footer.inc.php');
?>

