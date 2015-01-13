<?php namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;
class SongsController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$songs = Song::get();
		$info = 'badoo';
		return view('songs.index', compact('songs', 'info'));
	}

	public function temp()
	{
		return view('home');
	}

	public function show($slug)
	{
		$song = Song::whereSlug($slug)->first(); 
		return view ('songs.show', compact('song'));
	}

	public function create() {
		return view('songs.create ');
	}
	
	public function store(Request $request, Song $song){
		$song->create($request->all());

		return redirect()->route('song.index');
	}	

	public function edit($slug)
	{
		$song = Song::whereSlug($slug)->first(); 
		return view ('songs.edit', compact('song'));
	}

	public function update($slug, Request $request)
	{
		
		$song = Song::whereSlug($slug)->first(); 
		$song->fill($request->input())->save();
		return redirect('song');  
		
	}
	

}
