<div class="menu-main hidden-lg hidden-md">

<div id="top_nav" class="ddsmoothmenu">
    <ul>
        <li class="" style="width: 16%">
            <a href="/">
                <span>Trang chủ</span>
            </a>
        </li>
        <li class="" style="width: 16%">
            <a href="{{ route('chuyen-muc','gioi-thieu') }}">
                <span>Giới thiệu </span>
            </a>
        </li>
        <li class="" style="width: 20%">
            <a href="{{ url('http://congbao.hatinh.gov.vn') }}">
                <span>Văn bản QPPL</span>
            </a>
        </li>
        <li class="" style="width: 20%">
            <a href="{{ url('http://dichvucong.hatinh.gov.vn') }}">
                <span>DVC trực tuyến</span>
            </a>
        </li>
        <li class="" style="width: 20%">
            <a href="{{ route('chuyen-muc','dau-tu-phat-trien') }}">
                <span>Đầu tư Phát triển</span>
            </a>
        </li>
        <li class="last" style="width:8%">
            <a data-toggle="offcanvas-mb">
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