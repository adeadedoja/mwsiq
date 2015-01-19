<?php namespace App\Http\Controllers;

use App\Playlist;
use App\Play;
use App\Song;
use App\wp_post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlaylistsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = wp_post::where('post_type', '=', 'post')->orderBy('id', 'DESC')->paginate(5);
		$playlists = Playlist::orderBy('id', 'DESC')->paginate(10);
		$info = 'badoo';
		$title = 'Playlists on Mwsiq.com';
		return view('playlists.index', compact('playlists', 'info', 'title', 'items'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('playlists.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, Playlist $playlist)
	{
		//
		$playlist->create($request->all());

		return redirect()->route('playlist.index');
	}

	public function save(Request $request)
	{
	
		$playlist = $request->playlist;
		$songs = $request->songs;
			foreach ($songs as $song) {
				$play = new Play;
				$play->playlist = $playlist;
				$play->song =$song;
				$play->save(); 
			}

		return redirect()->route('playlist.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		//
		$items = wp_post::where('post_type', '=', 'post')->orderBy('id', 'DESC')->paginate(5);
		$playlist = Playlist::whereSlug($slug)->first();
		$play = Play::wherePlaylist($slug)->get(); 
		$songs = Song::get();
		$count = $songs->count();
		$latsongs = Song::orderBy('id', 'DESC')->take(20)->get();
		$latsongs->shuffle();
		$title = $playlist->name.' playlist on Mwsiq.com';
		return view ('playlists.show', compact('playlist','songs','latsongs','title','count','items' ));
	}

	public function addSongsToPlaylist(Request $request){
			$playlists = Playlist::lists('name', 'slug');
			$songs = Song::orderBy('id', 'DESC')->get();
			return view ('playlists.add', compact('playlists','songs'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		$playlist = Playlist::whereSlug($slug)->first(); 
		return view ('playlists.edit', compact('playlist'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug, Request $request)
	{
		$playlist = Playlist::whereSlug($slug)->first(); 
		$playlist->fill($request->input())->save();
		return redirect('playlist'); 
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($slug)
	{
		//
		$playlist = Playlist::whereSlug($slug)->first(); 
		$playlist->delete();
		return redirect('playlist'); 
	}

}
