@extends('layouts.app')
@section('titulo','Actualizar pagos')
@section('content')




	<!--La ruta hace referencia al metodo utilizado por el formulario-->
	{{Form::open(['route'=>['admin.pagos.update',$pagos],'method'=>'PUT','files'=>true])}}
	<div class="container">
    	<div class="row">
        	<div class="col-md-8 col-md-offset-2">


				<div class="panel panel-default ">
		  			<div class="panel-heading">Añadir pagos</div>
		  				<div class="panel-body ">
							<div class="form-group">
								{{Form::label('cantidad','Cantidad pago')}}
								{{Form::text('cantidad',$pagos->cantidad,['class'=>'form-control','placeholder'=>'Cantidad pago','required'])}}
							</div>
							<div class="form-group">
								{{Form::label('socio_id','Id de socio')}}
								{{Form::text('socio_id',$pagos->socio_id,['class'=>'form-control','placeholder'=>'id de socio','required'])}}
							</div>
					
							<!--botón submnit-->
				    		<div class='form-group'>
								{{Form::submit('Añadir pago',['class'=>'btn btn-primary'])}}
							</div>
					
			
	{{Form::close()}}
					<a href="{{route('pagos.listapagos')}}" class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-arrow-left"></span></a>
		 			</div>
				</div>
			</div>
		</div>
	</div>

@endsection