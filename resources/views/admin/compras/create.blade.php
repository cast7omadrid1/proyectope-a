@extends('layouts.app')
@section('titulo','Añadir compras')
@section('content')


	

	<!--La ruta hace referencia al metodo utilizado por el formulario-->
	{{Form::open(['route'=>'compras.store','method'=>'POST','files'=>true])}}
		
	<div class="container">
    	<div class="row">
        	<div class="col-md-8 col-md-offset-2">


				<div class="panel panel-default ">
		  			<div class="panel-heading">Añadir compras</div>
		  			<div class="panel-body ">
					<div class="form-group">
						{{Form::label('producto','Producto')}}
						{{Form::text('producto',null,['class'=>'form-control','placeholder'=>'Producto','required'])}}
					</div>
					<div class='form-group'>
						{{Form::label('marca','Marca')}}
						{{Form::text('marca',null,['class'=>'form-control','placeholder'=>'Marca','required'])}}
					</div>
					<div class="form-group">
						{{Form::label('cantidad','Cantidad')}}
						{{Form::text('cantidad',null,['class'=>'form-control','placeholder'=>'Cantidad','required'])}}
					</div>
					<div class="form-group">
						{{Form::label('precio','Precio')}}
						{{Form::text('precio',null,['class'=>'form-control','placeholder'=>'Precio','required'])}}
					</div>
					<div class='form-group'>
						{{Form::label('usuario_id','Usuario admin')}}
						{{Form::select('usuario_id',$usuarios,null,['class'=>'form-control','placeholder' => 'Selecciona uno de los campos','required'])}}
					</div>
						
					<!--botón submnit-->
		    		<div class='form-group'>
						{{Form::submit('Añadir compra',['class'=>'btn btn-primary'])}}
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