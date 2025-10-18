@extends('admin.admin_master')
@section('admin')extends

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Our Management</h4>

                        <form method="post" action="{{route('update.ourmgtTeam')}}" enctype="multipart/form-data">
                            @csrf


                            <input type="hidden" name="id" value="{{ $mgtteam->id }}">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input name="full_name" class="form-control" type="text" id="example-text-input"
                                        value="{{$mgtteam->full_name}}">
                                    @error('full_name')
                                    <span class=" text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Rank</label>
                                <div class="col-sm-10">
                                    <input name="rank" class="form-control" type="text" id="example-text-input"
                                        value="{{$mgtteam->rank}}">
                                    @error('rank')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end row -->


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Designation</label>
                                <div class="col-sm-10">
                                    <input name="designation" class="form-control" type="text" id="example-text-input"
                                        value="{{$mgtteam->designation}}">
                                    @error('designation')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- end row -->


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Officer's Portrait
                                </label>
                                <div class="col-sm-10">
                                    <input name="image" class="form-control" type="file" id="pro_image">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg" src="{{ asset($mgtteam->image) }}"
                                        alt="Card image cap">
                                </div>
                            </div>
                            <!-- end row -->
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update
                            ">
                        </form>



                    </div>
                </div>
            </div> <!-- end col -->
        </div>



    </div>
</div>


<script type="text/javascript">
$(document).ready(function() {

    $(' #pro_image').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});
</script>


@endsection