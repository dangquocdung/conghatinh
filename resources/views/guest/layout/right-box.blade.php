<div class="right-box">

    <div class="box">
        <a href="http://gis.chinhphu.vn/?r=ytZEOqw8fEiSQeRsfea4w" target="_blank">
            <img src="/images/bandohatinh.gif" alt="Bản đồ Hà Tĩnh" title="Bản đồ Hà Tĩnh">
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

    <div class="box">
        <a href="https://shop.viettel.vn/" target="_blank">
            <img src="http://www.hatinh.gov.vn/PublishingImages/LoGoVietTel.jpg" alt="Quảng cáo" title="Quảng cáo">
        </a>
    </div>

</div>
