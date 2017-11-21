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

            <a href="javascript:void (0);">
                <h4 class="portlet-header-title no-pd-top">Tất cả Album</h4>
            </a>

        </div>

        @include('guest.hinh-anh.hinh-anh')
    </div>
@endsection

@section('content-right')
    @include('guest.hinh-anh.right-box')
@stop





