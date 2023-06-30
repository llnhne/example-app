@extends('layouts.app')

@section('content')
<div class="container mt-4 mb-5">
    <h1>Show detailt food {{ $food->name }}</h1>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-bold">{{ $food->id }}. {{ $food->name }}</h3>
            <img src="{{ asset('images/' . $food->image_path) }}" class="card-img-top" alt="image_path">
            <p>Count: {{ $food->count }}</p>
            <p>Description: {{ $food->description }}</p>
            <p>Category Id: {{ $food->category_id }}</p>
            <p>Category Name: {{ $food->category->name }}</p>
        </div>
      </div>  
</div>
@endsection