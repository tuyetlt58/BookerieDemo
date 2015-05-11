<?php
// Lay thong tin bai viet
$query = "SELECT * FROM posts WHERE id = $_GET[postid]";
$result = mysqli_query($connect,$query);
$row = mysqli_fetch_array($result, MYSQL_ASSOC);
$userid = $row["userid"];
$title = $row["name"];
$oprice = format_price($row["oprice"]);
$sprice = format_price($row["sprice"]);
$sale = get_sale($row['sprice'],$row['oprice']);
$quality = get_quality($row["quality"]);
$image = $row["image"];
$des = $row["des"];

// Lay thong tin nguoi dang
$query = "SELECT username,address,phone,email FROM user WHERE userid = '$userid'";
$result = mysqli_query($connect,$query);
$row = mysqli_fetch_array($result, MYSQL_ASSOC);
$username = $row["username"];
$address = $row["address"];
$phone = $row["phone"];
$email = $row["email"];

function get_quality($x) {
	switch($x) {
		case "1":
			$q = "Mới hoàn toàn"; break;
		case "2":
			$q = "Như mới"; break;
		case "3":
			$q = "Rất tốt"; break;
		case "4":
			$q = "Tốt"; break;
		case "5":
			$q = "Chấp nhận được"; break;
		case "6":
			$q = "Rất cũ"; break;
	}
	return $q;
}

function get_sale($s,$o) {
	$percent = 100 - $s/$o*100;
	$q = number_format($percent,2,'.','');
	return $q;
}

function format_price($x) {
	$q = number_format($x,0,'',',');
	$q = $q . ",000 VND";
	return $q;
}
?>