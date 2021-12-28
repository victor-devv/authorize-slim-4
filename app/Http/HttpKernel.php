<?php


namespace App\Http;

use Boot\Foundation\HttpKernel as Kernel;

class HttpKernel extends Kernel
{
    /*
     * Global Middleware
     *
     * @var array
    */
    public array $middleware = [
        Middleware\ExampleAfterMiddleware::class,
        Middleware\ExampleBeforeMiddleware::class
    ];

    /*
     * Route Group Middleware
     *
     * @var array
    */
    public array $middlewareGroups = [
        'api' => [],
        'web' => []
    ];

}