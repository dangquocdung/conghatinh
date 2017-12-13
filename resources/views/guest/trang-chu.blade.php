@extends('guest.layout.main')
@section('title')
  <title>Cổng thông tin điện tử tỉnh Hà Tĩnh</title>
@endsection

@section('style')
    <link rel="stylesheet" href="/guest/css/fullcalendar.min.css"/>
@endsection


@section('content-main')
    @include('guest.home.tin-noi-bat')
    @include('guest.home.tin-tuc-su-kien')
    @include('guest.home.videos')
    @include('guest.home.chi-dao-dieu-hanh')
    @include('guest.home.albums')
    @include('guest.home.van-ban')
    <div class="clearfix"></div>
    @include('guest.home.chien-luoc')
    <div class="clearfix"></div>
    @include('guest.home.to-chuc')
@endsection



@section('content-right')

    @include('guest.menu-right.trang-chu')

@stop

@section('js')

    <script src="/guest/js/moment.min.js"></script>

@endsection
