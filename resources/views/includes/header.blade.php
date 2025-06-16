<header>

    <div class="container py-3">
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
                  {{-- <li class="nav-item px-2">
                    <a class="nav-link " href="{{ route('post') }}">Crud</a>
                  </li> --}}
                  <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('policy') }}">Policy</a>
                  </li>
                  <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('faqs.page') }}">FAQS</a>
                  </li>
                  <li class="nav-item px-2">
                    <a class="nav-link " href="/" aria-disabled="false">Cars</a>
                  </li>
                

                  {{-- <li class="nav-item px-2">
                    <div class="dropdown">
                      <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Cruds
                      </button>
                      <ul  class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('faqs.index') }}">FAQS</a></li>
                        <li><a class="nav-link " href="{{ route('post') }}">Cards</a></li>
                      </ul>
                    </div>
                  </li> --}}
                </ul>
                <div class="d-flex align-items-center gap-4">
                  <p class="text-center mb-0 text-white fs-5">{{ Auth::user()->name }}</p>
                    <a class="btn text-white btn-danger" href="{{ route('logout') }}" aria-disabled="false">Logout</a>
                  
       
              </div>
              </div>
            </div>
          </nav>
    </div>
</header>
