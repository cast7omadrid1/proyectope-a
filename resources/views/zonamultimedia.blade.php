@extends('plantillamaster')
@section('titulo','Multimedia')

@section('contenido')

<script>


  /*Script para mostrar u ocultar el div oculto de comentarios*/
  function mostrar(e, id){

        document.getElementById('flotante_'+id).style.display='block';

    }

    function cerrar(e, id){

        document.getElementById('flotante_'+id).style.display='none';

    }
  /*Script para mostrar u ocultar el div oculto*/
    function mostrartags(e){

        document.getElementById('flotante').style.display='block';

    }

    function cerrartags(e){

        document.getElementById('flotante').style.display='none';

    }
</script>


<!--if para diferenciación entre un usuario normal y un usuario logueado-->
@if (Route::has('login'))
    
          @if (Auth::check())
          @if (Auth::user()->user == 0 || Auth::user()->user == 1)
                    

                    <div class="row ">
                    <!--Titulo de la galería de imagenes-->
                    <div class="col-xs-12">
                      <!--<h2 class="tituloseccion " onmouseover="javascript:this.style.color='#19F0DB';" onmouseout="javascript:this.style.color='#00D2A8';">Galeria de imágenes</h2>-->
                      <h4 class="classic-title tituloseccion" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Galeria de imágenes</span></h4>
                    </div>
                    

                    <!--botón para añadir imagenes-->

                    @if (Auth::user()->user == 1 )
                      <a href="{{route('articles.create')}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn paddingboton">Añade una nueva imagen a nuestra galería!</a>
                    @else
                      <a href="{{route('admin.articles.eventos')}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn paddingboton">Añade una nueva imagen a nuestra galería!</a>
                    @endif
  
                    <!--botón para ver imagenes de cada user-->

                      <a href="{{route('imagenesusuario')}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn paddingeditboton">Edita tus imágenes</a>
                     
                      <div class="col-md-8 ">
                        <div class="row ">
                          <!--Mostramos las imagenes-->
                          @foreach($articles as $article)
                          <div class="col-md-6 leftimage zoomIt tamañoresponsive">
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
                                
                                <a href="{{route('search.category', $article->category->name)}}">
                                  {{$article->category->name}}

                                    
                                </a>
                            
                               <p id='mostrar'><a href="javascript:mostrar(this,{{$article->id}});"><span > {{$article->comentario->count()}} comentarios</span></a></p>


                                  <div id="flotante_{{$article->id}}" style="display:none;">
                                    <div id="close"><p><a href="javascript:cerrar(this, {{$article->id}});"><span class="glyphicon glyphicon-eye-open"></span></a></p></div>
                                    @foreach($article->comentario as $comentario)
                                      <ul>
                                        <li class="sizecomment"><b>{{$comentario->user->name}}</b> : {{$comentario->comentarios}}</li>
                                      </ul>
                                    @endforeach  
                                  </div>

                              
                              <!--La ruta hace referencia al metodo utilizado por el formulario || AÑADIR COMENTARIOS-->
                              {{Form::open(['route'=>['imagepena.store',$article],'method'=>'PUT','files'=>true])}}

                                 <div class="form-group">
                                  {{Form::text('comentarios',null,['class'=>'form-control','placeholder'=>'Añade tu comentario','required'])}}
                                </div>
                                <!--botón submnit-->
                                <div class='form-group'>
                                  {{Form::submit('Enviar comentario',['class'=>'btn btn-primary'])}}
                                </div>
                              {{Form::close()}}
                              
                                <!--Mostramos hace cuanto se ha creado el ultimo articulo-->
                                <i>{{$article->created_at->diffForHumans()}}</i> 

                              </div>  
                            </div>
                          </div>
                          @endforeach

                      </div>

                      <!--Render para pasar imagenes-->
                      <div class="leftrender colorrender">
                        {!!$articles->render()!!}
                      </div>
                   
                    </div>


                  <!--Partial donde mostramos las categorias y los tags-->
                  <div class="col-md-4 aside rightpanel">
                       
                         @include('partials.aside')
                    
                  </div>  

                  
                  </div>
              

      
          @endif
                        
                    
         	@else

          <!--Si el user no esta logado-->
                    
                <div class="row">

                    <!--Titulo de la galería de imagenes-->
                    <div class="col-xs-12">
                      <!--<h2 class="tituloseccion " onmouseover="javascript:this.style.color='#19F0DB';" onmouseout="javascript:this.style.color='#00D2A8';">Galeria de imágenes</h2>-->
                      <h4 class="classic-title tituloseccion" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Galeria de imágenes</span></h4>
                    </div>
                     
                    <div class="col-md-8">
                        
                        <div class="row">
                          
                          @foreach($articles as $article)
                          <div class="col-md-6 leftimage zoomIt tamañoresponsive">
                            <div class="thumbnail sombra">
                              <div class="panel-body ">
                              @foreach($article->image as $image)
                              
                                <a href="{{ asset('images/articulos/'.$image->name) }}" rel="lightbox" title="{{$article->description}}">  
                                  <img  src="{{ asset('images/articulos/'.$image->name) }}" title="{{$article->description}}" class=" img-rounded sizeimage" alt="...">
                                </a>


                              @endforeach 
                              </div>     
                              <div class="caption">
                                <h3>{{$article->description}}</h3>
                                
                                <a href="{{route('search.category', $article->category->name)}}">
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
                      <div class="leftrender colorrender">
                        {!!$articles->render()!!}
                      </div>
                   
                    </div>



                  <!--Partial donde mostramos las categorias y los tags-->
                  <div class="col-md-4 aside rightpanel">
                       
                         @include('partials.aside')
                    
                  </div>  


                </div>
                  
              
          
          @endif
                
          @endif

@endsection
