<?php
session_start();
include('../connect.php');

$theme = $_GET['theme'];
$userid = $_SESSION['userid'];

$query = "UPDATE user SET theme='$theme' WHERE userid='$userid'";
$result = mysqli_query($connect,$query);
if($result) {
	$_SESSION['theme'] = $theme;
}

header("Location: ../../Main.php");
?>