<div class="song">
				   				<div class="col-xs-4">
				   					<a class="song_art"><img src="../../img/j.jpg" /></a>
				   					<a class="as" href="/genre/{{ $genre->slug }}"><i class="icon-play-circle" role="button" tabindex="0"></i></a>
				   				</div>
				   				<div class="col-xs-8">
				   					<h2>{{$genre->name}}</h2>
				   					<p><b>Created</b>: {{$genre->created_at}}</p>
				   					
				   					<a href="/genre/{{ $genre->slug }}" class="btn btn-danger"><i class="icon-play"></i> View {{$genre->name}} genre</a>
				   					
				
				   				</div>
				   				<div class="clear"></div>
				   			</div>