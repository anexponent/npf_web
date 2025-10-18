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
                        <h4 class="card-title">News Post Page </h4><br><br>
                        <form method="post" action="{{route('store.wanted')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-1 col-form-label">First Name </label>
                                <div class="col-sm-5">
                                    <input name="firstName" class="form-control" type="text" id="example-text-input">

                                    @error('first_name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <label for="example-text-input" class="col-sm-1 col-form-label">Last Name </label>
                                <div class="col-sm-5">
                                    <input name="lastName" class="form-control" type="text" id="example-text-input">

                                    @error('last_name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-1 col-form-label">Other Names</label>
                                <div class="col-sm-5">
                                    <input name="otherNames" class="form-control" type="text" id="example-text-input">

                                    @error('other_names')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <label for="example-text-input" class="col-sm-1 col-form-label">Date of Birth </label>
                                <div class="col-sm-5">
                                    <input name="dateBirth" class="form-control" type="Date" id="example-text-input">

                                    @error('dob')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-1 col-form-label">Height</label>
                                <div class="col-sm-5">
                                    <input name="height" class="form-control" type="number" id="example-text-input">

                                    @error('height')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <label for="example-text-input" class="col-sm-1 col-form-label">Nationality</label>
                                <div class="col-sm-5">
                                    <input name="nationality" class="form-control" type="text" id="example-text-input">

                                    @error('nationality')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-1 col-form-label">Known Address </label>
                                <div class="col-sm-5">
                                    <textarea id="elm1" name="address" class="form-control"> </textarea>

                                    @error('address')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <label for="example-text-input" class="col-sm-1 col-form-label">Phone Number</label>
                                <div class="col-sm-5">
                                    <input name="phoneNo" class="form-control" type="text" id="example-text-input">

                                    @error('phone')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-1 col-form-label">News Title </label>
                                <div class="col-sm-5">
                                    <input name="news_title" class="form-control" type="text" id="example-text-input">

                                    @error('news_title')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <label for="example-text-input" class="col-sm-1 col-form-label">Languages Spoken</label>
                                <div class="col-sm-5">
                                    <input name="languageSpoken" class="form-control" type="text"
                                        id="example-text-input">

                                    @error('languages_spoken')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-1 col-form-label">Hair Color </label>
                                <div class="col-sm-5">
                                    <input name="hairColor" class="form-control" type="text" id="example-text-input">

                                    @error('hair_color')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <label for="example-text-input" class="col-sm-1 col-form-label">Complexion</label>
                                <div class="col-sm-5">
                                    <input name="compleionColor" class="form-control" type="text"
                                        id="example-text-input">

                                    @error('complexion_color')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-1 col-form-label">Eye Color</label>
                                <div class="col-sm-5">
                                    <input name="eyeColor" class="form-control" type="text" id="example-text-input">

                                    @error('eye_color')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <label for="example-text-input" class="col-sm-1 col-form-label">Other Body
                                    Description</label>
                                <div class="col-sm-5">
                                    <input name="otherBodyDes" class="form-control" type="text" id="example-text-input">

                                    @error('otherBodyDes')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-1 col-form-label">Suspected Crime
                                    Committed</label>
                                <div class="col-sm-5">
                                    <input name="crimeCommitted" class="form-control" type="text"
                                        id="example-text-input">

                                    @error('crimeCommitted')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <label for="example-text-input" class="col-sm-1 col-form-label">Image </label>
                                <div class="col-sm-5">
                                    <input name="image" class="form-control" type="file" id="pro_image">

                                    @error('image')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>\
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}"
                                        alt="Card image cap">
                                </div>
                            </div>
                            <!-- end row -->
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Post News">
                        </form>
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