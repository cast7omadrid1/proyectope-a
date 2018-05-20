<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PagosRequest;
use App\Http\Controllers\Controller;
use App\Pago;
use App\User;

class ListapagosController extends Controller
{
    /**
     * Metodo para mostrar la información de los pagos de cada socio
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $pagos=Pago::Search($request->pagos)->orderBy('id','DESC')->paginate(6);

        
        $pagos->each(function($pagos){ 
            $pagos->user;
        });

        //dd($pagos);

        return view('admin.pagos.listapagos')->with('pagos',$pagos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.pagos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PagosRequest $request)
    {
        $pagos = new Pago($request->all());
        $pagos->save();

        flash('El pago del socio '.$pagos->socio_id.' se ha creado correctamente')->success();
        
        return redirect()->route('pagos.listapagos');
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
        $pagos = Pago::find($id);

        return view('admin.pagos.edit')->with('pagos',$pagos);
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
        $pagos = Pago::find($id);
        //reemplazamos los datos con los datos obtenidos del formulario
        $pagos->fill($request->all());
        $pagos->save();

        flash('El pago del socio '.$pagos->socio_id.' se ha actualizado correctamente')->important();

        return redirect()->route('pagos.listapagos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pagos = Pago::find($id);

        $pagos->delete();

        flash('El pago del socio '.$pagos->socio_id.' se ha eliminado correctamente')->error()->important();
        
        return redirect()->route('pagos.listapagos');
    }


    
}
