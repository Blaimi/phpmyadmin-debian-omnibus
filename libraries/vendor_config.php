<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * File for vendor customisation, you can change here paths or some behaviour,
 * which vendors such as Linux distibutions might want to change.
 *
 * For changing this file you should know what you are doing. For this reason
 * options here are not part of normal configuration.
 *
 * @version $Id$
 * @package phpMyAdmin
 */

/**
 * Path to changelog file, can be gzip compressed. Useful when you want to
 * have documentation somewhere else, eg. /usr/share/doc.
 */
define('CHANGELOG_FILE', '/usr/share/doc/phpmyadmin/changelog.gz');

/**
 * Path to license file. Useful when you want to have documentation somewhere
 * else, eg. /usr/share/doc.
 */
define('LICENSE_FILE', '/usr/share/doc/phpmyadmin/copyright');

/**
 * Path to config file generated using setup script.
 */
define('SETUP_CONFIG_FILE', '/var/lib/phpmyadmin/config.inc.php');

/**
 * Whether setup requires writable directory where config
 * file will be generated.
 */
define('SETUP_DIR_WRITABLE', false);

/**
 * Whether to skip mtime check on config file and load it on every request.
 * This has slight performance drawback, but it is the only way to handle
 * inclusions of other php scripts from config.
 */
define('SKIP_MTIME_CONFIG_CHECK', true);

?>
