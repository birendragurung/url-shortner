<?php
$router         = new League\Route\Router;

$router->get('urls' , 'App\Controllers\UrlController::index');
$router->post('urls' , 'App\Controllers\UrlController::store');
$router->put('urls/{id}' , 'App\Controllers\UrlController::update');
$router->get('t/{tiny_url}', 'App\Controllers\UrlController::visit');

return $router;