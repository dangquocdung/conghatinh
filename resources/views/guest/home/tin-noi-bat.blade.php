<div class="block3">

    <div class="portlet-header">
        <img src="/images/background/lotus.ico">
        <a href="javascript:void (0);">
            <h4 class="portlet-header-title no-pd-top">Tin Nổi bật: </h4>
            {{--<span id="scrolling-text"></span>--}}
        </a>
    </div>

    @if (count($tinnoibat) > 0)


        <div id="tinNoiBatChinh" class="col-md-7 col-xs-12 w3-animate-left">

            @php
                $tin1 = $tinnoibat->first();
            @endphp

            <div class="hot-news">

                <a href="{{  route('chi-tiet-tin', [$tin1->loaitin->chuyenmuc->slug,$tin1->loaitin->slug,'tin-tuc',$tin1->id,$tin1->slug]) }}" class="hot-news-thumb-nail">
                    <img src="{{$tin1->avatar}}" alt="{{ $tin1->name }}" class="w3-animate-left" width="100%">
                </a>

                <div class="hot-news-title" style="display: block; text-align: center">
                    <h3>
                        <a href=" {{  route('chi-tiet-tin', [$tin1->loaitin->chuyenmuc->slug,$tin1->loaitin->slug,'tin-tuc',$tin1->id,$tin1->slug]) }}">{{ $tin1->name }}</a>
                    </h3>
                </div>
                <div class="hot-news-desc" style="text-align: justify; line-height: 20px; padding-bottom: 15px; display:none">
                    {{ $tin1->gioithieu }}

                </div>
            </div>
        </div>

        <div class="col-md-5 col-xs-12">
            @include('guest.home.tin-noi-bat-right')
        </div>

    @endif


</div>

<div class="clearfix"></div>

@if (!empty($banner_tt))

    <div class="banner-tuyentruyen">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            {{--<ol class="carousel-indicators">--}}
                {{--@foreach($banner_tt as $key=>$bntt)--}}
                    {{--<li data-target="#carousel-example-generic" data-slide-to="{{ $key }}" class="@if ($key == 0) active @endif"></li>--}}
                {{--@endforeach--}}

            {{--</ol>--}}

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach($banner_tt as $key=>$bntt)
                    <div class="item
                    @if ($key == 0) active @endif">
                        <img src="{{ $bntt->hinhanh }}" width="100%">
                    </div>
                @endforeach

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

@endif

<div class="hot-item" style="background-color:#ffffff">
    <ul>
        @foreach ($banner->where('vitri','7') as $bn)
            <li class="col-md-3 col-sm-3 col-xs-6">
                <div class="block2">
                    <a href="{{$bn->lienket}}" target="_blank">
                        <img src="{{ $bn->banner}}" alt="{{ $bn->name}}" title="{{ $bn->name}}" width="100%">
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
</div>








{{--<div class="block2">--}}
{{--<a href="http://dichvucong.hatinh.gov.vn" target="_blank">--}}
{{--<img src="/uploads/2017/10/59ee9c1a4637d.png" alt="Dịch vụ công trực tuyến" width="100%">--}}
{{--</a>--}}
{{--</div>--}}



<script>

function UnionSwitchMode2() {

    var isMobile = $(window).width() < 768;
    console.log("isMobile");
    console.log(isMobile);

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

            $("#tinNoiBatChinh .hot-news a").attr({href: aHref});

            $("#tinNoiBatChinh .hot-news img").attr({src: imgSrc, alt: imgAlt});

            $("#tinNoiBatChinh .hot-news .hot-news-title h3 a").attr({href: aHref});

            $("#tinNoiBatChinh .hot-news .hot-news-title h3 a").html(imgAlt);

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

        $("#tinNoiBatChinh .hot-news .hot-news-title h3 a").attr({href: aHref});

        $("#tinNoiBatChinh .hot-news .hot-news-title h3 a").html(imgAlt);

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
