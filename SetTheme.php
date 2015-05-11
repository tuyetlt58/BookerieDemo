<!doctype html>
<html>
<head>
<?php
include("/config/connect.php");
include("config/head.php");
include("config/header.php");
?>
<title>Bookery | Giao diện</title>
</head>
<body>
	<h1 align="center" class="def" style="color:white;padding-top:50px">Thay đổi giao diện</h1>

	<a href="config/theme/theme.php?theme=1" id="div1" style="display:none">
		<div class="col-md-4" style="padding:50px">
			<div style="height:300px;background-color:#36465d;border:1px solid white">
			</div>
		</div>
	</a>

	<a href="config/theme/theme.php?theme=2" id="div2" style="display:none">
		<div class="col-md-4" style="padding:50px">
			<div style="height:300px;background-color:seagreen;border:1px solid white">
			</div>
		</div>
	</a>

	<a href="config/theme/theme.php?theme=3" id="div3" style="display:none">
		<div class="col-md-4" style="padding:50px">
			<div style="height:300px;background-color:#af2b45;border:1px solid white">
			</div>
		</div>
	</a>

</body>
</html>

<script>
$(document).ready(function(){
	$("#div1").fadeIn();
	$("#div2").fadeIn();
	$("#div3").fadeIn();
});
</script>