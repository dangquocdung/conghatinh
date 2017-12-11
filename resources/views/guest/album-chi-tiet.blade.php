@extends('guest.layout.main')
@section('title')
  {{-- <title>{{ $lt->chuyenmuc->name}} >> {{ $lt->name }}</title> --}}
@endsection

@section('content-main')

    <div class="block3">
        <div class="portlet-header">
            <a href="/loai-tin/album-hinh-anh">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Tất cả Album hình ảnh</h4>
            </a>
        </div>


        @include('guest.album-anh.album-chi-tiet')
    </div>

@endsection


@section('content-right')
    @include('guest.menu-right.thong-bao')
@stop





