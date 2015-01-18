<?php
use App\Song;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'SongsController@home');
Route::get('/playlist/add', 'PlaylistsController@addSongsToPlaylist');
Route::get('/download/{slug}', function($slug){
	$song = Song::whereSlug($slug)->first(); 
	
	$file = public_path().'/1.mp3';
	$headers = array(
		'Content-Type: audio/mp3',
		);
	$song->increment('dlcount');
	return Response::download($file, $slug, $headers);	
});
Route::post('search', 'SongsController@search');

$router->resource('song', 'SongsController');
$router->resource('artist', 'ArtistsController');
$router->resource('playlist', 'PlaylistsController');
$router->resource('genre', 'GenresController');
Route::get('/lyrics/{slug}', 'SongsController@lyrics');
Route::post('mail', 'SongsController@mail');
Route::post('save', 'PlaylistsController@save');


/*
|--------------------------------------------------------------------------
| Authentication & Password Reset Controllers
|--------------------------------------------------------------------------
|
| These two controllers handle the authentication of the users of your
| application, as well as the functions necessary for resetting the
| passwords for your users. You may modify or remove these files.
|
*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
