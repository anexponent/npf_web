@extends('frontend.admin_master')
@section('admin')
        <!-- Page Slider-->
        <header class=" page-header-ui-dark bg-img-cover overlay overlay-80" style="background-image: url('{{asset('build/frontend/assets/img/backgrounds/bg-header-video-mobile-fallback.jpg')}}'); height:100px;">
            
        </header>

        <!-- Blank Section-->
        <section class="bg-light py-10">
            <div class="container" style="word-wrap:normal">
                                
                <h4 class="mb-4">
                    <div class="icon-stack bg-primary text-white me-2"><i data-feather="arrow-right"></i></div>
                    {{ $formationsData->type_of_formation }}
                </h4>
                <pre style="font-family: Segoe UI; font-size: 15px; white-space:pre-wrap; word-wrap:break-word"> {{ $formationsData->content }} </pre>
                <div class="card bg-light shadow-none">
                    
                </div>
            </div>
            <div class="svg-border-rounded text-dark">
                <!-- Rounded SVG Border-->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
            </div>
        </section>  
@endsection
