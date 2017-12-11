<div class="menu-main hidden-lg hidden-md">

<div id="top_nav" class="ddsmoothmenu">
    <ul>
        <li class="" style="width: 18%">
            <a href="/">
                <span>Trang chủ</span>
            </a>
        </li>
        <li class="" style="width: 19%">
            <a href="{{ route('chuyen-muc','doanh-nghiep') }}">
                <span>Doanh nghiệp</span>
            </a>
        </li>
        <li class="" style="width: 18%">
            <a href="{{ route('chuyen-muc','gioi-thieu') }}">
                <span>Du khách</span>
            </a>
        </li>
        <li class="" style="width: 18%">
            <a href="{{ route('lien-he-cong-tac') }}">
                <span>Liên hệ</span>
            </a>
        </li>
        <li class="" style="width: 19%">
            <a href="{{ route('so-do-cong') }}">
                <span>Sơ đồ cổng</span>
            </a>
        </li>
        <li class="last" style="width:8%">
            <a data-toggle="offcanvas">
                <i class="fa fa-level-down" aria-hidden="true"></i>
            </a>
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