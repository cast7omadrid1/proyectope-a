
@extends('plantillamaster')
@section('titulo','Noticias')

@section('contenido')


	<div class="row ">
        <!--Titulo de la galería de imagenes-->
        <div class="col-xs-12 col-sm-6 col-md-8">
            <h4 class="classic-title tituloseccion" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Noticias</span></h4>
        </div>
        
        <h4 class="classic-title tituloseccion tituloredes" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Calendario</span></h4>
 		<!--prueba rss-->
		<!-- start feedwind code -->
		<div class="col-xs-8">
			<div class="col-xs-6">
 				<iframe width="400" height="400" style="border:none;" src="http://output45.rssinclude.com/output?type=iframe&amp;id=1180026&amp;hash=27fd93cc4b44950fbdaceb6a76b5a3be"></iframe>
 			</div>
 			<div class="col-xs-6">
 				<script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="67710/"></script>
 			</div>
		</div>
		<div class="col-xs-4">
 			<script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="67710/"></script>
		</div>
 	</div>

@endsection