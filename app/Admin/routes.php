<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('users', 'UsersController@index');

//    $router->get('book', 'BooksController@index');

//    $router->get('type', 'TypesController@index');
//    $router->get('type/create', 'TypesController@create');
//    $router->post('type', 'TypesController@store');
//    $router->delete('type/{id}', 'TypesController@destroy');


//    $router->get('zt', 'ZtsController@index');
//    $router->get('zt/create', 'ZtsController@create');
//    $router->get('zt/{id}/edit', 'ZtsController@edit');
//    $router->put('zt/{id}', 'ZtsController@update');
//    $router->post('zt', 'ZtsController@store');
//    $router->delete('zt/{id}', 'ZtsController@destroy');

    $router->resource('book', BooksController::class);
    $router->resource('type', TypesController::class);
    $router->resource('zt', ZtsController::class);

});
