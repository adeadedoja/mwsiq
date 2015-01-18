<?php namespace App\Http\Controllers;

use App\Artist;
use App\Song;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$artists = Artist::orderBy('name', 'ASC')->paginate(10);
		$info = 'badoo';
		$title = 'Artists on Mwsiq.com';
		return view('artists.index', compact('artists', 'info', 'title'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('artists.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, Artist $artist)
	{
		//
		$artist->create($request->all());

		return redirect()->route('artist.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$artist = Artist::whereSlug($slug)->first(); 
		$songs = Song::whereArtist($slug)->get();
		$count = $songs->count();
		$latsongs = Song::orderBy('id', 'DESC')->take(20)->get();
		$latsongs->shuffle();
		$title = 'Biography and Songs by '.$artist->name;
		return view ('artists.show', compact('artist', 'latsongs', 'songs', 'title', 'count'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		$artist = Artist::whereSlug($slug)->first(); 
		return view ('artists.edit', compact('artist'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug, Request $request)
	{
		$artist = Artist::whereSlug($slug)->first(); 
		$artist->fill($request->input())->save();
		return redirect('artist');  
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($slug)
	{
		
		$artist = Artist::whereSlug($slug)->first(); 
		$artist->delete();
		return redirect('artist'); 
	}

}
