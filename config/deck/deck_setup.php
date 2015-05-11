<?php
$state = 1;
if(isset($_GET['state'])) {
	$state = $_GET['state'];
}
?>

<!--AJAX-->
<script>
var str = "config/deck/deck_card.php?state=<?php echo $state?>"

$(document).ready(function() {
	<?php if($state == 1){?>
		$("#mypost").attr("class","btn btn-custom");
		$("#mypost").attr("href","Deck.php");
	<?php }?>

	<?php if($state == 2){?>
		$("#bookmark").attr("class","btn btn-custom");
		$("#bookmark").attr("href","Deck.php");
	<?php }?>

	<?php if($state == 3){?>
		$("#cart").attr("class","btn btn-custom");
		$("#cart").attr("href","Deck.php");
	<?php }?>

	$("#deck").load(str);
});
</script>