<?php

use DI\Container;
use DI\Bridge\Slim\Bridge as SlimAppFactory; //will bridge slim app with service container
use App\Providers\ServiceProvider;

$app = SlimAppFactory::create(new Container);

ServiceProvider::setup($app, config('app.providers'));

return $app;
