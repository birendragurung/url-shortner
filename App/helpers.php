<?php

use Jenssegers\Blade\Blade;
use Nyholm\Psr7\Response;

function app_path()
{
	return __DIR__;
}

function base_path()
{
	return __DIR__ . '../';
}

function view_path()
{
	return VIEW_PATH;
}

function compiled_view_path()
{
	return COMPILED_VIEW_PATH;
}

function url(string $path = '')
{
	return (isset($_SERVER['HTTPS']) ? 'https://' : 'http://'). $_SERVER['HTTP_HOST'] . '/' . trim($path, " /\\\t\n\r\0\x0B");
}

function route()
{
	return '';
}

function view($path, $data = [], $merge = [])
{
	$blade = new Blade(realpath(VIEW_PATH), COMPILED_VIEW_PATH);

	$view =  $blade->make($path, $data, $merge);

	return new Response(200 , [
		'Content-Type' => 'text/html'
	] , $view->render() );
}