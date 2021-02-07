<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/finals/database/connection.php');
$msg4 = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {	

  	$files = $_FILES['files']['name'];
    $desc = $_POST['desc'];
  	$target4 = "about_profile/".basename($files);

  	// Create database connection
  	$db = mysqli_connect(db_host, db_username, db_password, db_name, db_port);
  	
    $sql1 = "SELECT * FROM about_profile";
    $res = $db->query($sql1);
    if ($res->num_rows > 0) {
          $sql = "UPDATE about_profile SET profile = '$files', info = '$desc'";
        }else{
          $sql = "INSERT INTO about_profile (profile, info) VALUES ('$files', '$desc')";
    }
  	
  	if (move_uploaded_file($_FILES['files']['tmp_name'], $target4)) {
  		$msg4 = "Image uploaded successfully";
  	}else{
  		$msg4 = "Failed to upload image";
  	}
  }
?>

