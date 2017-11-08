<div class="container nen-trang">

    <div class="margin-15px">

        <nav class="navbar navbar-default hidden-xs" id="main-menu" >
            <div class="navbar-header">
                @include('guest.layout.header-slide')
{{--                @include('guest.layout.header-slide-mb')--}}
            </div>


            <div class="menu-mobie">
                <button style="z-index: 1001;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            {{--<div class="navbar-header">--}}
                {{----}}
                {{--<div class="visible-xs">--}}
                    {{--<img src="/images/quochuy.png" width="50px" style="float: left; padding: 10px">--}}
                    {{--<a class="navbar-brand" href="/" style="float: left; color: #ffffff; font-weight: bold; margin-left: -15px;">Cổng TTĐT Hà Tĩnh</a>--}}
                {{--</div>--}}

            {{--</div>--}}

            <div id="navbar" class="navbar-collapse collapse">



                <ul class="nav navbar-nav">
                    <li><a href="/"><i class="fa fa-university" aria-hidden="true"></i></a></li>
                    @foreach ($chuyenmuc as $cm)
                        @if ($cm->vitri == 1)
                            <li><a href="{{ $cm->path}}/{{ $cm->slug}}">{{ $cm->name }}</a></li>
                        @endif
                    @endforeach
                    <li><a href="http://dichvucong.hatinh.gov.vn/portaldvc/Home/default.aspx">DVC trực tuyến</a></li>

                    {{-- @php
                        $vanban = $chuyenmuc->skip(2)->take(2);
                    @endphp

                    @foreach ($vanban as $cm)
                        <li><a href="van-ban/{{ $cm->slug}}">{{ $cm->name }}</a></li>
                    @endforeach --}}

                    {{--@foreach($chuyenmuc as $cm)--}}

                    {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $cm->name }} <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                    {{--@foreach($cm->loaitin as $lt)--}}
                    {{--<li><a href="loai-tin/{{$lt->slug}}">{{$lt->name}}</a></li>--}}
                    {{--@endforeach--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--@endforeach--}}

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


                <ul class="nav navbar-nav navbar-right hidden-sm">
                    <li style="border-right: none;">
                        <form class="form-inline" style="padding: 8px 15px;">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Tìm kiếm...">
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


        </nav>

    </div>

</div>