<!-- Fixed navbar -->
<nav class="navbar navbar-default" id="main-menu">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="" class="navbar-brand"></a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><i class="fa fa-home"></i>&nbsp;Trang chủ</a></li>

                    @foreach($chuyenmuc as $cm)

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $cm->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach($cm->loaitin as $lt)
                            <li><a href="loai-tin/{{$lt->slug}}">{{$lt->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach

                    {{--<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="#">Action</a></li>--}}
                            {{--<li><a href="#">Another action</a></li>--}}
                            {{--<li><a href="#">Something else here</a></li>--}}
                            {{--<li role="separator" class="divider"></li>--}}
                            {{--<li class="dropdown-header">Nav header</li>--}}
                            {{--<li><a href="#">Separated link</a></li>--}}
                            {{--<li><a href="#">One more separated link</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="form-inline" style="margin-top: 8px;">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                      <i class="fa fa-search"></i>
                                    </button>
                                  </span>
                            </div>
                        </form>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</nav>

<script>
    $(document).ready(function () {
        $(window).bind("scroll", function(e) {
            var top = $(window).scrollTop();
            var khoangcach = document.getElementById("main-menu").offsetTop;
            if (top > khoangcach) { //Khoảng cách đã đo được

                $(".navbar").addClass("navbar-fixed-top");
            } else {


                $(".navbar").removeClass("navbar-fixed-top");
            }
        });
    });
</script>