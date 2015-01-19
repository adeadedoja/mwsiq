		<div class="col-md-4 pp">
			<div class="r1">
						<div class="panel panel-default">
						  <div class="panel-heading"><i class="icon-file-text coli"></i>  Subscribe To Get Latest Songs </div>
						  <div class="panel-body">
						   		
						    {!! Form::open(['url' => '/mail', 'class' => 'form-horizontal']) !!}
						    
						        
						            {!! Form::text('mail', null, ['class' => 'form-control', 'placeholder' => 'Enter Your email Address ']) !!}
						          
						 
						      <br>
						    {!! Form::submit('Subscribe', ['class' => 'btn btn-block btn-danger']) !!}
						           
						          

						    {!! Form::close() !!}
						  </div>
						</div>

						<div class="panel panel-default">
						  <div class="panel-heading"><i class="icon-file-text coli"></i>  From The Blog </div>
						  <div class="panel-body">
						   		<!--loop start-->
						   		@foreach($items as $item)
						   			<div class="song pos">
						   				<div class="col-xs-12">
						   					<p class="col"><b>Mwsiq Blog Post</b></p>
						   					<br>
						   					<h2>{{$item->post_title}}</h2>
						   					<p>{!! str_limit($item->post_content,350)!!}</p>
						   					<a href="{{URL::to($item->guid)}}" class="btn btn-info btn-block"></i>Read More</a>
						   				</div>
						   				<div class="clear"></div>
						   			</div>
						   		@endforeach	
						   		<!-- loop end-->
						   		<a href="{{URL::to('http://blog.mwsiq.com/MWSIQCOM')}}" class="btn btn-warning btn-block"></i>VIEW MORE MUSIC NEWS</a>
						  </div>
						</div>


						<div class="panel panel-default">
						  <div class="panel-heading"><i class="icon-facebook coli"></i>  Like Us on Facebook </div>
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
						   		<a href="/song" class="btn btn-warning btn-block"></i>VISIT OUR FACEBOOK PAGE</a>
						  </div>
						</div>

						<div class="panel panel-default">
						  <div class="panel-heading"><i class="icon-twitter coli"></i>  Follow Us on Twitter</div>
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
						   		<a href="/song" class="btn btn-warning btn-block"></i>VISIT OUR TWITTER PAGE</a>
						  </div>
						</div>



			</div>
		</div>