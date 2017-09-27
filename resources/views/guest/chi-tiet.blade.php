@extends('guest.layout.main')
@section('title')
  <title>Chi tiết tin</title>
@endsection
@section('header-menu-item')
  active
@endsection
@section('content')
  <div class="container">
    <div class="row nen-trang">
{{--      @include('guest.chi-tiet.tin-noi-bat')--}}
      @include('guest.chi-tiet.chi-tiet')
      @include('guest.chi-tiet.tin-moi-nhat')
    </div>
  </div>
@endsection

