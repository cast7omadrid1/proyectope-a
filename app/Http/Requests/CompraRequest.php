<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Compra;
use Illuminate\Http\Request;

class CompraRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'producto'    => 'min:5|max:15|required',
            'marca'       => 'max:15|required',
            'cantidad'    => 'required',
            'precio'      => 'required',
            'usuario_id'  => 'required',
        ];
    }
}
