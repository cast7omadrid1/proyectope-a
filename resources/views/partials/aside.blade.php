              
                        

                        <div class="panel panel-primary sombra zoomIt categoriaresponsive">
                          <div class="panel-heading leftname">
                            <h3 class="panel-title ">Categorias</h3>
                          </div>
                          <div class="panel-body">
                            <ul class="list-group">
                              
                              @foreach($categories as $category)
                              <li class="list-group-item">
                                <span class=" badge badge-error">{{$category->articles->count()}}</span>
                                <a href="{{route('search.category', $category->name)}}">
                                  {{$category->name}}
                                </a>
                              </li>
                              @endforeach
                            </ul>
                          </div>
                          

                        </div>

                        <div class="panel panel-primary sombra zoomIt tagsresponsive">
                          <div class="panel-heading leftname">
                            <h3 class="panel-title">Tags</h3>
                          </div>
                          <div class="panel-body">
                          @foreach($tags as $tag)
                            <span class="label  ">
                              <a href="{{route('search.tag', $tag->name)}}">
                                    {{$tag->name}}
                              </a>
                            </span>
                           @endforeach

                          <!--Añadir tags!--> 
                          <!--Solo se muestra si el user esta logado-->
                          @if (Route::has('login'))
                            @if (Auth::check()) 
                              @if (Auth::user()->user == 1 )
                                <p id='mostrartags'><a href="javascript:mostrartags(this);"><span>Añadir tags</span></a></p>
                              @endif
                            @endif
                          @endif
                                  <div id="flotante" style="display:none;">
                                    <div id="close"><p><a href="javascript:cerrartags(this);"><span class="glyphicon glyphicon-eye-close"></span></a></p></div>
                                    <!--La ruta hace referencia al metodo utilizado por el formulario-->
                                    {{Form::open(['route'=>'tags.storeadd','method'=>'POST','files'=>true])}}
                                    <div class="form-group">
                                      {{Form::text('name',null,['class'=>'form-control','placeholder'=>'Añade un nuevo tag','required'])}}
                                    </div>
                                    <!--botón submnit-->
                                    <div class='form-group'>
                                      {{Form::submit('Añadir tag',['class'=>'btn btn-primary'])}}
                                    </div>
                                    {{Form::close()}}
                                  </div>
                          
                          

                          </div>
                        </div>

