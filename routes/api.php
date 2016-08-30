<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

/** @type Router $router */

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$router->get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
