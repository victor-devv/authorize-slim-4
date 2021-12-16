<?php


/*
 * Autoload global dependencies and allow autoloading local dependencies via use
 * */
require __DIR__ . '/../vendor/autoload.php';

/*
 * Boot up application
 * */
$app = require __DIR__ . '/../bootstrap/app.php';

/*
 * Pass request through the app
 * */
$app->run();
