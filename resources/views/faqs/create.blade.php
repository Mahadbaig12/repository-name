@extends('layouts.supermaster')



@section('Faqs.create')
  <div class="container py-5">
    <h1 class="text-center mb-5">{{ isset($faq) ? 'Edit FAQ' : 'Add FAQ' }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ isset($faq) ? route('faqs.update', $faq->id) : route('faqs.store') }}" method="POST">
                @csrf
                @if(isset($faq))
                    @method('PUT')
                @endif
               <div class="d-flex flex-column">
                <label class="mb-2 fs-5 fw-semibold text-uppercase" for="question">Question:</label>
                <input class="custom-input rounded-3 mb-3" type="text" name="question" id="question" value="{{ $faq->question ?? '' }}">
                <label class="mb-2 fs-5 fw-semibold text-uppercase" for="answer">Answer:</label>
                <textarea class="custom-input rounded-3 mb-4" name="answer" id="answer">{{ $faq->answer ?? '' }}</textarea>
                <button class="btn btn-primary" type="submit">{{ isset($faq) ? 'Update' : 'Add' }}</button>

               </div>
            </form>
            <a class="btn btn-danger mt-4 float-end" href="{{ route('faqs.index') }}">Back to FAQs</a>
        </div>
    </div>
  </div>
@endsection
 
    


       
        
 

