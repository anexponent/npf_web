@extends('frontend.admin_master')
@section('admin')

  <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="{{asset('build/frontend/assets/images/hero/inner-page-hero.jpg')}}" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Declared Wanted
            {{ $wanted_detail->first_name.' '.$wanted_detail->last_name}}</h1>
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="bi bi-house icon "></i>home</a></li>
              <li class="breadcrumb-item active">team member</li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start inner Page hero-->
    <section class="team-member mega-section">
      <div class="container">
    <div class="row" style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
      <div class="col-12 col-lg-9">
        <div class="card card-team">
            <div class="card-body">
    <div style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
    <table align="center">
        <tbody>
            <tr><td></td></tr>
            <tr align="center"><td><img src="{{ asset('upload/logo.jpeg')}}" alt="Girl in a jacket" width="50" height="100" align="center"></td></tr>
            <tr align="center"><td></td></tr>
            <tr align="center"><td><h1 style="color:green;">THE NIGERIA POLICE FORCE</h1></td></tr>
            <tr><td></td></tr>
            <tr align="center"><td><h4><Strong>Louis Edet House,Shehu Shagari Way, Asokoro Abuja.</Strong></h4></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr align="center"><td><h4><Strong>Hotline: +2348061111111, +2347097686868, +2347097686868.</Strong></h4></td></tr>
            <tr align="center"><td><h1 style="background-color:red; color:white;">WANTED</h1></td></tr>
            <tr align="center">
                <td style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
            <img class="img-fluid shadow-lg rounded-3" @if ($wanted_detail->image ==
                        null)
                        src="{{ asset('upload/newsImages/no_image.jpeg')}}"
                        @else
                        src="{{ asset($wanted_detail->image)}}"
                        @endif
                        />
                    </td>
                </tr>
                <tr><td></td></tr>
            <tr align="center">

                <td class="text-uppercase">Name: <Strong><h1>{{$wanted_detail->first_name}} {{$wanted_detail->last_name}}</h1></Strong></td>
            </tr>
            <tr align="center">

                <td class="text-uppercase">Date of Birth: {{$wanted_detail->dob}}</td>
            </tr>
            <tr><td></td></tr>
            <tr align="center">

                <td class="text-uppercase">Last Known Address: {!! $wanted_detail->address !!}</td>
            </tr>

            <tr><td></td></tr>
            <tr align="center">

                <td class="text-uppercase">Contact Number: {{$wanted_detail->phone}}</td>
            </tr>

            <tr><td></td></tr>
            <tr align="center">

                <td class="text-uppercase">Height: {{$wanted_detail->height}}</td>
            </tr>
            <tr><td></td></tr>
            <tr align="center">

                <td class="text-uppercase">Hair Color: {{$wanted_detail->hair_color}}</td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr align="center">

                <td class="text-uppercase">Eye Color: {{$wanted_detail->eye_color}}</td>
            </tr>
            <tr>
                <td></td>
            </tr>

            <tr align="center">

                <td class="text-uppercase">Complexion: {{$wanted_detail->complexion_color}}</td>
            </tr>
            <tr><td></td></tr>
            <tr align="center">

                <td class="text-uppercase">Other Description: {{$wanted_detail->other_body_descriptions}}</td>
            </tr>

            <tr><td></td></tr>
            <tr align="center">
                <td class="text-uppercase">Languages Spoken: {{$wanted_detail->lanquages_spoken}}</td>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>

            <tr><td></td></tr>
            <tr class="blog-date" align="left">
                <td class="text-uppercase"><Strong>Date Posted: {{$wanted_detail->created_at}}</Strong></td>
            </tr>
        </tbody>
       </table>


        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
    </section>
    <!-- End inner Page hero-->


@endsection



