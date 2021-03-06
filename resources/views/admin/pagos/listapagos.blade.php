@extends('admin.admin')
@section('titulo','Lista pagos')
@section('contenido')


	<div class="col-xs-12">
	 	  <!--<h2 class="tituloseccion tituloeventos" onmouseover="javascript:this.style.color='#19F0DB';" onmouseout="javascript:this.style.color='#00D2A8';">Listado pagos</h2>-->
	 	  <h4 class="classic-title tituloseccion" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Listado pagos</span></h4>
	</div>

	<!--Buscador de comentarios-->
	{{Form::open(['route' => 'pagos.index','method' => 'GET', 'class' => 'navbar-form pull-right'])}}
	<div class="input-group marginbuscador">
		{{Form::text('pagos',null,['class'=>'form-control','placeholder'=>'Buscar pago socio','aria-describedby'=>'search'])}}
		<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
	</div>
	{{Form::close()}}

	<div class="panel sizetable">
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-hover" >
					<thead>
						<th>ID</th>
						<th>Nombre socio</th>
						<th>Número socio</th>
						<th>Cantidad</th>
						<th>Fecha</th>
						<th>Acción</th>
					</thead>
					<tbody>
						@foreach($pagos as $pago)
							<tr>
								<td>{{$pago->id}}</td>
								<td>{{$pago->user->name}}</td>
								<td>{{$pago->socio_id}}</td>
								<td>{{$pago->cantidad}} €</td>
								<td>{{$pago->created_at}}</td>
								<td>
									<!--Botones para editar y eliminar articulos-->
									<a href="{{route('admin.pagos.edit', $pago->id)}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn botonpaneladmin">Editar</a>
									<a href="{{route('admin.pagos.destroy', $pago->id)}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn botonpaneladmin" onclick="return confirm('¿Estas seguro de eliminar este pago?')">Eliminar</a>		
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>

				<!--Mostramos botones para cambiar en la lista de comentarios -->
			{!!$pagos->render()!!}
			</div>
			<hr><a href="{{route('pagos.create')}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin">Añadir pago</a>
			
			<a href="{{route('admin.excel_pagosok')}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin">Exportar excel pago ok</a>
	
			<a href="{{route('admin.excel_pagosno')}}" onmouseover="javascript:this.style.backgroundColor='#404040';" onmouseout="javascript:this.style.backgroundColor='#00D2A8';" class="btn  botonpaneladmin">Exportar excel por pagar</a>


		</div>

			</br>
			
	</div>
	
	
@endsection