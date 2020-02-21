<?php


namespace App\Repositories;


interface UrlInterface extends RepositoryInterface
{
	public function findByTinyUrl(string $tinyUrl);

	public function incrementVisit($url);
}