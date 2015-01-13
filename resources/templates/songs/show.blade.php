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
				<i class="icon-play-circle jp-play pl" role="button" tabindex="0"></i>
				<i class="icon-pause jp-pause pl" role="button" tabindex="0"></i>
				<img src="../../img/j.jpg" /></div>
		</div>
		<div class="col-md-5 col-xs-6">
			<div class="info_ii">
									<b><p>SONG | {{$song->genre}}</p>
				   					<h3>{{$song->artist}}</h3>
				   					<h2>{{$song->title}}</h2>
				   					<p>Featuring: Name Of Artist</p>
				   					<p>Producer: {{$song->producer}} </p>
				   					<p>Uploaded:{{$song->created_at}} </p>
				   					<p>Plays: {{$song->playcount}} | Downloads: {{$song->dlcount}}</p></b>
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
		<div class="col-md-3 pp col-xs-12">
			<div class="info_i">
				<a href="#" class="btn btn-info">Info</a>
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

	{{$song->title}}
	<div class="others">
		<div class="col-md-8 pp">
			<div class="l1">
				<div class="panel panel-default">
				  <div class="panel-heading">Other Songs on Mwsiq.com</div>
				  <div class="panel-body">
				   		<!--loop start-->
				   		@for($i = 0; $i <=5; $i ++)
				   			<div class="song">
				   				<div class="col-xs-4">
				   					<div class="song_art"><img src="../../img/j.jpg" /></div>
				   				</div>
				   				<div class="col-xs-8">
				   					<p>SONG | GENRE</p>
				   					<h3>Artist Name</h3>
				   					<h2>Title Of Song</h2>
				   					<p>Featuring: Name Of Artist</p>
				   					<p>Producer: </p>
				   					<p>Uploaded: </p>
				   					<p>Plays: 4000 | Downloads: 6900</p>
				   				</div>
				   				<div class="clear"></div>
				   			</div>
				   		@endfor	
				   		<!-- loop end-->
				  </div>
				</div>


			</div>
		</div>
		<div class="col-md-4 pp">
			<div class="r1">
						<div class="panel panel-default">
						  <div class="panel-heading">From The Blog </div>
						  <div class="panel-body">
						   		<!--loop start-->
						   		@for($i = 0; $i <=4; $i ++)
						   			<div class="song">
						   				<div class="col-xs-4">
						   					<div class="song_art"><img src="../../img/j.jpg" /></div>
						   				</div>
						   				<div class="col-xs-8">
						   					<p>SONG | GENRE</p>
						   					<h3>Artist Name</h3>
						   					<h2>Title Of Song</h2>
						   					<p>Featuring: Name Of Artist</p>
						   					<p>Producer: </p>
						   					<p>Uploaded: </p>
						   					<p>Plays: 4000 | Downloads: 6900</p>
						   				</div>
						   				<div class="clear"></div>
						   			</div>
						   		@endfor	
						   		<!-- loop end-->
						  </div>
						</div>


						<div class="panel panel-default">
						  <div class="panel-heading">Like Us on Facebook </div>
						  <div class="panel-body">
						   		<!--loop start-->
						   		@for($i = 0; $i <=1; $i ++)
						   			<div class="song">
						   				<div class="col-xs-4">
						   					<div class="song_art"><img src="../../img/j.jpg" /></div>
						   				</div>
						   				<div class="col-xs-8">
						   					<p>SONG | GENRE</p>
						   					<h3>Artist Name</h3>
						   					<h2>Title Of Song</h2>
						   					<p>Featuring: Name Of Artist</p>
						   					<p>Producer: </p>
						   					<p>Uploaded: </p>
						   					<p>Plays: 4000 | Downloads: 6900</p>
						   				</div>
						   				<div class="clear"></div>
						   			</div>
						   		@endfor	
						   		<!-- loop end-->
						  </div>
						</div>

						<div class="panel panel-default">
						  <div class="panel-heading">Follow Us on Twitter</div>
						  <div class="panel-body">
						   		<!--loop start-->
						   		@for($i = 0; $i <=1; $i ++)
						   			<div class="song">
						   				<div class="col-xs-4">
						   					<div class="song_art"><img src="../../img/j.jpg" /></div>
						   				</div>
						   				<div class="col-xs-8">
						   					<p>SONG | GENRE</p>
						   					<h3>Artist Name</h3>
						   					<h2>Title Of Song</h2>
						   					<p>Featuring: Name Of Artist</p>
						   					<p>Producer: </p>
						   					<p>Uploaded: </p>
						   					<p>Plays: 4000 | Downloads: 6900</p>
						   				</div>
						   				<div class="clear"></div>
						   			</div>
						   		@endfor	
						   		<!-- loop end-->
						  </div>
						</div>



			</div>
		</div>	
	</div>
<div class="clear"></div>
	<div class="panel panel-default">
						  <div class="panel-heading"><i class="icon-bug"></i><i class="icon-warning-sign"></i> Submit a comment Below </div>
						  <div class="panel-body">
						   		<!--loop start-->
						   		@for($i = 1; $i <=1; $i ++)
						   			<div class="song">
						   				<div class="col-xs-4">
						   					<div class="song_art"><img src="../../img/j.jpg" /></div>
						   				</div>
						   				<div class="col-xs-8">
						   					<p>SONG | GENRE</p>
						   					<h3>Artist Name</h3>
						   					<h2>Title Of Song</h2>
						   					<p>Featuring: Name Of Artist</p>
						   					<p>Producer: </p>
						   					<p>Uploaded: </p>
						   					<p>Plays: 4000 | Downloads: 6900</p>
						   				</div>
						   				<div class="clear"></div>
						   			</div>
						   		@endfor	
						   		<!-- loop end-->
						  </div>
						</div>
		





		
@stop