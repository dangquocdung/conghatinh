<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1150px; height: 250px;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 1150px; height: 250px;">
        <div>
            <a href="/">
                <img u="image" src="./images/banner/001.png" />
            </a>
        </div>
        <div>
            <a href="/">
                <img u="image" src="./images/banner/002.png" />
            </a>
        </div>
        <div>
            <a href="/">
                <img u="image" src="./images/banner/003.png" />
            </a>
        </div>
        <div>
            <a href="/">
                <img u="image" src="./images/banner/004.png" />
            </a>
        </div>
        <div>
            <a href="/">
                <img u="image" src="./images/banner/005.png" />
            </a>
        </div>
        <div>
            <a href="/">
                <img u="image" src="./images/banner/006.png" />
            </a>
        </div>
        {{--<div>--}}
            {{--<a href="/">--}}
                {{--<img u="image" src="./images/banner/007.png" />--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div>--}}
            {{--<a href="/">--}}
                {{--<img u="image" src="./images/banner/008.png" />--}}
            {{--</a>--}}
        {{--</div>--}}
    </div>

    {!! Form::open(['method'=>'GET','url'=>'vi/tim-kiem','role'=>'search'])  !!}

    <div class="col-xs-3 pull-right hidden-sm hidden-xs" style="margin-top: 20px">
        <div class="input-group">
            <div class="input-group-btn search-panel">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="border-top-left-radius: 5px; border-bottom-left-radius: 5px">
                    <span id="search_concept">Tin tức</span> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#gioithieu">Giới thiệu</a></li>
                    <li><a href="#ngaydang">Ngày đăng</a></li>
                    <li><a href="#noidung">Nội dung</a></li>
                    <li class="divider"></li>
                    <li><a href="#hinhanh">Hình ảnh</a></li>
                    <li><a href="#video">Video</a></li>

                </ul>
            </div>
            <input type="hidden" name="type" value="tieude" id="type" class="form-control"/>
            <input type="text"  name="search" id="search" class="form-control" placeholder="Tìm kiếm..." required/>
            <div class="input-group-btn">
                <div class="btn-group" role="group">
                    <button type="submit" class="btn btn-primary" style="border-top-right-radius: 5px; border-bottom-right-radius:5px ">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {!! Form::close() !!}


    <!-- Trigger -->
    <script>jssor_slider1_init('slider1_container');</script>

    <script>
        $(document).ready(function(e){
            $('.search-panel .dropdown-menu').find('a').click(function(e) {
                e.preventDefault();
                var param = $(this).attr("href").replace("#","");
                var concept = $(this).text();
                $('.search-panel span#search_concept').text(concept);
                $('.input-group #type').val(param);
            });
        });
    </script>
</div>