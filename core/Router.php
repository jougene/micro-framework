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
		$this->routes['GET'][$uri] = $controller
	}

	public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller
	}
}