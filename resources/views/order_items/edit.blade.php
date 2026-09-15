<!DOCTYPE html>
<html>
<head>
    <title>Edit Order Item</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="container">

    <h1>Edit Order Item</h1>

    <form action="{{ route('order_items.update', $orderItem->id) }}"
          method="POST">

        @csrf

        <div class="form-group">

            <label>Order</label>

            <select name="order_id">

                @foreach($orders as $order)

                    <option value="{{ $order->id }}"
                        {{ $orderItem->order_id == $order->id ? 'selected' : '' }}>
                        Order #{{ $order->id }}
                    </option>

                @endforeach

            </select>

        </div>


        <div class="form-group">

            <label>Product</label>

            <select name="product_id">

                @foreach($products as $product)

                    <option value="{{ $product->id }}"
                        {{ $orderItem->product_id == $product->id ? 'selected' : '' }}>
                        {{ $product->name }}
                    </option>

                @endforeach

            </select>

        </div>


        <div class="form-group">

            <label>Quantity</label>

            <input type="number"
                   name="quantity"
                   value="{{ $orderItem->quantity }}">

        </div>


        <div class="form-group">

            <label>Price</label>

            <input type="number"
                   step="0.01"
                   name="price"
                   value="{{ $orderItem->price }}">

        </div>


        <button class="btn btn-success">
            Update
        </button>

        <a href="{{ route('order_items.index') }}"
           class="btn btn-secondary">
            Back
        </a>

    </form>

</div>

</body>
</html>