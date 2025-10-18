@extends('frontend.admin_master')
@section('admin')
        <!-- Page Slider-->
        <header class=" page-header-ui-dark bg-img-cover overlay overlay-80" style="background-image: url('{{asset('build/frontend/assets/img/backgrounds/bg-header-video-mobile-fallback.jpg')}}'); height:100px;">
            
        </header>

         <!-- Page Header-->
         <header class="page-header-ui page-header-ui-dark bg-img-cover overlay overlay-60" style="background-image: url(https://source.unsplash.com/PTRzqc_h1r4/1600x900)">
            <div class="page-header-ui-content position-relative">
                <div class="container px-5 text-center">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8">
                            <h1 class="page-header-ui-title mb-3">Zone {{ $zone->zone }}</h1>
                            <p class="page-header-ui-text mb-0">Browse articles, keep up to date, and learn more on our blog!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="svg-border-rounded text-light">
                <!-- Rounded SVG Border-->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
            </div>
        </header>

        <!-- Content Section-->
        <section class="bg-white py-5">
            <div class="container px-5 mt-10">
                <div class="row gx-5">
                    <div class="col-lg-3">
                        <ul class="list-group list-group-flush list-group-careers">
                            
                            <div class="card card-team">
                                <div class="card-body">
                                    <img class="img-fluid shadow-lg rounded-3" 

                                    @if ($zone->image == null)
                                            src="{{ asset('build/uploads/zone/no-image.jpg')}}"
                                        @else
                                        src="{{ asset($zone->image)}}"
                                        @endif
                                    />


                                    <div class="card-team-name">{{ $zone->rank }} {{ $zone->dig_name }}</div>
                                    <div class="card-team-position mb-3">Deputy Inspector General of Police</div>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="card-team-position mb-4">zone of {{ $zone->zone }}</div>

                                </div>
                            </div>


                    </div>

                    


                    <div class="col-lg-9">
                    <br><br><br>
                    

                        {!! $zone->description !!}
                    </div>
                </div>
            </div>
            <div class="svg-border-rounded text-dark">
                <!-- Rounded SVG Border-->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
            </div>
        </section>
@endsection
