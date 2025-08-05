@include('includes.suphead')
@include('includes.supheader')


<div class="container-fluid superadmin">
    <div class="row">
        <div class="col-md-2 py-5">
        
            <ul class="list-group">
                <li class="list-group-item  {{ request()->routeIs('faqs.index') ? 'active' : '' }} bg-transparent border-none mb-3" aria-current="true">
                    <a class="nav-link" href="{{ route('faqs.index') }}">FAQS</a>
                </li>
                <li class="list-group-item  {{ request()->routeIs('post') ? 'active' : '' }} bg-transparent border-none mb-3" >
                    <a class="nav-link" href="{{ route('post') }}">Cards</a>
                </li>
                <li class="list-group-item bg-transparent border-none mb-3">
                    <a class="nav-link" href="{{ route('gallery.index') }}">Gallery</a>
                </li>
            
            </ul>
            


        </div>
        <div class="col-md-10">

            @yield('content')
            @yield('Faqs.create')
            @yield('Faqs.index')
            @yield('Faqs.edit')
            @yield('formadd')
            @yield('post')
@yield('formupdate')
        </div>
    </div>
</div>








@include('includes.supfooter')
@include('includes.supfoot')