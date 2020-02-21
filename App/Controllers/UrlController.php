<?php


namespace App\Controllers;

use App\Repositories\UrlRepository;

class UrlController extends Controller
{
	private $request;

	/**
	 * @var \Illuminate\Database\App\Repositories\UrlRepository
	 */
	private $urlRepository;

	/**
	 * UrlController constructor.
	 *
	 * @param $request
	 */
	public function __construct($request = NULL)
	{
		$this->request = $request;
		$this->urlRepository = new UrlRepository();
	}

	public function index()
	{
		$view = 'url/index';

		$urls = $this->urlRepository->list();
		return $this->view($view, ['urls' => $urls ]);
	}
}