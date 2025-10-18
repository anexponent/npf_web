<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IT Solutions &amp; Business Services Responsive HTML5 Bootstrap5  Website Template">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- fav icon -->
        <link rel="icon" href="{{asset('build/frontend/assets/images/fav-icon/fav-icon.png')}}">
        
        <!-- bootstarp -->
        <link rel="stylesheet" href="{{asset('build/frontend/css/vendors/bootstrap.min.css')}}">
        
        <!-- animate.css file -->
        <link rel="stylesheet" href="{{asset('build/frontend/css/vendors/animate.css')}}">
        
        <!-- Swiper -->
        <link rel="stylesheet" href="{{asset('build/frontend/css/vendors/swiper-bundle.min.css')}}">
        
        <!-- flaticon -->
        <link rel="stylesheet" href="{{asset('build/frontend/css/vendors/flaticon/flaticon.css')}}">
        
        <!-- fontAwesome -->
        <link rel="stylesheet" href="{{asset('build/frontend/css/vendors/all.min.css')}}">
        
        <!-- bootstrap icons -->
        <link rel="stylesheet" href="{{asset('build/frontend/css/vendors/bootstrap-icons-1.9.1/bootstrap-icons.css')}}">
        
        <!-- Fancybox -->
        <link rel="stylesheet" href="{{asset('build/frontend/css/vendors/jquery.fancybox.min.css')}}">
        
        <!-- fonts site preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <!-- fonts site preconnect -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <!-- Font Family -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&amp;display=swap">
        
        <!-- main-LTR -->
        <link rel="stylesheet" href="{{asset('build/frontend/css/main-LTR.css')}}">
        <title> NPF | Home</title>

        <style>
            .div .p .li .ul{
                line-height: 1.6;
                font-size: 1.25rem;
                font-weight: 500;
                margin-bottom: 1.25rem;
                opacity: 0.75;
            },
            
            .about_us p{
                font-weight: 400;
                font-size: 1.1rem;
                line-height: 1.7;
                margin-bottom: 3rem;
                opacity: 0.75;
                letter-spacing: 0.5px;
            }
            
            
        </style>
  </head>
    <body class="light-theme">
                    <!--Start Page Header-->
                        @include('frontend.skin.topbar')
                    <!-- /.topbar -->

                    <!-- Content Wrapper. Contains page content -->
                    @yield('admin')
                    <!-- /.content-wrapper -->
                          
                    <!-- Topbar -->
                    @include('frontend.skin.footer')
                    <!-- /.topbar -->
         <!-- Start loading-screen Component-->
        <div class="loading-screen" id="loading-screen"><span class="bar top-bar"></span><span class="bar down-bar"></span><span class="progress-line"></span><span class="loading-counter"> </span></div>
        <!-- End loading-screen Component-->
        <!-- Start back-to-top Button-->
        <div class="back-to-top" id="back-to-top"><i class="bi bi-arrow-up icon "></i>
        </div>
        <!-- End back-to-top Button-->
        <!-- Start privacy-policy-modal-->
        <div class="modal privacy-policy-modal fade" id="privacyPolicyModal" aria-labelledby="PrivacyPolicyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl ">
            <div class="modal-content text-dark">
            <div class="modal-header">
                <h2 class="modal-title" id="PrivacyPolicyModalLabel">Privacy Policy Modal Title</h2>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content">
                <h4>privacy policy item Title goes here </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
                </div>
                <div class="content">
                <h4>privacy policy item Title goes here </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
                </div>
                <div class="content">
                <h4>privacy policy item Title goes here </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
                </div>
                <div class="content">
                <h4>privacy policy item Title goes here </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
                </div>
                <div class="content">
                <h4>privacy policy item Title goes here </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
                </div>
                <div class="content">
                <h4>privacy policy item Title goes here </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-solid" type="button" data-bs-dismiss="modal" aria-label="Close">Click to close</button>
                <button class="btn-outline" type="button">Do somthing else</button>
            </div>
            </div>
        </div>
        </div>
        <!-- End privacy-policy-modal-->   
        
        <!--     JQuery     -->
        <script src="{{asset('build/frontend/js/vendors/jquery-3.6.1.min.js')}}"></script>
        
        <!--     appear     -->
        <script src="{{asset('build/frontend/js/vendors/appear.min.js')}}"></script>
        
        <!--     bootstrap     -->
        <script src="{{asset('build/frontend/js/vendors/bootstrap.bundle.min.js')}}"></script>
        
        <!--     countTo     -->
        <script src="{{asset('build/frontend/js/vendors/jquery.countTo.js')}}"></script>
        
        <!--     wow     -->
        <script src="{{asset('build/frontend/js/vendors/wow.min.js')}}"></script>
        
        <!--     swiper     -->
        <script src="{{asset('build/frontend/js/vendors/swiper-bundle.min.js')}}"></script>
        
        <!--     particles     -->
        <script src="{{asset('build/frontend/js/vendors/particles.min.js')}}"></script>
        
        <!--     Vanilla-tilt     -->
        <script src="{{asset('build/frontend/js/vendors/vanilla-tilt.min.js')}}"></script>
        
        <!--     isotope     -->
        <script src="{{asset('build/frontend/js/vendors/isotope-min.js')}}"></script>
        
        <!--     fancybox     -->
        <script src="{{asset('build/frontend/js/vendors/jquery.fancybox.min.js')}}"></script>
        
        <!--     main     -->
        <script src="{{asset('build/frontend/js/main.js')}}"></script>
    </body>
</html>