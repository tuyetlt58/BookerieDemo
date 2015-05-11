<?php
session_start();
include("../connect.php");

$userid = $_SESSION['userid'];

// Lay du lieu tu form
$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$passwordconfirm = $_POST['passwordconfirm'];

// Lay du lieu tu CSDL
$query = "SELECT password FROM user WHERE userid='$userid'";
$result = mysqli_query($connect,$query);
$row = mysqli_fetch_array($result, MYSQL_ASSOC);

$isok = 1;

// Sai mat khau
if($row['password'] != $password) {
	$isok = 0;
}

// Xac nhan mat khau khong khop
if($newpassword != $passwordconfirm) {
	$isok = 0;
}

// Mat khau it hon 5 ki tu
if(strlen($newpassword) < 5) {
	$isok = 0;	
}

// Thay mat khau
if($isok == 1) {
	$query = "UPDATE user SET password='$newpassword' WHERE userid='$userid'";
	$result = mysqli_query($connect,$query);
}

header("Location: ../../Main.php");
?>