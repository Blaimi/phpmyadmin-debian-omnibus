<?php
/* $Id: footer.inc.php,v 1.13 2001/12/16 14:43:22 loic1 Exp $ */


// In this file you may add PHP or HTML statements that will be used to define
// the footer for phpMyAdmin pages.

/**
 * Close MySql non-persistent connections
 */
if (isset($dbh) && $dbh) {
    @mysql_close($dbh);
}
if (isset($userlink) && $userlink) {
    @mysql_close($userlink);
}
?>

</body>

</html>
<?php

/**
 * Sends bufferized data
 */
if (isset($cfgOBGzip) && $cfgOBGzip
    && isset($ob_mode) && $ob_mode) {
     PMA_outBufferPost($ob_mode);
}
?> 
