@extends('backend.admin_master')
@section('admin')
       
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Slider Update</h1>
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
                    <h3 class="card-title">slider Update Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        
                    <form action="{{ route('update.slider')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="dept_id" value="{{$slider->id}}">
                        <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Slider Tag</label>
                        <input type="text" name="slider_tag" class="form-control" required value="{{$slider->slider_tag}}" placeholder="Full name" >
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                        </div>

                        <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                        <input type="text" name="title"  class="form-control" required value="{{$slider->title}}" placeholder="title">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                        </div>

                        <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Slider Description</label>
                        <input type="text" name="short_description"  class="form-control" required value="{{$slider->short_description}}" placeholder="AP Number">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                        </div>

                        <div class="input-group mb-3">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Slider Image</label>
                          <div class="col-sm-10">
                          <input type="file" min="0" class="form-control" id="image"  name="image"   value="{{$slider->image}}">
                          </div>
                      </div>

                      <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                          <div class="col-sm-10">
                          <img width="100"   id="showimage"  src="{{ asset($slider->image)}}" />
                          </div>
                      </div>

                        <div class="input-group mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Long Description</label>
                            <div class="col-sm-10">
                              <textarea name="long_description">{{$slider->long_description}}</textarea>
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
