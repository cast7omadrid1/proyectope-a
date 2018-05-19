@extends('admin.admin')
@section('titulo','Lista compras')
@section('contenido')


	<div class="col-xs-12">
	 	  <!--<h2 class="tituloseccion tituloeventos" onmouseover="javascript:this.style.color='#19F0DB';" onmouseout="javascript:this.style.color='#00D2A8';">Listado compras</h2>-->
	 	  <h4 class="classic-title tituloseccion" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Listado compras</span></h4>
	</div>
	</div>

	<!--Buscador de comentarios-->
	{{Form::open(['route' => 'compras.index','method' => 'GET', 'class' => 'navbar-form pull-right'])}}
	<div class="input-group marginbuscador">
		{{Form::text('compras',null,['class'=>'form-control','placeholder'=>'Buscar compra','aria-describedby'=>'search'])}}
		<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
	</div>
	{{Form::close()}}

	<div class="panel sizetable">
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-hover" >
					<thead>
						<th>ID</th>
						<th>Producto</th>
						<th>Marca</th>
						<th>Cantidad</th>
						<th>Precio</th>
						<th>Usuario</th>
						<th>Fecha</th>
						<th>Acción</th>
					</thead>
					<tbody>
						@foreach($compras as $compra)
							<tr>
								<td>{{$compra->id}}</td>
								<td>{{$compra->producto}}</td>
								<td>{{$compra->marca}}</td>
								<td>{{$compra->cantidad}}</td>
								<td>{{$compra->precio}} €</td>
								<td>{{$compra->user->name}}</td>
								<td>{{$compra->created_at}}</td>
								<td>
									<!--Botones para editar y eliminar articulos-->
									<a href="{{route('admin.compras.edit', $compra->id)}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn botonpaneladmin">Editar</a>
									<a href="{{route('admin.compras.destroy', $compra->id)}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn botonpaneladmin " onclick="return confirm('¿Estas seguro de eliminar esta compra?')">Eliminar</a>		
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>

				<!--Mostramos botones para cambiar en la lista de comentarios -->
				{!!$compras->render()!!}
			</div>
			<hr><a href="{{route('compras.create')}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin">Añadir compra</a>
			
			<a href="{{route('admin.excel_compras')}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin">Exportar excel</a>



		</div>

			</br>
			
	</div>
	
	
@endsection