@extends('layouts.master')



@section('person')
 
<div class="container py-5">
      
          @foreach ($person as $item)
          <h2 class="mb-2 text-secondary fw-bold fs-2">IMAGE</h2>
              <div class="mb-4">
                @if ($item->photo)
           <img height="350px" class="w-50" src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}" width="100">
       @endif
              </div>
           <div class="mb-4">
             <h2 class="mb-1 text-secondary fw-bold fs-2">NAME</h2>
               <h3 class="fs-4 text-black">{{ $item->name}}
           </div>
        </h3>
      <div class="mb-4">
          <h2 class="mb-2 text-secondary text-uppercase fw-bold fs-2">Description</h2>
        <p class="text-black">{{ $item->description}}</p>
      </div>
     
          @endforeach
          
              
   
</div>

@endsection
  
  

