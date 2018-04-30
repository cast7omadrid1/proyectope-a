@extends('plantillamaster')
@section('titulo','Organigrama')

@section('contenido')



<div class="col-xs-12">
  <h4 class="classic-title tituloseccion" onmouseover="javascript:this.style.color='#00D2A8';" onmouseout="javascript:this.style.color='#262626';"><span>Organigrama de la peña</span></h4>
</div>


<div class="container marketing centro">


      <div class="row">
        <div class="col-lg-12">
          @foreach($avatar1 as $avatar)
            <img class="img-circle" src="{{asset('uploads/avatars/'.$avatar->avatar)}}" alt="Generic placeholder image" width="140" height="140">
          
          <h2>Presidente</h2><span>{{$avatar->name}}</span>
          @endforeach
          <p>Presidente de la peña y primer miembro de la junta de la peña deportiva Soccer adicts</p>
          <ul class="social-list socialpresidente">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
          </ul>
        </div>
        <div class="col-lg-4 altura">
          @foreach($avatar2 as $avatar)
            <img class="img-circle" src="{{asset('uploads/avatars/'.$avatar->avatar)}}" alt="Generic placeholder image" width="140" height="140">
          
          <h2>Vicepresidente</h2><span>{{$avatar->name}}</span>
          @endforeach
          <p>Vicepresidente y segundo miembro de la junta de la peña deportiva Soccer adicts</p>
          <ul class="social-list socialcenter">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
          </ul>
        </div> 
        <div class="col-lg-4 altura">
          @foreach($avatar3 as $avatar)
            <img class="img-circle" src="{{asset('uploads/avatars/'.$avatar->avatar)}}" alt="Generic placeholder image" width="140" height="140">
          
          <h2>Tesorero</h2><span>{{$avatar->name}}</span>
          @endforeach
          <p>Tesorero de la peña y tercer miembro de la junta deportiva Soccer adicts</p>
          
           <ul class="social-list socialcenter">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
          </ul>
        </div>
        <div class="col-lg-4 altura">
          @foreach($avatar4 as $avatar)
            <img class="img-circle" src="{{asset('uploads/avatars/'.$avatar->avatar)}}" alt="Generic placeholder image" width="140" height="140">
          
          <h2>Miembro de la junta</h2><span>{{$avatar->name}}</span>
          @endforeach
          <p>Cuarto miembro de la junta de la peña deportiva Soccer adicts</p>
          
           <ul class="social-list socialcenter">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
          </ul>
        </div>
        <div class="col-lg-4 altura">
          @foreach($avatar5 as $avatar)
            <img class="img-circle" src="{{asset('uploads/avatars/'.$avatar->avatar)}}" alt="Generic placeholder image" width="140" height="140">
          <h2>Miembro compromisario</h2><span>{{$avatar->name}}</span>
          @endforeach
          <p>Miembro compromisario de la peña deportiva Soccer adicts</p>
          <ul class="social-list socialcenter">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
          </ul>
        </div> 
        <div class="col-lg-4 altura">
          @foreach($avatar6 as $avatar)
            <img class="img-circle" src="{{asset('uploads/avatars/'.$avatar->avatar)}}" alt="Generic placeholder image" width="140" height="140">
          <h2>Miembro compromisario</h2><span>{{$avatar->name}}</span>
          @endforeach
          <p>Miembro compromisario de la peña deportiva Soccer adicts</p>
          <ul class="social-list socialcenter">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
          </ul>
        </div> 
        <div class="col-lg-4 altura">
          @foreach($avatar7 as $avatar)
            <img class="img-circle" src="{{asset('uploads/avatars/'.$avatar->avatar)}}" alt="Generic placeholder image" width="140" height="140">
          <h2>Miembro compromisario</h2><span>{{$avatar->name}}</span>
          @endforeach
          <p>Miembro compromisario de la peña deportiva Soccer adicts</p>
          <ul class="social-list socialcenter">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
          </ul>
        </div> 
        <div class="col-lg-4 altura">
          @foreach($avatar8 as $avatar)
            <img class="img-circle" src="{{asset('uploads/avatars/'.$avatar->avatar)}}" alt="Generic placeholder image" width="140" height="140">
          
          <h2>Primer vocal</h2><span>{{$avatar->name}}</span>
          @endforeach
          <p>Primer vocal de la peña deportiva Soccer adicts</p>
          <ul class="social-list socialcenter">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
          </ul>
        </div> 
        <div class="col-lg-4 altura">
          @foreach($avatar9 as $avatar)
            <img class="img-circle" src="{{asset('uploads/avatars/'.$avatar->avatar)}}" alt="Generic placeholder image" width="140" height="140">
          
          <h2>Segundo vocal</h2><span>{{$avatar->name}}</span>
          @endforeach
          <p>Segundo vocal de la peña deportiva Soccer adicts</p>
          <ul class="social-list socialcenter">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
          </ul>
        </div> 
        <div class="col-lg-4 altura">
          @foreach($avatar10 as $avatar)
            <img class="img-circle" src="{{asset('uploads/avatars/'.$avatar->avatar)}}" alt="Generic placeholder image" width="140" height="140">
          <h2>Tercer vocal</h2><span>{{$avatar->name}}</span> 
          @endforeach
          <p>Tercer vocal de la peña deportiva Soccer adicts</p>
          <ul class="social-list socialcenter">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
          </ul>
        </div> 
      </div>

</div>







@stop