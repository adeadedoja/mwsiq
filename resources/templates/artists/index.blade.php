@extends('layout')

@section('content')
	<div class="others">
		<div class="col-md-8 pp">
			<div class="l1">
				<div class="panel panel-default">
				  <div class="panel-heading"><i class="icon-user coli"></i> Artist on Mwsiq.com</div>
				  <div class="panel-body">
				   						   		<!--loop start-->
				   		
				   		@foreach ($artists as $artist)

				   			@include('artists.a', array('artist' => $artist))
				   			
				   		@endforeach		
				   		<!-- loop end-->
				   		{!! $artists->render() !!}
				  </div>
				</div>


			</div>
		</div>
		@include('side')
	</div>
<div class="clear"></div>

	
	
@stop