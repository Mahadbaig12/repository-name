@extends('layouts.supermaster')

@section('formadd')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <div style="max-width: 100%" class="card p-4">
                <h2 class="mb-3">Add New Service</h2>
                <form action="{{ route('addperson') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="username" required>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="useremail" required>
                    </div> --}}
                    {{-- <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="userage" required>
                    </div> --}}
                    {{-- <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="usercity" required>
                    </div> --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input style="min-height: 150px" type="text" class="form-control" id="description" name="userdesc" required>
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
