@extends('layouts.master')



@section('welcome')
 
<div class="container py-5">
        <div class="row">

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

@endsection
  
  

