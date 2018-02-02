@extends('guest.layout.main')
@section('title')
    Đối thoại trực tuyến
@endsection

@section('doi-thoai')

    <style>
        .mainvideo {
            /* background: transparent url(aspximages/CSS-Background.jpg);
              background-repeat:repeat;
            background-color: #F4F4F6;*/
            width: 100%;
            display: inline-block;
            background-color: #111;
            background-image: -moz-linear-gradient(#111, #1a66a5);
            background-image: -webkit-gradient(linear, left top, left bottom, from(#111), to(#1a66a5));
            background-image: -webkit-linear-gradient(#111, #1a66a5);
            background-image: -o-linear-gradient(#111, #1a66a5);
            background-image: -ms-linear-gradient(#111, #1a66a5);
            background-image: linear-gradient(#111, #1a66a5);
        }

        .doithoai {
            width: 100%; /*Width of main container*/
            margin: 0 auto; /*Center container on page*/

        }


    </style>

    <div class="mainvideo">

        <div class="doithoai">
            <div class="col-sm-5" style="padding-left: 0;">
                <img src="http://doithoai.danang.gov.vn/skin-home/images/trung-tam-hanh-chinh.jpg" width="100%" style="margin: 10px; border: 1px #CCCCCC solid">
            </div>
            <div class="col-sm-7">
                <p class="titleIntro">KÊNH ĐỐI THOẠI TRỰC TUYẾN</p>
                <p>
                    <br>
                </p>
                <p class="contentIntro">
                    Nhằm tăng cường hơn nữa việc tiếp nhận, trao đổi thông tin, Cổng thông tin điện tử tỉnh xây dựng và mở chuyên mục đối thoại trực tuyến. Mong rằng đây sẽ là một kênh thông tin hữu ích giúp các cơ quan nhà nước đến gần hơn với nhân dân, cộng đồng doanh nghiệp.
                </p>
                <p>
                </p><p class="contentIntro">
                    Quý vị quan tâm đến Đối thoại trực tuyến có thể tham gia và gửi câu hỏi trực tiếp bằng cách truy cập địa chỉ <a class="introlink" href="http://www.doithoai.danang.gov.vn">www.doithoai.danang.gov.vn</a>, gửi thư điện tử về <a class="introlink" href="mailto:doithoai@danang.gov.vn">doithoai@danang.gov.vn</a> hoặc trực tiếp gọi số 0236.1022.
                </p>
                <p class="contentIntro">

                    <br>

                </p><p class="bold">Trân trọng. </p>


                <p class="contentIntroRight">BAN BIÊN TẬP CỔNG TTĐT TỈNH HÀ TĨNH </p>
                <p></p>

            </div>
        </div>

    </div>

@endsection

@section('content-main')

    <div class="block3">

        <div class="portlet-header">
            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Đối thoại trực tuyến</h4>
            </a>
        </div>


        <div class="col-md-12" style="padding: 5px">

        </div>

    </div>
@endsection




