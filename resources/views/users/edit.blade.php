<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="container">

    <h1>Edit User</h1>

    <form action="{{ route('users.update', $user->id) }}"
          method="POST">

        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text"
                   name="name"
                   value="{{ old('name', $user->name) }}">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email"
                   name="email"
                   value="{{ old('email', $user->email) }}">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>

        <button class="btn btn-success">Update</button>

        <a href="{{ route('users.index') }}"
           class="btn btn-secondary">
            Back
        </a>

    </form>

</div>

</body>
</html>