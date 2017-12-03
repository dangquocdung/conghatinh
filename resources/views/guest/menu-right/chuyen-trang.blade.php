
<div class="right-box">

    <div class="block4">
        @include('guest.layout.menu-right')
    </div>

    @foreach ($banner as $bn)
        @if ($bn->vitri == 0)
            <div class="box">
                <a href="{{$bn->lienket}}" target="_blank">
                    <img src="{{ $bn->banner}}" alt="{{ $bn->name}}" title="{{ $bn->name}}">
                </a>
            </div>
        @endif
    @endforeach

    <div class="block4">

        <div class="block-header" style="margin-bottom: 0">
            <a href="javascript:void(0);">

                <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Sự kiện</h4>
            </a>

        </div>

        @foreach ($banner as $bn)
            @if ($bn->vitri == 2)
                <div class="box-banner">
                    <a href="{{$bn->lienket}}" target="_blank">
                        <img src="{{ $bn->banner}}" alt="{{ $bn->name}}" title="{{ $bn->name}}" width="100%">
                    </a>
                </div>
            @endif
        @endforeach




    </div>

    <div class="block4">

        <div class="block-header" style="margin-bottom: 0">
            <a href="javascript:void(0);">

                <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Doanh nghiệp</h4>
            </a>

        </div>

        @foreach ($banner as $bn)
            @if ($bn->vitri == 3)
                <div class="box-banner">
                    <a href="{{$bn->lienket}}" target="_blank">
                        <img src="{{ $bn->banner}}" alt="{{ $bn->name}}" title="{{ $bn->name}}" width="100%">
                    </a>
                </div>
            @endif
        @endforeach




    </div>

</div>

        {{--@extends('guest.layout.menu-right')--}}
        {{--@section('them-menu')--}}
            {{--@foreach ($nhomcq as $ncq)--}}
                {{--<li>--}}
                    {{--<div class="link"><i class="fa fa-plus"></i>{{ $ncq->name }}<i class="fa fa-chevron-down"></i></div>--}}
                    {{--@if (count($ncq->coquan) > 0)--}}
                        {{--<ul class="submenu">--}}
                            {{--@foreach($ncq->coquan->sortby('id') as $cq)--}}
                                {{--<li><a href="{{ $cq->lienket }}" target="_blank"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> {{ $cq->name }}</a></li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--@endif--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--@stop--}}














