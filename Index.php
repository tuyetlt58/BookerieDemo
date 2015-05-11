<!doctype html>
<html>
<head>
<?php
	include("config/head.php");
	if($_SESSION['userid'] != 0) {
		header("Location: Main.php");
	}
	include("/config/account/signInModal.php");
	include("/config/account/signUpModal.php");
?>
<title>Bookerie | Mạng mua bán và trao đổi sách</title>
</head>
<body>
	<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel" style="position:fixed;width:100%;display:">
		<div class="carousel-inner" role="listbox" align="center">
			<div class="item active">
				<img src="image_carousel/carousel_04.png" alt="" style="width:100%">
				<div class="carousel-caption"></div>
			</div>

			<div class="item">
				<img src="image_carousel/carousel_01.png" alt="" style="width:100%">
        		<div class="carousel-caption"></div>
			</div>

			<div class="item">
    	    	<img src="image_carousel/carousel_03.png" alt="" style="width:100%">
				<div class="carousel-caption"></div>
			</div>

			<div class="item">
    	    	<img src="image_carousel/carousel_02.jpg" alt="" style="width:100%">
				<div class="carousel-caption"></div>
			</div>
    	</div>
	</div> -->

	<div class="btn-group btn-group-md" style="position:fixed;top:20px;right:20px;z-index:1">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signin">Đăng nhập</button>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signup">Đăng ký</button>
	</div>
	
	<div class="col-md-4"></div>
	<div class="col-md-4 def" align="center" style="padding-top:200px">
		<img src="image/bookerie.png" style="width:400px">
		<hr>
	</div>

	<div class="col-md-12" align="center">
		<!-- <p style="color:white">Dự án phần mềm trao đổi và mua bán sách của nhóm BRB</p> -->
		<a href="Main.php" class="btn btn-lg btn-primary">Tham gia ngay</a>
	</div>
</body>
</html>