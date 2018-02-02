@extends('guest.layout.main')
@section('title')
    Đối thoại trực tuyến
@endsection

@section('content-main')
    <div class="block3">

        <div class="portlet-header">
            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Đối thoại trực tuyến</h4>
            </a>
        </div>


        <div class="col-md-12" style="padding: 5px">

        </div>


        {{--<div id="app" style="padding: 5px;">--}}
            {{--<nguoi-phat-ngon source="/api/nguoi-phat-ngon" title="Danh sách" />--}}
        {{--</div>--}}

    </div>
@endsection


@section('content-right')
    @include('guest.menu-right.thong-bao')
@stop




