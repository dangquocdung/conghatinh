<div class="col-md-9 portlet-layout">

                <div class="portlet">
                    <div class="portlet-content portlet-content-no-header">
                        <div class="chi-tiet-header">
                            <div class="chi-tiet-title-wrap">
                                <span class="chi-tiet-title">{{ $tin->name }}</span>
                            </div>
                            <div class="chi-tiet-header-info">
                                <div class="chi-tiet-publish-date-wrap">
                                    <span class="chi-tiet-publish-date">{{ $tin->created_at }}</span>
                                </div>
                            </div>
                            <div class="chi-tiet-avatar" style="margin-bottom: 10px;">
                                <img src="{{$tin->avatar}}" alt="{{ $tin->name }}" width="90%" style="display: block; margin: 0 auto;">
                            </div>

                            <div class="row">


                                <div class="col-md-3 hidden-xs">

                                    @include('guest.chi-tiet.tin-noi-bat')

                                </div>

                                <div class="col-md-9">
                                    <div class="chi-tiet-sub-content-wrap">
                                        <div class="chi-tiet-sub-content">
                                            <p style="text-align:justify"><span style="font-size:15px">{{ $tin->gioithieu }}</span>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="chi-tiet-main-content">
                                        {!! $tin->noidung !!}

                                    </div>

                                    <div>
                                        <table style="width: 485px; height: auto;" bordercolor="#3068f8" cellspacing="0" cellpadding="0" rules="none" align="center" border="2px">
                                            <tbody>
                                            <tr>
                                                <td style="background-color: #e3edf7; padding:5px; text-align:justify" align="left">
                                                    <div style="font-size: 13px; color: #000080;">
                                                        <div>Mọi sự giúp đỡ, xin bạn đọc gửi về Báo <em>Thanh Niên</em> theo thông tin sau: Chủ tài khoản: Báo Thanh Niên. Số tài khoản: 1471000.000.0115 - Ngân hàng thương mại cổ phần Đầu tư và phát triển Việt Nam - chi nhánh Ba Tháng Hai, TP.HCM. Nội dung ghi: Giúp đỡ anh Trần Minh Sơn; hoặc Báo Thanh Niên sẽ nhận trực tiếp tại tòa soạn, các văn phòng đại diện trong cả nước. Chúng tôi sẽ chuyển đến gia đình anh Sơn trong thời gian sớm nhất.</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <p style="text-align: right;" id="tac-gia">
                                        <strong>Trương Quang Nam - Diệu Linh</strong>
                                    </p>

                                </div>
                            </div>

                            <div id="abde">
                                <ul class="tags">
                                    <li>Tags:</li>
                                    <li><a href="/la-lanh-dum-la-rach/tag.html">lá lành đùm lá rách</a></li>
                                    <li><a href="/giup-do/tag.html">giúp đỡ</a></li>
                                    <li><a href="/dieu-tri/tag.html">điều trị</a></li>
                                </ul>
                            </div>

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
