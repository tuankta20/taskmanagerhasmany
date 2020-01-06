<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCustomersRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required',
            'dob'=>'required',
        ];
    }

    public function message()
    {
      $message = [
        'name.required'=>'ten la bat buoc',
        'email.required'=>'email la bat buoc',
        'dob.required'=>'dob la bat buoc',
      ];
      return $message;
    }
}
