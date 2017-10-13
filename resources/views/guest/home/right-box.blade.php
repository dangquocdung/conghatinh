<div class="right-box">
    <div class="box">

        <img src="/images/background/color-range.png" alt="">

    </div>

    <div class="box">
        <img src="https://hanoi.gov.vn/documents/14/2609330/bando.gif?t=1483605975639" alt="Bản đồ Hà Tĩnh" title="Bản đồ Hà Tĩnh">
    </div>

    @foreach ($banner as $bn)

        <div class="box">
            <a href="{{$bn->lienket}}" target="_blank">
                <img src="{{ $bn->banner}}" alt="{{ $bn->name}}" title="{{ $bn->name}}">
            </a>
        </div>

    @endforeach
</div>
