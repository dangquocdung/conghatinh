@extends('guest.layout.main')
@section('title')
  <title>Trang chủ</title>
@endsection
@section('content')
  <div class="container">
      <div class="row">
          <div class=".col-lg-9 col-md-9 col-sm-12 col-xs-12 portlet-layout layout-left margin-mobile">
              <div class="col-md-12">
                  <div class="portlet-content">
                    @include('guest.home.tinnoibat')
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      @include('guest.home.tintuc-slider')
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      <img src="http://docs.ttdt.dsp.vn/images/banner/dienDanDauTu_1501663926644.jpg" width="100%">
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      @include('guest.home.tintucsukien')
                  </div>
              </div>
              {{-- Theo dong su kien --}}
              <div class="col-md-12">
                  <div class="portlet-content">
                      @include('guest.home.theodongsukien')
                  </div>
              </div>

              <div class="col-md-12">
                  <div class="portlet-content">
                      @include('guest.home.thongtinchidaodieuhanh')
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      <img src="http://docs.ttdt.dsp.vn/images/banner/BannerAPEC2017_1498612201658.png" width="100%">
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      @include('guest.home.vanbanchidaodieuhanh')
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      <img src="http://docs.ttdt.dsp.vn/images/banner/hethongdichvucongtructuyen_1476955571482.png" width="100%">
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      @include('guest.home.tinsonganh')
                      @include('guest.home.tinhuyenthi')
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      @include('guest.home.video')
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      @include('guest.home.hoidap')
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      @include('guest.home.thuvienhinhanh')
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      @include('guest.home.baocaoktxh')
                      @include('guest.home.tinhhinhanqp')
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      <img src="http://docs.ttdt.dsp.vn/images/banner/tiepnhanvaxul_1476954197000.png" width="100%">
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      @include('guest.home.websitecacdonvi')
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      <img src="http://docs.ttdt.dsp.vn/images/banner/Banner-HTKSTTHC_1477973996335.png" width="100%">
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
                      @include('guest.home.websitenganhdoc')
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="portlet-content">
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
