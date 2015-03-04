<?php

namespace Vacuum;

use \Slim\Slim as Slim;
use \Slim\Extras\Views\Twig as Twig;

class Application extends Slim
{
	public $database;
	private $routes;

	public function __construct(array $config = array())
	{
		parent::__construct($config);

		//$this->router = new \Vacuum\Router($congig['routes']);

		$this->container->singleton('database', function () use ($config) {
			return new \Vacuum\Database\Database($config['database']);
		});
	}

}

