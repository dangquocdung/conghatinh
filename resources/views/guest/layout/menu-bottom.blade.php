
<div class="menu-bottom">

<div id="top_nav" class="ddsmoothmenu">
    <ul>
        <li class="" style="width: 17%">
            <a href="{{ route('lien-he-cong-tac') }}">Liên hệ</a>
        </li>

        <li class="" style="width: 20%">
            <a href="{{ route('ban-bien-tap') }}">Ban Biên Tập</a>
        </li>
        <li class="" style="width: 20%">
            <a href="{{ route('so-do-cong') }}">Sơ đồ cổng</a>
        </li>
        <li class="" style="width: 17%">
            <a href="/dang-nhap">Đăng nhập</a>
        </li>
        <li class="" style="width: 16%">
            <a href="{{ route('gop-y-cong') }}">Góp ý</a>
        </li>

        {{--<li class="">--}}
            {{--<a href="dang-nhap">Đăng nhập</a>--}}
        {{--</li>--}}
        <li class="last" style="width: 10%">
            <a href="/rss-feed" target="_blank"><i class="fa fa-rss-square" aria-hidden="true"></i>&nbsp;RSS</a>
        </li>
        {{--@foreach ($chuyenmuc as $cm)--}}
            {{--@if ($cm->vitri == 1)--}}
                {{--<li class="">--}}
                    {{--<a href="chuyen-muc/{{ $cm->slug }}">--}}
                        {{--<span>{{ $cm->name  }}</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--@endif--}}
        {{--@endforeach--}}

    </ul>
</div>
</div>