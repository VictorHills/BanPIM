@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Media Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $media->name }}</h5>
                <p class="card-text">{{ $media->description }}</p>
                <p class="card-text">Category: {{ $media->category->name }}</p>
                <p class="card-text"><a href="{{ Storage::url($media->path) }}" target="_blank">View File</a>
                </p>
            </div>
        </div>
    </div>
@endsection
