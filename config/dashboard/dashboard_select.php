<?php
$userid = $_SESSION['userid'];
$search = $_GET['search'];
$order = $_GET['order'];
$dir = $_GET['dir'];
$state = $_GET['state'];
$post_per_page = 10;
$page = ($_GET['page']-1)*$post_per_page;

$query = "SELECT * FROM posts ";
$set_state_1 = "userid = '$userid' ";
$set_search = "name LIKE '%$search%' ";
$set_order = "ORDER BY $order $dir ";
$set_page = "LIMIT $post_per_page OFFSET $page";

if($state == 0) {
	if($search == "") {
		// Do nothing
	} else {
		$query = $query . "WHERE " . $set_search;
	}
}

// Sach cua toi
if($state == 1) {
	if($search == "") {
		$query = $query . "WHERE " . $set_state_1;
	} else {
		$query = $query . "WHERE " . $set_state_1 . "AND " . $set_search;
	}
}

// Danh dau
if($state == 2 || $state == 3) {
	if($state == 2) {
		$query2 = "SELECT * FROM bookmark WHERE userid='$_SESSION[userid]'";
	} else {
		$query2 = "SELECT * FROM lineup WHERE userid='$_SESSION[userid]'";
	}
	$result2 = mysqli_query($connect,$query2);

	$query = $query . "WHERE (";
	while($row2 = mysqli_fetch_array($result2, MYSQL_ASSOC)) {
		$query = $query . "id=" . $row2["postid"] . " OR ";
	}
	$strlen = strlen($query);
	if(substr($query,$strlen-4) == " OR ") {
		$query = substr($query,0,$strlen-4); // Xoa ' OR ' thua o cuoi query
		$query = $query . ") ";
		if($search != "") {
			$query = $query . "AND " . $set_search;
		}
	} else {
		$query = "SELECT * FROM posts WHERE id=0 "; // Khong co post nao
	}
}

$query = $query . $set_order . $set_page;

// echo $query;

// Thong bao dang tim kiem
if($search != "") {?>
	<div class="col-md-10 alert alert-info" role="alert" style="margin:0px;margin-bottom:20px">
		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		Kết quả tìm kiếm cho: <b><?php echo $search;?></b>
		<a href="Main.php?state=<?php echo $state?>" style="float:right"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
	</div>
<?php }
?>