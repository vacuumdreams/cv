<?php


return array(
	'debug' => true,
	'mode' => 'development',

    'log.enabled' => true,
    'log.level' => \Slim\Log::DEBUG,
	'log.writer' => new \Slim\Logger\DateTimeFileWriter(array(
            'path' => __DIR__.'/log/',
            'name_format' => 'Y-m-d',
            'message_format' => '%label% - %date% - %message%'
		)),

	//'view' => new \Slim\Views\Twig(),
	'templates.path' => dirname(__DIR__).'/public/',

	'cache' => __DIR__.'/cache/',

	'routes' => array(
			'main' => '/index@GET',
			'studies' => '/studies@GET',
			'work' => '/work@GET',
			'skills' => '/skills@GET',
			'hobbies' => '/hobbies@GET',
			'portfolio' => '/portfolio@GET',
			'portfolio' => '/portfolio/:name@GET',
			'contact' => '/contact@GET',
			'contact' => '/contact@POST'
		),

	'database' => array(
		'sqlite:./app/database/vacuum.db',
		array('caching', true),
		array('caching_auto_clear', true)

		)

	);