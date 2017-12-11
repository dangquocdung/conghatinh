@extends('guest.layout.main')
@section('title')
  {{-- <title>{{ $lt->chuyenmuc->name}} >> {{ $lt->name }}</title> --}}
@endsection

@section('content-main')
    <div class="block3">

        <div class="portlet-header">

            <img src="/images/background/lotus.ico">
            <a href="{{ route('van-ban') }}">
                <h4 class="portlet-header-title no-pd-top"> Tất cả Văn Bản </h4>
            </a>


            @if (count($lt) == 1)

                <a href="javascript:void(0);">
                    <h4 class="portlet-header-title no-pd-top">/ {{ $lt->name }}</h4>
                </a>

            @endif

        </div>


        <div id="app" style="padding: 5px;">

            @if (count($lt) == 1)

                <van-ban-viewer source="/api/van-ban-all/{{$lt->id}}" title="Danh sách {{$lt->name}}" />
            @else
                <van-ban-viewer source="/api/van-ban-all" title="Tất cả văn bản" />

            @endif



        </div>

        @include('guest.layout.tien-ich')

    </div>
@endsection

@section('content-right')
    @include('guest.menu-right.thong-bao')
@stop

@section('js')
    <script type="text/javascript" src="{{mix('/js/guest.js')}}"></script>
@stop