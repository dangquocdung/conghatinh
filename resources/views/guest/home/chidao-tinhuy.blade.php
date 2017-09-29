@php
    $cm = $chuyenmuc->where('slug','tin-tuc-su-kien')->first();

    $ttsk = $cm->tintuc->sortByDesc('id')->take(6);

    $ttsk1 = $ttsk->shift();



@endphp

@if ($ttsk1)
<div class="block3">

    <div class="portlet-header">
        <a href="chuyen-muc/tin-tuc-su-kien">
            <h4 class="portlet-header-title no-pd-top">Chỉ đạo của Tỉnh ủy Hà Tĩnh</h4>
        </a>
    </div>



    <div class="col-md-7 col-sm-7 col-xs-12">
      <div class="row">
        <div class="main-news" id="tinh-uy">
          <div class="main-news-title" >
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
    </div>

    @if (count($ttsk) > 0)

      <div class="col-md-5 col-sm-5 col-xs-12">
          <div class="row">

        <div class="news">
            <ul>
                @foreach($ttsk as $tin)
                <li>

                  <div class="news-block">
                      <a href="chi-tiet/{{ $tin->slug }}" class="news-title">
                          {{ $tin->name }}
                      </a>

                      <img src="{{$tin->avatar}}" alt="" style="display:none;">

                      <div class="gioithieu" style="display:none;">{{$tin->gioithieu}}</div>

                  </div>
                </li>
                @endforeach
            </ul>

            <script>
                $(document).ready(function () {

                    var isMobile = $(window).width() < 768;
                    console.log("isMobile");
                    console.log(isMobile);

                    if(!isMobile) {
                        $('.news-block').hover(function () {

                            $('#tinh-uy .main-news-title a').attr({href: $(this).find('a').attr('href')});
                            $('#tinh-uy .main-news-title a').html($(this).find('a').html());





                            $('#tinh-uy .main-news-thumb-nail img').attr({src: $(this).find('img').attr('src')});

                            $('#tinh-uy .main-news-content').html($(this).find('.gioithieu').html());






                        })

                    }



                })
            </script>

            <div class="xem-tiep" style="float:right; padding-bottom: 8px;">
                <a href="#" style="text-decoration: none;"><em>Xem tiếp... <i class="fa fa-angle-double-right" aria-hidden="true"></i></em></a>
            </div>
        </div>
          </div>
      </div>

    @endif



</div>

@endif
