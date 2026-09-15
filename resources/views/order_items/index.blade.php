<!DOCTYPE html>
<html>
<head>
    <title>Order Items</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

<div class="container">

    <h1>Order Items</h1>

    @if(session('error'))
        <div class="error">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('order_items.create') }}"
       class="btn btn-primary">
        Add Order Item
    </a>

    <table>

        <tr>
            <th>ID</th>
            <th>Order</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>

        @foreach($orderItems as $item)

        <tr>

            <td>{{ $item->id }}</td>

            <td>
                Order #{{ $item->order->id }}
            </td>

            <td>
                {{ $item->product->name }}
            </td>

            <td>
                {{ $item->quantity }}
            </td>

            <td>
                {{ $item->price }}
            </td>

            <td style="white-space: nowrap;">

                <a href="{{ route('order_items.show', $item->id) }}"
                   class="btn btn-primary">
                    Show
                </a>

                <a href="{{ route('order_items.edit', $item->id) }}"
                   class="btn btn-success">
                    Edit
                </a>

                <form action="{{ route('order_items.delete', $item->id) }}"
                      method="POST"
                      style="display:inline; background:none; padding:0; box-shadow:none;">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this order item?')">
                        Delete
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>