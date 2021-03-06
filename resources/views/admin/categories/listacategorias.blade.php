@extends('admin.admin')
@section('titulo','Lista categorias')
@section('contenido')

<div class="col-xs-12">
 	  <!--<h2 class="tituloseccion tituloeventos" onmouseover="javascript:this.style.color='#19F0DB';" onmouseout="javascript:this.style.color='#00D2A8';">Listado categorias</h2>-->
 	  <h4 class="classic-title tituloseccion" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Listado categorias</span></h4>
</div>

<!--Buscador de categorias-->
	{{Form::open(['route' => 'categories.index','method' => 'GET', 'class' => 'navbar-form pull-right'])}}
		<div class="input-group marginbuscador">
			{{Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar categorias','aria-describedby'=>'search'])}}
			<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
		</div>
	{{Form::close()}}	

	<!--<input type="button" value="Registra un usuario" class="btn btn-primary" onclick = "location='{{ url('/register') }}'"/>-->
	<div class="panel sizetable">
	  	<div class="panel-body">
			<div class="table-responsive">
			  	<table class="table table-striped table-hover ">
					<thead>
						<th>ID</th>
						<th>Nombre</th>
						<th>Fecha</th>
						<th>Acción</th>
					</thead>
					<tbody>
					@foreach($categories as $category)
						<tr>
							<td>{{$category->id}}</td>
							<td>{{$category->name}}</td>
							<td>{{$category->created_at}}</td>
							<td>
								<!--Botones para editar y eliminar categorias-->
								<a href="{{route('admin.categories.edit',$category->id)}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin">Editar</a>
								<a href="{{route('admin.categories.destroy',$category->id)}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin" onclick="return confirm('¿Estas seguro de eliminar esta categoria?')">Eliminar</a>				
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
			<!--Mostramos botones para cambiar en la lista de cataegorias-->
			{!!$categories->render()!!} 
			<hr><a href="{{route('categories.create')}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin">Añadir categoria</a>

			<a href="{{route('admin.excel_categories')}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin">Exportar excel</a>

		</div>
	</div>
@endsection