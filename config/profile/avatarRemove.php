<?php
session_start();
include("../connect.php");

$query = "SELECT avatar FROM user WHERE userid='$_SESSION[userid]'";
$result = mysqli_query($connect,$query);
$row = mysqli_fetch_array($result, MYSQL_ASSOC);
if($row["avatar"] != "default.png") {
	$string = "../../image_avatar/" . $row["avatar"];
	unlink($string);
}

$query = "UPDATE user SET avatar='default.png' WHERE userid='$_SESSION[userid]'";
$result = mysqli_query($connect,$query);
$_SESSION['avatar'] = "default.png";
header("Location: ../../Main.php");
?>