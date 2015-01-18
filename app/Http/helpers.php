<?php

function delete_form($routeParams, $label = 'Delete' ) {
	$form =  Form::open(['method' => 'DELETE', 'route' => $routeParams]);

	$form .= Form::submit($label, ['class' => 'btn btn-danger']); 

	return $form .= Form::close();

	// {!! Form::open(['method' => 'DELETE', 'route' => ['song.destroy', $song->slug]]) !!}
      //  <div class="form-group">
          // {!! Form::submit('Delete Song', ['class' => 'btn btn-danger']) !!}
        //</div>

    //{!! Form::close() !!}

}

