@extends('backend.admin_master')
@section('admin')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> All Past FPros Contacts</h1>
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
                        <th>Full Name</th>
                        <th>Rank</th>
                        <th>Year of Appointent</th>
                        <th>Year of Departure</th>
                        <th>Image</th>
                        <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach($pastfpro as $pastfpro)
                            <tr>            
                            <td>{{$i=$i+1}}</td>
                            <td>{{$pastfpro->fpro_name}}</td>
                            <td>{{$pastfpro->rank}}</td>
                            <td>{{$pastfpro->year_service_start }}</td>
                            <td>{{$pastfpro->year_service_end }}</td>
                            <td><img width="100"   id="showImage"
                              @if ($pastfpro->image == null)
                                  src="{{ asset('upload/pastfpro/no_image.jpeg')}}"
                              @else
                              {{-- src="{{ asset('upload/pastfpro/1771423951580954.jpeg')}}" --}}
                              src="{{ asset($pastfpro->pastfpro_image)}}"
                              @endif
                             />
</td>
                            <td><a onclick="return confirm('Are you Sure you want to Delete this contact')" 
                             class="btn btn-danger" href="{{route('delete.pastfpro',$pastfpro->id)}}">Delete</a> | <a class="btn btn-success" href="{{route('change.pastfpro',$pastfpro->id)}}">Edit</a></td>
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
