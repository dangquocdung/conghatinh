@extends('guest.layout.main')
@section('title')
  <title>Cổng thông tin điện tử tỉnh Hà Tĩnh</title>
@endsection

@section('style')
    <link rel="stylesheet" href="/guest/css/fullcalendar.min.css"/>
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

              @include('guest.home.chi-dao-dieu-hanh')






              @include('guest.home.tin-tuc-su-kien')

              @include('guest.home.videos')


{{--              @include('guest.home.tin-hoat-dong')--}}

{{--              @include('guest.home.tin-co-so')--}}
              @include('guest.home.van-ban')

              @include('guest.home.albums')
              @include('guest.home.chien-luoc')
{{--              @include('guest.home.hoi-dap')--}}
{{--              @include('guest.home.video')--}}
              <div class="block2">
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

    <script src="/guest/js/moment.min.js"></script>
    <script src="/guest/js/fullcalendar.min.js"></script>
    <script src="/guest/js/vi.js"></script>

    {!! $calendar->script() !!}

@endsection
