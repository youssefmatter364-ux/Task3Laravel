<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_name' => 'required|min:3|max:50|string',
        ];
    }

    public function messages(): array
    {
        return [
            'user_name.required' => 'user name is required',
            'user_name.min' => 'user name must be at least 3 characters',
            'user_name.max' => 'user name must not exceed 50 characters',
        ];
    }
}