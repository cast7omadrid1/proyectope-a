@extends('plantillamaster')
@section('titulo','Multimedia')

@section('contenido')

<!--Titulo de la galería de imagenes-->
                    <div class="col-xs-12">
                      <!--<h2 class="tituloseccion " onmouseover="javascript:this.style.color='#19F0DB';" onmouseout="javascript:this.style.color='#00D2A8';">Galeria de imágenes</h2>-->
                      <h4 class="classic-title tituloseccion" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Tus imágenes</span></h4>
                    </div>


    <div class="row">
                     

                    <div class="col-md-8 ">
                        <div class="row ">
                          
                          @foreach($articles as $article)
                          <div class="col-md-6 leftimage zoomIt">
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
                                    <div id="close"><p><a href="javascript:cerrar(this, {{$article->id}});"><span class="glyphicon glyphicon-eye-close"></span></a></p></div>
                                    @foreach($article->comentario as $comentario)
                                      <ul>
                                        <li><b>{{$comentario->user->name}}</b> : {{$comentario->comentarios}}</li>
                                      </ul>
                                    @endforeach  
                                  </div>

                              
                              <!--La ruta hace referencia al metodo utilizado por el formulario-->
                              {{Form::open(['route'=>['imagepena.storetusimagenes',$article],'method'=>'PUT','files'=>true])}}

                                 <div class="form-group">
                                  {{Form::text('comentarios',null,['class'=>'form-control','placeholder'=>'Añade tu comentario','required'])}}
                                </div>
                                <!--botón submnit-->
                                <div class='form-group'>
                                  {{Form::submit('Enviar comentario',['class'=>'btn btn-primary'])}}
                                </div>
                              {{Form::close()}}
                              
                                


                                @if (Auth::user()->user == 1 )
                                  <a href="{{route('admin.articles.edit', $article->id)}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn colorboton ">Editar</a>
                                @else
                                <!--para que al editar un user normal no pueda añadir categoria admin-->
                                  <a href="{{route('admin.articles.editcategoryone', $article->id)}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn btn-primary ">Editar</a>
                                @endif
                                <!--Al eliminar un articulo no regresa a admin, lo hace a la galeria de imagenes-->
                                <a href="{{route('admin.articles.destroyusernormal',$article->id)}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn colorboton" onclick="return confirm('¿Estas seguro de eliminar este articulo?')">Eliminar</a>


                                <!--Mostramos hace cuanto se ha creado el ultimo articulo-->
                                <br/><i>{{$article->created_at->diffForHumans()}}</i> 


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



                   


                  </div>

@endsection