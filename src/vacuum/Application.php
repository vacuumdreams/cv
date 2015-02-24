<?php

namespace Vacuum;

use \Slim\Slim as Slim;

class Application extends Slim
{
	public $database;
	private $routes;

	public function __construct(array $config = array())
	{
		parent::__construct($config);

		$this->routes = $congig['routes'];

		$this->container->singleton('database', function () use ($config) {
			return new \Vacuum\Database\Database($config['database']);
		});
	}

}

