<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 *
 * @version $Id: server_import.php 12620 2009-07-02 12:12:06Z lem9 $
 * @package phpMyAdmin
 */

/**
 *
 */
require_once './libraries/common.inc.php';

/**
  * Load mootools for upload progress bar
  */
$GLOBALS['js_include'][] = 'mootools.js'; 


/**
 * Does the common work
 */
require './libraries/server_common.inc.php';


/**
 * Displays the links
 */
require './libraries/server_links.inc.php';

$import_type = 'server';
require './libraries/display_import.lib.php';
/**
 * Displays the footer
 */
require './libraries/footer.inc.php';
?>

