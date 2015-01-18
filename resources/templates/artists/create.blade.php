@extends('layout')

@section('content')




  
    {!! Form::open(['route' => 'artist.store', 'class' => 'form-horizontal'] ) !!}
    <fieldset>
    <legend>New Artist </legend>
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
          <label for="inputTitle" class="col-lg-2 control-label">Facebook</label>
          <div class="col-lg-10">
            {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Instagram</label>
          <div class="col-lg-10">
            {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Twitter</label>
          <div class="col-lg-10">
            {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Youtube</label>
          <div class="col-lg-10">
            {!! Form::text('youtube', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="inputTitle" class="col-lg-2 control-label">Biography</label>
          <div class="col-lg-10">
            {!! Form::textarea('biography', null, ['class' => 'form-control']) !!}
          </div>
        </div>    
        <div class="form-group">
          <label for="" class="col-lg-2 control-label"></label>
          <div class="col-lg-10">
            {!! Form::submit('Update Artist', ['class' => 'btn btn-primary']) !!}
          </div>
        </div>    
          

        </fieldset>
    {!! Form::close() !!}

    
   
@stop