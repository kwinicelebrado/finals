<?php
	include('userConnect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="regStyle.css">
	<title>User registration</title>
</head>
<body>
	<div class="header">
		<h1>Register</h1>
	</div>

	<form method="post" action="register.php">
		<?php
			include('errorList.php');
		?>
		<div class="inputs">
			<label>Name</label>
			<input type="text" name="fullName">
		</div>
		<div class="inputs">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="inputs">
			<label>Email</label>
			<input type="email" name="email">
		</div>
		<div class="inputs">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="inputs">
			<label>Confirm Password</label>
			<input type="password" name="passAgain">
		</div>
		<div class="inputs">
			<button type="submit" name="register" class="regBtn">Sign up</button>
		</div>
	</form>
</body>
</html>