<?php

namespace App\Http\Requests;

use App\Rules\DateOfBirth;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'gender' => 'required| numeric',
            'dob' => ['required', 'date', new DateOfBirth],
            'password' => 'required|string|min:6|confirmed',            
        ];
    }
}
