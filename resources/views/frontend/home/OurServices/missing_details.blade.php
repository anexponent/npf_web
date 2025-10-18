@extends('frontend.admin_master')
@section('admin')

  <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="{{asset('build/frontend/assets/images/hero/inner-page-hero.jpg')}}" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Declared Missing
            {{ $missing_detail->first_name.' '.$missing_detail->last_name}}</h1>

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
              <h3 class="tm-title">Biography Overview.</h3>
              <div class="card">
                <div class="card-body">
                    <div class="col d-flex justify-content-center">
                    <table>
                        <tbody>
                            <div class="tm-img  "><img class=" img-fluid " loading="lazy" @if ($missing_detail->image ==
                                null)
                                src="{{ asset('upload/newsImages/no_image.jpeg')}}"
                                @else
                                src="{{ asset($missing_detail->image)}}"
                                @endif /></div>
                            <tr>
                                <td>Name:</td>
                               <strong> <td class="text-uppercase">{{$missing_detail->first_name}} {{$missing_detail->last_name}}</td></strong>
                            </tr>
                            <tr>
                                <td>Date of Birth:</td>
                                <td class="text-uppercase">{{$missing_detail->dob}}</td>
                            </tr>
                            <tr>
                                <td>Last Known Address:</td>
                                <td class="text-uppercase">{!! $missing_detail->address !!}</td>
                            </tr>
                            <tr>
                                <td>Location Last Seen:</td>
                                <td class="text-uppercase">{!! $missing_detail->location_disappearance !!}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td class="text-uppercase">{{$missing_detail->gender}}</td>
                            </tr>
                            <tr>
                                <td>Contact Number</td>
                                <td class="text-uppercase">{{$missing_detail->phone}}</td>
                            </tr>

                            <tr>
                                <td>Height</td>
                                <td class="text-uppercase">{{$missing_detail->height}}</td>
                            </tr>
                            <tr>
                                <td>Hair Color</td>
                                <td class="text-uppercase">{{$missing_detail->hair_color}}</td>
                            </tr>
                            <tr>
                                <td>Eye Color</td>
                                <td class="text-uppercase">{{$missing_detail->eye_color}}</td>
                            </tr>

                            <tr>
                                <td>Complexion</td>
                                <td class="text-uppercase">{{$missing_detail->complexion_color}}</td>
                            </tr>
                            <tr>
                                <td>Other Body Description</td>
                                <td class="text-uppercase">{{$missing_detail->other_body_descriptions}}</td>
                            </tr>
                            <tr>
                                <td>State of Origin</td>
                                <td class="text-uppercase">{{$missing_detail->state}}</td>
                            </tr>
                            <tr>
                                <td>Local Government of Origin</td>
                                <td class="text-uppercase">{{$missing_detail->lga}}</td>
                            </tr>
                            <tr>
                                <td>Languages Spoken</td>
                                <td class="text-uppercase">{{$missing_detail->lanquages_spoken}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>

            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->


@endsection



