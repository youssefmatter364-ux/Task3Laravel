<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

<div class="container">

    <h1>Categories</h1>

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

    <a href="{{ route('categories.create') }}" class="btn btn-primary">
        Add Category
    </a>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>

        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>

                <td>

                    <a href="{{ route('categories.show', $category->id) }}"
                       class="btn btn-primary">
                        Show
                    </a>

                    <a href="{{ route('categories.edit', $category->id) }}"
                       class="btn btn-success">
                        Edit
                    </a>

                    <form action="{{ route('categories.delete', $category->id) }}"
                          method="POST"
                          style="display:inline; background:none; padding:0; box-shadow:none;">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this category?')">
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
