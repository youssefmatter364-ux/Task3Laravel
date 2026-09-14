<!DOCTYPE html>

<html>
<head>
    <title>User Details</title>
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
<h1 class="title">User Details</h1>

<div class="details">

    <p><strong>ID:</strong> {{ $user->id }}</p>

    <p><strong>Name:</strong> {{ $user->name }}</p>

    <p><strong>Email:</strong> {{ $user->email }}</p>

    <a class="btn" href="{{ route('users.index') }}">
        Back to Users
    </a>

</div>
```

</div>

<div class="footer">
    Laravel Store © 2026
</div>

</body>
</html>
