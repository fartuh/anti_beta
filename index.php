<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "system.php";

require "app/controller.php";

$con = new Controller("index");

$con->main();

?>
