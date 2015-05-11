<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width:400px">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Đăng nhập</h4>
			</div>
		
			<div class="modal-body">
				<?php if(isset($_GET["signInAlert"])) {?>
					<div class="alert alert-danger" role="alert">
						<span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
						<?php echo $_GET['signInAlert']?>
					</div>
				<?php }

				if(isset($_GET["signUpSuccess"])) {?>
					<div class="alert alert-success" role="alert">
						<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
						<?php echo $_GET['signUpSuccess']?>
					</div>
				<?php }?>

				<form method="post" action="config/account/signInProcess.php" id="signinform">
					<div class="form-group">
						<label>Tên đăng nhập:</label>
						<div class="input-group">
							<input type="text" onkeyup="signinvld1(this.value)" id="username1" name="username" placeholder="Nhập tên" class="form-control" required autofocus>
							<span class="input-group-addon" id="signinaddon1">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
							</span>
						</div>
					</div>
			
					<div class="form-group">
						<label>Mật khẩu:</label>
						<div class="input-group">
							<input type="password" onkeyup="signinvld2(this.value)" class="form-control" id="signinpassword"  name="password" placeholder="Nhập mật khẩu" required>
							<span class="input-group-addon" id="signinaddon2">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
							</span>
						</div>
					</div>
				</form>
				<br>
				<a href="#">Quên mật khẩu?</a>
				<p>Chưa có tài khoản? <span onclick="signup()" style="color:blue">Đăng ký</span> ngay.</p>
			</div>
	
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" form="signinform" value="Đăng nhập">
			</div>
		</div>
	</div>
</div>

<?php
if(isset($_GET['signInAlert']) || isset($_GET['signUpSuccess'])) {?>
	<script>
		$('#signin').modal('show');
   	</script>
<?php }
?>

<script>
$('#signin').on('shown.bs.modal', function () {
	$('#username1').focus();
})

// Mo modal signUp
function signup() {
	$('#signin').modal('hide');
	$('#signup').modal('show');
}

// Thay doi addon cua input nhap ten dang nhap
function signinvld1(string) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("signinaddon1").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "config/account/signInValidation.php?q=" + string, true);
	xmlhttp.send();
}

// Thay doi addon cua input nhap mat khau
function signinvld2(string) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("signinaddon2").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "config/account/signInValidation.php?q=" + string, true);
	xmlhttp.send();
}
</script>