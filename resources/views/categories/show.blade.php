<!DOCTYPE html>
<html>
<head>
    <title>Category Details</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="container">

    <h1>Category Details</h1>

    <div class="card">

        <h2>{{ $category->name }}</h2>

        <p>{{ $category->description }}</p>

    </div>

    <h2>Products</h2>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>

        @forelse($category->products as $product)

            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
            </tr>

        @empty

            <tr>
                <td colspan="4">No products found.</td>
            </tr>

        @endforelse

    </table>

    <h2>Orders</h2>

    <table>

        <tr>
            <th>Order ID</th>
            <th>User</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>

        @forelse($category->products as $product)

            @foreach($product->orderItems as $item)

                <tr>
                    <td>{{ $item->order->id }}</td>
                    <td>{{ $item->order->user->name }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price }}</td>
                </tr>

            @endforeach

        @empty

            <tr>
                <td colspan="5">No orders found.</td>
            </tr>

        @endforelse

    </table>

    <div class="actions">

        <a href="{{ route('categories.index') }}"
           class="btn btn-secondary">
            Back
        </a>

    </div>

</div>

</body>
</html>
