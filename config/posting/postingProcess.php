<?php
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
include("../connect.php");
//Submit information
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$userid = $_SESSION['userid'];
	$title = $_POST['title'];
	$quality = $_POST['quality'];
	$oprice = $_POST['oprice'];
	$sprice = $_POST['sprice'];
	$des = $_POST['des'];
	$time = date("Y-m-d-H-i-s");
	$image = upload_image($time);

	$query = "INSERT INTO posts(userid,name,quality,oprice,sprice,des,image,time) 
			  VALUES ('$userid','$title','$quality','$oprice','$sprice','$des','$image','$time')";
	$result = mysqli_query($connect,$query);
	if($result) {
		header("Location: ../../Main.php");
	} else {
		header("Location: ../../Main.php?posted=0");
	}
}

function upload_image($time) {
	$img_dir = "../../image_upload/";
	$img_name = "postimage-" . $_SESSION['userid'] . "-" . $time;
	$base_name = basename($_FILES["fileToUpload"]["name"]);
	$img_ext = pathinfo($base_name,PATHINFO_EXTENSION);
	$img_file = $img_name . "." . $img_ext;
	$img_link = $img_dir . $img_name . "." . $img_ext;

	$uploadOk = 1;

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
    	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
	if ($_FILES["fileToUpload"]["size"] > 500000) {
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
	    // header("Location: ../../Posting.php?alert=$alert");
	// If everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $img_link)) {
			return $img_file;
			//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    	} else {
	        //echo "Sorry, there was an error uploading your file.";
	    }
	}
}
?>