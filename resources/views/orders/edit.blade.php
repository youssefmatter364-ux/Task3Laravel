<!DOCTYPE html>
<html>
<head>
    <title>Edit Order</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="container">

    <h1>Edit Order</h1>

    <form action="{{ route('orders.update', $order->id) }}"
          method="POST">

        @csrf

        <div class="form-group">

            <label>User</label>

            <select name="user_id">

                @foreach($users as $user)

                    <option value="{{ $user->id }}"
                        {{ $order->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>

                @endforeach

            </select>

        </div>

        <button class="btn btn-success">
            Update
        </button>

        <a href="{{ route('orders.index') }}"
           class="btn btn-secondary">
            Back
        </a>

    </form>

</div>

</body>
</html>