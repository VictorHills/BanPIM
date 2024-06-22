@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Media Details</h1>
        <div class="card shadow-lg">
            <div class="card-body">
                <h5 class="card-title text-primary">{{ $media->name }}</h5>
                <p class="card-text">{{ $media->description }}</p>
                <hr>
                <p class="card-text"><strong>Category:</strong> {{ $media->category->name }}</p>
                <p class="card-text"><a href="{{ Storage::url($media->file_path) }}" target="_blank" class="btn btn-info">View File</a></p>
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

        .card-text {
            margin-bottom: 10px;
        }

        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #138496;
            border-color: #117a8b;
        }

        hr {
            margin: 20px 0;
        }
    </style>
@endsection
