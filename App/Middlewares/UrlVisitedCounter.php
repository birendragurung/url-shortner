<?php


namespace App\Middlewares;


class UrlVisitedCounter
{

	public function handle($request , $next)
	{
		return $next($request);
	}
}