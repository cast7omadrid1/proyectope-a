<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class OrganigramaController extends Controller
{
    
    public function index(){

    	

    	//$avatar1  = User::where('name', '=', 'aaron castro')->pluck();

    	 //$avatar1 = User::orderBy('name','DESC')->where('name', '=', 'aaron castro')->pluck('avatar','id');
    	 $avatar1 = User::orderBy('name','DESC')->where('name', '=', 'aaron castro')->paginate(4);

    	$avatar2  = User::orderBy('id','DESC')->where('name', '=', 'pepe')->get();
    	$avatar3  = User::orderBy('id','DESC')->where('name', '=', 'pepito')->get();
    	$avatar4  = User::orderBy('id','DESC')->where('name', '=', 'Juan')->get();
    	$avatar5  = User::orderBy('id','DESC')->where('name', '=', 'Maria')->get();
    	$avatar6  = User::orderBy('id','DESC')->where('name', '=', 'Jose')->get();
    	$avatar7  = User::orderBy('id','DESC')->where('name', '=', 'Marina')->get();
    	$avatar8  = User::orderBy('id','DESC')->where('name', '=', 'Julia')->get();
    	$avatar9  = User::orderBy('id','DESC')->where('name', '=', 'Claudia')->get();
    	$avatar10 = User::orderBy('id','DESC')->where('name', '=', 'Yasmina')->get();

    	//dd($avatar1);

        return view('organigrama')->with('avatar1',$avatar1)->with('avatar2',$avatar2)->with('avatar3',$avatar3)->with('avatar4',$avatar4)->with('avatar5',$avatar5)->with('avatar6',$avatar6)->with('avatar7',$avatar7)->with('avatar8',$avatar8)->with('avatar9',$avatar9)->with('avatar10',$avatar10);
    }




}