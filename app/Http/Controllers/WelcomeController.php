<?php


namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
class WelcomeController
{
    public function index($response)
    {
        $response->getBody()->write('Welcome Controller, world');

        return $response;
    }

    public function show($response, $name)
    {
        $response->getBody()->write("Welcome {$name}");

        return $response;
    }

    public function showId(Request $request, Response $response, $name, $id)
    {
        $response->getBody()->write("Welcome {$name}, you have an id of {$id}");

        return $response;
    }
}