<?php

session_start();

define('db_host', 'localhost');
define('db_username', 'root');
define('db_password', '');
define('db_name', 'beyart-jpg');
define('db_port', 3307);


$conn = mysqli_connect(db_host, db_username, db_password, db_name, db_port);


if (isset($_POST['register'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passAgain = $_POST['checkPass'];

	$userUnique = "SELECT * FROM admin_table WHERE username = '$username'";
	$runCheck = mysqli_query($conn, $userUnique);
	if (mysqli_num_rows($runCheck) > 0) {
		$_SESSION['status'] = "Username already taken. Please try again.";
		$_SESSION['statCode'] = "error";
        header('Location: registration.php'); 
	}
	else{
		if ($password === $passAgain) {
			$query = "INSERT INTO admin_table (username, email, password) VALUES ('$username', '$email', '$password')";
			$res = mysqli_query($conn, $query);


			if ($res) {
				$_SESSION['success'] = "Admin has been added";
				header('Location: registration.php');
			}
			else {
				$_SESSION['status'] = "Admin has not been added";
				header('Location: registration.php');
			}
		}
		else {
			$_SESSION['status'] = "Passwords do not match. Please try again";
			header('Location: registration.php');
		}
	
	}
}
?>