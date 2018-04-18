@extends('admin.admin')
@section('titulo','Lista comentarios')
@section('contenido')


	<div class="col-xs-12">
	 	  <h2 class="tituloseccion tituloeventos" onmouseover="javascript:this.style.color='#19F0DB';" onmouseout="javascript:this.style.color='#00D2A8';">Listado comentarios</h2>
	</div>

	<!--Buscador de comentarios-->
	{{Form::open(['route' => 'comentarios.index','method' => 'GET', 'class' => 'navbar-form pull-right'])}}
	<div class="input-group">
		{{Form::text('comentarios',null,['class'=>'form-control','placeholder'=>'Buscar comentarios','aria-describedby'=>'search'])}}
		<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
	</div>
	{{Form::close()}}

	<div class="panel sizetable">
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-hover" >
					<thead>
						<th>ID</th>
						<th>Comentarios</th>
						<th>Nombre articulo</th>
						<th>Nombre usuario</th>
						<th>Acción</th>
					</thead>
					<tbody>
						@foreach($comentarios as $comentario)
							<tr>
								<td>{{$comentario->id}}</td>
								<td>{{$comentario->comentarios}}</td>
								<td>{{$comentario->article->title}}</td>
								<td>{{$comentario->user->name}}</td>
								<td>
									<!--Botones para editar y eliminar articulos-->
									<a href="{{route('admin.comentarios.edit', $comentario->id)}}" class="btn btn-primary">Editar</a>
									<a href="{{route('admin.comentarios.destroy',$comentario->id)}}" class="btn btn-success" onclick="return confirm('¿Estas seguro de eliminar este comentario?')">Eliminar</a>		
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		
			<!--Mostramos botones para cambiar en la lista de comentarios -->
			{!!$comentarios->render()!!}
			</br>
			<a href="{{route('admin.excel_comentarios')}}" onmouseover="javascript:this.style.backgroundColor='#19F0DB';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn btn-primary botonpaneladmin">Exportar excel</a>
		</div>
	</div>
	
@endsection