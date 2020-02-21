<?php
include 'vendor/autoload.php';
include 'definitions.php';
error_reporting(E_ALL);
ini_set('display_errors', 'On');

use Illuminate\Database\Capsule\Manager as Capsule;
use Nyholm\Psr7\Factory\Psr17Factory;
use Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory;
use Symfony\Component\HttpFoundation\Request;

$capsule = new Capsule;

$capsule->addConnection([
	'driver'    => 'mysql' ,
	'host'      => 'localhost' ,
	'database'  => 'url-shortner' ,
	'username'  => 'birendra' ,
	'password'  => 'metro98044' ,
	'charset'   => 'utf8' ,
	'collation' => 'utf8_unicode_ci' ,
	'prefix'    => '' ,
]);

$capsule->bootEloquent();

$symfonyRequest = Request::createFromGlobals();
$psr17Factory   = new Psr17Factory();
$psrHttpFactory = new PsrHttpFactory($psr17Factory , $psr17Factory , $psr17Factory , $psr17Factory);
$psrRequest     = $psrHttpFactory->createRequest($symfonyRequest);

/* @var \League\Route\Router $router */
$router = include 'routes.php';
$response = $router->dispatch($psrRequest);

// send the response to the browser
(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);
