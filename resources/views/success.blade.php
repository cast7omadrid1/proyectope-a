@extends('plantillamaster')
@section('titulo','Contacto')

@section('contenido')

<div class="container">
   <div class="row">
       <div class="col col-md-6 col-md-offset-3"   >
           <div class="panel panel-default">
             <div class="panel-heading" style="padding-left: 10px"><h3 class="panel-title">Atencion!!!</h3></div>
             <div class="panel-body">
               <h4>Tu mensaje ha sido enviado, pronto responderemos a tu solicitud.</h4>
             </div>
             <div class="panel-footer">
                 <a href="{{ route('contacto') }}" class="btn btn-primary btn-xs">Volver</a>
               </div>
           </div>
        </div>
   </div>
</div>
@endsection