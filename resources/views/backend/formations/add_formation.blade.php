@extends('backend.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <h3 class="card-title"> <b> Add Formations</b></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                    <form action="{{ route('formation.store')}}" method="post">
                        @csrf


                        <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Formation name</label>
                        <input type="text" name="type_of_formation" class="form-control" required>

                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Name Of Head Of Formation</label>
                            <input type="text" name="name_of_head" class="form-control" required>

                            </div>


                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                  <label>Content</label>
                                  <textarea id="elm1" class="form-control" rows="8" name="content"> </textarea>
                                </div>
                              </div>

                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary btn-block">Add Formation</button>
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
