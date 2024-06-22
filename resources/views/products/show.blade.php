@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->title }}</p>
                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text">Category: {{ $product->category->name }}</p>
                <p class="card-text">Tag: {{ $product->tag->name }}</p>
                <p class="card-text">Size: {{ $product->size }}</p>
                <p class="card-text">Weight: {{ $product->weight }}</p>
                <p class="card-text">SKU ID: {{ $product->sku_id }}</p>
                <p class="card-text">Color: {{ $product->color }}</p>
            </div>
        </div>
    </div>
@endsection
