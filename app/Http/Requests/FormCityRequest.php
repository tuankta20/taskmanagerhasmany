<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCityRequest extends FormRequest
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
            'name'=>'required'
        ];
    }
    public function massage(){
        $messages =[
            'name.required'=>'k dc de trong',
        ];

        return $messages;
    }
}
