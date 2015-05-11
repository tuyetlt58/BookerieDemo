<?php
session_start();
include("../connect.php");

$image = upload_image();
$query = "UPDATE user SET avatar='$image' WHERE userid='$_SESSION[userid]'";
$result = mysqli_query($connect,$query);
$_SESSION['avatar'] = $image;
header("Location: ../../Main.php");

function upload_image() {
	$img_dir = "../../image_avatar/";
	$img_name = "avatar-" . $_SESSION['userid'];
	$base_name = basename($_FILES["avatar"]["name"]);
	$img_ext = pathinfo($base_name,PATHINFO_EXTENSION);
	$img_file = $img_name . "." . $img_ext;
	$img_link = $img_dir . $img_name . "." . $img_ext;

	$uploadOk = 1;

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
    	$check = getimagesize($_FILES["avatar"]["tmp_name"]);
    	if($check !== false) {
	        //echo "File is an image - " . $check["mime"] . ".";
        	$uploadOk = 1;
    	} else {
        	$alert = "File ảnh không phù hợp!";
        	$uploadOk = 0;
    	}
	}
	/*
	// Check if file already exists
	if (file_exists($target_file)) {
    	$alert = "File ảnh bị trùng tên!";
    	$uploadOk = 0;
	}
	
	// Check file size
	if ($_FILES["avatar"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
    	$uploadOk = 0;
	}
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    $alert = "File ảnh phải có định dạng JPG, JPEG, PNG hoặc GIF!";
	    $uploadOk = 0;
	}
	*/
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    //header("Location: ../../Posting.php?alert=$alert");
	// If everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $img_link)) {
	    	return $img_file;
			echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
    	} else {
	        //echo "Sorry, there was an error uploading your file.";
	    }
	}
}
?>