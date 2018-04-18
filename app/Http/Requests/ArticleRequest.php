<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Article;
use Illuminate\Http\Request;

class ArticleRequest extends FormRequest
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
            'title'         => 'min:8|max:30|required|unique:articles',
            'description'   => 'min:10|max:50|required',
            'image'         => 'required|image',
            'category_id'   => 'required',
            'tags'          => 'required',
        ];
    }
}
