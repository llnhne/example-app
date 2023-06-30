@extends('layouts.app')

@section('content')
<div class="container mt-4 mb-5">
    <h1>This is Foots Page</h1>
<button type="button" class="btn btn-primary mb-3"><a class="text-white text-decoration-none" href="/foods/create">Create a new Food</a></button>

@foreach ($foods as $item)
<ol class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">{{ $item->id }}.
        <a href="/foods/{{ $item->id }}">
           {{ $item->name }}</div>
        </a>
        {{ $item->description }}
      </div>
      <span class="badge bg-primary rounded-pill">{{ $item->count }}</span>
      <div class="mx-4">
        <form action="/foods/{{ $item->id }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mt-2 mb-2">Delete</button>
        </form>
        <button type="submit" class="btn btn-success mt-2 mb-2"><a class="text-white text-decoration-none" href="foods/{{ $item->id }}/edit">Update</a></button>
      </div>
    </li>
  </ol>
@endforeach
</div>
@endsection