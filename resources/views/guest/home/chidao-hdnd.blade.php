@php
    $cm = $chuyenmuc->where('slug','tin-tuc-su-kien')->first();

    $ttsk = $cm->tintuc->sortByDesc('id')->take(6);

    $ttsk1 = $ttsk->shift();



@endphp

@if ($ttsk1)
    <div class="block3">
        <div class="portlet">
            <div class="portlet-header">
                <a href="chuyen-muc/tin-tuc-su-kien" class="portlet-danh-muc-title">
                    <h4 class="portlet-header-title no-pd-top">Chỉ đạo của Tỉnh ủy Hà Tĩnh</h4>
                </a>
            </div>

            <div class="portlet-content">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="main-news">
                            <div class="">
                                <a href="chi-tiet/" class="main-news-title bold">
                                    {{ $ttsk1->name }}
                                </a>

                            </div>

                            <div class="main-news-thumb-nail">
                                <a href="chi-tiet/{{ $ttsk1->slug }}">
                                    <img src="{{ $ttsk1->avatar }}">
                                </a>
                            </div>
                            <div class="main-news-content">
                                {{ $ttsk1->gioithieu }}
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>

                    @if (count($ttsk) > 0)

                        <div class="col-md-5 col-sm-5 col-xs-12">

                            <div class="news">
                                <ul class="list-news">
                                    @foreach($ttsk as $tin)
                                        <li class="news-item default-news bullet-arrow">
                                            <a class="icon-list"><i></i></a>
                                            <div class="default-news-content">
                                                <a href="chi-tiet/{{ $tin->slug }}" class="news-title ">
                                                    {{ $tin->name }}
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>

@endif
