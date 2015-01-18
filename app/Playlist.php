<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent ;

class Playlist extends ELoquent {

	protected $fillable = [
		'name', 'slug', 'art'

	];
	
}