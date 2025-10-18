@extends('frontend.admin_master')
@section('admin')

<!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="{{asset('build/frontend/assets/images/hero/inner-page-hero.jpg')}}" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Press Release</h1>

        </div>
      </div>
    </section>
    <!-- End inner Page hero-->

    <!-- Start _post -->
    <div class="blog blog-post ">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-10 mx-auto">
            <!--post heading area2021-->

            <h3 class="post-title">{{ $newpos->news_title }}</h3>
            <div class="post-img-wrapper post-featured-area"><img class="featured-img" loading="lazy" @if ($newpos->news_image ==
                null)
                src="{{ asset('upload/newsImages/no_image.jpeg')}}"
                @else
                src="{{ asset($newpos->news_image)}}"
                @endif
                /></div>
          </div>
          <div class="col-12 col-lg-9 mx-auto">
            <div class="post-main-area">
              <div class="post-info">

                <div class="sc-wrapper dir-row sc-size-40">
                    <ul class="sc-list">
                      @foreach($NewCat as $cat)

                  @php

                  $CategoryCount = \App\Models\News::CategoryCount($cat->id);
                  @endphp

                  <a class="info post-cat" href="{{route('category.post',$cat->id)}}"><i class="fas fa-list-alt icon">{{$CategoryCount}}</i>{{$cat->news_category}}</a>

                  @endforeach
                  <a class="info post-author" href="#"><i class="fas fa-user icon"></i>FPRO Desk</a><a class="info post-date" href="#"><i class="fas fa-history icon"></i>{{ $newpos->created_at }}</a></div>
                    </ul>
                  </div>



              <div class="post-content">
                <div class=" first-litter post-text">
                    {!! $newpos->news_content !!}
                </div>
              </div>
              <!--tags panel-->




            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End _post -->


@endsection



