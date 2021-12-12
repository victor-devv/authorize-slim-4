<?php

use DI\Container;
//use Slim\Factory\AppFactory;
use DI\Bridge\Slim\Bridge as SlimAppFactory; //will bridge slim app with service container


require __DIR__ . '/../vendor/autoload.php';

$container = new Container;

$settings = require __DIR__ . '/../app/settings.php';
$settings($container);

//AppFactory::setContainer($container);

//$app = AppFactory::create();

$app = SlimAppFactory::create($container);


$middleware = require __DIR__ . '/../app/middleware.php';
$middleware($app);

$routes = require __DIR__ . '/../app/routes.php';
$routes($app);

$app->run();