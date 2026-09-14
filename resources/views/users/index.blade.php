<!DOCTYPE html>

<html>
<head>
    <title>Users</title>
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
<h1 class="title">Users</h1>

<div class="cards">

    @foreach($users as $user)

        <div class="card">

            <h3>{{ $user->name }}</h3>

            <p><strong>ID:</strong> {{ $user->id }}</p>

            <p><strong>Email:</strong> {{ $user->email }}</p>

            <a class="btn" href="{{ route('users.show', $user->id) }}">
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
