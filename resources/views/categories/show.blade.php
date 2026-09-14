<!DOCTYPE html>

<html>
<head>
    <title>Category Details</title>
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
<h1 class="title">Category Details</h1>

<div class="details">

    <p><strong>ID:</strong> {{ $category->id }}</p>

    <p><strong>Name:</strong> {{ $category->name }}</p>

    <p><strong>Description:</strong> {{ $category->description }}</p>

    <a class="btn" href="{{ route('categories.index') }}">
        Back to Categories
    </a>

</div>
```

</div>

<div class="footer">
    Laravel Store © 2026
</div>

</body>
</html>
