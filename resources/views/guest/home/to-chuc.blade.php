<div class="box box-default">
    <div class="box-header with-border">
        <img src="/images/background/lotus.ico" width="30px">
        <h4 class="box-title"> &nbsp;Liên kết tổ chức</h4>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="tab-doc">

            <div class="col-xs-1 tieu-de">
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
            <div class="col-xs-11 noi-dung">
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
    <!-- /.box-body -->
    <div class="box-footer">
        <div class="pull-right">
            <a href="">Xem tiếp...</a>
        </div>

    </div>
</div>

<div class="clear-fix"></div>


<div class="block3">

    <div class="portlet-header">
        <img src="/images/background/lotus.ico">
        <a href="javascript:void(0);">
            <h4 class="portlet-header-title no-pd-top">Liên kết tổ chức</h4>
        </a>
    </div>

    <div class="tab-doc">

            <div class="col-xs-1 tieu-de">
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
            <div class="col-xs-11 noi-dung">
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

