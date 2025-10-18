<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('build/uploads/logo/logo.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Super Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{route('dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                

              

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Sliders / Services
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('slider.view')}}" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Home Sliders
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('service.view')}}" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    All Services 
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('add.service')}}" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Add Services 
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Departments / Zones
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                         <li class="nav-item">
                            <a href="{{route('department.view')}}" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Departments
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('zone.view')}}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Zones
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Wanted / Missing Prsn
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                         <li class="nav-item">
                            <a href="{{route('all.wanted')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Wanted Person</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('add.wanted')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Wanted Person</p>
                            </a>
                        </li>

                         <li class="nav-item">
                            <a href="{{route('all.missing')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All Missing Persons</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('add.missing')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Missing Person</p>
                            </a>
                        </li>
                       
                    </ul>
                </li>
                
                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Fallen Hero/Heroines
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                         <li class="nav-item">
                            <a href="{{route('all.hero')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Heros/Heroines</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('add.hero')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Hero/Heroines</p>
                            </a>
                        </li>

                         
                       
                    </ul>
                </li>
                

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            About US
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('ourmgtTeam.page')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Our Management Team</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('add.mgtTeam')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Management Team</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('ourpastigps.page')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Past Igps</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('add.pastigp')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Past Igps</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('vision.page')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mission & Vision</p>
                            </a>

                            <a href="{{route('edit.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Edit Mission & Vision</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('igpsec_page')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>IGP Secretariat</p>
                            </a>
                            <a href="{{route('igpsec.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Edit IGP Secretariat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('history.show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Edit History of Nigeria Police</p>
                            </a>
                            
                           </li>
                           <li>
                            <a href="{{route('force.show')}}" class="nav-link">
                             <i class="far fa-circle nav-icon"></i>
                                <p>Edit Force Structure </p>
                            </a>
                            
                        </li>
                        <li class="nav-item">
                            <a href="assets/pages/charts/flot.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Past IGPs</p>
                            </a>

                        <li class="nav-item">
                    </ul>
                </li>


              

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Formations
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('formation.add') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Formation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('formations.view')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Edit Formation</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                <a href="assets/pages/tables/jsgrid.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>jsGrid</p>
                </a>
            </li>-->
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Units
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('unit.add') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Unit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('units.view')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Edit Unit</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                    <a href="assets/pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>jsGrid</p>
                    </a>
                </li>-->
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Information
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('igp.page')}}" class=" nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>IGP Speech</p>
                            </a>
                        </li>
                       

                        <li class="nav-item">
                            <a href="{{route('add.news')}}" class=" nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Post News</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('all.news')}}" class=" nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All News</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('add.news_category')}}" class=" nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('news.category')}}" class=" nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('peace.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Peace Keeping Operations</p>
                            </a>

                            <a href="{{route('peace.view')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Edit Peace Keeping Operations</p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('security.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Security Tips</p>
                            </a>

                            <a href="{{route('security_show')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Edit Security Tips</p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('fpro.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Force PRO</p>
                            </a>

                            <a href="{{route('fpro.view')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Edit Force PRO</p>
                            </a>
                            </li>
                            <li>
                            <a href="{{route('pastfpro.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Add Past Force PROS</p>
                            </a>
                            <a href="{{route('pastfpro.view')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Edit Past Force PROS</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('contact.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contacts</p>
                            </a>

                            <a href="{{route('contact.view')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Edit contact</p>
                            </a>


                        </li>
                        <li class="nav-item">
                            <a href="assets/pages/examples/project-edit.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Edit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="assets/pages/examples/project-detail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Detail</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="assets/pages/examples/contacts.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contacts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="assets/pages/examples/faq.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>FAQ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="assets/pages/examples/contact-us.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact us</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-header">USER SETTINGS</li>
                <li class="nav-item">
                    <a href="{{route('admin.register')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Add New User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.view')}}" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>View Users</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>