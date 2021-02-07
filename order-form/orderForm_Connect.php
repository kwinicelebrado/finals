<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/finals/database/connection.php');

$msg = "";

//DATABASE CONNECTION
  $conn = new mysqli(db_host, db_username, db_password, db_name, db_port);

	if(isset($_POST['submit'])){
    if(isset($_POST['comm_type'])){
    $comm_type = $_POST['comm_type'];}
    if(isset($_POST['background'])){
    $background = $_POST['background'];}
    $fullBg = $_POST['fullBg'];
    if(isset($_POST['addons'])){
    $addons = $_POST['addons'];}
		$props = $_POST['props'];
		$enhance = $_POST['enhance'];
		$deadline = $_POST['deadline'];
		$deadLine = date("Y-m-d", strtotime($deadline));
    $image = $_FILES['image']['name'];
    $target = "images/".basename($image);
    $image2 = $_FILES['image2']['name'];
    $target2 = "images/".basename($image2);
	
		$stmt = $conn->prepare("insert into order_table(comm_type, image1, background, fullBg, image2, addons, props, enhance, deadline) values (?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssss", $comm_type, $image, $background, $fullBg, $image2, $addons, $props, $enhance, $deadLine);
		$stmt->execute();
		echo "Registration Successfull...";

      $sql = "select image1 from order_table";
      $result = mysqli_query($conn, $sql);
      if(move_uploaded_file($_FILES["image"]["tmp_name"], $target)) 
      {
        echo "<img src=".$target." height=300 width=300 />";
      }else {
        echo "Error !!";
      }
		  $stmt->close();
		  $conn->close();
	}

?>