<?php

use App\Support\Route;

Route::get('/', 'WelcomeController@index')->add(
    new \App\Http\Middleware\ExampleWebMiddleware
);
Route::get('/welcome/{name}/{id}', 'WelcomeController@show');
