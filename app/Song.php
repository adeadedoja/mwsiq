<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent ;

class Song extends ELoquent {

	protected $fillable = [
		'title', 'artist', 'producer', 'link', 'slug', 'genre', 'album', 'video', 'videodesc', 'dlcount', 'playcount', 'albumart', 'lyrics'

	];
	
}