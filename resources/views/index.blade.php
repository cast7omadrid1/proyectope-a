  @extends('plantillamaster')
  @section('titulo','Inicio')
  
    @section('contenido')
    <!-- Start Home Page Slider -->
    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
          <li data-target="#main-slide" data-slide-to="3"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="images/slider/football.jpeg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                  <span>Bienvenido a <strong>Soccer addicts</strong></span>
                </h2>
                <h3 class="animated3">
                   <span>The real feeling</span>
                  </h3>
                <p class="animated4"><a href="{{ url('/eventospena') }}" class="slider btn btn-system btn-large">Visita nuestros eventos</a>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="images/slider/join.jpeg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                  <span><strong>¡Hazte socio!</strong></span>
                </h2>
                <h3 class="animated3">
                  <span>Informate en nuestra zona de contacto</span>
                </h3>
                <p class="animated4"><a href="{{ url('/contacto') }}" class="slider btn btn-system btn-large">Visita nuestra zona de contacto</a>
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="img-responsive" src="images/slider/news.jpeg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                  <span><strong>Las noticias RSS</strong> más importantes</span>
                </h2>
                <h3 class="animated3">
                  <span>Sobre tu equipo favorito</span>
                </h3>
                <p class="animated4"><a href="{{ url('/noticias') }}" class="slider btn btn-system btn-large">Visita nuestras noticias</a>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="images/slider/gallery.jpeg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2 white">
                  <span>Visualiza<strong> nuestras imágenes</strong></span>
                </h2>
                <h3 class="animated3 white">
                  <span>Sube tus propias imágenes</span>
                </h3>
                <div class="">
                  <p class="animated4"><a href="{{ url('/zonamultimedia') }}" class="slider btn btn-system btn-large">Visita nuestra zona multimedia</a>
                </p>
                </div>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>
      <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->
    
    
<div class="container marketing">

    <div class="row">

      


        <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">¡No te sientas solo! <span class="text-muted">¡Visitanos y hazte socio!</span></h2>
          <p class="lead">Disfruta de un gran ambiente rodeados de amantes de tu deporte favorito y ve cada partido como si estuvieras en el estadio.</p>
          <hr><a href="{{ url('/contacto') }}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin paddingresponsive">Contacto</a>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/inicio/solo.jpg" alt="Generic placeholder image">
        </div>
      </div>

       <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">¡Sube tus imágenes <span class="text-muted">a nuestra galería!</span></h2>
          <p class="lead">Sube tus fotografias en la peña a nuestra fantastica galería y disfruta del resto de fotográfias.</p>
          <hr><a href="{{ url('/zonamultimedia') }}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin paddingresponsive">Galería de imágenes</a>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="images/inicio/movil.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">


      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Registrate <span class="text-muted">en nuestra web</span></h2>
          <p class="lead">Registrate en nuestra web y disfruta del contenido exclusivo. </p>
          <hr><a href="{{ route('register') }}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin paddingresponsive">Registrate</a>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/inicio/llave.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
  </div>

</div>

    @endsection
    
  
    
   