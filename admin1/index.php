<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="adminDesign.css">
	<title>Admin Panel</title>
</head>
<body>

	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/finals/controls/header.php'); 
	?>

	<div class="header">
		<h1>Admin Panel</h1>
	</div>

	<div class="sidebar">
		<ul>
			<li class="drop">
				<a href="javascript:void(0)" class="dropItems">Manage Pages</a>
				<div class="dropChoice">
					<a href="/finals/upload-image/picture.php">Gallery</a>
					<a href="#">Commissioned Works</a>
					<a href="#">About</a>
					<a href="#">FAQ</a>
					<a href="#">Commissioned Information</a>
					<a href="#">Terms of Service</a>
					<a href="#">Order Form</a>
				</div>
			</li>
			<li class="drop">
				<a href="javascript:void(0)" class="dropItems">Manage Users</a>
				<div class="dropChoice">
					<a href="#">Add Users</a>
					<a href="#">Manage Users</a>
				</div>
			</li>
			<li class="drop">
				<a href="javascript:void(0)" class="dropItems">Manage Orders</a>
				<div class="dropChoice">
					<a href="#">Commissioned Works</a>
					<a href="#">About</a>
				</div>
			</li>
		</ul>
	</div>

	<div class="center">
	</div>


	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/finals/controls/footer.php'); 
	?>

</body>
</html>