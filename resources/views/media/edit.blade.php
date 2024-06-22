@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Media</h1>
        <form action="{{ route('media.update', $media->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Media Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $media->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"
                          required>{{ $media->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option
                            value="{{ $category->id }}" {{ $media->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="file">Upload New File (optional)</label>
                <input type="file" class="form-control-file" id="file" name="file">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
