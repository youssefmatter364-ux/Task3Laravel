<!DOCTYPE html>

<html>
<head>
    <title>Product Details</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="navbar">
    <h2>Laravel Store</h2>

```
<div>
    <a href="/categories">Categories</a>
    <a href="/products">Products</a>
    <a href="/users">Users</a>
    <a href="/orders">Orders</a>
</div>
```

</div>

<div class="container">

```
<h1 class="title">Product Details</h1>

<div class="details">

    <p><strong>ID:</strong> {{ $product->id }}</p>

    <p><strong>Name:</strong> {{ $product->name }}</p>

    <p><strong>Description:</strong> {{ $product->description }}</p>

    <p><strong>Price:</strong> ${{ $product->price }}</p>

    <p><strong>Quantity:</strong> {{ $product->quantity }}</p>

    <p><strong>Category ID:</strong> {{ $product->category_id }}</p>

    <a class="btn" href="{{ route('products.index') }}">
        Back to Products
    </a>

</div>
```

</div>

<div class="footer">
    Laravel Store © 2026
</div>

</body>
</html>
