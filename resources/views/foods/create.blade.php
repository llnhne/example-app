@extends('layouts.app')

@section('content')
<div class="container mb-5 mt-4">
    <form action="/foods" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Create Foods</h1>
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label class="form-label fw-bold">Food Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter food's name">
            </div>
            <div class="mb-3">
              <label class="form-label fw-bold">Description</label>
              <input type="text" class="form-control" name="description" placeholder="Enter food's description">
            </div>
            <div class="mb-3">
              <label class="form-label fw-bold">Images</label>
              <input type="file" class="form-control" name="image">
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="form-label fw-bold">Count</label>
              <input type="number" class="form-control" name="count" placeholder="Enter food's count">
            </div>
            <div class="mb-3">
              <label class="form-label fw-bold">Category</label>
              <select name="category_id" class="form-select" aria-label="Default select example">
                  @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                  @endforeach
              </select>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      @if ($errors->any())
          <div>
            @foreach ($errors->all() as $error)
              <div class="alert alert-danger mt-3" role="alert">
                {{ $error }}
              </div>
            @endforeach
          </div>
      @endif
</div>
@endsection