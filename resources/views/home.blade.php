@extends('layouts.master')

@section('content')

{{-- <h1>
  {{$page_heading}}
</h1>
<ul>
  @foreach ($users as $user)
    <li>
      <h2>{{$user['id']}}</h2>
      <h2>{{$user['name']}}</h2>
      <h2>{{$user['degree']}}</h2>
    </li>
  @endforeach
</ul> --}}


<div class="container-fluid  back-img">
  <div class="container overflow py-5">
    <div class="row">
      <div style="background: tranparent" class="col-md-12 p-5">
       <h2 class="text-center fw-semibold text-white display-1"> {{ $main_contant }}</h2>
      </div>
      <div style="background: transparent" class="col-md-12 p-5">
        <p class="text-center text-white fs-5">{{ $main2_contant }}</p>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <section class="">
   
       
        <div class="row">
          <div style="background: rgb(235, 218, 221)" class="col-md-12 p-5">
           {{-- <ul>
            @foreach ($cars as $car)
                <li>{{ $car['name'] }}</li>
                <li>{{ $car['engine'] }}</li>
                <li>{{ $car['horsepower'] }}</li>
                <li>{{ $car['fuel_type'] }}</li>
            @endforeach
           </ul> --}}


           <div class="content">
              <h2 class="text-center mb-3">Dynamic tabel of Cars</h2>
              <div class="row">
                <div class="col-md-3 box">NAME</div>
                <div class="col-md-3 box">ENGINE</div>
                <div class="col-md-3 box">HORSEPOWER</div>
                <div class="col-md-3 box">FUEL TYPE</div>
                </div>
                <div class="row">
                  @foreach ($cars as $noop)
                      <div class="col-md-3 box">{{ $noop['name'] }}</div>
                      <div class="col-md-3 box">{{ $noop['engine'] }}</div>
                      <div class="col-md-3 box">{{ $noop['horsepower'] }}</div>
                      <div class="col-md-3 box">{{ $noop['fuel_type'] }}</div>
                  @endforeach
                </div>
              </div>



           </div>
           



          </div>
       
        </div>
   
    </section>
</div>







@endsection