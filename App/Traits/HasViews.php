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
		return view($path , $data , $merge);
	}
}