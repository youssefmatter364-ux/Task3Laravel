<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="container">

    <h1>Order Details</h1>

    <div class="card">
        <p>
            <strong>Order ID:</strong>
            {{ $order->id }}
        </p>

        <p>
            <strong>User:</strong>
            {{ $order->user->name ?? 'No User' }}
        </p>
    </div>

    <h2>Order Items</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>

        @foreach($order->orderItems as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->product->name ?? 'No Product' }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->price }}</td>
        </tr>
        @endforeach

    </table>

    <br>

    <a href="{{ route('orders.index') }}"
       class="btn btn-secondary">
        Back
    </a>

</div>

</body>
</html>