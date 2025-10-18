@extends('backend.admin_master')
@section('admin')




        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Zone Update</h1>
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
                    <h3 class="card-title">Zone Update Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        
                    <form action="{{ route('update.zone')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="dept_id" value="{{$zone->id}}">
                        <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Full name</label>
                        <input type="text" name="dig_name" class="form-control" required value="{{$zone->dig_name}}" placeholder="Full name" >
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                        </div>

                        <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Rank</label>
                        <input type="text" name="rank"  class="form-control" required value="{{$zone->rank}}" placeholder="Rank">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                        </div>

                        <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Zone</label>
                        <input type="text" name="zone"  class="form-control" required value="{{$zone->zone}}" placeholder="AP Number">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">AIG Photo</label>
                            <div class="col-sm-10">
                            <input type="file" min="0" class="form-control" id="image"  name="image"   value="{{$zone->image}}">
                            </div>
                        </div>

                        <div class="input-group mb-3">
                          <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">

                            <img width="100"   id="showimage"
                              @if ($zone->image == null)
                                  src="{{ asset('build/uploads/zone/no-image.jpg')}}"
                              @else
                              {{-- src="{{ asset('/police_stations/1689002468.jpg')}}" --}}
                              src="{{ asset($zone->image)}}"
                              @endif
                             />
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                             <div class="col-sm-10">
                            <textarea  id="summernote" name="description" cols="150" rows="40">{{$zone->description}}</textarea>
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
