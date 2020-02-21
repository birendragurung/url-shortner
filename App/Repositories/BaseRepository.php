<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements RepositoryInterface
{

	/**
	 * @var \Illuminate\Database\Eloquent\Model
	 */
	protected $model;

	/**
	 * BaseRepository constructor.
	 *
	 * @param \Illuminate\Database\Eloquent\Model $model
	 */
	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	public function create($attributes)
	{
		return $this->model->create($attributes);
	}

	public function update($id , $attributes)
	{
		/* @var Model $entity*/
		$entity = $this->find($id);
		$entity->update($attributes);
		return $entity;
	}

	public function delete($id)
	{
		return $this->model->where('id' , $id)->delete();
	}

	public function find($id)
	{
		return $this->model->findOrFail($id);
	}

	public function list(array $params = [] , array $options = [])
	{
		return $this->model->limit(15)->get();
	}
}