<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlacesRequest extends FormRequest
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
            'name'=>'bail|required',
            'latitude'=>'bail|required',
            'longitude'=>'bail|required',
            'description'=>'bail|required',
            'route'=>'bail|required',
            'costs'=>'bail|required',
            'schedule'=>'bail|required',
            'urlMainphoto'=>'bail|required',
            'type'=>'bail|required'
        ];
    }
}
