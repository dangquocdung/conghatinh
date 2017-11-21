@extends('guest.layout.main')
@section('title')
  {{-- <title>{{ $lt->chuyenmuc->name}} >> {{ $lt->name }}</title> --}}
@endsection

@section('content-main')
    @if (!empty($video))
        <div class="block3">
            {{--<div class="breadcrumb">--}}
                {{--<a class="breadcrumb-item" href="/"><i class="glyphicon glyphicon-home"></i></a>--}}
                {{--<a class="breadcrumb-item" href="/van-ban/van-ban-qppl">Tất cả Video</a>--}}
                {{--<span class="breadcrumb-item active">Video</span>--}}
            {{--</div>--}}


            <div class="portlet-header" style="padding-left: 10px">

                <a href="javascript:void (0);">
                    <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Tất cả Video</h4>
                </a>



            </div>






                @include('guest.video.video')








        </div>
        @endif

    @include('guest.video.bottom-box')


@endsection

@section('content-right')
    @include('guest.video.right-box')
@stop





