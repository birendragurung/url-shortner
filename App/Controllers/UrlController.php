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

	public function create(ServerRequestInterface $request , $args)
	{
		return view('url.create');
	}

	public function store(ServerRequestInterface $request, $args)
	{
		$data = $request->getParsedBody();
		$data['tiny_url'] = uniqid();

		$url = $this->urlRepository->create($data);

		return header('Location: ' . url('/urls'));
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

	public function delete(ServerRequestInterface $request , $args)
	{
		$id = $args['id'];
		$this->urlRepository->delete($id);
		header('Location: ' . url('/urls'));
	}

	public function edit(ServerRequestInterface $request , $args)
	{
		$id = $args['id'];

		$url = $this->urlRepository->find($id);

		return view('url.edit', ['url' => $url ]);
	}

	public function update(ServerRequestInterface $request , $args)
	{
		$id = $args['id'];

		$url = $this->urlRepository->update($id , $request->getParsedBody());

		header('Location: ' . url('urls'));
	}
}