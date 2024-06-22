@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Media</h1>
        <a href="{{ route('media.create') }}" class="btn btn-primary mb-3">Upload Media</a>
        <div class="card shadow-lg">
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>File</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($media as $mediaItem)
                        <tr>
                            <td>{{ $mediaItem->name }}</td>
                            <td>{{ $mediaItem->description }}</td>
                            <td>{{ $mediaItem->category->name }}</td>
                            <td><a href="{{ asset('storage/' . $mediaItem->file_path) }}" target="_blank" class="btn btn-info btn-sm">View File</a></td>
                            <td>
                                <a href="{{ route('media.edit', $mediaItem->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('media.destroy', $mediaItem->id) }}" method="POST" style="display:inline;">
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

        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #138496;
            border-color: #117a8b;
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
