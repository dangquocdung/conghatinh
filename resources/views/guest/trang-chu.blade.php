@extends('guest.layout.main')
@section('title')
  <title>Cổng thông tin điện tử tỉnh Hà Tĩnh</title>
@endsection

@section('style')
    <link rel="stylesheet" href="/guest/css/fullcalendar.min.css"/>
@endsection


@section('content-main')
    @include('guest.home.tin-noi-bat')

    @include('guest.home.chi-dao-dieu-hanh')
    @include('guest.home.videos')
    @include('guest.home.tin-tuc-su-kien')
    @include('guest.home.albums')
    @include('guest.home.van-ban')
    @include('guest.home.chien-luoc')
    <div class="block2">
        <a href="http://dichvucong.hatinh.gov.vn" target="_blank">
            <img src="uploads/2017/10/59ee9c1a4637d.png" alt="Dịch vụ công trực tuyến" width="100%">
        </a>
    </div>
    @include('guest.home.to-chuc')
@endsection



@section('content-right')

    @include('guest.menu-right.trang-chu')

@stop

@section('js')

    <script src="/guest/js/moment.min.js"></script>

@endsection
