<?php
//Create connection
$servername = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($servername,$username,$password,"demoweb");
//Check connection
if(!$connect) {
	die("Connection failed: " . mysqli_connect_error());
}
?>