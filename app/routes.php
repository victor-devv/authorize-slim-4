<?php

use Slim\App;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Http\Controllers\WelcomeController;

return function (App $app) {

//    $app->get('/', function (Request $request, Response $response, $parameters) {
//        $response->getBody()->write('Hello, world');
//
//        return $response;
//    });

    $app->get('/', [WelcomeController::class, 'index']);
    $app->get('/{name}', [WelcomeController::class, 'show']);
    $app->get('/{name}/{id}', [WelcomeController::class, 'showId']);

//    $app->get('/home', function (Request $request, Response $response, $parameters) {
//        $name = 'Victor Devv';
//
//        return view($response, 'auth.home', compact('name'));
//    });

};