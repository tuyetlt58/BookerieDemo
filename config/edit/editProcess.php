<?php
include("../connect.php");
//Submit information
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$postid = $_GET['postid'];
	$title = $_POST['title'];
	$quality = $_POST['quality'];
	$oprice = $_POST['oprice'];
	$sprice = $_POST['sprice'];
	$des = $_POST['des'];
//	$image = basename($_FILES["fileToUpload"]["name"]);

//	upload_image();
	$query = "UPDATE posts SET name='$title',quality='$quality',oprice='$oprice',sprice='$sprice' WHERE id='$postid'";
	$result = mysqli_query($connect,$query);
	header("Location: ../../Main.php");
}

/*
function upload_image() {
	$target_dir = "image_upload/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
    	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    	if($check !== false) {
	        //echo "File is an image - " . $check["mime"] . ".";
        	$uploadOk = 1;
    	} else {
        	//echo "File is not an image.";
        	$uploadOk = 0;
    	}
	}

	// Check if file already exists
	if (file_exists($target_file)) {
    	echo "Sorry, file already exists.";
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
	    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    //echo "Sorry, your file was not uploaded.";
	// If everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    	} else {
	        //echo "Sorry, there was an error uploading your file.";
	    }
	}
}*/
?>