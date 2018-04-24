<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = "compras";

    protected $fillable = ['producto','marca','cantidad','precio','usuario_id'];

    //un pago pertenece a un solo usuario
    public function user(){

    	return $this->belongsTo('App\User','usuario_id','id');

    }


    public function scopeSearch($query, $compras){

        //nombre  de la columna donde busca, 'como', contenido que va a buscar
        return $query->where('producto','LIKE',"%$compras%");

    }

}
