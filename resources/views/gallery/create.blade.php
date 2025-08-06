@extends('layouts.supermaster')

@section('content')
<div class="container py-5">
  <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="name">Image Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="description">Image Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label for="image">Choose Image</label>
        <input type="file" name="image" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Upload</button>
</form>
</div>
@endsection