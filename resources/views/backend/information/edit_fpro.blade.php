<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NPF</title>
  
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('build/backend/assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('build/backend/assets/dist/css/adminlte.min.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('build/backend/assets/plugins/summernote/summernote-bs4.min.css')}}">
   <!-- CodeMirror -->
   <link rel="stylesheet" href="{{asset('build/backend/assets/plugins/codemirror/codemirror.css')}}">
   <link rel="stylesheet" href="{{asset('build/backend/assets/plugins/codemirror/theme/monokai.css')}}">
  </head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('build/backend/assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Topbar -->
    @include('backend.skin.topbar')
  <!-- /.topbar -->

  <!-- Main Sidebar Container -->
    @include('backend.skin.sidebar')
  <!-- End Main Sidebar  -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Edit and Delete PROS Contacts </h3>
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
                    <a href="{{ route('fpro.view')}}" class="btn btn-danger float-end">BACK</a>
    
                    </div>
                                                 
                    <form action="{{ route('update.fpro',$fpro->id)}}" method="post">
                        @csrf


                  <div class="input-group mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Rank</label>
                <input type="text" name="rank"  class="form-control" required value="{{$fpro->rank}}" >
                            </div>
                        
                        <div class="input-group mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Full name</label>
                        <input type="text" name="fpro_name" class="form-control" required value="{{$fpro->fpro_name}}">
                        </div>

                       
                        <div class="mb-3">
    <label for="fordescription" class="form-label">Description</label>
    <textarea type="text" class="form-control" id="summernote" name="description" col="150" rows="35" required>{{$fpro->description}}</textarea>
  </div>
                        

                        <div class="mb-3">
    <label for="fornname" class="form-label">Upload Photo</label>
    <input type="file" class="form-control" name="image" id="image" aria-describedby="nameHelp" required value="{{$fpro->image}}">

</div>

   <div class="input-group mb-3">
                          <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">

                            <img width="100"   id="showImage"
                              @if ($fpro->image == null)
                                  src="{{ asset('upload/fpro/no_image.jpeg')}}"
                              @else
            
                              src="{{ asset($fpro->image)}}"
                              @endif
                             />
                            </div>

                       
                        
                            <button type="submit" class="btn btn-primary .btn-sm">Update</button>
                    
                    </form>
                
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                
             </div><!-- /.container-fluid -->
            </section>
            <!-- /.Main content Ends-->

        </div>

    

 <!-- Main Sidebar Container -->
 @include('backend.skin.footer')
 <!-- Main Sidebar Container -->


 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script type="text/javascript">
    
  $(document).ready(function(){
      $('#image').change(function(e){
          var reader = new FileReader();
          reader.onload = function(e){
              $('#showImage').attr('src',e.target.result);
          }
          reader.readAsDataURL(e.target.files['0']);
      });
  });
</script>

<script src="{{asset('build/backend/assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<!-- jQuery -->
<script src="{{asset('build/backend/assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('build/backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('build/backend/assets/dist/js/adminlte.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('build/backend/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- CodeMirror -->
<script src="{{asset('build/backend/assets/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('build/backend/assets/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('build/backend/assets/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('build/backend/assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('build/backend/assets/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
</body>
</html>

