<body class="hold-transition skin-red-light sidebar-mini
  {{ (Auth::user()->profile->options['sidebar']) ? 'sidebar-collapse' : '' }}">
<div class="wrapper" id="app">

  @include('admin.partials.top-nav')
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('breadcrumb')

    @include('admin.partials.notifications')

    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Cổng Thông tin điện tử tỉnh Hà Tĩnh</a>.</strong> Bản quyền sản phẩm được bảo vệ theo luật sở hữu trí tuệ nước CHXHCN Việt Nam.
  </footer>

</div>

<!-- ./wrapper -->