<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:50|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'user name is required',
            'name.min' => 'user name must be at least 3 characters',

            'email.required' => 'email is required',
            'email.email' => 'please enter a valid email',
            'email.unique' => 'email is already exist',

            'password.required' => 'password is required',
            'password.min' => 'password must be at least 6 characters',
        ];
    }
}