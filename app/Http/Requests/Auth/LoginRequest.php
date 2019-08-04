<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseRequest;

class LoginRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'password.required' => 'Password is required!',
        ];
    }

}
