<?php
include("../connect.php");
//Submit information
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$passwordConfirm = $_POST['passwordConfirm'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$avatar = "default.png";
	$uploadOk = 1;

	$query = "SELECT username FROM user WHERE username='$username'";
	$result = mysqli_query($connect,$query);

	//Confirm the wrong password
	if($password != $passwordConfirm) {
		$alert = "Xác nhận mật khẩu không khớp!";
		$uploadOk = 0;
	}

	if(strlen($password) < 5) {
		$alert = "Mật khẩu phải chứa ít nhất 5 ký tự!";
		$uploadOk = 0;	
	}

	if(strlen($username) < 5) {
		$alert = "Tên đăng nhập phải chứa ít nhất 5 ký tự!";
		$uploadOk = 0;	
	}

	//Check if the username were already existed
	if(mysqli_num_rows($result) != 0) {
		$alert = "Tên đăng nhập đã được sử dụng!";
		$uploadOk = 0;
	}

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$alert = "Vui lòng nhập địa chỉ email hợp lệ!"; 
		$uploadOk = 0;
	}

	if($uploadOk == 0) {
		header("Location: ../../Index.php?signUpAlert=$alert");
	} elseif($uploadOk == 1) {
		$alert = "Đăng ký thành công!";
		$query = "INSERT INTO user(username,password,address,phone,email,avatar) 
				  VALUES ('$username','$password','$address','$phone','$email','$avatar')";
		$result = mysqli_query($connect,$query);
		echo $query;
		if($result) {
			header("Location: ../../Index.php?signUpSuccess=$alert");
		}
	}
}

function string_length($x) {
	if(strlen($x) < 5) {
		$q = 0;
	} else {
		$q = 1;
	}
	return $q;
}

function password_confirm($p,$c) {
	if($p != $c) {
		$q = 0;
	} else {
		$q = 1;
	}
	return $q;
}
?>