@extends('layout')

@section('content')




  
    {!! Form::model($playlist, ['route' => ['playlist.update', $playlist->slug], 'class' => 'form-horizontal', 'method' => 'PATCH'] ) !!}
    <fieldset>
    <legend>Edit {{$playlist->name}}</legend>
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Name</label>
          <div class="col-lg-10">
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Slug</label>
          <div class="col-lg-10">
            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Art</label>
          <div class="col-lg-10">
            {!! Form::text('art', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="" class="col-lg-2 control-label"></label>
          <div class="col-lg-10">
            {!! Form::submit('Update Playlist', ['class' => 'btn btn-primary']) !!}
          </div>
        </div>    
          

        </fieldset>
    {!! Form::close() !!}

    {!! delete_form(['playlist.destroy', $playlist->slug]) !!}
   
@stop