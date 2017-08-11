<?php
session_start();
if (isset($_POST['login']) && $_POST['login'] == "Natali") {
	$_SESSION['panel'] = "true";
	header('Location: panel');
}