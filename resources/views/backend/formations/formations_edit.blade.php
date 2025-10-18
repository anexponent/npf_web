@extends('backend.admin_master')
@section('admin')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <!--<h1 class="m-0">View All Admin</h1>-->
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
                    <h3 class="card-title"> <b>Formations Update Form </b></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                    <form action="{{ route('update.formation')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="formation_id" value="{{ $formationsData->id }}">
                        <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Formation name</label>
                        <input type="text" name="type_of_formation" class="form-control" required value="{{ $formationsData->type_of_formation }}">

                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Name Of Head of Formation</label>
                            <input type="text" name="name_of_head" class="form-control" required value="{{ $formationsData->name_of_head }}">

                            </div>


                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                  <label>Content</label>
                                  <textarea id="elm1" class="form-control" rows="8" name="content">{{ $formationsData->content }} </textarea>
                                </div>
                              </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                   <label >Head of Formation Photo</label>
                                <input type="file" min="0" class="form-control" id="image"  name="image"   value="{{$formationsData->image}}">
                                </div>
                            </div>







                        <div class="col-sm-2">
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
