@extends('layout')

@section('content')




  
    {!! Form::open(['route' => 'song.store', 'files' =>true ,'class' => 'form-horizontal']) !!}
    <fieldset>
    <legend>Add a New Song</legend>
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Title</label>
          <div class="col-lg-10">
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Artist</label>
          <div class="col-lg-10">
             {!! Form::select('artist',$artists, ['class' => 'form-control']) !!}
          </div>
        </div>    
         <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Album Art</label>
          <div class="col-lg-10">
            {!! Form::file('albumart', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Producer</label>
          <div class="col-lg-10">
            {!! Form::text('producer', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">playcount</label>
          <div class="col-lg-10">
            {!! Form::text('playcount', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">dlcount</label>
          <div class="col-lg-10">
            {!! Form::text('dlcount', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Link</label>
          <div class="col-lg-10">
            {!! Form::file('link', null, ['class' => 'form-control']) !!}
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
             {!! Form::select('genre',$genres, ['class' => 'form-control']) !!}
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
          <label for="inputTitle" class="col-lg-2 control-label">Lyrics</label>
          <div class="col-lg-10">
            {!! Form::textarea('lyrics', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="" class="col-lg-2 control-label"></label>
          <div class="col-lg-10">
            {!! Form::submit('Create Song', ['class' => 'btn btn-primary']) !!}
          </div>
        </div>    
          

        </fieldset>
    {!! Form::close() !!}


@stop