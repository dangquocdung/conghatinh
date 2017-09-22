@php
    $cm = $chuyenmuc->where('slug','tin-hoat-dong')->first();

    $thd = $cm->tintuc->sortByDesc('id')->take(6);

    $thd1 = $thd->shift();
@endphp

@if ($thd1)
<div class="portlet">
    <div class="portlet-header">
        <a href="chuyen-muc/tin-hoat-dong" class="portlet-danh-muc-title">
            <h4 class="portlet-header-title no-pd-top">Tin Hoạt động</h4>
        </a>
    </div>

    <div class="portlet-content">
            <div class="row">

              <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="main-news">
                  <div class="">
                    <a href="chi-tiet/" class="main-news-title bold">
                                    {{ $thd1->name }}
                                </a>

                  </div>

                    <div class="main-news-thumb-nail">
                        <a href="chi-tiet/{{ $thd1->slug }}">
                            <img src="{{ $thd1->avatar }}">
                        </a>
                    </div>
                    <div class="main-news-content">
                        {{ $thd1->gioithieu }}
                    </div>
                    <div class="clear"></div>
                </div>
              </div>


                @if (count($thd) >0 )

                  <div class="col-md-5 col-sm-5 col-xs-12">

                    <div class="news">
                        <ul class="list-news">
                            @foreach($thd as $tin)
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

<img src="http://placehold.it/800x150" width="100%" style="margin-bottom: 15px;">
@endif
