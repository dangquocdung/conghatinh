<div class="block3">

    <div class="left_block">
        <div class="portlet-header">
            <a href="chuyen-muc/tin-tuc-su-kien" class="portlet-danh-muc-title">
                <h4 class="portlet-header-title no-pd-top">Tin tức sự kiện nổi bật</h4>
            </a>
        </div>

    </div>
    <div class="col-md-8" id="tinNoiBatChinh">

        {{--@php--}}
            {{--$tinactive = $tinnoibat->shift();--}}
        {{--@endphp--}}


        <div class="hot-news" >

            <a href="#" class="hot-news-thumb-nail ">
                <img src="">
            </a>

            <div class="hot-news-title" style="display: block;">
                <a href=""><h4></h4></a>


            </div>
            <div class="hot-news-desc" style="text-align: justify; line-height: 20px;">

            </div>
        </div>



    </div>
    <div class="col-md-4">


                <div id="tin-noi-bat" style="padding-top: 15px;">

                <ul>
                    @foreach ($tinnoibat as $tnb)

                        <li>
                            <div class="hot-news-block">

                                <a href="chi-tiet/{{ $tnb->slug }}" class="news-title">
                                    {{ $tnb->name }}
                                </a>

                                <img src="{{$tnb->avatar}}" alt="{{ $tnb->name }}" style="display: none;">

                                <div class="item-desc" style="display: none;">{{ $tnb->gioithieu }}</div>

                            </div>
                        </li>

                    @endforeach

                </ul>
                </div>

                <div class="xem-tiep" style="float:right">
                    <p><em>Xem tiếp... <i class="fa fa-angle-double-right" aria-hidden="true"></i></em></p>
                </div>




    </div>
</div>

<script>

    function UnionSwitchMode2() {

        var idUnion_image_thumb = "tin-noi-bat"


        var jQueryActive = $("#" + idUnion_image_thumb + ' .active');


        var jQueryNext = jQueryActive.next().length ? jQueryActive.next() : $("#" + idUnion_image_thumb + ' ul li:first');

        //Tìm giá trị

        var imgAlt = jQueryNext.find('img').attr("alt");

        var imgTitle = jQueryNext.find('img').attr("src");

        var imgDesc = jQueryNext.find('.hot-news-block').html();

        var aHref = jQueryNext.find('a').attr("href");

        var imgDescHeight = $("#tinNoiBatChinh .hot-news").find('#tinNoiBatChinh .hot-news-block').height();

        var newsDesc = jQueryNext.find('.item-desc').html();

        $("#tinNoiBatChinh .hot-news").animate( {marginBottom: "0"}, 0, function() {

            jQueryActive.removeClass('active');

            jQueryNext.addClass('active');




            $("#tinNoiBatChinh .hot-news img").attr({ src: imgTitle, alt: imgAlt });



            $("#tinNoiBatChinh .hot-news .hot-news-title a").attr({href: aHref});

            $("#tinNoiBatChinh .hot-news .hot-news-title h4").html(imgAlt);

            $("#tinNoiBatChinh .hot-news .hot-news-desc").html(newsDesc);

            

        });



    }

    $(document).ready(function () {
        $(".tin-noi-bat ul li:first").addClass('active');

        setInterval("UnionSwitchMode2()", "4000");

    })
</script>
