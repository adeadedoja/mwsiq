<?php namespace App\Http\Controllers;

use App\Song;
use App\Artist;
use App\wp_post;
use App\Genre;
use App\Subscriber;
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
		#$url = 'http://blog.mwsiq.com/feed';
		#$rss = simplexml_load_file($url);
		#$items = [];
		#for ($i=0; $i < 5 ; $i++) { 
		#$items[$i] = $rss->channel->item[$i];
		#}
		$items = wp_post::where('post_type', '=', 'post')->orderBy('id', 'DESC')->paginate(5);
		$songs = Song::orderBy('id', 'DESC')->paginate(10);
		$title = 'Songs on Mwsiq.com';
		return view('songs.index', compact('songs', 'title','items'));
	}

	public function home()
	{
		$items = wp_post::where('post_type', '=', 'post')->orderBy('id', 'DESC')->paginate(5);
		$songs = Song::orderBy('id', 'DESC')->get();
		$trendings = Song::orderBy('id', 'DESC')->take(20)->get();
		$trendings->sortByDesc('playcount');
		return view('home', compact('songs', 'info', 'trendings', 'items'));
	}
	

	public function show($slug)
	{
		$items = wp_post::where('post_type', '=', 'post')->orderBy('id', 'DESC')->paginate(5);
		$song = Song::whereSlug($slug)->first(); 
		$song->increment('playcount');
		$latsongs = Song::orderBy('id', 'DESC')->take(20)->get();
		$latsongs->shuffle();
		$title = 'Play | Download '.$song->title.' by '.$song->artist;
		return view ('songs.show', compact('song','latsongs', 'title', 'items'));
	}

	public function lyrics($slug)
	{
		$items = wp_post::where('post_type', '=', 'post')->orderBy('id', 'DESC')->paginate(5);
		$song = Song::whereSlug($slug)->first(); 
		$latsongs = Song::orderBy('id', 'DESC')->take(20)->get();
		$latsongs->shuffle();
		$title = 'Lyrics for '.$song->title;
		return view ('songs.lyrics', compact('song','latsongs', 'title', 'items'));
	}

	public function search(Request $request){
		$items = wp_post::where('post_type', '=', 'post')->orderBy('id', 'DESC')->paginate(5);
		$keyword = $request->keyword;
		$songs = Song::where('title', 'LIKE', '%'.$keyword.'%')->orWhere('artist', 'LIKE', '%'.$keyword.'%')->get();
		$title = 'Search for '.$keyword.' on Mwsiq.com';
		return view('songs.search', compact('songs', 'keyword','title','items'));
	}
	public function create() {
		$artists = Artist::orderBy('name', 'ASC')->lists('name', 'slug');
		$genres = Genre::orderBy('id', 'ASC')->lists('name', 'slug');
		return view('songs.create', compact('artists', 'genres'));
	}
	
	public function store(Request $request, Song $song){
		 $song->title = $request->title;
		 $song->artist = $request->artist;
		 $art = $request->file('albumart');
		 $song->albumart = $art->getClientOriginalName();
		 $song->producer = $request->producer;
		 $song->playcount = 0;
		 $song->dlcount = 0;
		 $url = $request->file('link');
		 $song->link = $url->getClientOriginalName();
		 $song->slug = $request->slug;
		 $song->genre = $request->genre;
		 $song->album = $request->album;
		 $song->video = $request->video;
		 $song->videodesc = $request->videodesc;
		 $song->lyrics = $request->lyrics;
		 $song->save();
		return redirect()->route('song.index');
	}

	public function mail(Request $request, Subscriber $subscriber){
		$items = wp_post::where('post_type', '=', 'post')->orderBy('id', 'DESC')->paginate(5);
		$songs = Song::orderBy('id', 'DESC')->get();
		$trendings = Song::orderBy('id', 'DESC')->take(20)->get();
		$trendings->sortByDesc('playcount');
		 $subscriber->create($request->all());
		 $greeting = 'Thanks for subscribing';
		return view('home', compact('greeting','songs', 'info', 'trendings', 'items'));
	}

	public function edit($slug)
	{
		$items = wp_post::where('post_type', '=', 'post')->orderBy('id', 'DESC')->paginate(5);
		$song = Song::whereSlug($slug)->first(); 
		return view ('songs.edit', compact('song','items'));
	}

	public function update($slug, Request $request)
	{
		
		$song = Song::whereSlug($slug)->first(); 
		$song->fill($request->input())->save();
		return redirect('song');  
		
	}
	
	public function destroy($slug, Request $request)
	{
		
		$song = Song::whereSlug($slug)->first(); 
		$song->delete();
		return redirect('song');  
		
	}

	public function downloadSong(){
		$file = public_path().'/1.mp3';
	return Response::download($file, 'song.jpg');
	}
	

}
