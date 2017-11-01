<div class="right-box">

    <div class="box">
    	<img src="/images/ban-do-ha-tinh.png" alt="Bản đồ Hà Tĩnh" title="Bản đồ Hà Tĩnh">
    </div>

    @foreach ($banner as $bn)
        @if ($bn->vitri == 0)
            <div class="box">
                <a href="{{$bn->lienket}}" target="_blank">
                    <img src="{{ $bn->banner}}" alt="{{ $bn->name}}" title="{{ $bn->name}}">
                </a>
            </div>
        @endif
    @endforeach

</div>
