@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Media</h1>
        <a href="{{ route('media.create') }}" class="btn btn-primary">Upload Media</a>
        <table class="table mt-3">
            <thead>
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
                    <td><a href="{{ asset('storage/' . $mediaItem->file_path) }}" target="_blank">View File</a></td>
                    <td>
                        <a href="{{ route('media.edit', $mediaItem->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('media.destroy', $mediaItem->id) }}" method="POST"
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
