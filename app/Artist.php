<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent ;

class Artist extends ELoquent {

	protected $fillable = [
		'name', 'slug', 'facebook', 'twitter', 'instagram', 'youtube', 'biography', 'art' 

	];
	
}