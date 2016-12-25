<?php

/**
* HomeController class
*/
class HomeController
{
	
	public function index()
	{
		return require 'app/views/index.view.php';
	}

	public function about()
	{
		return require 'app/views/about.view.php';
	}

	public function users()
	{
		return require 'app/views/users.view.php';
	}

	public function store()
	{
		die(var_dump());
	}
}