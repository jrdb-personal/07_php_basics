<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<?php
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		$uploadStatus = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["file"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
			} 
			else {
				echo "File is not an image.";
				$uploadStatus = 0;
			}
		}

		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadStatus = 0;
		}
		// Check file size
		if ($_FILES["file"]["size"] > 1000000) {
			echo "Sorry, your file is too large.";
			$uploadStatus = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "pdf" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadStatus = 0;
		}
		
		// Check if $uploadStatus is set to 0 by an error
		if ($uploadStatus == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
				echo $_FILES['file']['error'];
			}
		}
	?>
</body>
</html>