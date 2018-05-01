@extends('layouts.app')
@section('titulo','Perfil usuario')
@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
         <!--Para mostrar los mensajes flash-->   
         @include('flash::message')
        
        
          <!--Obtenemos la imagen del perfil actual-->
        <img class='img-circle' width="140px" height="140px" src="{{ asset('uploads/avatars/'.$user->avatar) }}">
        <h4>Edita tu avatar</h4>
        
        <!--Formulario para cambiar avatar de usuario-->

        <!--Routa definida en web.php. Con user.profile.update llamamos al metodo update_profile -->
        {{Form::open(['route' => ['user.profile.update'], 'files' => true, 'method' => 'PATCH']) }}
          
          <div class='form-group'>
            {{Form::file('avatar')}}
          </div>
          
          <div class='form-group'>
                {{Form::submit('Actualizar',['class'=>'btn btn-primary'] , ['name' => 'submit']) }}
          </div>
        {{Form::close() }}
          <br/>
          <h4>Edita tu usuario</h4>
          <h2>{{ $user->name }}</h2>
          <h2>{{ $user->email }}</h2>
          <!--Botones para editar y eliminar usuarios-->
          <a href="{{route('admin.usercontroller.edit', $user->id)}}" class="btn btn-primary">Editar nombre</a>
          

    </div>
  </div>
</div>
@endsection