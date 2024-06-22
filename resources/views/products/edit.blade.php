@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Product</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="title">Product Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Product Description</label>
                <textarea class="form-control" id="description" name="description"
                          required>{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option
                            value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tag_id">Tag</label>
                <select class="form-control" id="tag_id" name="tag_id" required>
                    @foreach($tags as $tag)
                        <option
                            value="{{ $tag->id }}" {{ $product->tag_id == $tag->id ? 'selected' : '' }}>{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="size">Size</label>
                <input type="text" class="form-control" id="size" name="size" value="{{ $product->size }}" required>
            </div>
            <div class="form-group">
                <label for="weight">Weight</label>
                <input type="text" class="form-control" id="weight" name="weight" value="{{ $product->weight }}"
                       required>
            </div>
            <div class="form-group">
                <label for="sku_id">SKU ID</label>
                <input type="text" class="form-control" id="sku_id" name="sku_id" value="{{ $product->sku_id }}"
                       required>
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" id="color" name="color" value="{{ $product->color }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
