
@extends('plantillamaster')
@section('titulo','Noticias')

@section('contenido')

	<div class="row ">
        <!--Titulo de la galería de imagenes-->
        <div class="col-xs-12 col-sm-6 col-md-8">
            <h4 class="classic-title tituloseccion" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Noticias RSS</span></h4>
        </div>
        
        <h4 class="classic-title tituloseccion tituloredes" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Nuestras redes sociales</span></h4>

		<div class="col-md-8">
		<!--Paneles para mostrar RSS liga santander y liga123  -->
		<div class="row">
			
  			<div class="col-md-4 ">
  				<div class="panel panel-primary sombra tamañopanelrss">
		            <div class="panel-heading leftname">
		                <a class="panel-title" href="http://www.marca.com/futbol/primera-division.html?intcmp=MENUMIGA&s_kw=laliga-santander">Liga Santander RSS MARCA</a>
		            </div>
		       		<div class="panel-body">
		                <?php use App\Http\Controllers\NoticiasController; echo NoticiasController::getLinks('http://estaticos.marca.com/rss/futbol/primera-division.xml',3);?>
		        	</div>
				</div>
  			</div>
  			<div class="col-md-4 paddingizquierda">
  				<div class="panel panel-primary sombra tamañopanelrss">
		            <div class="panel-heading leftname">
		                <a class="panel-title" href="http://www.marca.com/futbol/segunda-division.html?intcmp=MENUMIGA&s_kw=laliga-123">LaLiga 123 RSS MARCA</a>
		            </div>
		       		<div class="panel-body">
		                <?php echo NoticiasController::getLinks('http://estaticos.marca.com/rss/futbol/segunda-division.xml',3);?>            
		        	</div>
				</div>
  			</div>
  		</div>	
  			
		
		<!--Paneles para mostrar RSS champions league y europa league -->
		<div class="row">
  			<div class="col-md-4">
  				<div class="panel panel-primary sombra tamañopanelrss">
		            <div class="panel-heading leftname">
		                <a class="panel-title" href="http://www.marca.com/futbol/champions-league.html?intcmp=MENUPROD&s_kw=champions-league">Champions League RSS MARCA</a>
		            </div>
		       		<div class="panel-body">
		                <?php  echo NoticiasController::getLinks('http://estaticos.marca.com/rss/futbol/champions-league.xml',3);?>
		        	</div>
				</div>
  			</div>
  			<div class="col-md-4 paddingizquierda">
  				<div class="panel panel-primary sombra tamañopanelrss">
		            <div class="panel-heading leftname">
		                <a class="panel-title" href="http://www.marca.com/futbol/europa-league.html?intcmp=MENUPROD&s_kw=europa-league">Europa League RSS MARCA</a>
		            </div>
		       		<div class="panel-body">
		                <?php echo NoticiasController::getLinks('http://estaticos.marca.com/rss/futbol/europa-league.xml',3);?>            
		        	</div>
				</div>
  			</div>
		</div>
		<!--Paneles para mostrar RSS selección española y fútbol internacional  -->
		<div class="row">
  			<div class="col-md-4 ">
  				<div class="panel panel-primary sombra tamañopanelrss">
		            <div class="panel-heading leftname">
		                <a class="panel-title" href="http://www.marca.com/futbol/seleccion.html?intcmp=MENUPROD&s_kw=selecci%F3n-espanola">Selección española RSS MARCA</a>
		            </div>
		       		<div class="panel-body">
		                <?php  echo NoticiasController::getLinks('http://estaticos.marca.com/rss/futbol/seleccion.xml',3);?>
		        	</div>
				</div>
  			</div>
  			<div class="col-md-4 paddingizquierda">
  				<div class="panel panel-primary sombra tamañopanelrss">
		            <div class="panel-heading leftname">
		                <a class="panel-title" href="http://www.marca.com/futbol/futbol-internacional.html?intcmp=MENUPROD&s_kw=futbol-internacional">Fútbol internacional RSS MARCA</a>
		            </div>
		       		<div class="panel-body">
		                <?php echo NoticiasController::getLinks('http://estaticos.marca.com/rss/futbol/futbol-internacional.xml',3);?>            
		        	</div>
				</div>
  			</div>
  		</div>
  			
		</div>
 		
			
 			<!--redes sociales-->
  			<div class="col-xs-6 col-md-4">
            
              <!--Tiene que tener un ancho de 400px-->
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flacasablancadezaragoza%2F%3Fref%3Dbookmarks&tabs=timeline&width=400px&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=1389376781390269" width="400px" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              
              <a class="twitter-timeline" data-lang="es" data-height="800" data-theme="light"  href="https://twitter.com/pmadridzaragoza?ref_src=twsrc%5Etfw">Tweets by pmadridzaragoza</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
		</div>
@endsection