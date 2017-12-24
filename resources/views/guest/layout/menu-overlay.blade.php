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
        <li class="home"><a href="/" title="Trang chủ"><span><i class="glyphicon glyphicon-home"></i></span></a></li>

        <li class="search"><a href="javascript:void(0);" title="Tìm kiếm" data-toggle="modal" data-target="#mdlTimKiem">
                <span><i class="glyphicon glyphicon-search"></i></span></a>
        </li>

        <li class="search"><a href="javascript:void(0);" title="Phóng to " onclick="resizeText(1)"><span><i class="glyphicon glyphicon-zoom-in"></i></span></a></li>
        <li class="search"><a href="javascript:void(0);" title="Thu nhỏ " onclick="resizeText(-1)"><span><i class="glyphicon glyphicon-zoom-out"></i></span></a></li>
        {{--<li class="home"><a href="javascript:void(0);" title="Tải lại trang " onclick="location.reload();"><span><i class="glyphicon glyphicon-refresh"></i></span></a></li>--}}
        <li class="contact"><a href="/vi/so-do-cong" title="Sơ đồ cổng "><span><i class="fa fa-sitemap" aria-hidden="true"></i></span></a></li>
    </ul>
</div>

<div class="modal fade" id="mdlTimKiem">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tìm kiếm thông tin </h4>
            </div>
            <div class="modal-body">
                <form class="search-form">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.input-group -->
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
    $(function() {
        $('#navigation a').stop().animate({'marginLeft':'-55px'},1000);

        $('#navigation > li').hover(
            function () {
                $('a',$(this)).stop().animate({'marginLeft':'-40px'},200);
            },
            function () {
                $('a',$(this)).stop().animate({'marginLeft':'-55px'},200);
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

