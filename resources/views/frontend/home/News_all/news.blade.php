@php

$newspos = App\Models\News::latest()->limit(3)->get();
@endphp

<section id="news">
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Press Releases</h6>
                <h1>Latest From Our News Desk</h1>
            </div>
            <div class="row pb-3">
                @foreach($newspos as $item)
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <center>
                                <div class="blog-tags">
                                    <a href=""> </a>
                                    <small class="text-white text-uppercase"></small>
                                </div>
                            </center><br><br>
                            <a href=""> <img class="img-fluid w-100" src="{{asset($item->news_image)}}" alt=""></a>



                            <div class="blog-date">
                                <small
                                    class="text-white text-uppercase">{{Carbon\Carbon::parse($item->created_at)->diffForhumans()}}</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none"
                                    href="">{{$item['NewsCategories']['news_category']}}</a>
                                <span class="text-primary px-2">|</span>
                                <span
                                    style="display:inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 25ch;"><a
                                        class="text-primary text-uppercase text-decoration-none"
                                        href="{{route('news.details',$item->id)}}">{{$item->news_title}}</a>
                                </span>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="{{route('news.details',$item->id)}}">Read
                                More</a>
                        </div>
                    </div>



                </div>
                @endforeach



            </div>
        </div>
    </div>
</section>