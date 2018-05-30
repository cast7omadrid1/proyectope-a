<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Soccer addicts - @yield('titulo')</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/icons/logo-ico.ico') }}"></link>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <link href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
    <!--iconos-->
    <!--<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css" media="screen">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link  rel = "stylesheet"  href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css-bootstrap/responsive.css') }}" media="screen">
    <!-- estilos propios  -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/estilospropios.css') }}" media="screen">

    
    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css-bootstrap/style.css') }}" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css-bootstrap/animate.css') }}" media="screen">
    <!-- Color Defult -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css-bootstrap/colors/blue.css') }}" media="screen" />
    
    <link rel="stylesheet" href="{{ URL::asset('slimbox/css/slimbox2.css') }}" type="text/css" media="screen" />
    


</head>
<body>

      @include('partials.errors')

    <!-- Full Body Container-->
  <div id="container">
        
        <!--<nav class="navbar navbar-default navbar-static-top">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    
        
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar 
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar 
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links 
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><span class="fa fa-sign-in"></span>Login</a></li>
                            <li><a href="{{ route('register') }}"><span class="fa fa-pencil-square-o"></span>Registrarse</a></li>
                        @else
                            <li class="navbar-static-top">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   
                                   <!--Imagen de avatar, si no esta cambiado, muestra imagen por defecto
                                   <img width="20px" height="20px" class="img-circle " src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}">
                                    {{ Auth::user()->name }} <span class="caret"></span>

                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>

                                        <a href="{{route('home') }}">
                                            Home
                                        </a>
                                        @if (Auth::user()->user == 1 )
                                         <a href="{{url('/listausuarios')}}">
                                            Panel admin
                                          </a>
                                        @endif
                                    
                                        <!--Nos envia al perfil del usuario
                                        <a href="{{route('user.profile') }}">
                                            Perfil usuario
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
-->

    <!-- Start Header Section -->
    <header class="clearfix">
      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
          <div class="navbar-header" style="margin-bottom: 20px">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="{{ url('/inicio') }}">
              <img alt="" src="images\logos\logo-800px.png" class="img-responsive tamañoimg">
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links-->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><span class="fa fa-sign-in"></span>Login</a></li>
                            <li><a href="{{ route('register') }}"><span class="fa fa-pencil-square-o"></span>Registrarse</a></li>
                        @else
                            <li class="navbar-static-top">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   
                                   <!--Imagen de avatar, si no esta cambiado, muestra imagen por defecto-->
                                   <img width="20px" height="20px" class="img-circle " src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}">
                                    {{ Auth::user()->name }} <span class="caret"></span>

                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>

                                        <a href="{{route('home') }}">
                                            Home
                                        </a>
                                        @if (Auth::user()->user == 1 )
                                         <a href="{{url('/listausuarios')}}">
                                            Panel admin
                                          </a>
                                        @endif
                                    
                                        <!--Nos envia al perfil del usuario-->
                                        <a href="{{route('user.profile') }}">
                                            Perfil usuario
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
              
          <li>
              
                  
                        <!-- Authentication Links-->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><span class="fa fa-sign-in"></span>Login</a></li>
                            <li><a href="{{ route('register') }}"><span class="fa fa-pencil-square-o"></span>Registrarse</a></li>
                        @else
                            <li class="navbar-static-top">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   
                                   <!--Imagen de avatar, si no esta cambiado, muestra imagen por defecto-->
                                   <img width="20px" height="20px" class="img-circle " src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}">
                                    {{ Auth::user()->name }} <span class="caret"></span>

                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
 
                                        <a href="{{route('home') }}">
                                            Home
                                        </a>
                                        @if (Auth::user()->user == 1 )
                                         <a href="{{url('/listausuarios')}}">
                                            Panel admin
                                          </a>
                                        @endif
                                  
                                        <!--Nos envia al perfil del usuario-->
                                        <a href="{{route('user.profile') }}">
                                            Perfil usuario
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    
                
              </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->

        @yield('content')
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('plugins/trumbowyg/trumbowyg.js')}}"></script>
    
    @yield('js')
</body>
</html>
