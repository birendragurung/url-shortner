<?php

namespace App\Traits;

use Jenssegers\Blade\Blade;
use Nyholm\Psr7\Response;

trait HasViews
{

	protected $viewPath = VIEW_PATH;

	protected $compiledPath = COMPILED_VIEW_PATH;
	public function view(string $path, array $data = [], array $merge = [])
	{

		$blade = new Blade(realpath($this->viewPath), $this->compiledPath);

		$view =  $blade->make($path, $data, $merge);

		$response = new Response(200 , [
			'Content-Type' => 'text/html'
		] , $view->render() );

		return $response;
	}
}