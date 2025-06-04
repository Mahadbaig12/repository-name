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

        <div class="container py-5">
          <div class="col-md-12">
      
              <h2 class="display-3 text-center mb-4">FAQs</h2>
          
              <div class="accordion" id="accordionExample">
                  @foreach ($faqs as $faq)
                  @if (is_object($faq))
                      <div class="accordion-item mb-3">
                          <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapse{{ $faq->id }}">
                                  {{ $faq->question }}
                              </button>
                          </h2>
                          <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <p>{{ $faq->answer }}</p>
                              </div>
                          </div>
                      </div>
                  @endif
              @endforeach
              
              </div>
      
          </div>
      </div>
      <div class="container py-5">
        <div class="row">

          <h1 class="text-center mb-5">Cards For Cars</h1>

                @foreach ($cards as $card)
                        
                <div class="col-md-3 mb-3">
                       <div class="card">
                                <div class="image">
                                       @if ($card->photo)
           <img class="w-100" style="height: 150px; object-fit: cover" src="{{ asset('storage/' . $card->photo) }}" alt="{{ $card->name }}" >
       @endif
                                </div>
                                 <div class="content">
                                   <a href="#">
                                     <span class="title">
                                    {{ $card->name }} 
                                     </span>
                                   </a>
                                   <p class="desc">
                                 {{ $card->description }}
                                   </p>
                               
                                   <a class="action" href="{{ route('view.person', ['id' => $card->id]) }}">
                                     Find out more
                                     <span aria-hidden="true">
                                       →
                                     </span>
                                   </a>
                                 </div>
                               </div> 
                               {{-- <div class="plan">
                                <div class="inner">
                                  <span class="pricing">
                                    <span>
                                      {{ $card->id }}
                                    </span>
                                  </span>
                                  <p class="title">{{ $card->name }}   </p>
                                  <p class="info">{{ $card->description }}</p>
                                  <ul class="features">
                                    <li>
                                      <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0 0h24v24H0z" fill="none"></path>
                                          <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                        </svg>
                                      </span>
                                      <span>{{ $card->email }}</span>
                                    </li>
                                    <li>
                                      <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0 0h24v24H0z" fill="none"></path>
                                          <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                        </svg>
                                      </span>
                                      <span>{{ $card->city }}</span>
                                    </li>
                                    <li>
                                      <span class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0 0h24v24H0z" fill="none"></path>
                                          <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                        </svg>
                                      </span>
                                      <span>{{ $card->age }}</span>
                                    </li>
                                  </ul>
                                  <div class="action">
                                  <a class="button" href="{{ route('view.person', ['id' => $card->id]) }}">
                                    Choose plan
                                  </a>
                                  </div>
                                </div>
                              </div> --}}




                               
                        
                </div>


                @endforeach



              



                
               
        </div>
</div>
   
    </section>
</div>







@endsection







