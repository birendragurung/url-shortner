<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

$router         = new League\Route\Router;

$router->get('urls' , function(ServerRequestInterface $request): ResponseInterface{
	var_dump($request, $this);
	return new \Nyholm\Psr7\Response();
});

$router->post('urls' , function(ServerRequestInterface $request): ResponseInterface{
	dd($request, $this);
});

return $router;