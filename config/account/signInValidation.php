<!-- Hien thi addon -->
<?php
$q = $_REQUEST['q'];
if(strlen($q) > 4) {
	echo "<span class='glyphicon glyphicon-ok' aria-hidden='true' style='color:green'></span>";
} else {
	echo "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>";
}
?>