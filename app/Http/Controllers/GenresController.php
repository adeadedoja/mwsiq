<?php namespace App\Http\Controllers;

use App\Genre;
use App\Song;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenresController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$genres = Genre::orderBy('id', 'ASC')->paginate(10);
		$info = 'badoo';
		$title = 'Genres on Mwsiq.com';
		return view('genres.index', compact('genres', 'info', 'title'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('genres.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, Genre $genre)
	{
		//
		$genre->create($request->all());

		return redirect()->route('genre.index');
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
		$genre = Genre::whereSlug($slug)->first(); 
		$songs = Song::whereGenre($slug)->get();
		$count = $songs->count();
		$latsongs = Song::orderBy('id', 'DESC')->take(20)->get();
		$latsongs->shuffle();
		$title = $genre->name.' songs on Mwsiq.com';
		return view ('genres.show', compact('genre','songs','latsongs', 'title', 'count'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		//
		$genre = Genre::whereSlug($slug)->first(); 
		return view ('genres.edit', compact('genre'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug, Request $request)
	{
		$genre = Genre::whereSlug($slug)->first(); 
		$genre->fill($request->input())->save();
		return redirect('genre'); 
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
		$genre = Genre::whereSlug($slug)->first(); 
		$genre->delete();
		return redirect('genre'); 
	}

}
