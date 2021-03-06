@extends('layout')

@section('content')

<script type="text/javascript" src="../../lib/jquery.min.js"></script>
<script type="text/javascript" src="../../lib/dist/jplayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="../../lib/dist/jplayer/jplayer.playlist.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_2",
		cssSelectorAncestor: "#jp_container_2"
	}, [ <?php $i=1 ?> @foreach ($songs as $song)
										
									
		{
			title:"<div class='col-sm-1 col-xs-2 pop'>{{$i}}</div><div class='col-xs-6 col-sm-9 popa'>{{$song->title}}</div><div class='col-xs-4 col-sm-2 popaa'><a href='/download/{{ $song->slug }}' class='btn btn-warning btn-block'><i class='icon-download-alt'></i> Download</a></div><div class='clear'></div>",
			mp3:"../../1.mp3"
		},
		<?php $i++ ?>
		@endforeach			
	], {
		swfPath: "../lib/dist/jplayer",
		supplied: "oga, mp3",
		wmode: "window",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true
	});
});
</script>

				<!--Player-->	
					<div id="jquery_jplayer_2" class="jp-jplayer"></div>
					<div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
					<div class="jp-type-single">
						<div class="jp-gui jp-interface">
							<div class="player_up">
								
									
									<div class="jp-volume-controls">
										<i class="icon-volume-off jp-mute" role="button" tabindex="0"></i>
										<i class="icon-volume-up jp-volume-max" role="button" tabindex="0"></i>
										<div class="jp-volume-bar">
											<div class="jp-volume-bar-value"></div>
										</div>
									</div>
									
							</div>	
						
					


	<div class="info">
		<div class="col-md-4 col-xs-6">

			<div class="art">
				
				<a class="song_art"><img src="../../img/j.jpg" /></a>
				<a class="as"><i class="icon-backward jp-previous pre" role="button" tabindex="0"></i><i class="icon-play-circle jp-play pl" role="button" tabindex="0"></i>	<i class="icon-pause jp-pause pl" role="button" tabindex="0"></i><i class="icon-forward jp-next next" role="button" tabindex="0"></i></a>

			</div>	 
		</div>
		<div class="col-md-7 col-xs-6">
			<div class="info_ii">
									<h2>{{$artist->name}}</h2>
									@if($artist->biograpy)
				   					<p><b>Biography</b></p>
				   					<p>{!! nl2br($artist->biography) !!}</p>
				   					@endif
				   					<p>No of Songs: {{$count}} </p></b>
				   					<i class="jp-controls">
										<i class="icon-play-circle jp-play dl" role="button" tabindex="0"></i>
										<i class="icon-pause jp-pause dl" role="button" tabindex="0"></i>
									
									</i>
									<i class="icon-stop jp-stop dl" role="button" tabindex="0"></i>
					   					<i class="icon-download dl"></i>
					   					<i class="icon-star-empty dl"></i>
					   					<i class="jp-toggles">
											<i class="icon-repeat jp-repeat" role="button" tabindex="0"></i>
										</i>
			</div>
		</div>
		<div class="col-md-1 pp col-xs-12">
			<div class="info_j">
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
		</div>
		<div class="clear"></div>
	</div>
	<div class="jp-time-holder col-xs-12">
										<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
										<div class="jp-progress">
										<div class="jp-seek-bar">
											<div class="jp-play-bar"></div>
										</div>
									</div>
										<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
										
									</div>
	</div>
	</div>
	<div class="jp-playlist tip">
	<h3 class="col">Songs by {{$song->artist}}</h3>
			<ul>
				<li>&nbsp;</li>
			</ul>
		</div>
						
						<div class="jp-no-solution">
							<span>Update Required</span>
							To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
						</div>
					</div>
				<!--End of Player-->	

	@include('bottom');	
		
@stop