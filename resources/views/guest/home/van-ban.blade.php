<style>
    .tabs-left, .tabs-right {
        border-bottom: none;
        padding-top: 2px;
    }
    .tabs-left {
        border-right: 1px solid #ddd;
    }
    .tabs-right {
        border-left: 1px solid #ddd;
    }
    .tabs-left>li, .tabs-right>li {
        float: none;
        margin-bottom: 2px;
    }
    .tabs-left>li {
        margin-right: -1px;
    }
    .tabs-right>li {
        margin-left: -1px;
    }
    .tabs-left>li.active>a,
    .tabs-left>li.active>a:hover,
    .tabs-left>li.active>a:focus {
        border-bottom-color: #ddd;
        border-right-color: transparent;
    }

    .tabs-right>li.active>a,
    .tabs-right>li.active>a:hover,
    .tabs-right>li.active>a:focus {
        border-bottom: 1px solid #ddd;
        border-left-color: transparent;
    }
    .tabs-left>li>a {
        border-radius: 4px 0 0 4px;
        margin-right: 0;
        display:block;
    }
    .tabs-right>li>a {
        border-radius: 0 4px 4px 0;
        margin-right: 0;
    }
    .vertical-text {
        margin-top:50px;
        border: none;
        position: relative;
    }
    .vertical-text>li {
        height: 20px;
        width: 120px;
        margin-bottom: 100px;
    }
    .vertical-text>li>a {
        border-bottom: 1px solid #ddd;
        border-right-color: transparent;
        text-align: center;
        border-radius: 4px 4px 0px 0px;
    }
    .vertical-text>li.active>a,
    .vertical-text>li.active>a:hover,
    .vertical-text>li.active>a:focus {
        border-bottom-color: transparent;
        border-right-color: #ddd;
        border-left-color: #ddd;
    }
    .vertical-text.tabs-left {
        left: -50px;
    }
    .vertical-text.tabs-right {
        right: -50px;
    }
    .vertical-text.tabs-right>li {
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    .vertical-text.tabs-left>li {
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }
</style>

@php

    $cm = $chuyenmuc->where('id','4')->first();

@endphp


<div class="block3">

    <div class="portlet-header">
        <img src="/images/background/lotus.ico">
        <a href="{{ route('van-ban') }}">
            <h4 class="portlet-header-title no-pd-top">Văn bản QPPL</h4>
        </a>
    </div>

    <div style="min-height:300px;">

        <div class="col-xs-1">
            <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left vertical-text">
                @foreach($cm->loaitin as $lvb)
                    @if ($lvb->id == 9)
                        <li class="active">
                            <a href="#{{$lvb->slug}}" data-toggle="tab">
                                {{$lvb->name}}
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="#{{$lvb->slug}}" data-toggle="tab">
                                {{$lvb->name}}
                            </a>
                        </li>
                    @endif

                @endforeach
            </ul>
        </div>
        <div class="col-xs-11">
            <!-- Tab panes -->
            <div class="tab-content">
                @foreach($cm->loaitin as $lvb)
                    <div class="to-chuc tab-pane
                            @if ($lvb->id == 9)
                            active " id="{{$lvb->slug}}">

                        @else
                            " id="{{$lvb->slug}}">

                        @endif

                        <ul>
                            @foreach($lvb->vanban->where('daduyet','1')->sortByDesc('id')->take(5) as $vb)
                                <li style="margin-top: 0; border-bottom: none;">

                                    <span class="label label-danger">Mới</span>

                                    <a href="{{ route('chi-tiet-van-ban',[$lvb->slug,$vb->id]) }}" class="news-title bold">
                                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                        Số: {{ $vb->kihieuvb }}
                                    </a>

                                    <small><em>(Ngày ban hành: {{\Carbon\Carbon::parse($vb->ngaybanhanh)->format('d-m-Y')}})</em></small>



                                    @foreach($vb->tepvanban as $tvb)
                                        <a href="{{ $tvb->path }}" target="_blank">
                                            <img src="/images/pdf-file-512.png" alt="" width="30px" style="float: right" title="{{ $vb->kihieuvb }}">
                                        </a>
                                    @endforeach

                                    <div class="gioithieu">
                                        {{$vb->trichyeu}}
                                    </div>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
