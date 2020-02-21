<?php
$router         = new League\Route\Router;

$router->get('urls' , 'App\Controllers\UrlController::index');
$router->get('urls/create' , 'App\Controllers\UrlController::create');
$router->post('urls' , 'App\Controllers\UrlController::store');
$router->post('urls/{id}/update' , 'App\Controllers\UrlController::update');
$router->get('t/{tiny_url}', 'App\Controllers\UrlController::visit');
$router->get('urls/{id}/delete' , 'App\Controllers\UrlController::delete');
$router->get('urls/{id}/edit' , 'App\Controllers\UrlController::edit');
return $router;