<!doctype html>
<html>
<head>
<?php
include("config/connect.php");
include('config/get_info.php');
include("config/head.php");
include("config/header.php");
?>
<title>Bookery | <?php echo $title?></title>
</head>
<body>
	<div class="col-md-4"></div>
	<div class="col-md-4 thumbnail no-border" style="margin-top:20px;padding:0px;padding-bottom:20px">
		<h1 align="center"><?php echo $title?></h1>

		<?php if($image != "") {?>
			<img src="image_upload/<?php echo $image?>" style="width:100%">
		<?php }?>

		<dl style="padding:20px">
			<dt>Giá gốc:</dt>
			<dd><?php echo $oprice?></dd>
			<br>
			<dt>Giá bán:</dt>
			<dd><?php echo $sprice?> (Giảm <?php echo $sale?>%)</dd>
			<br>
			<dt>Chất lượng:</dt>
			<dd><?php echo $quality?></dd>
			<br>
			<dt>Mô tả:</dt>
			<dd><?php echo $des?></dd>
			<hr>
			<dt>Người đăng:</dt>
			<dd><?php echo $username?></dd>
			<br>
			<dt>Địa chỉ:</dt>
			<dd><?php echo $address?></dd>
			<br>
			<dt>Số điện thoại:</dt>
			<dd>0<?php echo $phone?></dd>
			<br>
			<dt>Email:</dt>
			<dd><?php echo $email?></dd>
		</dl>
		<hr>
		<div align="center">
			<a href="Main.php" class="btn btn-default txt-black">Quay lại</a>
		</div>
	</div>
</body>
</html>