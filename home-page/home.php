<?php include($_SERVER['DOCUMENT_ROOT'].'/finals/upload-image/pictureConnect.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/finals/login-page/userConnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BEYART.JPG</title>
	<link href="homeStyle.css" rel="stylesheet" type="text/css">
	
</head>

<body>

	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/finals/controls/header.php'); 
	?>


	<?php
	$sql = "SELECT picture FROM picture_table";
	$res = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($res)) {
		echo "<div class='picsur'>";
			echo "<img src='/finals/upload-image/pictures/".$row['picture']."'>";
		echo "</div>";
	}
	?>

	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/finals/controls/footer.php'); 
	?>


</body>
</html>