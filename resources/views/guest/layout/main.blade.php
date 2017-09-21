<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="./images/favicon.ico">
  @yield('title')
  <base href="{{asset('')}}">
  @include('guest.layout.css')

  <script>
    window.Laravel = { csrfToken: '{{ csrf_token() }}' }
    window.webtinh = { host: '{{ url("/") }}/' }
  </script>

</head>
<body>
  @include('guest.layout.menu-mobile')
  <div id="page">
    <!-- Navbar -->

    <nav class="visible-xs">
      <div class="container">
        <div class="row">
            <div class="mm-toggle-wrap">
              <div class="mm-toggle">
                <i class="fa fa-align-justify"></i>
              </div>
          </div>
          {{-- <div class="header-menu-name-mb" style="text-align: center">
            <img src="./images/logo2.png" style="height: 45px">
            <span>CỔNG TTĐT TỈNH HÀ TĨNH</span>
          </div> --}}
      </div>
    </nav>

    @include('guest.layout.header-banner')
    @include('guest.layout.main-menu')
    @yield('content')
    @include('guest.layout.lienketwebsite')
    @include('guest.layout.footer')
  </div>
  <!-- JS -->
  @include('guest.layout.js')
  @yield('js')
</body>
</html>
