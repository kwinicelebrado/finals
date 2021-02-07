<?php include("commPicConnect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="commPicStyle.css">
	<title>Commission Upload</title>
</head>
<body>
	<div id="content">
		<?php
			$db = mysqli_connect(db_host, db_username, db_password, db_name, db_port);
			$sql = "SELECT pics FROM comms_table";
			$result = mysqli_query($db, $sql);

    		while ($row = mysqli_fetch_array($result)) {
     	 		echo "<div id='pic_div'>";
      				echo "<img src='picsur/".$row['pics']."' >";
      			echo "</div>";
    		}
  		?>
		<form method="post" action="commPic.php" enctype="multipart/form-data">
			<div>
  	  			<input type="file" name="pic">
  			</div>
			<div>
  				<button type="submit" name="upload">POST</button>
  			</div>
		</form>
	</div>
</body>
</html>