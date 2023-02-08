@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    <div class="bg-dark border border-light border-2 d-flex align-items-center justify-content-center rounded">
        <div class="text-center my-4">
            <h1 class="mb-3 display-6 text-light">Healthy Food</h1>
            <h4 class="mb-3 text-light">
                <i class="fas fa-lemon"></i>
                Fresh Vegetable
                <i class="fas fa-carrot"></i>
            </h4>
            <p class="lead text-light">Find and buy your grocery here!</p>
            <a href="{{ url('/home') }}" class="btn btn-outline-light">
                Shop now
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>
@endsection
