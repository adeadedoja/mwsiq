<div class="song">
				   				<div class="col-xs-4">
				   					<div class="song_art"><img src="../../img/j.jpg" /></div>
				   				</div>
				   				<div class="col-xs-8">
				   					<p>SONG | {{$song->genre}}</p>
				   					<h3>{{$song->artist}}</h3>
				   					<h2>{{$song->title}}</h2>
				   					<p>Producer: {{$song->producer}} </p>
				   					<p>Uploaded:{{$song->created_at}} </p>
				   					<p>Plays: {{$song->playcount}} | Downloads: {{$song->dlcount}}</p></b>
				   					<a href="#" class="btn btn-info"><i class="icon-download-alt"></i> Download Song</a>
									<a href="/song/{{ $song->slug }}" class="btn btn-danger"><i class="icon-play"></i> Play Song</a>
				   				</div>
				   				<div class="clear"></div>
				   			</div>