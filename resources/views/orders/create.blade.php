<!DOCTYPE html>
<html>
<head>
    <title>Add Order</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

<div class="container">

    <h1>Add Order</h1>

    <form action="{{ route('orders.store') }}" method="POST">

        @csrf

        <div class="form-group">

            <label>User Name</label>

            <input type="text"
                   name="user_name"
                   value="{{ old('user_name') }}"
                   placeholder="Enter user name">

            @error('user_name')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <button class="btn btn-primary">
            Add Order
        </button>

        <a href="{{ route('orders.index') }}"
           class="btn btn-secondary">
            Back
        </a>

    </form>

</div>

</body>
</html>