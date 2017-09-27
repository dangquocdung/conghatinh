<div class="container">
    <div class="row">

        <header class="hidden-xs">

          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="./images/shape.png" alt="" width="100%">
              </div>
              <div class="item">
                <img src="./images/shape.png" alt="" width="100%">
              </div>
              <div class="item">
                <img src="./images/shape.png" alt="" width="100%">
              </div>
            </div>
          </div>


          <div id="header-brand">
              <div id="background-brand">
                  <div class="brand-text">
                      <h1>Cổng thông tin điện tử </h1>
                      <h2>Tỉnh Hà Tĩnh </h2>
                  </div>
              </div>
              <div class="language-wrapper">
                        <div class="language-list">
                            <a href="/web/ja"><i class="icon-flag-custom icon-flag-ja"></i></a>
                            <a href="/web/en"><i class="icon-flag-custom icon-flag-en"></i></a>
                            <a class="hidden" href="/web/guest/"><i class="icon-flag-custom icon-flag-vi"></i></a>
                        </div>
                    </div>
          </div>
        </header>


        <nav class="navbar navbar-default" id="main-menu" >

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>





                    <div id="navbar" class="navbar-collapse collapse">

                        <ul class="nav navbar-nav">

                            <li><a href="#">Trang chủ</a></li>

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


                        {{--<ul class="nav navbar-nav navbar-right">--}}
                            {{--<li>--}}
                                {{--<form class="form-inline" style="padding: 8px 15px;">--}}
                                    {{--<div class="input-group">--}}
                                        {{--<input class="form-control" type="text" placeholder="Tìm kiếm...">--}}
                                        {{--<span class="input-group-btn">--}}
                                        {{--<button class="btn btn-primary" type="button">--}}
                                        {{--<i class="fa fa-search"></i>--}}
                                        {{--</button>--}}
                                        {{--</span>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                        {{--</li>--}}
                        {{--</ul>--}}

                    </div><!--/.nav-collapse -->


        </nav>
            </div>

</div>