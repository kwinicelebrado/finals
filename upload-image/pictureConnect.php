<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/finals/database/connection.php');
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {	

  	$image = $_FILES['image']['name'];
  	// image file directory
  	$target = "pictures/".basename($image);

  	// Create database connection
  	$db = mysqli_connect(db_host, db_username, db_password, db_name, db_port);
  	
  	$sql = "INSERT INTO picture_table (picture) VALUES ('$image')";
  	mysqli_query($db, $sql);

  	// $name = $_FILES['file']['name'];  
   //  $temp_name = $_FILES['file']['tmp_name'];  
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }

  // 
  // $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
?>