@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tag Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $tag->name }}</h5>
            </div>
        </div>
    </div>
@endsection
