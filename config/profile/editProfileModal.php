<?php
$query = "SELECT * FROM user WHERE userid='$_SESSION[userid]'";
$result = mysqli_query($connect,$query);
$row = mysqli_fetch_array($result, MYSQL_ASSOC);
?>

<!-- editprofile modal -->
<div class="modal fade" id="editprofile" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width:400px">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Chỉnh sửa thông tin</h4>
			</div>
		
			<div id="profilebody" class="modal-body">
				<form method="post" action="config/profile/editProfileProcess.php" enctype="multipart/form-data" id="editprofileform">
					<div class="form-group">
						<label for="username">Tên đăng nhập:</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="<?php echo $row['username']?>" style="width:auto" readonly>
					</div>

					<div class="form-group">
						<label for="address">Địa chỉ:</label>
						<input type="text" class="form-control" name="address" id="address" placeholder="Nhập địa chỉ" value="<?php echo $row['address']?>" style="width:auto" required>
					</div>

					<div class="form-group">
						<label for="phone">Số điện thoại:</label>
						<input type="tel" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại" value="<?php echo $row['phone']?>" style="width:auto" required>
					</div>

					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Nhập email" value="<?php echo $row['email']?>" style="width:auto" required>
					</div>
				</form>
			</div>
	
			<div class="modal-footer">
				<input type="submit" class="btn btn-custom" form="editprofileform" value="Lưu thay đổi">
				<button type="button" onclick="cancel()" class="btn btn-default txt-black">Bỏ qua</button>
			</div>
		</div>
	</div>
</div>

<script>
function cancel() {
	// Hide editprofile modal, then show profile modal
	$('#editprofile').modal('hide');
	$('#profile').modal('show');
}
</script>