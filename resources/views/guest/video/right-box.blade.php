<div class="col-md-10">
    <div class="van-ban">
        <div class="block3">
            {{--<div class="breadcrumb">--}}
            {{--<a class="breadcrumb-item" href="/"><i class="glyphicon glyphicon-home"></i></a>--}}
            {{--<a class="breadcrumb-item" href="/van-ban/van-ban-qppl">Tất cả Video</a>--}}
            {{--<span class="breadcrumb-item active">Video</span>--}}
            {{--</div>--}}


            <div class="portlet-header" style="padding-left: 10px">

                <a href="/">
                    <h4 class="portlet-header-title no-pd-top"><i class="fa fa-university" aria-hidden="true"></i> / </h4>
                </a>

                <a href="javascript:void (0);">
                    <h4 class="portlet-header-title no-pd-top">Tất cả Video</h4>
                </a>



            </div>





                <div class="tat-ca-video"style="margin-top: 70px">

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

                                                        <div class="video-thumbnail">
                                                            <a href="/loai-tin/thu-vien-video/{{ $vd->id }}">
                                                                <img data-u="image" src="{{ $vd->loaivideo->cover_image }}" title="{{ $vd->name }}" width="100%" />
                                                            </a>
                                                        </div>

                                                        <div class="tieu-de" style="text-align: center; margin-top: 5px">
                                                            <a href="loai-tin/thu-vien-video/{{ $vd->id }}">
                                                                {{ $vd->loaivideo->name }} ngày {{ \Carbon\Carbon::parse($vd->ngayphat)->format('d-m-Y') }}
                                                            </a>
                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="col-md-2">

    <div class="right-box">
        <div class="block4">
            <div class="block-header">
                <a href="">
                    <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Video nổi bật</h4>
                </a>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                @foreach($vd_noibat->sortByDesc('ngayphat') as $vd)
                    <div class="video-thumbnail">
                        <a href="/loai-tin/thu-vien-video/{{ $vd->id }}">
                            <img data-u="image" src="{{ $vd->loaivideo->cover_image }}" title="{{ $vd->name }}" width="100%" />
                        </a>

                    </div>

                    <div class="tieu-de" style="text-align: center; margin-top: 5px">
                        <a href="loai-tin/thu-vien-video/{{ $vd->id }}">
                            {{ $vd->loaivideo->name }} ngày {{ \Carbon\Carbon::parse($vd->ngayphat)->format('d-m-Y') }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>








