@php

    $chuyenmuc = \App\ChuyenMuc::where('id', '3')->get();

@endphp

@foreach($chuyenmuc as $cm)

    <div class="row">

        <div class="col-md-12">
            <div class="block3">

                <div class="portlet-header">
                    <a href="chuyen-muc/{{ $cm->slug }}">
                        <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> {{ $cm->name }}</h4>
                    </a>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="row" style="padding-left: 10px; padding-right: 10px">

                                <style>
                                    .fc-center h2{

                                        text-transform: capitalize;
                                        font-size: 1.5em;
                                        font-weight: bold;
                                        padding-top: 5px;

                                    }

                                </style>
                                {!! $calendar->calendar() !!}
                            </div>
                    </div>

                    <div class="col-md-5 col-xs-12">


                        <div class="chuyen-trang" style="padding-top: 10px">
                            <ul>

                                @foreach($cm->loaitin->sortby('thutu') as $lt)

                                    <li>


                                        <div class="news-block">
                                            <a href="/loai-tin/{{ $lt->slug }}">
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $lt->name }}
                                            </a>
                                        </div>

                                    </li>

                                @endforeach

                            </ul>
                        </div>
                    </div>

                    </div>

                </div>

            </div>
        </div>


    </div>

    @if ($cm->banner_id != null)

        <div class="block2">

            @foreach($banner as $bn)
                @if ($bn->id == $cm->banner_id)
                    <a href="{{$bn->lienket}}">
                        <img src="{{$bn->banner}}" alt="{{$bn->name}}" width="100%">
                    </a>
                @endif
            @endforeach
        </div>
    @endif

@endforeach





