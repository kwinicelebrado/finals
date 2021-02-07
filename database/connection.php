<?php

define('db_host', 'localhost');
define('db_username', 'root');
define('db_password', '');
define('db_name', 'beyart-jpg');
define('db_port', 3307);

$conn = mysqli_connect(db_host, db_username, db_password, db_name, db_port);

if ($conn->connect_error) {
	die('Database connection error: ' . $conn->connect_error);
}