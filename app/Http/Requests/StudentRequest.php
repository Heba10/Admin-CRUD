<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name' => 'required|:students,name,'.$this->student,
            'email' => 'required',
            'speciality' => 'required',
            'password' => 'required|min:8',

        ];
    }

    public function messages() {
        return [
            
            'name.required' => 'Please Enter the name field',
            'email.required' => 'Please Enter the email field',
            
            'password.min' => 'Please the password has minimum of 8 characters',
        ];
    }
}
