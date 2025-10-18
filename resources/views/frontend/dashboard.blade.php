@extends('frontend.admin_master')
@section('admin')


@php
// $departments = App\Models\Department::all(); 
$sliders = App\Models\Slider::latest()->paginate(3);  
$services = App\Models\Service::latest()->paginate(3);
$allNews = App\Models\News::latest()->paginate(3);
$wanted_person = App\Models\Wanted::latest()->paginate(4);
$missing_person = App\Models\Missing::latest()->paginate(4);
$aboutpage = App\Models\Cp_Speech::find(1);
@endphp



    <!-- Start  Page hero-->
    <section class="page-hero hero-swiper-slider fade-effect  d-flex align-items-center" id="page-hero">
      <div class="particles-js  dots" id="particles-js"></div>
      <!--Start  Swiper JS slider-->
      <div class="slider swiper-container">
        <div class="swiper-wrapper ">

         @foreach($sliders as $item)
               <!--first slider-->
              <div class="swiper-slide"> 
                <div class="slide-bg-img" data-bg-img="{{asset($item->image)}}">
                  <div class="overlay-color " data-bg-opacity=".35"></div>
                </div>
                <div class="container"> 
                  <div class="hero-text-area  content-always-light   ">
                    <div class="row ">
                      <div class="col-12   ">
                        <div class="hero-social-icons mb-3 ">
                          <div class="sc-wrapper dir-row sc-flat">
                            <ul class="sc-list">
                              <li class="sc-item " title="Facebook"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                              <li class="sc-item " title="youtube"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-youtube sc-icon"></i></a></li>
                              <li class="sc-item " title="instagram"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-instagram sc-icon"></i></a></li>
                              <li class="sc-item " title="twitter"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-twitter sc-icon"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-12     ">
                        <div class="pre-title">{{$item->slider_tag}}           </div>
                      </div>
                      <div class="col-12 col-md-8  col-lg-7   ">
                        <h1 class="slide-title  ">{!!$item->title !!} </h1>
                      </div>
                      <div class="col-10 col-md-8  col-lg-6   ">
                        <p class="slide-subtitle ">
                          {{$item->long_description}}
                          
                        </p>
                      </div>
                      <div class="col-12">
                        <div class="cta-links-area"><a class=" btn-solid cta-link cta-link-primary  " href="#0">start now</a><a class=" btn-outline cta-link  " href="#0">Contact us</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
         @endforeach
         
          
         
        </div>
        <div class="slides-state h-align  ">
          <div class="slide-num curent-slide  "></div>
          <!--Add Pagination-->
          <div class="swiper-pagination"></div>
          <div class="slide-num slides-count  "></div>
        </div>
        <!--Add Arrows -->
        <div class="slider-stacked-arrows">
          <div class="swiper-button-prev   ">
            <div class="left-arrow"><i class="bi bi-chevron-left icon "></i>
            </div>
          </div>
          <div class="swiper-button-next  ">
            <div class="right-arrow"><i class="bi bi-chevron-right icon "></i>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  Page hero-->

    <!-- Start  about Section-->
    <section class="about mega-section" id="about">
      <div class="container">
        <!-- Start first about div-->
        <div class="content-block  ">
          <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center about-col  wow fadeInUp" data-wow-delay="0.2s">
              <div class="img-area  ">
                <div class="image  " data-tilt><img class="about-img img-fluid rounded-circle" loading="lazy" src="{{ asset($aboutpage->igp_image_home) }}" alt="about"></div>
              </div>
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center about-col pad-start  wow fadeInUp " data-wow-delay="0.6s">
              <div class="text-area ">
                <div class="sec-heading  light-title ">
                  <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">IGP Speech</span>
                    <h3 class=" title    wow fadeInUp" data-wow-delay=".4s" style="text-transform: capitalize;">{!! Str::limit($aboutpage->title, 45) !!} </h3>

                  </div>
                </div>
                <div class=" about-text">{!! Str::limit($aboutpage->igp_speech, 800) !!}  </div>
                
                <div class="cta-area "><a class=" btn-solid " href="{{route('home.igp')}}" > Read More</a></div>
              </div>
            </div>
          </div>
        </div>
        <!--End first about div-->
      </div>
    </section>
    <!-- End  about Section-->

    <!-- Start  blog Section-->
    <section class="blog blog-home mega-section  " id="blog">
      <div class="container ">
        <div class="sec-heading  ">
          <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">Press Release</span>
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">latest <span class='hollow-text'>news</span></h2>
          </div>
          <div class=" cta-area  cta-area  wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid   cta-btn btn-solid  " href="{{ route('news.home') }}">see all posts<i class="bi bi-arrow-right icon "></i></a></div>
        </div>
        <div class="row ">
          <div class="col-12 "> 
            <div class="posts-grid ">
              <div class="row">
            @foreach($allNews as $item)
                <div class="col-12 col-lg-4 ">
                  <div class="post-box">     <a class="post-link" href="{{route('news.details',$item->id)}}" title="How litespeed technology works to speed up your site "> 
                      <div class="post-img-wrapper  ">
                       @if ($item->news_image ==null)
                        <img class=" parallax-img   post-img" loading="lazy" src="{{ asset('upload/newsImages/no_image.jpeg')}}" alt=""/>
                      @else
                        <img class=" parallax-img   post-img" loading="lazy" src="{{ asset($item->news_image)}}"  />
                      @endif 
                      
                      <span class="post-date"><span class="day">{{Carbon\Carbon::parse($item->created_at)->diffForhumans()}}</div></a>
                    <div class="post-summary">
                      <div class="post-info"><a class="info post-cat" href="#"> <i class="bi bi-bookmark icon"></i>hosting</a><a class="info post-author" href="#"> <i class=" bi bi-person icon"></i>{{$item->news_category_id}}</a></div>
                      <div class="post-text"><a class="post-link" href="{{route('news.details',$item->id)}}"> 
                          <h2 class="post-title"> {{ Str::limit($item->news_title, 50)}} </h2></a>
                        <!--<p class="post-excerpt">{!! Str::limit($item->news_content , 120)!!}</p><a class="read-more" href="{{route('news.details',$item->id)}}" title="How litespeed technology works to speed up your site ">read more<i class="bi bi-arrow-right icon "></i></a>-->
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  blog Section-->

    <!-- Start  services Section-->
    <section class="services services-boxed mega-section  " id="services">
      <div class="container">
        <div class="sec-heading  ">
          <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">services</span>
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>services</span> we offer</h2>
            <p class="subtitle   wow fadeInUp " data-wow-delay=".6s"><!--Lorem ipsum dolor sit amet consectetur adipisicing elit Omnis <br>id atque  dignissimos repellat quae ullam.--!></p>
          </div> 
          <div class=" cta-area   wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid" href="{{route('all.services')}}">View all services <i class="bi bi-arrow-right icon "></i></a></div>
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
                </div><a class="read-more" href="{{$item->service_tag}}" target="_blank">View More<i class="bi bi-arrow-right icon "></i></a>
              </div>
              <!-- End First service box   -->
            </div>
          @endforeach
          

        </div>
      </div>
    </section>
    <!-- End  services Section-->

    <!-- Start our team Section-->
    <section class="our-team mega-section " id="our-team">
      <div class="container">
        <div class="sec-heading  ">
          <div class="content-area"><span class="pre-title       wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; ">Missing Persons</span>
            <h2 class="title    wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"> List <span class="hollow-text">of</span> Missing Persons</h2>
          </div>
          <div class="cta-area  cta-area  wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;"><a class="cta-btn btn-solid   cta-btn btn-solid  " href="{{route('missed.home')}}">see more<i class="bi bi-arrow-right icon "></i></a></div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <!-- Missing Person -->
            @foreach($missing_person as $item)
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="tm-image js-tilt "><a class="tm-link  " href="{{route('missed.details',$item->id)}}"> 
                    <div class="overlay overlay-color"></div>
                    {{-- <img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/1.jpg')}}" alt="Team Member"></a> --}}

                     @if ($item->image == null)
                    <img class="img-fluid parallax-img  " loading="lazy" src="{{ asset('upload/no_image.png')}}" alt="Team Member"></a>
                    @else 
                    <img class="img-fluid parallax-img  " loading="lazy" src="{{ asset($item->image)}}" alt="Team Member"></a>
                    @endif

                </div>
                <div class="tm-details"><a class="tm-link" href="{{route('missed.details',$item->id)}}"> 
                    <h6 class="tm-name">{{$item->first_name}} {{$item->last_name}}</h6></a><span class="tm-role">Last Seen at:{{$item->location_disappearance}}   </span></div>
              </div>
            </div>
            @endforeach
                 
           
          </div>
        </div>
      </div>
    </section>
    <!-- End our team Section-->

     <section class="our-team mega-section " id="our-team">
      <div class="container">
        <div class="sec-heading  ">
          <div class="content-area"><span class="pre-title       wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; color:red ">Wanted Persons</span>
            <h2 class="title    wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"> List <span class="hollow-text">of</span> Wanted Persons</h2>
          </div>
          <div class="cta-area  cta-area  wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;"><a class="cta-btn btn-solid   cta-btn btn-solid  " href="{{route('wanted.home')}}">see more<i class="bi bi-arrow-right icon "></i></a></div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <!-- Wanted Person -->
            @foreach($wanted_person as $item)
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="tm-image js-tilt "><a class="tm-link  " href="{{route('wanted.details',$item->id)}}"> 
                    <div class="overlay overlay-color"></div>
                    {{-- <img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/1.jpg')}}" alt="Team Member"></a> --}}

                     @if ($item->image == null)
                    <img class="img-fluid parallax-img  " loading="lazy" src="{{ asset('upload/no_image.png')}}" alt="Team Member"></a>
                    @else 
                    <img class="img-fluid parallax-img  " loading="lazy" src="{{ asset($item->image)}}" alt="Team Member"></a>
                    @endif

                </div>
                <div class="tm-details"><a class="tm-link" href="{{route('wanted.details',$item->id)}}"> 
                    <h6 class="tm-name">{{$item->first_name}} {{$item->last_name}}</h6></a><span class="tm-role text-danger">Wanted for:{{$item->crime_committed}}   </span></div>
              </div>
            </div>
            @endforeach
                 
           
          </div>
        </div>
      </div>
    </section>
    <!-- End our team Section-->
        

@endsection



   