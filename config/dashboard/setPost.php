<?php
	//Disable some buttons
	if($userid != $_SESSION["userid"]) {?>
		<script>
			$("document").ready(function() {
				$("#bump<?php echo $postid?>").addClass("disabled");
				$("#edit<?php echo $postid?>").addClass("disabled");
				$("#delete<?php echo $postid?>").addClass("disabled");
			});
		</script>
	<?php }

	//Highlight buttons
	$query_h = "SELECT * FROM heart WHERE userid='$_SESSION[userid]' AND postid='$postid'";
	$result_h = mysqli_query($connect,$query_h);
	$rownum_h = mysqli_num_rows($result_h);
	if($rownum_h != 0) {?>
		<script>
			$("document").ready(function() {
				$("#heart<?php echo $postid?>").addClass("btn-danger");
			});
		</script>
	<?php }

	$query_l = "SELECT * FROM lineup WHERE userid='$_SESSION[userid]' AND postid='$postid'";
	$result_l = mysqli_query($connect,$query_l);
	$rownum_l = mysqli_num_rows($result_l);
	if($rownum_l != 0) {?>
		<script>
			$("document").ready(function() {
				$("#lineup<?php echo $postid?>").addClass("btn-warning");
			});
		</script>
	<?php }

	$query_bm = "SELECT * FROM bookmark WHERE userid='$_SESSION[userid]' AND postid='$postid'";
	$result_bm = mysqli_query($connect,$query_bm);
	$rownum_bm = mysqli_num_rows($result_bm);
	if($rownum_bm != 0) {?>
		<script>
			$("document").ready(function() {
				$("#bookmark<?php echo $postid?>").addClass("btn-success");
			});
		</script>
	<?php }

	// Lay so nguoi 'thich'
	$query_hx = "SELECT * FROM heart WHERE postid='$postid'";
	$result_hx = mysqli_query($connect,$query_hx);
	$rownum_hx = mysqli_num_rows($result_hx);
	if($rownum_hx != 0) {?>
		<script>
			$("document").ready(function() {
				$("#badge_heart<?php echo $postid?>").text("<?php echo $rownum_hx?>");
			});
		</script>
	<?php }

	$query_lx = "SELECT * FROM lineup WHERE postid='$postid'";
	$result_lx = mysqli_query($connect,$query_lx);
	$rownum_lx = mysqli_num_rows($result_lx);
	if($rownum_lx != 0) {?>
		<script>
			$("document").ready(function() {
				$("#badge_lineup<?php echo $postid?>").text("<?php echo $rownum_lx?>");
			});
		</script>
	<?php }

	// Lay avatar
	$query_a = "SELECT avatar FROM user WHERE userid='$userid'";
	$result_a = mysqli_query($connect,$query_a);
	$row_a = mysqli_fetch_array($result_a, MYSQL_ASSOC);
	$avatar = $row_a['avatar'];
?>