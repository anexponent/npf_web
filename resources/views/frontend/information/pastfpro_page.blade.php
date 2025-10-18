@extends('frontend.admin_master')
@section('admin')

  <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="{{asset('build/frontend/assets/images/hero/inner-page-hero.jpg')}}" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Past Force Public Relations Officers</h1>

        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start inner Page hero-->
      <section class="our-team mega-section " id="our-team">
      <div class="container">

        <div class="container-fluid">
          <div class="row">
        

            @foreach($pastfpro as $pastfpro)
            <!--first Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.1s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#">
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" @if ($pastfpro->pastfpro_image== null)
                    src="{{ asset('upload/pastfpro/no-image.jpg')}}"
                    @else
                    src="{{ asset($pastfpro->pastfpro_image)}}"
                    @endif /></a>


                  <div class="tm-social">
                    <div class="sc-wrapper dir-row sc-size-40">
                    </div>
                  </div>
                </div>
                <div class="tm-details"><a class="tm-link" href="#">
                    <h2 class="tm-name">{{ $pastfpro->fpro_name }}</h2></a><span class="tm-role">{{ $pastfpro->year_service_start }} - {{ $pastfpro->year_service_end }}</span></div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->


@endsection



