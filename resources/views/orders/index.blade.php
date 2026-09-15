<!DOCTYPE html>
<html>
<head>
    <title>Orders</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

<div class="container">

    <h1>Orders</h1>

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

    <a href="{{ route('orders.create') }}" class="btn btn-primary">
        Add Order
    </a>

    <table>

        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Actions</th>
        </tr>

        @foreach($orders as $order)

        <tr>

            <td>{{ $order->id }}</td>

            <td>
                {{ $order->user->name ?? 'No User' }}
            </td>

            <td style="white-space: nowrap;">

                <a href="{{ route('orders.show', $order->id) }}"
                   class="btn btn-primary">
                    Show
                </a>

                <a href="{{ route('orders.edit', $order->id) }}"
                   class="btn btn-success">
                    Edit
                </a>

                <form action="{{ route('orders.delete', $order->id) }}"
                      method="POST"
                      style="display:inline; background:none; padding:0; box-shadow:none;">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this order?')">
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