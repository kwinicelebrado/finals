<?php

// session_start();
include('regConnection.php');
include('including/header.php');
include('including/navBar.php'); 
include('including/function.php'); 

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="add">
		
	</div>
	<div class="container">
	<form method="post" action="registration.php">
		<div class="form-content">
			<label>Username</label>
			<input type="text" name="username">
		</div>

		<div class="form-content">
			<label>Email</label>
			<input type="email" name="email">
		</div>

		<div class="form-content">
			<label>Password</label>
			<input type="password" name="password">
		</div>

		<div class="form-content">
			<label>Confirm Password</label>
			<input type="password" name="checkPass">
		</div>
		
		<div class="form-content">
			<button type="submit" name="exit">Exit</button>
			<button type="submit" name="register">Register</button>
		</div>
	</form>

	<?php

	if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
		echo '<h2> '.$_SESSION['success'].' </h2>';
		unset($_SESSION['success']);
	}

	if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
		echo '<h2> '.$_SESSION['status'].' </h2>';
		unset($_SESSION['status']);
	}

	?>

	<div class="Table">
		<table class="table-content" id="tableData" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>Username</th>
					<th>Role</th>
					<th>Last Login</th>
				</tr>
			</thead>
			
		</table>
	</div>
	
</div>
</body>
</html>








































<?php

include('including/footer.php'); 

?>