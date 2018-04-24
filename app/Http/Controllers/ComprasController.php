<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Http\Requests\CompraRequest;
use App\Http\Controllers\Controller;
use App\Compra;
use App\User;

class ComprasController extends Controller
{
    /**
     * mostramos la lista de compras
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $compras=Compra::Search($request->compras)->orderBy('id','DESC')->paginate(5);



        $compras->each(function($compras){ 
            $compras->user;
        });

        //dd($compras);

        return view('admin.compras.listacompras')->with('compras',$compras);
    }

    /**
     * mostramos formulario creación compras
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        $usuarios = User::orderBy('name','ASC')->where('user', '=', 1)->pluck('name','id');

        //dd($usuarios);

        return view('admin.compras.create')->with('usuarios',$usuarios);
    }

    /**
     * guardamos la nueva compra
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompraRequest $request)
    {
        $compras = new Compra($request->all());
        $compras->save();

        flash('La compra del usuario admin '.$compras->usuario_id.' se ha creado correctamente')->success();
        
        return redirect()->route('compras.listacompras');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compras = Compra::find($id);
        $usuarios = User::orderBy('name','ASC')->where('user', '=', 1)->pluck('name','id');

        return view('admin.compras.edit')->with('compras',$compras)->with('usuarios',$usuarios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $compras = Compra::find($id);
        //reemplazamos los datos con los datos obtenidos del formulario
        $compras->fill($request->all());
        $compras->save();

        flash('La compra del usuario admin '.$compras->usuario_id.' se ha actualizado correctamente')->important();

        return redirect()->route('compras.listacompras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compras = Compra::find($id);

        $compras->delete();

        flash('La compra del usuario admin '.$compras->usuario_id.' se ha eliminado correctamente')->error()->important();
        
        return redirect()->route('compras.listacompras');
    }
}
