<?php
session_start();
include("../connect.php");
//Submit information
$userid = $_SESSION['userid'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$query = "UPDATE user SET address='$address',phone='$phone',email='$email' WHERE userid='$userid'";
$result = mysqli_query($connect,$query);

header("Location: ../../Main.php");
?>