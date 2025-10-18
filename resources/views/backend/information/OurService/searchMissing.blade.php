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
                            <form action="{{url('/search/wanted')}}" method="GET">
                                @csrf
                                <input style="width: 500px; float:right" class="form-control" type="text"
                                    name="search_name" placeholder="Search Here...">
                                <input style="float:right" type="submit" class="btn btn-primary"
                                    value=" search"><br><br>
                            </form>
                            <br>
                            <br>
                            <hr>
                            <br>
                            @if(isset($newpos))
                            <table id=" datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>

                                        <th>News Category Name</th>
                                        <th>News Title</th>
                                        <th>News Description</th>
                                        <th>News Image</th>
                                        <th>Action</th>
                                </thead>


                                <tbody>
                                    @if(count($newpos)>0)

                                    @foreach($newpos as $item)
                                    <tr>


                                        <td> {{ $item['NewsCategories']['news_category'] }} </td>
                                        <td> {{ $item->news_title }} </td>
                                        <td> {!! $item->news_content !!} </td>
                                        <td> <img src="{{ asset($item->news_image) }}"
                                                style="width: 60px; height: 50px;">
                                        </td>


                                        <td>
                                            <a href="{{route('edit.news',$item->id)}}" class="btn btn-info sm"
                                                title="Edit Data"> <i class="fas fa-edit"></i> </a>

                                            <a href="{{route('delete.news',$item->id)}}" class="btn btn-danger sm"
                                                title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i>
                                            </a>

                                        </td>

                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td>
                                            No result Found
                                        </td>

                                    </tr>

                                    @endif
                                    </tb<ody>
                            </table>
                            <div class="pagination-block">
                                {{$newpos->withQueryString()->links('pagination::bootstrap-5')}}
                            </div>

                            @endif
                        </div>

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
