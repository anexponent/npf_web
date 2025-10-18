@extends('backend.admin_master')
@section('admin')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> All services</h1>
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
    
                <div class="row float-right">
                    <div class="col-md-8 offset-md-2">
                       <a class="button" href="{{route('add.service')}}">Add New Service </a>
                    </div>
                        
                <div class="card">          
                </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                        <th>S/N</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach($services as $service)
                            <tr>            
                            <td>{{$i=$i+1}}</td>
                            <td>{{$service->title}}</td>
                            <td>{!!Str::limit($service->long_description, 400) !!}</td>
                            {{-- <td>{!!  Str::limit($service->description)  !!}</td> --}}
                            {{-- <td><img width="100" src="{{ asset($service->image)}}"  alt="no image" /></td> --}}

                            <td><img width="100"   
                                @if ($service->image == null)
                                    src="{{ asset('build/uploads/service/no-image.jpg')}}"
                                @else
                                {{-- src="{{ asset('/police_stations/1689002468.jpg')}}" --}}
                                src="{{ asset($service->image)}}"
                                @endif
                                 />
                            </td>




                            <td><a onclick="return confirm('Are you Sure you want to Delete this User Profile')" 
                                class="btn btn-danger" href="#">Delete</a> | <a class="btn btn-success" href="{{route('edit.service',$service->id)}}">Edit</a></td>
                        </tr>   
                            @endforeach
                
                        </tfoot>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
    
                
            
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.Main content Ends-->
        </div>
@endsection
