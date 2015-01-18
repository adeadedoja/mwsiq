<div class="song">
				   				<div class="col-xs-4">
				   					<a class="song_art"><img src="../../img/j.jpg" /></a>
				   					<a class="as" href="/song/{{ $song->slug }}"><i class="icon-play-circle" role="button" tabindex="0"></i></a>
				   				</div>
				   				<div class="col-xs-8">
				   					<p class="col"><b>SONG | {{$song->genre}}</b></p>
				   					<h3><a href="/artist/{{$song->artist}}"> {{$song->artist}}</a></h3>
				   					<h2>{{$song->title}}</h2>
									@if($song->producer)
				   					<p>Producer: {{$song->producer}} </p>
									@endif
				   					<p>Uploaded:{{$song->created_at}} </p>
				   					<p>Plays: {{$song->playcount}} | Downloads: {{$song->dlcount}}</p></b>
				   					<a href="/download/{{ $song->slug }}" class="btn btn-info"><i class="icon-download-alt"></i> Download Song</a>
									<a href="/song/{{ $song->slug }}" class="btn btn-danger"><i class="icon-play"></i> Play Song</a>
				   				</div>
				   				<div class="clear"></div>
				   			</div>