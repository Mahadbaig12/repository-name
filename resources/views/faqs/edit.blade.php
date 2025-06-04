@extends('layouts.supermaster')

@section('Faqs.edit')
   <div class="container py-5">
    <h1 class="text-center mb-5">Edit FAQ</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  <div class="row justify-content-center">
    <div class="col-md-6">
        <form action="{{ route('faqs.update', $faq->id) }}" method="POST">
            @csrf
            @method('PUT')
        
         
            <div class="d-flex flex-column">
                <label class="mb-2 fs-5 fw-semibold text-uppercase" for="question">Question:</label>
                <input class="custom-input rounded-3 mb-3" type="text" name="question" id="question" value="{{ old('question', $faq->question) }}" required>
            
                <label class="mb-2 fs-5 fw-semibold text-uppercase" for="answer">Answer:</label>
                <textarea class="custom-input rounded-3 mb-4" name="answer" id="answer" required>{{ old('answer', $faq->answer) }}</textarea>
            
                <button class="btn btn-primary" type="submit">Update FAQ</button>
               </div>
      
        </form>
        <a class="btn btn-danger mt-4 float-end" href="{{ route('faqs.index') }}">Back to FAQs</a>
    </div>
  </div>
    

   
   </div>
@endsection
