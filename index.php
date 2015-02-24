<?php

require __DIR__.'/vendor/autoload.php';
$config = include __DIR__.'/app/config.php';

//ORM::configure($config['database']);


$app = new Vacuum\Application($config);

var_dump($app->environment);exit;

$app->get("/", function() use ($app)
{
    $app->render('public/index.php');
});

$app->run();