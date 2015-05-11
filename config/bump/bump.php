<?php
session_start();
include("../connect.php");

$postid = $_GET['postid'];

$query = "SELECT userid FROM posts WHERE id='$postid'";
$result = mysqli_query($connect,$query);
$row = mysqli_fetch_array($result, MYSQL_ASSOC);
if($row['userid'] == $_SESSION['userid']) {
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	$time = date("Y-m-d-H-i-s");
	$query_push = "UPDATE posts SET time='$time' WHERE id='$postid'";
	$result_push = mysqli_query($connect,$query_push);
}
?>