@extends('layouts.supermaster')

@section('content')
<div class="container py-5">
<form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name">Image Name</label>
        <input type="text" name="name" class="form-control" value="{{ $gallery->name }}" required>
    </div>

    <div class="mb-3">
        <label for="description">Image Description</label>
        <textarea name="description" class="form-control">{{ $gallery->description }}</textarea>
    </div>

    <div class="mb-3">
        <label for="image">Change Image (optional)</label>
        <input type="file" name="image" class="form-control">
        <div class="mt-2">
            <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="Current Image" width="200">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Update Image</button>
</form>
</div>
@endsection