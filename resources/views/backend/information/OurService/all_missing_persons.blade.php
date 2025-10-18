
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
                <section class="col-lg-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">

                        <h4 class="card-title">All News Data </h4>
                        <br><br>
                        <div>
                           <!-- <form action="{{route('missing.search')}}" method="GET">
                                @csrf
                                <input style="width: 500px; float:right" class="form-control" type="text"
                                    name="search_name" placeholder="Search Here..." id="search">
                                <input style="float:right" type="submit" class="btn btn-primary"
                                    value=" search"><br><br>
                            </form>-->
                        </div>
                        <table id=" datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Known Address</th>
                                    <th>Other Body Description</th>
                                    <th>Language Spoken</th>
                                    <th>Complexion</th>
                                    <th>Nationality</th>
                                    <th>Profile Image</th>
                                    <th>Action</th>
                            </thead>


                            <tbody>
                                @php($i = 1)
                                @foreach($missing_person as $item)
                                <tr>
                                    <td> {{ $i++}} </td>

                                    <td> {{ $item->first_name }} </td>
                                    <td> {{ $item->last_name }} </td>
                                    <td> {!! $item->address !!} </td>
                                    <td> {{ $item->other_body_descriptions }} </td>
                                    <td> {{ $item->lanquages_spoken }} </td>
                                    <td> {{ $item->complexion_color }} </td>
                                    <td> {{ $item->nationality }} </td>
                                    <td> <img src="{{ asset($item->image) }}" style="width: 60px; height: 50px;">
                                    </td>

                                    <td>
                                        <a href="{{route('edit.missing',$item->id)}}" class="btn btn-info sm"
                                            title="Edit Data"> <i class="fas fa-edit"></i> </a>

                                        <a href="{{route('delete.missing',$item->id)}}" class="btn btn-danger sm"
                                            title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i>
                                        </a>

                                    </td>

                                </tr>
                                @endforeach

                                </tb<ody>
                                <span>
                                    {{$missing_person->links('pagination::bootstrap-5') }}
                                </span>
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
