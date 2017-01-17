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

	public function get($uri, $controller)
	{		
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct()
	{
		$uri = trim($_SERVER['REQUEST_URI'], '/');
		$method = $_SERVER['REQUEST_METHOD'];
		require $this->routes[$method][$uri];
	}
}