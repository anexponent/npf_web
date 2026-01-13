@extends('backend.admin_master')
@section('admin')

<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Slider</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Slider Create Form</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('store.slider') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="input-group mb-3">
                            <label class="col-sm-2 col-form-label">Slider Tag</label>
                            <input type="text" name="slider_tag" class="form-control" placeholder="Slider Tag">
                        </div>

                        <div class="input-group mb-3">
                            <label class="col-sm-2 col-form-label">Title</label>
                            <input type="text" name="title" class="form-control" required placeholder="Title">
                        </div>

                        <div class="input-group mb-3">
                            <label class="col-sm-2 col-form-label">Short Description</label>
                            <input type="text" name="short_description" class="form-control" required placeholder="Short Description">
                        </div>

                        <div class="input-group mb-3">
                            <label class="col-sm-2 col-form-label">Slider Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <label class="col-sm-2 col-form-label">Long Description</label>
                            <div class="col-sm-10">
                                <textarea name="long_description" class="form-control" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <button type="submit" class="btn btn-primary btn-block">
                                Create Slider
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section>
</div>

@endsection
