<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{

	protected $table = 'urls';

	protected $fillable = ['url' , 'tiny_url', 'title' , 'description' , 'visits'];

	public function getFullTinyUrlAttribute()
	{
		return url('') . $this->tiny_url;
	}
}