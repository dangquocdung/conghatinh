<div class="menu-main visible-xs">

<div id="top_nav" class="ddsmoothmenu">
    <ul>
        <li class="" style="width: 17%">
            <a href="{{ route('chuyen-muc','gioi-thieu') }}">
                <span>Giới thiệu </span>
            </a>
        </li>
        <li class="" style="width: 25%">
            <a href="{{ url('http://congbao.hatinh.gov.vn') }}">
                <span>Văn Bản QPPL</span>
            </a>
        </li>
        <li class="" style="width: 25%">
            <a href="{{ url('http://dichvucong.hatinh.gov.vn') }}">
                <span>Dịch vụ công</span>
            </a>
        </li>
        <li class="" style="width: 25%">
            <a href="{{ route('chuyen-muc','quy-hoach-chien-luoc') }}">
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