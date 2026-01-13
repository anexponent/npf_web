@extends('backend.admin_master')
@php use Illuminate\Support\Str; @endphp

@section('admin')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">All Departments</h1>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">

                    <table class="table table-bordered table-striped">
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
                        @foreach($departments as $index => $department)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $department->department }}</td>
                                <td>{{ $department->dig_name }}</td>
                                <td>{{ $department->rank }}</td>
                                <td>{!! Str::limit($department->description, 400) !!}</td>

                                <td>
                                    <img width="100"
                                         src="{{ $department->image
                                            ? asset($department->image)
                                            : asset('uploads/department/no-image.jpg') }}">
                                </td>

                                <td>
                                    <a href="{{ route('edit.department', $department->id) }}"
                                       class="btn btn-success btn-sm">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>
            </div>

        </div>
    </section>
</div>
@endsection
