@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Product</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="title">Product Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Product Description</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tag_id">Tag</label>
                <select class="form-control" id="tag_id" name="tag_id" required>
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="size">Size</label>
                <input type="text" class="form-control" id="size" name="size" required>
            </div>
            <div class="form-group">
                <label for="weight">Weight</label>
                <input type="text" class="form-control" id="weight" name="weight" required>
            </div>
            <div class="form-group">
                <label for="sku_id">SKU ID</label>
                <input type="text" class="form-control" id="sku_id" name="sku_id" required>
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" id="color" name="color" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
