@extends('admin.admin')
@section('titulo','Lista articulos')
@section('contenido')


<div class="col-xs-12">
 	  <h2 class="tituloseccion tituloeventos" onmouseover="javascript:this.style.color='#19F0DB';" onmouseout="javascript:this.style.color='#00D2A8';">Listado imágenes</h2>
</div>



<!--<input type="button" value="Registra un usuario" class="btn btn-primary" onclick = "location='{{ url('/register') }}'"/>-->

<!--Buscador de articulos-->
	{{Form::open(['route' => 'articles.index','method' => 'GET', 'class' => 'navbar-form pull-right'])}}
	<div class="input-group">
		{{Form::text('title',null,['class'=>'form-control','placeholder'=>'Buscar titulo','aria-describedby'=>'search'])}}
		<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
	</div>
	{{Form::close()}}

<div class="panel sizetable">
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-hover" >
				<thead>
					<th>ID</th>
					<th>Titulo</th>
					<th>Description</th>
					<th>Categoria</th>
					<th>Tags</th>
					<th>Usuario</th>
					<th>Acción</th>
				</thead>
				<tbody>
					@foreach($articles as $article)
					<tr>
						<td>{{$article->id}}</td>
						<td>{{$article->title}}</td>		
						<td>{{$article->description}}</td>
						<td>{{$article->category->name}}</td>
						

						<td>
							@foreach($article->tags as $tags)
								<ul>
								    <li>{{$tags->name}}</li>
								 </ul> 
							@endforeach	
						</td>	
								
						<!--obtener nombre usuario-->
						<td>{{$article->user->name}}</td>

						<td>
							<!--Botones para editar y eliminar articulos-->
							<a href="{{route('admin.articles.edit', $article->id)}}" class="btn btn-primary">Editar</a>
							<a href="{{route('admin.articles.destroy',$article->id)}}" class="btn btn-success" onclick="return confirm('¿Estas seguro de eliminar este articulo?')">Eliminar</a>		
						</td>

					</tr>
					@endforeach
				</tbody>

			</table>
		</div>

		<!--Mostramos botones para cambiar en la lista de articulos -->
		{!!$articles->render()!!}

		<!--<hr><a href="{{route('articles.create')}}" class="btn btn-primary">Añadir imagen</a>-->

		<hr><a href="{{route('articles.create')}}" onmouseover="javascript:this.style.backgroundColor='#19F0DB';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn btn-primary botonpaneladmin">Añadir imagen</a>
			                    
		<a href="{{route('admin.excel_articles')}}" onmouseover="javascript:this.style.backgroundColor='#19F0DB';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn btn-primary botonpaneladmin">Exportar excel</a>
	</div>
</div>



@endsection