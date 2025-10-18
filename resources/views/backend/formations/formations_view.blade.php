@extends('backend.admin_master')
@section('admin')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><b> Formation Dashboard</b></h1>
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

            <!-- Main content -->
            <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                <!-- Left col -->
                    <section class="col-lg-12">
                        <!-- Custom tabs (Charts with tabs)-->
                       
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                <th>S/N</th>
                                <th>Formation Name</th>
                                <th>Content</th>
                                <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i=0;
                                @endphp
                                @foreach($formations as $formation)
                                    <tr>            
                                    <td>{{$i=$i+1}}</td>
                                    <td>{{$formation->type_of_formation}}</td>
                                    <td><pre style="font-family: Segoe UI; font-size: 15px; white-space:pre-wrap; word-wrap:break-word"> {{$formation->content}} </pre></td>
                                    <td>
                                    <a class="btn btn-success" href="{{route('edit.formation',$formation->id)}}">Edit</a></td> <td> <a class="btn btn-danger" href="{{ route('formation.delete' ,$formation->id) }}">Delete</a></td>
                                </tr>   
                                    @endforeach
                        
                                </tfoot>
                            </table>
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
