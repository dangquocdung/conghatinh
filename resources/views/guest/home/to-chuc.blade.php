<style>
    /*!
 * bootstrap-vertical-tabs - v1.1.0
 * https://dbtek.github.io/bootstrap-vertical-tabs
 * 2014-06-06
 * Copyright (c) 2014 Ä°smail Demirbilek
 * License: MIT
 */
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
<div class="block3">

    <div class="portlet-header">
        <img src="/images/background/lotus.ico">
        <a href="javascript:void(0);">
            <h4 class="portlet-header-title no-pd-top">Liên kết tổ chức</h4>
        </a>
    </div>

    <div style="min-height:300px;">

            <div class="col-xs-1">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left vertical-text">
                    @foreach($nhomcq as $ncq)
                        @if ($ncq->id == 1)
                            <li class="active">
                                <a href="#{{$ncq->slug}}" data-toggle="tab">
                                    {{$ncq->name}}
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="#{{$ncq->slug}}" data-toggle="tab">
                                    {{$ncq->name}}
                                </a>
                            </li>
                        @endif

                    @endforeach
                </ul>
            </div>
            <div class="col-xs-11">
                <!-- Tab panes -->
                <div class="tab-content">
                    @foreach($nhomcq as $ncq)
                        <div class="to-chuc tab-pane
                            @if ($ncq->id == 1)
                                active " id="{{$ncq->slug}}">

                            @else
                                " id="{{$ncq->slug}}">

                            @endif

                            <ul>
                            @foreach($ncq->coquan as $cq)
                                <li class="col-md-4 col-xs-6">
                                <a href="{{ $cq->lienket }}" target="_blank">
                                    <div class="news-block"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> &nbsp;{{ $cq->name }}</div>
                                </a>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    @endforeach
            </div>
            </div>

    </div>
</div>
{{--<style>--}}

    {{--.nav li {--}}
         {{--border-right: none !important;--}}
    {{--}--}}
    {{--.panel.with-nav-tabs .panel-heading{--}}
        {{--padding: 5px 5px 0 5px;--}}
    {{--}--}}
    {{--.panel.with-nav-tabs .nav-tabs{--}}
        {{--border-bottom: none;--}}
    {{--}--}}
    {{--.panel.with-nav-tabs .nav-justified{--}}
        {{--margin-bottom: -1px;--}}
    {{--}--}}
    {{--/********************************************************************/--}}
    {{--/*** PANEL DEFAULT ***/--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > li > a,--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > li > a:hover,--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > li > a:focus {--}}
        {{--color: #777;--}}
        {{--border-radius: 4px 4px 0 0;--}}
    {{--}--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > .open > a,--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > li > a:hover,--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > li > a:focus {--}}
        {{--color: #777;--}}
        {{--background-color: #ddd;--}}
        {{--border-color: transparent;--}}
    {{--}--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > li.active > a,--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {--}}
        {{--color: #555;--}}
        {{--background-color: #fff;--}}
        {{--border-color: #ddd;--}}
        {{--border-bottom-color: transparent;--}}
    {{--}--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {--}}
        {{--background-color: #f5f5f5;--}}
        {{--border-color: #ddd;--}}
    {{--}--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {--}}
        {{--color: #777;--}}
    {{--}--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {--}}
        {{--background-color: #ddd;--}}
    {{--}--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,--}}
    {{--.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {--}}
        {{--color: #fff;--}}
        {{--background-color: #555;--}}
    {{--}--}}
{{--</style>--}}

{{--<div class="panel with-nav-tabs panel-default">--}}
    {{--<div class="panel-heading">--}}
        {{--<ul class="nav nav-tabs">--}}
            {{--@foreach($nhomcq as $ncq)--}}
                {{--@if ($ncq->id == 1)--}}
                    {{--<li class="active">--}}
                        {{--<a href="#{{$ncq->slug}}" data-toggle="tab">--}}
                            {{--{{$ncq->name}}--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--@else--}}
                    {{--<li>--}}
                        {{--<a href="#{{$ncq->slug}}" data-toggle="tab">--}}
                            {{--{{$ncq->name}}--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--@endif--}}

            {{--@endforeach--}}


        {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="panel-body">--}}
        {{--<div class="tab-content">--}}
            {{--@foreach($nhomcq as $ncq)--}}
                {{--<div class="to-chuc tab-pane fade--}}
                    {{--@if ($ncq->id == 1)--}}
                        {{--in active " id="{{$ncq->slug}}">--}}

                    {{--@else--}}
                            {{--" id="{{$ncq->slug}}">--}}

                    {{--@endif--}}

                    {{--<ul>--}}
                        {{--@foreach($ncq->coquan as $cq)--}}
                            {{--<li class="col-md-4 col-xs-6">--}}
                                {{--<a href="{{ $cq->lienket }}" target="_blank">--}}
                                    {{--<div class="news-block"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> &nbsp;{{ $cq->name }}</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

