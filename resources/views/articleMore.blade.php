@extends('layouts.app')

@section('content')

<section id="faq" class="faq">
  <div class="container">
    <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
      <div class="section-title" data-aos="fade-up">
        <br>
        <h2>{{ $data->title }}</h2>
      </div>
      <div class="col-lg-5">
        <img padding: 25px 50px 75px; src="{{ Voyager::image( $data->image ) }}" alt="">
      </div>

    </div>
    <div class="col-lg-12">
      <h5>{!! $data->body !!}</h5>
    </div>
  </div>
</section>
@endsection