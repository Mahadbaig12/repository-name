<header>

    {{-- <div class="container py-3">
        <nav class="navbar navbar-expand-lg sticky-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="/home">Cars Website</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse justify-content-between align-items-center navbar-collapse" id="navbarNav">
             
                <ul class="navbar-nav">
                  <li class="nav-item px-2">
                    <a class="nav-link" aria-current="page" href="{{ route('contact') }}">Contact-us</a>
                  </li>
              
                  <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('policy') }}">Policy</a>
                  </li>
                  <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('faqs.page') }}">FAQS</a>
                  </li>
                  <li class="nav-item px-2">
                    <a class="nav-link " href="/" aria-disabled="false">Cars</a>
                  </li>
                

            
                </ul>
                <div class="d-flex align-items-center gap-4">
            
              <p class="mb-0 text-white fs-5">{{ Auth::user()->name }}</p>
                    <a class="btn text-white btn-danger" href="{{ route('logout') }}" aria-disabled="false">Logout</a>
                  
       
              </div>
              </div>
            </div>
          </nav>
    </div> --}}
    <div class="container-fluid bg-primary text-white d-none d-lg-flex wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a class="text-decoration-none" href="index.html">
                    <h2 class="text-white fw-bold m-0">WELDORK</h2>
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i>info@example.com</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary ms-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary ms-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary ms-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
   <div class="container-fluid bg-white sticky-top wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0">WELDORK</h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('home') }}"
                        class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }}">Home</a>

                    <a href="{{ route('about') }}"
                        class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('index') }}"
                        class="nav-item nav-link {{ Route::is('index') ? 'active' : '' }}">Services</a>

                   

                    @php
                        $pageRoutes = ['feature', 'team', 'testimonial', 'appointment', '404'];
                    @endphp
                    {{-- <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle {{ in_array(Route::currentRouteName(), $pageRoutes) ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href=""
                                class="dropdown-item {{ Route::is('feature') ? 'active' : '' }}">Features</a>
                            <a href=""
                                class="dropdown-item {{ Route::is('team') ? 'active' : '' }}">Our Team</a>
                            <a href=""
                                class="dropdown-item {{ Route::is('testimonial') ? 'active' : '' }}">Testimonial</a>
                            <a href=""
                                class="dropdown-item {{ Route::is('appointment') ? 'active' : '' }}">Appointment</a>
                            <a href=""
                                class="dropdown-item {{ Route::is('404') ? 'active' : '' }}">404 Page</a>
                        </div>
                    </div> --}}

                    <a href="{{ route('contact') }}"
                        class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">Contact</a>
                </div>
                <div class="ms-auto d-none d-lg-block">
                    <a href="" class="btn btn-primary py-2 px-3">Get A Quote</a>
                </div>
            </div>
        </nav>
    </div>
</div>

</header>
