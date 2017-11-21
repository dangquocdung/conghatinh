@extends('guest.layout.main')
@section('title')
  {{-- <title>{{ $lt->chuyenmuc->name}} >> {{ $lt->name }}</title> --}}
@endsection

@section('content-main')

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

    @if (count($albums) > 1)

        <div class="text-center">

        {{ $albums->render() }}

        </div>

    @endif

@endsection





