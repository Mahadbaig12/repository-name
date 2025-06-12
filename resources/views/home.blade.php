@extends('layouts.master')
@section('content')
    <div class="container-fluid  back-img">
        <div class="container overflow py-5">
            <div class="row">
               <div class="col-lg-12">
                <div style="background: tranparent" class="col-md-12 p-5">
                    <h2 class="text-center fw-semibold text-white display-1"> {{ $main_contant }}</h2>
                </div>
                <div style="background: transparent" class="col-md-12 p-5">
                    <p class="text-center text-white fs-5">{{ $main2_contant }}</p>
                </div>
               </div>
               {{-- <div class="col-lg-6">
                <spline-viewer url="https://prod.spline.design/eecCsn9agE4kVRtm/scene.splinecode"></spline-viewer>
               </div> --}}
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
   <section id="team" class="team bg-transparent section">
     <div class="container  py-5"  >
        <div class="container  section-title aos-init aos-animate" data-aos="fade-up">
            <h2>SPOTLITE</h2>
            <div><span>Check Our</span> <span class="description-title text-custom">Spotlite Cars</span></div>
          </div>

        <div class="row">

            @foreach ($cards as $card)
               
                <div class="col-lg-4 mb-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic">  @if ($card->photo)
                                <img class="img-fluid h-100" style=" object-fit: cover"
                                    src="{{ asset('storage/' . $card->photo) }}" alt="{{ $card->name }}">
                            @endif</div>
              <div class="member-info">
                <h4>{{ $card->name }}</h4>
                <span>Chief Executive Officer</span>
                <div class="social">

                <a class="d-flex align-items-center text-decoration-none gap-2 text-black" href="{{ route('view.person', ['id' => $card->id]) }}">Details<i class="fa-solid text-custom fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
            @endforeach
        </div>
    </div>
   </section>
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
