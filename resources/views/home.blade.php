@extends('layouts.master')
@section('content')
    {{-- <div class="container-fluid  back-img">
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
    </div> --}}
    <div class="container-fluid p-0 mb-6 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="img/carousel-3.jpg" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <h1 class="display-1 fw-bold text-uppercase text-white mb-4 animated zoomIn">Best Metalcraft
                            Solutions
                        </h1>
                        <a href="#check" class="btn btn-primary py-3 px-4">Explore More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <h1 class="display-1 fw-bold text-uppercase text-white mb-4 animated zoomIn">Best Metalcraft
                            Solutions
                        </h1>
                        <a href="#check" class="btn btn-primary py-3 px-4">Explore More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption">
                        <h1 class="display-1 fw-bold text-uppercase text-white mb-4 animated zoomIn">Best Metalcraft
                            Solutions
                        </h1>
                        <a href="#check" class="btn btn-primary py-3 px-4">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-6 pb-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid w-100" src="img/about.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-uppercase mb-4">Ultimate Welding and Quality Metal Solutions</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue,
                        iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu
                        quis, fringilla risus. Pellentesque eu consequat augue.</p>
                    <div class="row g-5 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-xl-square bg-light me-3">
                                    <i class="fa fa-users-cog fa-2x text-primary"></i>
                                </div>
                                <h5 class="lh-base text-uppercase mb-0">Certified Expert & Team</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-xl-square bg-light me-3">
                                    <i class="fa fa-tachometer-alt fa-2x text-primary"></i>
                                </div>
                                <h5 class="lh-base text-uppercase mb-0">Fast & Reliable Services</h5>
                            </div>
                        </div>
                    </div>
                    <p><i class="fa fa-check-square text-primary me-3"></i>Many variations of passages of lorem ipsum
                    </p>
                    <p><i class="fa fa-check-square text-primary me-3"></i>Many variations of passages of lorem ipsum
                    </p>
                    <p><i class="fa fa-check-square text-primary me-3"></i>Many variations of passages of lorem ipsum
                    </p>
                    <div class="border border-5 border-primary p-4 text-center mt-4">
                        <h4 class="lh-base text-uppercase mb-0">We’re Good in All Metal Works Using Quality Welding Tools
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="check" class="container-fluid pt-6 pb-6">
        <div class="container pt-4">
            <div class="row g-0 feature-row wow fadeIn" data-wow-delay="0.1s">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100">
                        <div class="feature-icon btn-xxl-square bg-primary mb-4 mt-n4">
                            <i class="fa fa-hammer fa-2x text-white"></i>
                        </div>
                        <div class="p-5 pt-0">
                            <h5 class="text-uppercase mb-3">Quality Welding</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                            <a class="position-relative text-body text-uppercase small d-flex justify-content-between"
                                href="#"><b class="bg-white pe-3">Read More</b> <i
                                    class="bi bi-arrow-right bg-white ps-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.4s">
                    <div class="feature-item border h-100">
                        <div class="feature-icon btn-xxl-square bg-primary mb-4 mt-n4">
                            <i class="fa fa-dollar-sign fa-2x text-white"></i>
                        </div>
                        <div class="p-5 pt-0">
                            <h5 class="text-uppercase">Affordable Pricing</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                            <a class="position-relative text-body text-uppercase small d-flex justify-content-between"
                                href="#"><b class="bg-white pe-3">Read More</b> <i
                                    class="bi bi-arrow-right bg-white ps-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100">
                        <div class="feature-icon btn-xxl-square bg-primary mb-4 mt-n4">
                            <i class="fa fa-check-double fa-2x text-white"></i>
                        </div>
                        <div class="p-5 pt-0">
                            <h5 class="text-uppercase">Best Welder</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                            <a class="position-relative text-body text-uppercase small d-flex justify-content-between"
                                href="#"><b class="bg-white pe-3">Read More</b> <i
                                    class="bi bi-arrow-right bg-white ps-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.6s">
                    <div class="feature-item border h-100">
                        <div class="feature-icon btn-xxl-square bg-primary mb-4 mt-n4">
                            <i class="fa fa-tools fa-2x text-white"></i>
                        </div>
                        <div class="p-5 pt-0">
                            <h5 class="text-uppercase">Quality Tools</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                            <a class="position-relative text-body text-uppercase small d-flex justify-content-between"
                                href="#"><b class="bg-white pe-3">Read More</b> <i
                                    class="bi bi-arrow-right bg-white ps-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid feature mt-6 mb-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0 justify-content-end">
                <div class="col-lg-6 pt-5">
                    <div class="mt-5">
                        <h1 class="display-6 text-white text-uppercase mb-4 wow fadeIn" data-wow-delay="0.3s">Why You
                            should Choose Our welding Services</h1>
                        <p class="text-light mb-4 wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar
                            tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu
                            consequat augue.</p>
                        <div class="row g-4 pt-2 mb-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="flex-column text-center border border-5 border-primary p-5">
                                    <h1 class="text-white" data-toggle="counter-up">9999</h1>
                                    <p class="text-white text-uppercase mb-0">Satisfied Clients</p>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="flex-column text-center border border-5 border-primary p-5">
                                    <h1 class="text-white" data-toggle="counter-up">9999</h1>
                                    <p class="text-white text-uppercase mb-0">Complete Projects</p>
                                </div>
                            </div>
                        </div>
                        <div class="border border-5 border-primary border-bottom-0 p-5">
                            <div class="experience mb-4 wow fadeIn" data-wow-delay="0.6s">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-white text-uppercase">Experience</span>
                                    <span class="text-white">90%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="experience wow fadeIn" data-wow-delay="0.7s">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-white text-uppercase">Work Done</span>
                                    <span class="text-white">95%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid service pt-6 px-0">
            <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 text-uppercase mb-5">Reliable & High-Quality Welding Services</h1>
            </div>
            <div class="row g-4">
                @foreach ($cards as $card)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
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
          <div class="container-fluid service pt-6 pb-6">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="display-6 text-uppercase mb-5">Our Products</h1>
                </div>
                <div class="row g-4">
                    @foreach ($gallery as $item)
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item h-100">
                                <a href="{{ asset('storage/' . $item->image_path) }}" class="glightbox "
                                    data-gallery="images-gallery">
                                    <img src="{{ asset('storage/' . $item->image_path) }}" alt="Gallery Image"
                                        class="img-fluid mb-2 h-100">
                                </a>
                            <a class="text-black fs-4 fw-medium" href="{{ route('gallery.show', ['gallery' => $item->id]) }}">{{ $item->name }}</a>


                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
      
    @endsection
