<?php include("comms_server.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Image Upload</title>
	<link rel="stylesheet" type="text/css" href="fileUpload_style.css">
</head>

<body>
	<div class="content">
		<h1>Commission Sheet File Upload</h1>	
		
		<div class="uploadcontainer">	

			<form id="form" method="post" action="comms_upload.php" enctype="multipart/form-data">
		
				<label class="uploadform">Upload Photo</label>	
				<label class="custom-file-upload" for="file-upload">Browse Files</label>
					<input type="file" name="image" id="file-upload"/><br>
	  			<label class="uploadform">Commission Type</label>
	  				<input type="text" name="commtype" size="50" required><br>
	  			<label class="uploadform">Price</label>
	  				<span class="currency">$</span>
	  				<input type="text" name="commprice" maxlength="15" size="25" required><br>
	  			<label class="uploadform">Description</label>
	  				<textarea type="textfield" name="commdesc" required></textarea><br>
	  			<label class="uploadform">Additional Character Price</label>
	  				<span class="currency">$</span>
	  				<input type="text" name="add" size="25" required><br>		
				
				<div class="btn">
	  				<button type="submit" name="submit" id="submit">Submit</button>
				</div>
	  			
			</form>
		</div>
  	
	  	<div class="display_img">
	  		<h2>Uploaded Images</h2>
				<?php
				//DISPLAY IMAGES
					$db = mysqli_connect(db_host, db_username, db_password, db_name, db_port);
					$sql = "SELECT * FROM commsheet";
					$result = mysqli_query($db, $sql);

			    	while ($row = mysqli_fetch_array($result)) {
			     	 	echo "<div class='img_div'>";
			      			echo "<img src='order-images/".$row['image']."' >";
			      				;
			      		echo "</div>";
			    	}
			  	?>
	  	</div>




	</div>
</body>
</html>