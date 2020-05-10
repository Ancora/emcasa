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
            'email'         => 'required|email',
            'delivery_fee'  => ''
        ];
    }
}
