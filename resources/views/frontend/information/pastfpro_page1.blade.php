@extends('frontend.admin_master')
@section('admin')

  <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="{{asset('build/frontend/assets/images/hero/inner-page-hero.jpg')}}" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Past Force Public Relations Officers</h1>
          <nav aria-label="breadcrumb ">
           
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start inner Page hero-->
      <section class="our-team mega-section " id="our-team">
      <div class="container">
        <div class="sec-heading  ">
          <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">Past PROS</span>
            <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"> Past <span class='hollow-text'>Force Public</span> Relations Officers</h2>
          </div>
          <div class=" cta-area  cta-area  wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid   cta-btn btn-solid  " href="{{route('pastfpro.display')}}">see more<i class="bi bi-arrow-right icon "></i></a></div>
        </div>
        <div class="container-fluid">
             <div class="row">
            <!--first Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.1s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/1.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name"> DCP EZEKIEL HART</h6></a><span class="tm-role">1961-1983 </span></div>
              </div>
            </div>
            <!--Second Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.2s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/2.jpg')}}" alt="Team Member"/></a>
                                 </div>
                <div class="tm-details"><a class="tm-link" href="team-member.html"> 
                    <h6 class="tm-name"> CP FELIX MUSA</h6></a><span class="tm-role">1983-1984  </span></div>
              </div>
            </div>
            <!--Third Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/3.jpg')}}" alt="Team Member"/></a>
                 
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name"> CP D.U.A. ISANG</h6></a><span class="tm-role">1984-1985 </span></div>
              </div>
            </div>
            <!--fourth Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.6s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/4.jpg')}}" alt="Team Member"/></a>
                 
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">CP FELIX MUSA</h6></a><span class="tm-role">1985-1986   </span></div>
              </div>
            </div>
            <!--Fifth Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.1s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/5.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name"> ACP RAPH ONYEJEKWE</h6></a><span class="tm-role">1986-1987   </span></div>
              </div>
            </div>
            <!--sixth Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.2s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/6.jpg')}}" alt="Team Member"/></a>
                 
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">ACP LEKAN ALABI</h6></a><span class="tm-role">1987-1989   </span></div>
              </div>
            </div>
            <!--seventh Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">CP ALBERT AFEGBAI</h6></a><span class="tm-role">1989-1990  </span></div>
              </div>
            </div>
            <!--eighth Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.6s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/8.jpg')}}" alt="Team Member"/></a>
                 
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">CP FRANK A. ODITA</h6></a><span class="tm-role">1900-1992 </span></div>
              </div>
            </div>
            <!--Nineth Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">CSP HAZ IWENDI</h6></a><span class="tm-role">1992-1993 </span></div>
              </div>
            </div>

             <!--Eleventh Team Member-->
             <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name"> DCP TUNJI ALAPINI</h6></a><span class="tm-role">1993-1997  </span></div>
              </div>
           </div>

           <!--Twelveft Team Member-->
           <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">DCP NYOUNG E. AREBAMENI</h6></a><span class="tm-role">1997-2000  </span></div>
              </div>
           </div>

           <!--Thirteen Team Member-->
           <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">DCP HAZ IWENDI</h6></a><span class="tm-role">2000-2002 </span></div>
              </div>
           </div>

           <!--Fourteenth Team Member-->
           <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">DCP HAZ IWENDI</h6></a><span class="tm-role">2000-2002 </span></div>
              </div>
           </div>
        
            <!--Fiveteenth Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">DCP CHRIS A. OLAKPE</h6></a><span class="tm-role">2002-2005 </span></div>
              </div>
           </div>

            <!--Sixteenth Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">SP EMMANUEL IGHODALO</h6></a><span class="tm-role">JAN 2005 -AUGUST 2005 </span></div>
              </div>
           </div>
    <!--Seveteenth Team Member-->
        <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">CP HAZ IWENDI</h6></a><span class="tm-role">2005-2007</span></div>
              </div>
           </div>



            <!--Eighteenth Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">AGBEREBI E. AKPOEBI</h6></a><span class="tm-role">2007- 2008</span></div>
              </div>
           </div>

            <!--Twenteeth Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">DCP EMMANUEL C.S. OJUKWU</h6></a><span class="tm-role">2008-2010 </span></div>
              </div>
           </div>

 <!--Twwenty first Team Member-->
 <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">ACP EMMANUEL C.S. OJUKWU</h6></a><span class="tm-role">2008-2010 </span></div>
              </div>
           </div>


            <!--Twenty second Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">CSP FRANK E. MBA</h6></a><span class="tm-role">2012-2014 </span></div>
              </div>
           </div>



            <!--Twenty Third Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">CP EMMANUEL C.S. OJUKWU</h6></a><span class="tm-role">2014-2015 </span></div>
              </div>
           </div>


            <!--Twenty fourth-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">ACP OLABISI KOLAWOLE</h6></a><span class="tm-role">2015-2016 </span></div>
              </div>
           </div>


            <!--Twenty fiveth Team Member-->
            <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">DCP DONALD N.AWUNAH</h6></a><span class="tm-role">2016-2017 </span></div>
              </div>
           </div>


           <!--Twenty sixth Team Member-->
           <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">DCP DONALD N.AWUNAH</h6></a><span class="tm-role">2016-2017 </span></div>
              </div>
           </div>

   <!--Twenty seventh Team Member-->
     <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">DCP DONALD N.AWUNAH</h6></a><span class="tm-role">2016-2017 </span></div>
              </div>
           </div>



           <!--Twenty eighth Team Member-->
           <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name"> ACTING DCP JIMOH OLOHUNDARE MOSHOOD</h6></a><span class="tm-role">2017-2019 </span></div>
              </div>
           </div>


           <!--Twenty Nineth Team Member-->
           <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">DCP FRANK E. MBA</h6></a><span class="tm-role">2019-2021 </span></div>
              </div>
           </div>

  <!--Thirteth Team Member-->
  <div class="col-12 col-md-6  col-lg-3 mx-md-auto ">
              <div class="tm-member-card     wow   fadeInUp" data-wow-delay="0.4s">
                <div class="tm-image js-tilt "><a class="tm-link  " href="#"> 
                    <div class="overlay overlay-color"></div><img class="img-fluid parallax-img  " loading="lazy" src="{{asset('build/frontend/assets/images/our-team/7.jpg')}}" alt="Team Member"/></a>
                  
                </div>
                <div class="tm-details"><a class="tm-link" href="#"> 
                    <h6 class="tm-name">CP FRANK E. MBA</h6></a><span class="tm-role">2021-2022 </span></div>
              </div>
           </div>


          </div>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
        

@endsection



   