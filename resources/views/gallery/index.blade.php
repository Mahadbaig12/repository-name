@extends('layouts.supermaster')

@section('content')
<div class="container py-5">
    <div>
        <a  class="btn w-25 btn-sm mb-4 btn-success " href="{{ route('gallery.create') }}">Add new image</a>
    </div>
    <div class="row">
      


        @foreach($galleries as $gallery)
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="{{ asset('storage/' . $gallery->image_path) }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="" class="img-fluid">
                    </a>
                    <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm mt-2">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
