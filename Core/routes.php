<?php

use App\Controllers\UrlController;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

$router         = new League\Route\Router;

$router->get('urls/list' , function(ServerRequestInterface $request): ResponseInterface{
	//var_dump($request, $this);
	$controller = new UrlController($request);
	return new \Nyholm\Psr7\Response();
});

$router->get('urls' , 'App\Controllers\UrlController::index');
$router->post('urls' , function(ServerRequestInterface $request): ResponseInterface{
	//dd($request, $this);
	return new \Nyholm\Psr7\Response();
});

return $router;