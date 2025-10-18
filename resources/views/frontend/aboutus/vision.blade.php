@extends('frontend.admin_master')
@section('admin')

  <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="{{asset('build/frontend/assets/images/hero/inner-page-hero.jpg')}}" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Vision and Mission</h1>
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start inner Page hero-->
    <section class="team-member mega-section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-12">
            <div class="tm-description">
              <h3 class="tm-title">Vision and Mission</h3>
              
              @foreach ($vision as $vision)
             <div class="tm-text"> {!! $vision->message  !!}</div>
              @endforeach
              
               </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
        

@endsection



   