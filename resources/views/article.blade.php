@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
  <section id="services" class="services">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Maqolalar</h2>
        <p>Bizni xizmatlarning tavsifi.</p>
      </div>
    </div>

    <section id="more-services" class="more-services">
      <div class="container">
        <div class="row">
          @foreach ($posts as $item)
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-4">
            <div class="card" style="background-image: url({{ Voyager::image( $item->image ) }});" data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">{{ $item->title }}</a></h5>
                <p class="rd-text">{!! substr(strip_tags($item->body), 0, 50) !!}</p>
                <div class="read-more"><a href="article/{{ $item->id }}"><i class="icofont-arrow-right"></i>Batafsil</a></div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <div class="container bg-light">
      <div class="col-md-6 text-center">
        {{ $posts->links() }}
      </div>
 
@endsection