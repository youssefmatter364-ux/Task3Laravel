<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

<div class="container">

    <h1>Products</h1>

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

    <a href="{{ route('products.create') }}" class="btn btn-primary">
        Add Product
    </a>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>

        @foreach($products as $product)

        <tr>

            <td>{{ $product->id }}</td>

            <td>{{ $product->name }}</td>

            <td>{{ $product->description }}</td>

            <td>{{ $product->price }}</td>

            <td>{{ $product->quantity }}</td>

            <td>
                {{ $product->category->name ?? 'No Category' }}
            </td>

            <td style="white-space: nowrap;">

                <a href="{{ route('products.show', $product->id) }}"
                   class="btn btn-primary">
                    Show
                </a>

                <a href="{{ route('products.edit', $product->id) }}"
                   class="btn btn-success">
                    Edit
                </a>

                <form action="{{ route('products.delete', $product->id) }}"
                      method="POST"
                      style="display:inline; background:none; padding:0; box-shadow:none;">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this product?')">
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