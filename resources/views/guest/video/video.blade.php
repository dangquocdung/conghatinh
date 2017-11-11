

<div class="clearfix"></div>

<div class="video-player">
    <div class="embed-responsive embed-responsive-16by9">

        {!! $vd->src !!}

    </div>
</div>




<div class="tat-ca-video"style="margin-top: 30px">

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
                    @if ($lv->id == 1)
                        <div class="tab-pane active" id="{{$lv->slug}}">



                                <div class="news-rightbox" style="padding: 2px 10px">
                                    @foreach($lv->video->sortByDesc('id')->take(15) as $vd)

                                    <div class="clip col-md-4 col-sm-4 col-xs-6" style="margin-bottom: 20px; padding: 0 20px">

                                        <div class="embed-responsive embed-responsive-16by9">

                                            {!! $vd->src !!}

                                        </div>

                                        <div class="tieu-de" style="text-align: center; padding: 5px 15px; margin-top: 10px">
                                            {{ $vd->name }}
                                        </div>

                                    </div>
                                    @endforeach


                                </div>



                        </div>
                    @else
                        <div class="tab-pane" id="{{$lv->slug}}">{{ $lv->name }}</div>
                    @endif
                @endforeach

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>

