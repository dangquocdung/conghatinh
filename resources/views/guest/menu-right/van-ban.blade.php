<div class="right-box">

    <div class="block4">
        @include('guest.layout.menu-right')
    </div>


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
            <a href="javascript:void(0);">

                <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Bản đồ địa giới</h4>
            </a>

        </div>
        <a href="http://gis.chinhphu.vn/?r=ytZEOqw8fEiSQeRsfea4w" target="_blank">

            <img src="/images/bandohatinh.gif" alt="Bản đồ Hà Tĩnh" title="Bản đồ Hà Tĩnh" width="100%">
        </a>


    </div>

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
