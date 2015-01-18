@extends('layout')

@section('content')

<script type="text/javascript" src="../../lib/jquery.min.js"></script>
<script type="text/javascript" src="../../lib/dist/jplayer/jquery.jplayer.min.js"></script>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

	$("#jquery_jplayer_1").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				title: "Bubble",
				mp3: "../../1.mp3"
			});
		},
		swfPath: "../lib/dist/jplayer",
		supplied: "mp3",
		wmode: "window",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true,
		remainingDuration: true,
		toggleDuration: true
	});
});
//]]>
</script>



				<!--Player-->	
					<div id="jquery_jplayer_1" class="jp-jplayer"></div>
					<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
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
				<a class="as"><i class="icon-play-circle jp-play pl" role="button" tabindex="0"></i>	<i class="icon-pause jp-pause pl" role="button" tabindex="0"></i></a>

			</div>				
		</div>
		<div class="col-md-5 col-xs-6">
			<div class="info_ii">
									<b><p class="col">SONG | {{$song->genre}}</p>
				   					<h3>{{$song->artist}}</h3>
				   					<h2>{{$song->title}}</h2>
				   					@if($song->producer)
				   					<p>Producer: {{$song->producer}} </p>
				   					@endif
				   					<p>Uploaded:{{$song->created_at}} </p>
				   					<p>Plays: {{$song->playcount}} | Downloads: {{$song->dlcount}}</p></b>
				   					<i class="jp-controls">
										<i class="icon-play-circle jp-play dl" role="button" tabindex="0"></i>
										<i class="icon-pause jp-pause dl" role="button" tabindex="0"></i>
									
									</i>
									<i class="icon-stop jp-stop dl" role="button" tabindex="0"></i>
					   					<a href="/download/{{ $song->slug }}"<i class="icon-download dl"></i></a>
					   					<i class="icon-star-empty dl"></i>
					   					<i class="jp-toggles">
											<i class="icon-repeat jp-repeat" role="button" tabindex="0"></i>
										</i>
			</div>
		</div>
		<div class="col-md-3 pp col-xs-12">
			<div class="info_i">
				<a href="/download/{{ $song->slug }}" class="btn btn-info btn-block"><i class="icon-download-alt"></i> Download Song</a>
				<a href="/artist/{{ $song->artist }}" class="btn btn-danger btn-block"><i class="icon-list-ul"></i> View Other Songs by {{$song->artist}}</a>
				<a href="/artist/{{ $song->artist }}" class="btn btn-warning btn-block"><i class="icon-user"></i> {{$song->artist}} artist page </a>
				@if($song->lyrics)
				<a href="/lyrics/{{ $song->slug }}" class="btn btn-success btn-block"><i class="icon-file-text-alt"></i> View Song Lyrics</a>
				@endif
				
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
						
						<div class="jp-no-solution">
							<span>Update Required</span>
							To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
						</div>
					</div>
				<!--End of Player-->
				<div class="panel panel-default">
						  <div class="panel-heading"><i class="icon-bug"></i><i class="icon-warning-sign"></i> Lyrics for {{$song->title}}</div>
						  <div class="panel-body lyr">
						   		<p>{!! nl2br($song->lyrics) !!}</p>
						  </div>
						</div>	
@include('bottom');	



		
@stop