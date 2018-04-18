<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Auth;

class AdminController extends Controller
{

	//constructor para la creación de panel admin
	public function __construct(){
		$this->middleware('auth',['except'=> 'createAdmin']);
	}
	//metodo para comprobación de user = admin o no
	private function isAdmin(){
        if (Auth::user()->user == 1) return true;
        else return false;
    }
	//si el usuario es administrador devolvemos 
	public function admin(){
        if ($this->isAdmin()){
            return View('admin.admin');
        } else{
            return redirect()->back();
        }
    }

	//Solo activo para la creación de usuarios -- QUIERO QUE ESTE DENTRO DE LA ZONA PROPIA DEL ADMINISTRADOR (CREAR OTRO CONTROLLER PARA PODER GESTIONARLO)
	//PARA VOLVER A USARLO DESCOMENTAR LA RUTA
   
   /* public function createAdmin(Request $request){
  
  if ($request->isMethod('post'))
  {
   //Roles de validación
   $rules = [
    'name' => 'required|min:5|max:16|regex:/^[a-záéíóúàèìòùäëïöüñ\s]+$/i',
    'email' => 'required|email|max:255|unique:users,email',
    'password' => 'required|min:6|max:18|confirmed',
   ];
   
   //Posibles mensajes de error de validación
   $messages = [
    'name.required' => 'El campo es requerido',
    'name.min' => 'El mínimo de caracteres permitidos son 5',
    'name.max' => 'El máximo de caracteres permitidos son 16',
    'name.regex' => 'Sólo se aceptan letras',
    'email.required' => 'El campo es requerido',
    'email.email' => 'El formato de email es incorrecto',
    'email.max' => 'El máximo de caracteres permitidos son 255',
    'email.unique' => 'El email ya existe',
    'password.required' => 'El campo es requerido',
    'password.min' => 'El mínimo de caracteres permitidos son 6',
    'password.max' => 'El máximo de caracteres permitidos son 18',
    'password.confirmed' => 'Los passwords no coinciden',
   ];
   
   $validator = Validator::make($request->all(), $rules, $messages);
   
   //Si la validación no es correcta redireccionar al formulario con los errores
   if ($validator->fails()){
    return redirect()->back()->withErrors($validator);
   }
   else{ // De los contrario guardar al usuario
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->remember_token = str_random(100);
    //El valor 1 en la columna determina si el usuario es administrador o no
    $user->user = 1;
    
    if ($user->save()){
     return redirect()->back()->with('message', 'Enhorabuena nuevo administrador creado correctamente');
    } else{
     return redirect()->back()->with('error', 'Ha ocurrido un error al guardar los datos');
    }
   }
  }
  

  return View('admin.createadmin');
 }*/
}
