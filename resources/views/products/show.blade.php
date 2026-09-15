<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="container">

    <h1>Product Details</h1>

    <div class="card">

        <h2>{{ $product->name }}</h2>

        <p><strong>Description:</strong> {{ $product->description }}</p>
        <p><strong>Price:</strong> {{ $product->price }}</p>
        <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
        <p>
            <strong>Category:</strong>
            {{ $product->category->name ?? 'No Category' }}
        </p>

    </div>

    <a href="{{ route('products.index') }}"
       class="btn btn-secondary">
        Back
    </a>

</div>

</body>
</html>