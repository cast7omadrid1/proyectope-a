<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\Auth;
use App\User;
/*********************/

 
class UserController extends Controller
{
 

  public function __construct() {
    $this->middleware('auth')->only('profile', 'update_profile');
  }
 
 //Envia los datos del usuario logueado a la vista
  public function profile() {
    $user = Auth::user();
    return view('profile', ['user' => $user]);
  }
 
 //metodo para actualizar una imagen del perfil del usuario
  public function update_profile(Request $request) {
    
    //valida que sea una imagen lo que subamos
    //posibilidad de limitar el tamaño con size:
    $this->validate($request, [
      'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);
 
    $filename = Auth::id().'_'.time().'.'.$request->avatar->getClientOriginalExtension();
    $request->avatar->move(public_path('uploads/avatars'), $filename);//carpeta donde se almacenan las imagenes de avatar
    
    //obtenemos el usuario , cambiamos su avatar por el archivo subido y guardamos
    $user = Auth::user();
    $user->avatar = $filename;
    $user->save();
    
    //redirigimos a la vista del user
    return redirect()->route('user.profile');

    
  }

  /*Metodo para la edición de usuarios*/
    public function edit($id){

        //obtenemos los datos que queremos editar
        $user = User::find($id);

        //dd($user);
        //le pasamos a la vista los datos del usuario a editar
        return view('admin.usercontrolleredit')->with('user',$user);

        //return redirect()->route('admin.edit')->with('user',$user);
    }

    /*metodo para actualizar los datos del usuario*/
    public function update(Request $request, $id){


        $user=User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        flash('El usuario '.$user->name.' se ha actualizado correctamente')->important();
        
        //redirigimos a la vista del user
        return redirect()->route('user.profile');

    }


}