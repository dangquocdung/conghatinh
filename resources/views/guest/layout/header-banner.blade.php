<div class="container nen-trang">

    <div class="margin-15px">

        <nav class="navbar navbar-default" id="main-menu" >
            <div class="navbar-header hidden-xs">
                @include('guest.layout.header-slide')
            </div>

            <div class="navbar-header visible-xs">
                <div class="menu-mobie">
                    <button style="z-index: 1001;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                @include('guest.layout.header-slide-mb')

                <div id="navbar" class="navbar-collapse collapse menu-mb">

                    <ul>
                        <li class="{{ Request::is('/') ? 'active' : ''  }}"><a href="/"><i class="fa fa-university" aria-hidden="true"></i> Trang chủ</a></li>
                        @foreach ($chuyenmuc as $cm)
                            @if ($cm->vitri == 1)
                                <li class="{{ Request::is($cm->path.'/'.$cm->slug) ? 'active' : ''  }}"><a href="{{ $cm->path}}/{{ $cm->slug}}">{{ $cm->name }}</a>
                                    <ul>
                                        @if ( $cm->path == 'van-ban')
                                            @foreach($cm->loaitin as $lt)
                                                <li><a href="van-ban/{{ $lt->slug}}">{{ $lt->name }}</a></li>
                                            @endforeach
                                        @else
                                            @foreach($cm->loaitin as $lt)
                                                <li><a href="loai-tin/{{ $lt->slug}}">{{ $lt->name }}</a></li>
                                            @endforeach
                                        @endif

                                    </ul>
                                </li>
                            @endif
                        @endforeach
                        <li><a href="http://dichvucong.hatinh.gov.vn/portaldvc/Home/default.aspx">DVC trực tuyến</a></li>
                    </ul>

                </div>
            </div>


        </nav>

        @include('guest.layout.main-menu')



    </div>

</div>