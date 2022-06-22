<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('title')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('admin/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.min.css')}}">

  <!-- Statistics css -->
  <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
  <link rel="stylesheet" href="{{asset('admin/css/statistic.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">

  <link rel="shortcut icon" type="image/png" href="https://luattoanquoc.com/wp-content/uploads/2018/02/fsi636187075666563725.png" />
  <link rel="shortcut icon" type="image/png" href="https://tokyodelicatering.com.vn/Data/Sites/1/News/41/atvstp-(1).png" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="https://tokyodelicatering.com.vn/Data/Sites/1/News/41/atvstp-(1).png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    @include('admin.components.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="https://tokyodelicatering.com.vn/Data/Sites/1/News/41/atvstp-(1).png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Ban quản lý ATVSTP</span>
      </a>

      <!-- Sidebar -->
      @include('admin.components.sidebar')
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->
    @include('admin.components.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <script>
      var store = <?php echo json_encode(route('cosokinhdoanh.store')) ?>;
      var block = <?php echo json_encode(route('kehoachthanhtra.block')) ?>;
    </script>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('admin/plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('admin/js/adminlte.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('admin/js/demo.js')}}"></script>
  <script src="{{asset('admin/js/app.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('admin/js/pages/dashboard.js')}}"></script>
  <!-- chart canvas -->
  <script src="{{asset('admin/js/chartcanvas.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!--  -->
  <script src="{{asset('admin/plugins/vietnamlocalselector/vietnamlocalselector.js')}}"></script>

  <script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <script src="{{asset('backend/js/ajax.js')}}"></script>
  <script>
    CKEDITOR.replace('contentPost', {
      filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
      filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
      filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
      filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
      filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
      filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
    });
    const contentValue = document.querySelector("#content-draft");
    console.log(contentValue.value)
    if (contentValue) {
      CKEDITOR.instances.contentPost.setData(contentValue.value);
    }
  </script>
</body>

</html>