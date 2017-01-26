<?php

namespace App\Core;

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
		if (array_key_exists($uri, $this->routes[$method])) {
			return $this->callAction(
				...explode('@', $this->routes[$method][$uri])
			);
		}
		
		throw new \Exception("No route define for this URI");
	}

	public function callAction($controllerName, $action)
	{
		$controllerFqcn = "App\\Controllers\\{$controllerName}";
		$controller = new $controllerFqcn;
		
		if(! method_exists($controller, $action)) {
			throw new Exception("No '{$action}' method defined in {$controllerName}");
		}

		return $controller->$action();
	}
}