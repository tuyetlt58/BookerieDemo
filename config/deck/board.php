<?php
include("../connect.php");
include('../get_info.php');
?>

<div class="thumbnail no-border" style="margin-top:20px;padding:0px">
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
</div>
