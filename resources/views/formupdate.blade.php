@extends('layouts.supermaster')

@section('formupdate')
 
<div class="container py-5">
    <div class="row justify-content-center">

        <div class="col-6">
            <div style="max-width: 100%" class="card p-4">
                <h2 class="mb-3">Update Product data</h2>
                <form action="{{ route('update1.person', $person->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" value="{{ $person->name }}" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
                      
                    </div>
                    {{-- <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="email"  value="{{ $person->email }}" class="form-control" name="useremail" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Age</label>
                        <input type="number"  value="{{ $person->age }}" class="form-control" name="userage" id="exampleInputPassword1">
                    </div> --}}
                    {{-- <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">City</label>
                        <input type="text"  value="{{ $person->city }}" class="form-control" name="usercity" id="exampleInputPassword1">
                    </div> --}}
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <input style="min-height: 150px" type="text" value="{{ $person->description }}" class="form-control" name="userdesc" id="exampleInputPassword1">
                    </div>
                    
                    <div class="mb-3">
                        <label for="photo" class="form-label">Current Photo</label>
                        @if ($person->photo)
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $person->photo) }}" alt="{{ $person->name }}" width="100">
                            </div>
                        @else
                            <p>No photo uploaded.</p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Upload New Photo (optional)</label>
                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
        
    </div>
</div>

@endsection
