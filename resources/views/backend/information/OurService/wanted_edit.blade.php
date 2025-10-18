@extends('backend.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style type="text/css">
.bootstrap-tagsinput .tag {
    margin-right: 2px;
    color: #b70000;
    font-weight: 700px;
}
</style>
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
                        <h4 class="card-title">Edit Wanted Profile </h4>

                        <form method="post" action="{{route('update.wanted')}}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$editWanted->id}}">


                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">First Name </label>
                                <div class="col-sm-10">
                                    <input name="first_name" class="form-control" value="{{$editWanted->first_name}}"
                                        type="text" id="example-text-input">

                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Last Name </label>
                                <div class="col-sm-10">
                                    <input name="last_name" class="form-control" value="{{$editWanted->last_name}}"
                                        type="text" id="example-text-input">

                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Other Body Lanquages </label>
                                <div class="col-sm-10">
                                    <input name="other_body_descriptions" class="form-control" value="{{$editWanted->other_body_descriptions}}"
                                        type="text" id="example-text-input">

                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Crime Committed </label>
                                <div class="col-sm-10">
                                    <input name="crime_committed" class="form-control" value="{{$editWanted->crime_committed}}"
                                        type="text" id="example-text-input">

                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Known Address
                                </label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="address">
                            {{$editWanted->address}}
                                </textarea>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Wanted Image </label>
                                <div class="col-sm-10">
                                    <input name="image" class="form-control" type="file" id="pro_image">
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg"
                                        src="{{(!empty($editWanted->image))? url( $editWanted->image):url('upload/no_image.png')}}"
                                        alt="Card image cap">
                                </div>
                            </div>
                            <!-- end row -->
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Wanted">
                        </form>



                    </div>
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

<script type="text/javascript">
$(document).ready(function() {

    $('#pro_image').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});
</script>
@endsection
