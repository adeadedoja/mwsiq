<div class="song">
				   				<div class="col-xs-4">
				   					<a class="song_art"><img src="../../img/j.jpg" /></a>
				   					<a class="as" href="/playlist/{{ $playlist->slug }}"><i class="icon-play-circle" role="button" tabindex="0"></i></a>
				   				</div>
				   				<div class="col-xs-8">
				   					<h2>{{$playlist->name}}</h2>
				   					<p><b>Created</b>: {{$playlist->created_at}}</p>
				   					<a href="/playlist/{{ $playlist->slug }}" class="btn btn-danger"><i class="icon-play"></i> View {{$playlist->name}} Playlist</a>
				   					
				
				   				</div>
				   				<div class="clear"></div>
				   			</div>