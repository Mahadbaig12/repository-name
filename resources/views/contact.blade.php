@extends("layouts.master")

@section("contact")


<div class="container py-5">
  <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center fs-3">{{ $head_contact }}</h2>
       <div style="max-width: 100% !important" class="card border-0 shadow">
        <div class="card-body">
          <form class="py-5">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
       </div>
      </div>
  </div>
</div>







@endsection