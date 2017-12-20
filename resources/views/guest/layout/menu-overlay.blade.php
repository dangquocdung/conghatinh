{{--<div id="left-side-menu">--}}
    {{--<nav class="animate">--}}
        {{--<ul>--}}
            {{--@foreach ($chuyenmuc->where('vitri','1') as $cm)--}}
                {{--<li>--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $cm->name }}</a>--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</nav>--}}
    {{----}}
    {{--<div class="nav-controller">--}}
        {{--<span class="[ glyphicon glyphicon-chevron-down ] controller-open"></span>--}}
        {{--<span class="[ glyphicon glyphicon-remove ] controller-close"></span>--}}
    {{--</div>--}}
{{--</div>--}}

<div id="side-menu">
    <ul id="navigation">
        <li class="home"><a href="/" title="Trang chủ "><span><i class="fa fa-home" aria-hidden="true"></i></span></a></li>
        <li class="search"><a href="#" title="Tìm kiếm "><span><i class="fa fa-search" aria-hidden="true"></i></span></a></li>
        <li class="contact"><a href="/vi/so-do-cong" title="Sơ đồ cổng "><span><i class="fa fa-sitemap" aria-hidden="true"></i></span></a></li>
    </ul>
</div>

<script>
    $(function() {
        $('#navigation a').stop().animate({'marginLeft':'-60px'},1000);

        $('#navigation > li').hover(
            function () {
                $('a',$(this)).stop().animate({'marginLeft':'-40px'},200);
            },
            function () {
                $('a',$(this)).stop().animate({'marginLeft':'-60px'},200);
            }
        );
    });

    $(function() {
        $('nav, .nav-controller').on('click', function(event) {
            $('nav').toggleClass('focus');
        });
        $('nav, .nav-controller').on('mouseover', function(event) {
            $('nav').addClass('focus');
        }).on('mouseout', function(event) {
            $('nav').removeClass('focus');
        })
    })
</script>

