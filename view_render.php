<?php 

	function view($link, $vars = array())
	{
		require ('app/templates/' . $link . '.php');
	}