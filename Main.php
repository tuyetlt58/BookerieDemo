<!doctype html>
<html>
<head>
<?php
include("config/connect.php");
include("config/head.php");
include("config/dashboard/dashboard_setup.php");
include("config/header.php");
?>
<script src="config/dashboard/postFunction.js"></script>
<title>Bookery | Dashboard</title>
</head>
<body>	
	<!-- TOOLS -->
	<div class="col-md-3 def" style="position:fixed;top:70px;left:20px;padding-right:40px">	
		<?php include("config/dashboard/dashboard_tool.php");?>
	</div>
	<div class="col-md-3 def"></div>

	<!-- DASHBOARD -->
	<div id="div" class="col-md-6 def" style="margin:20px 0px;display:none"></div>

	<!-- MORE FEATURES -->
	<div class="col-md-3 def"></div>

</body>
</html>