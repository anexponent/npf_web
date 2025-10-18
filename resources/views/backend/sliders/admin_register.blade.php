@extends('backend.admin_master')
@section('admin')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Register New Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            {{-- Alert Message --}}
              @if(session()->has('error'))
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('error')}}
                </div>
              @endif
            {{-- Alert Message Ends--}}

            <!-- Main content -->
            <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                <!-- Left col -->
                    <section class="col-lg-12">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <section class="content">
                                <div class="container-fluid">
                                          
                                  <div class="card">
                                                                      
                                    <div class="card-header">
                                    <h3 class="card-title">Admin Registration Form</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                        
                                        <form action="{{ route('admin.register_create')}}" method="post">
                                          @csrf
                        
                                          
                                          <div class="input-group mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Full name</label>
                                            <input type="text" name="name" class="form-control" required placeholder="Full name">
                                            <div class="input-group-append">
                                              <div class="input-group-text">
                                              </div>
                                            </div>
                                          </div>
                        
                                          <div class="input-group mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Rank</label>
                                            <input type="text" name="rank"  class="form-control" required  placeholder="Rank">
                                            <div class="input-group-append">
                                              <div class="input-group-text">
                                              </div>
                                            </div>
                                          </div>
                        
                                          <div class="input-group">
                                            <div class="col-sm-2 col-form-label"></div>
                                            @error('ap_number')
                                                <span class="text-danger">{{ $message}}</span>
                                            @enderror
                                        </div>
                                          <div class="input-group mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">AP Number</label>
                                            <input type="text" name="ap_number" required class="form-control"  placeholder="AP Number">
                                            <div class="input-group-append">
                                              <div class="input-group-text">
                                              </div>
                                            </div>
                                          </div>
                        
                                          <div class="input-group">
                                            <div class="col-sm-2 col-form-label"></div>
                                            @error('phone_number')
                                                <span class="text-danger">{{ $message}}</span>
                                            @enderror
                                        </div>
                                          <div class="input-group mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
                                            <input type="text" name="phone_number"  class="form-control" required placeholder="Phone Number">
                                            <div class="input-group-append">
                                              <div class="input-group-text">
                                              </div>
                                            </div>
                                          </div>
                        
                                          
                                          <div class="input-group">
                                              <div class="col-sm-2 col-form-label"></div>
                                              @error('email')
                                                  <span class="text-danger">{{ $message}}</span>
                                              @enderror
                                          </div>
                                          <div class="input-group mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                            <input type="email" name="email" required class="form-control"  placeholder="Email">
                                            <div class="input-group-append">
                                              <div class="input-group-text">
                                              </div>
                                            </div>
                                          </div>
                              
                                          <div class="input-group mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Password </label>
                                            <input type="password" name="password" required class="form-control"   placeholder="Password">
                                            <div class="input-group-append">
                                              <div class="input-group-text">
                                              </div>
                                            </div>
                                          </div>
                                          
                                          <div class="row">
                                              <button type="submit" class="btn btn-primary btn-block">Register</button>
                                          </div>
                                        </form>
                                        <!-- /.register-box -->
                                    </div>
                                      <!-- /.card-body -->
                                  </div>
                                  <!-- /.card -->
                                
                                </div><!-- /.container-fluid -->
                              </section>
                        </div>
                        <!-- /.card -->
                    </section>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
@endsection
