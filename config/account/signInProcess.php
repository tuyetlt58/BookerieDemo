<?php
session_start();
include("../connect.php");
//Select
$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM user WHERE username ='$username'";
$result = mysqli_query($connect,$query);
$row = mysqli_fetch_array($result, MYSQL_ASSOC);
if($row["password"] == $password) {
	$_SESSION["userid"] = $row["userid"];
	$_SESSION["username"] = $row["username"];
	$_SESSION["theme"] = $row["theme"];
	$_SESSION["avatar"] = $row["avatar"];
	header("Location: ../../Main.php");
} else {
	$alert = "Tên đăng nhập hoặc mật khẩu sai!";
	header("Location: ../../Index.php?signInAlert=$alert");
}
?>