<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_name' => 'required|min:3|max:50|string',
            'product_name' => 'required|min:3|max:50|string',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:1',
        ];
    }

    public function messages(): array
    {
        return [
            'user_name.required' => 'user name is required',
            'user_name.min' => 'user name must be at least 3 characters',

            'product_name.required' => 'product name is required',
            'product_name.min' => 'product name must be at least 3 characters',

            'quantity.required' => 'quantity is required',
            'quantity.integer' => 'quantity must be an integer',
            'quantity.min' => 'quantity must be at least 1',

            'price.required' => 'price is required',
            'price.numeric' => 'price must be a number',
            'price.min' => 'price must be at least 1',
        ];
    }
}