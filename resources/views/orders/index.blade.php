<!DOCTYPE html>

<html>
<head>
    <title>Orders</title>
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
<h1 class="title">Orders</h1>

<div class="cards">

    @foreach($orders as $order)

        <div class="card">

            <h3>Order #{{ $order->id }}</h3>

            <p><strong>User ID:</strong> {{ $order->user_id }}</p>

            <p><strong>Created At:</strong> {{ $order->created_at }}</p>

            <a class="btn" href="{{ route('orders.show', $order->id) }}">
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
