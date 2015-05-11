<?php
include("../connect.php");
$query = "SELECT userid FROM lineup WHERE postid = $_GET[postid]";
$result = mysqli_query($connect,$query);
?>

<div class="alert alert-info" role="alert" style="margin-bottom:20px">		
	<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
	Danh sách đặt hàng
</div>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

<?php
while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
    $query2 = "SELECT username,address,phone,email FROM user WHERE userid = $row[userid]";
    $result2 = mysqli_query($connect,$query2);
    $row2 = mysqli_fetch_array($result2, MYSQL_ASSOC)?>
  
	<div class="panel">
		<div class="panel-heading" role="tab" id="headingOne">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row['userid']?>" aria-expanded="true" aria-controls="collapse<?php echo $row['userid']?>">
					<?php echo $row2['username']?>
				</a>
			</h4>
		</div>
    	<div id="collapse<?php echo $row['userid']?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			<div class="panel-body">
				<dl>
					<dt>Địa chỉ:</dt>
					<dd><?php echo $row2['address']?></dd>
					<br>
					<dt>Số điện thoại:</dt>
					<dd>0<?php echo $row2['phone']?></dd>
					<br>
					<dt>Email:</dt>
					<dd><?php echo $row2['email']?></dd>
				</dl>
			</div>
		</div>
	</div>

<?php }?>

</div>