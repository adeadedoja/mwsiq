@extends('layout')

@section('content')
	<div class="others">
		<div class="col-md-8 pp">
			<div class="l1">
				<div class="panel panel-default">
				  <div class="panel-heading"><i class="icon-music coli"></i>  Latest Songs on Mwsiq.com</div>
				  <div class="panel-body">
				   						   		<!--loop start-->
				   		<?php $i=0 ?>
				   		@foreach ($songs as $song)

				   			@include('songs.a', array('song' => $song))
				   			
				   			<?php $i++ ?>

				   		@endforeach		
				   		<!-- loop end-->
				   		{!! $songs->render() !!}
				  </div>
				</div>


			</div>
		</div>
		@include('side', array('items' => $items))
	</div>
<div class="clear"></div>

	
	
@stop