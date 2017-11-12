@extends('guest.layout.main')
@section('title')
  {{-- <title>{{ $lt->chuyenmuc->name}} >> {{ $lt->name }}</title> --}}
@endsection

@section('content')
  <div class="container">
    <div class="row nen-trang">


        @if (count($albums) > 1)
            <div class="col-lg-8 col-md-8 col-xs-12">
                @else
            <div class="col-md-12">

        @endif

            <div class="block3">
                <div class="portlet-header" style="padding-left: 10px">
                    <a href="/">
                        <h4 class="portlet-header-title no-pd-top"><i class="fa fa-university" aria-hidden="true"></i> / </h4>
                    </a>
                    <a href="/loai-tin/album-hinh-anh">
                        <h4 class="portlet-header-title no-pd-top">Tất cả Album hình ảnh</h4>
                    </a>
                </div>


                @include('guest.album-anh.album-anh')
            </div>
        </div>

        @if (count($albums) > 1)
            <div class="col-lg-4 col-md-4 hidden-xs">
                @include('guest.album-anh.right-box')
            </div>
        @endif
    </div>
  </div>
@endsection





