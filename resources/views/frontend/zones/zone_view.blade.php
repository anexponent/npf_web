@extends('frontend.admin_master')
@section('admin')

  <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="{{asset('build/frontend/assets/images/hero/inner-page-hero.jpg')}}" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h2 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Police Zone {{ $zone->zone }}</h2>
          <nav aria-label="breadcrumb ">
            <!--<ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">-->
            <!--  <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="bi bi-house icon "></i>home</a></li>-->
            <!--  <li class="breadcrumb-item active">team member</li>-->
            <!--</ul>-->
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start inner Page hero-->
    <section class="team-member mega-section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-9">
            <div class="tm-description paragraph">
              <h3 class="tm-title">About Police Zone {{ $zone->zone }}</h3>
               <div class="div"> {!! $zone->description !!}  </div>
            </div>
          </div>
          <div class="col-12  col-lg-3 mx-auto ">
            <div class="profile ">
              <div class="tm-img  ">
                    @if ($zone->image == null)
                <img class=" img-fluid " loading="lazy" src="{{ asset('build/uploads/zone/no-image.jpg')}}" alt="Team Member">
                    @else
                <img class=" img-fluid " loading="lazy" src="{{ asset($zone->image)}}" alt="Team Member">
                    @endif
              </div>
              <div class="tm-details">
                <h6 class="name">{{ $zone->rank }} {{ $zone->dig_name }}</h6><span class="role">Police Zone {{ $zone->zone }}  </span>
              </div>
              <div class="tm-social">
                <div class="sc-wrapper dir-row sc-size-40">
                  <ul class="sc-list">
                    <li class="sc-item " title="Facebook"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                    <li class="sc-item " title="youtube"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-youtube sc-icon"></i></a></li>
                    <li class="sc-item " title="instagram"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-instagram sc-icon"></i></a></li>
                    <li class="sc-item " title="twitter"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-twitter sc-icon"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--Start see-more-area-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
        

@endsection



   