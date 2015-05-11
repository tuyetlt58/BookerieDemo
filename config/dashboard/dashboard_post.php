<?php
session_start();
include("../connect.php");
include("dashboard_select.php");

$result = mysqli_query($connect,$query);
$num_post = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
	$postid = $row["id"];
	$userid = $row["userid"];
	$title = $row["name"];
	$sprice = $row["sprice"];
	$quality = $row["quality"];
	switch($quality) {
		case "1":
		$quality = "Mới hoàn toàn"; break;
		case "2":
		$quality = "Như mới"; break;
		case "3":
		$quality = "Rất tốt"; break;
		case "4":
		$quality = "Tốt"; break;
		case "5":
		$quality = "Chấp nhận được"; break;
		case "6":
		$quality = "Rất cũ"; break;
	}
	$image = $row["image"];
	$sprice = number_format($sprice,0,'',',');?>

	<div class="thumbnail col-md-10" style="padding:0px">
		<!-- Buttons -->
		<?php if($_SESSION['userid'] != 0) {?>
			<div class="btn-group btn-group-md btn-group-justified toolbar">
				<a onclick="heart(<?php echo $postid?>)" id="heart<?php echo $postid?>" class="btn no-border btn-noradius-left">
					<span class="badge" id="badge_heart<?php echo $postid?>"></span>
					<span class="glyphicon glyphicon-heart" aria-hidden="true" title="Thích"></span>
				</a>

				<a onclick="lineup(<?php echo $postid?>)" id="lineup<?php echo $postid?>" class="btn no-border">
					<span class="badge" id="badge_lineup<?php echo $postid?>"></span>
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" title="Đặt gạch"></span>
				</a>

				<a onclick="bookmark(<?php echo $postid?>)" id="bookmark<?php echo $postid?>" class="btn no-border">
					<span class="glyphicon glyphicon-bookmark" aria-hidden="true" title="Đánh dấu"></span>
				</a>

				<a onclick="bump(<?php echo $postid?>)" id="bump<?php echo $postid?>" class="btn">
					<span class="glyphicon glyphicon-chevron-up" aria-hidden="true" title="Đẩy lên"></span>
				</a>

				<a id="edit<?php echo $postid?>" data-toggle="modal" data-target="#edit" data-postid="<?php echo $postid?>" class="btn">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true" title="Chỉnh sửa"></span>
				</a>

				<a id="delete<?php echo $postid?>" data-toggle="modal" data-target="#delete" data-postid="<?php echo $postid?>" class="btn">
					<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Xóa"></span>
				</a>

				<a href="Info.php?postid=<?php echo $postid?>" class="btn btn-noradius-right" target="_blank">
					<span class="glyphicon glyphicon-info-sign" aria-hidden="true" title="Chi tiết"></span>
				</a>
			</div>
		<?php } else {?>
			<div class="btn-group btn-group-md btn-group-justified">
				<a id="heart<?php echo $postid?>" class="btn btn-noradius-left" disabled>
					<span class="badge" id="index<?php echo $postid?>"></span>
					<span class="glyphicon glyphicon-heart" aria-hidden="true" title="Thích"></span>
				</a>

				<a href="Info.php?postid=<?php echo $postid?>" class="btn" target="_blank">
					<span class="glyphicon glyphicon-info-sign" aria-hidden="true" title="Chi tiết"></span>
				</a>

				<a class="btn" disabled></a>
				<a class="btn" disabled></a>
				<a class="btn" disabled></a>
				<a class="btn" disabled></a>
			</div>
		<?php }?>

		<!-- Image -->
		<?php if($row["image"] != "") {?>
			<img src="image_upload/<?php echo $image;?>" style="width:100%">
		<?php }?>

		<!-- Info -->
		<dl style="padding:10px">
			<dt><?php echo $title?></dt>
			<dd>Giá bán: <?php echo $sprice?>,000 VND</dd>
			<dd>Chất lượng: <?php echo $quality?></dd>
		</dl>
	</div>

	<?php include("setPost.php");?>

	<div class="col-md-1 avatar">
		<img src="image_avatar/<?php echo $avatar?>" class="img-rounded" style="width:60px;height:60px">
	</div>
<?php }?>

<div class="col-md-10 def">
	<button id="previous" class="btn btn-custom">
	<span class="glyphicon glyphicon-triangle-left" aria-hidden="true" title="Xóa"></span> Trước
	</button>

	<button id="next" class="btn btn-custom" style="float:right">
	Sau <span class="glyphicon glyphicon-triangle-right" aria-hidden="true" title="Xóa"></span>
	</button>
</div>

<script>
$(document).ready(function() {
	if(page == 1) {
		$("#previous").css("display","none");
	}

	$("#next").click(function() {
		page = page + 1;
		sorting(curstr,curbtn);
	});

	$("#previous").click(function() {
		page = page - 1;
		sorting(curstr,curbtn);
	});
});
</script>