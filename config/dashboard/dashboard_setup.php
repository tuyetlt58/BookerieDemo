<?php
//Include modals
if($_SESSION['userid'] != 0) {
	include("/config/posting/postingModal.php");
	include("/config/delete/deleteConfirmModal.php");
	include("/config/edit/editModal.php");
}

// Cai dat ban dau
$search = $search_bar = "";
if(isset($_POST["search"])) {
	$search = $_POST["search"];
	$search_bar = $search;
	$search = str_replace(" ", "+", $search);
}

$state = 0;
if(isset($_GET['state'])) {
	$state = $_GET['state'];
}
?>

<!--Posts fade in when page is loaded-->
<script>
	$(document).ready(function(){
       	$("#div").fadeIn();
	});
</script>

<!-- AJAX -->
<script>
var strset1 = "config/dashboard/dashboard_post.php?";
var strset2 = "&search=<?php echo $search?>&state=<?php echo $state?>"
var str1 = strset1 + "order=time&dir=desc" + strset2;
var str3 = strset1 + "order=sprice&dir=desc" + strset2;
var str4 = strset1 + "order=sprice&dir=asc" + strset2;
var str5 = strset1 + "order=quality&dir=asc" + strset2;
var str6 = strset1 + "order=quality&dir=desc" + strset2;
var curstr = str1;
var curbtn = 1;
var page = 1;

$(document).ready(function() {
	<?php if($state == 1){?>
		$("#mypost").attr("class","btn btn-custom");
		$("#mypost").attr("href","Main.php");
	<?php }?>

	<?php if($state == 2){?>
		$("#bookmark").attr("class","btn btn-custom");
		$("#bookmark").attr("href","Main.php");
	<?php }?>

	<?php if($state == 3){?>
		$("#cart").attr("class","btn btn-custom");
		$("#cart").attr("href","Main.php");
	<?php }?>

	sorting(curstr,curbtn);

	$("#sort1").click(function() {
		curstr = str1;
		curbtn = 1;
		sorting(curstr,curbtn);
	});

	$("#sort3").click(function() {
		curstr = str3;
		curbtn = 3;
		sorting(curstr,curbtn);
	});

	
	$("#sort4").click(function() {
		curstr = str4;
		curbtn = 4;
		sorting(curstr,curbtn);
	});

	
	$("#sort5").click(function() {
		curstr = str5;
		curbtn = 5;
		sorting(curstr,curbtn);
	});

	
	$("#sort6").click(function() {
		curstr = str6;
		curbtn = 6;
		sorting(curstr,curbtn);
	});
});

function sorting(curstr,curbtn) {
	refresh(curstr,curbtn);
	moveTop();
}

function refresh(curstr,curbtn) {
	var str = curstr + "&page=" + page;
	$("#div").load(str);
	activeSort(curbtn);
}

// Chuyen len dau trang
function moveTop() {
	$('html, body').animate({ scrollTop: 0 }, 'fast');
}

// Doi mau nut sap xep
function activeSort(x) {
	for(i=1; i<7; i++) {
		string = "#sort" + i;
		if(i == x) {
			$(string).attr("class","btn btn-custom btn-lg")
		} else {
			$(string).attr("class","btn btn-default no-border")
		}
	}
}
</script>