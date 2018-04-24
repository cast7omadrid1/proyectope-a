@extends('plantillamaster')
@section('titulo','Contacto')

@section('contenido')


  
    	<div style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=calle%20emilio%20castelar%2C81+(My%20Business%20Name)&amp;ie=UTF8&amp;t=p&amp;z=15&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Google map generator</a></iframe></div><br />
    
   


<!--<div class="row">
	<div class="col-xs-4">
  		<div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Formulario de contacto</h3></div>
             	<div class="panel-body">-->
	<div id="content">
      <div class="container">

        <div class="row">

          <div class="col-md-8">

			<!-- Classic Heading -->
            <h4 class="classic-title"><span>Contacta con nosotros</span></h4>


               		{{ Form::open(['route' => 'send', 'method' => 'post']) }}
			            <div class="form-group">
			                {!! Form::label('email', 'E-Mail') !!}
			                {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
			            </div>
		                <div class="form-group">
		                   	{!! Form::label('subject', 'Asunto') !!}
		                    {!! Form::text('subject', null, ['class' => 'form-control' ]) !!}
		                </div>
		                <div class="form-group">
		                    {!! Form::label('body', 'Mensaje') !!}
		                    {!! Form::textarea('body', null, ['class' => 'form-control' ]) !!}
		                </div>
		                <div class="form-group">
		                    {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
		                </div>
               		{{Form::close()}}




			</div>

			<div class="col-md-4">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Información</span></h4>

            <!-- Some Info -->
            <p>¡Ven a visitarnos!</p>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:10px;"></div>

            <!-- Info - Icons List -->
            <ul class="icons-list">
              <li><i class="fa fa-globe">  </i> <strong>Dirección:</strong> Emilio Castelar,81,50013</li>
              <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> socceraddicts@gmail.com</li>
              <li><i class="fa fa-mobile"></i> <strong>Teléfono:</strong> +34 976 618 450</li>
            </ul>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:15px;"></div>

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Horario</span></h4>

            <!-- Info - List -->
            <ul class="list-unstyled">
              <li><strong>Según el horario de los partidos</strong>
              <li><strong>Informate en nuestras redes sociales</li>
            </ul>

          </div>

		</div>
	</div>
</div>
               	<!--	
             	</div>
        </div>
    </div>
  	
</div>-->




@endsection