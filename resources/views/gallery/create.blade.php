@extends('layouts.supermaster')

@section('content')
<div class="container py-5">
    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="mb-4" for="image">Upload Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Add Image</button>
    </form>
</div>
@endsection