@extends('layouts.master')



@section('person')
 
<div class="container py-5">
        <div class="row">
         
          @foreach ($person as $item)
          <h3>
           id : {{ $item->id}}
        </h3>
          <h3>
           name : {{ $item->name}}
        </h3>
          <h3>
           email : {{ $item->email}}
        </h3>
          <h3>
           age : {{ $item->age}}
        </h3>
          <h3>
           city : {{ $item->city}}
        </h3>
          <h3>
           photo :   @if ($item->photo)
           <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}" width="100">
       @endif
        </h3>
          @endforeach
          
              
        </div>
</div>

@endsection
  
  

