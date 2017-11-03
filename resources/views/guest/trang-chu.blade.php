@extends('guest.layout.main')
@section('title')
  <title>Cổng thông tin điện tử tỉnh Hà Tĩnh</title>
@endsection

@section('content')
  <div class="container">
      <div class="row nen-trang">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

              @include('guest.home.tin-noi-bat')
              {{--@include('guest.home.tin-anh')--}}
              {{--<div class="block3">--}}
                  {{--<a href="http://dichvucong.hatinh.gov.vn" target="_blank">--}}
                      {{--<img src="uploads/2017/10/59ee9c1a4637d.png" alt="Dịch vụ công trực tuyến" width="100%">--}}
                  {{--</a>--}}
              {{--</div>--}}
              @include('guest.home.tin-tuc-su-kien')
              @include('guest.home.tin-hoat-dong')
              @include('guest.home.chi-dao-dieu-hanh')
              @include('guest.home.tin-co-so')
              @include('guest.home.van-ban')
              @include('guest.home.chien-luoc')
{{--              @include('guest.home.hoi-dap')--}}
              @include('guest.home.video')
              <div class="block3">
                  <a href="http://dichvucong.hatinh.gov.vn" target="_blank">
                      <img src="uploads/2017/10/59ee9c1a4637d.png" alt="Dịch vụ công trực tuyến" width="100%">
                  </a>
              </div>
              @include('guest.home.to-chuc')


          </div>
          <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            @include('guest.layout.right-box')
          </div>
      </div>
  </div>
@endsection
@section('js')
  <script>
    $(document).ready(function() {

        $('#brand_carousel').owlCarousel({
          autoPlay: 5000,
          items: 4,
          navigation: true,
          pagination: false,
          itemsDesktop: [1199, 4],
          itemsDesktopSmall: [979, 4],
          itemsTablet: [768, 3],
          itemsTabletSmall: false,
          itemsMobile: [479, 2]
        });
        $('#video_carousel').owlCarousel({
          autoPlay: 5000,
          items: 4,
          navigation: true,
          pagination: false,
          itemsDesktop: [1199, 4],
          itemsDesktopSmall: [979, 4],
          itemsTablet: [768, 3],
          itemsTabletSmall: false,
          itemsMobile: [479, 2]
        });
        $('#hinhanh_carousel').owlCarousel({
          autoPlay: 5000,
          items: 4,
          navigation: true,
          pagination: false,
          itemsDesktop: [1199, 4],
          itemsDesktopSmall: [979, 4],
          itemsTablet: [768, 3],
          itemsTabletSmall: false,
          itemsMobile: [479, 2]
        });

        $('[data-toggle="popover"]').popover(); 

    })
  </script>

@endsection
