@extends('layout')

@section('content')




  
    {!! Form::open(array('url' => '/save','class' => 'form-horizontal') ) !!}

    
    <fieldset>
    <legend>New Playlist </legend>
        {!! Form::select('playlist',$playlists, ['class' => 'form-control']) !!}
        @foreach ($songs as $song)
              <div class="form-group">
                <label for="inputTitle" class="col-lg-2 control-label"> {!! Form::checkbox('songs[]',$song->slug)!!} </label>
                  <div class="col-lg-10">
                     {{$song->title}}
                  </div>
              </div> 
             

              @endforeach 
        <div class="form-group">
          <label for="" class="col-lg-2 control-label"></label>
          <div class="col-lg-10">
            {!! Form::submit('Create Playlist', ['class' => 'btn btn-primary']) !!}
          </div>
        </div>    
          

        </fieldset>
    {!! Form::close() !!}

    
   
@stop