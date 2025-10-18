@extends('frontend.admin_master')
@section('admin')

  <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="{{asset('build/frontend/assets/images/hero/inner-page-hero.jpg')}}" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">All News</h1>

        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start inner Page hero-->
    <!-- Start blog-1-col-posts-->
    <section class="blog blog-home mega-section">
      <div class="container ">
        <div class="row ">
          <div class="col-12 col-xl-8 ">
            <div class="posts-grid horizontal">
              <div class="row">
                @foreach($allNews as $item)

                <div class="col-12 ">
                  <div class="post-box">     <a class="post-link" href="post-single.html" title="How litespeed technology works to speed up your site ">
                      <div class="post-img-wrapper  "><img class=" parallax-img   post-img" loading="lazy" @if ($item->news_image ==
                        null)
                        src="{{ asset('upload/newsImages/no_image.jpeg')}}"
                        @else
                        src="{{ asset($item->news_image)}}"
                        @endif
                        /></div></a>
                    <div class="post-summary">
                        <div class="post-info"><a class="info post-cat" href="#"> <i class="bi bi-bookmark icon"></i>hosting</a><a class="info post-author" href="#"> <i class=" bi bi-person icon"></i>{{$item->news_category_id}}</a></div>
                        <div class="post-text"><a class="post-link" href="{{route('news.details',$item->id)}}">
                            <h2 class="post-title"> {{ $item->news_title }} </h2></a>
                          <!--<p class="post-excerpt">{!! Str::limit($item->news_content , 120)!!}</p>--><a class="read-more" href="{{route('news.details',$item->id)}}" title="How litespeed technology works to speed up your site ">read more<i class="bi bi-arrow-right icon "></i></a>
                        </div>
                    </div>
                  </div>
                </div>
                @endforeach
                <div class="col-12">
                    <nav aria-label="Page navigation example">

                        <ul class="pagination pagination-blog justify-content-center">
                            @if($allNews->total() > $allNews->perPage())
                            {{ $allNews->links() }}
                            @endif


                        </ul>
                    </nav>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4 ">
            <div class="blog-sidebar">
              <!--search box-->
              <!--<div class="search sidebar-box">
                <form class="search-form" action="#">
                  <input class="search-input" type="search" name="seach_form" placeholder="Search Posts...">
                  <button class="search-btn" type="submit"><i class="bi bi-search icon"></i></button>
                </form>
              </div>-->
              <!--categories box-->
              <div class="cats sidebar-box">
                <h6 class="sidebar-box-title">
                   Categories:</h6>
                <ul class="sidebar-list cats-list  ">
                    @foreach($NewCat as $cat)

                    @php
                    $CategoryCount = \App\Models\News::CategoryCount($cat->id);
                    @endphp

                  <li class="cat-item"><a class="cat-link" href="{{route('category.post',$cat->id)}}">{{$cat->news_category}}<span class="cat-count">{{$CategoryCount}}</span></a></li>
                  @endforeach
                </ul>
              </div>
              <!--Recent posts  -->
              <div class="recent-posts sidebar-box">
                <h6 class="sidebar-box-title">
                   recent posts:   </h6>
                <ul class="sidebar-list r-posts-list ">
                    @foreach($allnews as $all)
                  <li class="r-post-item"><a class="r-post-link" href="{{route('news.details',$all->id)}}">
                      <div class="r-post-img-wrapper"><img class="r-post-img" loading="lazy" @if ($item->news_image ==
                        null)
                        src="{{ asset('upload/newsImages/no_image.jpeg')}}"
                        @else
                        src="{{ asset($item->news_image)}}"
                        @endif" alt="recent post image"></div>
                      <div class="content">
                        <h6 class="r-post-title">{{ Str::limit($all->news_title, 50)}}</h6><span class="r-post-date"><small>{{Carbon\Carbon::parse($all->created_at)->diffForhumans()}}</small></span>
                      </div></a></li>

                      @endforeach

                    </ul>
              </div>

              <div class="follow-us sidebar-box">
                <h6 class="sidebar-box-title">
                   follow us on:</h6>
                <div class="sc-wrapper dir-row sc-size-32">
                  <ul class="sc-list">
                    <li class="sc-item " title="Facebook"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                    <li class="sc-item " title="youtube"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-youtube sc-icon"></i></a></li>
                    <li class="sc-item " title="instagram"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-instagram sc-icon"></i></a></li>
                    <li class="sc-item " title="twitter"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-twitter sc-icon"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->


@endsection



