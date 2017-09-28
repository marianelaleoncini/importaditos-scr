<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Importaditos</title>

        <!-- ============== CSS ============== -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
            integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/font-awesome-4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" 
                      aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">Importaditos SCR</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('home') }}">HOME</a></li>
                        <li><a href="{{ route('stock') }}">STOCK</a></li>
                        <li><a href="#">CONSULTAS</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMIN
                        <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="{{ route('brands') }}">Marcas</a></li>
                              <li><a href="{{ route('sizes') }}">Talles</a></li>
                              <li><a href="{{ route('products') }}">Productos</a></li>
                              <li role="separator" class="divider"></li>
                              <li class="dropdown-header">Nav header</li>
                              <li><a href="#">Separated link</a></li>
                              <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li><a href="{{ route('auth.login') }}">Iniciar Sesión</a></li>
                            <li><a href="{{ route('auth.register') }}">Registrarse</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                            aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('auth.logout') }}"><i class="fa fa-btn fa-sign-out">
                                    </i>Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="general-container">
            @yield('content')

        </div>
        <footer>
            {{--  <p class="pull-right"><a href="#">Volver arriba</a></p>  --}}
            <span>&middot; &copy; Diseñado y Desarrollado por Marianela Leoncini &middot;</span>
        </footer>

        <!-- ============== JavaScript ============== -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" 
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
        
    </body>
</html>