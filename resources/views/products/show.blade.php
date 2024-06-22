@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Product Details</h1>
        <div class="card shadow-lg">
            <div class="card-body">
                <h5 class="card-title text-primary">{{ $product->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $product->title }}</h6>
                <p class="card-text">{{ $product->description }}</p>
                <hr>
                <p class="card-text"><strong>Category:</strong> {{ $product->category->name }}</p>
                <p class="card-text"><strong>Tag:</strong> {{ $product->tag->name }}</p>
                <p class="card-text"><strong>Size:</strong> {{ $product->size }}</p>
                <p class="card-text"><strong>Weight:</strong> {{ $product->weight }}</p>
                <p class="card-text"><strong>SKU ID:</strong> {{ $product->sku_id }}</p>
                <p class="card-text"><strong>Color:</strong> {{ $product->color }}</p>
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

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .card-subtitle {
            font-size: 1.25rem;
            margin-bottom: 20px;
        }

        .card-text {
            margin-bottom: 10px;
        }

        hr {
            margin: 20px 0;
        }
    </style>
@endsection
