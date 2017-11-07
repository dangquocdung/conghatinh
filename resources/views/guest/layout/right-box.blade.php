<div class="right-box">

    <div class="block4">

        <div class="block-header" style="margin-bottom: 0">

            <h4>Lời chào mừng</h4>

        </div>

        <img src="http://mediahatinh24h.tinmoi.vn/2016/04/hatinh-388.jpg" alt="" width="100%">


    </div>

    <div class="block4">

        <div class="block-header" style="margin-bottom: 0">

            <h4>Địa giới hành chính</h4>

        </div>
        <a href="http://gis.chinhphu.vn/?r=ytZEOqw8fEiSQeRsfea4w" target="_blank">

            <img src="/images/bandohatinh.gif" alt="Bản đồ Hà Tĩnh" title="Bản đồ Hà Tĩnh" width="100%">
        </a>


    </div>



    @include('guest.chi-tiet.right-box')

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

            <h4>Tuyên truyền</h4>

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

            <h4>Doanh nghiệp</h4>

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
