<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'          => 'required',
            'register'      => 'required',
            'company_name'  => 'required',
            'description'   => 'required|min:10|max:255',
            'prefix'        => 'required|min:3|max:5',
            'public_place'  => 'required',
            'number'        => 'required|numeric',
            'complement'    => '',
            'district'      => 'required',
            'city'          => 'required',
            'country'       => 'required',
            'postal_code'   => 'required|numeric',
            'phone'         => '',
            'mobile_phone'  => '',
            'email'         => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'delivery_fee'  => ''
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'Campo obrigatório!',
            'min'       => 'Tamanho mínimo de :min caracteres!',
            'max'       => 'Tamanho máximo de :max caracteres!',
            'numeric'   => 'Somente números!',
            'email'     => 'Formato de E-mail inválido!'
        ];
    }
}
