<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:20|string',
            'description' => 'required|min:12|max:50|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'category name is required',
            'name.min' => 'category name must be at least 3 characters',
            'name.max' => 'category name must not exceed 20 characters',

            'description.required' => 'category description is required',
            'description.min' => 'category description must be at least 12 characters',
            'description.max' => 'category description must not exceed 50 characters',
        ];
    }
}