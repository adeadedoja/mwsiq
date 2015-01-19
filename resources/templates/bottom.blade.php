<div class="others">
		<div class="col-md-8 pp">
			<div class="l1">
			<?php
			if (Request::is('song/*'))
				{
				  ?>
				  @if($song->video)
				<div class="panel panel-default">
					<div class="panel-heading"><i class="icon-music coli"></i> Music Video for {{$song->title}}</div>
					  <div class="panel-body">
					   		<!--loop start-->
					   		{!!$song->video!!}
					   		<!-- loop end-->
					   		{{$song->description}}
					  </div>
				</div>
				@endif
				  <?php
				}
			?>	
				<div class="panel panel-default">
				<div class="panel-heading"><i class="icon-music coli"></i>  Other Songs on Mwsiq.com</div>
				  <div class="panel-body">
				   						   		<!--loop start-->
				   		<?php $i=0 ?>
				   		@foreach ($latsongs as $latsong)

				   			@include('songs.a', array('song' => $latsong))
				   			<?php if($i >= 5){ break; } ?>
				   			<?php $i++ ?>

				   		@endforeach		
				   		<!-- loop end-->
				   		<a href="/song" class="btn btn-warning btn-block"></i>SEE MORE POPULAR SONGS</a>
				  </div>
				</div>


			</div>
		</div>
		@include('side', array('items' => $items))
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