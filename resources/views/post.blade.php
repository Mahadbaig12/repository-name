@extends('layouts.supermaster')



@section('post')

<div class="container py-5">
        <div class="row">
          {{-- <ul>
            @foreach ($persons as $item)
                <li>{{ $item->name }}</li>
                <li>{{ $item->email }}</li>
                <li>{{ $item->age }}</li>
                <li>{{ $item->city}}</li>
            @endforeach
        </ul> --}}
        <div class="content">
          <h2 class="text-center mb-3">Dynamic tabel of data</h2>
          <div class="d-flex justify-content-between mb-4">
            <a class="btn btn-success " href="{{ route('formadd') }}">Add new Car</a>
            <a class="btn btn-danger " href="{{ route('deleteall') }}">Delete all</a>
          </div>
          <div class="row px-2">

            <div class="col-2 box2">id</div>
            <div class="col-2 box2">NAME</div>
            <div class="col-2 box2">Email</div>
            <div class="col-2 box2">City</div>
            <div class="col-2 box2">image</div>

            <div class="col-2 box2">Action</div>
            </div>
            <div class="row px-2">
              @foreach ($persons as $item)
                  <div class="col-2 box2">{{ $item->id}}</div>
                  <div class="col-2 box2">{{ $item->name }}</div>
                  <div class="col-2 box2">{{ $item->email }}</div>
                  {{-- <div class="col-2 box2">{{ $item->age }}</div> --}}
                  <div class="col-2 box2">{{ $item->city }}</div>
                  <div class="col-2 box2">
                    @if ($item->photo)
                        <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}" width="100">
                    @endif
                </div>

                  <div class="col-2 d-flex gap-2 box2">
                    <a class="" href="{{ route('view.person', ['id' => $item->id]) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-eye" viewBox2="0 0 16 16">
                      <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                      <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                    </svg></a>
                    <a class="" href="{{ route('delete.person', ['id' => $item->id]) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox2="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                    </svg></a>
                    <a class="" href="{{ route('update.person', ['id' => $item->id]) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-pencil" viewBox2="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                    </svg></a>

                  </div>

              @endforeach
            </div>
          </div>
          <div class="mt-5">
            {{ $persons->links() }}
          </div>


        </div>
</div>

@endsection



