<div class="right-box">

    <div class="block4">

        <div class="block-header" style="margin-bottom: 0">
            <a href="">
                <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Lời chào mừng</h4>
            </a>

        </div>

        <img src="http://mediahatinh24h.tinmoi.vn/2016/04/hatinh-388.jpg" alt="" width="100%">


    </div>

    <div class="block4">

        <div class="block-header" style="margin-bottom: 0">
            <a href="javascript:void(0);">

                <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Bản đồ địa giới hành chính</h4>
            </a>

        </div>
        <a href="http://gis.chinhphu.vn/?r=ytZEOqw8fEiSQeRsfea4w" target="_blank">

            <img src="/images/bandohatinh.gif" alt="Bản đồ Hà Tĩnh" title="Bản đồ Hà Tĩnh" width="100%">
        </a>


    </div>

    <div class="block4">

        <div class="block-header" style="margin-bottom: 5px; z-index: 999">
            <a href="{{ route('get-lich-lam-viec') }}">

                <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Lịch làm việc</h4>
            </a>

        </div>

        <style>
            .fc-toolbar{
                display: none;
            }
        </style>

        <div class="lich" style="padding: 5px">


            {!! $calendar->calendar() !!}


        </div>


    </div>


    @php

        $chuyenmuc = \App\ChuyenMuc::whereIn('id',['1','3'])->orderby('thutu','asc')->get();

    @endphp




    @foreach($chuyenmuc as $cm)


        <div class="block4">

            <div class="block-header">
                <a href="/chuyen-muc/{{ $cm->slug }}" style="text-decoration: none">
                    <h4><img src="/images/background/lotus.ico" alt="" width="26px"> {{ $cm->name }}</h4>
                </a>

            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">

                    <div class="news-rightbox">
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


    @endforeach










    {{--    @include('guest.chi-tiet.right-box')--}}

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
