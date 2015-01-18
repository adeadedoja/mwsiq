@extends('layout')

@section('content')
@if(isset($greeting))<div class="alert">{{$greeting}}</div>@endif
	<div class="others">
		<div class="col-md-8 pp">
			<div class="l1">
				<div class="panel panel-default">
				  <div class="panel-heading"><i class="icon-music coli"></i>Latest Songs on Mwsiq.com</div>
				  <div class="panel-body">
				   						   		<!--loop start-->
				   		<?php $i=0 ?>
				   		@foreach ($songs as $song)

				   			@include('songs.a', array('song' => $song))
				   			<?php if($i >= 5){ break; } ?>
				   			<?php $i++ ?>

				   		@endforeach		
				   		<!-- loop end-->
				   		<a href="/song" class="btn btn-warning btn-block"></i>SEE MORE LATEST SONGS</a>
				  </div>
				</div>
				<div class="panel panel-default">
				  <div class="panel-heading"><i class="icon-star coli"></i>  Most Popular Songs on Mwsiq.com</div>
				  <div class="panel-body">
				   						   		<!--loop start-->
				   		<?php $i=0 ?>
				   		@foreach ($trendings as $trending)

				   			@include('songs.a', array('song' => $trending))
				   			<?php if($i >= 4){ break; } ?>
				   			<?php $i++ ?>

				   		@endforeach		
				   		<!-- loop end-->
				   		<a href="/song" class="btn btn-warning btn-block"></i>SEE MORE POPULAR SONGS</a>
				  </div>
				</div>


			</div>
		</div>
		@include('side')
	</div>
<div class="clear"></div>

	
	
@stop