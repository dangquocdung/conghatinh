<div class="right-box">

    <div class="block4">
        <div class="block-header" style="margin-bottom: 0" data-toggle="collapse" href="#menu-right">
            <h4>
                <img src="/images/background/lotus.ico" alt="" width="26px"> Menu

                <i id="chevron" class="fa fa-chevron-down" style="position: absolute; top: 5px; right:12px;left: auto"></i>

            </h4>
        </div>

        <script>
            $(document).ready(function () {

                $('.block-header').click(function () {


                    $("#chevron").toggleClass('fa-chevron-up fa-chevron-down');




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
    @endif




    <div class="right_1">

        @foreach($phimtat as $pt)
            <div class="right-item">
                <a href="{{ $pt->link }}" target="_blank" class="icon" title="">
                    {{--<img border="0" alt="" src="/images/pcthamnhung.png">--}}
                    <i class="fa {{$pt->icon}} fa-3x" aria-hidden="true"></i>

                    <span class="nav-text">{{ $pt->name }} </span>
                </a>
            </div>
        @endforeach


    </div>


    <div class="block4">

        <div class="block-header" style="margin-bottom: 0">


            <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Bản đồ địa giới</h4>


        </div>
        <a href="http://gis.chinhphu.vn/?r=ytZEOqw8fEiSQeRsfea4w" target="_blank">

            <img src="/images/bandohatinh.gif" alt="Bản đồ Hà Tĩnh" title="Bản đồ Hà Tĩnh" width="100%">
        </a>


    </div>

    <div class="block4">

        <div class="block-header" style="margin-bottom: 0">


            <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Sự kiện</h4>


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


            <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Doanh nghiệp</h4>


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
