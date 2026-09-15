<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="container">

    <h1>Edit Category</h1>

    <form action="{{ route('categories.update', $category->id) }}"
          method="POST">

        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text"
                   name="name"
                   value="{{ old('name', $category->name) }}">

            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description">{{ old('description', $category->description) }}</textarea>

            @error('description')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-success">Update</button>

        <a href="{{ route('categories.index') }}"
           class="btn btn-secondary">
            Back
        </a>

    </form>

</div>

</body>
</html>