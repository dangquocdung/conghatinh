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
  @include('guest.layout.js')

</head>
<body>
{{--  @include('guest.layout.menu-mobile')--}}
  <div id="page">


    @include('guest.layout.header-banner')
    @include('guest.layout.main-menu')
    @yield('content')
{{--    @include('guest.layout.lienketwebsite')--}}
    @include('guest.layout.footer')
  </div>
  <!-- JS -->
{{--  @include('guest.layout.js')--}}
  @yield('js')

</body>
</html>
