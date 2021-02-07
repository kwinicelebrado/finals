<?php include('userConnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="regStyle.css">
	<title>User registration</title>
</head>
<body>
	<div class="header">
		<h1>Login</h1>
	</div>

	<form method="post" action="login.php">
		<?php
			include('errorList.php');
		?>
		<div class="inputs">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="inputs">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="inputs">
			<button type="submit" name="login" class="regBtn">Login</button>
		</div>
		
	</form>
</body>
</html>