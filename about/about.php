<?php include_once($_SERVER['DOCUMENT_ROOT'].'/finals/upload-about/aboutConnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BEYART.JPG</title>
	<link href="aboutStyle.css" rel="stylesheet" type="text/css">
	
</head>

<body>

	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/finals/controls/header.php'); 
	?>



	<div class="box">
	<?php
			$db = mysqli_connect(db_host, db_username, db_password, db_name, db_port);
			$sql = "SELECT profile, info FROM about_profile";
			$result = mysqli_query($db, $sql);

    		while ($row = mysqli_fetch_array($result)) {
     	 		echo "<div class='abt_div'>";
      				echo "<img src='/finals/upload-about/about_profile/".$row['profile']."' >";
      				echo "<h1>ABOUT</h1>";
      				echo "<p>".$row['info']."</p>";
      			echo "</div>";
    		}
  		?>
  		<div class="icons">
  			<a href="https://www.instagram.com/beyart.jpg" target="_blank">
				<img src="/finals/controls/logos/sns-ig.png" alt="instagram" width="40" height="40" ></a>

			<a href="https://www.facebook.com/beyartjpg" target="_blank">
				<img src="/finals/controls/logos/sns-fb.png" alt="facebook" width="40" height="40"></a>

			<a href="https://www.twitter.com/beyartjpg" target="_blank">
				<img src="/finals/controls/logos/sns-twt.png" alt="twitter" width="40" height="40"></a>

			<a href="https://www.deviantart.com/beyartjpg" target="_blank">
				<img src="/finals/controls/logos/sns-da.png" alt="deviant art" width="40" height="40"></a>

			<a href="https://pinterest.ph/beyartjpg/" target="_blank">
				<img src="/finals/controls/logos/sns-pinterest.png" alt="pinterest" width="40" height="40"></a>

			<a href="https://youtube.com/c/Beyartjpg" target="_blank">
				<img src="/finals/controls/logos/sns-yt.png" alt="youtube" width="40" height="40"></a>	

			<a href="mailto:beyartjpg@gmail.com" type="email" target="_blank">
				<img src="/finals/controls/logos/sns-email.png" alt="email" width="40" height="40"></a>
  		</div>
	</div>



	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/finals/controls/footer.php'); 
	?>
	
</body>
</html>