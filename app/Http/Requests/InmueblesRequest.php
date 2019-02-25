<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InmueblesRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name'=>'bail|required',
            'latitude'=>'bail|required',
            'longitude'=>'bail|required',
            'description'=>'bail|required',
            'route'=>'bail|required',
            'costs'=>'bail|required',
            'schedule'=>'bail|required',
            'funfacts'=>'bail|required'
        ];
    }
    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'name.required' => 'Name is required!',
            'password.required' => 'Password is required!'
        ];
    }
}
