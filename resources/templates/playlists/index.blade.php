@extends('layout')

@section('content')
	<div class="others">
		<div class="col-md-8 pp">
			<div class="l1">
				<div class="panel panel-default">
				  <div class="panel-heading"><i class="icon-list coli"></i> Playlists on Mwsiq.com</div>
				  <div class="panel-body">
				   						   		<!--loop start-->
				   		
				   		@foreach ($playlists as $playlist)

				   			@include('playlists.a', array('playlist' => $playlist))
				   		@endforeach		
				   		<!-- loop end-->
				   		{!! $playlists->render() !!}
				  </div>
				</div>


			</div>
		</div>
		@include('side')
	</div>
<div class="clear"></div>

	
	
@stop