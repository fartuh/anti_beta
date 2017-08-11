<?php 
	


if(!isset($_POST['search'])){
	echo "error";
	exit();
}

session_start();

if($_POST['search'] != '11sindima11'){
	echo "hi";
	exit();
}

$_SESSION['admin'] = 'true';
header('Location: admin');

/*
$search = $_POST['search'];
$link = mysqli_connect("localhost", "root", "1111", "blog");
mysqli_query($link, "SET NAMES utf8");
$q = mysqli_query($link, "SELECT `body` FROM `posts` WHERE `body` = $search ");
mysqli_close($link);
*/
