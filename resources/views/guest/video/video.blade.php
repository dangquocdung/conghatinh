

@if ($vd != null)

    <div class="clearfix"></div>

    <div class="tieu-de-video" style="text-align: center; text-transform: uppercase">
        <h3>
            {{ $vd->loaivideo->name }} ngày {{ \Carbon\Carbon::parse($vd->ngayphat)->format('d-m-Y') }}
        </h3>
    </div>
    <br>

    <div class="video-player">
        <div class="embed-responsive embed-responsive-16by9">

            {!! $vd->src !!}

        </div>
    </div>
    <br>
    <br>

@endif

<div class="lienquan-header">

    <a href="javascript:void(0);">Thư viện video</a>

</div>




<div class="tat-ca-video"style="margin-top: 20px">

<div class="row">
    <div  class="col-sm-12">
        <div class="col-xs-1">
            <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left vertical-text">
                @foreach($loaivideo as $lv)
                    @if ($lv->id == 1)
                        <li class="active"><a href="#{{$lv->slug}}" data-toggle="tab">{{ $lv->name }}</a></li>
                    @else
                        <li><a href="#{{$lv->slug}}" data-toggle="tab">{{ $lv->name }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="col-xs-11">
            <!-- Tab panes -->
            <div class="tab-content">
                @foreach($loaivideo as $lv)

                        <div class="tab-pane fade in

                        @if ($lv->id == 1)
                                active

                        @endif
                                " id="{{$lv->slug}}">



                                <div class="news-rightbox" style="padding: 2px 10px">
                                    @foreach($lv->video->where('daduyet','1')->sortByDesc('ngayphat')->take(15) as $vd)

                                    <div class="clip col-md-4 col-sm-4 col-xs-6" style="margin-bottom: 20px; padding: 0 20px">



                                        <div class="embed-responsive embed-responsive-16by9">
                                            {!! $vd->src !!}
                                        </div>

                                        <div class="tieu-de" style="text-align: center; padding: 5px 15px; margin-top: 10px">
                                            <a href="loai-tin/thu-vien-video/{{ $vd->id }}">
                                            {{ $vd->loaivideo->name }} ngày {{ \Carbon\Carbon::parse($vd->ngayphat)->format('d-m-Y') }}
                                            </a>
                                        </div>

                                    </div>
                                    @endforeach


                                </div>



                        </div>
                    {{--@else--}}
                        {{--<div class="tab-pane fade in" id="{{$lv->slug}}">--}}

                            {{--<div class="news-rightbox" style="padding: 2px 10px">--}}
                                {{--@foreach($lv->video->sortByDesc('ngayphat')->take(15) as $vd)--}}

                                    {{--<div class="clip col-md-4 col-sm-4 col-xs-6" style="margin-bottom: 20px; padding: 0 20px">--}}

                                        {{--<div class="embed-responsive embed-responsive-16by9">--}}

                                            {{--{!! $vd->src !!}--}}

                                        {{--</div>--}}

                                        {{--<div class="tieu-de" style="text-align: center; padding: 5px 15px; margin-top: 10px">--}}
                                            {{--{{ $vd->loaivideo->name }} ngày {{ \Carbon\Carbon::parse($vd->ngayphat)->format('d-m-Y') }}--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--@endforeach--}}


                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                @endforeach

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>

