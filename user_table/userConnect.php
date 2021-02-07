<?php
//INITIALIZE DATABASE
define('db_host', 'localhost');
define('db_username', 'root');
define('db_password', '');
define('db_name', 'beyart-jpg');
define('db_port', 3307);


session_start();

$fullName = "";
$username = "";
$email = "";
$error = array();

//CONNECT DATABASE
$conn = new mysqli(db_host, db_username, db_password, db_name, db_port);

//when register button is clicked
	if (isset($_POST['register'])) {
		$fullName = ($_POST['fullName']);
		$username = ($_POST['username']);
		$email = ($_POST['email']);
		$password = ($_POST['password']);
		$passAgain = ($_POST['passAgain']);


		if (empty($fullName)) {
			array_push($error, "Name required");
		}
		if (empty($username)) {
			array_push($error, "Username required");
		}
		if (empty($email)) {
			array_push($error, "Email required");
		}
		if (empty($password)) {
			array_push($error, "Password required");
		}

		if ($password != $passAgain) {
			array_push($error, "Password do not match! Please try again.");
		}

		//CHECK IF USERNAME IS UNIQUE
		$userUnique = "select * from users_table where username=? LIMIT 1";
		$stmt = $conn->prepare($userUnique);
		$stmt->bind_param('s', $username);
		$stmt->execute();
		$res = $stmt->get_result();
		$numUser = $res->num_rows;
		$stmt->close();

		if ($numUser > 0) {
		 	$error['username'] = "Username already exists";
		 } 


		if (count($error) == 0) {
			$sql = "insert into users_table (name, username, email, password) values ('$fullName', '$username', '$email', '$password')";
			mysqli_query($conn, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['successful'] = "Logged in successful!";
			header('location: index.php');
		}
	}
		//LOGIN
		if (isset($_POST['login'])) {
			$username = ($_POST['username']);
			$password = ($_POST['password']);
			if (empty($username)) {
				array_push($error, "Username required");
			}
			if (empty($password)) {
				array_push($error, "Password required");
			}
			if (count($error) == 0) {
				$sql2 = "select * from users_table where username = '$username' and password = '$password'";
				$outcome = mysqli_query($conn, $sql2);
				if (mysqli_num_rows($outcome) == 1) {
					$_SESSION['username'] = $username;
					$_SESSION['successful'] = "Logged in successful!";
					header('location: index.php');
				}else{
					array_push($error, "Your username and password don't match. Please try again.");			
				}
			}}

		//LOGOUT
		if (isset($_GET['logout'])) {
			session_destroy();
			unset($_SESSION['username']);
			header('location: login.php');
		}
		
?>