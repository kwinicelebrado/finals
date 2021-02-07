<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/finals/database/connection.php');

  session_start();

  //comm type & price
  $commtype="";
  $commprice="";
  $commdesc="";
  $add=""; 
  //$errors= array();
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {	

  	$image = $_FILES['image']['name'];
  	// image file directory
  	$target = "order-images/".basename($image);
    // inputs
    $commtype = ($_POST['commtype']);
    $commprice = ($_POST['commprice']);
    $commdesc = ($_POST['commdesc']);
    $add = ($_POST['add']);

  	// Create database connection
  	$db = mysqli_connect(db_host, db_username, db_password, db_name, db_port);
    $sql = "INSERT INTO commsheet (comm_type, price, image, comm_desc, additional) VALUES ('$commtype', '$commprice', '$image', '$commdesc', '$add')";
    	mysqli_query($db, $sql);

      $_SESSION['comms']= $commtype;
 
    	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    		$msg = "Image uploaded successfully";
    	}else{
    		$msg = "Failed to upload image";
    	}
    //}
  }






?>