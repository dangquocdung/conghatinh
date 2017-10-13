<div class="block3">

    <div class="portlet-header">
        <a href="#">
            <h4 class="portlet-header-title no-pd-top">Tin tức, sự kiện nổi bật</h4>
        </a>
    </div>


    <div id="tinNoiBatChinh" class="col-md-8 w3-animate-left">

        @php
            $tin1 = $tinnoibat->first();
        @endphp




        <div class="hot-news">

            <a href="#" class="hot-news-thumb-nail">
                <img src="{{$tin1->avatar}}" alt="{{ $tin1->name }}" class="w3-animate-left">
            </a>

            <div class="hot-news-title" style="display: block;">
                <a href="chi-tiet/{{ $tin1->slug }}"><h4>{{ $tin1->name }}</h4></a>


            </div>
            <div class="hot-news-desc" style="text-align: justify; line-height: 20px;">
                {{ $tin1->gioithieu }}

            </div>
        </div>



    </div>
    <div class="col-md-4">


                <div id="tin-noi-bat">

                <ul>
                    @foreach ($tinnoibat as $tnb)

                        <li>
                            <div class="hot-news-block">

                                <a href="chi-tiet/{{ $tnb->slug }}" class="news-title">
                                    {{ $tnb->name }}
                                </a>

                                <img src="{{$tnb->avatar}}" alt="{{ $tnb->name }}" title="{{ $tnb->name }}" style="display: none;">

                                <div class="item-desc" style="display: none;">{{ $tnb->gioithieu }}</div>

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

<script>

    function UnionSwitchMode2() {

        var idUnion_image_thumb = "tin-noi-bat"


        var jQueryActive = $("#" + idUnion_image_thumb + ' .active');


        var jQueryNext = jQueryActive.next().length ? jQueryActive.next() : $("#" + idUnion_image_thumb + ' ul li:first');

        //Tìm giá trị

        

        var imgAlt = jQueryNext.find('img').attr("alt");

        var imgSrc = jQueryNext.find('img').attr("src");

        var imgDesc = jQueryNext.find('.hot-news-block').html();

        var aHref = jQueryNext.find('a').attr("href");

        var imgDescHeight = $("#tinNoiBatChinh .hot-news").find('#tinNoiBatChinh .hot-news-block').height();

        var newsDesc = jQueryNext.find('.item-desc').html();

        var isMobile = $(window).width() < 768;


        if(!isMobile) {

            $("#tinNoiBatChinh .hot-news").animate({marginBottom: "0"}, 0, function () {

                jQueryActive.removeClass('active');

                jQueryNext.addClass('active');





                $("#tinNoiBatChinh .hot-news img").attr({src: imgSrc, alt: imgAlt});

                $("#tinNoiBatChinh .hot-news .hot-news-title a").attr({href: aHref});

                $("#tinNoiBatChinh .hot-news .hot-news-title h4").html(imgAlt);

                $("#tinNoiBatChinh .hot-news .hot-news-desc").html(newsDesc);




            });
        }



    }

    $(document).ready(function () {

        var UnionNewsRefreshInterval2


        $("#tin-noi-bat ul li:first").addClass('active');

        UnionNewsRefreshInterval2 = setInterval("UnionSwitchMode2()", "4000");

        $("#tin-noi-bat ul")
            .on('mouseenter',function () {
                console.log('mouse enter');
                clearInterval(UnionNewsRefreshInterval2);
            })
            .on('mouseleave', function() {
                console.log('mouse leave');
                UnionNewsRefreshInterval2 = setInterval("UnionSwitchMode2()", "4000");
            });

        $("#tin-noi-bat ul li")

            .on('mouseenter', function() {

                console.log("li mouse enter");

                $(this).addClass('hover');

                
                var imgAlt = $(this).find('img').attr("alt");

                var imgSrc = $(this).find('img').attr("src");

                var aHref = $(this).find('a').attr("href");

                var newsDesc = $(this).find('.item-desc').html();


                $("#tinNoiBatChinh").addClass('w3-animate-left');

                $("#tinNoiBatChinh .hot-news img").attr({ src: imgSrc, alt: imgAlt });

                $("#tinNoiBatChinh .hot-news .hot-news-title a").attr({href: aHref});

                $("#tinNoiBatChinh .hot-news .hot-news-title h4").html(imgAlt);

                $("#tinNoiBatChinh .hot-news .hot-news-desc").html(newsDesc);



            })
            .on("mouseleave", function() {
                console.log('li mouse leave');
                $(this).removeClass('hover');
                $("#tinNoiBatChinh").removeClass('w3-animate-left');
//                $("#tinNoiBatChinh .hot-news .hot-news-block").stop(true, true);
            });




    })
</script>
