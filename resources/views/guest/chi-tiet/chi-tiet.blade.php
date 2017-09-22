<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 portlet-layout layout-left">
    <div class="portlet-content">
        <div class=" portlet-content-container">
            <div class="portlet-body">
                <style type="text/css">
                    span.error {
                        color: #a94442;
                        font-weight: bold;
                    }
                    .alert {
                        position: fixed;
                        z-index: 1036;
                        right: 0;
                        min-width: 320px;
                        top: 0;
                    }
                    .chi-tiet-title,
                    .chi-tiet-tac-gia {
                        text-transform: none !important;
                    }
                    .chi-tiet-main-content table {
                        border-collapse: collapse;
                    }
                    .chi-tiet-main-content table td,
                    .chi-tiet-main-content table th {
                        padding: 10px!important;
                    }
                    video {
                        width: 100%;
                        height: auto;
                    }
                </style>
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
                            <div class="chi-tiet-sub-content-wrap">
                                <div class="chi-tiet-sub-content">
                                    <p style="text-align:justify"><span style="font-size:15px">{{ $tin->gioithieu }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="chi-tiet-main">
                            <div class="chi-tiet-main-content">
                                {!! $tin->noidung !!}
                                
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
                                        <li class="col-md-12 news-item related-default-news bullet-arrow">
                                            <a class="icon-list">
                                                <i></i>
                                            </a>
                                            <div class="default-news-content">
                                                <a href="/web/guest/chi-tiet?id=28004&amp;_c=3" class="news-title">
                                									Thí điểm thành lập Ban quản lý An toàn thực phẩm Đà Nẵng
                                								</a>
                                                <span style="color: #9c9c9c;font-size: 12px;display: inline-block;">(28-08-2017 17:36)</span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Bài viết cùng chuyên mục -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
