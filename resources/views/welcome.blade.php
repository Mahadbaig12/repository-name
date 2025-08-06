@extends('layouts.master')



@section('welcome')
    <div class="container-fluid page-header pt-5 mb-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white p-5">
                        <h1 class="display-6 text-uppercase mb-3 animated slideInDown">Services</h1>
                        <nav aria-label="breadcrumb animated slideInDown">
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                    
                                <li class="breadcrumb-item" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid service pt-6 pb-6">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 text-uppercase mb-5">Reliable & High-Quality Welding Services</h1>
            </div>
            <div class="row g-4">
                @foreach ($cards as $card)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner pb-5">
                                @if ($card->photo)
                                    <img class="img-fluid w-100" style="height: 200px"
                                        src="{{ asset('storage/' . $card->photo) }}" alt="{{ $card->name }}">
                                @endif
                                <div class="service-text px-5 pt-4">
                                    <h5 class="text-uppercase fw-medium text-black">{{ $card->name }}</h4>
                                        <p class="text-secondary line-clamp">{{ $card->description }}
                                        </p>
                                </div>
                                <a href="{{ route('view.person', ['id' => $card->id]) }}" class="btn btn-light px-3"
                                    href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
