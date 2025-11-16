@extends('frontend.admin_master')
@section('admin')

<!-- Start inner Page hero-->
<section class="d-flex align-items-center page-hero inner-page-hero" id="page-hero">
  <div class="overlay-photo-image-bg parallax" 
       data-bg-img="{{ asset('build/frontend/assets/images/hero/inner-page-hero.jpg') }}" 
       data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">
        Force Public Relations Officer
      </h1>
    </div>
  </div>
</section>
<!-- End inner Page hero-->

<section class="team-member mega-section">
  <div class="container">
    <div class="row">

      <!-- LEFT SIDE -->
      <div class="col-12 col-lg-9">
        <div class="tm-description">
          <h3 class="tm-title">Force Public Relations Officer</h3>

          @if($fpro)
            <div class="div">{!! $fpro->description !!}</div>
          @else
            <p>No current FPRO information available.</p>
          @endif

        </div>
      </div>

      <!-- RIGHT SIDE -->
      <div class="col-12 col-lg-3 mx-auto">
        <div class="profile">

          <div class="tm-img">
            <img class="img-fluid" loading="lazy"
                 src="{{ asset($fpro->image ?? 'upload/default.jpg') }}"
                 alt="Force PRO">
          </div>

          <div class="tm-details">
            <h6 class="name">Force PRO</h6>
            <span class="role"></span>
          </div>

          <div class="tm-social">
            <div class="sc-wrapper dir-row sc-size-40">
              <ul class="sc-list">
                <li class="sc-item"><a class="sc-link"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                <li class="sc-item"><a class="sc-link"><i class="fab fa-youtube sc-icon"></i></a></li>
                <li class="sc-item"><a class="sc-link"><i class="fab fa-instagram sc-icon"></i></a></li>
                <li class="sc-item">
                  <a class="sc-link" href="https://twitter.com/@Princemoye1">
                    <i class="fab fa-twitter sc-icon"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

@endsection
