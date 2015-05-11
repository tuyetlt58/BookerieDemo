<?php
session_start();
include("../connect.php");

// Do things
$userid = $_SESSION["userid"];
$postid = $_GET["postid"];

$query = "SELECT * FROM lineup WHERE userid='$userid' AND postid='$postid'";
$result = mysqli_query($connect,$query);
$row = mysqli_num_rows($result);

if($row != 0) {
	$query = "DELETE FROM lineup WHERE userid='$userid' AND postid='$postid'";
} else {
	$query = "INSERT INTO lineup(userid,postid) VALUES ('$userid','$postid')";
}
$result = mysqli_query($connect,$query);
?>