<?php session_start();?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="image/logo.png">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/theme1.css">
<?php
	if(!isset($_SESSION['userid'])) {
		$_SESSION['userid'] = 0;
	}

	if(isset($_SESSION['theme'])) {?>
		<link rel="stylesheet" href="css/theme<?php echo $_SESSION['theme']?>.css">
	<?php } else
?>
<script src="jquery/jquery-1.11.2.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>