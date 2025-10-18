@extends('backend.admin_master')
@section('admin')




        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Department Update</h1>
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
                    <div class="card">
                                                        
                    <div class="card-header">
                    <h3 class="card-title">Department Update Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        
                    <form action="{{ route('update.department')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="dept_id" value="{{$department->id}}">
                        <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Full name</label>
                        <input type="text" name="dig_name" class="form-control" required value="{{$department->dig_name}}" placeholder="Full name" >
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                        </div>

                        <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Rank</label>
                        <input type="text" name="rank"  class="form-control" required value="{{$department->rank}}" placeholder="Rank">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                        </div>

                        <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Department</label>
                        <input type="text" name="department"  class="form-control" required value="{{$department->department}}" placeholder="AP Number">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                        </div>

                        <div class="input-group mb-3">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">DIG Photo</label>
                          <div class="col-sm-10"> 
                          <span class="text-danger"></p>Image Size should be 400* 450 px for best result </span>
                          <input type="file" min="0" class="form-control" id="image"  name="image"   value="{{$department->image}}">
                          </div>
                      </div>

                      <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                          <div class="col-sm-10">
                          <img width="100"   id="showimage"  src="{{ asset($department->image)}}" />
                          </div>
                      </div>

                        <div class="input-group mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea  id="summernote" name="description" cols="150" rows="40">{{$department->description}}</textarea>
                              </div>
                        </div>
                        
                        

                        <div class="row">
                            <button type="submit" class="btn btn-primary btn-block">Update Record</button>
                        </div>
                    </form>
                
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                
             </div><!-- /.container-fluid -->
            </section>
            <!-- /.Main content Ends-->

        </div>

    
@endsection