<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require 'model.php';

class Controller extends System
{
	public
		$page;

	public function __construct($page)
	{
		$this->page = $page;
	}

	public function main()
	{
		echo $this->page;
	}
}