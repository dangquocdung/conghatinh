<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="@yield('desc')">
  <meta name=”keywords” content="ha-tinh, hà tĩnh, cong-thong-tin-dien-tu-ha-tinh, Cổng thông tin điện tử Hà Tĩnh">
  <meta name="author" content="dang-quoc-dung, Đặng Quốc Dũng">
  <meta itemprop="name" content="@yield('title')">
  <meta itemprop="description" content="@yield('desc')">
  <meta itemprop="image" content="/uploads/hinh-anh/2017/12/banner-webtinh-edit_vzl.jpg">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="icon" href="./images/favicon.ico">
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

    @include('guest.layout.header-banner')

    @include('guest.layout.menu-overlay')



    <div class="container nen-trang">

        <div class="chao-mung">

            <marquee class="hot-tip" behavior="scroll" direction="left" scrollamount="3">
                <a href="javascript:void(0);" style="color:red;">Thông báo: &nbsp;</a>
                <a href="http://baochinhphu.vn/Dong-luc-tang-truong/489.vgp" target="_blank">Động lực tăng trưởng</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                <a href="http://baochinhphu.vn/Dua-Nghi-quyet-Dai-hoi-XII-cua-Dang-vao-cuoc-song/411.vgp" target="_blank">Đưa Nghị quyết Đại hội XII của Đảng vào cuộc sống</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                <a href="http://baochinhphu.vn/Phat-quang-rung-thu-tuc/485.vgp" target="_blank">Phát quang 'rừng' thủ tục</a>
            </marquee>


            {{--<a href="{{$banner->where('vitri','8')->last()->lienket}}" target="_blank">--}}
                {{--<img src="{{ $banner->where('vitri','8')->last()->banner}}" alt="{{ $banner->where('vitri','8')->last()->name}}" title="{{ $banner->where('vitri','8')->last()->name}}" width="100%">--}}
            {{--</a>--}}

        </div>



        <div class="row row-offcanvas row-offcanvas-right">

            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 main-page">
              @yield('content-main')
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 sidebar-offcanvas" id="sidebar" style="padding-left: 5px">
              @include('guest.menu-right.trang-chu')
            </div>

          </div>
        </div>

        <div class="chao-mung">

          <marquee class="hot-tip" behavior="scroll" direction="left" scrollamount="3">
              <a href="http://baochinhphu.vn/Dong-luc-tang-truong/489.vgp" target="_blank">Động lực tăng trưởng</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
              <a href="http://baochinhphu.vn/Dua-Nghi-quyet-Dai-hoi-XII-cua-Dang-vao-cuoc-song/411.vgp" target="_blank">Đưa Nghị quyết Đại hội XII của Đảng vào cuộc sống</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
              <a href="http://baochinhphu.vn/Phat-quang-rung-thu-tuc/485.vgp" target="_blank">Phát quang 'rừng' thủ tục</a>
          </marquee>


          {{--<a href="{{$banner->where('vitri','8')->last()->lienket}}" target="_blank">--}}
          {{--<img src="{{ $banner->where('vitri','8')->last()->banner}}" alt="{{ $banner->where('vitri','8')->last()->name}}" title="{{ $banner->where('vitri','8')->last()->name}}" width="100%">--}}
          {{--</a>--}}

        </div>

{{--    @yield('content')--}}
{{--    @include('guest.layout.lienketwebsite')--}}
    @include('guest.layout.footer')
  </div>
  <!-- JS -->
{{--  @include('guest.layout.js')--}}

  @yield('js')
  @yield('script')

<script>

    $(document).ready(function () {

        $('.main-page').css('min-height',$('#sidebar').outerHeight());

  //      console.log($('#sidebar').outerHeight());

    });


</script>

</body>
</html>
