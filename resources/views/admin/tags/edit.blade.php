@extends('layouts.app')
@section('titulo','Editar tags')
@section('content')

@if(count($errors)>0)
		<div class='alert alert-danger' role="alert">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
			</ul>
		</div>
  	@endif


	<!--La ruta hace referencia al metodo utilizado por el formulario-->
	{{Form::open(['route'=>['tag.update',$tag],'method'=>'PUT','files'=>true])}}
		
	<div class="container">
    	<div class="row">
        	<div class="col-md-8 col-md-offset-2">


				<div class="panel panel-default ">
		  			<div class="panel-heading" style="padding-left: 10px">Editar tags</div>
		  				<div class="panel-body ">
							<div class="form-group">
								{{Form::label('name','Nombre')}}
								{{Form::text('name',$tag->name,['class'=>'form-control','placeholder'=>'Nombre tag','required'])}}
							</div>
					
							<!--botón submnit-->
				    		<div class='form-group'>
								{{Form::submit('Editar tag',['class'=>'btn btn-success'])}}
							</div>
					
			
	{{Form::close()}}
	<a href="{{route('tags.listatags')}}" class="btn btn-success"><span class="glyphicon glyphicon glyphicon-arrow-left"></span></a>
		 				</div>
				</div>
			</div>
		</div>
	</div>

@endsection