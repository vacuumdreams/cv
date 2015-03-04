<?php

namespace Vacuum\Router;

use \Slim\Route as Route;

class Router 
{
	private $routes;

	public function __construct(array $routes)
	{
		$this->add($routes);
	}

	private function add(array $routes)
	{
		foreach($routes as $route => $attrSet){
			$attrSet = $this->setAttributes($attrSet);

			$routeFunction = $this->process($attrSet);
			$routeObject = new Route($route, $routeFunction);
			$routeObject->setHttpMethods(strtoupper($attrSet['method']));
			array_push($this->routes, $routeObject);
		}

		return $this;
	}

	// takes $attrStr = 'path@METHOD'
	// returns [path] = $path, [method] = $method 
	private function setAttributes($attrSet){
		$attrKeys = array('path', 'method');
		if (strpos($attrSet, "@") !== false) {
            $set = array_combine($attrKeys, explode("@", $attrSet, 2));
        } else {
        	$set = array_combine($attrKeys, array($attrSet, 'any');
        }

        if (strpos($attrSet, ':') !== false) {
        	$vars = 
        }
	}

	private function process($path)
	{
		return function() use ($path){

		}
	}
}