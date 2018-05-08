
@extends('plantillamaster')
@section('titulo','Noticias')

@section('contenido')


	<div class="row ">
        <!--Titulo de la galería de imagenes-->
        <div class="col-xs-12 col-sm-6 col-md-8">
            <h4 class="classic-title tituloseccion" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Noticias</span></h4>
        </div>
        
        <h4 class="classic-title tituloseccion tituloredes" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Calendario</span></h4>


		
		<div class="panel panel-primary sombra zoomIt">
                          <div class="panel-heading leftname">
                            <h3 class="panel-title ">Categorias</h3>
                          </div>
                          <div class="panel-body">
                            <script language="javascript" type="text/javascript" src="http://rss.sindicacion.net/view_rss/b2ZtPTQmb2Z4PXRydWU=/ZWZiPXRydWU=/aD1odHRwJTNBJTJGJTJGZXN0YXRpY29zLm1hcmNhLmNvbSUyRnJzcyUyRmZ1dGJvbCUyRnByaW1lcmEtZGl2aXNpb24ueG1s"></script><a href="http://rss.sindicacion.net/" style="padding:2px 0px 2px 8px;text-indent:-8px;font:12px Times New Roman, serif;color:#0000FF;">RSS</a>
                          </div>
</div>
 		
 	</div>

@endsection