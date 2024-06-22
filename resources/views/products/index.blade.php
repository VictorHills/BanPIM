@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create Product</a>
        <div class="card shadow-lg">
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
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
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .btn {
            margin-right: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 1rem;
            padding: 0.5rem 1.5rem;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .table {
            margin-top: 20px;
        }

        .thead-dark th {
            background-color: #343a40;
            color: white;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }
    </style>
@endsection
