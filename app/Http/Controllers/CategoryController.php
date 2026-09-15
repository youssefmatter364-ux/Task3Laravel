<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::with([
            'products.orderItems.order.user'
        ])->findOrFail($id);

        return view('categories.show', compact('category'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());

        return redirect('/categories')->with(
            'success',
            'Category created successfully.'
        );
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->update($request->validated());

        return redirect('/categories')->with(
            'success',
            'Category updated successfully.'
        );
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if ($category->products()->exists()) {
            return redirect('/categories')->with(
                'error',
                'Cannot delete this category because it has products.'
            );
        }

        $category->delete();

        return redirect('/categories')->with(
            'success',
            'Category deleted successfully.'
        );
    }
}
