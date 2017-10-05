<div class="col-md-9">



                    <div class="col-md-12">

                        <div class="row">
                        <div class="chi-tiet-tin">



                            <h1 class="main-title cms-title">{{ $tin->name }}</h1>
                            <div class="meta clearfix">
                                <time><i class="fa fa-clock-o"></i>{{ $tin->created_at }}</time>
                            </div>
                        </div>



                        <div class="col-md-3">

                            <div class="row">

                                @include('guest.chi-tiet.tin-noi-bat')

                            </div>

                        </div>

                        <div class="col-md-9">

                            <div class="row">

                            <div class="chi-tiet-tin">

                                <div class="chi-tiet-avatar" style="margin-bottom: 10px;">
                                    <img src="{{$tin->avatar}}" alt="{{ $tin->name }}">
                                </div>



                                <div class="gioi-thieu">
                                    {{ $tin->gioithieu }}
                                </div>


                                <div class="noi-dung">
                                    {!! $tin->noidung !!}
                                </div>
                            </div>

                            </div>
                        </div>

                        <div id="tag">
                            <ul class="tags">
                                <li>Tags:</li>
                                <li><a href="/la-lanh-dum-la-rach/tag.html">lá lành đùm lá rách</a></li>
                                <li><a href="/giup-do/tag.html">giúp đỡ</a></li>
                                <li><a href="/dieu-tri/tag.html">điều trị</a></li>
                            </ul>
                        </div>
                        <hr>
                        <div class="chi-tiet-footer">
                        </div>
                        <!-- Bài viết cùng chuyên mục -->
                        <div class="bai-viet-cung-chuyen-muc">
                            <div class="portlet-content">
                                <div class="related-news">
                                    <ul class="list-news">
                                        @foreach($tinmoi5 as $tin)
                                            <li class="col-md-12 news-item related-default-news bullet-arrow">
                                                <a class="icon-list">
                                                    <i></i>
                                                </a>
                                                <div class="default-news-content">
                                                    <a href="chi-tiet/{{$tin->slug}}" class="news-title">
                                                                        {{$tin->name}}
                                                                    </a>
                                                    <span style="color: #9c9c9c;font-size: 12px;display: inline-block;">{{$tin->created_at}}</span>
                                                </div>
                                            </li>

                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Bài viết cùng chuyên mục -->
                        </div>

                    </div>





           
</div>


<div class="col-md-3 hidden-xs margin-top-15">
    @include('guest.layout.right-box')
</div>
