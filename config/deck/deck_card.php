<?php
session_start();
include("../connect.php");
include("deck_select.php");

$result = mysqli_query($connect,$query);
$num_post = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
	$postid = $row["id"];
	$userid = $row["userid"];
	$title = $row["name"];?>

	<button onclick="card(<?php echo $postid?>)" type="button" class="btn" style="margin-bottom:5px">
		<?php echo $title?>
	</button>
<?php }?>

<script>
function card(postid) {
	$("#board").load("config/deck/board.php?postid=" + postid);
	$("#panel").load("config/deck/panel.php?postid=" + postid);
}
</script>