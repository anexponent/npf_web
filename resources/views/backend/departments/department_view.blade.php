@extends('backend.admin_master')
@section('admin')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> All Departments</h1>
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
    
                {{-- <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="{{route('department_search')}}" method="post">
                        @csrf
                            <div class="input-group">
                                <input type="search" name="search_id" class="form-control form-control-lg" placeholder="Search by Name of department, Rank, Phone number and	Email">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                        
                <div class="card">          
                </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                        <th>S/N</th>
                        <th>Department</th>
                        <th>Full Name</th>
                        <th>Rank</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach($departments as $department)
                            <tr>            
                            <td>{{$i=$i+1}}</td>
                            <td>{{$department->department}}</td>
                            <td>{{$department->dig_name}}</td>
                            <td>{{$department->rank}}</td>
                            <td>{!!Str::limit($department->description, 400) !!}</td>
                            {{-- <td>{!!  Str::limit($department->description)  !!}</td> --}}
                            {{-- <td><img width="100" src="{{ asset($department->image)}}"  alt="no image" /></td> --}}

                            <td><img width="100"   
                                @if ($department->image == null)
                                    src="{{ asset('build/uploads/department/no-image.jpg')}}"
                                @else
                                {{-- src="{{ asset('/police_stations/1689002468.jpg')}}" --}}
                                src="{{ asset($department->image)}}"
                                @endif
                                 />
                            </td>




                            <td><a onclick="return confirm('Are you Sure you want to Delete this User Profile')" 
                                class="btn btn-danger" href="#">Delete</a> | <a class="btn btn-success" href="{{route('edit.department',$department->id)}}">Edit</a></td>
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
