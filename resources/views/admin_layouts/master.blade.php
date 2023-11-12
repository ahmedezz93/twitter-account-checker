<!DOCTYPE html>
<html lang="en">
@include('admin_layouts.header')
@yield('css')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">




  <!-- Main Sidebar Container -->
@include('admin_layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

    @yield('content')
</div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('admin_layouts.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin_layouts.footer_script')
@stack('script')
</body>
</html>
