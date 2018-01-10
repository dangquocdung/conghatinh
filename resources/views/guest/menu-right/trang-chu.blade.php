<div class="clearfix"></div>
<div class="right-box">

    {{--    @include(('guest.menu-right.tim-kiem'))--}}

    {{--    @include(('guest.menu-right.calendar'))--}}

    <div class="block4">



            @include(('guest.menu-right.scrollingtext'))


    </div>








    {{--@include('guest.layout.menu-right')--}}

    <div class="block4">

        <div id="block-header-bd" class="block-header" style="margin-bottom: 0" data-toggle="collapse" href="#ban-do-dia-gioi" >

            <h4>
                <img src="/images/background/lotus.ico" alt="" width="26px"> Bản đồ địa giới

                <i id="menu-bd" class="fa fa-chevron-down" style="position: absolute; top: 5px; right:12px;left: auto"></i>
            </h4>


        </div>

        <div id="ban-do-dia-gioi" class="panel-collapse collapse in">
            <a href="http://gis.chinhphu.vn/?r=ytZEOqw8fEiSQeRsfea4w" target="_blank">

                <img src="/images/ban-do.jpg" alt="Bản đồ Hà Tĩnh" title="Bản đồ Hà Tĩnh" width="100%">
            </a>
        </div>

        <script>

            $(document).ready(function () {
                $('#block-header-bd').click(function () {
                    $("#menu-bd").toggleClass('rotated')
                })
            })
        </script>


    </div>


    @if (strlen(Setting::get('video_livestream')) > 50 )
        <div class="block4" id="live-stream" style="border-radius: 5px">
            <div class="embed-responsive embed-responsive-16by9">
                {!! Setting::get('video_livestream') !!}
            </div>
        </div>
    @endif


    <div class="right_1">

        @foreach($chuyenmuc as $cm)
            @if (count($cm->loaitin) == 0)
                <div class="right-item">

                    @if (!empty($cm->path))
                        <a href="{{ $cm->path }}" class="icon" title="">
                            @else
                        <a href="/vi/{{ $cm->slug }}" class="icon" title="">
                            @endif
                        {{--<img border="0" alt="" src="/images/pcthamnhung.png">--}}
                        <i class="fa {{$cm->icon}} fa-2x" aria-hidden="true"></i>

                        <span class="nav-text">{{ $cm->name }} </span>
                    </a>
                </div>
            @endif
        @endforeach


    </div>

    {{--<div class="right_1">--}}

        {{--@foreach($phimtat as $pt)--}}
            {{--<div class="right-item">--}}
                {{--<a href="{{ $pt->link }}" class="icon" title="">--}}
                    {{--<img border="0" alt="" src="/images/pcthamnhung.png">--}}
                    {{--<i class="fa {{$pt->icon}} fa-2x" aria-hidden="true"></i>--}}

                    {{--<span class="nav-text">{{ $pt->name }} </span>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--@endforeach--}}


    {{--</div>--}}




    <div class="block4">

        <div class="block-header" style="margin-bottom: 0">


            <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Liên kết</h4>


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


            <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Sự kiện</h4>


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

    <div class="block4">

        <div class="block-header" style="margin-bottom: 0">


            <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Doanh nghiệp</h4>


        </div>

        @foreach ($banner as $bn)
            @if ($bn->vitri == 4)
                <div class="box-banner">
                    <a href="{{$bn->lienket}}" target="_blank">
                        <img src="{{ $bn->banner}}" alt="{{ $bn->name}}" title="{{ $bn->name}}" width="100%">
                    </a>
                </div>
            @endif
        @endforeach




    </div>

{{--    @include('guest.menu-right.counter')--}}


</div>
