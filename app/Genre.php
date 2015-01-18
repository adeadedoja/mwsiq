<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent ;

class Genre extends ELoquent {

	protected $fillable = [
		'name', 'slug', 'art'

	];
	
}