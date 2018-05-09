@extends('plantillamaster')
@section('titulo','Eventos')

@section('contenido')

<!--Para mostrar los mensajes flash-->
@include('flash::message')

@if (Route::has('login'))
    
    @if (Auth::check())
    @if (Auth::user()->user == 0 || Auth::user()->user == 1)



<section>
	

  <script type="text/javascript">
     
    $( ".lb_flowers" ).rlightbox();
      
  </script>


				<div class="row">
        <!--<div class="col-xs-12 col-sm-6 col-md-8">
          <h2 class="tituloseccion" onmouseover="javascript:this.style.color='#19F0DB';" onmouseout="javascript:this.style.color='#00D2A8';">Nuestros eventos ¡Visitanos!</h2>
        </div>-->

         <div class="col-xs-12 col-sm-6 col-md-8">
            <h4 class="classic-title tituloseccion" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Nuestros eventos ¡Visitanos!</span></h4>
        </div>
        
        <h4 class="classic-title tituloseccion tituloredes" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Calendario</span></h4>
        <!--<h2 class="tituloseccion tituloredes" onmouseover="javascript:this.style.color='#19F0DB';" onmouseout="javascript:this.style.color='#00D2A8';">Nuestras redes sociales</h2>-->  

                    <div class="col-md-8">
                        
                        <div class="row">
                          
                          @foreach($articles as $article)
                          <div class="col-md-6 leftimage zoomIt">
                            <div class="thumbnail sombra">
                              <div class="panel-body ">
                              @foreach($article->image as $image)
                                
                                <!--Ampliación de imagenes-->
                    
                                
                              <a href="{{ asset('images/articulos/'.$image->name) }}" rel="lightbox" title="{{$article->description}}">  
                                <img src="{{ asset('images/articulos/'.$image->name) }}" title="{{$article->description}}" class=" img-rounded sizeimage" alt="...">
                              </a>

                              @endforeach 


                              </div>


                              <div class="caption">
                                <h3>{{$article->description}}</h3>
                                
                                <!--Nombre de la categoría-->
                                <a href="{{route('search.category', $article->category->name)}}">
                                  {{$article->category->name}}
                                </a>
                                  
                                  <!--<p id='mostrar'><button onclick="mostrar(this, {{$article->id}})">Mostrar comentarios</button></p>-->

                                  <p id='mostrar'><a href="javascript:mostrar(this,{{$article->id}});"><span > {{$article->comentario->count()}} comentarios</span></a></p>


                                  <div id="flotante_{{$article->id}}" style="display:none;">
                                    <div id="close"><p><a href="javascript:cerrar(this, {{$article->id}});"><span class="glyphicon glyphicon-eye-close"></span></a></p></div>
                                    @foreach($article->comentario as $comentario)
                                      <ul>
                                        <li class="sizecomment"><b>{{$comentario->user->name}}</b> : {{$comentario->comentarios}}</li>
                                      </ul>
                                    @endforeach  
                                  </div>

                                <!--Mostramos hace cuanto se ha creado el ultimo articulo-->
                                <i>{{$article->created_at->diffForHumans()}}</i>

                              </div>
                              
                              

                              <!--La ruta hace referencia al metodo utilizado por el formulario-->
                              {{Form::open(['route'=>['eventospena.store',$article],'method'=>'PUT','files'=>true])}}

                                 <div class="form-group">
                                  {{Form::text('comentarios',null,['class'=>'form-control','placeholder'=>'Añade tu comentario','required'])}}
                                </div>
                                <!--botón submnit-->
                                <div class='form-group'>
                                  {{Form::submit('Enviar comentario',['class'=>'btn btn-primary'])}}
                                </div>
                              {{Form::close()}}
                                

                            </div>
                          </div>
                          @endforeach

                      </div>

                      <!--Render para pasar imagenes-->
                      <div class="leftimage">
                        {!!$articles->render()!!}
                      </div>
                   
                    </div>

                  
					<!--redes sociales
					  <div class="col-xs-6 col-md-4">-->
					  
              <!--Tiene que tener un ancho de 400px
					  	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flacasablancadezaragoza%2F%3Fref%3Dbookmarks&tabs=timeline&width=400px&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=1389376781390269" width="400px" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              
					  	<a class="twitter-timeline" data-lang="es" data-height="800" data-theme="light"  href="https://twitter.com/pmadridzaragoza?ref_src=twsrc%5Etfw">Tweets by pmadridzaragoza</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					  </div>-->
					
          <div class="col-md-4">
          <div class="panel panel-primary sombra tamañopanelcalendario">
                <div class="panel-heading leftname">
                    <a class="panel-title" href="http://www.marca.com/futbol/segunda-division.html?intcmp=MENUMIGA&s_kw=laliga-123">Calendario</a>
                </div>
              <div class="panel-body">
                    <iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;mode=AGENDA&amp;height=210&amp;wkst=2&amp;bgcolor=%23cccccc&amp;src=gkqrhkeecvrssaib9v9araqee8%40group.calendar.google.com&amp;color=%23B1440E&amp;ctz=Europe%2FMadrid" style="border-width:0" width="310" height="210" frameborder="0" scrolling="no"></iframe>
              </div>
        </div>
        </div>
					

    </div>

</section>


@endif

@else


<section>
  

  <div class="row">
        <!--<div class="col-xs-12 col-sm-6 col-md-8">
          <h2 class="tituloseccion" onmouseover="javascript:this.style.color='#19F0DB';" onmouseout="javascript:this.style.color='#00D2A8';">Nuestros eventos ¡Visitanos!</h2>
        </div>-->

         <div class="col-xs-12 col-sm-6 col-md-8">
            <h4 class="classic-title tituloseccion" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Nuestros eventos ¡Visitanos!</span></h4>
        </div>
        
        <h4 class="classic-title tituloseccion tituloredes" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Calendario</span></h4>
        <!--<h2 class="tituloseccion tituloredes" onmouseover="javascript:this.style.color='#19F0DB';" onmouseout="javascript:this.style.color='#00D2A8';">Nuestras redes sociales</h2>--> 
                     
                    <div class="col-md-8">
                        
                        <div class="row">
                          
                          @foreach($articles as $article)
                          <div class="col-md-6 leftimage zoomIt ">
                            <div class="thumbnail sombra">
                              <div class="panel-body ">
                              @foreach($article->image as $image)
                                 
                                <a href="{{ asset('images/articulos/'.$image->name) }}" rel="lightbox" title="{{$article->description}}">  
                                  <img src="{{ asset('images/articulos/'.$image->name) }}" title="{{$article->description}}" class=" img-rounded sizeimage" alt="...">
                                </a>


                              @endforeach 
                              </div>     
                              <div class="caption">
                                <h3>{{$article->description}}</h3>
                                
                                <a href="">
                                  {{$article->category->name}}
                                </a>
                               

                               <p id='mostrar'><a href="javascript:mostrar(this,{{$article->id}});"><span > {{$article->comentario->count()}} comentarios</span></a></p>


                                  <div id="flotante_{{$article->id}}" style="display:none;">
                                    <div id="close"><p><a href="javascript:cerrar(this, {{$article->id}});"><span class="glyphicon glyphicon-eye-close"></span></a></p></div>
                                    @foreach($article->comentario as $comentario)
                                      <ul>
                                        <li class="sizecomment"><b>{{$comentario->user->name}}</b> : {{$comentario->comentarios}}</li>
                                      </ul>
                                    @endforeach  
                                  </div>

                                  
                                <!--Mostramos hace cuanto se ha creado el ultimo articulo-->
                                <i>{{$article->created_at->diffForHumans()}}</i>
                              </div>
                              

                            </div>
                          </div>
                          @endforeach

                      </div>

                      <!--Render para pasar imagenes-->
                      <div class="leftimage">
                        {!!$articles->render()!!}
                      </div>
                   
                    </div>


          <!--redes sociales
            <div class="col-xs-6 col-md-4">-->
            
              <!--Tiene que tener un ancho de 400px
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flacasablancadezaragoza%2F%3Fref%3Dbookmarks&tabs=timeline&width=400px&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=1389376781390269" width="400px" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
              
              <a class="twitter-timeline" data-lang="es" data-height="800" data-theme="light"  href="https://twitter.com/pmadridzaragoza?ref_src=twsrc%5Etfw">Tweets by pmadridzaragoza</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>-->
          
          <div class="col-md-4">
          <div class="panel panel-primary sombra tamañopanelcalendario">
                <div class="panel-heading leftname">
                    <a class="panel-title" href="http://www.marca.com/futbol/segunda-division.html?intcmp=MENUMIGA&s_kw=laliga-123">Calendario</a>
                </div>
              <div class="panel-body">
                    <iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;mode=AGENDA&amp;height=210&amp;wkst=2&amp;bgcolor=%23cccccc&amp;src=gkqrhkeecvrssaib9v9araqee8%40group.calendar.google.com&amp;color=%23B1440E&amp;ctz=Europe%2FMadrid" style="border-width:0" width="310" height="210" frameborder="0" scrolling="no"></iframe>
              </div>
        </div>
        </div>

          
    </div>

</section>

@endif
@endif

 

@endsection