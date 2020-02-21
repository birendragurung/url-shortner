<?php
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
	return $_SERVER['HTTP_HOST'] . '/' . trim($path, " /\\\t\n\r\0\x0B");
}