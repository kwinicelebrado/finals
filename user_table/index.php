<?php include('userConnect.php'); 

	//CANNOT ACCESS IF NOT LOGGED IN
	if (empty($_SESSION['username'])) {
		header('location: login.php');
	}


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="regStyle.css">
	<title>User registration</title>
</head>
<body>
	<div class="header">
		<h1>Home page</h1>
	</div>

	<div class="content">
		<?php if (isset($_SESSION['successful'])): ?>
			<div class="error-succeed">
				<h3>
					<?php
						echo $_SESSION['successful'];
						unset($_SESSION['successful']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<?php if (isset($_SESSION["username"])): ?>
			<p>Welcome <?php echo $_SESSION['username']; ?></p>
			<p><a href="index.php?logout='1'">Logout</a></p>
		<?php endif ?>
	</div>
		
	</form>
</body>
</html>