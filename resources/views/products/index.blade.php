<!DOCTYPE html>

<html>
<head>
    <title>Products</title>
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
<h1 class="title">Products</h1>

<div class="cards">

    @foreach($products as $product)

        <div class="card">

            <h3>{{ $product->name }}</h3>

            <p><strong>ID:</strong> {{ $product->id }}</p>

            <p>{{ $product->description }}</p>

            <p><strong>Price:</strong> ${{ $product->price }}</p>

            <p><strong>Quantity:</strong> {{ $product->quantity }}</p>

            <p><strong>Category ID:</strong> {{ $product->category_id }}</p>

            <a class="btn" href="{{ route('products.show', $product->id) }}">
                Show Details
            </a>

        </div>

    @endforeach

</div>
```

</div>

<div class="footer">
    Laravel Store © 2026
</div>

</body>
</html>
