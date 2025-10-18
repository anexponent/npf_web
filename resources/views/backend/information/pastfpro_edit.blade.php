@extends('backend.admin_master')
@section('admin')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit and Delete PAST FPROS </h1>
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
            {{-- Alert Message --}}
              @if(session()->has('error'))
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('error')}}
                </div>
              @endif
            {{-- Alert Message Ends--}}

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                                                        
                    <div class="card-header">
                    <a href="{{ route('pastfpro.view')}}" class="btn btn-danger float-end">BACK</a>
    
                    </div>
                                                 
                    <form action="{{ route('update.pastfpro',$pastfpro->id)}}" method="post">
                        @csrf


                        <div class="input-group mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Rank</label>
                <input type="text" name="rank"  class="form-control" required value="{{$pastfpro->rank}}" >
                            </div>
                        
                        <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Full name</label>
                        <input type="text" name="fpro_name" class="form-control" required value="{{$pastfpro->fpro_name}}">
                        </div>

                       
                        <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Year of Appointment</label>
                        <input type="text" name="year_service_start" class="form-control" required value="{{$pastfpro->year_service_start}}">
                        </div>    

                        <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Year of Departure</label>
                        <input type="text" name="year_service_end" class="form-control" required value="{{$pastfpro->year_service_end}}">
                        </div>   

                        <div class="mb-3">
    <label for="fornname" class="form-label">Upload Photo</label>
    <input type="file" class="form-control" name="pastfpro_image" id="pastfpro_image" aria-describedby="nameHelp" required value="{{$pastfpro->pastfpro_image}}">

</div>

   <div class="input-group mb-3">
                          <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">

                            <img width="100"   id="showImage"
                              @if ($pastfpro->image == null)
                                  src="{{ asset('upload/pastfpro/no_image.jpeg')}}"
                              @else
                              src="{{ asset($pastfpro->pastfpro_image)}}"
                              @endif
                             />
                            </div>

                        
                            <button type="submit" class="btn btn-primary .btn-sm">Update</button>
                    
                    </form>
                
                    </div>
                   
             </div><!-- /.container-fluid -->
            </section>
            <!-- /.Main content Ends-->
        </div>
        <script type="text/javascript">
    
  $(document).ready(function(){
      $('#pastfpro_image').change(function(e){
          var reader = new FileReader();
          reader.onload = function(e){
              $('#showImage').attr('src',e.target.result);
          }
          reader.readAsDataURL(e.target.files['0']);
      });
  });
</script>

@endsection

