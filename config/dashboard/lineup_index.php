<?php
include("../connect.php");
$postid = $_GET['postid'];

$query = "SELECT * FROM lineup WHERE postid='$postid'";
$result = mysqli_query($connect,$query);
$rownum = mysqli_num_rows($result);
echo $rownum;
?>