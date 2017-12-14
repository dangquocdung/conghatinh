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

    <div class="tab-doc">

        <div class="col-xs-1 tieu-de">
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
        <div class="col-xs-11 noi-dung">
            <!-- Tab panes -->
            <div class="tab-content">
                @foreach($cm->loaitin as $lvb)
                    <div class="vanban tab-pane
                            @if ($lvb->id == 9)
                            active " id="{{$lvb->slug}}">

                        @else
                            " id="{{$lvb->slug}}">

                        @endif

                        <ul>
                            {{--@if ($lvb->id == 9)--}}

                                {{--<div class="embed-responsive embed-responsive-16by9">--}}
                                    {{--<iframe class="embed-responsive-item" src="http://congbao.hatinh.gov.vn/" allowfullscreen></iframe>--}}
                                {{--</div>--}}

                            {{--@else--}}
                                {{--<div class="embed-responsive embed-responsive-16by9">--}}
                                    {{--<iframe class="embed-responsive-item" src="http://congbao.chinhphu.vn/" allowfullscreen></iframe>--}}
                                {{--</div>--}}

                            {{--@endif--}}

                            @foreach($lvb->vanban->where('daduyet','1')->sortByDesc('id')->take(5) as $vb)
                                <li>

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
