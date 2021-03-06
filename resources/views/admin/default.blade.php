<!DOCTYPE html>
<html lang="en">

  @include('admin.templates.partials._head')

<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->

  @include('admin.templates.partials._header')

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.templates.partials._sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
    @include('admin.templates.partials._control-sidebar')
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('admin.templates.partials._footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

  @include('admin.templates.partials._scripts')
</body>
</html>