@extends('layout')

@section('content')
	{{$info}}

	@foreach ($songs as $song)
		<li><a href="/song/{{ $song->slug }}">{{$song->title}}</a></li>
	@endforeach	
	Song index page
	
	
@stop