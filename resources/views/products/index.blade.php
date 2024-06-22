@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
        <table class="table mt-3">
            <thead>
            <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Tag</th>
                <th>Size</th>
                <th>Weight</th>
                <th>SKU ID</th>
                <th>Color</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->tag->name }}</td>
                    <td>{{ $product->size }}</td>
                    <td>{{ $product->weight }}</td>
                    <td>{{ $product->sku_id }}</td>
                    <td>{{ $product->color }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
