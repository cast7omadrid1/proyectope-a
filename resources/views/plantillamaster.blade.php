
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>Soccer addicts - @yield('titulo')</title>
  
  

  <link rel="shortcut icon" href="{{ URL::asset('images/icons/fav_ico.ico') }}"></link>


  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="GrayGrids">

  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 

  <link  rel = "stylesheet"  href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

  <link  rel = "stylesheet"  href = "{{ URL::asset('asset/css/bootstrap.min.css') }}" >

  <!-- Revolution Slider-->
   <link rel="stylesheet" href="{{ URL::asset('css-bootstrap/settings.css') }}" type="text/css" media="screen">


  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css-bootstrap/slicknav.css') }}" media="screen">

  <!--Fuentes-->
 <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" type="text/css" media="screen">

 <!-- Margo CSS Styles  -->
 <link rel="stylesheet" type="text/css" href="{{ URL::asset('css-bootstrap/style.css') }}" media="screen">


<!-- Responsive CSS Styles  -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css-bootstrap/responsive.css') }}" media="screen">


<!-- Css3 Transitions Styles  -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css-bootstrap/animate.css') }}" media="screen">

<!-- Color Defult -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css-bootstrap/colors/blue.css') }}" media="screen" />

<!-- estilos propios  -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/estilospropios.css') }}" media="screen">


<link rel="stylesheet" href="{{ URL::asset('slimbox/css/slimbox2.css') }}" type="text/css" media="screen" />




</head>

<body>


  <!-- Full Body Container-->
  <div id="container">

    

  <!-- Start Header Section -->
    <header class="clearfix">
      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
          <div class="navbar-header">
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
              <li>
                
                <a href="{{ url('/inicio') }}">Inicio</a>
                
              </li>
              <li>
                <a href="{{ url('/eventospena') }}">Eventos Peña</a>
              </li>
              <li>
                <a href="{{ url('/noticias') }}">Noticias</a>
              </li>
              <li>
                <a href="{{ url('/organigrama') }}">Organigrama</a>
              </li>
              <li>
                <a href="{{ url('/zonamultimedia') }}">Zona multimedia</a>
              </li>
              <li><a href="{{ url('/contacto') }}">Contacto</a>
              </li>
              <li>
              <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    

                    <!-- Right Side Of Navbar-->
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
                </div>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
                <a href="{{ url('/inicio') }}">Inicio</a>
              </li>
              <li>
                <a href="{{ url('/eventospena') }}">Eventos Peña</a>
              </li>
              <li>
                <a href="{{ url('/noticias') }}">Noticias</a>
              </li>
              <li>
                <a href="{{ url('/organigrama') }}">Organigrama</a>
              </li>
              <li>
                <a href="{{ url('/zonamultimedia') }}">Zona multimedia</a>
              </li>
              <li><a href="{{ url('/contacto') }}">Contacto</a>
              </li>
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
   

  <div>

  <!--Para mostrar los mensajes flash-->   
  @include('flash::message')
  
    <!--El contenido es lo que cambia-->
  @yield('contenido')
  
  

  </div>

    <!-- Start Footer Section -->
    <footer class="espacio">
      <div class="container">
        <div class="row footer-widgets">
          
            <div class="col-md-4 col-xs-12">
              <h4><img src="images\logos\logo-800px-blanco.png" class="img-responsive tamañoimg" alt="Footer Logo" /></h4>
                <ul>
                  <br/>
                  <li><span>Número de teléfono:</span> +34 976 618 450</li>
                  <li><span>Email:</span> socceraddicts@gmail.com</li>
                  <li>https://www.socceraddicts.com</li>
                  <li><a class="popup-gmaps colorenlace" href="https://www.google.com/maps/place/Calle+Emilio+Castelar,+81,+50013+Zaragoza/@41.6389289,-0.8708344,17z/data=!3m1!4b1!4m5!3m4!1s0xd5914ffea8bc60b:0x758a63355c1ed802!8m2!3d41.6389249!4d-0.8686457?hl=en"><span>Dirección: </span>Emilio Castelar, 81 | Zaragoza</a>
                  </li>
              </ul>
            </div>

          <!-- Start Contact Widget -->
          <div class="col-md-4 col-xs-12">
            <div class="footer-widget contact-widget">
              <h4 class="">Contacta con nosotros<span class="head-line"></span></h4>
                <p>Si tienes alguna duda ¡Preguntanos!</p>
                <a href="{{ url('/contacto') }}" onmouseover="javascript:this.style.backgroundColor='#19F0DB';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin">Contacto</a>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


          <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-4 col-xs-12">
            <div class="footer-widget social-widget ">
              <h4 class="">Siguenos<span class="head-line"></span></h4>
              <ul class="social-icons">
                <li>
                  <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fsocceraddictses&width=159&layout=button_count&action=like&size=small&show_faces=false&share=true&height=46&appId=1389376781390269" width="159" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </li>
                <li>
                  <!--Botón propio de twitter para twitter a través de la página web-->
                  <a href="https://twitter.com/intent/tweet?screen_name=SocceraddictsES&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-related="" data-lang="es" data-show-count="false">Tweet de @SocceraddictsES</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </li>
                <li>
                  <!--<a class="instgram" href="#"><i class="fa fa-instagram"></i></a>-->
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->


          <!--  -->
          
          <!-- .col-md-3 -->
          <!-- End Twitter Widget -->


        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
              <p class="">Copyright © 2018 Castro - Designed &amp; Developed by <a  href="">Aarón Castro</a></p>
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-6">
              <ul class="footer-nav">
                <li><a class="colorenlace" href="#">Sitemap</a>
                </li>
                <li><a class="colorenlace" href="#">Privacy Policy</a>
                </li>
                <li><a class="colorenlace" href="#">Contact</a>
                </li>
              </ul>
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    <!-- End Footer Section -->


  </div>
  <!-- End Full Body Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  

  <script src="{{ URL::asset('http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js') }}"></script>
  
  

  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/jquery-2.1.4.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/jquery.fitvids.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/jquery.isotope.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/jquery.appear.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/jquery.textillate.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/jquery.lettering.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/jquery.easypiechart.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/jquery.slicknav.js') }}"></script> 
  <!--MisJquery-->
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/MisjQueryJS.js') }}
"></script>

  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/jquery.migrate.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/modernizrr.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('asset/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/nivo-lightbox.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/count-to.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/smooth-scroll.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/skrollr.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/jquery.parallax.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js-bootstrap/mediaelement-and-player.js') }}"></script>


  
  <script type="text/javascript" src="{{ URL::asset('bootstrap-design/js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('bootstrap-design/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('bootstrap-design/js/jquery-3.2.1.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('bootstrap-design/js/mdb.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('bootstrap-design/js/mdb.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('bootstrap-design/js/popper.min.js') }}"></script>

  <!--Script para Slimbox2 aumentar la imagen-->
  <script type="text/javascript" src="{{ URL::asset('slimbox/js/slimbox2.js') }}"></script>

  <script type="text/javascript" src="js/script.js"></script>

 <!--Script para la eliminacion de los mensajes de alerta en 3 segundos-->
  <script>
      $('div.alert').delay(3000).fadeOut(350);
  </script>

</body>

</html>

