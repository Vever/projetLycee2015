<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{url('images/logo_shortcut.png')}}"/> 
    <title>E-Lycée</title>
    <!-- Bootstrap core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/red.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    
    @yield('headExtra')
  </head>
  <body>
    <header class="navbar-default">
        <nav class="container-fluid">
            <div class="navbar-header">
                <a href="{{url('/')}}" ><img class="navbar-brand" src="{{url('images/logo2.png')}}"/></a>
                <a class="navbar-brand" href="#">{{$user->name}}</a>
                <a class="navbar-brand" href="{{url('auth/logout')}}">Déconnexion</a>
            <div class="blocSocialTop blocSocial">
                  <a href="#" class="fb"></a>
                  <a href="#" class="twitter"></a>
                  <a href="#" class="google"></a>
            </div>
        </nav>
    </header>

    <div class="container">
        <nav class="navbar navbar-default navContent">
            <div class="container-fluid">
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">Fiches</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    @yield('content')
    </div>

    <footer>
      <nav class="container">
            <section class="col-md-3">
                <ul>
                    <li><a href="#">Contact
                    <span class="miniGrowBar"></span></a></li>
                    <li><a href="{{url('/mentionsLegales')}}">Mentions légales
                    <span class="miniGrowBar"></span></a></li>              
                </ul>
            </section>
                <section class="blocSocialFooter blocSocial">
                    <a href="#" class="fb"></a>
                    <a href="#" class="twitter"></a>
                    <a href="#" class="google"></a>
                </section>
                <span class="copy">&copy; e-lycée 2015</span>
        </nav>
    </footer>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/icheck.js')}}"></script>
    <script src="{{url('js/back.js')}}"></script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('input').iCheck({
                checkboxClass: 'icheckbox_flat-red',
                radioClass: 'iradio_flat-red'
            });
        });
    </script>
    @yield('scriptExtra')
  </body>
</html>