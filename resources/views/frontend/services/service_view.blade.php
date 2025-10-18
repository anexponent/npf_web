@extends('frontend.admin_master')
@section('admin')

@php
// $departments = App\Models\Department::all(); 
$services = App\Models\Service::latest()->paginate(20);
@endphp

  <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="{{asset('build/frontend/assets/images/hero/inner-page-hero.jpg')}}" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h2 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Services We Offer</h2>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
     <!-- Start  services Section-->
    <section class="services services-boxed mega-section  " id="services">
      <div class="container">
        <div class="sec-heading  ">
          <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">services</span>
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>services</span> we offer</h2>
            <p class="subtitle   wow fadeInUp " data-wow-delay=".6s"><!--Lorem ipsum dolor sit amet consectetur adipisicing elit Omnis <br>id atque  dignissimos repellat quae ullam.--!></p>
          </div>
        </div>
        <div class="row gx-4 gy-4 services-row text-center">  
          @foreach($services as $item)
            <div class="col-12 col-md-6  col-lg-4 mx-auto ">
              <!--Start First service box-->
              <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".1s">
                <div class="service-icon">
                <i class="{{$item->service_tag}}"></i></div><span class="service-num hollow-text">1</span>
                <div class="service-content">
                  <h3 class="service-title">{{$item->title}}</h3>
                  <p class="service-text">{!! Str::limit($item->long_description, 170)!!}</p>
                </div>
                {{-- <a class="read-more" href="service-single.html">read more<i class="bi bi-arrow-right icon "></i></a> --}}
              </div>
              <!-- End First service box   -->
            </div>
          @endforeach
          

        </div>
      </div>
    </section>
    <!-- End  services Section-->
        

@endsection



   