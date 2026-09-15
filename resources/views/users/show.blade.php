<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="container">

    <h1>User Details</h1>

    <div class="card">
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
    </div>

    <h2>User Orders</h2>

    <table>
        <tr>
            <th>Order ID</th>
            <th>Date</th>
        </tr>

        @foreach($user->orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->created_at }}</td>
        </tr>
        @endforeach

    </table>

    <br>

    <a href="{{ route('users.index') }}"
       class="btn btn-secondary">
        Back
    </a>

</div>

</body>
</html>