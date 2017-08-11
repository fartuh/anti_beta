<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start(); 
if (!isset($_SESSION['admin']) || $_SESSION['admin'] != 'true' ) {
	header('Location: ../');
	exit();
}
unset($_SESSION['admin']);
?>

<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	<form method="POST" action="form.php">
		<input type="text" name="login">
		<input type="submit" name="sub">
	</form>
	</body>
</html>