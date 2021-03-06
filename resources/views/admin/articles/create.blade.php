@extends('layouts.app')
@section('titulo','Añadir imagenes')
@section('content')




	<!--La ruta hace referencia al metodo utilizado por el formulario-->
	{{Form::open(['route'=>'articles.store','method'=>'POST','files'=>true])}}
		
	<div class="container">
    	<div class="row">
        	<div class="col-md-8 col-md-offset-2">


				<div class="panel panel-default" >
		  			<div class="panel-heading" style="padding-left: 10px">Añadir imagenes</div>
		  			<div class="panel-body ">
					<div class="form-group">
						{{Form::label('title','Titulo')}}
						{{Form::text('title',null,['class'=>'form-control','placeholder'=>'Titulo del articulo','required'])}}
					</div>
					<div class='form-group'>
						{{Form::label('description','Descripción imagen')}}
						{{Form::textarea('description',null,['class'=>'form-control textarea-content','required'])}}
					</div>
					

					<div class='form-group'>
						{{Form::label('category_id','Categoría')}}
						{{Form::select('category_id',$categories,null,['class'=>'form-control','placeholder' => 'Selecciona uno de los campos','required'])}}
					</div>
						
					
					<div class='form-group'>
						{{Form::label('tags','Tags')}}
						{{Form::select('tags[]',$tags,null,['tags'=>'id','class'=>'form-control','multiple','required'])}}
					</div>


					<div class='form-group'>
						{{Form::label('image','Imagen')}}
						{{Form::file('image')}}
					</div>

					<!--botón submnit-->
		    		<div class='form-group'>
						{{Form::submit('Añadir imagen',['class'=>'btn btn-success'])}}
					</div>
					
			
			{{Form::close()}}
					 @if (Auth::user()->user == 1 )
					 	<a href="{{route('admin.listaarticulos')}}" class="btn btn-success"><span class="glyphicon glyphicon glyphicon-arrow-left"></span></a>
					 @else
						<a href="{{route('user.zonamultimedia')}}" class="btn btn-success"><span class="glyphicon glyphicon glyphicon-arrow-left"></span></a>
					 @endif
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