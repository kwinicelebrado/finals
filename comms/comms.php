<?php include_once($_SERVER['DOCUMENT_ROOT'].'/finals/upload-comms/commPicConnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BEYART.JPG</title>
	<link href="commsStyle.css" rel="stylesheet" type="text/css">
	
</head>

<body>

	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/finals/controls/header.php'); 
	?>


	<?php
			$db = mysqli_connect(db_host, db_username, db_password, db_name, db_port);
			$sql = "SELECT pics FROM comms_table";
			$result = mysqli_query($db, $sql);

    		while ($row = mysqli_fetch_array($result)) {
     	 		echo "<div class='picsur'>";
      				echo "<img src='/finals/upload-comms/picsur/".$row['pics']."' >";
      			echo "</div>";
    		}

	?>



	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/finals/controls/footer.php'); 
	?>

	
</body>
</html>