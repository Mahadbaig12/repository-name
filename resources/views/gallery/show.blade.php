{{-- @extends('layouts.master')

@section('content')
<div class="container py-5">
    <div class="card mx-auto" style="max-width: 600px;">
        <img src="{{ asset('storage/' . $gallery->image_path) }}" class="card-img-top" alt="{{ $gallery->name }}">
        <div class="card-body">
            <h3 class="card-title">{{ $gallery->name }}</h3>
            <p class="card-text">{{ $gallery->description }}</p>

            <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('gallery.index') }}" class="btn btn-secondary">Back to Gallery</a>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.master')



@section('content')
 
<div class="container py-5">
      
   
          <h2 class="mb-2 text-secondary fw-bold fs-2">IMAGE</h2>
              <div class="mb-4">
               
               <img style="height: 350px" src="{{ asset('storage/' . $gallery->image_path) }}" class="w-50" alt="{{ $gallery->name }}">
    
              </div>
           <div class="mb-4">
             <h2 class="mb-1 text-secondary fw-bold fs-2">NAME</h2>
               <h3 class="fs-4 text-black">{{ $gallery->name }}
           </div>
        </h3>
      <div class="mb-4">
          <h2 class="mb-2 text-secondary text-uppercase fw-bold fs-2">Description</h2>
        <p class="text-black">{{ $gallery->description }}</p>
      </div>
     
        
          
              
   
</div>

@endsection
  