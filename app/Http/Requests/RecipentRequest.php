<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipentRequest extends FormRequest
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
        $rules= [
            'plasma_recipent_email'             =>'required|unique:recipents',
            'plasma_recipent_name'              =>'required',
            'plasma_recipent_phone'             =>'required',
            'covid_recipent_verified'           =>'required|mimes:jpeg,bmp,png,jpg',
            'plasma_need_verified_doctor'       =>'required|mimes:jpeg,bmp,png,jpg',
            'recipent_blood_group'              =>'required',
            'hospital_address'                  =>'required'
        ];
        switch($this->method()){
            case 'PUT':
            case 'PATCH':
                $rules['plasma_recipent_name']='required';

                break;
        }

        return $rules;

    }
}
