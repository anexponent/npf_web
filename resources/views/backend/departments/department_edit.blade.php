@extends('backend.admin_master')

@section('admin')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">Department Update</h1>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">

                    <form action="{{ route('update.department') }}"
                          method="post"
                          enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="dept_id" value="{{ $department->id }}">

                        <div class="mb-3">
                            <label>Full Name</label>
                            <input type="text"
                                   name="dig_name"
                                   class="form-control"
                                   value="{{ $department->dig_name }}"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Rank</label>
                            <input type="text"
                                   name="rank"
                                   class="form-control"
                                   value="{{ $department->rank }}">
                        </div>

                        <div class="mb-3">
                            <label>Department</label>
                            <input type="text"
                                   name="department"
                                   class="form-control"
                                   value="{{ $department->department }}"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Photo (400 × 450)</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="mb-3">
                            <img width="120"
                                 src="{{ $department->image
                                    ? asset($department->image)
                                    : asset('uploads/department/no-image.jpg') }}">
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description"
                                      class="form-control"
                                      rows="6">{{ $department->description }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Update Record
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </section>
</div>
@endsection
