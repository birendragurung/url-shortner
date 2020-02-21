<?php


namespace App\Controllers;

use App\Repositories\UrlRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Psr\Http\Message\ServerRequestInterface;

class UrlController extends Controller
{

	/**
	 * @var \App\Repositories\UrlRepository
	 */
	private $urlRepository;

	/**
	 * UrlController constructor.
	 */
	public function __construct()
	{
		$this->urlRepository = new UrlRepository();
	}

	public function index(ServerRequestInterface $request, $args)
	{
		$urls = $this->urlRepository->list();
		return $this->view('url.index', ['urls' => $urls ]);
	}

	public function store(ServerRequestInterface $request, $args)
	{
		$id = $args['id'];
		dd($id);
	}

	public function visit(ServerRequestInterface $request, $args)
	{
		$tinyUrl = $args['tiny_url'];
		$url = $this->urlRepository->findByTinyUrl($tinyUrl);
		if (!$url){
			throw new ModelNotFoundException;
		}

		$this->urlRepository->incrementVisit($url);
		header('Location: ' . $url->url);
	}
}