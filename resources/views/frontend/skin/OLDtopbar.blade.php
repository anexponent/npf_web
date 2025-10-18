@php
  $department_nav = App\Models\Department::all(); 
  $zone_nav = App\Models\Zone::all(); 
  $formations = App\Models\formations::all();
  $units = App\Models\Units::all();
  
@endphp
<header class=" page-header   content-always-light header-basic" id="page-header">
      <div class="header-search-box">
        <div class="close-search"></div>
        <form class="nav-search search-form" role="search" method="get" action="#">
          <div class="search-wrapper"> 
            <label class="search-lbl">Search for:</label>
            <input class="search-input" type="search" placeholder="Search..." name="searchInput" autofocus="autofocus"/>
            <button class="search-btn" type="submit"><i class="bi bi-search icon"></i></button>
          </div>
        </form>
      </div>
      <div class="container">
        <nav class="menu-navbar">
          <div class="header-logo"><a class="logo-link" href="{{ url('/')}}"><img class="logo-img light-logo" loading="lazy" style" src="{{asset('build/frontend/assets/images/logo/logo-light34.png')}}" alt="logo"/><img class="logo-img  dark-logo" loading="lazy" src="{{asset('build/frontend/assets/images/logo/logo-dark.png')}}" alt="logo"/></a></div>
          <div class="links menu-wrapper ">
            <ul class="list-js links-list">
              <li class="menu-item has-sub-menu"><a class="menu-link   active" href="#0">home <i class="fas fa-plus  plus-icon"> </i></a>
                <ul class="sub-menu ">
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="./">home 1</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="home-2.html">home 2</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="home-2.html">home 3 [ Slider Style 1 ]</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="home-3.html">home 4 [ Slider Style 2 ]</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="home-rtl.html">home [ RTL languages ]</a></li>
                </ul>
              </li>
              <li class="menu-item has-sub-menu"><a class="menu-link  " href="#0">about<i class="fas fa-plus  plus-icon"> </i></a>
                <ul class="sub-menu ">
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('vision.display')}}">Vision and Mission</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('ourmgtTeamfr.page')}}">The Management Team</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('igpsec.display')}}">IGP secretariat</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('history.display')}}">History of Nigeria Police</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('force.display')}}">Force Structure</a></li>
                </ul>
              </li>
              <li class="menu-item has-sub-menu"><a class="menu-link  " href="#0">Departments<i class="fas fa-plus  plus-icon"> </i></a>
                <ul class="sub-menu ">
                @foreach ($department_nav as $item )
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('department.home', $item->id )}}">{{$item->department}}</a></li>
                @endforeach
                </ul>
              </li>
              <li class="menu-item has-sub-menu"><a class="menu-link  " href="#0">Zones<i class="fas fa-plus  plus-icon"> </i></a>
                <ul class="sub-menu ">
                @foreach ($zone_nav as $item )
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('zone.home', $item->id )}}">{{$item->zone}}</a></li>
                @endforeach
                </ul>
              </li>
               
              <li class="menu-item has-sub-menu"><a class="menu-link  " href="#0">Formations<i class="fas fa-plus  plus-icon"> </i></a>
                <ul class="sub-menu ">
                    @foreach ( $formations as $formation)
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{ route('formation.show', $formation->id) }}">{{$formation->type_of_formation}}</a></li>
                  @endforeach
                </ul>
              </li>

              <li class="menu-item has-sub-menu"><a class="menu-link  " href="#0">Units<i class="fas fa-plus  plus-icon"> </i></a>
                <ul class="sub-menu ">
                    @foreach ( $units as $unit)
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{ route('unit.show', $unit->id) }}">{{$unit->type_of_unit}}</a></li>
                  @endforeach
                </ul>
              </li>
              
              <li class="menu-item has-sub-menu"><a class="menu-link  " href="#0">Information<i class="fas fa-plus  plus-icon"> </i></a>
                <ul class="sub-menu ">
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('peace.display')}}">Peace Keeping Operations </a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('security.display')}}">Security Tips</a></li> 
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('fpro.display')}}">Force PRO</a></li> 
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{route('pastfpro.display')}}">Past Force PROS</a></li> 
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="#">FAQ</a></li>
                  
                </ul>
              </li>
              <li class="menu-item has-sub-menu"><a class="menu-link  " href="{{route('contact.display')}}">Conatct<i class="fas fa-plus  plus-icon"> </i></a>
           
            </ul>
          </div>
         
        </nav>
      </div>
    </header>