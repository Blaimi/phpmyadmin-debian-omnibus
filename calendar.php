<?php
/* $Id: calendar.php,v 2.8 2005/11/18 12:50:49 cybot_tm Exp $ */

require_once('./libraries/common.lib.php');
require_once('./libraries/header_http.inc.php');
$page_title = $strCalendar;
require('./libraries/header_meta_style.inc.php');
?>
<script type="text/javascript" src="./libraries/tbl_change.js"></script>
<script type="text/javascript">
<!--
var month_names = new Array("<?php echo implode('","', $month); ?>");
var day_names = new Array("<?php echo implode('","', $day_of_week); ?>");
var submit_text = "<?php echo $strGo; ?>";
//-->
</script>
</head>
<body onload="initCalendar();">
<div id="calendar_data"></div>
<div id="clock_data"></div>
</body>
</html>
