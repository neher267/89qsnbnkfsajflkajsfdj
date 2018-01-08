<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Registration extends FormRequest
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
            'name' => 'required| string| max:50|min:3',
            'class_id' => 'required| numeric',
            'gender_id' => 'required| numeric',
            'institute_name' => 'required|string|max:100| min:10',
            'password' => 'required|string|min:6|confirmed',            
        ];
    }
}
