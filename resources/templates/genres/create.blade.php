@extends('layout')

@section('content')




  
    {!! Form::open(['route' => 'genre.store', 'class' => 'form-horizontal'] ) !!}
    <fieldset>
    <legend>New Genre </legend>
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
            {!! Form::submit('Create Genre', ['class' => 'btn btn-primary']) !!}
          </div>
        </div>    
          

        </fieldset>
    {!! Form::close() !!}

    
   
@stop