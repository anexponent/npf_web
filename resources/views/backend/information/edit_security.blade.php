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
                

            <div class="mission">
                <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Post
                        <a href="{{ route('security_show')}}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('update.security',$security->id) }}" method="POST">
                        @csrf
    

                        <div class="form-group mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{$security->title}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Content</label>
                         <textarea id="summernote" type="text"  class="form-control" name="body" rows="10">{{$security->body}}"</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update post</button>
                        </div>

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

