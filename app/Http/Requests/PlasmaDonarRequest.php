<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlasmaDonarRequest extends FormRequest
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
            'plasma_donar_email'         =>'required|unique:donars',
            'plasma_donar_name'          =>'required',
            'plasma_donar_phone'   =>'required',
            'covid_verified'         =>'required|mimes:jpeg,bmp,png,jpg',
            'covid_recovered'         =>'required|mimes:jpeg,bmp,png,jpg',
            'donar_blood_group'=>'required',
        ];
        switch($this->method()){
            case 'PUT':
            case 'PATCH':
                $rules['plasma_donar_name']='required';

                break;
        }

        return $rules;

    }
}
