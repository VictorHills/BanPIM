@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Category Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $category->name }}</h5>
            </div>
        </div>
    </div>
@endsection
