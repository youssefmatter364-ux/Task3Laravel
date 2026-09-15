<!DOCTYPE html>
<html>
<head>
    <title>Order Item Details</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="container">

    <h1>Order Item Details</h1>

    <div class="card">

        <p>
            <strong>ID:</strong>
            {{ $orderItem->id }}
        </p>

        <p>
            <strong>Order:</strong>
            {{ $orderItem->order_id }}
        </p>

        <p>
            <strong>Product:</strong>
            {{ $orderItem->product->name ?? 'No Product' }}
        </p>

        <p>
            <strong>Quantity:</strong>
            {{ $orderItem->quantity }}
        </p>

        <p>
            <strong>Price:</strong>
            {{ $orderItem->price }}
        </p>

    </div>

    <a href="{{ route('order_items.index') }}"
       class="btn btn-secondary">
        Back
    </a>

</div>

</body>
</html>