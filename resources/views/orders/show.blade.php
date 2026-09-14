<!DOCTYPE html>

<html>
<head>
    <title>Order Details</title>
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
<h1 class="title">Order Details</h1>

<div class="details">

    <p><strong>ID:</strong> {{ $order->id }}</p>

    <p><strong>User ID:</strong> {{ $order->user_id }}</p>

    <p><strong>Created At:</strong> {{ $order->created_at }}</p>

    <a class="btn" href="{{ route('orders.index') }}">
        Back to Orders
    </a>

</div>
```

</div>

<div class="footer">
    Laravel Store © 2026
</div>

</body>
</html>
