<?php

namespace Vacuum\Router;

use \Slim\Route as Route;

class Router 
{
	$private $routes;

	public function __construct(array $routes)
	{
		$this->add($routes);
	}

	private function add(array $routes)
	{
		foreach($routes as $route => $path){
			$routeFunction = $this->process($path);
			$routeObject = new Route($route, $routeFunction);
			array_push($this->routes, $routeObject);
		}

		return $this;
	}

	// takes $attrStr = 'path@METHOD'
	// returns [path] = $path, [method] = $method 
	private function setAttributes($attrSet){
		$attrKeys = array('path', 'method');
		if (strpos($attrSet, "@") !== false) {
            return array_combine($attrKeys, explode("@", $attrSet, 2));
        } else {
        	return array_combine($attrKeys, array($attrSet, 'any');
        }
	}

	private function process($path)
	{
		return function() use ($path){

		}
	}
}