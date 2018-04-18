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
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="images/slider/bernabeu1.png" alt="slider">
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
            <img class="img-responsive" src="images/slider/maquinaescribir.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                  <span><strong>Las noticias</strong> más importantes</span>
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
            <img class="img-responsive" src="images/slider/video.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2 white">
                  <span>Visualiza<strong> nuestros videos</strong></span>
                </h2>
                <h3 class="animated3 white">
                  <span></span>
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
    
    <!--Script para cronologia-->

    <!--<script type="text/javascript" src="https://line.do/lib/iframeResizer.host.js"></script><iframe id="linedo" width="100%" height="560" src="https://line.do/embed/2j9d/vertical" frameborder="0" scrolling="no"></iframe><script>iFrameResize({heightCalculationMethod: "lowestElement", enablePublicMethods: true}, "#linedo");</script>-->
<div class="container marketing">

    <div class="row">

      <!--<div class="col-xs-12 col-sm-6 col-md-8">
        <h2 class="tituloseccion tituloeventos" onmouseover="javascript:this.style.color='#19F0DB';" onmouseout="javascript:this.style.color='#00D2A8';">Evento más próximo</h2>
      </div>-->

<!--prueba calendario de google
<iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=300&amp;wkst=2&amp;hl=es&amp;bgcolor=%23ffffff&amp;src=gkqrhkeecvrssaib9v9araqee8%40group.calendar.google.com&amp;color=%23B1440E&amp;ctz=Europe%2FMadrid" style="border-width:0" width="400" height="300" frameborder="0" scrolling="no"></iframe>-->

        <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">¡No te sientas solo! <span class="text-muted">¡Visitanos!</span></h2>
          <p class="lead">Disfruta de un gran ambiente rodeados de amantes de tu deporte favorito y ve cada partido como si estuvieras en el estadio.</p>
          <hr><a href="{{ url('/contacto') }}" onmouseover="javascript:this.style.backgroundColor='#19F0DB';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn btn-primary botonpaneladmin">Contacto</a>
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
          <hr><a href="{{ url('/contacto') }}" onmouseover="javascript:this.style.backgroundColor='#19F0DB';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn btn-primary botonpaneladmin">Galería de imágenes</a>
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
          <hr><a href="{{ route('register') }}" onmouseover="javascript:this.style.backgroundColor='#19F0DB';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn btn-primary botonpaneladmin">Registrate</a>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/inicio/llave.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
  </div>

</div>

    @endsection
    
  
    
   