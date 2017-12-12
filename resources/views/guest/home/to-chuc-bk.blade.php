@foreach($nhomcq as $ncq)
    <div class="block3">

        <div class="portlet-header" data-toggle="collapse" href="#{{$ncq->slug}}">
            <img src="/images/background/lotus.ico">
            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top">{{ $ncq->name }}</h4>
            </a>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">

                @if ($ncq->id<3)

                    <div class="chuyen-trang panel-collapse collapse in" id="{{$ncq->slug}}">
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
                @else
                    <div class="chuyen-trang panel-collapse collapse" id="{{$ncq->slug}}">
                        <ul>
                            @foreach($ncq->coquan as $cq)
                                <li class="col-md-3 col-xs-4">

                                    <a href="{{ $cq->lienket }}" target="_blank">

                                        <div class="news-block"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> &nbsp;{{ $cq->name }}</div>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                @endif



            </div>
        </div>
    </div>
@endforeach





