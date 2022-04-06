<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class RegisterRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'=>[
                'required',
            ],
            'email' =>[
                'required',
                'email',
                'unique:users',
            ],
            'password' => [
                'required',
                'confirmed',
                'max:12',
                'min:6',
            ],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'name.required' => 'Password is required!',
            'password.min' => 'Password is too short',
        ];
    }
}
