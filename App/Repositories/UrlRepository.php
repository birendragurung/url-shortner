<?php


namespace App\Repositories;


use App\Entities\Url;

class UrlRepository extends BaseRepository implements UrlInterface
{
	public function __construct()
	{
		$model = new Url;
		parent::__construct($model);
	}

	public function findByTinyUrl(string $tinyUrl)
	{
		return $this->model->where('tiny_url' , $tinyUrl)->first();
	}

	public function incrementVisit($url)
	{
		return $url->increment('visits');
	}
}