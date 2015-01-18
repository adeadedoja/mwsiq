<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent ;

class Play extends ELoquent {

	protected $fillable = [
		'song', 'playlist'

	];
	
}