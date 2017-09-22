@extends('guest.layout.main')
@section('title')
  <title>Trang chủ</title>
@endsection
@section('header-menu-item')
  active
@endsection
@section('content')
  <div class="container">
      <div class="row">
          <div class=".col-lg-9 col-md-9 col-sm-12 col-xs-12 portlet-layout layout-left margin-mobile">

                @include('guest.home.tinnoibat')
                {{-- <a href="http://dichvucong.hatinh.gov.vn" target="_blank">
                  <img src="http://docs.ttdt.dsp.vn/images/banner/hethongdichvucongtructuyen_1476955571482.png" width="100%" style="margin-bottom: 15px;">
                </a> --}}
                <div class="col-md-12">
                  <div class="row">

                  @include('guest.home.tintuc-slider')

                  
                  @include('guest.home.tintucsukien')

                    {{-- Theo dong su kien --}}
                    {{-- <div class="col-md-12">
                            @include('guest.home.theodongsukien')
                    </div> --}}

                  @include('guest.home.tinhoatdong')


                  @include('guest.home.thongtinchidaodieuhanh')
                  <img src="http://placehold.it/800x150" width="100%" style="margin-bottom: 15px;">
                  @include('guest.home.vanbanchidaodieuhanh')
                  <img src="http://placehold.it/800x150" width="100%" style="margin-bottom: 15px;">
                  @include('guest.home.tinsonganh')
                  @include('guest.home.tinhuyenthi')
                  @include('guest.home.video')
                  @include('guest.home.hoidap')
                  @include('guest.home.thuvienhinhanh')
                  @include('guest.home.baocaoktxh')
                  @include('guest.home.tinhhinhanqp')
                  <img src="http://placehold.it/800x150" width="100%" style="margin-bottom: 15px;">
                  @include('guest.home.websitecacdonvi')
                  <img src="http://placehold.it/800x150" width="100%" style="margin-bottom: 15px;">
                  @include('guest.home.websitenganhdoc')
                  <img src="http://placehold.it/800x150" width="100%" style="margin-bottom: 15px;">
                  @include('guest.home.websitetochuc')
                  </div>
                </div>
      </div>
      @include('guest.layout.right-box')
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
    })
  </script>
@endsection
