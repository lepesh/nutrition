<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'food';

	public function category()
	{
		return $this->belongsTo('App\Models\Category');
	}
}