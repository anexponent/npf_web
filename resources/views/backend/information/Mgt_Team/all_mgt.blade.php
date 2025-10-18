@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Management Team</h4>



                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Management Data </h4>


                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Full Name</th>
                                    <th>Rank</th>
                                    <th>Designation/Posting</th>
                                    <th> Portrait</th>
                                    <th>Action</th>
                            </thead>


                            <tbody>
                                @php($i = 1)
                                @foreach($mgtteam as $item)
                                <tr>
                                    <td> {{ $i++}} </td>
                                    <td> {{ $item->full_name }} </td>
                                    <td> {{ $item->rank }} </td>
                                    <td> {{ $item->designation }} </td>
                                    <td> <img src="{{ asset($item->image) }}" style="width: 60px; height: 50px;">
                                    </td>


                                    <td>
                                        <a href="{{route('edit.mgtTeam',$item->id)}}" class="btn btn-info sm"
                                            title="Edit Data"> <i class="fas fa-edit"></i> </a>

                                        <a href="{{route('delete.mgtTeam',$item->id)}}" class="btn btn-danger sm"
                                            title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i> </a>

                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->



    </div> <!-- container-fluid -->
</div>



@endsection