<?php

require __DIR__.'/vendor/autoload.php';
$config = include __DIR__.'/app/config.php';

$app = new Vacuum\Application($config);


$app->get("/", function() use ($app){
	//echo $app->view->getTemplatesDirectory();
    $app->render('index.php', array('app'=>$app), 200);
});

$app->get('/about', function() use ($app){
	$app->response()->header("Content-Type", "application/json");
    echo json_encode(array('hey'=>'ho'));
});


$app->run();