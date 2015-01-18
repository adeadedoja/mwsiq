<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    

    <title>@if(isset($title)) {{$title}} @else Mwsiq @endif</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrapyeti.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/navbar-static-top.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/font-awesome-ie7.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="lib/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand bl" href="/">{!! HTML::image('img/logo.fw.png') !!}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/song">Songs</a></li>
            <li><a href="/artist">Artists</a></li>
            <li><a href="/genre">Genres</a></li>
            <li><a href="/playlist">Playlists</a></li>
            <li><a href="/playlist">Blog</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{URL::to('http://www.facebook.com/MWSIQCOM')}}"><i class="icon-facebook col"></i></a></li>
            <li><a href="{{URL::to('http://www.twitter.com/mwsiqe')}}"><i class="icon-twitter col"></i></a></li>
            <li><a href="../navbar/"><i class="icon-youtube col"></i></a></li>
            <li><a href="../navbar/"><i class="icon-tumblr col"></i></a></li>
            <li><a href="../navbar/"><i class="icon-google-plus col"></i></a></li>
          </ul>
          
          {!!Form::open(array('url' => '/search'))!!}
             {!!Form::text('keyword', null, array('class' => 'form-control', 'placeholder' => 'Search Mwsiq.com here')) !!}
             <i class="icon-search sea" role="button" tabindex="0"></i>
          {!!Form::close()!!}
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	

    <div class="container">

    	@yield('content')
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <script src="/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
