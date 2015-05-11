<!doctype html>
<html>
<head>
<?php
include("config/connect.php");
include("config/head.php");
include("config/deck/deck_setup.php");
include("config/header.php");
?>
<script src="config/dashboard/postFunction.js"></script>
<title>Bookery | ????</title>
</head>
<body>	
	<!-- TOOLS -->
	<div class="col-md-3 def" style="position:fixed;top:70px;left:20px;padding-right:40px">	
		<?php include("config/deck/deck_tool.php");?>
		<div id="deck"></div>
	</div>
	<div class="col-md-3 def"></div>

	<!-- DASHBOARD -->
	<div id="board" class="col-md-5 def">
		<div class="alert alert-info" role="alert" style="margin:0px;margin-top:20px">		
			<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
			Chọn một thẻ bên trái!
		</div>
	</div>

	<!-- MORE FEATURES -->
	<div id="panel" class="col-md-3 def" style="margin:20px"></div>

</body>
</html>