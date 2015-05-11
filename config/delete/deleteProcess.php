<?php
session_start();
include("../connect.php");

$postid = $_GET['postid'];

$query = "SELECT * FROM posts WHERE id='$postid'";
$result = mysqli_query($connect,$query);
$row = mysqli_fetch_array($result, MYSQL_ASSOC);
if($row['userid'] == $_SESSION['userid']) {
	//Delete image
	$string = "../../image_upload/" . $row["image"];
	//echo $string;
	unlink($string);

	//Delete record in database
	$query_post = "DELETE FROM posts WHERE id='$postid'";
	$result_post = mysqli_query($connect,$query_post);

	//Delete records in bookmark table
	$query_bm = "DELETE FROM bookmark WHERE postid='$postid'";
	$result_bm = mysqli_query($connect,$query_bm);

	// Xoa du lieu trong bang 'heart'
	$query_h = "DELETE FROM heart WHERE postid='$postid'";
	$result_h = mysqli_query($connect,$query_h);
}

//Redirect to 'Main.php' after updating
// header("Location: ../../Main.php");
?>