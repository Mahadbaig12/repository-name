@extends('layouts.master')



@section('faqs')

<div class="container py-5">
    <div class="col-md-12">

            <h2 class="display-3 text-center mb-4"> FAQS</h2>
    
        <div class="accordion" id="accordionExample">
            @foreach ($faqs as $faq)
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq['id'] }}" aria-expanded="false" aria-controls="collapse{{ $faq['id'] }}">
                            {{ $faq['faq_question'] }}
                        </button>
                    </h2>
                    <div id="collapse{{ $faq['id'] }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>{{ $faq['faq_answer'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        




       
      
       
      </div>
     
  
  </div>


@endsection