@php

    $loaitin = $loaitin->where('chuyenmuc_id','32')->all();

    $cm = $chuyenmuc->where('slug','tin-tuc-su-kien')->first();

    $ttsk = $cm->tintuc->sortByDesc('id')->take(6);

    $ttsk1 = $ttsk->shift();



@endphp




    @foreach($loaitin as $cq)

<div class="block3" id="{{$cq->slug}}">

    <div class="portlet-header">
        <a href="chuyen-muc/tin-tuc-su-kien">
            <h4 class="portlet-header-title no-pd-top">{{$cq->name}}</h4>
        </a>
    </div>



        <ul>
            <li class="col-md-6 col-xs-12">

                <div class="chi-dao-dieu-hanh">
                    <a href="#" class="news-title ">
                        Báo Công an thành phố Đà Nẵng kỷ niệm 30 năm phát hành số báo đầu tiên
                    </a>
                </div>
            </li>
            <li class="col-md-6 col-xs-12">

                <div class="chi-dao-dieu-hanh">
                    <a href="#" class="news-title ">
                        Báo Công an thành phố Đà Nẵng kỷ niệm 30 năm phát hành số báo đầu tiên
                    </a>
                </div>
            </li>
            <li class="col-md-6 col-xs-12">

                <div class="chi-dao-dieu-hanh">
                    <a href="#" class="news-title ">
                        Báo Công an thành phố Đà Nẵng kỷ niệm 30 năm phát hành số báo đầu tiên
                    </a>
                </div>
            </li>
            <li class="col-md-6 col-xs-12">

                <div class="chi-dao-dieu-hanh">
                    <a href="#" class="news-title ">
                        Báo Công an thành phố Đà Nẵng kỷ niệm 30 năm phát hành số báo đầu tiên
                    </a>
                </div>
            </li>

        </ul>



</div>

@endforeach


<script>
    $(document).ready(function () {

        var isMobile = $(window).width() < 768;
        console.log("isMobile");
        console.log(isMobile);

        if(!isMobile) {

            @foreach($loaitin as $cq)

            $('#{{$cq->slug}} .news-block').hover(function () {

                $('#{{$cq->slug}} .main-news-title a').attr({href: $(this).find('a').attr('href')});
                $('#{{$cq->slug}} .main-news-title a').html($(this).find('a').html());





                $('#{{$cq->slug}} .main-news-thumb-nail img').attr({src: $(this).find('img').attr('src')});

                $('#{{$cq->slug}} .main-news-content').html($(this).find('.gioithieu').html());






            })
            @endforeach

        }



    })
</script>

