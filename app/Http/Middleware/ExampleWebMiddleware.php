<?php


namespace App\Http\Middleware;


use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as Handle;
use Slim\Psr7\Response;

class ExampleWebMiddleware
{
    public function __invoke(Request $request, Handle $handler) : Response
    {
        $response = $handler->handle($request);
        $existingBody = (string) $response->getBody();

        $response = new Response;
        $response->getBody()->write("\n Web Middleware: {$existingBody}");

        return $response;
    }
}