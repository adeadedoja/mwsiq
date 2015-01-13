@extends('layout')

@section('content')




  
    {!! Form::model($song, ['route' => ['song.update', $song->slug], 'class' => 'form-horizontal', 'method' => 'PATCH'] ) !!}
    <fieldset>
    <legend>Edit {{$song->title}}</legend>
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Title</label>
          <div class="col-lg-10">
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Artist</label>
          <div class="col-lg-10">
            {!! Form::text('artist', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Producer</label>
          <div class="col-lg-10">
            {!! Form::text('producer', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Link</label>
          <div class="col-lg-10">
            {!! Form::text('link', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Slug</label>
          <div class="col-lg-10">
            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Genre</label>
          <div class="col-lg-10">
            {!! Form::text('genre', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Album</label>
          <div class="col-lg-10">
            {!! Form::text('album', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Video</label>
          <div class="col-lg-10">
            {!! Form::text('video', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Video Description</label>
          <div class="col-lg-10">
            {!! Form::textarea('videodesc', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="" class="col-lg-2 control-label"></label>
          <div class="col-lg-10">
            {!! Form::submit('Update Song', ['class' => 'btn btn-primary']) !!}
          </div>
        </div>    
          

        </fieldset>
    {!! Form::close() !!}


@stop