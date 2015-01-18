<div class="song">
				   				<div class="col-xs-4">
				   					<a class="song_art"><img src="../../img/j.jpg" /></a>
				   					<a class="as" href="/artist/{{ $artist->slug }}"><i class="icon-play-circle" role="button" tabindex="0"></i></a>
				   				</div>
				   				<div class="col-xs-8">
				   					<h2><a href="/artist/{{ $artist->slug }}"> {{$artist->name}}</h2>
				   					@if($artist->biography)
				   					<h4><b>Biography</b></h4>
				   					<p>{!! nl2br($artist->biography) !!}</p>
				   					@endif
				   					<a href="/artist/{{ $artist->slug }}" class="btn btn-danger"><i class="icon-play"></i> View {{$artist->name}} Songs</a><br>
					   					@if($artist->facebook)
					   					<a href="{{URL::to('http://www.facebook.com/'.$artist->facebook)}}">
					   					@else
					   					<a href="{{URL::to('http://www.facebook.com/MWSIQCOM')}}">
					   					@endif
					   						{!! HTML::image('img/Facebook-icon.png') !!}
					   					</a>
										
										@if($artist->twitter)
					   					<a href="{{URL::to('http://www.twitter.com/'.$artist->twitter)}}">
					   					@else
					   					<a href="{{URL::to('http://www.twitter.com/mwsiqe')}}">
					   					@endif
					   						{!! HTML::image('img/Twitter-icon.png') !!}
					   					</a>
										
										@if($artist->instagram)
					   					<a href="{{URL::to('http://www.instagram.com/'.$artist->instagram)}}">
					   					@else
					   					<a href="{{URL::to('http://www.instagram.com/MWSIQCOM')}}">
					   					@endif
					   						{!! HTML::image('img/Instagram-icon.png') !!}
					   					</a>
										
										@if($artist->youtube)
					   					<a href="{{URL::to($artist->youtube)}}">
					   					@else
					   					<a href="{{URL::to('http://www.facebook.com/MWSIQCOM')}}">
					   					@endif
					   						{!! HTML::image('img/Youtube-icon.png') !!}
					   					</a>


				   					
				
				   				</div>
				   				<div class="clear"></div>
				   			</div>