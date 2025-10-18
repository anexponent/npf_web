@extends('frontend.admin_master')
@section('admin')
  <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="{{asset('build/frontend/assets/images/hero/inner-page-hero.jpg')}}" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Force Public Relations Officer</h1>
          <nav aria-label="breadcrumb ">
           
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
            <div class="tm-description">
              <h3 class="tm-title">Force Public Relations Officer</h3>
              @foreach($fpro as $fpro)
              <div class="div">{!! $fpro->description !!} </div>
              @endforeach
                     </div>
          </div>
          <div class="col-12  col-lg-3 mx-auto ">
            <div class="profile ">
              <div class="tm-img  "><img class=" img-fluid " loading="lazy" src="{{asset('upload/fpro/1771423951580954.jpeg')}}" alt="Team Member"></div>
              <div class="tm-details">
                <h6 class="name">Force PRO</h6><span class="role"> </span>
              </div>
              <div class="tm-social">
                <div class="sc-wrapper dir-row sc-size-40">
                  <ul class="sc-list">
                    <li class="sc-item " title="Facebook"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                    <li class="sc-item " title="youtube"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-youtube sc-icon"></i></a></li>
                    <li class="sc-item " title="instagram"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-instagram sc-icon"></i></a></li>
                    <li class="sc-item " title="twitter"><a class="sc-link" href="https://twitter.com/@Princemoye1" title="social media icon"><i class="fab fa-twitter sc-icon"></i></a></li>
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



   