@extends('layouts.app')

@section('content')

<section id="faq" class="faq">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>TEZ-TEZ SO'RALADIGAN SAVOLLAR</h2>
    </div>
    <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
      <div class="col-lg-5">
        <i class="ri-question-line"></i>
        <img src="" alt="">
      </div>
      <div class="col-lg-7">
        <p>{{ $posts->body }}</p>
      </div>
    </div>

  </div>
</section>
@endsection