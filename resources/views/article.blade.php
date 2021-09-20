@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Maqolalar</h2>
          <p>Bizni xizmatlarning tavsifi.</p>
        </div>
      </section>
      <section id="more-services" class="more-services">
        <div class="container">
          <div class="row">
            @foreach ($posts as $item)
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="card" style="background-image: url({{ asset( 'storage/' . $item->image ) }});" data-aos="fade-up" data-aos-delay="200">
                <div class="card-body">
                  <h5 class="card-title"><a href="">{{ $item->title }}</a></h5>
                  <p class="rd-text">{!! $item->body !!}</p>
                 <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i>Batafsil</a></div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section    
@endsection