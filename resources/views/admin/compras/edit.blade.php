@extends('layouts.app')
@section('titulo','Editar compras')
@section('content')


	
	<!--La ruta hace referencia al metodo utilizado por el formulario-->
	{{Form::open(['route'=>['admin.compras.update',$compras],'method'=>'PUT','files'=>true])}}
		
	<div class="container">
    	<div class="row">
        	<div class="col-md-8 col-md-offset-2">


				<div class="panel panel-default ">
		  			<div class="panel-heading">Editar compras</div>
		  			<div class="panel-body ">
					<div class="form-group">
						{{Form::label('producto','Producto')}}
						{{Form::text('producto',$compras->producto,['class'=>'form-control','placeholder'=>'Producto','required'])}}
					</div>
					<div class='form-group'>
						{{Form::label('marca','Marca')}}
						{{Form::text('marca',$compras->marca,['class'=>'form-control','placeholder'=>'Marca','required'])}}
					</div>
					<div class="form-group">
						{{Form::label('cantidad','Cantidad')}}
						{{Form::text('cantidad',$compras->cantidad,['class'=>'form-control','placeholder'=>'Cantidad','required'])}}
					</div>
					<div class="form-group">
						{{Form::label('precio','Precio')}}
						{{Form::text('precio',$compras->precio,['class'=>'form-control','placeholder'=>'Precio','required'])}}
					</div>
					<div class='form-group'>
						{{Form::label('usuario_id','Usuario admin')}}
						{{Form::select('usuario_id',$usuarios,$compras->usuario_id,['class'=>'form-control','placeholder' => 'Selecciona uno de los campos','required'])}}
					</div>
						
					<!--botón submnit-->
		    		<div class='form-group'>
						{{Form::submit('Editar compra',['class'=>'btn btn-primary'])}}
					</div>
					
			
			{{Form::close()}}
					<a href="{{route('compras.listacompras')}}" class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-arrow-left"></span></a>
		 			</div>

				</div>
		</div>
	</div>
</div>

@endsection


@section('js')
	<!--<script>
		$('.textarea-content').trumbowyg();
	</script>-->
@endsection