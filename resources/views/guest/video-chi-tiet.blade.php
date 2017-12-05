@extends('guest.layout.main')
@section('title')
  {{-- <title>{{ $lt->chuyenmuc->name}} >> {{ $lt->name }}</title> --}}
@endsection

@section('content-main')
    @if (!empty($video))
        <div class="block3">
            <div class="portlet-header">
                <img src="/images/background/lotus.ico" alt="">
                <a href="javascript:void (0);">
                    <h4 class="portlet-header-title no-pd-top"> {{ $video->loaivideo->name }} ngày {{ \Carbon\Carbon::parse($video->ngayphat)->format('d-m-Y') }}</h4>
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





