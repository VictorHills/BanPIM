@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Tag Details</h1>
        <div class="card shadow-lg">
            <div class="card-body">
                <h5 class="card-title text-primary">{{ $tag->name }}</h5>
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
    </style>
@endsection
