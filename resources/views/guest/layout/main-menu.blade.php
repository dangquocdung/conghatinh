<div id="navbar" class="navbar-collapse collapse">



    <ul class="nav navbar-nav">
        <li><a href="/"><i class="fa fa-university" aria-hidden="true"></i></a></li>
        @foreach ($chuyenmuc as $cm)
            @if ($cm->vitri == 1)
                <li>
                    <a href="{{ $cm->path}}/{{ $cm->slug}}">{{ $cm->name }}</a>
{{--                    {{ $cm->name }}--}}
                    <ul>
                        @foreach($cm->loaitin as $lt)
                            <li><a href="">{{ $lt->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endif
        @endforeach
        <li><a href="http://dichvucong.hatinh.gov.vn/portaldvc/Home/default.aspx">DVC trực tuyến</a></li>

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
