<?php include("aboutConnect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="abtStyle.css">
	<title>Commission Upload</title>
</head>
<body>
	<div id="content">
		<?php
			$db = mysqli_connect(db_host, db_username, db_password, db_name, db_port);
			$sql = "SELECT profile, info FROM about_profile";
			$result = mysqli_query($db, $sql);

    		while ($row = mysqli_fetch_array($result)) {
     	 		echo "<div id='abt_div'>";
      				echo "<img src='about_profile/".$row['profile']."' >";
      				echo "<p>".$row['info']."</p>";
      			echo "</div>";
    		}
  		?>
	<form method="post" action="abtUpload.php" enctype="multipart/form-data">
		<div>
			<input type="file" name="files">
			<textarea name="desc" cols="40" rows="4" placeholder="Description..."></textarea>
		</div>
		<div>
  			<button type="submit" name="upload">Upload Profile</button>
  		</div>
	</form>
</div>
	</div>
</body>
</html>