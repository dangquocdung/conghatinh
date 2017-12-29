@extends('guest.layout.main')
@section('title')
    Tra cứu dịch vụ công 
@endsection

@section('content-main')
    <div class="block3">


        <div class="portlet-header">

            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Tra cứu dịch vụ công </h4>
            </a>



        </div>

        @include('guest.notifications')

        <div class="input-box" style="padding: 5px">
            <div class="dv" style="padding-bottom: 5px">

                <table>
                    <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="STT: activate to sort column descending" style="width: 23px;">STT</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Thủ tục hành chính: activate to sort column ascending" style="width: 327px;">Thủ tục hành chính</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Đơn vị cung cấp: activate to sort column ascending" style="width: 138px;">Đơn vị cung cấp</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 84px;"></th></tr>
                    </thead>

                    <tbody>


                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Cấp giấy phép xuất bản bản tin</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Cấp Giấy phép thiết lập trang thông tin điện tử tổng hợp</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Cho phép họp báo</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Thẩm định hồ sơ cho phép thành lập và hoạt động cơ quan đại diện, phóng viên thường trú báo chí Trung ương và tỉnh bạn hoạt động trên địa bàn</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">Cấp giấy phép xuất bản tài liệu không kinh doanh</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">Cấp Giấy phép hoạt động in đối với xuất bản phẩm, sản phẩm báo chí, tem chống giả cho cơ sở in của địa phương </a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">Cấp Giấy phép tổ chức triển lãm, hội chợ xuất bản phẩm cho cơ quan, tổ chức, cá nhân của địa phương; chi nhánh, văn phòng đại diện, đơn vị trực thuộc của cơ quan, tổ chức của trung ương tại địa phương </a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1">8</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbThuTucDetail','')">Cấp giấy xác nhận đăng ký sử dụng máy photocopy màu, máy in có chức năng photocopy màu</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbDangKy','')">Đăng ký</a></td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1">9</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbThuTucDetail','')">Cấp giấy phép in gia công xuất bản phẩm cho nước ngoài đối với cơ sở in ở địa phương</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">10</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbThuTucDetail','')">Cấp giấy phép in gia công cho nước ngoài sản phẩm không phải là xuất bản phẩm đối với cơ sở in của cơ quan, tổ chức, cá nhân thuộc địa phương </a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">11</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbThuTucDetail','')">Cấp giấy phép nhập khẩu xuất bản phẩm không kinh doanh</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">12</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbThuTucDetail','')">Đăng ký hoạt động cơ sở in</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">13</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbThuTucDetail','')">Thay đổi thông tin đăng ký hoạt động cơ sở in</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">14</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbThuTucDetail','')">Cấp giấy phép hoạt động in</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">15</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbThuTucDetail','')">Cấp lại giấy phép hoạt động in</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">16</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbThuTucDetail','')">Cấp lại giấy phép hoạt động in xuất bản phẩm</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">17</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbThuTucDetail','')">Cấp đổi giấy phép hoạt động in xuất bản phẩm</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">18</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl18_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl18$lbThuTucDetail','')">Chuyển nhượng máy photocopy màu, máy in có chức năng photocopy màu</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl18_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl18$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">19</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl19_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl19$lbThuTucDetail','')">Đăng ký hoạt động phát hành xuất bản phẩm</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl19_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl19$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">20</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl20_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl20$lbThuTucDetail','')">Cấp giấy chứng nhận đăng ký thu tín hiệu truyền hình nước ngoài trực tiếp từ vệ tinh (TVRO)</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl20_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl20$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">21</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl21_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl21$lbThuTucDetail','')">Sửa đổi, bố sung giấy chứng nhận đăng ký thu tín hiệu truyền hình nước ngoài trực tiếp từ vệ tinh (TVRO)</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl21_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl21$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">22</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl22_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl22$lbThuTucDetail','')">Sửa đổi, bổ sung giấy phép thiết lập trang thông tin điện tử tổng hợp</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl22_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl22$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">23</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl23_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl23$lbThuTucDetail','')">Gia hạn giấy phép thiết lập trang thông tin điện tử tổng hợp</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl23_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl23$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">24</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl24_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl24$lbThuTucDetail','')">Cấp lại giấy phép thiết lập trang thông tin điện tử tổng hợp</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl24_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl24$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">25</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl25_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl25$lbThuTucDetail','')">Thông báo thời gian chính thức cung cấp dịch vụ trò chơi điện tử G1 trên mạng</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl25_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl25$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">26</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl26_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl26$lbThuTucDetail','')">Thông báo thay đổi trụ sở chính nhưng vẫn trong cùng một tỉnh, thành phố, văn phòng giao dịch, địa chỉ cho thuê máy chủ của doanh nghiệp cung cấp dịch vụ trò chơi điện tử G1 trên mạng</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl26_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl26$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">27</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl27_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl27$lbThuTucDetail','')">Thông báo thay đổi phần vốn góp dẫn đến thay đổi thành viên góp vốn (hoặc cổ đông) có phần vốn góp từ 30% vốn điều lệ trở lên của doanh nghiệp cung cấp dịch vụ trò chơi điện tử G1 trên mạng</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl27_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl27$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">28</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl28_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl28$lbThuTucDetail','')">Thông báo thời gian chính thức cung cấp trò chơi điện tử trên mạng</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl28_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl28$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">29</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl29_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl29$lbThuTucDetail','')">Thông báo thay đổi phương thức, phạm vi cung cấp dịch vụ trò chơi điện tử G1 trên mạng đã được phê duyệt</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl29_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl29$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">30</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl30_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl30$lbThuTucDetail','')">Thông báo thời gian chính thức bắt đầu cung cấp trò chơi G2, G3, G4 trên mạng cho công cộng</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl30_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl30$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">31</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl31_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl31$lbThuTucDetail','')">Thông báo thay đổi tên miền trang thông tin điện tử (trên Internet), kênh phân phối trò chơi (trên mạng Viễn thông di động), thể loại trò chơi G2, G3, G4</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl31_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl31$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">32</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl32_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl32$lbThuTucDetail','')">Thông báo thay đổi phần vốn góp dẫn đến thay đổi thành viên góp vốn (hoặc cổ đông) có phần vốn góp từ 30% vốn điều lệ trở lên của doanh nghiệp đã được cấp giấy chứng nhận đăng ký cung cấp dịch vụ trò chơi điện tử G2, G3, G4 trên mạng</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl32_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl32$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">33</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl33_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl33$lbThuTucDetail','')">Thẩm định thiết kế sơ bộ (hoặc thiết kế cơ sở) dự án Công nghệ Thông tin</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl33_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl33$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">34</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl34_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl34$lbThuTucDetail','')">Thủ tục Thẩm định và phê duyệt Thiết kế thi công – Tổng dự toán dự án CNTT (đối với dự án CNTT do UBND cấp xã quyết định đầu tư theo thẩm quyền được UBND cấp trên giao)</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl34_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl34$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">35</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl35_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl35$lbThuTucDetail','')">Thẩm định hồ sơ cho phép doanh nghiệp viễn thông mở rộng, nâng cấp mạng lưới dịch vụ viễn thông trên địa bàn tỉnh</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl35_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl35$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">36</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl36_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl36$lbThuTucDetail','')">Thẩm định hồ sơ đề nghị cấp, gia hạn, sửa đổi, bổ sung nội dung Giấy phép sử dụng tần số và thiết bị vô tuyến điện đối với đài truyền thanh không dây xã, phường, thị trấn</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl36_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl36$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">37</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl37_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl37$lbThuTucDetail','')">Thẩm định thiết kế, dự toán công trình thuộc lĩnh vực bưu chính, viễn thông</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl37_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl37$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">38</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl38_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl38$lbThuTucDetail','')">Cấp giấy phép cung ứng dịch vụ thư trong phạm vi nội tỉnh</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl38_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl38$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">39</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl39_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl39$lbThuTucDetail','')">Cấp văn bản xác nhận thông báo hoạt động bưu chính</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl39_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl39$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">40</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl40_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl40$lbThuTucDetail','')">Sửa đổi, bổ sung giấy phép cung ứng dịch vụ thư trong phạm vi nội tỉnh</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl40_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl40$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">41</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl41_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl41$lbThuTucDetail','')">Cấp lại giấy phép cung ứng dịch vụ thư trong phạm vi nội tỉnh khi hết hạn</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl41_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl41$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">42</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl42_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl42$lbThuTucDetail','')">Cấp lại giấy phép cung ứng dịch vụ thư trong phạm vi nội tỉnh, văn bản xác nhận thông báo hoạt động bưu chính khi bị mất hoặc hư hỏng không sử dụng được</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl42_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl42$lbDangKy','')">Đăng ký</a></td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1">43</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl43_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl43$lbThuTucDetail','')">Thẩm định vị trí xây dựng các trạm thu, phát sóng thông tin di động (BTS)</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl43_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl43$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">44</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl44_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl44$lbThuTucDetail','')">Thẩm định hồ sơ xin cấp, gia hạn, sửa đổi, bổ sung giấy phép sử dụng tần số đối với các thiết bị đặt trên các phương tiện nghề cá</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl44_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl44$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">45</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl45_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl45$lbThuTucDetail','')">Thẩm định trình UBND tỉnh cho phép doanh nghiệp viễn thông thiết lập mạng và cung cấp dịch vụ viễn thông trên địa bàn</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl45_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl45$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">46</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl46_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl46$lbThuTucDetail','')">Thay đổi nội dung ghi trong Giấy phép xuất bản bản tin</a>
                    </td>
                    <td>Sở Thông tin và Truyền thông</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl46_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl46$lbDangKy','')">Đăng ký</a></td>
                </tr>































































































































































































































































































































































                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Cấp giấy phép cho hoạt động xây dựng công trình quốc phòng, an ninh, công trình giao thông, thuỷ lợi, công trình ngầm phục vụ phát triển kinh tế xã hội, hệ thống giếng khai thác nước ngầm, trạm bơm, âu thuyền; các công trình xây dựng theo dự án đầu tư do Thủ tướng Chính phủ phê duyệt (được Bộ Nông nghiệp và PTNT thẩm định) thuộc bãi sông nơi chưa có công trình xây dựng</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Cấp giấy phép vận chuyển trên đê</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Cấp giấy phép cho hoạt động xây dựng cống qua đê; xây dựng công trình đặc biệt trong phạm vi bảo vệ đê điều, bãi sông, lòng sông</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Cấp giấy phép cho hoạt động sử dụng đê, kè bảo vệ đê, cống qua đê làm nơi neo đậu tàu thuyền, bè, mảng</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">Cấp giấy phép cho hoạt động nạo vét luồng lạch trong phạm vi bảo vệ đê điều</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">Cấp giấy phép cho hoạt động khoan đào trong phạm vi bảo vệ đê điều</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">Cấp giấy phép cho hoạt động để vật liệu, khai thác đất, đá, cát, sỏi, khoáng sản khác, đào ao, giếng ở bãi sông</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">8</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbThuTucDetail','')">Cấp giấy phép cho hoạt động cắt xẻ đê để xây dựng công trình trong phạm vi bảo vệ đê điều</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">9</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbThuTucDetail','')">Cấp giấy phép cho các hoạt động cải tạo công trình giao thông liên quan đến đê điều</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">10</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbThuTucDetail','')">Phê duyệt Phương án bán đấu giá cây đứng trong khai thác gỗ</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">11</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbThuTucDetail','')">Bố trí, sắp xếp, ổn định dân cư ngoại tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">12</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbThuTucDetail','')">Công nhận nghề truyền thống, làng nghề, làng nghề truyền thống
                        </a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">13</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbThuTucDetail','')">Cấp, gia hạn, điều chỉnh nội dung Giấy phép xả nước thải vào hệ thống công trình thuỷ lợi</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">14</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbThuTucDetail','')">Gia hạn hoặc điều chỉnh bổ sung Giấy phép cho các hoạt động trong phạm vi bảo vệ công trình thủy lợi</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">15</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbThuTucDetail','')">Cấp Giấy phép xả nước thải vào hệ thống công trình thuỷ lợi</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">16</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbThuTucDetail','')">Cấp Giấy phép cho các hoạt động trong phạm vi bảo vệ công trình thủy lợi</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">17</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbThuTucDetail','')">Gia hạn giấy phép cho các hoạt động có liên quan trong lĩnh vực bảo vệ đê điều, bảo vệ hành lang thoát lũ</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">18</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl18_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl18$lbThuTucDetail','')">Phê duyệt Phương án trồng rừng thay thế diện tích rừng chuyển mục đích sử dụng sang mục đích khác không phải Lâm nghiệp</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl18_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl18$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">19</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl19_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl19$lbThuTucDetail','')">Phê duyệt phương án chuyển đổi mục đích sử dụng rừng sang mục đích không phải lâm nghiệp</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl19_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl19$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">20</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl20_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl20$lbThuTucDetail','')">Phê duyệt chuyển đất rừng, đất lâm nghiệp sang trồng cao su đối với chủ đầu tư trồng cao su là tổ chức</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl20_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl20$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">21</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl21_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl21$lbThuTucDetail','')">Hỗ trợ kinh phí thực hiện chính sách khuyến khích phát triển nông nghiệp, nông thôn thực hiện Tái cơ cấu ngành nông nghiệp Hà Tĩnh theo hướng nâng cao giá trị gia tăng và phát triển bền vững, gắn với xây dựng nông thôn mới</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl21_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl21$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">22</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl22_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl22$lbThuTucDetail','')">Cấp quyết định cho thuê đất đối với tổ chức đang sử dụng đất thuộc đối tượng phải thuê đất nhưng chưa chuyển sang thuê đất theo quy định của Luật Đất đai năm 2013</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl22_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl22$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">23</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl23_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl23$lbThuTucDetail','')">Cấp quyết định công nhận quyền sử dụng đất cho tổ chức đang sử dụng đất nhưng không có giấy tờ về quyền sử dụng đất theo quy định của Luật Đất đai năm 2013</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl23_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl23$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">24</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl24_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl24$lbThuTucDetail','')">Cấp quyết định cho phép chuyển mục đích sử dụng đất ngoài Khu kinh tế, Khu công nghệ cao</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl24_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl24$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">25</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl25_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl25$lbThuTucDetail','')">Cấp quyết định giao đất, cho thuê đất ngoài khu kinh tế, khu công nghệ cao</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl25_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl25$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">26</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl26_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl26$lbThuTucDetail','')">Cấp quyết định gia hạn sử dụng đất ngoài khu công nghệ cao, khu kinh tế</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl26_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl26$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">27</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl27_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl27$lbThuTucDetail','')">Cho phép trả lại giấy phép khai thác tận thu khoáng sản</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl27_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl27$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">28</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl28_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl28$lbThuTucDetail','')">Cấp gia hạn giấy phép khai thác tận thu khoáng sản</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl28_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl28$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">29</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl29_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl29$lbThuTucDetail','')">Cấp giấy phép khai thác tận thu khoáng sản</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl29_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl29$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">30</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl30_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl30$lbThuTucDetail','')">Cho phép trả lại giấy phép khai thác khoáng sản hoặc trả lại một phần diện tích khai thác khoáng sản</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl30_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl30$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">31</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl31_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl31$lbThuTucDetail','')">Cho phép chuyển nhượng quyền khai thác khoáng sản</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl31_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl31$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">32</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl32_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl32$lbThuTucDetail','')">Cấp gia hạn giấy phép khai thác khoáng sản</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl32_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl32$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">33</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl33_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl33$lbThuTucDetail','')">Cấp giấy phép khai thác khoáng sản</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl33_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl33$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">34</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl34_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl34$lbThuTucDetail','')">Phê duyệt trữ lượng khoáng sản</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl34_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl34$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">35</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl35_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl35$lbThuTucDetail','')">Cho phép trả lại giấy phép thăm dò khoáng sản hoặc trả lại một phần diện tích thăm dò khoáng sản</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl35_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl35$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">36</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl36_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl36$lbThuTucDetail','')">Cho phép chuyển nhượng quyền thăm dò khoáng sản</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl36_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl36$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">37</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl37_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl37$lbThuTucDetail','')">Phê duyệt đề án đóng cửa mỏ khoáng sản</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl37_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl37$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">38</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl38_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl38$lbThuTucDetail','')">Cấp gia hạn giấy phép thăm dò khoáng sản</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl38_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl38$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">39</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl39_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl39$lbThuTucDetail','')">Cấp giấy phép thăm dò khoáng sản</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl39_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl39$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">40</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl40_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl40$lbThuTucDetail','')">Cấp gia hạn, điều chỉnh Giấy phép khai thác, sử dụng nước dưới đất đối với các công trình có lưu lượng từ 1.000m3/ngày.đêm đến dưới 3.000m3/ngày.đêm</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl40_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl40$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">41</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl41_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl41$lbThuTucDetail','')">Cấp Giấy phép khai thác, sử dụng nước dưới đất đối với các công trình có lưu lượng từ 1.000m3/ngày.đêm đến dưới 3.000m3/ngày.đêm</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl41_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl41$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">42</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl42_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl42$lbThuTucDetail','')">Cấp gia hạn, điều chỉnh Giấy phép thăm dò nước dưới đất đối với các công trình có lưu lượng từ 1.000m3/ngày.đêm đến dưới 3.000m3/ngày.đêm</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl42_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl42$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">43</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl43_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl43$lbThuTucDetail','')">Cấp Giấy phép thăm dò nước dưới đất đối với các công trình có lưu lượng từ 1.000m3/ngày.đêm đến dưới 3.000m3/ngày.đêm.</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl43_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl43$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">44</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl44_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl44$lbThuTucDetail','')">Cấp giấy xác nhận hoàn thành từng phần hoặc toàn bộ Phương án cải tạo phục hồi môi trường /Phương án cải tạo phục hồi môi trường bổ sung</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl44_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl44$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">45</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl45_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl45$lbThuTucDetail','')">Phê duyệt Phương án Cải tạo phục hồi môi trường/Phương án Cải tạo phục hồi môi trường bổ sung (Phương án/Phương án bổ sung)</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl45_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl45$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">46</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl46_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl46$lbThuTucDetail','')">Phê duyệt đề án bảo vệ môi trường chi tiết (Đề án BVMT chi tiết)</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl46_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl46$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">47</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl47_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl47$lbThuTucDetail','')">Phê duyệt báo cáo đánh giá tác động môi trường (ĐTM)</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl47_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl47$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">48</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl48_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl48$lbThuTucDetail','')">Cấp Giấy phép khai thác, sử dụng nước mặt: phục vụ sản xuất nông nghiệp, nuôi trồng thủy sản với lưu lượng từ 1m3/giây đến dưới 2m3/giây; để phát điện với công suất lắp máy từ 1.000KW đến dưới 2.000KW; cho mục đích khác với lưu lượng từ 30.000m3/ngày.đêm đến dưới 50.000m3/ngày.đêm</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl48_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl48$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">49</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl49_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl49$lbThuTucDetail','')">Cấp Giấy phép xả nước thải vào nguồn nước: với lưu lượng từ 10.000m3/ngày.đêm đến dưới 30.000m3/ngày.đêm đối với hoạt động nuôi trồng thủy sản; nước với lưu lượng từ 1.000m3 đến dưới 3.000m3/ngày.đêm đối với các hoạt động khác</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl49_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl49$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">50</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl50_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl50$lbThuTucDetail','')">Cấp gia hạn, điều chỉnh Giấy phép khai thác, sử dụng nước biển cho mục đích sản xuất, kinh doanh, dịch vụ với lưu lượng từ 50.000m3/ngày.đêm đến dưới 100.000m3/ngày.đêm</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl50_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl50$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">51</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl51_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl51$lbThuTucDetail','')">Cấp gia hạn, điều chỉnh Giấy phép khai thác, sử dụng nước mặt phục vụ sản xuất nông nghiệp, nuôi trồng thủy sản với lưu lượng từ 1m3/giây đến dưới 2m3/giây; để phát điện với công suất lắp máy từ 1.000KW đến dưới 2.000KW; cho mục đích khác với lưu lượng từ 30.000m3/ngày.đêm đến dưới 50.000m3/ngày.đêm</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl51_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl51$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">52</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl52_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl52$lbThuTucDetail','')">Cấp Giấy phép khai thác, sử dụng nước biển cho mục đích sản xuất, kinh doanh, dịch vụ với lưu lượng từ 50.000m3/ngày đêm đến dưới 100.000m3/ngày đêm</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl52_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl52$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">53</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl53_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl53$lbThuTucDetail','')">Cấp lại Giấy phép hành nghề khoan nước dưới đất với quy mô vừa</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl53_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl53$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">54</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl54_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl54$lbThuTucDetail','')">Cấp gia hạn, điều chỉnh Giấy phép hành nghề khoan nước dưới đất với quy mô vừa</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl54_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl54$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">55</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl55_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl55$lbThuTucDetail','')">Cấp Giấy phép hành nghề khoan nước dưới đất với quy mô vừa</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl55_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl55$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">56</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl56_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl56$lbThuTucDetail','')">Cấp lại Giấy phép hoạt động tài nguyên nước</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl56_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl56$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">57</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl57_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl57$lbThuTucDetail','')">Cấp gia hạn, điều chỉnh Giấy phép xả nước thải vào nguồn nước: với lưu lượng từ 10.000m3/ngày.đêm đến dưới 30.000m3/ngày.đêm đối với hoạt động nuôi trồng thủy sản; nước với lưu lượng từ 1.000m3 đến dưới 3.000m3/ngày.đêm đối với các hoạt động khác</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl57_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl57$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">58</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl58_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl58$lbThuTucDetail','')">Cấp sửa đổi, bổ sung Quyết định giao khu vực biển trong phạm vi vùng biển 03 hải lý, trừ các khu vực biển thuộc thẩm quyền giao của Thủ tướng Chính phủ, Bộ Tài nguyên và Môi trường được quy định tại điểm a và b khoản 1, Điều 10 Nghị định số 51/2014/NĐ-CP</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl58_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl58$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">59</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl59_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl59$lbThuTucDetail','')">Cấp gia hạn Quyết định giao khu vực biển trong phạm vi vùng biển 03 hải lý, trừ các khu vực biển thuộc thẩm quyền giao của Thủ tướng Chính phủ, Bộ Tài nguyên và Môi trường được quy định tại điểm a và b khoản 1, Điều 10 Nghị định số 51/2014/NĐ-CP</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl59_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl59$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">60</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl60_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl60$lbThuTucDetail','')">Cấp quyết định giao khu vực biển trong phạm vi vùng biển 03 hải lý, trừ các khu vực biển thuộc thẩm quyền giao của Thủ tướng Chính phủ, Bộ Tài nguyên và Môi trường được quy định tại điểm a và b khoản 1, Điều 10 Nghị định số 51/2014/NĐ-CP</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl60_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl60$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">61</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl61_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl61$lbThuTucDetail','')">Quyết định thu hồi khu vực biển trong phạm vi vùng biển 03 hải lý, trừ các khu vực biển thuộc thẩm quyền giao của Thủ tướng Chính phủ, Bộ Tài nguyên và Môi trường được quy định tại điểm a và b khoản 1 Điều 10 Nghị định số 51/2014/NĐ-CP</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl61_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl61$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">62</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl62_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl62$lbThuTucDetail','')">Cho phép trả lại khu vực biển trong phạm vi vùng biển 03 hải lý, trừ các khu vực biển thuộc thẩm quyền giao của Thủ tướng Chính phủ, Bộ Tài nguyên và Môi trường được quy định tại điểm a và b khoản 1 Điều 10 Nghị định số 51/2014/NĐ-CP</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl62_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl62$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">63</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl63_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl63$lbThuTucDetail','')">Phê duyệt kế hoạch ứng phó sự cố tràn dầu cấp tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl63_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl63$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">64</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl64_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl64$lbThuTucDetail','')">Công nhận Trường Mầm non đạt chuẩn Quốc gia</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl64_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl64$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">65</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl65_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl65$lbThuTucDetail','')">Công nhận Trường Tiểu học đạt chuẩn Quốc gia</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl65_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl65$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">66</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl66_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl66$lbThuTucDetail','')">Công nhận Trường Trung học cơ sở đạt chuẩn Quốc gia</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl66_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl66$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">67</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl67_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl67$lbThuTucDetail','')">Công nhận Trường Trung học phổ thông đạt chuẩn Quốc gia</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl67_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl67$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">68</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl68_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl68$lbThuTucDetail','')">Giải thể Trường Trung cấp chuyên nghiệp thuộc tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl68_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl68$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">69</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl69_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl69$lbThuTucDetail','')">Dự thảo Quyết định của UBND tỉnh về việc giải thể trường trung cấp chuyên nghiệp thuộc tỉnh.</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl69_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl69$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">70</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl70_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl70$lbThuTucDetail','')">Thành lập trường Trung cấp chuyên nghiệp thuộc tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl70_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl70$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">71</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl71_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl71$lbThuTucDetail','')">Sáp nhập, chia tách trường Trung học phổ thông</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl71_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl71$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">72</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl72_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl72$lbThuTucDetail','')">Giải thể Trường Trung học phổ thông</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl72_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl72$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">73</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl73_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl73$lbThuTucDetail','')">Thành lập Trường Trung học phổ thông</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl73_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl73$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">74</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl74_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl74$lbThuTucDetail','')">Phê duyệt quyết toán dự án giải phóng mặt bằng, tái định cư</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl74_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl74$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">75</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl75_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl75$lbThuTucDetail','')">Phê duyệt quyết toán dự án quy hoạch hoàn thành, chi phí chuẩn bị đầu tư các dự án sử dụng vốn nhà nước do UBND tỉnh quyết định đầu tư</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl75_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl75$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">76</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl76_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl76$lbThuTucDetail','')">Phê duyệt quyết toán hạng mục, gói thầu hoàn thành các dự án sử dụng vốn Nhà nước do UBND tỉnh quyết định đầu tư</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl76_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl76$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">77</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl77_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl77$lbThuTucDetail','')">Phê duyệt quyết toán dự án hoàn thành các dự án sử dụng vốn nhà nước do UBND tỉnh quyết định đầu tư</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl77_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl77$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">78</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl78_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl78$lbThuTucDetail','')">Chuyển nhượng toàn bộ dự án khu đô thị mới, dự án, khu nhà ở, dự án hạ tầng khu công nghiệp</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl78_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl78$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">79</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl79_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl79$lbThuTucDetail','')">Phê duyệt Đồ án quy hoạch</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl79_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl79$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">80</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl80_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl80$lbThuTucDetail','')">Phê duyệt nhiệm vụ quy hoạch</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl80_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl80$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">81</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl81_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl81$lbThuTucDetail','')">Phê duyệt Quy hoạch tổng mặt bằng sử dụng đất xây dựng công trình (dự án đầu tư)</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl81_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl81$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">82</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl82_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl82$lbThuTucDetail','')">Giới thiệu địa điểm xây dựng công trình (dự án đầu tư)</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl82_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl82$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">83</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl83_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl83$lbThuTucDetail','')">Cho phép thành lập trường trung cấp nghề, trung tâm dạy nghề có vốn đầu tư nước ngoài</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl83_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl83$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">84</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl84_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl84$lbThuTucDetail','')">Giải thể trường trung cấp nghề/trung tâm dạy nghề công lập thuộc tỉnh và trường trung cấp nghề/trung tâm dạy nghề tư thục trên địa bàn tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl84_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl84$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">85</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl85_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl85$lbThuTucDetail','')">Chia, tách, sáp nhập trường trung cấp nghề/trung tâm dạy nghề công lập thuộc tỉnh và trường trung cấp nghề/trung tâm dạy nghề tư thục trên địa bàn tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl85_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl85$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">86</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl86_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl86$lbThuTucDetail','')">Thành lập trung tâm dạy nghề tư thục trên địa bàn tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl86_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl86$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">87</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl87_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl87$lbThuTucDetail','')">Thành lập trung tâm dạy nghề công lập trên địa bàn tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl87_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl87$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">88</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl88_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl88$lbThuTucDetail','')">Thành lập trường trung cấp nghề tư thục thuộc tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl88_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl88$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">89</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl89_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl89$lbThuTucDetail','')">Thành lập trường trung cấp nghề công lập thuộc tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl89_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl89$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">90</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl90_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl90$lbThuTucDetail','')">Thành lập mới hoặc thành lập lại Trung tâm dịch vụ việc làm</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl90_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl90$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">91</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl91_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl91$lbThuTucDetail','')">Phê duyệt quỹ tiền lương, thù lao, tiền thưởng đối với thành viên HĐTV hoặc Chủ tịch công ty, Kiểm soát viên, Tổng Giám đốc hoặc Giám đốc, Phó Tổng giám đốc hoặc Phó Giám đốc, Kế toán trưởng trong công ty TNHHMTV do Nhà nước làm chủ sở hữu</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl91_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl91$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">92</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl92_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl92$lbThuTucDetail','')">Trợ cấp một lần đối với người được cử đi làm chuyên gia sang giúp Lào và Campuchia</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl92_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl92$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">93</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl93_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl93$lbThuTucDetail','')">Xếp hạng công ty Nhà nước</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl93_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl93$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">94</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl94_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl94$lbThuTucDetail','')">Trợ cấp mai táng phí cho thân nhân đối tượng hưởng theo Quyết định số 62; 290; Cựu thanh niên xung phong, Cựu chiến binh hoàn thành nhiệm vụ trong kháng chiến</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl94_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl94$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">95</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl95_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl95$lbThuTucDetail','')">Cấp Thẻ bảo hiểm y tế đối với đối tượng hưởng trợ cấp theo Quyết định số 62; 290; Cựu thanh niên xung phong, Cựu chiến binh hoàn thành nhiệm vụ trong kháng chiến</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl95_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl95$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">96</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl96_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl96$lbThuTucDetail','')">Phê duyệt nội dung chương trình, dự án, khoản viện trợ phi dự án sử dụng vốn ODA</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl96_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl96$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">97</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl97_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl97$lbThuTucDetail','')">Phê duyệt chương trình, dự án, phi dự án (khoản viện trợ PCPNN) viện trợ Phi Chính phủ nước ngoài (NGO)</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl97_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl97$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">98</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl98_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl98$lbThuTucDetail','')">Chấp thuận chủ trương đầu tư các dự án có sử dụng đất trên địa bàn tỉnh Hà Tĩnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl98_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl98$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">99</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl99_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl99$lbThuTucDetail','')">Phê duyệt kế hoạch đấu thầu</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl99_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl99$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">100</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl100_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl100$lbThuTucDetail','')">Phê duyệt Báo cáo Kinh tế kỹ thuật</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl100_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl100$lbDangKy','')">Đăng ký</a></td>
                </tr>






























































































































































































































































































































































                <tr role="row" class="odd">
                    <td class="sorting_1">101</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl101_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl101$lbThuTucDetail','')">Phê duyệt báo cáo nghiên cứu khả thi</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl101_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl101$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">102</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl102_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl102$lbThuTucDetail','')">Cho phép Đoàn vào (các đoàn nước ngoài vào thăm và làm việc trên địa bàn tỉnh)</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl102_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl102$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">103</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl103_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl103$lbThuTucDetail','')">Tổ chức, quản lý Hội nghị, hội thảo, ký kết và thực hiện thỏa thuận quốc tế</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl103_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl103$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">104</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl104_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl104$lbThuTucDetail','')">Hướng dẫn và quản lý các hoạt động thông tin báo chí của phóng viên nước ngoài tại địa phương</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl104_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl104$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">105</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl105_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl105$lbThuTucDetail','')">Tiếp nhận huân chương, huy chương hoặc các danh hiệu khác của các tổ chức, cá nhân nước ngoài hoặc các tổ chức quốc tế tặng</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl105_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl105$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">106</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl106_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl106$lbThuTucDetail','')">Cấp điều chỉnh Giấy phép sử dụng Vật liệu nổ công nghiệp</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl106_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl106$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">107</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl107_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl107$lbThuTucDetail','')">Cấp lại Giấy phép sử dụng Vật liệu nổ công nghiệp</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl107_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl107$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">108</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl108_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl108$lbThuTucDetail','')">Cấp Giấy phép sử dụng Vật liệu nổ công nghiệp</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl108_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl108$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">109</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl109_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl109$lbThuTucDetail','')">Công nhận sáng kiến cấp tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl109_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl109$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">110</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl110_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl110$lbThuTucDetail','')">Cấp giấy phép khai quật khảo cổ khẩn cấp</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl110_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl110$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">111</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl111_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl111$lbThuTucDetail','')">Xếp hạng di tích cấp tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl111_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl111$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">112</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl112_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl112$lbThuTucDetail','')">Cấp giấy phép hoạt động bảo tàng ngoài công lập</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl112_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl112$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">113</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl113_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl113$lbThuTucDetail','')">Cấp lại Giấy phép thành lập Văn phòng đại diện của doanh nghiệp quảng cáo nước ngoài tại Việt Nam</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl113_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl113$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">114</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl114_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl114$lbThuTucDetail','')">Sửa đổi, bổ sung Giấy phép thành lập Văn phòng đại diện của doanh nghiệp quảng cáo nước ngoài tại Việt Nam</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl114_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl114$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">115</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl115_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl115$lbThuTucDetail','')">Cấp giấy phép thành lập Văn phòng đại diện của doanh nghiệp quảng cáo nước ngoài tại Việt Nam</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl115_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl115$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">116</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl116_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl116$lbThuTucDetail','')">Cấp giấy phép xây dựng tượng đài, tranh hoành tráng phần mỹ thuật đối với công trình dưới 300 triệu đồng</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl116_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl116$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">117</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl117_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl117$lbThuTucDetail','')">Đăng cai tổ chức Giải thi đấu vô địch từng môn thể thao của tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl117_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl117$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">118</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl118_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl118$lbThuTucDetail','')">Cho phép thiết lập mạng và cung cấp dịch vụ viễn thông trên địa bàn</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl118_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl118$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">119</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl119_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl119$lbThuTucDetail','')">Đăng ký lại việc nuôi con nuôi có yếu tố nước ngoài</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl119_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl119$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">120</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl120_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl120$lbThuTucDetail','')">Đăng ký nuôi con nuôi có yếu tố nước ngoài</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl120_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl120$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">121</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl121_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl121$lbThuTucDetail','')">Đăng ký kết hôn có yếu tố nước ngoài</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl121_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl121$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">122</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl122_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl122$lbThuTucDetail','')">Sáp nhập Văn phòng công chứng</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl122_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl122$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">123</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl123_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl123$lbThuTucDetail','')">Hợp nhất Văn phòng công chứng</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl123_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl123$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">124</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl124_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl124$lbThuTucDetail','')">Thành lập Văn phòng công chứng</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl124_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl124$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">125</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl125_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl125$lbThuTucDetail','')">Chuyển đổi loại hình Văn phòng giám định tư pháp</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl125_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl125$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">126</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl126_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl126$lbThuTucDetail','')">Thay đổi, bổ sung lĩnh vực giám định của Văn phòng giám định tư pháp</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl126_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl126$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">127</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl127_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl127$lbThuTucDetail','')">Thành lập Văn phòng giám định tư pháp</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl127_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl127$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">128</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl128_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl128$lbThuTucDetail','')">Chuyển nhượng Văn phòng công chứng</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl128_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl128$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">129</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl129_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl129$lbThuTucDetail','')">Giải quyết tố cáo tại cấp tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl129_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl129$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">130</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl130_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl130$lbThuTucDetail','')">Giải quyết khiếu nại lần hai tại cấp tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl130_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl130$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">131</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl131_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl131$lbThuTucDetail','')">Giải quyết khiếu nại lần đầu tại cấp tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl131_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl131$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">132</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl132_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl132$lbThuTucDetail','')">Phê duyệt điều lệ Hội có phạm vi hoạt động trong tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl132_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl132$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">133</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl133_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl133$lbThuTucDetail','')">Chia, tách; sáp nhập; hợp nhất Hội có phạm vi hoạt động trong tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl133_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl133$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">134</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl134_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl134$lbThuTucDetail','')">Thành lập Hội có phạm vi hoạt động trong tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl134_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl134$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">135</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl135_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl135$lbThuTucDetail','')">Phê duyệt kết quả thi nâng ngạch công chức lên ngạch cán sự, chuyên viên hoặc tương đương</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl135_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl135$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">136</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl136_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl136$lbThuTucDetail','')">Tuyển dụng công chức</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl136_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl136$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">137</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl137_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl137$lbThuTucDetail','')">Tổ chức lại, giải thể tổ chức sự nghiệp công lập</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl137_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl137$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">138</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl138_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl138$lbThuTucDetail','')">Thành lập tổ chức sự nghiệp công lập</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl138_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl138$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">139</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl139_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl139$lbThuTucDetail','')">Chấp thuận việc thành lập, chia, tách, sáp nhập, hợp nhất tổ chức tôn giáo trực thuộc (tổ chức tôn giáo cơ sở) đối với các trường hợp quy định tại khoản 2, Điều 17, Pháp lệnh Tín ngưỡng, Tôn giáo</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl139_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl139$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">140</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl140_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl140$lbThuTucDetail','')">Đề nghị UBND tỉnh trình Chính phủ tặng Cờ thi đua</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl140_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl140$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">141</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl141_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl141$lbThuTucDetail','')">Công nhận tổ chức tôn giáo có phạm vi hoạt động chủ yếu ở một tỉnh, thành phố trực thuộc Trung ương</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl141_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl141$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">142</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl142_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl142$lbThuTucDetail','')">Chấp thuận việc tổ chức các lễ hội tín ngưỡng</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl142_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl142$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">143</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl143_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl143$lbThuTucDetail','')">Đề nghị Chủ tịch UBND tỉnh tặng Danh hiệu Chiến sỹ thi đua cấp tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl143_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl143$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">144</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl144_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl144$lbThuTucDetail','')">Đổi tên Hội có phạm vi hoạt động trong tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl144_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl144$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">145</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl145_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl145$lbThuTucDetail','')">Chấp thuận việc mở lớp bồi dưỡng những người chuyên hoạt động tôn giáo
                        </a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl145_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl145$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">146</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl146_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl146$lbThuTucDetail','')">Đề nghị Chủ tịch UBND tỉnh trình Chủ tịch nước khen thưởng Huân chương Độc lập các hạng</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl146_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl146$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">147</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl147_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl147$lbThuTucDetail','')">Cấp đăng ký hoạt động cho dòng tu, tu viện hoặc các tổ chức tu hành tập thể khác có phạm vi hoạt động ở nhiều quận, huyện, thị xã, thành phố trong phạm vi một tỉnh, thành phố trực thuộc Trung ương</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl147_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl147$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">148</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl148_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl148$lbThuTucDetail','')">Đề nghị Chủ tịch UBND tỉnh trình Chủ tịch nước tặng Huân chương Lao động các hạng</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl148_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl148$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">149</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl149_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl149$lbThuTucDetail','')">Cấp đăng ký cho Hội đoàn tôn giáo có phạm vi hoạt động nhiều quận, huyện, thành phố thuộc tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl149_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl149$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">150</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl150_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl150$lbThuTucDetail','')">Đề nghị phong tặng (truy tặng) danh hiệu Anh hùng Lao động cho tập thể, cá nhân</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl150_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl150$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">151</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl151_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl151$lbThuTucDetail','')">Tiếp nhận đăng ký người được phong chức, phong phẩm, bổ nhiệm, bầu cử, suy cử theo quy định tại khoản 2, Điều 19, Nghị định số 92/2012/NĐ-CP</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl151_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl151$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">152</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl152_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl152$lbThuTucDetail','')">Đề nghị UBND tỉnh trình Thủ tướng Chính phủ tặng Danh hiệu Chiến sỹ thi đua toàn quốc</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl152_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl152$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">153</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl153_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl153$lbThuTucDetail','')">Chấp thuận việc tổ chức cuộc lễ diễn ra ngoài cơ sở tôn giáo có sự tham gia của nhiều quận, huyện, thị xã, thành phố trong phạm vi một tỉnh hoặc từ nhiều thành phố trực thuộc Trung ương</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl153_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl153$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">154</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl154_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl154$lbThuTucDetail','')">Chấp thuận hoạt động tôn giáo ngoài chương trình đăng ký hằng năm có sự tham gia của tín đồ ngoài huyện, quận, thị xã, thành phố thuộc tỉnh hoặc ngoài tỉnh</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl154_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl154$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">155</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl155_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl155$lbThuTucDetail','')">Chấp thuận Hội nghị thường niên, Đại hội của tổ chức tôn giáo không thuộc quy định tại Điều 27, 28 Nghị định 92/2012/NĐ-CP</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl155_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl155$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">156</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl156_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl156$lbThuTucDetail','')">Chấp thuận việc tổ chức quyên góp vượt ra ngoài phạm vi một huyện của cơ sở tín ngưỡng, tôn giáo</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl156_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl156$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">157</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl157_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl157$lbThuTucDetail','')">Đề nghị UBND tỉnh trình Chủ tịch nước khen thưởng cho cá nhân có quá trình cống hiến</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl157_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl157$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">158</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl158_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl158$lbThuTucDetail','')">Chấp thuận việc đề nghị sinh hoạt tôn giáo của người nước ngoài tại cơ sở tôn giáo hợp pháp ở Việt Nam</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl158_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl158$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">159</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl159_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl159$lbThuTucDetail','')">Đề nghị UBND tỉnh trình Chủ tịch nước phong tặng (truy tặng) Danh hiệu Bà mẹ Việt Nam Anh hùng</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl159_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl159$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">160</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl160_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl160$lbThuTucDetail','')">Đăng ký hiến chương, điều lệ sửa đổi</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl160_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl160$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">161</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl161_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl161$lbThuTucDetail','')">Đăng ký thuyên chuyển nơi hoạt động tôn giáo của chức sắc, nhà tu hành vi phạm pháp luật đã bị xử lý</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl161_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl161$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">162</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl162_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl162$lbThuTucDetail','')">Đề nghị UBND tỉnh trình Chủ tịch nước phong tặng (truy tặng) Danh hiệu Anh hùng lực lượng vũ trang nhân dân cho tập thể và cá nhân</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl162_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl162$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">163</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl163_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl163$lbThuTucDetail','')">Đề nghị UBND tỉnh trình Chủ tịch nước cấp đổi hiện vật khen thưởng do mất mát, hư hỏng hoặc sai sót</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl163_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl163$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">164</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl164_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl164$lbThuTucDetail','')">Đề nghị Chủ tịch UBND tỉnh tặng 'Doanh nghiệp Hà Tĩnh tiêu biểu'</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl164_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl164$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">165</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl165_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl165$lbThuTucDetail','')">Đề nghị Chủ tịch UBND tỉnh tặng Bằng khen đối với thành tích thực hiện phong trào thi đua thường xuyên</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl165_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl165$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">166</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl166_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl166$lbThuTucDetail','')">Đề nghị Chủ tịch UBND tỉnh tặng Danh hiệu 'Doanh nhân Hà Tĩnh tiêu biểu'</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl166_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl166$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">167</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl167_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl167$lbThuTucDetail','')">Đề nghị Chủ tịch UBND tỉnh khen thưởng đối ngoại</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl167_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl167$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">168</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl168_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl168$lbThuTucDetail','')">Đề nghị Chủ tịch UBND tỉnh tặng Bằng khen trong phong trào thi đua chuyên đề, đột xuất</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl168_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl168$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">169</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl169_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl169$lbThuTucDetail','')">Đề nghị UBND tỉnh tặng Cờ thi đua đối với các đơn vị thuộc các huyện, thành phố, thị xã, các ngành, lĩnh vực</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl169_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl169$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">170</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl170_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl170$lbThuTucDetail','')">Đề nghị UBND tỉnh tặng Cờ thi đua cho các đơn vị trong khối thi đua</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl170_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl170$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">171</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl171_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl171$lbThuTucDetail','')">Đề nghị UBND tỉnh tặng danh hiệu 'Tập thể lao động xuất sắc', 'Đơn vị quyết thắng'</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl171_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl171$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">172</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl172_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl172$lbThuTucDetail','')">Đề nghị Chủ tịch UBND tỉnh trình Thủ tướng Chính phủ tặng Bằng khen</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl172_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl172$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">173</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl173_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl173$lbThuTucDetail','')">Phê duyệt dự án đầu tư xây dựng hoặc Báo cáo kinh tế - kỹ thuật</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl173_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl173$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">174</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl174_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl174$lbThuTucDetail','')">Phê duyệt thiết kế, dự toán xây dựng triển khai sau thiết kế cơ sở</a>
                    </td>
                    <td>Văn phòng Ủy ban nhân dân tỉnh Hà Tĩnh</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl174_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl174$lbDangKy','')">Đăng ký</a></td>
                </tr>
































                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Đăng ký đất đai lần đầu nhưng chưa có nhu cầu cấp Giấy chứng nhận quyền sử dụng đất, quyền sở hữu nhà ở và tài sản khác gắn liền với đất</a>
                    </td>
                    <td>Sở Tài Nguyên và Môi Trường</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Đăng ký, cấp Giấy chứng nhận quyền sử dụng đất lần đầu</a>
                    </td>
                    <td>Sở Tài Nguyên và Môi Trường</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Cấp đổi Giấy chứng nhận, Giấy chứng nhận quyền sở hữu nhà ở, Giấy chứng nhận quyền sở hữu công trình xây dựng</a>
                    </td>
                    <td>Sở Tài Nguyên và Môi Trường</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Cấp Sổ đăng ký chủ nguồn thải chất thải nguy hại</a>
                    </td>
                    <td>Sở Tài Nguyên và Môi Trường</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">Đính chính Giấy chứng nhận, Giấy chứng nhận quyền sở hữu nhà ở, Giấy chứng nhận quyền sở hữu công trình xây dựng đã cấp</a>
                    </td>
                    <td>Sở Tài Nguyên và Môi Trường</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">Cấp lại Sổ đăng ký chủ nguồn thải chất thải nguy hại</a>
                    </td>
                    <td>Sở Tài Nguyên và Môi Trường</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">Đăng ký biến động đất đai, tài sản gắn liền với đất do thay đổi thông tin về người được cấp Giấy chứng nhận (đổi tên hoặc giấy tờ pháp nhân, địa chỉ); giảm diện tích thửa đất do sạt lở tự nhiên; thay đổi về hạn chế quyền sử dụng đất; thay đổi về nghĩa vụ tài chính; thay đổi về tài sản gắn liền với đất so với nội dung đã đăng ký, cấp Giấy chứng nhận.</a>
                    </td>
                    <td>Sở Tài Nguyên và Môi Trường</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">8</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbThuTucDetail','')">Gia hạn sử dụng đất ngoài khu công nghệ cao, khu kinh tế</a>
                    </td>
                    <td>Sở Tài Nguyên và Môi Trường</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">9</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbThuTucDetail','')">Gia hạn giấy phép thăm dò khoáng sản</a>
                    </td>
                    <td>Sở Tài Nguyên và Môi Trường</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">10</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbThuTucDetail','')">Chuyển nhượng quyền thăm dò khoáng sản.</a>
                    </td>
                    <td>Sở Tài Nguyên và Môi Trường</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">11</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbThuTucDetail','')">Đóng cửa mỏ khoáng sản</a>
                    </td>
                    <td>Sở Tài Nguyên và Môi Trường</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">12</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbThuTucDetail','')">Cấp Giấy phép khai thác, sử dụng nước mặt cho sản xuất nông nghiệp, nuôi trồng thủy sản với lưu lượng dưới 2m3/giây; phát điện với công suất lắp máy dưới 2.000kw; cho các mục đích khác với lưu lượng dưới 50.000m3/ngày đêm; Cấp Giấy phép khai thác, sử dụng nước biển cho mục đích sản xuất, kinh doanh, dịch vụ với lưu lượng dưới 100.000m3/ngày đêm</a>
                    </td>
                    <td>Sở Tài Nguyên và Môi Trường</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">13</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbThuTucDetail','')">Gia hạn, điều chỉnh nội dung Giấy phép khai thác, sử dụng nước mặt cho sản xuất nông nghiệp, nuôi trồng thủy sản với lưu lượng dưới 2m3/giây; phát điện với công suất lắp máy dưới 2.000kw; cho các mục đích khác với lưu lượng dưới 50.000m3/ngày đêm; Gia hạn, điều chỉnh nội dung giấy phép nước biển cho mục đích sản xuất, kinh doanh, dịch vụ với lưu lượng dưới 100.000m3/ngày đêm</a>
                    </td>
                    <td>Sở Tài Nguyên và Môi Trường</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">14</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbThuTucDetail','')">Cấp lại Giấy phép hành nghề khoan nước dưới đất</a>
                    </td>
                    <td>Sở Tài Nguyên và Môi Trường</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">15</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbThuTucDetail','')">Cấp Giấy phép hoạt động dự báo, cảnh báo khí tượng thủy văn</a>
                    </td>
                    <td>Sở Tài nguyên và Môi trường</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbDangKy','')">Đăng ký</a></td>
                </tr>


                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Thẩm tra quyết toán dự án hoàn thành, tiểu dự án hoàn thành, hạng mục công trình hoàn thành, dự án dừng thực hiện vĩnh viễn đã có khối lượng thi công xây lắp sử dụng vốn nhà nước thuộc thẩm quyền UBND tỉnh quyết định đầu tư; Thẩm tra quyết toán dự án đầu tư xây dựng cơ bản sử dụng nguồn vốn sự nghiệp.</a>
                    </td>
                    <td>Sở Tài Chính</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Quyết toán dự án quy hoạch hoàn thành sử dụng nguồn vốn đầu tư phát triển  thuộc thẩm quyền UBND tỉnh phê duyệt đề cương nhiệm vụ; dự án dừng thực hiện vĩnh viễn chưa có khối lượng thi công xây lắp sử dụng vốn nhà nước thuộc thẩm quyền UBND tỉnh phê duyệt chủ trương đầu tư.</a>
                    </td>
                    <td>Sở Tài Chính</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Cấp mã số ĐVQHNS cho các đơn vị thuộc ngân sách địa phương (ngân sách cấp tỉnh, cấp huyện, cấp xã).</a>
                    </td>
                    <td>Sở Tài Chính</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Thẩm tra, phê duyệt quyết toán hoàn thành các dự án UBND tỉnh ủy quyền cấp Sở, Ngành phê duyệt quyết định đầu tư</a>
                    </td>
                    <td>Sở Tài Chính</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr>


















































































































                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">QLTM - Cấp Giấy phép thành lập Văn phòng đại diện của thương nhân nước ngoài tại Hà Tĩnh </a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">QLTM - Cấp lại Giấy phép thành lập Văn phòng đại diện của thương nhân nước ngoài tại Hà Tĩnh trong trường hợp Chuyển địa điểm đặt trụ sở của Văn phòng đại diện từ một tỉnh, thành phố trực thuộc Trung ương, hoặc khu vực địa lý thuộc phạm vi quản lý của một Ban quản lý đến một tỉnh, thành phố trực thuộc Trung ương khác hoặc khu vực địa lý thuộc phạm vi quản lý của một Ban quản lý khác. </a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">QLTM - Cấp lại Giấy phép thành lập Văn phòng đại diện của thương nhân nước ngoài tại Hà Tĩnh trong trường hợp Giấy phép thành lập Văn phòng đại diện bị mất, bị hủy hoại, bị hư hỏng hoặc bị tiêu hủy dưới mọi hình thức</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">QLTM - Chấm dứt hoạt động Văn phòng đại diện của thương nhân nước ngoài tại Hà Tĩnh </a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">QLNL - Cấp Giấy phép tư vấn giám sát thi công đường dây và trạm biến áp có cấp điện áp đến 35 kV, đăng ký kinh doanh tại địa phương</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">QLNL - Cấp Giấy phép tư vấn đầu tư xây dựng đường dây và trạm biến áp có cấp điện áp đến 35 kV, đăng ký kinh doanh tại địa phương</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">QLNL - Cấp Giấy phép hoạt động bán lẻ điện đến cấp điện áp 0,4 kV tại địa phương</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">8</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbThuTucDetail','')">QLCN - Cấp Giấy phép sản xuất rượu công nghiệp (quy mô dưới 3 triệu lít/năm)</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">9</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbThuTucDetail','')">QLCN - Cấp lại Giấy phép sản xuất rượu công nghiệp (quy mô dưới 3 triệu lít/năm) </a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">10</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbThuTucDetail','')">QLCN - Cấp sửa đổi, bổ sung Giấy phép sản xuất rượu công nghiệp (quy mô dưới 3 triệu lít/năm)</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">11</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbThuTucDetail','')">QLTM - Cấp Giấy phép mua bán nguyên liệu thuốc lá </a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">12</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbThuTucDetail','')">QLTM - Cấp lại Giấy phép mua bán nguyên liệu thuốc lá trong Trường hợp Giấy phép mua bán nguyên liệu thuốc lá đã được cấp hết thời hạn hiệu lực</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">13</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbThuTucDetail','')">QLTM - Cấp lại Giấy phép mua bán nguyên liệu thuốc lá trong Trường hợp Giấy phép mua bán nguyên liệu thuốc lá bị mất, bị tiêu hủy toàn bộ hoặc một phần, bị rách, nát hoặc bị cháy</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">14</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbThuTucDetail','')">QLTM - Cấp sửa đổi, bổ sung Giấy phép mua bán nguyên liệu thuốc lá</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">15</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbThuTucDetail','')">KTATMT - Cấp Giấy đăng ký sử dụng vật liệu nổ công nghiệp đối với Trường hợp đăng ký lần đầu</a>
                    </td>
                    <td>Sở Công Thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">16</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbThuTucDetail','')">KTATMT - Cấp Giấy đăng ký sử dụng vật liệu nổ công nghiệp đối với Trường hợp đăng ký đăng ký các địa điểm sử dụng tiếp theo</a>
                    </td>
                    <td>Sở Công Thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">17</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbThuTucDetail','')">KTATMT - Cấp Giấy chứng nhận cơ sở đủ điều kiện an toàn thực phẩm đối với cơ sở kinh doanh thực phẩm do Sở Công Thương thực hiện</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">18</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl18_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl18$lbThuTucDetail','')">KTATMT - Cấp lại Giấy chứng nhận đủ điều kiện an toàn thực phẩm đối với cơ sở kinh doanh thực phẩm do Sở Công Thương thực hiện Trường hợp cấp lại do Giấy chứng nhận bị mất hoặc bị hỏng</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl18_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl18$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">19</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl19_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl19$lbThuTucDetail','')">KTATMT - Cấp lại Giấy chứng nhận đủ điều kiện an toàn thực phẩm đối với cơ sở kinh doanh thực phẩm do Sở Công Thương thực hiện Trường hợp  do cơ sở thay đổi vị trí địa lý của địa điểm kinh doanh; thay đổi, bổ sung mặt hàng kinh doanh và khi Giấy chứng nhận hết hiệu lực</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl19_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl19$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">20</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl20_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl20$lbThuTucDetail','')">KTATMT - Cấp lại Giấy chứng nhận đủ điều kiện an toàn thực phẩm đối với cơ sở kinh doanh thực phẩm do Sở Công Thương thực hiện Trường hợp  do cơ sở có thay đổi tên cơ sở, chủ cơ sở hoặc người được ủy quyền, địa chỉ nhưng không thay đổi vị trí địa lý và toàn bộ quy trình kinh doanh:</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl20_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl20$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">21</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl21_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl21$lbThuTucDetail','')">KTATMT - Cấp Giấy chứng nhận đủ điều kiện an toàn thực phẩm đối với cơ sở sản xuất thực phẩm do Sở Công Thương thực hiện</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl21_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl21$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">22</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl22_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl22$lbThuTucDetail','')">KTATMT - Cấp lại Giấy chứng nhận đủ điều kiện an toàn thực phẩm đối với cơ sở sản xuất thực phẩm do Sở Công Thương thực hiện Trường hợp Giấy chứng nhận bị mất hoặc bị hỏng</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl22_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl22$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">23</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl23_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl23$lbThuTucDetail','')">KTATMT - Cấp Giấy xác nhận nội dung quảng cáo thực phẩm do Sở Công Thương thực hiện</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl23_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl23$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">24</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl24_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl24$lbThuTucDetail','')">KTATMT - Cấp lại Giấy xác nhận nội dung quảng cáo thực phẩm do Sở Công Thương thực hiện</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl24_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl24$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">25</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl25_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl25$lbThuTucDetail','')">KTATMT - Kiểm tra và cấp Giấy xác nhận kiến thức về an toàn thực phẩm thuộc thẩm quyền cấp của Sở Công Thương thực hiện.</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl25_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl25$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">26</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl26_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl26$lbThuTucDetail','')">QLTM - Cấp Giấy xác nhận đủ điều kiện làm tổng đại lý kinh doanh xăng dầu thuộc thẩm quyền cấp của Sở Công Thương</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl26_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl26$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">27</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl27_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl27$lbThuTucDetail','')">LTM - Cấp sửa đổi, bổ sung Giấy xác nhận đủ điều kiện làm tổng đại lý kinh doanh xăng dầu thuộc thẩm quyền cấp của Sở Công Thương  </a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl27_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl27$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">28</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl28_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl28$lbThuTucDetail','')">QLTM - Cấp lại Giấy xác nhận đủ điều kiện làm tổng đại lý kinh doanh xăng dầu thuộc thẩm quyền cấp của Sở Công Thương Trường hợp Giấy xác nhận hết hiệu lực thi hành</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl28_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl28$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">29</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl29_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl29$lbThuTucDetail','')">QLTM - Cấp Giấy xác nhận đủ điều kiện làm đại lý bán lẻ xăng dầu </a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl29_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl29$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">30</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl30_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl30$lbThuTucDetail','')">QLTM - Cấp sửa đổi, bổ sung Giấy xác nhận đủ điều kiện làm đại lý bán lẻ xăng dầu  </a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl30_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl30$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">31</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl31_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl31$lbThuTucDetail','')">QLTM - Cấp lại Giấy xác nhận đủ điều kiện làm đại lý bán lẻ xăng dầu  Trường hợp Giấy xác nhận bị mất, bị cháy, bị tiêu hủy</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl31_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl31$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">32</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl32_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl32$lbThuTucDetail','')">QLTM - Cấp lại Giấy xác nhận đủ điều kiện làm đại lý bán lẻ xăng dầu  Trường hợp Giấy xác nhận hết hiệu lực thi hành</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl32_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl32$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">33</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl33_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl33$lbThuTucDetail','')">QLTM - Cấp Giấy chứng nhận cửa hàng đủ điều kiện bán lẻ xăng dầu </a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl33_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl33$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">34</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl34_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl34$lbThuTucDetail','')">QLTM - Cấp sửa đổi, bổ sung Giấy chứng nhận cửa hàng đủ điều kiện bán lẻ xăng dầu </a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl34_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl34$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">35</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl35_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl35$lbThuTucDetail','')">QLTM - Cấp lại Giấy chứng nhận cửa hàng đủ điều kiện bán lẻ xăng dầu Trường hợp Giấy chứng nhận bị mất, bị cháy, bị tiêu hủy dưới hình thức khác</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl35_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl35$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">36</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl36_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl36$lbThuTucDetail','')">QLTM - Cấp lại Giấy chứng nhận cửa hàng đủ điều kiện bán lẻ xăng dầu Trường hợp Giấy chứng nhận hết hiệu lực thi hành</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl36_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl36$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">37</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl37_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl37$lbThuTucDetail','')">QLTM - Cấp Giấy phép bán buôn sản phẩm thuốc lá </a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl37_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl37$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">38</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl38_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl38$lbThuTucDetail','')">QLTM - Cấp sửa đổi, bổ sung Giấy phép bán buôn sản phẩm thuốc lá</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl38_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl38$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">39</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl39_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl39$lbThuTucDetail','')">QLTM - Cấp lại Giấy phép bán buôn sản phẩm thuốc lá Trường hợp Giấy phép hết thời hạn hiệu lực</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl39_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl39$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">40</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl40_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl40$lbThuTucDetail','')">QLTM - Cấp lại Giấy phép bán buôn sản phẩm thuốc lá Trường hợp Giấy phép bị mất, bị tiêu hủy toàn bộ hoặc một phần, bị rách, nát hoặc bị cháy</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl40_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl40$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">41</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl41_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl41$lbThuTucDetail','')">QLTM - Cấp Giấy phép bán buôn rượu</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl41_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl41$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">42</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl42_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl42$lbThuTucDetail','')">QLTM - Cấp sửa đổi, bổ sung Giấy phép kinh doanh bán buôn sản phẩm rượu</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl42_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl42$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">43</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl43_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl43$lbThuTucDetail','')">QLTM - Cấp lại Giấy phép kinh doanh bán buôn sản phẩm rượu Trường hợp hết thời hạn hiệu lực</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl43_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl43$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">44</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl44_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl44$lbThuTucDetail','')">QLTM - Cấp lại Giấy phép kinh doanh bán buôn sản phẩm rượu Trường hợp bị mất, bị tiêu hủy toàn bộ hoặc một phần, bị rách, nát hoặc bị cháy</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl44_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl44$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">45</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl45_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl45$lbThuTucDetail','')">QLTM - Cấp Giấy chứng nhận đủ điều kiện làm đại lý kinh doanh LPG</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl45_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl45$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">46</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl46_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl46$lbThuTucDetail','')">QLTM  Cấp Giấy chứng nhận đủ điều kiện kinh doanh khí dầu mỏ hóa lỏng cho cửa hàng bán LPG chai</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl46_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl46$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">47</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl47_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl47$lbThuTucDetail','')">QLTM - Đăng ký dấu nghiệp vụ giám định thương mại</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl47_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl47$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">48</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl48_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl48$lbThuTucDetail','')">QLTM - Đăng ký thay đổi dấu nghiệp vụ giám định thương mại</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl48_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl48$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">49</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl49_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl49$lbThuTucDetail','')">QLTM - Đăng ký thực hiện khuyến mại theo hình thức mang tính may rủi trên địa bàn tỉnh Hà Tĩnh</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl49_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl49$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">50</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl50_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl50$lbThuTucDetail','')">QLTM - Đăng ký sửa đổi, bổ sung nội dung chương trình khuyến mại theo hình thức mang tính may rủi trên địa bàn tỉnh Hà Tĩnh</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl50_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl50$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">51</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl51_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl51$lbThuTucDetail','')">QLTM - Thông báo thực hiện khuyến mại trên địa bàn tỉnh Hà Tĩnh </a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl51_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl51$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">52</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl52_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl52$lbThuTucDetail','')">QLTM - Xác nhận đăng ký tổ chức hội chợ/triển lãm thương mại tại Hà Tĩnh.</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl52_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl52$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">53</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl53_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl53$lbThuTucDetail','')">QLTM - Xác nhận thay đổi, bổ sung nội dung đăng ký tổ chức hội chợ, triển lãm thương mại </a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl53_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl53$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">54</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl54_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl54$lbThuTucDetail','')">QLTM - Xác nhận thông báo hoạt động bán hàng đa cấp  </a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl54_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl54$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">55</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl55_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl55$lbThuTucDetail','')">QLTM - Xác nhận thông báo tổ chức hội nghị, hội thảo, đào tạo bán hàng đa cấp</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl55_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl55$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">56</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl56_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl56$lbThuTucDetail','')">QLTM - Đăng ký/Đăng ký lại hợp đồng theo mẫu, điều kiện giao dịch chung thuộc thẩm quyền của Sở Công Thương</a>
                    </td>
                    <td>Sở Công thương</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl56_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl56$lbDangKy','')">Đăng ký</a></td>
                </tr>




















                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Hướng dẫn và quản lý các hoạt động thông tin báo chí của phóng viên nước ngoài tại địa phương</a>
                    </td>
                    <td>Sở Ngoại Vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Tiếp nhận huân chương, huy chương hoặc các danh hiệu khác của các tổ chức, cá nhân nước ngoài hoặc các tổ chức quốc tế tặng</a>
                    </td>
                    <td>Sở Ngoại Vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Phê duyệt kế hoạch tổ chức các Hội nghị, hội thảo, ký kết và thực hiện thỏa thuận quốc tế do UBND tỉnh tổ chức.</a>
                    </td>
                    <td>Sở Ngoại Vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Cấp hộ chiếu công vụ</a>
                    </td>
                    <td>Sở Ngoại vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">Gia hạn hộ chiếu công vụ</a>
                    </td>
                    <td>Sở Ngoại vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">Sửa đổi, bổ sung hộ chiếu công vụ</a>
                    </td>
                    <td>Sở Ngoại vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">Cấp hộ chiếu ngoại giao</a>
                    </td>
                    <td>Sở Ngoại vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">8</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbThuTucDetail','')">Gia hạn hộ chiếu ngoại giao</a>
                    </td>
                    <td>Sở Ngoại vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">9</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbThuTucDetail','')">Sửa đổi, bổ sung hộ chiếu ngoại giao</a>
                    </td>
                    <td>Sở Ngoại vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbDangKy','')">Đăng ký</a></td>
                </tr>
















                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Thẩm định Báo cáo đề xuất chủ trương đầu tư chương trình, dự án</a>
                    </td>
                    <td>Sở Kế hoạch và Đầu Tư</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Thẩm định nguồn vốn và khả năng cân đối nguồn vốn chương trình, dự án</a>
                    </td>
                    <td>Sở Kế hoạch và Đầu Tư</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Thẩm định báo cáo nghiên cứu khả thi (dự án có cấu phần xây dựng)</a>
                    </td>
                    <td>Sở Kế hoạch và Đầu Tư</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Thẩm định báo cáo nghiên cứu khả thi (dự án không có cấu phần xây dựng)</a>
                    </td>
                    <td>Sở Kế hoạch và Đầu tư</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">Thẩm định thiết kế bản vẽ thi công (dự án không có cấu phần xây dựng)</a>
                    </td>
                    <td>Sở Kế hoạch và Đầu tư</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">Thẩm định kế hoạch lựa chọn nhà thầu</a>
                    </td>
                    <td>Sở Kế hoạch và Đầu tư</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">Thẩm định Báo cáo kinh tế kỹ thuật</a>
                    </td>
                    <td>Sở Kế hoạch và Đầu tư</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr>




































                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Đăng ký hoạt động giáo dục nghề nghiệp trình độ sơ cấp đối với trường trung cấp, trung tâm giáo dục nghề nghiệp</a>
                    </td>
                    <td>Sở Lao Động - Thương Binh Và Xã Hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Đăng ký hoạt động giáo dục nghề nghiệp trình độ sơ cấp đối với doanh nghiệp</a>
                    </td>
                    <td>Sở Lao Động - Thương Binh Và Xã Hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Đăng ký bổ sung hoạt động giáo dục nghề nghiệp trình độ sơ cấp đối với trường trung cấp, trung tâm giáo dục nghề nghiệp và doanh nghiệp</a>
                    </td>
                    <td>Sở Lao Động - Thương Binh Và Xã Hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Đăng ký hợp đồng cá nhân</a>
                    </td>
                    <td>Sở Lao động - Thương binh Và Xã hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">Đăng ký hợp đồng nhận lao động thực tập thời hạn dưới 90 ngày</a>
                    </td>
                    <td>Sở Lao động - Thương binh Và Xã hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">Cấp giấy phép lao động cho người lao động nước ngoài</a>
                    </td>
                    <td>Sở Lao động - Thương binh Và Xã hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">Cấp lại giấy phép lao động cho người lao động nước ngoài</a>
                    </td>
                    <td>Sở Lao động - Thương binh Và Xã hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">8</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbThuTucDetail','')">Xác nhận người lao động nước ngoài không thuộc diện cấp giấy phép lao động</a>
                    </td>
                    <td>Sở Lao động - Thương binh Và Xã hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">9</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbThuTucDetail','')">Báo cáo nhu cầu sử dụng người lao động nước ngoài</a>
                    </td>
                    <td>Sở Lao động - Thương binh Và Xã hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">10</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbThuTucDetail','')">Báo cáo thay đổi nhu cầu sử dụng người lao động nước ngoài</a>
                    </td>
                    <td>Sở Lao động - Thương binh Và Xã hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">11</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbThuTucDetail','')">Đăng ký nội quy lao động của doanh nghiệp</a>
                    </td>
                    <td>Sở Lao động - Thương binh Và Xã hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">12</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbThuTucDetail','')">Di chuyển hồ sơ người có công với cách mạng</a>
                    </td>
                    <td>Sở Lao Động - Thương Binh Và Xã Hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">13</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbThuTucDetail','')">Đính chính thông tin trên bia mộ liệt sỹ</a>
                    </td>
                    <td>Sở Lao Động - Thương Binh Và Xã Hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">14</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbThuTucDetail','')">Cấp giấy phép hoạt động cơ sở chăm sóc người khuyết tật, cơ sở chăm sóc người cao tuổi thuộc cấp tỉnh quản lý</a>
                    </td>
                    <td>Sở Lao Động - Thương Binh Và Xã Hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">15</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbThuTucDetail','')">Cấp lại, điều chỉnh giấy phép cơ sở chăm sóc người khuyết tật, cơ sở chăm sóc người cao tuổi thuộc cấp tỉnh quản lý</a>
                    </td>
                    <td>Sở Lao Động - Thương Binh Và Xã Hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">16</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbThuTucDetail','')">Quyết định công nhận cơ sở sản xuất, kinh doanh sử dụng từ 30% tổng số lao động trở lên là người khuyết tật</a>
                    </td>
                    <td>Sở Lao Động - Thương Binh Và Xã Hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">17</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbThuTucDetail','')">Gia hạn quyết định công nhận cơ sở sản xuất kinh doanh có từ 30% lao động trở lên là người khuyết tật</a>
                    </td>
                    <td>Sở Lao Động - Thương Binh Và Xã Hội</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbDangKy','')">Đăng ký</a></td>
                </tr>




















































                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Thẩm định Đồ án quy hoạch</a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Thẩm định nhiệm vụ quy hoạch</a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Cấp giấy phép hoạt động cho nhà thầu nước ngoài là tổ chức hoạt động xây dựng tại Việt Nam</a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Cấp giấy phép hoạt động cho nhà thầu nước ngoài là cá nhân hoạt động xây dựng tại Việt Nam</a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">Cấp giấy phép xây dựng đối với công trình không theo tuyến </a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">Cấp giấy phép xây dựng mới đối với công trình theo tuyến </a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">Cấp giấy phép xây dựng đối với công trình tôn giáo.</a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">8</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbThuTucDetail','')">Cấp giấy phép xây dựng mới đối với công trình tượng đài, tranh hoành tráng.</a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">9</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbThuTucDetail','')">Cấp giấy phép xây dựng mới đối với công trình quảng cáo. </a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">10</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbThuTucDetail','')">Cấp giấy phép xây dựng cho dự án</a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">11</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbThuTucDetail','')">Điều chỉnh giấy phép xây dựng.</a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">12</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbThuTucDetail','')">Gia hạn giấy phép xây dựng </a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">13</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbThuTucDetail','')">Cấp chứng chỉ hành nghề kiến trúc sư hoạt động xây dựng</a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">14</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbThuTucDetail','')">Cấp chứng chỉ hành nghề giám sát thi công xây dựng công trình</a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">15</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbThuTucDetail','')">Giới thiệu địa điểm xây dựng công trình (đầu tư).</a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">16</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbThuTucDetail','')">Cấp lại chứng chỉ hành nghề kỹ sư hoạt động xây dựng</a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">17</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbThuTucDetail','')">Cấp giấy phép xây dựng theo giai đoạn</a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">18</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl18_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl18$lbThuTucDetail','')">Cấp chứng chỉ hành nghề kỹ sư hoạt động xây dựng</a>
                    </td>
                    <td>Sở Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl18_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl18$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">19</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl19_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl19$lbThuTucDetail','')">Cấp giấy phép xây dựng nhà ở riêng lẻ</a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl19_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl19$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">20</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl20_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl20$lbThuTucDetail','')">Cấp chứng chỉ kỹ sư định giá xây dựng hạng 2</a>
                    </td>
                    <td>Sở Xây dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl20_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl20$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">21</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl21_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl21$lbThuTucDetail','')">Cấp giấy phép xây dựng đối với trường hợp di dời công trình</a>
                    </td>
                    <td>Sở  Xây Dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl21_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl21$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">22</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl22_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl22$lbThuTucDetail','')">Chấp thuận chủ trương đầu tư dự án đầu tư xây dựng nhà ở (do UBND tỉnh chấp thuận).</a>
                    </td>
                    <td>Sở Xây dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl22_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl22$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">23</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl23_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl23$lbThuTucDetail','')">Lựa chọn Chủ đầu tư dự án xây dựng nhà ở thương mại (trường hợp chỉ định Chủ đầu tư).</a>
                    </td>
                    <td>Sở Xây dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl23_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl23$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">24</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl24_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl24$lbThuTucDetail','')">Chuyển nhượng toàn bộ hoặc một phần dự án khu đô thị mới, dự án phát triển nhà ở do UBND tỉnh quyết định việc đầu tư.</a>
                    </td>
                    <td>Sở Xây dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl24_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl24$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">25</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl25_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl25$lbThuTucDetail','')">Thông báo về việc nhà ở đủ điều kiện được bán, cho thuê mua nhà ở hình thành trong tương lai.</a>
                    </td>
                    <td>Sở Xây dựng</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl25_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl25$lbDangKy','')">Đăng ký</a></td>
                </tr>








                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Chỉnh sửa nội dung bằng tốt nghiệp trung học phổ thông</a>
                    </td>
                    <td>Sở Giáo Dục và Đào Tạo</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Cấp bản sao bằng tốt nghiệp trung học phổ thông từ sổ gốc</a>
                    </td>
                    <td>Sở Giáo Dục và Đào Tạo</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Cấp mới, gia hạn giấy phép dạy thêm</a>
                    </td>
                    <td>Sở Giáo Dục và Đào Tạo</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr>




























                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Cấp lại Giấy chứng nhận đủ điều kiện buôn bán thuốc bảo vệ thực vật</a>
                    </td>
                    <td>Sở Nông nghiệp và Phát triển Nông thôn</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Cấp Giấy chứng nhận đủ điều kiện buôn bán thuốc bảo vệ thực vật</a>
                    </td>
                    <td>Sở Nông nghiệp và Phát triển Nông thôn</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Xác nhận nội dung quảng cáo thực phẩm lần đầu</a>
                    </td>
                    <td>Sở Nông nghiệp và Phát triển Nông thôn</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Đăng ký lại xác nhận nội dung quảng cáo thực phẩm</a>
                    </td>
                    <td>Sở Nông nghiệp và Phát triển Nông thôn</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">Cấp Giấy xác nhận kiến thức về an toàn thực phẩm </a>
                    </td>
                    <td>Sở Nông nghiệp và Phát triển Nông thôn</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">Cấp lại Giấy chứng nhận cơ sở đủ điều kiện an toàn thực phẩm đối với cơ sở sản xuất kinh doanh thực phẩm nông lâm thủy sản (trường hợp trước 06 tháng tính đến ngày Giấy chứng nhận cơ sở đủ điều kiện an toàn thực phẩm hết thời hạn hiệu lực)</a>
                    </td>
                    <td>Sở Nông nghiệp và Phát triển Nông thôn</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">Cấp lại chứng chỉ hành nghề thú y thuộc thẩm quyền cấp tỉnh </a>
                    </td>
                    <td>Sở Nông nghiệp và Phát triển Nông thôn</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">8</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbThuTucDetail','')">Cấp Giấy xác nhận nội dung quảng cáo thức ăn chăn nuôi</a>
                    </td>
                    <td>Sở Nông nghiệp và Phát triển Nông thôn</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">9</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbThuTucDetail','')">Cấp Giấy chứng nhận Đăng ký tàu cá đối với tàu cá đóng mới</a>
                    </td>
                    <td>Sở Nông nghiệp và Phát triển Nông thôn</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">10</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbThuTucDetail','')">Gia hạn Giấy phép khai thác thủy sản</a>
                    </td>
                    <td>Sở Nông nghiệp và Phát triển Nông thôn</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">11</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbThuTucDetail','')">Cấp Văn bản chấp thuận đóng mới, cải hoán tàu cá</a>
                    </td>
                    <td>Sở Nông nghiệp và Phát triển Nông thôn</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">12</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbThuTucDetail','')">Cấp sổ danh bạ thuyền viên tàu cá</a>
                    </td>
                    <td>Sở Nông nghiệp và Phát triển Nông thôn</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">13</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbThuTucDetail','')">Cấp Giấy chứng nhận an toàn kỹ thuật tàu cá</a>
                    </td>
                    <td>Sở Nông nghiệp và Phát triển Nông thôn</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbDangKy','')">Đăng ký</a></td>
                </tr>




































































                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Xét, công nhận sáng kiến cấp tỉnh</a>
                    </td>
                    <td>Sở Khoa Học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Cấp Giấy chứng nhận đăng ký hoạt động lần đầu cho tổ chức khoa học và công nghệ</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Cấp Giấy chứng nhận trong trường hợp đăng ký thay đổi tên của tổ chức khoa học và công nghệ.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Cấp Giấy chứng nhận trong trường hợp đăng ký thay đổi tên cơ quan quyết định thành lập, cơ quan quản lý trực tiếp của tổ chức khoa học và công nghệ.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">Cấp Giấy chứng nhận trong trường hợp đăng ký thay đổi địa chỉ trụ sở chính của tổ chức khoa học và công nghệ.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">Cấp Giấy chứng nhận trong trường hợp đăng ký thay đổi địa chỉ trụ sở chính (dẫn đến thay đổi cơ quan cấp giấy chứng nhận) của tổ chức khoa học và công nghệ.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">Cấp Giấy chứng nhận trong trường hợp đăng ký thay đổi vốn của tổ chức khoa học và công nghệ.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">8</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbThuTucDetail','')">Cấp Giấy chứng nhận trong trường hợp đăng ký thay đổi người đứng đầu của tổ chức khoa học và công nghệ.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">9</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbThuTucDetail','')">Cấp Giấy chứng nhận trong trường hợp đăng ký thay đổi, bổ sung lĩnh vực hoạt động khoa học và công nghệ của tổ chức khoa học và công nghệ.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">10</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbThuTucDetail','')">Cấp Giấy chứng nhận trong trường hợp Giấy chứng nhận của tổ chức khoa học và công nghệ bị mất.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">11</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbThuTucDetail','')">Cấp Giấy chứng nhận trong trường hợp Giấy chứng nhận của tổ chức khoa học và công nghệ bị rách, nát.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">12</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbThuTucDetail','')">Cấp Giấy chứng nhận hoạt động lần đầu cho văn phòng đại diện, chi nhánh của tổ chức khoa học và công nghệ</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">13</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbThuTucDetail','')">Cấp Giấy chứng nhận trong trường hợp đăng ký thay đổi tên văn phòng đại diện, chi nhánh của tổ chức khoa học và công nghệ.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">14</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbThuTucDetail','')">Cấp Giấy chứng nhận trong trường hợp đăng ký thay đổi địa chỉ trụ sở văn phòng đại diện, chi nhánh của tổ chức khoa học và công nghệ.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">15</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbThuTucDetail','')">Cấp Giấy chứng nhận trong trường hợp đăng ký thay đổi người đứng đầu văn phòng đại diện, chi nhánh của tổ chức khoa học và công nghệ.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">16</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbThuTucDetail','')">Cấp Giấy chứng nhận trong trường hợp đăng ký thay đổi thông tin của tổ chức khoa học công nghệ ghi trên giấy chứng nhận hoạt động văn phòng đại diện, chi nhánh.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">17</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbThuTucDetail','')">Cấp Giấy chứng nhận trong trường hợp đăng ký thay đổi, bổ sung lĩnh vực hoạt động khoa học và công nghệ của văn phòng đại diện, chi nhánh.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">18</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl18_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl18$lbThuTucDetail','')">Cấp Giấy chứng nhận hoạt động của văn phòng đại diện, chi nhánh của tổ chức khoa học và công nghệ trong trường hợp Giấy chứng nhận hoạt động bị mất.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl18_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl18$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">19</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl19_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl19$lbThuTucDetail','')">Cấp lại Giấy chứng nhận hoạt động của văn phòng đại diện, chi nhánh của tổ chức khoa học và công nghệ trong trường hợp Giấy chứng nhận hoạt động bị rách, nát.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl19_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl19$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">20</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl20_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl20$lbThuTucDetail','')">Cấp Giấy chứng nhận đăng ký hợp đồng chuyển giao công nghệ (trừ những trường hợp thuộc thẩm quyền của Bộ Khoa học và Công nghệ)</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl20_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl20$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">21</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl21_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl21$lbThuTucDetail','')">Cấp Giấy chứng nhận đăng ký sửa đổi, bổ sung hợp đồng chuyển giao công nghệ (trừ những trường hợp thuộc thẩm quyền của Bộ Khoa học và Công nghệ)</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl21_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl21$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">22</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl22_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl22$lbThuTucDetail','')">Tuyển chọn, giao trực tiếp tổ chức và cá nhân chủ trì thực hiện đề tài nghiên cứu khoa học và phát triển công nghệ cấp tỉnh.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl22_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl22$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">23</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl23_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl23$lbThuTucDetail','')">Cấp giấy chứng nhận doanh nghiệp khoa học và công nghệ</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl23_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl23$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">24</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl24_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl24$lbThuTucDetail','')">Cấp bổ sung danh mục sản phẩm, hàng hóa hình thành từ kết quả KH&amp;CN vào Giấy chứng nhận doanh nghiệp khoa học và công nghệ</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl24_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl24$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">25</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl25_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl25$lbThuTucDetail','')">Cấp lại, sửa đổi, bổ sung Giấy chứng nhận doanh nghiệp KH&amp;CN</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl25_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl25$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">26</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl26_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl26$lbThuTucDetail','')">Khai báo thiết bị X-quang chẩn đoán trong y tế </a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl26_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl26$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">27</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl27_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl27$lbThuTucDetail','')">Cấp giấy phép sử dụng thiết bị X-quang chẩn đoán y tế.</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl27_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl27$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">28</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl28_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl28$lbThuTucDetail','')">Cấp chứng chỉ nhân viên bức xạ (cho người phụ trách an toàn cơ sở X-quang chẩn đoán trong y tế)</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl28_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl28$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">29</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl29_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl29$lbThuTucDetail','')">Kiểm tra chất lượng hàng hoá nhập khẩu thuộc trách nhiệm quản lý của Bộ Khoa học và Công nghệ</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl29_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl29$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">30</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl30_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl30$lbThuTucDetail','')">Giải quyết khiếu nại lần 1</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl30_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl30$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">31</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl31_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl31$lbThuTucDetail','')">Giải quyết Tố cáo</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl31_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl31$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">32</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl32_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl32$lbThuTucDetail','')">Sửa đổi, bổ sung giấy sử dụng thiết bị X-quang chẩn đoán trong y tế</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl32_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl32$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">33</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl33_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl33$lbThuTucDetail','')">Cấp lại giấy phép sử dụng thiết bị X-quang chẩn đoán trong y tế</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl33_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl33$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">34</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl34_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl34$lbThuTucDetail','')">Gia hạn giấy phép sử dụng thiết bị X-quang chẩn đoán trong y tế</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl34_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl34$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">35</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl35_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl35$lbThuTucDetail','')">Giải quyết khiếu nại lần 2</a>
                    </td>
                    <td>Sở Khoa học và Công nghệ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl35_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl35$lbDangKy','')">Đăng ký</a></td>
                </tr>



























                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Thủ tục cấp giấy phép cho phép tổ chức, cá nhân Việt Nam thuộc địa phương ra nước ngoài biểu diễn nghệ thuật, trình diễn thời trang.</a>
                    </td>
                    <td>Sở Văn hóa Thể thao và Du lịch</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Thủ tục cấp giấy phép kinh doanh vũ trường.</a>
                    </td>
                    <td>Sở Văn hóa Thể thao và Du lịch</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Thủ tục tiếp nhận hồ sơ thông báo sản phẩm quảng cáo trên bảng quảng cáo, băng-rôn.</a>
                    </td>
                    <td>Sở Văn hóa Thể thao và Du lịch</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Thủ tục cấp thẻ hướng dẫn viên du lịch quốc tế</a>
                    </td>
                    <td>Sở Văn hóa Thể thao và Du lịch</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">Thủ tục cấp thẻ hướng dẫn viên du lịch nội địa</a>
                    </td>
                    <td>Sở Văn hóa Thể thao và Du lịch</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">Thủ tục đổi thẻ hướng dẫn viên du lịch</a>
                    </td>
                    <td>Sở Văn hóa Thể thao và Du lịch</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">Thủ tục cấp lại thẻ hướng dẫn viên du lịch</a>
                    </td>
                    <td>Sở Văn hóa Thể thao và Du lịch</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">8</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbThuTucDetail','')">Thủ tục cấp giấy chứng nhận thuyết minh viên du lịch </a>
                    </td>
                    <td>Sở Văn hóa Thể thao và Du lịch</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">9</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbThuTucDetail','')">Thủ tục xếp hạng cơ sở lưu trú du lịch: hạng 1 sao, 2 sao cho khách sạn, làng du lịch.</a>
                    </td>
                    <td>Sở Văn hóa Thể thao và Du lịch</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">10</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbThuTucDetail','')">Thủ tục thẩm định lại, xếp hạng lại hạng cơ sở lưu trú du lịch: hạng 1 sao, 2 sao cho khách sạn, làng du lịch.</a>
                    </td>
                    <td>Sở Văn hóa Thể thao và Du lịch</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">11</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbThuTucDetail','')">Thủ tục xếp hạng cơ sở lưu trú du lịch: hạng đạt tiểu chuẩn kinh doanh lưu trú du lịch cho biệt thự du lịch, căn hộ du lịch, bãi cắm trại du lịch, nhà nghỉ du lịch, nhà ở có phòng cho khách du lịch thuê, cơ sở lưu trú du lịch khác.</a>
                    </td>
                    <td>Sở Văn hóa Thể thao và Du lịch</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">12</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbThuTucDetail','')">Thủ tục cấp Giấy chứng nhận đủ điều kiện kinh doanh của doanh nghiệp kinh doanh hoạt động thể thao.</a>
                    </td>
                    <td>Sở Văn hóa Thể thao và Du lịch</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbDangKy','')">Đăng ký</a></td>
                </tr>

















                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Nhập quốc tịch Việt Nam</a>
                    </td>
                    <td>Sở Tư Pháp</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Trở lại quốc tịch Việt Nam ở trong nước</a>
                    </td>
                    <td>Sở Tư Pháp</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Thôi quốc tịch Việt Nam ở trong nước</a>
                    </td>
                    <td>Sở Tư Pháp</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Chuyển đổi Văn phòng luật sư thành công ty luật</a>
                    </td>
                    <td>Sở Tư Pháp</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">Đăng ký hoạt động của Trung tâm tư vấn pháp luật</a>
                    </td>
                    <td>Sở Tư Pháp</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">Đăng ký hoạt động của Chi nhánh của Trung tâm tư vấn pháp luật</a>
                    </td>
                    <td>Sở Tư Pháp</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">Thay đổi nội dung đăng ký hoạt động của Trung tâm Tư vấn pháp luật, Chi nhánh của Trung tâm Tư vấn pháp luật</a>
                    </td>
                    <td>Sở Tư Pháp</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr>


















                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Thành lập Hội có phạm vi hoạt động trong tỉnh</a>
                    </td>
                    <td>Sở Nội Vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Chia, tách; sáp nhập; hợp nhất Hội có phạm vi hoạt động trong tỉnh</a>
                    </td>
                    <td>Sở Nội Vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Phê duyệt điều lệ Hội có phạm vi hoạt động trong tỉnh</a>
                    </td>
                    <td>Sở Nội Vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Cấp giấy phép thành lập và công nhận điều lệ quỹ</a>
                    </td>
                    <td>Sở Nội Vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">Đề nghị Chủ tịch UBND tỉnh tặng danh hiệu “Doanh nhân Hà Tĩnh tiêu biểu”</a>
                    </td>
                    <td>Sở Nội Vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">Đề nghị Chủ tịch UBND tỉnh trình Thủ tướng Chính phủ tặng Bằng khen.</a>
                    </td>
                    <td>Sở Nội Vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">Thẩm định việc thành lập tổ chức sự nghiệp công lập</a>
                    </td>
                    <td>Sở Nội vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">8</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbThuTucDetail','')">Thẩm định việc tổ chức lại, giải thể tổ chức sự nghiệp công lập</a>
                    </td>
                    <td>Sở Nội vụ</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbDangKy','')">Đăng ký</a></td>
                </tr>










































































































































































                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Cấp giấy phép liên vận quốc tế Việt – Lào đối với phương tiện phi thương mại; phương tiện thương mại phục vụ các công trình, dự án hoặc hoạt động kinh doanh của doanh nghiệp, hợp tác xã trên lãnh thổ Lào.</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Gia hạn Giấy phép liên vận Lào - Việt và thời gian lưu hành tại Việt Nam cho phương tiện của Lào.</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Cấp mới, cấp lại phù hiệu xe ô tô vận tải hành khách theo tuyến cố định</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Cấp mới, cấp lại phù hiệu xe hợp đồng</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">Cấp mới, cấp lại phù hiệu xe Taxi</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">Cấp mới, cấp lại Biển hiệu xe khách du lịch</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">Cấp mới, cấp lại Phù hiệu xe Công ten nơ</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">8</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbThuTucDetail','')">Cấp mới, cấp lại phù hiệu Xe trung chuyển</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">9</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbThuTucDetail','')">Cấp mới, cấp lại phù hiệu Xe nội bộ</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">10</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbThuTucDetail','')">Cấp mới, cấp lại phù hiệu Xe buýt</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">11</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbThuTucDetail','')">Cấp mới, cấp lại phù hiệu Xe tải</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">12</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbThuTucDetail','')">Công bố đưa bến xe khách vào khai thác.</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">13</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbThuTucDetail','')">Công bố lại bến xe khách vào khai thác.</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">14</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbThuTucDetail','')">Thẩm định dự án đầu tư xây dựng công trình giao thông nhóm B</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">15</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbThuTucDetail','')">Chấp thuận thiết kế và phương án tổ chức thi công nút giao đấu nối vào  đường tỉnh và Quốc lộ ủy thác từ cấp IV trở xuống.</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">16</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbThuTucDetail','')">Chấp thuận xây dựng công trình thiết yếu trong phạm vi bảo vệ kết cấu hạ tầng giao thông đường tỉnh và quốc lộ ủy thác.</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">17</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbThuTucDetail','')">Gia hạn chấp thuận xây dựng công trình thiết yếu trong phạm vi bảo vệ kết cấu hạ tầng giao thông đường tỉnh và quốc lộ ủy thác.</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">18</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl18_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl18$lbThuTucDetail','')">Chấp thuận xây dựng biển quảng cáo tạm thời trong phạm vi hành lang an toàn đường bộ của đường tỉnh.</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl18_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl18$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">19</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl19_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl19$lbThuTucDetail','')">Cấp giấy phép thi công xây dựng biển quảng cáo tạm thời trong phạm vi hành lang an toàn đường bộ của đường tỉnh và quốc lộ ủy thác.</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl19_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl19$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">20</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl20_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl20$lbThuTucDetail','')">Cấp giấy phép thi công đường nhánh đấu nối vào đường tỉnh và Quốc lộ ủy thác từ cấp IV trở xuống. </a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl20_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl20$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">21</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl21_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl21$lbThuTucDetail','')">Cấp giấy phép thi công công trình trên đường bộ đang khai thác. </a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl21_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl21$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">22</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl22_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl22$lbThuTucDetail','')">Gia hạn giấy phép thi công công trình</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl22_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl22$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">23</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl23_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl23$lbThuTucDetail','')">Cấp giấy phép lưu hành xe quá tải trọng, quá khổ giới hạn, xe vận chuyển hàng siêu trường, siêu trọng, xe bánh xích tự hành trên đường bộ.</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl23_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl23$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">24</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl24_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl24$lbThuTucDetail','')">Thẩm định dự án đầu tư xây dựng công trình giao thông nhóm C</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl24_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl24$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">25</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl25_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl25$lbThuTucDetail','')">Thẩm định báo cáo kinh tế - kỹ thuật xây dựng công trình giao thông</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl25_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl25$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">26</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl26_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl26$lbThuTucDetail','')">Thẩm định thiết kế, dự toán xây dựng triển khai sau thiết kế cơ sở công trình giao thông</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl26_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl26$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">27</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl27_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl27$lbThuTucDetail','')">Học, dự thi lấy Giấy chứng nhận khả năng chuyên môn thuyền trưởng hạng ba (T3)</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl27_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl27$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">28</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl28_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl28$lbThuTucDetail','')">Học, dự thi lấy Giấy chứng nhận khả năng chuyên môn thuyền trưởng hạng tư (T4)</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl28_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl28$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">29</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl29_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl29$lbThuTucDetail','')">Học, dự thi lấy Giấy chứng nhận khả năng chuyên môn máy trưởng hạng ba (M3)</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl29_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl29$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">30</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl30_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl30$lbThuTucDetail','')">Học, dự kiểm tra lấy Chứng chỉ thủy thủ hạng nhất (TT1), hạng nhì (T2)</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl30_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl30$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">31</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl31_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl31$lbThuTucDetail','')">Học, dự kiểm tra lấy Chứng chỉ thợ máy hạng nhất (TM1), hạng nhì (TM2)</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl31_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl31$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">32</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl32_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl32$lbThuTucDetail','')">Học, dự kiểm tra lấy Chứng chỉ lái phương tiện hạng nhất (LPT1)</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl32_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl32$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">33</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl33_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl33$lbThuTucDetail','')">Học, dự kiểm tra lấy Chứng chỉ lái phương tiện hạng nhì (LPT2)</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl33_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl33$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">34</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl34_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl34$lbThuTucDetail','')">Cấp chứng chỉ huấn luyện an toàn cơ bản (ATCB)</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl34_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl34$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">35</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl35_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl35$lbThuTucDetail','')">Cấp GCNKNCM thuyền trưởng hạng ba, máy trưởng hạng ba</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl35_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl35$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">36</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl36_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl36$lbThuTucDetail','')">Cấp lại giấy chứng nhận khả năng chuyên môn, chứng chỉ chuyên môn </a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl36_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl36$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">37</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl37_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl37$lbThuTucDetail','')">Đổi lại bằng thuyền trưởng, máy trưởng, chứng chỉ chuyên môn đã cấp trước ngày 01/01/2015</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl37_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl37$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">38</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl38_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl38$lbThuTucDetail','')">Chuyển đổi chứng chỉ thuyền trưởng, máy trưởng, chứng chỉ chuyên môn tàu cá, tàu biển sang giấy chứng nhận khả năng chuyên môn, chứng chỉ chuyên môn phương tiện thủy nội địa</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl38_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl38$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">39</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl39_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl39$lbThuTucDetail','')">Cấp lại giấy chứng nhận, đăng ký phương tiện thuỷ nội địa (đối với phương tiện chuyển từ cơ quan đăng ký khác sang cơ quan đăng ký phương tiện thủy nội địa)</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl39_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl39$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">40</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl40_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl40$lbThuTucDetail','')">Chấp thuận vận tải hành khách, hành lý, bao gửi theo tuyến cố định đối với tổ chức, cá nhân Việt Nam</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl40_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl40$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">41</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl41_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl41$lbThuTucDetail','')">Chấp thuận vận tải hành khách ngang sông</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl41_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl41$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">42</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl42_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl42$lbThuTucDetail','')">Cấp mới, cấp lại biển hiệu cho phương tiện thủy vận chuyển khách du lịch</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl42_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl42$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">43</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl43_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl43$lbThuTucDetail','')">Cấp giấy chứng nhận, đăng ký phương tiện thuỷ nội địa (đối với phương tiện chưa khai thác trên đường thủy nội địa)</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl43_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl43$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">44</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl44_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl44$lbThuTucDetail','')">Cấp giấy chứng nhận, đăng ký phương tiện thuỷ nội địa (đối với phương tiện đang khai thác trên đường thủy nội địa)</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl44_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl44$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">45</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl45_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl45$lbThuTucDetail','')">Cấp lại giấy chứng nhận, đăng ký phương tiện thuỷ nội địa (đối với phương tiện thay đổi tên, tính năng kỹ thuật)</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl45_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl45$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">46</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl46_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl46$lbThuTucDetail','')">Cấp lại giấy chứng nhận, đăng ký phương tiện thuỷ nội địa (đối với phương tiện chuyển quyền sở hữu nhưng không thay đổi cơ quan đăng ký)</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl46_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl46$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">47</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl47_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl47$lbThuTucDetail','')">Cấp lại giấy chứng nhận, đăng ký phương tiện thuỷ nội địa (đối với phương tiện chuyển quyền sở hữu đồng thời thay đổi cơ quan đăng ký)</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl47_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl47$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">48</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl48_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl48$lbThuTucDetail','')">Cấp lại giấy chứng nhận, đăng ký phương tiện thuỷ nội địa (đối với chủ phương tiện thay đổi trụ sở hoặc nơi đăng ký hộ khẩu thường trú của chủ phương tiện sang đơn vị hành chính cấp tỉnh khác)</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl48_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl48$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">49</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl49_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl49$lbThuTucDetail','')">Cấp lại Giấy chứng nhận đăng ký phương tiện thuỷ nội địa</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl49_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl49$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">50</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl50_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl50$lbThuTucDetail','')">Cấp  giấy đăng ký xe máy chuyên dùng lần đầu</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl50_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl50$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">51</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl51_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl51$lbThuTucDetail','')">Cấp giấy đăng ký xe máy chuyên dùng lần đầu không có chứng từ gốc hoặc mất toàn bộ hồ sơ di chuyển</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl51_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl51$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">52</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl52_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl52$lbThuTucDetail','')">Cấp lại giấy đăng ký xe máy chuyên dùng bị mất giấy đăng ký hoặc biển số</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl52_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl52$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">53</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl53_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl53$lbThuTucDetail','')">Sang tên chủ sở hữu trong cùng một tỉnh, thành phố</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl53_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl53$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">54</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl54_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl54$lbThuTucDetail','')">Sang tên chủ sở hữu ở khác tỉnh, thành phố</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl54_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl54$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">55</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl55_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl55$lbThuTucDetail','')">Cấp Giấy đăng ký có thời hạn xe máy chuyên dùng</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl55_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl55$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">56</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl56_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl56$lbThuTucDetail','')">Cấp Giấy đăng ký tạm thời xe máy chuyên dùng </a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl56_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl56$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">57</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl57_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl57$lbThuTucDetail','')">Xóa đăng ký xe máy chuyên dùng</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl57_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl57$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">58</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl58_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl58$lbThuTucDetail','')">Di chuyển đăng ký xe máy chuyên dùng thay đổi chủ sở hữu</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl58_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl58$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">59</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl59_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl59$lbThuTucDetail','')">Di chuyển đăng ký xe máy chuyên dùng không thay đổi chủ sở hữu</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl59_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl59$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">60</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl60_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl60$lbThuTucDetail','')">Đăng ký lại xe máy chuyên dùng không thay đổi chủ sở hữu</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl60_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl60$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">61</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl61_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl61$lbThuTucDetail','')">Đổi Giấy đăng ký, biển số xe máy chuyên dùng</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl61_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl61$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">62</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl62_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl62$lbThuTucDetail','')">Chấp thuận xây dựng mới cơ sở đào tạo lái xe ô tô</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl62_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl62$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">63</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl63_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl63$lbThuTucDetail','')">Cấp mới giấy phép đào tạo lái xe ô tô</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl63_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl63$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">64</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl64_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl64$lbThuTucDetail','')">Cấp lại giấy phép đào tạo lái xe ô tô khi điều chỉnh hạng xe đào tạo</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl64_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl64$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">65</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl65_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl65$lbThuTucDetail','')">Cấp mới Giấy chứng nhận Trung tâm sát hạch lái xe loại 3</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl65_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl65$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">66</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl66_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl66$lbThuTucDetail','')">Cấp Giấy phép lái xe tập lái</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl66_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl66$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">67</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl67_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl67$lbThuTucDetail','')">Cấp giấy chứng nhận giáo viên dạy thực hành lái xe</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl67_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl67$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">68</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl68_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl68$lbThuTucDetail','')">Cấp lại Giấy phép kinh doanh do hết hạn Giấy phép kinh doanh vận tải bằng xe ô tô</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl68_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl68$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">69</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl69_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl69$lbThuTucDetail','')">Cấp lại Giấy phép kinh doanh do thay đổi nội dung của Giấy phép kinh doanh vận tải bằng xe ô tô</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl69_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl69$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">70</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl70_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl70$lbThuTucDetail','')">Cấp lại giấy phép do Giấy phép kinh doanh vận tải bằng xe ô tô bị mất hoặc bị hư hỏng</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl70_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl70$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">71</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl71_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl71$lbThuTucDetail','')">Cấp mới Giấy phép kinh doanh vận tải bằng xe ô tô.</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl71_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl71$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">72</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl72_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl72$lbThuTucDetail','')">Cấp lại Giấy chứng nhận giáo viên dạy thực hành lái xe</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl72_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl72$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">73</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl73_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl73$lbThuTucDetail','')">Cấp lại giấy phép đào tạo lái xe ô tô khi bị mất, bị hỏng, có sự thay đổi liên quan đến nội dung khác</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl73_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl73$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">74</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl74_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl74$lbThuTucDetail','')">Cấp lại Giấy chứng nhận Trung tâm sát hạch lái xe loại 3 đủ điều kiện hoạt động khi bị hỏng, mất, có sự thay đổi liên quan đến nội dung của giấy chứng nhận.</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl74_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl74$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">75</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl75_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl75$lbThuTucDetail','')">Cấp Giấy chứng nhận cơ sở đào tạo loại 4 đủ điều kiện kinh doanh dịch vụ đào tạo thuyền viên, người lái phương tiện thuỷ nội địa</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl75_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl75$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">76</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl76_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl76$lbThuTucDetail','')">Cấp lại Giấy chứng nhận cơ sở đào tạo loại 4 đủ điều kiện kinh doanh dịch vụ đào tạo thuyền viên, người lái phương tiện thuỷ nội địa khi bị mất, bị hỏng</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl76_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl76$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">77</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl77_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl77$lbThuTucDetail','')">Cấp lại Giấy chứng nhận cơ sở đào tạo loại 4 đủ điều kiện kinh doanh dịch vụ đào tạo thuyền viên, người lái phương tiện thuỷ nội địa khi hoặc thay đổi địa chỉ hoặc loại cơ sở đào tạo.</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl77_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl77$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">78</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl78_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl78$lbThuTucDetail','')">Cấp lại Giấy phép lái xe tập lái hoặc bổ sung xe tập lái</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl78_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl78$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">79</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl79_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl79$lbThuTucDetail','')">Đăng ký biểu trưng (logo) đơn vị vận tải hành khách bằng xe taxi, màu sơn đặc trưng đối với đơn vị xe buýt</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl79_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl79$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">80</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl80_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl80$lbThuTucDetail','')">Công bố đưa bến xe hàng vào khai thác</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl80_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl80$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">81</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl81_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl81$lbThuTucDetail','')">Cấp giấy chứng nhận xóa đăng ký phương tiện thuỷ nội địa</a>
                    </td>
                    <td>Sở Giao thông Vận tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl81_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl81$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">82</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl82_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl82$lbThuTucDetail','')">Xác nhận xe thuộc đối tượng không chịu phí sử dụng đường bộ</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl82_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl82$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">83</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl83_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl83$lbThuTucDetail','')">Thẩm định thiết kế xe cơ giới cải tạo</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl83_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl83$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">84</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl84_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl84$lbThuTucDetail','')">Cấp lại Giấy chứng nhận Trung tâm sát hạch lái xe loại 3 đủ điều kiện hoạt động khi có sự thay đổi về thiết bị sát hạch, chủng loại, số lượng xe cơ giới sử dụng để sát hạch lái xe</a>
                    </td>
                    <td>Sở Giao Thông Vận Tải</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl84_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl84$lbDangKy','')">Đăng ký</a></td>
                </tr>




































































                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Cấp giấy chứng nhận bài thuốc gia truyền</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Cho phép đoàn trong nước, nước ngoài khám bệnh, chữa bệnh nhân đạo</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Cho phép đối với cá nhân trong nước, nước ngoài thực hiện khám bệnh, chữa bệnh nhân đạo</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Xác định trường hợp được bồi thường khi xảy ra tai biến trong tiêm chủng</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">Cấp giấy chứng nhận là lương y</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">Cho phép người hành nghề được tiếp tục hành nghề khám bệnh, chữa bệnh sau khi bị đình chỉ hoạt động chuyên môn thuộc thẩm quyền của Sở Y tế</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">Cho phép cơ sở khám bệnh, chữa bệnh được tiếp tục hoạt động khám bệnh, chữa bệnh sau khi bị đình chỉ hoạt động chuyên môn thuộc thẩm quyền của Sở Y tế</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">8</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbThuTucDetail','')">Công bố cơ sở đủ điều kiện thực hiện khám sức khỏe cơ sở khám bệnh, chữa bệnh </a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">9</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbThuTucDetail','')">Công bố đủ điều kiện điều trị nghiện chất dạng thuốc phiện</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">10</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbThuTucDetail','')">Công bố cơ sở đủ điều kiện tiêm chủng</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">11</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbThuTucDetail','')">Phê duyệt lần đầu danh mục kỹ thuật của các cơ sở khám bệnh, chữa bệnh thuộc thẩm quyền quản lý của Sở Y tế</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">12</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbThuTucDetail','')">Công bố cơ sở phòng xét nghiệm đạt tiêu chuẩn an toàn sinh học cấp I, II</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">13</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbThuTucDetail','')">Công bố đủ điều kiện hoạt động đối với cơ sở dịch vụ xoa bóp (massage)</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">14</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbThuTucDetail','')">Công bố đủ điều kiện hoạt động đối với cơ sở dịch vụ thẩm mỹ</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">15</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbThuTucDetail','')">Cấp giấy xác nhận nội dung quảng cáo dịch vụ khám bệnh, chữa bệnh;Cấp lại giấy xác nhận nội dung quảng cáo trong trường hợp giấy xác nhận nội dung quảng cáo hết hiệu lực;Cơ sở khám bệnh, chữa bệnh bị thu hồi giấy phép hoạt động hoặc đình chỉ hoạt động;Cơ sở khám bệnh, chữa bệnh bị tước quyền sử dụng giấy phép hoạt động theo quy định của pháp luật về xử lý vi phạm hành chính;Cơ sở khám bệnh, chữa bệnh được cấp lại giấy phép hoạt động do thay đổi phạm vi hoạt động chuyên môn có liên quan đến dịch vụ khám bệnh, chữa bệnh được quảng cáo</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl15_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl15$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">16</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbThuTucDetail','')">Công bố cơ sở đủ điều kiện sản xuất chế phẩm diệt côn trùng, diệt khuẩn dùng trong lĩnh vực gia dụng và y tế </a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl16_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl16$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">17</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbThuTucDetail','')">Công bố cơ sở đủ điều kiện cung cấp dịch vụ diệt côn trùng, diệt khuẩn trong lĩnh vực gia dụng và y tế bằng chế phẩm</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl17_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl17$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">18</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl18_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl18$lbThuTucDetail','')">Công bố đủ điều kiện sản xuất trang thiết bị y tế</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl18_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl18$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">19</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl19_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl19$lbThuTucDetail','')">Công bố tiêu chuẩn áp dụng đối với trang thiết bị y tế loại A</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl19_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl19$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">20</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl20_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl20$lbThuTucDetail','')">Công bố đủ điều kiện mua bán trang thiết bị y tế loại B, C, D</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl20_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl20$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">21</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl21_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl21$lbThuTucDetail','')">Cấp Chứng chỉ hành nghề dược</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl21_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl21$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">22</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl22_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl22$lbThuTucDetail','')">Cấp lại Chứng chỉ hành nghề dược</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl22_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl22$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">23</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl23_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl23$lbThuTucDetail','')">Cấp điều chỉnh nội dung trong Chứng chỉ hành nghề dược</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl23_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl23$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">24</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl24_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl24$lbThuTucDetail','')">Cấp lại Giấy chứng nhận đủ điều kiện kinh doanh dược (Giấy chứng nhận đủ điều kiện kinh doanh dược bị mất, hư hỏng; Thông tin ghi trên Giấy chứng nhận đủ điều kiện kinh doanh dược bị ghi sai do lỗi của cơ quan cấp Giấy chứng nhận đủ điều kiện kinh doanh dược)</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl24_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl24$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">25</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl25_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl25$lbThuTucDetail','')">Thông báo hoạt động bán lẻ thuốc lưu động</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl25_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl25$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">26</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl26_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl26$lbThuTucDetail','')">Cấp Giấy xác nhận nội dung thông tin thuốc theo hình thức hội thảo giới thiệu thuốc</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl26_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl26$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">27</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl27_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl27$lbThuTucDetail','')">Điều chỉnh Giấy chứng nhận đủ điều kiện kinh doanh dược</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl27_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl27$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">28</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl28_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl28$lbThuTucDetail','')">Cấp lại Giấy xác nhận nội dung thông tin thuốc theo hình thức hội thảo giới thiệu thuốc</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl28_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl28$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">29</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl29_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl29$lbThuTucDetail','')">Cấp Giấy chứng nhận đủ điều kiện sản xuất mỹ phẩm</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl29_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl29$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">30</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl30_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl30$lbThuTucDetail','')">Cấp lại Giấy chứng nhận đủ điều kiện sản xuất mỹ phẩm</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl30_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl30$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">31</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl31_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl31$lbThuTucDetail','')">Điều chỉnh Giấy chứng nhận đủ điều kiện sản xuất mỹ phẩm</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl31_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl31$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">32</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl32_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl32$lbThuTucDetail','')">Cấp giấy chứng nhận bị nhiễm HIV do tai nạn rủi ro nghề nghiệp</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl32_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl32$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">33</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl33_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl33$lbThuTucDetail','')">Cấp giấy chứng nhận bị phơi nhiễm với HIV do tai nạn rủi ro nghề nghiệp</a>
                    </td>
                    <td>Sở Y tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl33_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl33$lbDangKy','')">Đăng ký</a></td>
                </tr>






























                <tr role="row" class="odd">
                    <td class="sorting_1">1</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbThuTucDetail','')">Cấp giấy chứng nhận đầu tư đối với dự án có vốn đầu tư nước ngoài có quy mô vốn đầu tư dưới 300 tỷ đồng Việt Nam và không thuộc Danh mục lĩnh vực đầu tư có điều kiện (không gắn thành lập chi nhánh/doanh nghiệp)</a>
                    </td>
                    <td>Ban quản lý Khu kinh tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl01_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl01$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">2</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbThuTucDetail','')">Cấp giấy chứng nhận đầu tư đối với dự án có vốn đầu tư nước ngoài có quy mô vốn đầu tư dưới 300 tỷ đồng Việt Nam và không thuộc Danh mục lĩnh vực đầu tư có điều kiện gắn với thành lập doanh nghiệp</a>
                    </td>
                    <td>Ban quản lý Khu kinh tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl02_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl02$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">3</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbThuTucDetail','')">Cấp giấy chứng nhận đầu tư đối với dự án có vốn đầu tư nước ngoài có quy mô vốn đầu tư dưới 300 tỷ đồng Việt Nam và không thuộc Danh mục lĩnh vực đầu tư có điều kiện trường hợp gắn với thành lập chi nhánh</a>
                    </td>
                    <td>Ban quản lý Khu kinh tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl03_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl03$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">4</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbThuTucDetail','')">Cấp giấy chứng nhận đầu tư đối với dự án có quy mô vốn đầu tư từ 300 tỷ đồng trở lên không thuộc lĩnh vực đầu tư có điều kiện không gắn với thành lập doanh nghiệp/chi nhánh</a>
                    </td>
                    <td>Ban quản lý Khu kinh tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl04_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl04$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">5</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbThuTucDetail','')">Cấp giấy chứng nhận đầu tư đối với dự án có quy mô vốn đầu tư từ 300 tỷ đồng trở lên không thuộc lĩnh vực đầu tư có điều kiện gắn với thành lập doanh nghiệp</a>
                    </td>
                    <td>Ban quản lý Khu kinh tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl05_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl05$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">6</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbThuTucDetail','')">Cấp giấy chứng nhận đầu tư đối với dự án có quy mô vốn đầu tư từ 300 tỷ đồng trở lên không thuộc lĩnh vực đầu tư có điều kiện gắn với thành lập chi nhánh</a>
                    </td>
                    <td>Ban quản lý Khu kinh tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl06_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl06$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">7</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbThuTucDetail','')">Cấp giấy chứng nhận đầu tư đối với dự án đầu tư có quy mô vốn đầu tư dưới 300 tỷ đồng Việt Nam và thuộc lĩnh vực đầu tư có điều kiện không gắn với thành lập doanh nghiệp/chi nhánh</a>
                    </td>
                    <td>Ban quản lý Khu kinh tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl07_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl07$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">8</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbThuTucDetail','')">Cấp giấy chứng nhận đầu tư đối với dự án có vốn đầu tư dưới 300 tỷ đồng Việt Nam và thuộc lĩnh vực đầu tư có điều kiện gắn với thành lập doanh nghiệp</a>
                    </td>
                    <td>Ban quản lý Khu kinh tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl08_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl08$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">9</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbThuTucDetail','')">Cấp giấy chứng nhận đầu tư đối với dự án có vốn dưới 300 tỷ đồng Việt Nam và thuộc lĩnh vực đầu tư có điều kiện gắn với thành lập chi nhánh</a>
                    </td>
                    <td>Ban quản lý Khu kinh tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl09_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl09$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">10</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbThuTucDetail','')">Cấp giấy chứng nhận đầu tư đối với dự án đầu tư có quy mô vốn đầu tư từ 300 tỷ đồng Việt Nam trở lên và thuộc lĩnh vực đầu tư có điều kiện không gắn với thành lập doanh nghiệp/chi nhánh</a>
                    </td>
                    <td>Ban quản lý Khu kinh tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl10_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl10$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">11</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbThuTucDetail','')">Cấp giấy chứng nhận đầu tư đối với dự án có quy mô vốn đầu tư từ 300 tỷ đồng Việt Nam trở lên và thuộc lĩnh vực đầu tư có điều kiện gắn với thành lập doanh nghiệp</a>
                    </td>
                    <td>Ban quản lý Khu kinh tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl11_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl11$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">12</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbThuTucDetail','')">Cấp giấy chứng nhận đầu tư đối với dự án có quy mô vốn đầu tư từ 300 tỷ đồng Việt Nam trở lên và thuộc lĩnh vực đầu tư có điều kiện gắn với thành lập chi nhánh</a>
                    </td>
                    <td>Ban quản lý Khu kinh tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl12_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl12$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="odd">
                    <td class="sorting_1">13</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbThuTucDetail','')">Cấp giấy chứng nhận đầu tư đối với dự án đầu tư thuộc thẩm quyền chấp thuận của Thủ tướng Chính phủ không gắn với thành lập doanh nghiệp/chi nhánh</a>
                    </td>
                    <td>Ban quản lý Khu kinh tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl13_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl13$lbDangKy','')">Đăng ký</a></td>
                </tr><tr role="row" class="even">
                    <td class="sorting_1">14</td>
                    <td>
                        <a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbThuTucDetail" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbThuTucDetail','')">Cấp giấy chứng nhận đầu tư đối với dự án thuộc thẩm quyền chấp thuận của Thủ tướng Chính phủ có vốn đầu tư nước ngoài gắn với thành lập doanh nghiệp</a>
                    </td>
                    <td>Ban quản lý Khu kinh tế</td>
                    <td><a id="ctl00_ctl00_SPWebPartManager_g_ec30cf66_c1d4_4956_bf95_28f0423172c8_ctl00_rptDanhMucThuTuc_ctl14_lbDangKy" class="btn btn-blue text-uppercase btn-dangky" href="javascript:__doPostBack('ctl00$ctl00$SPWebPartManager$g_ec30cf66_c1d4_4956_bf95_28f0423172c8$ctl00$rptDanhMucThuTuc$ctl14$lbDangKy','')">Đăng ký</a></td>
                </tr>

                    </tbody>

                </table>

            </div>
        </div>
    </div>
    @stop