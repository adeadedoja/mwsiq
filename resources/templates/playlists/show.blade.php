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
	}, [
		{
			title:"<div class='col-sm-1 col-xs-2 pop'>01</div><div class='col-xs-6 col-sm-9 popa'>Cro Magnon Man</div><div class='col-xs-4 col-sm-2 popaa'><a href='#' class='btn btn-warning btn-block'><i class='icon-download-alt'></i> Download</a></div><div class='clear'></div>",
			mp3:"../../1.mp3"
		},
		{
			title:"Your Face",
			mp3:"../../2.mp3"
		}
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
									<h2>{{$playlist->name}}</h2>
				   					<p><b>Created</b>: {{@created_at}}</p>
				   					<p>No of Songs: {{$count}} </p></b>
				   					@foreach ($songs as $song)
										<li><a href="/song/{{ $song->slug }}">{{$song->title}}</a></li>
									@endforeach	
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
										<a href="{{URL::to('http://www.facebook.com/MWSIQCOM')}}">
					   						{!! HTML::image('img/Facebook-icon.png') !!}
					   					</a>
										
										<a href="{{URL::to('http://www.twitter.com/mwsiqe')}}">
					   						{!! HTML::image('img/Twitter-icon.png') !!}
					   					</a>
										
										<a href="{{URL::to('http://www.instagram.com/MWSIQCOM')}}">
					   						{!! HTML::image('img/Instagram-icon.png') !!}
					   					</a>
										
										<a href="{{URL::to('http://www.facebook.com/MWSIQCOM')}}">
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