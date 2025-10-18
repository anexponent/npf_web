@extends('frontend.admin_master')
@section('admin')

  <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="{{asset('build/frontend/assets/images/hero/inner-page-hero.jpg')}}" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Paid Supreme Price:
           {{$hero_detail->rank}} {{ $hero_detail->first_name.' '.$hero_detail->last_name}}</h1>
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
            <tr align="center"><td><h1 style="background-color:red; color:white;">FALLEN HERO/HEROINES</h1></td></tr>
            <tr align="center">
                <td style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
            <img class="img-fluid shadow-lg rounded-3" @if ($hero_detail->image ==
                        null)
                        src="{{ asset('upload/newsImages/no_image.jpeg')}}"
                        @else
                        src="{{ asset($hero_detail->image)}}"
                        @endif
                        />
                    </td>
                </tr>
                <tr><td></td></tr>
            {{-- <tr align="center">

                <td class="text-uppercase"><Strong><h1>{{$hero_detail->ap_force_number}}</Strong><br><Strong>Rank: {{$hero_detail->rank}}</h1></Strong></td>
            </tr> --}}
                <tr><td></td></tr>
            <tr align="center">

                <td class="text-uppercase"><Strong><h1>{{$hero_detail->rank}} {{$hero_detail->first_name}} {{$hero_detail->last_name}}</h1></Strong></td>
            </tr>
            <tr align="center">

                <td class="text-uppercase">Command/Formation Last Served: {{$hero_detail->command_last_served}}</td>
            </tr>
            <tr><td></td></tr>
            <tr align="center">

                <td class="text-uppercase">Date of Incidence: {{$hero_detail->date_occurrence}}</td>
            </tr>
            <tr><td></td></tr>

            <tr align="center">

                <td class="text-uppercase">Date of Enlistment: {{$hero_detail->date_enlistment}}</td>
            </tr>
            <tr><td></td></tr>

            <tr align="center">

                <td class="text-uppercase"><Strong>Information on the Incidence:</Strong> {!! $hero_detail->death_reason !!}</td>
            </tr>

            <tr><td></td></tr>
            <tr align="center">

                <td class="text-uppercase"><Strong>Brief Biography:</Strong> {!! $hero_detail->biography !!}</td>
            </tr>

            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr><td></td></tr>

            <tr><td></td></tr>
            <tr class="blog-date" align="left">
                <td class="text-uppercase"><Strong>Date Posted: {{$hero_detail->created_at}}</Strong></td>
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



