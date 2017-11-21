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
  @yield(('style'))

  <script>
    window.Laravel = { csrfToken: '{{ csrf_token() }}' }
    window.webtinh = { host: '{{ url("/") }}/' }
  </script>
  @include('guest.layout.js')

</head>
<body>
<script>
    $(function() {
        FastClick.attach(document.body);
    });
</script>
{{--  @include('guest.layout.menu-mobile')--}}
  <div id="page" id="app">


{{--    @include('guest.layout.header-banner')--}}

    <div class="container">


      <div id="site-wrapper">

        <div id="site-canvas">

          <div id="site-menu">
            <h2>My Menu</h2>
            <p class="lead">Put any HTML you want here.
              Style it however you want.
            <ul>
              <li>Free to scroll up and down</li>
              <li>But not left and write</li>
            </ul>
          </div>

          <a href="#" class="toggle-nav btn btn-lg btn-success pull-right" id="big-sexy"><i class="fa fa-bars"></i> Toggle Nav</a>
          <!-- #site-canvas -->
        </div>
        <!-- #site-wrapper> -->
      </div>




    </div>

    @include('guest.layout.footer')


  </div>

  @yield('script')

</body>
</html>
