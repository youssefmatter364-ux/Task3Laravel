<!DOCTYPE html>
<html>
<head>
    <title>Add Order Item</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

<div class="container">

    <h1>Add Order Item</h1>

    <form action="{{ route('order_items.store') }}" method="POST">

        @csrf

        <div class="form-group">

            <label>User Name</label>

            <input type="text"
                   name="user_name"
                   value="{{ old('user_name') }}"
                   placeholder="Enter user name">

            @error('user_name')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-group">

            <label>Product Name</label>

            <input type="text"
                   name="product_name"
                   value="{{ old('product_name') }}"
                   placeholder="Enter product name">

            @error('product_name')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-group">

            <label>Quantity</label>

            <input type="number"
                   name="quantity"
                   value="{{ old('quantity') }}"
                   min="1">

            @error('quantity')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <div class="form-group">

            <label>Price</label>

            <input type="number"
                   name="price"
                   value="{{ old('price') }}"
                   step="0.01"
                   min="1">

            @error('price')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <button class="btn btn-primary">
            Add Order Item
        </button>

        <a href="{{ route('order_items.index') }}"
           class="btn btn-secondary">
            Back
        </a>

    </form>

</div>

</body>
</html>