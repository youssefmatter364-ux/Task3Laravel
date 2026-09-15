<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="container">

    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}"
          method="POST">

        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text"
                   name="name"
                   value="{{ old('name', $product->name) }}">
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description">{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="number"
                   step="0.01"
                   name="price"
                   value="{{ old('price', $product->price) }}">
        </div>

        <div class="form-group">
            <label>Quantity</label>
            <input type="number"
                   name="quantity"
                   value="{{ old('quantity', $product->quantity) }}">
        </div>

        <div class="form-group">
            <label>Category</label>

            <select name="category_id">

                @foreach($categories as $category)

                    <option value="{{ $category->id }}"
                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>

                @endforeach

            </select>
        </div>

        <button class="btn btn-success">Update</button>

        <a href="{{ route('products.index') }}"
           class="btn btn-secondary">
            Back
        </a>

    </form>

</div>

</body>
</html>