@php

    $loaitin = $loaitin->where('chuyenmuc_id','3')->all();

    $cm = $chuyenmuc->where('slug','tin-tuc-su-kien')->first();

    $ttsk = $cm->tintuc->sortByDesc('id')->take(6);

    $ttsk1 = $ttsk->shift();



@endphp



@if ($ttsk1)

    @foreach($loaitin as $lt)

        <div class="block3" id="{{$lt->slug}}">

        <div class="portlet-header">
            <a href="loai-tin/{{ $lt->slug }}">
                <h4 class="portlet-header-title no-pd-top">{{$lt->name}}</h4>
            </a>
        </div>



        <div class="col-md-7 col-sm-7 col-xs-12">
          <div class="row">


              <div class="news-main">
                  <a class="tin_title_text" href="#">

                      <img style="display: inline-block; width: 160px; height:auto;" src="https://hanoi.gov.vn/image/image_gallery?img_id=2003102801695" alt="" title="">

                      <div class="tin_title_text">
                          Giám sát tình hình thực hiện nhiệm vụ phát triển kinh tế -xã hội năm 2017 tại Sở Kế hoạch và Đầu tư
                      </div>
                  </a>
                  <br>

                  <div class="tin_title_abstract" style="display:;">

                      <p> HNP - Sáng 2/10, Phó Chủ tịch Thường trực HĐND TP Nguyễn Ngọc Tuấn chủ trì giám sát tại Sở Kế hoạch và Đầu tư về tình hình thực hiện nhiệm vụ phát triển kinh tế - xã hội năm 2017.</p>

                  </div>
              </div>
          </div>
        </div>

        @if (count($ttsk) > 0)

          <div class="col-md-5 col-sm-5 col-xs-12">
              <div class="row">

                <div class="news-five">
                    <ul>
                        @foreach($ttsk as $tin)
                        <li>

                          <div class="news-block">
                              <i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #ce663f"></i>
                              <a href="chi-tiet/{{ $tin->slug }}" class="news-title">
                                   {{ $tin->name }}
                              </a>

                              <img src="{{$tin->avatar}}" alt="{{ $tin->name }}" style="display:none;">

                              <div class="gioithieu" style="display:none;">{{$tin->gioithieu}}</div>

                          </div>
                        </li>
                        @endforeach
                    </ul>


                    <div class="xem-tiep" style="float:right; padding-bottom: 8px;">
                        <a href="#" style="text-decoration: none;"><em>Xem tiếp... <i class="fa fa-angle-double-right" aria-hidden="true"></i></em></a>
                    </div>
                </div>
              </div>
          </div>

        @endif



    </div>

    @endforeach

@endif

<script>
    $(document).ready(function () {

        var isMobile = $(window).width() < 768;
        console.log("isMobile");
        console.log(isMobile);

        if(!isMobile) {

            @foreach($loaitin as $lt)

            $('#{{$lt->slug}} .news-block').hover(function () {

                $('#{{$lt->slug}} .cms-container-tintuc a').attr({href: $(this).find('a').attr('href')});

                $('#{{$lt->slug}} .cms-container-tintuc a .tin_title_text').html($(this).find('a').html());

                $('#{{$lt->slug}} .cms-container-tintuc a img').attr({src: $(this).find('img').attr('src')});

                $('#{{$lt->slug}} .cms-container-tintuc tin_title_abstract').html($(this).find('.gioithieu').html());

            })
            @endforeach

        }




    })
</script>

