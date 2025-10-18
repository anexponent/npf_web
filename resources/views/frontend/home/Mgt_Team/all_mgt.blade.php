@extends('frontend.admin_master')
@section('admin')

  <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="{{asset('build/frontend/assets/images/hero/inner-page-hero.jpg')}}" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">The Management Team</h1>

        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start inner Page hero-->
      <section class="our-team mega-section " id="our-team">
      <div class="container">

        <div class="container-fluid">
          <div class="row">
            @foreach($mgtteam as $item)
            <!--first Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.1s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="team-member.html">
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" @if ($item->team_image == null)
                    src="{{ asset('uploads/no-image.png')}}"
                    @else
                    src="{{ asset($item->team_image)}}"
                    @endif /></a>
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
                </div>
                <div class="tm-details"><a class="tm-link" href="team-member.html">
                    <h2 class="tm-name">{{ $item->full_name }}</h2></a><span class="tm-role">{{ $item->designation }}</span></div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->


@endsection



