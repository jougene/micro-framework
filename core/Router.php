<?php

/**
* Router class
*/
class Router
{
	protected $routes = [
		'GET' => [],
		'POST' => []
	];

	public static function load($file)
	{
		$router = new static;

		require $file;

		return $router;
	}

	public function get($uri, $controller)
	{		
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct($uri, $method)
	{
		return $this->routes[$method][$uri];
	}
}