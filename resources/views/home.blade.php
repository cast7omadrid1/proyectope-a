@extends('layouts.app')
@section('titulo','Inicio')
@section('content')

<!--Advertencía de usuario logueado-->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 paddinghomepanel">

        
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-left: 10px">
                 

                    @if (Route::has('login'))
                        <div class="top-right links">
                        @if (Auth::check())
                        <!--Si user == 1 vamos al panel de admin-->
                            @if (Auth::user()->user == 1)
                                <a href="{{ url('/listausuarios') }}" class="colorenlace">Panel de Administrador </a> ||
                            @endif
                            <a href="{{ url('/inicio') }}" class="colorenlace">Inicio</a>
                        
                        @else
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/register') }}">Register</a>
                        @endif
                </div>
                    @endif

            </div>

                <div class="panel-body">
                    <!--<h1>Bienvenid@ a Soccer Adicts {{Auth::user()->name}} </h1>-->
                    <img src="{{ asset('images\logos\logo-800px.png') }}" title="" class="logohome" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


