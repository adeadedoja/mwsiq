@extends('layout')

@section('content')
	<div class="others">
		<div class="col-md-8 pp">
			<div class="l1">
				<div class="panel panel-default">
				  <div class="panel-heading"><i class="icon-music coli"></i> Genres on Mwsiq.com</div>
				  <div class="panel-body">
				   						   		<!--loop start-->
				   		
				   		@foreach ($genres as $genre)

				   			@include('genres.a', array('genre' => $genre))
				   			
				   		@endforeach		
				   		<!-- loop end-->
				   		{!! $genres->render() !!}
				  </div>
				</div>


			</div>
		</div>
		@include('side')
	</div>
<div class="clear"></div>

	
	
@stop