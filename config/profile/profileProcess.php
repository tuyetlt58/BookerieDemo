<?php
session_start();
include("../connect.php");
$query = "SELECT * FROM user WHERE userid='$_SESSION[userid]'";
$result = mysqli_query($connect,$query);
$row = mysqli_fetch_array($result, MYSQL_ASSOC);
?>

<dl>
	<dt>Tài khoản:</dt>
	<dd><?php echo $row['username']?></dd>
	<br>
	<dt>Địa chỉ:</dt>
	<dd><?php echo $row['address']?></dd>
	<br>
	<dt>Số điện thoại:</dt>
	<dd>0<?php echo $row['phone']?></dd>
	<br>
	<dt>Email:</dt>
	<dd><?php echo $row['email']?></dd>
</dl>