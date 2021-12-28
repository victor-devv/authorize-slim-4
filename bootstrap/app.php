<?php

use DI\Container;
use App\Http\HttpKernel;
use DI\Bridge\Slim\Bridge as App; //will bridge slim app with service container

//use Slim\HttpCache\Cache;
//use Slim\HttpCache\CacheProvider;

$app = App::create(new Container);
return HttpKernel::bootstrap($app)->getApplication();


//caching
//$app->add(new Cache('public', 86400));
//
//$cache = new CacheProvider();

