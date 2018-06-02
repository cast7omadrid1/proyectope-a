@extends('admin.admin')
@section('titulo','Lista tags')
@section('contenido')

<div class="col-xs-12">
 	  <!--<h2 class="tituloseccion tituloeventos" onmouseover="javascript:this.style.color='#19F0DB';" onmouseout="javascript:this.style.color='#00D2A8';">Listado tags</h2>-->
 	  <h4 class="classic-title tituloseccion" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Listado tags</span></h4>
</div>

<!--Buscador de categorias-->
		{{Form::open(['route' => 'tag.index','method' => 'GET', 'class' => 'navbar-form pull-right'])}}
		<div class="input-group marginbuscador">
			{{Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar tags','aria-describedby'=>'search'])}}
			<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
		</div>
		{{Form::close()}}

	<!--<input type="button" value="Registra un usuario" class="btn btn-primary" onclick = "location='{{ url('/register') }}'"/>-->
	<div class="panel sizetable">
	  	<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<th>ID</th>
						<th>Tags</th>
						<th>Fecha</th>
						<th>Acción</th>
					</thead>
					<tbody>
					@foreach($tags as $tag)
						<tr>
							<td>{{$tag->id}}</td>
							<td>{{$tag->name}}</td>
							<td>{{$tag->created_at}}</td>
							<td>
								<!--Botones para editar y eliminar tags-->
								<a href="{{route('admin.tags.edit',$tag->id)}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin">Editar</a>
								<a href="{{route('admin.tags.destroy',$tag->id)}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin" onclick="return confirm('¿Estas seguro de eliminar este tag?')">Eliminar</a>				
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
			<!--Mostramos botones para cambiar en la lista de tags-->
			{!!$tags->render()!!} 
			<hr><a href="{{route('tag.create')}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin">Añadir tag</a>

			<a href="{{route('admin.excel_tags')}}" oonmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin">Exportar excel</a>
		</div>
	</div>
@endsection