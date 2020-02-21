<?php


namespace App\Repositories;


use App\Entities\Url;

class UrlRepository extends BaseRepository
{
	public function __construct()
	{
		$model = new Url;
		parent::__construct($model);
	}
}