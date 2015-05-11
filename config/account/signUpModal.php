<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width:400px">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Đăng ký</h4>
			</div>
		
			<div class="modal-body">
				<?php if(isset($_GET["signUpAlert"])) {?>
					<div class="alert alert-danger" role="alert" style="margin-left:20px;margin-right:20px">
						<span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
						<?php echo $_GET["signUpAlert"]?>
					</div>
				<?php }?>

				<p align="center" class="text-primary"><i>Mọi thông tin đều là bắt buộc.</i></p>
				<br>

				<form method="post" action="config/account/signUpProcess.php" enctype="multipart/form-data" id="signupform">
					<div class="form-group">
						<label for="username2">Tên đăng nhập:</label>
						<input type="text" id="username2" name="username" maxlength="15" class="form-control" style="width:auto" placeholder="Nhập tên" required autofocus>
					</div>

					<div class="form-group">
						<label for="password">Mật khẩu:</label>
						<input type="password" id="password" name="password" maxlength="15" class="form-control" style="width:auto" placeholder="Nhập mật khẩu" required>
					</div>

					<div class="form-group">
						<label for="passwordConfirm">Xác nhận mật khẩu:</label>
						<input type="password" id="passwordConfirm" name="passwordConfirm" maxlength="15" class="form-control" style="width:auto" placeholder="Nhập mật khẩu" required>
					</div>

					<div class="form-group">
						<label for="address">Địa chỉ:</label>
						<input type="text" is="address" name="address" maxlength="70" class="form-control" style="width:auto" placeholder="Nhập địa chỉ" required>
					</div>

					<div class="form-group">
						<label for="phone">Số điện thoại:</label>
						<input type="number" id="phone" name="phone" min="" max="" class="form-control" style="width:auto" placeholder="Nhập số điện thoại" required>
					</div>

					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Nhập email" style="width:auto" required>
					</div>
				</form>
			</div>
	
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" form="signupform" value="Đăng ký">
			</div>
		</div>
	</div>
</div>

<?php
if(isset($_GET['signUpAlert'])) {?>
	<script>
		$(window).load(function(){
			$('#signup').modal('show');
   		});
   	</script>
<?php }
?>

<script>
$('#signup').on('shown.bs.modal', function () {
	$('#username2').focus()
})
</script>