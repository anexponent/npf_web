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
    <form action ="{{route('store.pastfpro')}}" method="post" enctype="multipart/form-data">
    @csrf   

  <div class="mb-3">
    <label for="fornname" class="form-label">Full Name</label>
    <input type="text" class="form-control" name="fpro_name" id="name" aria-describedby="nameHelp">
    @error('fpro_name')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Rank</label>
    <input type="text" class="form-control" id="rank" name="rank" required value="">
    @error('rank')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>

  <div class="mb-3">
    <label for="fordescription" class="form-label">Designation</label>
    <input type="text" class="form-control" name="description" id="name" aria-describedby="nameHelp">
  </div>



  <div class="mb-3">
    <label for="fordescription" class="form-label">Years served</label>
  </div>

   
  <div class="mb-3">
    <label for="fornname" class="form-label">Start service Year</label>
    <input type="text" class="form-control" name="year_service_start" id="name" aria-describedby="nameHelp" placeholder="YYYY-mm-dd">
</div>



<div class="mb-3">
    <label for="fornname" class="form-label">End service Year</label>
    <input type="text" class="form-control" name="year_service_end" id="name" aria-describedby="nameHelp" placeholder="YYYY-mm-dd">
</div>

<div class="row mb-3">
<label for="example-text-input" class="col-sm-2 col-form-label">Officer's Portrait
</label>
<div class="col-sm-10">
<input name="image" class="form-control" type="file" id="pastfpro_image">
 </div>
</div>
 <!-- end row -->

<div class="row mb-3">
<label for="example-text-input" class="col-sm-2 col-form-label"> </label>
 <div class="col-sm-10">
<img id="showImage" class="rounded avatar-lg" src="{{ url('upload/pastpfpro/no_image.jpg') }}"
                                        alt="Card image cap">
  </div> </div>
                
  <button type="submit" class="btn btn-primary">Add</button>
</form>

                      
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        
<script type="text/javascript">
$(document).ready(function() {

    $(' #pastfpro_image').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});
</script>

@endsection
