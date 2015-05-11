<!-- changepassword modal -->
<div class="modal fade" id="changepassword" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width:400px">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Đổi mật khẩu</h4>
			</div>
		
			<div id="profilebody" class="modal-body">
				<form method="post" action="config/profile/changePasswordProcess.php" enctype="multipart/form-data" id="changepasswordform">
					<div class="form-group">
						<label for="password">Mật khẩu cũ:</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu" style="width:auto" required>
					</div>

					<div class="form-group">
						<label for="newpassword">Mật khẩu mới:</label>
						<input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="Nhập mật khẩu" style="width:auto" required>
					</div>

					<div class="form-group">
						<label for="passwordConfirm">Xác nhận mật khẩu mới:</label>
						<input type="password" class="form-control" name="passwordconfirm" id="passwordConfirm" placeholder="Nhập mật khẩu" style="width:auto" required>
					</div>
				</form>
			</div>
	
			<div class="modal-footer">
				<input type="submit" class="btn btn-custom" form="changepasswordform" value="Đổi mật khẩu">
				<button type="button" class="btn btn-default txt-black" data-dismiss="modal" aria-label="Close">Bỏ qua</button>
			</div>
		</div>
	</div>
</div>

<script>
$('#changepassword').on('shown.bs.modal', function () {
	$('#password').focus()
})
</script>