@extends('frontend.admin_master')
@section('admin')

  <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="{{asset('build/frontend/assets/images/hero/inner-page-hero.jpg')}}" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Departmet Sample</h1>
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
        <div class="row">
          <div class="col-12 col-lg-9">
            <div class="tm-description">
              <h3 class="tm-title">Biography Overview.</h3>
              <p class="tm-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque hic praesentium, amet iste commodi et placeat, impedit aut veniam maxime laudantium tempore ipsum quod mollitia alias fugiat quis pariatur quidem magnam eaque eligendi?</p>
              <p class="tm-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero iusto perspiciatis a modi nisi magnam maiores dolores aspernatur eveniet possimus, natus sed impedit quam eligendi velit sunt recusandae dolorum corrupti!</p>
              <p class="tm-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ipsa et voluptatibus possimus, recusandae tempore consequatur necessitatibus vitae quia suscipit quidem ex. Harum reprehenderit recusandae cumque magnam atque sunt repellat saepe eius nihil expedita. Repudiandae quidem dolore rerum soluta id?</p>
              <p class="tm-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero iusto perspiciatis a modi nisi magnam maiores dolores aspernatur eveniet possimus, natus sed impedit quam eligendi velit sunt recusandae dolorum corrupti!</p>
              <p class="tm-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ipsa et voluptatibus possimus, recusandae tempore consequatur necessitatibus vitae quia suscipit quidem ex. Harum reprehenderit recusandae cumque magnam atque sunt repellat saepe eius nihil expedita. Repudiandae quidem dolore rerum soluta id?</p>
            </div>
          </div>
          <div class="col-12  col-lg-3 mx-auto ">
            <div class="profile ">
              <div class="tm-img  "><img class=" img-fluid " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/1.jpg')}}" alt="Team Member"></div>
              <div class="tm-details">
                <h6 class="name">Maya bork</h6><span class="role">tech team leader  </span>
              </div>
              <div class="tm-social">
                <div class="sc-wrapper dir-row sc-size-40">
                  <ul class="sc-list">
                    <li class="sc-item " title="Facebook"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                    <li class="sc-item " title="youtube"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-youtube sc-icon"></i></a></li>
                    <li class="sc-item " title="instagram"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-instagram sc-icon"></i></a></li>
                    <li class="sc-item " title="twitter"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-twitter sc-icon"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--Start see-more-area-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
        

@endsection



   