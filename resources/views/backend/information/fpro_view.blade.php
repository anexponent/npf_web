@extends('backend.admin_master')
@section('admin')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> All Pros Contacts</h1>
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
                </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="contact" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                        <th>S/N</th>
                        <th>Rank</th>
                        <th>Full Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach($fpro as $fpro)
                            <tr>            
                            <td>{{$i=$i+1}}</td>
                            <td>{{$fpro->rank}}</td>
                            <td>{{$fpro->fpro_name}}</td>
                            <td>{{Str::limit($fpro->description, 400) }}</td>
                            {{-- <td>{!!  Str::limit($fpro->description)  !!}</td> --}}
                            {{-- <td><img width="100" src="{{ asset($fpro->image)}}"  alt="no image" /></td> --}}
                            <td><img width="100"   id="showImage"
                              @if ($fpro->image == null)
                                  src="{{ asset('upload/fpro/no_image.jpeg')}}"
                              @else
                              {{-- src="{{ asset('upload/fpro/1771423951580954.jpeg')}}" --}}
                              src="{{ asset($fpro->image)}}"
                              @endif
                             />
</td>
                            <td><a onclick="return confirm('Are you Sure you want to Delete this contact')" 
                             class="btn btn-danger" href="{{route('delete.fpro',$fpro->id)}}">Delete</a> | <a class="btn btn-success" href="{{route('edit.fpro',$fpro->id)}}">Edit</a></td>
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
