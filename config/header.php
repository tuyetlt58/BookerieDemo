<?php
if($_SESSION['userid'] != 0) {
	include("/config/profile/profileModal.php");
	include("/config/profile/editProfileModal.php");
	include("/config/profile/changePasswordModal.php");
	include("/config/profile/avatarModal.php");
	include("/config/account/signOutModal.php");
} else {
	include("/config/account/signInModal.php");
	include("/config/account/signUpModal.php");
}
?>

<div class="header" style="position:fixed;z-index:1;width:100%"></div>

<a href="Main.php" style="position:fixed;z-index:2;top:12px;left:20px">
	<img src="image/bookerie.png" height="25px">
</a>

<?php if($_SESSION['userid'] != 0) {?>
	<!-- Da dang nhap -->
	<div style="position:fixed;z-index:1;right:20px;top:2px">
		<span style="padding-right:30px" class="txt"><b><?php echo $_SESSION['username']?></b></span>

		<img src="image_avatar/<?php echo $_SESSION['avatar']?>" style="margin-right:16px;height:36px;width:36px">

		<div class="btn-group btn-group-lg" role="group">
			<button type="button" class="btn txt btn-link">
				<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
			</button>

			<button type="button" class="btn txt btn-link">
				<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
			</button>

			<div class="btn-group btn-group-lg" role="group">
				<button type="button" class="dropdown-toggle btn btn-link txt" data-toggle="dropdown" aria-expanded="false">
					<span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
				</button>

				<ul class="dropdown-menu dropdown-menu-right" role="menu">
					<li><a href="#" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Hướng dẫn sử dụng</a></li>
					<li><a href="#" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Điều khoản</a></li>
					<li><a href="BookRatings.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Cách phân loại sách</a></li>
					<li class="divider"></li>
					<li><a href="#" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-bold" aria-hidden="true"></span> Về Bookery</a></li>
				</ul>
			</div>

			<div class="btn-group btn-group-lg" role="group">
				<button type="button" class="dropdown-toggle btn btn-link txt" data-toggle="dropdown" aria-expanded="false">
					<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
				</button>

				<ul class="dropdown-menu dropdown-menu-right" role="menu">
					<li><a href="#" data-toggle="modal" data-target="#profile"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Thông tin cá nhân</a></li>
					<li><a href="#" data-toggle="modal" data-target="#avatar"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Ảnh đại diện</a></li>
					<li><a href="#" data-toggle="modal" data-target="#changepassword"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Đổi mật khẩu</a></li>
					<li><a href="SetTheme.php"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Giao diện</a></li>
					<li class="divider"></li>
					<li><a href="#" data-toggle="modal" data-target="#signout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Thoát</a></li>
				</ul>
			</div>
		</div>
	</div>
<?php } else {?>
	<!-- Chua dang nhap -->
	<div class="btn-group btn-group-md" style="position:fixed;top:7px;right:20px;z-index:1">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signin">Đăng nhập</button>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signup">Đăng ký</button>
	</div>
<?php }?>

<div class="header"></div>