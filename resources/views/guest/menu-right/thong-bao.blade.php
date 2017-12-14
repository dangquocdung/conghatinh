<div class="right-box">

{{--    @include(('guest.menu-right.tim-kiem'))--}}

{{--    @include(('guest.menu-right.calendar'))--}}

    <div class="block4">

        <div id="block-header-bd" class="block-header" style="margin-bottom: 0" data-toggle="collapse" href="#ban-do-dia-gioi" >

            <h4>
                <img src="/images/background/lotus.ico" alt="" width="26px"> Bản đồ địa giới

                <i id="menu-bd" class="fa fa-chevron-down" style="position: absolute; top: 5px; right:12px;left: auto"></i>
            </h4>


        </div>

        <div id="ban-do-dia-gioi" class="panel-collapse collapse in">
            <a href="http://gis.chinhphu.vn/?r=ytZEOqw8fEiSQeRsfea4w" target="_blank">

                <img src="/images/bandohatinh.gif" alt="Bản đồ Hà Tĩnh" title="Bản đồ Hà Tĩnh" width="100%">
            </a>
        </div>

        <script>

            $(document).ready(function () {
                $('#block-header-bd').click(function () {
                    $("#menu-bd").toggleClass('fa-chevron-up fa-chevron-down');
                })
            })
        </script>


    </div>



    <div class="block4">
        <div id="block-header-mn" class="block-header" style="margin-bottom: 0" data-toggle="collapse" href="#menu-right">
            <h4>
                <img src="/images/background/lotus.ico" alt="" width="26px"> Menu

                <i id="menu-cm" class="fa fa-chevron-down" style="position: absolute; top: 5px; right:12px;left: auto"></i>

            </h4>
        </div>

        <script>
            $(document).ready(function () {
                $('#block-header-mn').click(function () {
                    $("#menu-cm").toggleClass('fa-chevron-up fa-chevron-down');
                })
            })
        </script>
        @include('guest.layout.menu-right')
    </div>

    @if (strlen(Setting::get('video_livestream')) > 50 )
        <div class="block4" id="live-stream" style="border-radius: 5px">
            <div class="embed-responsive embed-responsive-16by9">
                {!! Setting::get('video_livestream') !!}
            </div>
        </div>
    @elseif (!empty($vd_thoisu))
        <div class="block4" id="live-stream" style="border-radius: 5px">
            <div class="embed-responsive embed-responsive-16by9">
                <video controls>
                    <source src="/sftp/{{ $vd_thoisu->src }}" type="video/mp4">
                </video>
                {{--<iframe src="/uploads/{{ $vd_thoisu->src }}?rel=0" frameborder="0"></iframe>--}}
            </div>
        </div>
    @endif


    <div class="right_1">

        @foreach($phimtat as $pt)
        <div class="right-item">
            <a href="{{ $pt->link }}" class="icon" title="">
                {{--<img border="0" alt="" src="/images/pcthamnhung.png">--}}
                <i class="fa {{$pt->icon}} fa-3x" aria-hidden="true"></i>

                <span class="nav-text">{{ $pt->name }} </span>
            </a>
        </div>
        @endforeach


    </div>

    <div class="block4" style="margin-bottom: 0; border-bottom: none">
        <div class="block-header" style="margin-bottom: 0">
            <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Thời tiết</h4>
        </div>
    </div>

    <a href="https://www.accuweather.com/vi/vn/ha-tinh/353418/weather-forecast/353418" class="aw-widget-legal">
        <!--
        By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
        -->
    </a>
    <div id="awcc1513238895520" class="aw-widget-current"  data-locationkey="" data-unit="c" data-language="vi" data-useip="false" data-uid="awcc1513238895520"></div>
    <script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>



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


</div>
