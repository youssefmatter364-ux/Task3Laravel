<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:50|string',
            'description' => 'required|min:12|max:100|string',
            'price' => 'required|numeric|min:1',
            'quantity' => 'required|integer|min:1',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'product name is required',
            'name.min' => 'product name must be at least 3 characters',

            'description.required' => 'product description is required',
            'description.min' => 'product description must be at least 12 characters',

            'price.required' => 'product price is required',
            'price.numeric' => 'product price must be a number',

            'quantity.required' => 'product quantity is required',
            'quantity.integer' => 'product quantity must be an integer',

            'category_id.required' => 'category is required',
            'category_id.exists' => 'selected category does not exist',
        ];
    }
}