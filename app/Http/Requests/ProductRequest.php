<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'code'                  => 'required|min:4',
            'name'                  => 'required',
            'description'           => 'required|min:10|max:255',
            'size'                  => '',
            'slug'                  => '',
            'price'                 => 'required|numeric',
            'discount'              => '',
            'discount_percentage'   => '',
            'quantity'              => 'required|numeric',
            'delivery_fee'          => ''
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'Campo obrigatório!',
            'min'       => 'Tamanho mínimo de :min caracteres!',
            'max'       => 'Tamanho máximo de :max caracteres!',
            'numeric'   => 'Somente números!'
        ];
    }
}
