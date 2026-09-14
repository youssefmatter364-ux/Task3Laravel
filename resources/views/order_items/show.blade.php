<!DOCTYPE html>

<html>
<head>
    <title>Order Item Details</title>
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
<h1 class="title">Order Item Details</h1>

<div class="details">

    <p><strong>ID:</strong> {{ $orderItem->id }}</p>

    <p><strong>Order ID:</strong> {{ $orderItem->order_id }}</p>

    <p><strong>Product ID:</strong> {{ $orderItem->product_id }}</p>

    <p><strong>Quantity:</strong> {{ $orderItem->quantity }}</p>

    <p><strong>Price:</strong> ${{ $orderItem->price }}</p>

    <a class="btn" href="{{ route('order_items.index') }}">
        Back to Order Items
    </a>

</div>
```

</div>

<div class="footer">
    Laravel Store © 2026
</div>

</body>
</html>
