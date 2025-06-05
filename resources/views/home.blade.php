@extends('layouts.master')
@section('content')
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
                <div style="background: #0C1844" class="col-md-12 p-5">
                    <div class="content">
                        <h2  class="text-center display-4 text-custom text-uppercase mb-3">Specs of cars</h2>
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
   <section class="bg-custom my-5">
    <div class="container   py-5"  >
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h2 class="text-white">FAQS</h2>
            <div><span class="text-white">Check Our</span> <span class="description-title text-custom">FAQS</span></div>
          </div>
        <div class="col-md-12">
            
            <div class="accordion " id="accordionExample" data-aos="fade-up" data-aos-delay="200">
                @foreach ($faqs as $faq)
                    @if (is_object($faq))
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false"
                                    aria-controls="collapse{{ $faq->id }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
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
   </section>
    <div class="container  py-5"  >
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h2>SPOTLITE</h2>
            <div><span>Check Our</span> <span class="description-title text-custom">Spotlite Cars</span></div>
          </div>

        <div class="row">
           
            @foreach ($cards as $card)
                <div class="col-md-3 mb-3">
                    <div class="card aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="image">
                            @if ($card->photo)
                                <img class="w-100" style="height: 150px; object-fit: cover"
                                    src="{{ asset('storage/' . $card->photo) }}" alt="{{ $card->name }}">
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
                </div>
            @endforeach
        </div>
    </div>
    </section>


    <section id="gallery" class="gallery section">

     
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
          <h2>Gallery</h2>
          <div><span>Check Our</span> <span class="description-title text-custom">Gallery</span></div>
        </div>
  
        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row g-0">
  
            @foreach ($gallery as $item)
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item h-100">
                    <a href="{{ asset('storage/' . $item->image_path) }}" class="glightbox" data-gallery="images-gallery">
                        <img src="{{ asset('storage/' . $item->image_path) }}" alt="Gallery Image" class="img-fluid h-100">
                    </a>
                </div>
            </div>
        @endforeach
        
  
           
  
          </div>
  
        </div>
  
      </section>
    </div>
@endsection
