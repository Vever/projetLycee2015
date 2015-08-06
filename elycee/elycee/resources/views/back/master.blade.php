<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{url('assets/images/elycee.png')}}"/> 

    @yield('title')

    <!-- Bootstrap core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{url('css/style_back.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('css/dashboard.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body cz-shortcut-listen="true">
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{url('/')}}">Retour au site public</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
           @yield('username')
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container-fluid">

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="{{url('home')}}">Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="{{url('fiches')}}">Fiches</a></li>
            <li><a href="{{url('posts')}}">Articles</a></li>
            <li><a href="{{url('students')}}">Elèves</a></li>
          </ul>
        </div>
        
          @yield('content')

        
          @yield('sidebar')

      </div><!--/row-->
      
      @yield('pagination')
      <hr>

      <footer class="col-md-offset-2 ">
        <p>&copy; E-Lycée 2015</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/back.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{url('js/ie10-viewport-bug-workaround.js')}}"></script>

    <script src="offcanvas.js"></script>
  </body>
</html>
