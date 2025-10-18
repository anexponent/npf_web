@extends('backend.admin_master')
@section('admin')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
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

            <div class="mission">
                <h4 class ="mission-title">Edit Vision and Mission Page</h4>
                <a href="{{ route('vision.page') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Message</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vision as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->message }}</td>
                                
                                <td>
                            <a href="{{ route('edit.vision',$item->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                            <a href="{{ route('edit.index',$item->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

   </div>   </div>       </div>

<div> </div><div>
        </section>

@endsection
