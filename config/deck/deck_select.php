<?php
$userid = $_SESSION['userid'];
$state = $_GET['state'];

$query = "SELECT * FROM posts ";
$set_state_1 = "userid = '$userid' ";

if($state == 0) {
	// Do nothing	
}

// Sach cua toi
if($state == 1) {
	$query = $query . "WHERE " . $set_state_1;
}

// Danh dau hoac Dat hang
if($state == 2 || $state == 3) {
	if($state == 2) {
		$query2 = "SELECT * FROM bookmark WHERE userid='$_SESSION[userid]'";
	} else {
		$query2 = "SELECT * FROM lineup WHERE userid='$_SESSION[userid]'";
	}
	//echo $query2;
	$result2 = mysqli_query($connect,$query2);

	$query = $query . "WHERE (";
	while($row2 = mysqli_fetch_array($result2, MYSQL_ASSOC)) {
		$query = $query . "id=" . $row2["postid"] . " OR ";
	}
	$strlen = strlen($query);
	if(substr($query,$strlen-4) == " OR ") {
		$query = substr($query,0,$strlen-4); // Xoa ' OR ' thua o cuoi query
		$query = $query . ") ";
	} else {
		$query = "SELECT * FROM posts WHERE id=0 "; // Khong co post nao
	}
}

//echo $query;