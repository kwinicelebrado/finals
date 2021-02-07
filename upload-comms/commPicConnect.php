<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/finals/database/connection.php');
  // Initialize message variable
  $msg3 = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {	

  	$image3 = $_FILES['pic']['name'];
  	$target3 = "picsur/".basename($image3);

  	// Create database connection
  	$db = mysqli_connect(db_host, db_username, db_password, db_name, db_port);
  	
  	$sql = "INSERT INTO comms_table (pics) VALUES ('$image3')";
  	mysqli_query($db, $sql);
  	if (move_uploaded_file($_FILES['pic']['tmp_name'], $target3)) {
  		$msg3 = "Image uploaded successfully";
  	}else{
  		$msg3 = "Failed to upload image";
  	}
  }
?>