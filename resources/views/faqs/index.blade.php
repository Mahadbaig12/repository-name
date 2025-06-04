@extends('layouts.supermaster')

@section('Faqs.index')
   <div class="container py-5">
    <h1 class="text-center mb-5">FAQs Crud</h1>
    <a class="btn btn-success mb-4" href="{{ route('faqs.create') }}">Add FAQ</a>
 
        {{-- <div>
            <h3>{{ $faq->question }}</h3>
            <p>{{ $faq->answer }}</p>
            <a href="{{ route('faqs.edit', $faq->id) }}">Edit</a>
            <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div> --}}

        <table class="table table-bordered">
            <thead>
              <tr>
              
                <th class="fs-3 fw-bold" scope="col ">question</th>
                <th class="fs-3 fw-bold" scope="col ">answers</th>
                <th class="fs-3 fw-bold" scope="col ">action</th>
          
              </tr>
            </thead>
            <tbody class="">

            @foreach ($faqs as $faq)

            <tr>
                <th scope="row">{{ $faq->question }}</th>
                <td>{{ $faq->answer }}</td>
                <td>  <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger " type="submit">Delete</button>
                    <a  class="btn btn-primary "href="{{ route('faqs.edit', $faq->id) }}">Edit</a>
                </form></td>
   
              </tr>
                
            @endforeach
              
            </tbody>
          </table>
   </div>



@endsection

 
    


       
        
 

