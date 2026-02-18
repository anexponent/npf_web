<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NPF | Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('build/backend/assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{asset('build/backend/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('build/backend/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('build/backend/assets/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('build/backend/assets/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{{asset('build/backend/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('build/backend/assets/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('build/backend/assets/plugins/summernote/summernote-bs4.min.css')}}">

    <!-- Place the first <script> tag in your HTML's <head>//Note This -->
    <!-- <script src="https://cdn.tiny.cloud/1/6g1u56bmwobz625jengy58pie0rt4n9qb0yxyk5p7djv9tc0/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script> -->
    <script src="https://cdn.tiny.cloud/1/h7s85hzcglrryqft5roxk3wz2y6ny89jwes1411ry5w46fxh/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('build/backend/assets/dist/img/AdminLTELogo.png')}}"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Topbar -->
        @include('backend.skin.topbar')
        <!-- /.topbar -->

        <!-- Main Sidebar Container -->
        @include('backend.skin.sidebar')
        <!-- End Main Sidebar  -->


        <!-- Content Wrapper. Contains page content -->
        @yield('admin')
        <!-- /.content-wrapper -->

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
    <script src="{{asset('build/backend/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('build/backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('build/backend/assets/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('build/backend/assets/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('build/backend/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('build/backend/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('build/backend/assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('build/backend/assets/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('build/backend/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script
        src="{{asset('build/backend/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}">
    </script>
    <!-- Summernote -->
    <script src="{{asset('build/backend/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('backend/assets/js/pages/dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('backend/assets/js/app.js')}}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch (type) {
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
    </script>

    <!--tinymce js-->
     {{--<script src="{{asset('Backend1/assets/libs/tinymce/tinymce.min.js')}}"></script>--}}

    <!-- init js -->
    <script src="{{asset('Backend1/assets/js/pages/form-editor.init.js')}}"></script>

    <!-- Boostrap taginput js -->
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="{{ asset('Backend1/assets/js/code.js') }}"></script>
    <script src="{{asset('build/backend/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{asset('build/backend/assets/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('build/backend/assets/dist/js/demo.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('build/backend/assets/dist/js/pages/dashboard.js')}}"></script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> Note This-->
   <script>
  tinymce.init({
    selector: 'textarea',
    plugins: [
      'anchor',
      'autolink',
      'charmap',
      'codesample',
      'emoticons',
      'link',
      'lists',
      'media',
      'searchreplace',
      'table',
      'visualblocks',
      'wordcount'
    ],
    // plugins: [
    //   // Core editing features
    //   'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
    //   // Your account includes a free trial of TinyMCE premium features
    //   // Try the most popular premium features until Jan 24, 2026:
    //   'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'advtemplate', 'ai', 'uploadcare', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
    // ],
    // toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography uploadcare | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    toolbar: 'undo redo | blocks | bold italic underline | link media table | bullist numlist | removeformat'
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
    uploadcare_public_key: 'c0960c6bd44a7e1061cb',
  });
</script>



</body>

</html>