<html>
<head>
    <title>Doanh nghiep hoi</title>

    @include('guest.layout.css')
    @include('guest.layout.js')

</head>

<body>


<table class="table table-striped table-bordered table-responsive table-sm">
    <tbody>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=1" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH H&ugrave;ng Cường<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Thi&ecirc;n Lộc</td>
        <td>
            <p>Theo quy định tại Điều 15 Nghị định số 86/2014/NĐ- CP ng&agrave;y 10/09/2014 của Ch&iacute;nh phủ về kinh doanh v&agrave; điều kiện kinh doanh vận tải bằng xe &ocirc;t&ocirc;, th&igrave; điều kiện kinh doanh vận tải h&agrave;nh kh&aacute;ch theo tuyến cố định c&oacute; c&aacute;c điều kiện sau: I. Doanh nghiệp, hợp t&aacute;c x&atilde; c&oacute; đủ c&aacute;c điều kiện quy định tại Điều 13 Nghị định số 86/2014/NĐ- CP ng&agrave;y 10/09/2014 của Ch&iacute;nh phủ. Theo quy định tại Điều 13 Nghị định số 86/2014/NĐ-CP ng&agrave;y 10/09/2014 của Ch&iacute;nh phủ th&igrave; c&oacute; c&aacute;c điều kiện sau: 1. Đăng k&yacute; kinh doanh vận tải bằng xe &ocirc; t&ocirc; theo quy định của ph&aacute;p luật. 2. Phương tiện phải bảo đảm số lượng, chất lượng ph&ugrave; hợp với h&igrave;nh thức kinh doanh, cụ thể: a) Khi hoạt động kinh doanh vận tải phải c&oacute; đủ số lượng phương tiện theo phương &aacute;n kinh doanh đ&atilde; được duyệt; phương tiện phải thuộc quyền sở hữu của đơn vị kinh doanh vận tải hoặc quyền sử dụng hợp ph&aacute;p theo hợp đồng của đơn vị kinh doanh vận tải với tổ chức cho thu&ecirc; t&agrave;i ch&iacute;nh hoặc tổ chức, c&aacute; nh&acirc;n c&oacute; chức năng cho thu&ecirc; t&agrave;i sản theo quy định của ph&aacute;p luật. Trường hợp xe đăng k&yacute; thuộc sở hữu của th&agrave;nh vi&ecirc;n hợp t&aacute;c x&atilde; phải c&oacute; hợp đồng dịch vụ giữa th&agrave;nh vi&ecirc;n với hợp t&aacute;c x&atilde;, trong đ&oacute; quy định hợp t&aacute;c x&atilde; c&oacute; quyền, tr&aacute;ch nhiệm v&agrave; nghĩa vụ quản l&yacute;, sử dụng, điều h&agrave;nh xe &ocirc; t&ocirc; thuộc sở hữu của th&agrave;nh vi&ecirc;n hợp t&aacute;c x&atilde;; b) Xe &ocirc; t&ocirc; phải bảo đảm an to&agrave;n kỹ thuật v&agrave; bảo vệ m&ocirc;i trường; c) Xe phải được gắn thiết bị gi&aacute;m s&aacute;t h&agrave;nh tr&igrave;nh theo quy định tại Điều 14 Nghị định n&agrave;y. 3. L&aacute;i xe v&agrave; nh&acirc;n vi&ecirc;n phục vụ tr&ecirc;n xe: a) L&aacute;i xe kh&ocirc;ng phải l&agrave; người đang trong thời gian bị cấm h&agrave;nh nghề theo quy định của ph&aacute;p luật; b) L&aacute;i xe v&agrave; nh&acirc;n vi&ecirc;n phục vụ tr&ecirc;n xe phải c&oacute; hợp đồng lao động bằng văn bản với đơn vị kinh doanh vận tải theo mẫu của Bộ Lao động - Thương binh v&agrave; X&atilde; hội (trừ c&aacute;c trường hợp đồng thời l&agrave; chủ hộ kinh doanh hoặc l&agrave; bố, mẹ, vợ, chồng hoặc con của chủ hộ kinh doanh); c) Nh&acirc;n vi&ecirc;n phục vụ tr&ecirc;n xe phải được tập huấn về nghiệp vụ v&agrave; c&aacute;c quy định của ph&aacute;p luật đối với hoạt động vận tải theo quy định của Bộ Giao th&ocirc;ng vận tải. Nh&acirc;n vi&ecirc;n phục vụ tr&ecirc;n xe vận tải kh&aacute;ch du lịch c&ograve;n phải được tập huấn về nghiệp vụ du lịch theo quy định của ph&aacute;p luật li&ecirc;n quan về du lịch. 4. Người điều h&agrave;nh vận tải phải c&oacute; tr&igrave;nh độ chuy&ecirc;n m&ocirc;n về vận tải từ trung cấp trở l&ecirc;n hoặc c&oacute; tr&igrave;nh độ từ cao đẳng trở l&ecirc;n đối với c&aacute;c chuy&ecirc;n ng&agrave;nh kinh tế, kỹ thuật kh&aacute;c v&agrave; c&oacute; thời gian c&ocirc;ng t&aacute;c li&ecirc;n tục tại đơn vị vận tải từ 03 năm trở l&ecirc;n. 5. Nơi đỗ xe: Đơn vị kinh doanh vận tải phải c&oacute; nơi đỗ xe ph&ugrave; hợp với phương &aacute;n kinh doanh v&agrave; đảm bảo c&aacute;c y&ecirc;u cầu về an to&agrave;n giao th&ocirc;ng, ph&ograve;ng chống ch&aacute;y, nổ v&agrave; vệ sinh m&ocirc;i trường theo quy định của ph&aacute;p luật. 6. Về tổ chức, quản l&yacute;: a) Đơn vị kinh doanh vận tải c&oacute; phương tiện thuộc diện bắt buộc phải gắn thiết bị gi&aacute;m s&aacute;t h&agrave;nh tr&igrave;nh của xe phải trang bị m&aacute;y t&iacute;nh, đường truyền kết nối mạng v&agrave; phải theo d&otilde;i, xử l&yacute; th&ocirc;ng tin tiếp nhận từ thiết bị gi&aacute;m s&aacute;t h&agrave;nh tr&igrave;nh của xe; b) Đơn vị kinh doanh vận tải bố tr&iacute; đủ số lượng l&aacute;i xe theo phương &aacute;n kinh doanh, chịu tr&aacute;ch nhiệm tổ chức kh&aacute;m sức khỏe cho l&aacute;i xe v&agrave; sử dụng l&aacute;i xe đủ sức khỏe theo quy định; đối với xe &ocirc; t&ocirc; kinh doanh vận tải h&agrave;nh kh&aacute;ch c&oacute; trọng tải thiết kế từ 30 chỗ ngồi trở l&ecirc;n (bao gồm cả chỗ ngồi, chỗ đứng v&agrave; giường nằm) phải c&oacute; nh&acirc;n vi&ecirc;n phục vụ tr&ecirc;n xe (trừ xe hợp đồng đưa đ&oacute;n c&aacute;n bộ, c&ocirc;ng nh&acirc;n vi&ecirc;n, học sinh, sinh vi&ecirc;n đi l&agrave;m, đi học v&agrave; xe bu&yacute;t c&oacute; thiết bị thay thế nh&acirc;n vi&ecirc;n phục vụ); c) Doanh nghiệp, hợp t&aacute;c x&atilde; kinh doanh vận tải h&agrave;nh kh&aacute;ch theo tuyến cố định, vận tải h&agrave;nh kh&aacute;ch bằng xe bu&yacute;t, vận tải h&agrave;nh kh&aacute;ch bằng xe taxi, vận tải h&agrave;ng h&oacute;a bằng c&ocirc;ng - ten - nơ phải c&oacute; bộ phận quản l&yacute;, theo d&otilde;i c&aacute;c điều kiện về an to&agrave;n giao th&ocirc;ng; d) Doanh nghiệp, hợp t&aacute;c x&atilde; kinh doanh vận tải h&agrave;nh kh&aacute;ch bằng xe &ocirc; t&ocirc; theo tuyến cố định, xe bu&yacute;t, xe taxi phải đăng k&yacute; v&agrave; thực hiện ti&ecirc;u chuẩn chất lượng dịch vụ vận tải h&agrave;nh kh&aacute;ch. II. Xe &ocirc; t&ocirc; kinh doanh vận tải h&agrave;nh kh&aacute;ch phải c&oacute; chỗ ngồi ưu ti&ecirc;n cho người khuyết tật, người cao tuổi v&agrave; phụ nữ đang mang thai theo lộ tr&igrave;nh như sau: 1) Xe &ocirc; t&ocirc; đăng k&yacute; khai th&aacute;c kinh doanh vận tải lần đầu: Thực hiện từ ng&agrave;y 01 th&aacute;ng 01 năm 2016; 2) Xe &ocirc; t&ocirc; đang khai th&aacute;c: Thực hiện từ ng&agrave;y 01 th&aacute;ng 7 năm 2017. III. Xe &ocirc; t&ocirc; c&oacute; trọng tải được ph&eacute;p chở từ 10 h&agrave;nh kh&aacute;ch trở l&ecirc;n phải c&oacute; ni&ecirc;n hạn sử dụng như sau: 1) Cự ly tr&ecirc;n 300 ki l&ocirc; m&eacute;t: Kh&ocirc;ng qu&aacute; 15 năm đối với &ocirc; t&ocirc; sản xuất để chở người; từ ng&agrave;y 01 th&aacute;ng 01 năm 2016 kh&ocirc;ng được sử dụng xe &ocirc; t&ocirc; chuyển đổi c&ocirc;ng năng; 2) Cự ly từ 300 ki l&ocirc; m&eacute;t trở xuống: Kh&ocirc;ng qu&aacute; 20 năm đối với xe &ocirc; t&ocirc; sản xuất để chở người; kh&ocirc;ng qu&aacute; 17 năm đối với &ocirc; t&ocirc; chuyển đổi c&ocirc;ng năng trước ng&agrave;y 01 th&aacute;ng 01 năm 2002 từ c&aacute;c loại xe kh&aacute;c th&agrave;nh xe &ocirc; t&ocirc; chở kh&aacute;ch. IV. Từ ng&agrave;y 01 th&aacute;ng 7 năm 2016, doanh nghiệp, hợp t&aacute;c x&atilde; kinh doanh vận tải h&agrave;nh kh&aacute;ch theo tuyến cố định từ 300 ki l&ocirc; m&eacute;t trở l&ecirc;n phải c&oacute; số lượng phương tiện tối thiểu như sau: 1) Đối với đơn vị c&oacute; trụ sở đặt tại c&aacute;c th&agrave;nh phố trực thuộc Trung ương: Từ 20 xe trở l&ecirc;n; 2) Đối với đơn vị c&oacute; trụ sở đặt tại c&aacute;c địa phương c&ograve;n lại: Từ 10 xe trở l&ecirc;n; ri&ecirc;ng đơn vị c&oacute; trụ sở đặt tại huyện ngh&egrave;o theo quy định của Ch&iacute;nh phủ: Từ 05 xe trở l&ecirc;n. C&aacute;c điều kiện tr&ecirc;n được hướng dẫn chi tiết tại Mục 2 Chương 2 Th&ocirc;ng tư số 63/2014/TT-BGTVT ng&agrave;y 07/11/2014 của Bộ Giao th&ocirc;ng vận tải Quy định về tổ chức, quản l&yacute; hoạt động kinh doanh vận tải bằng xe &ocirc; t&ocirc; v&agrave; dịch vụ hỗ trợ vận tải đường bộ. Đề nghị nghi&ecirc;n cứu th&ecirc;m Nghị định số 86/2014/NĐ- CP ng&agrave;y 10/09/2014 của Ch&iacute;nh phủ về kinh doanh v&agrave; điều kiện kinh doanh vận tải bằng xe &ocirc;t&ocirc; v&agrave; Th&ocirc;ng tư số 63/2014/TT-BGTVT ng&agrave;y 07/11/2014 của Bộ Giao th&ocirc;ng vận tải Quy định về tổ chức, quản l&yacute; hoạt động kinh doanh vận tải bằng xe &ocirc; t&ocirc; v&agrave; dịch vụ hỗ trợ vận tải đường bộ.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Việt Thắng&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sogiaothong@hatinh.gov.vn">sogiaothong@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0949256368&quot;}</p>
        </td>
        <td>
            <p>Doanh nghiệp kinh doanh vận tải h&agrave;nh kh&aacute;ch theo tuyến cố định cần những điều kiện g&igrave; ?</p>
        </td>
        <td>Email</td>
        <td>5</td>
        <td>Type</td>
        <td>public</td>
        <td>&nbsp;</td>
        <td>5</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=4" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Vận Tải H&ugrave;ng T&agrave;i<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Thi&ecirc;n Lộc</td>
        <td>
            <p>Nội dung trả lời: Theo quy định tại Khoản 3 Điều 52 Th&ocirc;ng tư số 21/2015/TT- BNNPTNT ng&agrave;y 08/6/2015 của Bộ N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển N&ocirc;ng th&ocirc;n về quản l&yacute; thuốc bảo vệ thực vật th&igrave; phương tiện vận chuyển thuốc bảo vệ thực vật như sau: a) C&aacute;c phương tiện vận tải th&ocirc;ng thường được c&aacute;c cơ quan c&oacute; thẩm quyền cho ph&eacute;p lưu h&agrave;nh để vận chuyển h&agrave;ng h&oacute;a th&igrave; được chuy&ecirc;n chở thuốc bảo vệ thực vật. b) Phương tiện chuy&ecirc;n chở thuốc bảo vệ thực vật phải đảm bảo c&aacute;c điều kiện kỹ thuật sau: C&oacute; dụng cụ, trang thiết bị ph&ograve;ng ch&aacute;y, chữa ch&aacute;y ph&ugrave; hợp với thuốc bảo vệ thực vật khi vận chuyển; C&oacute; mui, bạt che phủ k&iacute;n, chắc chắn to&agrave;n bộ khoang chở h&agrave;ng đảm bảo kh&ocirc;ng thấm nước trong qu&aacute; tr&igrave;nh vận chuyển; Kh&ocirc;ng d&ugrave;ng xe rơ m&oacute;c để chuy&ecirc;n chở thuốc bảo vệ thực vật. c) Phương tiện chuy&ecirc;n chở thuốc bảo vệ thực vật được xếp cuối c&ugrave;ng của mỗi chuyến ph&agrave;, nếu bến ph&agrave; kh&ocirc;ng c&oacute; ph&agrave; chuy&ecirc;n d&ugrave;ng cho loại h&agrave;ng nguy hiểm. d) Phương tiện chuy&ecirc;n chở c&aacute;c th&ugrave;ng chứa thuốc bảo vệ thực vật phải được d&aacute;n h&igrave;nh đồ cảnh b&aacute;o của loại nh&oacute;m h&agrave;ng đang vận chuyển. K&iacute;ch thước của h&igrave;nh đồ cảnh b&aacute;o d&aacute;n tr&ecirc;n phương tiện l&agrave; 500 x 500 mi-li-m&eacute;t (mm). Vị tr&iacute; d&aacute;n h&igrave;nh đồ cảnh b&aacute;o ở hai b&ecirc;n v&agrave; ph&iacute;a sau phương tiện. Lĩnh vực n&agrave;y kh&ocirc;ng thuộc ng&agrave;nh giao th&ocirc;ng vận tải n&ecirc;n nếu chưa rỏ th&igrave; li&ecirc;n hệ Sở NN&amp;PT N&ocirc;ng th&ocirc;n để được trả lời cụ thể hơn.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Việt Thắng&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sogiaothong@hatinh.gov.vn">sogiaothong@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0949256368&quot;}</p>
        </td>
        <td>
            <p>Xin hỏi quy định cụ thể phương tiện n&agrave;o th&igrave; được vận chuyển thuốc bảo vệ thực vật ?</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH Vận Tải H&ugrave;ng T&agrave;i</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237777</td>
        <td>5</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=5" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH vận tải H&ograve;a Hải<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Nội dung trả lời: Về th&ugrave;ng xe v&agrave; mui phủ th&ugrave;ng xe đối với xe tải khi tham gia giao th&ocirc;ng theo quy định tại Điều 4, Điều 5 Th&ocirc;ng tư số 42/2014/TT- BGTVT ng&agrave;y 15/9/2014 của Bộ Giao th&ocirc;ng vận tải về việc Quy định về th&ugrave;ng xe của xe tự đổ, xe xi t&eacute;c, xe tải tham gia giao th&ocirc;ng đường bộ th&igrave; quy định như sau: I. Quy định về th&ugrave;ng xe: 1. Th&ugrave;ng xe phải c&oacute; kết cấu vững chắc, đảm bảo an to&agrave;n cho h&agrave;ng h&oacute;a được chuy&ecirc;n chở, c&oacute; s&agrave;n, c&aacute;c th&agrave;nh th&ugrave;ng ph&iacute;a trước, b&ecirc;n cạnh v&agrave; ph&iacute;a sau. Th&ugrave;ng xe kh&ocirc;ng được c&oacute; c&aacute;c kết cấu để lắp được c&aacute;c chi tiết, cụm chi tiết dẫn tới việc l&agrave;m tăng thể t&iacute;ch chứa h&agrave;ng. Đối với th&ugrave;ng hở của loại sơ mi rơ mo&oacute;c tải được thiết kế để chở h&agrave;ng h&oacute;a v&agrave; chở được c&ocirc;ng-ten-nơ th&igrave; c&ograve;n phải bố tr&iacute; c&aacute;c kh&oacute;a h&atilde;m c&ocirc;ng-ten-nơ. 2. Th&ugrave;ng xe sau khi lắp đặt l&ecirc;n xe phải tu&acirc;n thủ c&aacute;c y&ecirc;u cầu sau: a) K&iacute;ch thước giới hạn cho ph&eacute;p của xe phải tu&acirc;n thủ quy định tại Quy chuẩn kỹ thuật quốc gia QCVN 09:2011/BGTVT &ldquo;Quy chuẩn kỹ thuật quốc gia về chất lượng an to&agrave;n kỹ thuật v&agrave; bảo vệ m&ocirc;i trường đối với &ocirc; t&ocirc;&rdquo;, Quy chuẩn kỹ thuật quốc gia QCVN 11:2011/BGTVT &ldquo;Quy chuẩn kỹ thuật quốc gia về chất lượng an to&agrave;n kỹ thuật đối với rơ mo&oacute;c v&agrave; sơ mi rơ mo&oacute;c&rdquo;. Ngo&agrave;i ra, đối với xe tự đổ, xe tải th&igrave; chiều d&agrave;i to&agrave;n bộ của th&ugrave;ng xe phải tu&acirc;n thủ y&ecirc;u cầu về chiều d&agrave;i to&agrave;n bộ của xe (L) theo quy định tại Phụ lục II của Th&ocirc;ng tư số 42/2014/TT- BGTVT ng&agrave;y 15/9/2014; b) Chiều d&agrave;i đu&ocirc;i xe (ROH) kh&ocirc;ng lớn hơn 60% của chiều d&agrave;i cơ sở t&iacute;nh to&aacute;n (WB) x&aacute;c định theo nguy&ecirc;n tắc quy định tại Phụ lục III của Th&ocirc;ng tư số 42/2014/TT- BGTVT ng&agrave;y 15/9/2014; c) Khối lượng to&agrave;n bộ cho ph&eacute;p tham gia giao th&ocirc;ng của xe v&agrave; sự ph&acirc;n bố khối lượng tr&ecirc;n c&aacute;c trục xe sau khi đ&atilde; lắp th&ugrave;ng xe được x&aacute;c định theo nguy&ecirc;n tắc quy định tại Phụ lục III của Th&ocirc;ng tư số 42/2014/TT- BGTVT ng&agrave;y 15/9/2014; d) Khối lượng ph&acirc;n bố l&ecirc;n vị tr&iacute; chốt k&eacute;o (kingpin) của sơ mi rơ mo&oacute;c tải, kể cả sơ mi rơ mo&oacute;c tải chở c&ocirc;ng-ten-nơ (trừ loại sơ mi rơ mo&oacute;c tải chở c&ocirc;ng-ten-nơ c&oacute; chiều d&agrave;i to&agrave;n bộ nhỏ hơn 10m) phải đảm bảo kh&ocirc;ng nhỏ hơn 35% khối lượng to&agrave;n bộ cho ph&eacute;p tham gia giao th&ocirc;ng đối với sơ mi rơ mo&oacute;c tải c&oacute; tổng số trục từ ba trở l&ecirc;n; kh&ocirc;ng nhỏ hơn 40% khối lượng to&agrave;n bộ cho ph&eacute;p tham gia giao th&ocirc;ng đối với sơ mi rơ mo&oacute;c tải c&oacute; tổng số trục bằng hai. 3. Chiều cao Ht của th&ugrave;ng xe tải phải tu&acirc;n thủ quy định tại Phụ lục II của Th&ocirc;ng tư số 42/2014/TT- BGTVT ng&agrave;y 15/9/2014. 4. Thể t&iacute;ch chứa h&agrave;ng của th&ugrave;ng xe tự đổ được x&aacute;c định theo c&aacute;c k&iacute;ch thước h&igrave;nh học b&ecirc;n trong l&ograve;ng th&ugrave;ng xe v&agrave; đảm bảo sao cho khối lượng ri&ecirc;ng biểu kiến &gamma;v tu&acirc;n thủ quy định tại Phụ lục II của Th&ocirc;ng tư số 42/2014/TT- BGTVT ng&agrave;y 15/9/2014. 5. Thể t&iacute;ch chứa h&agrave;ng của th&ugrave;ng xe xi t&eacute;c phải tu&acirc;n thủ c&aacute;c y&ecirc;u cầu sau: a) Thể t&iacute;ch chứa h&agrave;ng của th&ugrave;ng xe xi t&eacute;c Vt (kh&ocirc;ng t&iacute;nh đến thể t&iacute;ch của c&aacute;c cửa nạp h&agrave;ng) được x&aacute;c định theo c&aacute;c k&iacute;ch thước h&igrave;nh học b&ecirc;n trong của xi t&eacute;c v&agrave; kh&ocirc;ng lớn hơn thể t&iacute;ch được x&aacute;c định bằng khối lượng h&agrave;ng h&oacute;a chuy&ecirc;n chở cho ph&eacute;p tham gia giao th&ocirc;ng chia cho khối lượng ri&ecirc;ng của loại h&agrave;ng h&oacute;a chuy&ecirc;n chở n&ecirc;u trong c&aacute;c t&agrave;i liệu chuy&ecirc;n ng&agrave;nh hoặc theo trị số c&ocirc;ng bố của cơ quan, tổ chức c&oacute; thẩm quyền. Trường hợp h&agrave;ng h&oacute;a chuy&ecirc;n chở c&oacute; khối lượng ri&ecirc;ng biến thi&ecirc;n trong dải trị số th&igrave; khối lượng ri&ecirc;ng được ghi nhận theo gi&aacute; trị trung b&igrave;nh của dải biến thi&ecirc;n; b) Đối với xi t&eacute;c chứa c&aacute;c loại kh&iacute; h&oacute;a lỏng c&oacute; khả năng d&atilde;n nở trong qu&aacute; tr&igrave;nh vận chuyển hoặc được nạp v&agrave;o xi t&eacute;c theo c&aacute;c điều kiện về &aacute;p suất v&agrave; nhiệt độ nhất định th&igrave; thể t&iacute;ch chứa h&agrave;ng được x&aacute;c định như sau: Vt = 0,9 Vhh (trong đ&oacute; Vhh l&agrave; thể t&iacute;ch xi t&eacute;c được x&aacute;c định theo c&aacute;c k&iacute;ch thước h&igrave;nh học b&ecirc;n trong của xi t&eacute;c); c)Trường hợp kh&ocirc;ng c&oacute; t&agrave;i liệu giới thiệu t&iacute;nh năng v&agrave; th&ocirc;ng số kỹ thuật hoặc giữa trị số thể t&iacute;ch chứa h&agrave;ng theo kết quả kiểm tra sai kh&aacute;c tr&ecirc;n 10% so với t&agrave;i liệu giới thiệu t&iacute;nh năng v&agrave; th&ocirc;ng số kỹ thuật của xe th&igrave; thể t&iacute;ch chứa h&agrave;ng của xi t&eacute;c được x&aacute;c định bằng phương ph&aacute;p đo kiểm thực tế. II. Quy định về mui phủ: 1. Tấm phủ phải l&agrave; bạt che. 2. Khung mui: a) Được thiết kế đảm bảo ổn định v&agrave; an to&agrave;n khi xe tham gia giao th&ocirc;ng; b) Khoảng c&aacute;ch giữa 2 thanh khung mui liền kề (t) kh&ocirc;ng nhỏ hơn 0,55m. Đề nghị nghi&ecirc;n cứu th&ecirc;m Th&ocirc;ng tư số 42/2014/TT- BGTVT ng&agrave;y 15/9/2014 của Bộ Giao th&ocirc;ng vận tải về việc Quy định về th&ugrave;ng xe của xe tự đổ, xe xi t&eacute;c, xe tải tham gia giao th&ocirc;ng đường bộ.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Việt Thắng&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sogiaothong@hatinh.gov.vn">sogiaothong@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0949256368&quot;}</p>
        </td>
        <td>
            <p>Doanh nghiệp t&ocirc;i kinh doanh vận tải nguy&ecirc;n vật liệu x&acirc;y dựng. Xin hỏi gần đ&acirc;y nh&agrave; nước c&oacute; quy định mới n&agrave;o về th&ugrave;ng xe v&agrave; mui phủ th&ugrave;ng xe đối với xe tải khi tham gia giao th&ocirc;ng ?</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH vận tải H&ograve;a Hải</td>
        <td>DN</td>
        <td>public</td>
        <td>34234823</td>
        <td>5</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=6" onclick="GoToLink(this);return false;" target="_self">Li&ecirc;n hiệp c&aacute;c Hội doanh nghiệp<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Theo quy định tại khoản 2, Điều 64 Luật Kho&aacute;ng sản 2010: Tổ chức, c&aacute; nh&acirc;n khai th&aacute;c kho&aacute;ng sản l&agrave;m vật liệu x&acirc;y dựng th&ocirc;ng thường kh&ocirc;ng phải đề nghị cấp Giấy ph&eacute;p khai th&aacute;c kho&aacute;ng sản trong c&aacute;c trường hợp sau đ&acirc;y: a) Khai th&aacute;c trong diện t&iacute;ch đất của dự &aacute;n đầu tư x&acirc;y dựng c&ocirc;ng tr&igrave;nh đ&atilde; được cơ quan quản l&yacute; nh&agrave; nước c&oacute; thẩm quyền ph&ecirc; duyệt hoặc cho ph&eacute;p đầu tư m&agrave; sản phẩm khai th&aacute;c chỉ được sử dụng cho x&acirc;y dựng c&ocirc;ng tr&igrave;nh đ&oacute;. Trước khi tiến h&agrave;nh khai th&aacute;c kho&aacute;ng sản, tổ chức, c&aacute; nh&acirc;n phải đăng k&yacute; khu vực, c&ocirc;ng suất, khối lượng, phương ph&aacute;p, thiết bị v&agrave; kế hoạch khai th&aacute;c tại Ủy ban nh&acirc;n d&acirc;n cấp tỉnh; b) Khai th&aacute;c trong diện t&iacute;ch đất ở thuộc quyền sử dụng đất của hộ gia đ&igrave;nh, c&aacute; nh&acirc;n để x&acirc;y dựng c&aacute;c c&ocirc;ng tr&igrave;nh của hộ gia đ&igrave;nh, c&aacute; nh&acirc;n trong diện t&iacute;ch đ&oacute;. Tuy nhi&ecirc;n, Tổ chức, c&aacute; nh&acirc;n khai th&aacute;c kho&aacute;ng sản l&agrave;m vật liệu x&acirc;y dựng th&ocirc;ng thường quy định tại điểm a khoản 2 Điều n&agrave;y phải nộp tiền cấp quyền khai th&aacute;c kho&aacute;ng sản.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Văn Th&agrave;nh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; trưởng ph&ograve;ng&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sotainguyen_moitruong@hatinh.gov.vn">sotainguyen_moitruong@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0393852609&quot;}</p>
        </td>
        <td>
            <p>Trong trường hợp n&agrave;o th&igrave; khai th&aacute;c, chế biến kho&aacute;ng sản l&agrave;m VLXD th&ocirc;ng thường kh&ocirc;ng phải xin giấy ph&eacute;p khai th&aacute;c?</p>
        </td>
        <td>&nbsp;</td>
        <td>Ho&agrave;ng Trung Th&ocirc;ng</td>
        <td>DN</td>
        <td>public</td>
        <td>23223</td>
        <td>13</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=7" onclick="GoToLink(this);return false;" target="_self">Văn ph&ograve;ng Li&ecirc;n hiệp Hội Doanh nghiệp<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>2.1. Điều kiện để được cấp ph&eacute;p khai th&aacute;c: Theo quy định tại khoản 2, Điều 53 Luật Kho&aacute;ng sản 2010: Tổ chức, c&aacute; nh&acirc;n được cấp Giấy ph&eacute;p khai th&aacute;c kho&aacute;ng sản phải c&oacute; đủ c&aacute;c điều kiện sau đ&acirc;y: a) C&oacute; dự &aacute;n đầu tư khai th&aacute;c kho&aacute;ng sản ở khu vực đ&atilde; thăm d&ograve;, ph&ecirc; duyệt trữ lượng ph&ugrave; hợp với quy hoạch quy định tại c&aacute;c điểm b, c v&agrave; d khoản 1 Điều 10 của Luật Kho&aacute;ng sản. Dự &aacute;n đầu tư khai th&aacute;c kho&aacute;ng sản phải c&oacute; phương &aacute;n sử dụng nh&acirc;n lực chuy&ecirc;n ng&agrave;nh, thiết bị, c&ocirc;ng nghệ, phương ph&aacute;p khai th&aacute;c ti&ecirc;n tiến ph&ugrave; hợp; đối với kho&aacute;ng sản độc hại c&ograve;n phải được Thủ tướng Ch&iacute;nh phủ cho ph&eacute;p bằng văn bản; b) C&oacute; b&aacute;o c&aacute;o đ&aacute;nh gi&aacute; t&aacute;c động m&ocirc;i trường hoặc bản cam kết bảo vệ m&ocirc;i trường theo quy định của ph&aacute;p luật về bảo vệ m&ocirc;i trường; c) C&oacute; vốn chủ sở hữu &iacute;t nhất bằng 30% tổng số vốn đầu tư của dự &aacute;n đầu tư khai th&aacute;c kho&aacute;ng sản. 2.2. Thủ tục để được cấp ph&eacute;p khai th&aacute;c: Hồ sơ cấp Giấy ph&eacute;p khai th&aacute;c kho&aacute;ng sản quy định tại khoản 1, Điều 59 Luật Kho&aacute;ng sản 2010, bao gồm: a) Đơn đề nghị cấp Giấy ph&eacute;p khai th&aacute;c kho&aacute;ng sản; b) Bản đồ khu vực khai th&aacute;c kho&aacute;ng sản; c) Quyết định ph&ecirc; duyệt trữ lượng kho&aacute;ng sản của cơ quan nh&agrave; nước c&oacute; thẩm quyền; d) Dự &aacute;n đầu tư khai th&aacute;c kho&aacute;ng sản k&egrave;m theo quyết định ph&ecirc; duyệt v&agrave; bản sao giấy chứng nhận đầu tư; đ) B&aacute;o c&aacute;o đ&aacute;nh gi&aacute; t&aacute;c động m&ocirc;i trường hoặc bản cam kết bảo vệ m&ocirc;i trường; e) Bản sao giấy chứng nhận đăng k&yacute; kinh doanh; g) Trường hợp tr&uacute;ng đấu gi&aacute; quyền khai th&aacute;c kho&aacute;ng sản th&igrave; phải c&oacute; văn bản x&aacute;c nhận tr&uacute;ng đấu gi&aacute;; h) Văn bản x&aacute;c nhận vốn chủ sở hữu theo quy định tại điểm c khoản 2 Điều 53 của Luật n&agrave;y. 2.3. Số lượng đơn vị đang hoạt động khai th&aacute;c c&aacute;t, sỏi t&ecirc;n địa b&agrave;n tỉnh Tr&ecirc;n địa b&agrave;n tỉnh hiện c&oacute; 05 đơn vị đ&atilde; được UBND tỉnh cấp giấy ph&eacute;p khai th&aacute;c c&aacute;t (đang c&ograve;n hiệu lực), cụ thể: DNTN C&ocirc;ng Tiến &ndash; mỏ c&aacute;t x&atilde; Đức Ho&agrave;, huyện Đức Thọ; C&ocirc;ng ty TNHH MTV Hữu Quyền &ndash; mỏ c&aacute;t x&atilde; Sơn T&acirc;n, huyện Hương Sơn; C&ocirc;ng ty CPXD v&agrave; KTKS Miền T&acirc;y &ndash; mỏ c&aacute;t x&atilde; Kỳ Phương, huyện Kỳ Anh; ng ty TNHH XNK Ch&acirc;u Tuấn &ndash; mỏ c&aacute;t x&atilde; An Lộc, huyện Can Lộc; C&ocirc;ng ty TNHH Quyết Thắng &ndash; mỏ c&aacute;t x&atilde; Đức Hương, huyện Vũ Quang. Trong đ&oacute; chỉ c&oacute; 03 c&ocirc;ng ty đang triển khai hoạt động khai th&aacute;c c&aacute;t, gồm: DNTN C&ocirc;ng Tiến, C&ocirc;ng ty CPXD v&agrave; KTKS Miền T&acirc;y v&agrave; C&ocirc;ng ty TNHH Quyết Thắng.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Văn Th&agrave;nh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; trưởng ph&ograve;ng&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sotainguyen_moitruong@hatinh.gov.vn">sotainguyen_moitruong@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0393852609&quot;}</p>
        </td>
        <td>
            <p>Điều kiện, thủ tục để doanh nghiệp được cấp ph&eacute;p khai th&aacute;c c&aacute;t, sỏi? Hiện nay c&oacute; bao nhi&ecirc;u đơn vị đang hoạt động khai th&aacute;c c&aacute;t, sỏi t&ecirc;n địa b&agrave;n tỉnh ta?</p>
        </td>
        <td>&nbsp;</td>
        <td>Ho&agrave;ng Trung Th&ocirc;ng</td>
        <td>DN</td>
        <td>public</td>
        <td>232</td>
        <td>13</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=8" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty cổ phần Tư vấn Kỹ thuật v&agrave; X&acirc;y dựng An Ph&uacute;<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Th&agrave;nh phố H&agrave; Tĩnh</td>
        <td>
            <p>Sau khi nghi&ecirc;n cứu, xem x&eacute;t tr&ecirc;n cư sở quy định của ph&aacute;p luật hiện h&agrave;nh, Sở X&acirc;y dựng c&oacute; &yacute; kiến như sau: 1. Theo quy định tại khoản 4 Điều 148 của Luật X&acirc;y dựng năm 2014, Quy định về điều kiện năng lực của tổ chức hoạt động x&acirc;y dựng th&igrave; tổ chức tham gia hoạt động x&acirc;y dựng được ph&acirc;n th&agrave;nh hạng I, hạng II, hạng III do cơ quan nh&agrave; nước c&oacute; thẩm quyền về x&acirc;y dựng đ&aacute;nh gi&aacute;, cấp chứng chỉ năng lực. Bộ X&acirc;y dựng cấp chứng chỉ năng lực hạng I; Sở X&acirc;y dựng cấp chứng chỉ năng lực hạng II v&agrave; hạng III. Cụ thể ho&aacute; nội dung n&agrave;y tại Điều 61 Nghị định số 59/2015/NĐ-CP, ng&agrave;y 18/6/2015 của Ch&iacute;nh phủ về quản l&yacute; dự &aacute;n đầu tư x&acirc;y dựng đ&atilde; quy định r&otilde; số lượng người tối thiểu cần phải c&oacute; đối với mỗi hạng, trong đ&oacute; Quy định chứng chỉ năng lực của tổ chức thiết kế, thẩm tra thiết kế x&acirc;y dựng c&ocirc;ng tr&igrave;nh: c&oacute; 3 hạng: hạng I, hạng hạng II v&agrave; hạng III. Hạng 3 l&agrave; hạng thấp nhất phải c&oacute; &iacute;t nhất 05 người c&oacute; chứng chỉ thiết kế hạng III ph&ugrave; hợp với loại c&ocirc;ng tr&igrave;nh đề nghị cấp chứng chỉ; những người chủ tr&igrave; thiết kế lĩnh vực chuy&ecirc;n m&ocirc;n phải c&oacute; chứng chỉ h&agrave;nh nghề thiết kế hạng III ph&ugrave; hợp với c&ocirc;ng việc đảm nhận; c&oacute; &iacute;t nhất 05 người trong hệ thống quản l&yacute; chất lượng của tổ chức thiết kế x&acirc;y dựng c&ocirc;ng tr&igrave;nh c&oacute; chuy&ecirc;n m&ocirc;n, nghiệp vụ ph&ugrave; hợp với loại c&ocirc;ng tr&igrave;nh đăng k&yacute; cấp chứng chỉ năng lực. Phạm vi hoạt động: được thiết kế v&agrave; thẩm tra thiết kế c&ocirc;ng tr&igrave;nh c&ugrave;ng loại cấp III trở xuống v&agrave; tại Điều 66 của Nghị định số 59/2015/NĐ-CP, Quy định chứng chỉ năng lực của tổ chức gi&aacute;m s&aacute;t thi c&ocirc;ng x&acirc;y dựng, kiểm định x&acirc;y dựng: c&oacute; 3 hạng: hạng I, hạng hạng II v&agrave; hạng III. Trong đ&oacute; hạng 3 l&agrave; hạng thấp nhất quy định c&oacute; &iacute;t nhất 05 người c&oacute; chứng chỉ h&agrave;nh nghề gi&aacute;m s&aacute;t thi c&ocirc;ng x&acirc;y dựng, kiểm định x&acirc;y dựng hạng III ph&ugrave; hợp với lĩnh vực gi&aacute;m s&aacute;t thi c&ocirc;ng x&acirc;y dựng, kiểm định x&acirc;y dựng. Phạm vi hoạt động: được gi&aacute;m s&aacute;t thi c&ocirc;ng x&acirc;y dựng, kiểm định x&acirc;y dựng c&aacute;c c&ocirc;ng tr&igrave;nh từ cấp III trở xuống c&ugrave;ng loại. Với quy định n&ecirc;u tr&ecirc;n doanh nghiệp muốn tham gia hoạt động x&acirc;y dựng th&igrave; phải c&oacute; năng lực với số người tối thiểu quy định đối với tầng hạng v&agrave; sẽ được hoạt động trong phạm vi tương ứng. 2. Hiện nay chưa c&oacute; văn bản hướng dẫn cụ thể về tr&igrave;nh tự, thủ tục, quy tr&igrave;nh cấp chứng chỉ năng lực cho tổ chức trong hoạt động x&acirc;y dựng, n&ecirc;n Sở X&acirc;y dựng chưa c&oacute; cơ sở để cấp, khi c&oacute; hướng dẩn Sở sẽ tổ chức cấp chứng chỉ theo quy định. 3. Tại Khoản 5 Điều 77, Nghị định số 59/2015/NĐ-CP, quy định: kể từ ng&agrave;y 01/3/2016 c&aacute;c tổ chức tham gia hoạt động x&acirc;y dựng phải c&oacute; chứng chỉ năng năng lực hoạt động x&acirc;y dựng. Sở X&acirc;y dựng sẽ đăng tải th&ocirc;ng tin về năng lực của c&aacute;c tổ chức tham gia hoạt động x&acirc;y dựng theo chứng chỉ được cấp tr&ecirc;n trang th&ocirc;ng tin điện tử của Sở để c&aacute;c chủ đầu tư c&oacute; c&ocirc;ng tr&igrave;nh x&acirc;y dựng c&oacute; căn cứ xem x&eacute;t khi lựa chọn c&aacute;c tổ chức tham gia hoạt động x&acirc;y dựng ./.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Trần Hậu Th&agrave;nh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:soxaydung@hatinh.gov.vn">soxaydung@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0393852609&quot;}</p>
        </td>
        <td>
            <p>Ch&iacute;nh phủ vừa mới ban h&agrave;nh Nghị định số 59/2015/NĐ-CP về quản l&yacute; dự &aacute;n đầu tư. Tại Muc 2, chương IV (điều kiện năng lực của tổ chức tư vấn) th&igrave; đối với những doanh nghiệp chưa đủ số lượng người xếp hạng III (v&iacute; dụ như thiết kế v&agrave; gi&aacute;m s&aacute;t thi c&ocirc;ng) th&igrave; phạm vi hoạt động thế n&agrave;o? Nếu tuyển đủ số lượng &iacute;t nhất th&igrave; doanh nghiệp chưa thể sống được, c&ograve;n nếu &iacute;t hơn số thấp nhất th&igrave; sao? Nghị định 12/2009 th&igrave; c&oacute; n&oacute;i r&otilde; nhưng NĐ 59 kh&ocirc;ng n&oacute;i r&otilde;. Mong được Sở hướng dẫn. Xin cảm ơn.</p>
        </td>
        <td>&nbsp;</td>
        <td>&Ocirc;ng Trần Đức Nh&acirc;n</td>
        <td>DN</td>
        <td>public</td>
        <td>0975.928956</td>
        <td>17</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=9" onclick="GoToLink(this);return false;" target="_self">C&Ocirc;NG TY TNHH Đ&Ocirc;NG LẠNH V&Agrave; ĐHKK KH&Ocirc;N LINH<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Kỳ Long, Kỳ Anh, H&agrave; Tĩnh</td>
        <td>
            <p>Theo quy định tại khoản 3 Điều 14 Th&ocirc;ng tư số 03/2014/TT-BLĐTBXH ng&agrave;y 20/01/2014 của Bộ Lao động &ndash; Thương binh v&agrave; X&atilde; hội: Đối với người lao động nước ngo&agrave;i đ&atilde; được cấp giấy ph&eacute;p lao động nhưng được cử, điều động hoặc biệt ph&aacute;i l&agrave;m việc to&agrave;n bộ thời gian tại một tỉnh, th&agrave;nh phố kh&aacute;c với tỉnh, th&agrave;nh phố nơi người lao động nước ngo&agrave;i đang l&agrave;m việc hoặc l&agrave;m vị tr&iacute; c&ocirc;ng việc kh&aacute;c cho người sử dụng lao động th&igrave; thực hiện cấp giấy ph&eacute;p lao động theo quy định&rdquo;. Theo quy định tại khoản 10 Điều 14 Th&ocirc;ng tư số 03/2014/TT-BLĐTBXH ng&agrave;y 20/01/2014 của Bộ Lao động &ndash; Thương binh v&agrave; X&atilde; hội: Người lao động nước ngo&agrave;i đ&atilde; được cấp giấy ph&eacute;p lao động nhưng được cử, điều động hoặc biệt ph&aacute;i đến l&agrave;m việc tại chi nh&aacute;nh, văn ph&ograve;ng đại diện hoặc cơ sở kh&aacute;c của người sử dụng lao động đ&oacute; ở trong v&agrave; ngo&agrave;i tỉnh, th&agrave;nh phố với thời hạn &iacute;t nhất 10 ng&agrave;y trong 01 th&aacute;ng hoặc &iacute;t nhất 30 ng&agrave;y cộng dồn trong 01 năm th&igrave; người sử dụng lao động phải th&ocirc;ng b&aacute;o bằng văn bản về thời gian l&agrave;m việc, vị tr&iacute; c&ocirc;ng việc của người lao động nước ngo&agrave;i đến l&agrave;m việc tại tỉnh, th&agrave;nh phố v&agrave; k&egrave;m theo bản sao giấy ph&eacute;p lao động đ&atilde; được cấp với Sở Lao động - Thương binh v&agrave; X&atilde; hội nơi người nước ngo&agrave;i đến l&agrave;m việc&rdquo;. Như vậy, căn cứ c&aacute;c quy định tr&ecirc;n đề nghị c&ocirc;ng ty hướng dẫn đối t&aacute;c đối chiếu t&igrave;nh h&igrave;nh thực tế của người lao động v&agrave; li&ecirc;n hệ với Ban quản l&yacute; Khu kinh tế tỉnh (cơ quan nhận ủy quyền về quản l&yacute; lao động nước ngo&agrave;i tr&ecirc;n địa b&agrave;n Khu kinh tế) để được hướng dẫn l&agrave;m thủ tục, hồ sơ cần thiết.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;L&ecirc; Tiến Dũng&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:solaodong@hatinh.gov.vn">solaodong@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>B&ecirc;n c&ocirc;ng ty ch&uacute;ng t&ocirc;i sắp tới c&oacute; lao động Trung Quốc qua tạm tr&uacute; tại c&ocirc;ng ty nhưng kh&ocirc;ng l&agrave;m việc cho c&ocirc;ng ty. Hiện tại lao động n&agrave;y đ&atilde; c&oacute; thẻ tạm tr&uacute; v&agrave; được cấp giấy ph&eacute;p lao động tại 1 c&ocirc;ng ty ở B&igrave;nh Dương. C&ocirc;ng ty n&agrave;y c&oacute; hợp đồng c&ocirc;ng tr&igrave;nh tại H&agrave; Tĩnh v&agrave; cử lao động n&agrave;y ra l&agrave;m việc. Vậy cho ch&uacute;ng t&ocirc;i hỏi ngo&agrave;i việc đăng k&yacute; tạm tr&uacute; cho lao động n&agrave;y, b&ecirc;n c&ocirc;ng ty ch&uacute;ng t&ocirc;i hoặc c&ocirc;ng ty đối t&aacute;c phải l&agrave;m những thủ tục g&igrave; nữa?</p>
        </td>
        <td>&nbsp;</td>
        <td>C&Ocirc;NG TY TNHH Đ&Ocirc;NG LẠNH V&Agrave; ĐHKK KH&Ocirc;N LINH</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>8</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=10" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH chế biến gỗ v&agrave; TM H&agrave;o Quang<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>C&ocirc;ng ty TNHH chế biến gỗ v&agrave; TM H&agrave;o Quang được UBND tỉnh cho ph&eacute;p khảo s&aacute;t địa điểm quy hoạch mở rộng x&acirc;y dựng khu thương mại dịch vụ, thể thao v&agrave; giải tr&iacute; tại địa điểm phường Văn Y&ecirc;n, th&agrave;nh phố H&agrave; Tĩnh tại Quyết định số 02/QĐ-UBND ng&agrave;y 05/01/2015. Ng&agrave;y 03/02/2015, UBND tỉnh ph&ecirc; duyệt quy hoạch mặt bằng sử dụng đất dự &aacute;n. Sau khi c&oacute; Quyết định của UBND tỉnh, UBND th&agrave;nh phố c&oacute; Quyết định số 1162/QĐ-UBND ng&agrave;y 11/6/2015 th&agrave;nh lập Tổ c&ocirc;ng t&aacute;c kiểm đếm, t&iacute;nh to&aacute;n gi&aacute; trị bồi thường, hỗ trợ dự &aacute;n. Tổ c&ocirc;ng t&aacute;c đ&atilde; phối hợp với UBND phường Văn Y&ecirc;n tiến h&agrave;nh khảo s&aacute;t, kiểm đếm khối lượng, t&agrave;i sản c&ocirc;ng tr&igrave;nh, vật kiến tr&uacute;c bị ảnh hưởng của C&ocirc;ng ty cổ phần Đầu tư v&agrave; X&acirc;y dựng 1 H&agrave; Tĩnh theo đ&uacute;ng quy định v&agrave; tiến h&agrave;nh &aacute;p gi&aacute; l&agrave;m cơ sở để c&aacute;c đơn vị li&ecirc;n quan tiến h&agrave;nh thỏa thuận việc bồi thường, hỗ trợ. - Khảo s&aacute;t lần 1: Do C&ocirc;ng ty cổ phần Đầu tư v&agrave; X&acirc;y dựng 1 H&agrave; Tĩnh kh&ocirc;ng cung cấp được c&aacute;c hồ sơ li&ecirc;n quan đến việc x&aacute;c định gi&aacute; trị c&ograve;n lại của c&ocirc;ng tr&igrave;nh, t&agrave;i sản bị thiệt hại n&ecirc;n Tổ c&ocirc;ng t&aacute;c đ&atilde; tiến h&agrave;nh họp v&agrave; thống nhất x&aacute;c định gi&aacute; trị bồi thường, hỗ trợ l&agrave;: 591.590.888 đồng. Sau khi c&ocirc;ng khai số liệu bồi thường, hỗ trợ th&igrave; C&ocirc;ng ty cổ phần Đầu tư v&agrave; X&acirc;y dựng 1 H&agrave; Tĩnh kh&ocirc;ng đồng &yacute; với gi&aacute; trị bồi thường, hỗ trợ tr&ecirc;n. - Khảo s&aacute;t lần 2: V&igrave; hai doanh nghiệp kh&ocirc;ng thỏa thuận, thống nhất n&ecirc;n UBND th&agrave;nh phố đ&atilde; tổ chức cuộc họp v&agrave; ra Th&ocirc;ng b&aacute;o kết luận số 98/TB-UBND ng&agrave;y 28/8/2015. Thực hiện Th&ocirc;ng b&aacute;o kết luận số 98/TB-UBND, Tổ c&ocirc;ng t&aacute;c đ&atilde; tiến h&agrave;nh họp v&agrave; x&aacute;c định lại mức bồi thường, hỗ trợ đối với C&ocirc;ng ty cổ phần Đầu tư v&agrave; X&acirc;y dựng 1 H&agrave; Tĩnh, với gi&aacute; trị bồi thường, hỗ trợ l&agrave; 810.903.698 đồng (c&oacute; t&iacute;nh đến gi&aacute; trị x&acirc;y dựng mới của c&ocirc;ng tr&igrave;nh bị thiệt hại theo Điều 13 &ndash; Quyết định 75/2014/QĐ-UBND ng&agrave;y 03/11/2014 của UBND tỉnh, nhưng C&ocirc;ng ty TNHH Chế biến gỗ v&agrave; Thương mại H&agrave;o Quang v&agrave; C&ocirc;ng ty Cổ phần Đầu tư v&agrave; X&acirc;y dựng I H&agrave; Tĩnh vẫn kh&ocirc;ng thống nhất được. Thực hiện C&ocirc;ng văn số 4833/UBND-XD1 ng&agrave;y 24/9/2015 của UBND tỉnh về việc giao UBND th&agrave;nh phố GPMB thực hiện dự &aacute;n; để giải quyết c&aacute;c vướng mắc trong c&ocirc;ng t&aacute;c bồi thường, hỗ trợ giải ph&oacute;ng mặt bằng, UBND th&agrave;nh phố đ&atilde; th&agrave;nh lập Hội đồng Bồi thường, hỗ trợ &amp; t&aacute;i định cư dự &aacute;n để x&aacute;c định gi&aacute; trị nh&agrave;, c&ocirc;ng tr&igrave;nh bị ảnh hường l&agrave;m căn cứ tr&igrave;nh thẩm định v&agrave; ph&ecirc; duyệt theo đ&uacute;ng quy định tại Quyết định số 75/2014/QĐ-UBND ng&agrave;y 03/11/2014 của UBND tỉnh.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;H&agrave; Văn Trọng&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chủ tịch&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ubthanhpho@hatinh.gov.vn">ubthanhpho@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Nội dung 1: Th&agrave;nh phố kh&ocirc;ng b&agrave;n giao mặt bằng sạch cho chủ đầu tư (mặc d&ugrave; đ&atilde; c&oacute; 2 văn bản chỉ đạo của UBND tỉnh y&ecirc;u cầu th&agrave;nh phố H&agrave; Tĩnh giải quyết b&agrave;n giao mặt bằng sạch cho chủ đầu tư.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH chế biến gỗ v&agrave; TM H&agrave;o Quang</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>30</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=11" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH chế biến gỗ v&agrave; TM H&agrave;o Quang<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Hạ tầng ngo&agrave;i h&agrave;ng r&agrave;o dự &aacute;n Khu thương mại dịch vụ v&agrave; thể thao giải tr&iacute; C&ocirc;ng ty TNHH chế biến gỗ v&agrave; thương mại H&agrave;o Quang được UBND tỉnh đồng &yacute; chủ trương đầu tư tại C&ocirc;ng văn số 1960/UBND-XD1 ng&agrave;y 07/5/2015 gồm 03 dự &aacute;n: 1. Đường bao s&ocirc;ng Cụt đoạn nối đường 26/3 đến đường Nguyễn Trung Thi&ecirc;n, 2. Đường từ đường Nguyễn Ch&iacute; Thanh đia qua s&ocirc;ng Cụt v&agrave;o khu thương mại v&agrave; dịch vụ, 3. Đường Nguyễn Bi&ecirc;n. UBND th&agrave;nh phố b&aacute;o c&aacute;o qu&aacute; tr&igrave;nh chuẩn bị đầu tư đối với c&aacute;c dự &aacute;n ngo&agrave;i h&agrave;ng r&agrave;o dự &aacute;n Khu thương mại v&agrave; dịch vụ, tiến độ đến nay như sau: 1. Dự &aacute;n Đường bao s&ocirc;ng Cụt đoạn nối đường 26/3 đến đường Nguyễn Trung Thi&ecirc;n: - Ng&agrave;y 11/5/2015, UBND th&agrave;nh phố giao Ban quản l&yacute; c&ocirc;ng tr&igrave;nh th&agrave;nh phố chuẩn bị v&agrave; thực hiện đầu tư hạng mục hạ tầng kỹ thuật ngo&agrave;i h&agrave;ng r&agrave;o dự &aacute;n tại C&ocirc;ng Văn số 818/UBND-TCKH. - Ng&agrave;y 14/5/2015, UBND th&agrave;nh phố tr&igrave;nh UBND tỉnh xin ph&ecirc; duyệt chủ trương đầu tư tại Tờ tr&igrave;nh số 86/TTr-UBND. - Ng&agrave;y 03/7/2015, UBND tỉnh ph&ecirc; duyệt chủ trương đầu tư tại Quyết định số 2589/QĐ-UBND. - Ng&agrave;y 17/9/2015, Ban quản l&yacute; c&ocirc;ng tr&igrave;nh th&agrave;nh phố tr&igrave;nh UBND th&agrave;nh phố ph&ecirc; duyệt Đề cương nhiệm vụ khảo s&aacute;t, lập B&aacute;o c&aacute;o kinh tế- kỹ thuật tại Tờ tr&igrave;nh 120/TTr-BA. - Ng&agrave;y 09/10/2015, UBND th&agrave;nh phố ph&ecirc; duyệt Đề cương nhiệm vụ khảo s&aacute;t, lập b&aacute;o c&aacute;o kinh tế- kỹ thuật tại Quyết định số 2384/QĐ-UBND. - Ng&agrave;y 12/10/2015, Ban quản l&yacute; c&ocirc;ng tr&igrave;nh th&agrave;nh phố tr&igrave;nh xin chỉ định thầu tư vấn khảo s&aacute;t lập B&aacute;o c&aacute;o kinh tế- kỹ thuật tại Tờ tr&igrave;nh số 127/TTr-BA. 2. Dự &aacute;n Đường từ đường Nguyễn Ch&iacute; Thanh đi qua s&ocirc;ng Cụt v&agrave;o khu thương mại v&agrave; dịch vụ: - Ng&agrave;y 11/5/2015, UBND th&agrave;nh phố giao Ban quản l&yacute; c&ocirc;ng tr&igrave;nh th&agrave;nh phố chuẩn bị v&agrave; thực hiện đầu tư hạng mục hạ tầng kỹ thuật ngo&agrave;i h&agrave;ng r&agrave;o dự &aacute;n tại C&ocirc;ng Văn số 818/UBND-TCKH. - Ng&agrave;y 16/6/2015, Ban quản l&yacute; c&ocirc;ng tr&igrave;nh th&agrave;nh phố tr&igrave;nh xin ph&ecirc; duyệt điều chỉnh quy hoạch bổ sung tại Tờ tr&igrave;nh số 84/TTr-BA. - Ng&agrave;y 31/7/2015, UBND th&agrave;nh phố tr&igrave;nh Sở X&acirc;y dựng điều chỉnh quy hoạch ph&acirc;n l&ocirc; đất CX 1.1 thuộc quy hoạch chi tiết phường Văn Y&ecirc;n tại Tờ tr&igrave;nh số 168/TTr-UBND. - Ng&agrave;y 25/9/2015, Sở X&acirc;y dựng thống nhất v&agrave; tr&igrave;nh UBND tỉnh ph&ecirc; duyệt điều chỉnh cục bộ l&ocirc; đất CX 1.1 thuộc quy hoạch chi tiết phường Văn Y&ecirc;n tại Văn bản số 1419/SXD-KTQH. - Ng&agrave;y 01/10/2015, UBND tỉnh c&oacute; &yacute; kiến điều chỉnh một số nội dung. - Hiện nay, UBND th&agrave;nh phố đang ho&agrave;n thiện lại hồ sơ để tr&igrave;nh UBND tỉnh. 3. Dự &aacute;n Đường Nguyễn Bi&ecirc;n: Tại C&ocirc;ng văn số 1960/UBND-XD1 ng&agrave;y 07/5/2015 của UBND tỉnh, giao UBND th&agrave;nh phố tự c&acirc;n đối nguồn vốn đầu tư x&acirc;y dựng c&ocirc;ng tr&igrave;nh Đường Nguyễn Bi&ecirc;n. Hiện nay, ng&acirc;n s&aacute;ch th&agrave;nh phố hết sức kh&oacute; khăn chưa c&acirc;n đối được, nợ đọng XDCB c&ograve;n nhiều, do đ&oacute; UBND th&agrave;nh phố đ&atilde; c&oacute; văn bản số 1262/UBND-TCKH ng&agrave;y 07/7/2015 xin tỉnh hỗ trợ vốn đầu tư x&acirc;y dựng tuyến đường Nguyễn Bi&ecirc;n, nhưng đến nay chưa c&oacute; văn bản ph&uacute;c đ&aacute;p của UBND tỉnh.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;H&agrave; Văn Trọng&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chủ tịch&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ubthanhpho@hatinh.gov.vn">ubthanhpho@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}</p>
        </td>
        <td>
            <p>Nội dung 2: C&aacute;c hạng mục hạ tầng kỹ thuật ngo&agrave;i h&agrave;ng r&agrave;o đến nay th&agrave;nh phố triển khai chậm v&agrave; chưa thực hiện. Đề nghị UBND tỉnh chỉ đạo c&aacute;c cấp, c&aacute;c ng&agrave;nh v&agrave; th&agrave;nh phố sớm giải quyết những nội dung tr&ecirc;n để chủ đầu tư thực hiện dự &aacute;n c&oacute; kết quả.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH chế biến gỗ v&agrave; TM H&agrave;o Quang</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>30</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=12" onclick="GoToLink(this);return false;" target="_self">Chi nh&aacute;nh Ng&acirc;n h&agrave;ng N&ocirc;ng nghiệp &amp; Ph&aacute;t triển n&ocirc;ng th&ocirc;n H&agrave; Tĩnh:<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Về nội dung n&agrave;y, NHNN tỉnh trả lời như sau: - Theo quy định tại Nghị định 55/2015/NĐ-CP ng&agrave;y 09/6/2015 của Ch&iacute;nh phủ về ch&iacute;nh s&aacute;ch t&iacute;n dụng ph&aacute;t triển n&ocirc;ng nghiệp v&agrave; n&ocirc;ng th&ocirc;n (gọi tắt l&agrave; NĐ 55/CP thay thế Nghị định 41/2010/NĐ-CP) th&igrave; c&aacute;c c&aacute; nh&acirc;n, hộ gia đ&igrave;nh vay vốn tại tổ chức t&iacute;n dụng theo quy định tại Nghị định n&agrave;y kh&ocirc;ng phải nộp c&aacute;c lệ ph&iacute; sau: Lệ ph&iacute; chứng thực hợp đồng thế chấp t&agrave;i sản tại cơ quan thực hiện chứng thực hợp đồng; Lệ ph&iacute; đăng k&yacute; giao dịch bảo đảm tại cơ quan đăng k&yacute; giao dịch bảo đảm (Khoản 4, Điều 9). Tại Khoản 1, Điều 19, Ch&iacute;nh phủ giao Bộ T&agrave;i ch&iacute;nh chủ tr&igrave;, phối hợp với Bộ Tư ph&aacute;p hướng dẫn việc kh&ocirc;ng thu lệ ph&iacute; chứng thực hợp đồng thế chấp t&agrave;i sản v&agrave; lệ ph&iacute; đăng k&yacute; giao dịch bảo đảm theo quy định tại Khoản 4 Điều 9 của Nghị định n&agrave;y. Tuy nhi&ecirc;n đến nay chưa c&oacute; hướng dẫn của Bộ T&agrave;i ch&iacute;nh v&agrave; Bộ tư ph&aacute;p về thực hiện nội dung n&agrave;y. (Theo Nghị định 41/2010/NĐ-CP ng&agrave;y 12 th&aacute;ng 4 năm 2010 của Ch&iacute;nh phủ về ch&iacute;nh s&aacute;ch t&iacute;n dụng phục vụ ph&aacute;t triển n&ocirc;ng nghiệp n&ocirc;ng th&ocirc;n chỉ quy định kh&ocirc;ng thu lệ ph&iacute; đăng k&yacute; giao dịch bảo đảm; c&ograve;n lệ ph&iacute; chứng thực hợp đồng thế chấp t&agrave;i sản th&igrave; kh&ocirc;ng được miễn). Về lệ ph&iacute; đăng k&yacute; giao dịch bảo đảm: + Theo quy định tại Th&ocirc;ng tư Li&ecirc;n tịch số 69/2011/TTLT-BTC-BTP ng&agrave;y 18/5/2011 của Bộ T&agrave;i ch&iacute;nh v&agrave; Bộ Tư ph&aacute;p Hướng dẫn chế độ thu, nộp, quản l&yacute; v&agrave; sử dụng lệ ph&iacute; đăng k&yacute; giao dịch bảo đảm, ph&iacute; cung cấp th&ocirc;ng tin về giao dịch bảo đảm v&agrave; ph&iacute; sử dụng dịch vụ kh&aacute;ch h&agrave;ng thường xuy&ecirc;n: Tại điểm a, Khoản 3, Điều 1 đ&atilde; quy định c&aacute; nh&acirc;n, hộ gia đ&igrave;nh khi đăng k&yacute; giao dịch bảo đảm để vay vốn theo NĐ 41/CP thuộc đối tượng kh&ocirc;ng thu lệ ph&iacute; giao dịch bảo đảm. Tại điểm b, Khoản 1, Điều 3 quy định: mức thu lệ ph&iacute; giao dịch bảo đảm &aacute;p dụng tại c&aacute;c cơ quan đăng k&yacute;: Văn ph&ograve;ng đăng k&yacute; quyền sử dụng đất c&aacute;c cấp (Sở TN&amp;MT, Ph&ograve;ng TNMT huyện) v&agrave; UBND x&atilde; (nếu được ủy quyền), do HĐND tỉnh quyết định trong khung lệ ph&iacute; của Th&ocirc;ng tư 69. HĐND tỉnh (Kh&oacute;a XVI) đ&atilde; c&oacute; Nghị quyết số 85/2014/NQ-HĐND ng&agrave;y 16/7/2014 về việc sửa đổi, bổ sung v&agrave; b&atilde;i bỏ một số loại ph&iacute;, lệ ph&iacute; tr&ecirc;n địa b&agrave;n tỉnh H&agrave; Tĩnh quy định về mức thu lệ ph&iacute; đăng k&yacute; giao dịch bảo đảm. UBND tỉnh đ&atilde; c&oacute; Quyết định số 55/2014/QĐ-UBND ng&agrave;y 20/8/2014 ban h&agrave;nh quy định về thu nộp v&agrave; quản l&yacute; c&aacute;c loại ph&iacute;, lệ ph&iacute; .... đ&atilde; quy định c&aacute;c c&aacute; nh&acirc;n, hộ gia đ&igrave;nh khi đăng k&yacute; giao dịch bảo đảm để vay vốn theo NĐ 41 kh&ocirc;ng phải nộp khoản lệ ph&iacute; n&agrave;y. &Yacute; kiến của NHNN tỉnh: Như vậy, trước khi NĐ 55/CP c&oacute; hiệu lực th&igrave; c&aacute;c văn bản quy định về kh&ocirc;ng thu ph&iacute; giao dịch bảo đảm theo NĐ 41/CP đ&atilde; được quy định cụ thể v&agrave; đ&atilde; được triển khai thực hiện tại c&aacute;c địa phương. (Trong thực hiện, c&oacute; thể c&oacute; một số địa phương chưa thực hiện nghi&ecirc;m theo đ&uacute;ng quy định của UBND tỉnh vẫn thu lệ ph&iacute; của kh&aacute;ch h&agrave;ng, đề nghị UBND tỉnh chỉ đạo c&aacute;c địa phương, c&aacute;c ng&agrave;nh kiểm tra để y&ecirc;u cầu thực hiện đ&uacute;ng quy đinh). Theo quy định về &aacute;p dụng c&aacute;c văn bản quy phạm ph&aacute;p luật, trong thời gian chưa c&oacute; hướng dẫn của c&aacute;c Bộ, ng&agrave;nh nếu c&aacute;c văn bản hiện h&agrave;nh của c&aacute;c Bộ, ng&agrave;nh kh&ocirc;ng tr&aacute;i với quy định mới của Nghị định th&igrave; vẫn tạm thời thực hiện theo hướng dẫn của c&aacute;c Bộ ng&agrave;nh đ&atilde; c&oacute; (đối với nội dung tr&aacute;i th&igrave; thực hiện theo Nghị định). Do đ&oacute;, sau khi c&oacute; NĐ 55/CP thay thế NĐ 41/CP, tuy chưa c&oacute; hướng dẫn của Bộ T&agrave;i ch&iacute;nh v&agrave; Bộ Tư ph&aacute;p (thay thế Th&ocirc;ng tư 69/2011/TTLT-BTC-BTP) v&agrave; chưa c&oacute; văn bản mới của HĐND v&agrave; UBND tỉnh, nhưng quy định theo NĐ 55 vẫn quy định c&aacute; nh&acirc;n, hộ gia đ&igrave;nh được miễn lệ ph&iacute; đăng k&yacute; giao dịch bảo đảm khi vay vốn theo NĐ 55/CP. Tuy nhi&ecirc;n, để c&oacute; cơ sở thực hiện trong thời gian chờ c&aacute;c văn bản hướng dẫn mới, NHNN tỉnh đề nghị Sở T&agrave;i ch&iacute;nh tham mưu cho UBND tỉnh c&oacute; văn bản chỉ đạo c&aacute;c đơn vị, địa phương vẫn thực hiện theo c&aacute;c quy định tại TT 69/2011/TTLT-BTC-BTP, Nghị quyết số 85/2014/NQ-HĐND v&agrave; QĐ số 55/2014/Q Đ-UBND cho đến khi c&oacute; văn bản thay thế. Trong thời gian chờ văn bản của cấp tr&ecirc;n hướng dẫn, đề nghị NHNo&amp;PTNT hướng dẫn kh&aacute;ch h&agrave;ng vay vốn về c&aacute;c quy định n&ecirc;u tr&ecirc;n để kh&aacute;ch h&agrave;ng l&agrave;m việc với c&aacute;c cơ quan c&oacute; li&ecirc;n quan đến thu lệ ph&iacute; để được hưởng ch&iacute;nh s&aacute;ch hỗ trợ của Ch&iacute;nh phủ. Về lệ ph&iacute; chứng thực hợp đồng thế chấp: - Nghị định 41/2010/NĐ-CP kh&ocirc;ng quy định việc miễn lệ ph&iacute; chứng thực hợp đồng thế chấp cho c&aacute; nh&acirc;n, hộ gia đ&igrave;nh khi vay vốn theo NĐ 41/CP. Do đ&oacute;, việc thu lệ ph&iacute; n&agrave;y đang được thực hiện theo Th&ocirc;ng tư Li&ecirc;n tịch số 62/2013/TTLT-BTC-BTP ng&agrave;y 13/5/2015 của Bộ T&agrave;i ch&iacute;nh v&agrave; Bộ Tư ph&aacute;p Quy định mức thu, chế độ thu, nộp, quản l&yacute; v&agrave; sử dụng lệ ph&iacute; chứng thực hợp đồng, giao dịch. - Nghị định 55/2015/NĐ-CP c&oacute; hiệu lực từ 25/7/2015 quy định: c&aacute; nh&acirc;n, hộ gia đ&igrave;nh khi vay vốn theo NĐ 55/CP kh&ocirc;ng phải nộp lệ ph&iacute; chứng thực hợp đồng thế chấp. Tuy Nghị định đ&atilde; quy định r&otilde; như vậy, nhưng do chưa c&oacute; hướng dẫn của BTC v&agrave; Bộ Tư ph&aacute;p (sửa đổi TT 62/2013/TTLT-BTC-BTP) n&ecirc;n c&oacute; thể c&aacute;c địa phương chưa thực hiện chủ trương n&agrave;y. NHNN tỉnh đề nghị: Sở T&agrave;i ch&iacute;nh tham mưu cho UBND tỉnh c&oacute; văn bản chỉ đạo: trong khi chờ hướng dẫn của c&aacute;c Bộ y&ecirc;u cầu c&aacute;c địa phương thực hiện theo quy định tại NĐ 55/CP l&agrave; kh&ocirc;ng thu lệ ph&iacute; chứng thực hợp đồng thế chấp khi c&aacute; nh&acirc;n, hộ gia đ&igrave;nh vay vốn theo NĐ 55/CP.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>1.1. Nội dung 1: Đề nghị tỉnh c&oacute; văn bản chỉ đạo cụ thể để c&aacute;c sở, ban ng&agrave;nh li&ecirc;n quan kh&ocirc;ng thu ph&iacute;, lệ ph&iacute; c&ocirc;ng chứng giao dịch bảo đảm&hellip;v&agrave; thực hiện c&ocirc;ng khai, ni&ecirc;m yết để mọi người d&acirc;n được biết;</p>
        </td>
        <td>&nbsp;</td>
        <td>Chi nh&aacute;nh Ng&acirc;n h&agrave;ng N&ocirc;ng nghiệp &amp; Ph&aacute;t triển n&ocirc;ng th&ocirc;n H&agrave; Tĩnh:</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=13" onclick="GoToLink(this);return false;" target="_self">Chi nh&aacute;nh Ng&acirc;n h&agrave;ng N&ocirc;ng nghiệp &amp; Ph&aacute;t triển n&ocirc;ng th&ocirc;n H&agrave; Tĩnh:<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>&Yacute; kiến của NHNN tỉnh: Ng&acirc;n h&agrave;ng Nh&agrave; nước đồng t&igrave;nh với kiến nghị n&agrave;y của NHNo&amp;PTNT, đề nghị UBND tỉnh tiếp tục chỉ đạo c&aacute;c địa phương thực hiện nghi&ecirc;m t&uacute;c c&aacute;c quy định tại NĐ 55/CP. Tr&aacute;ch nhiệm thực hiện n&agrave;y thuộc về c&aacute;c địa phương x&aacute;c nhận.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>1.2. Nội dung 2: UBND c&aacute;c cấp khi tiến h&agrave;nh x&aacute;c nhận hộ vay chưa được cấp Giấy chứng nhận quyền sử dụng đất v&agrave; kh&ocirc;ng c&oacute; tranh chấp, cần c&oacute; biện ph&aacute;p quản l&yacute; sự x&aacute;c nhận đ&oacute; tr&aacute;nh trường hợp kh&aacute;ch h&agrave;ng x&aacute;c nhận nhiều lần để c&ugrave;ng l&uacute;c vay nhiều TCTD.</p>
        </td>
        <td>&nbsp;</td>
        <td>Chi nh&aacute;nh Ng&acirc;n h&agrave;ng N&ocirc;ng nghiệp &amp; Ph&aacute;t triển n&ocirc;ng th&ocirc;n H&agrave; Tĩnh:</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=14" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty Sao Đại Dương<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Thạch Trị, Thạch H&agrave;</td>
        <td>
            <p>- Theo Bi&ecirc;n bản l&agrave;m việc của NH Ngoại thương H&agrave; Tĩnh (NHNT) với DN th&igrave; hiện nay DN đang vay vốn tại NHNT v&agrave; quan hệ giữa NH v&agrave; DN tốt, đ&uacute;ng quy chế v&agrave; kh&ocirc;ng thấy n&ecirc;u vướng mắc. - DN đề nghị NHNN c&oacute; cơ chế cho vay th&ocirc;ng tho&aacute;ng hơn ph&ugrave; hợp với đặc th&ugrave; nu&ocirc;i t&ocirc;m (vốn đầu tư lớn, c&oacute; hiệu quả) v&agrave; đề nghị n&ecirc;n cho ph&eacute;p sử dụng ao đầm, c&ocirc;ng tr&igrave;nh nu&ocirc;i l&agrave;m t&agrave;i sản thế chấp để vay vốn. - NHNN tỉnh trả lời như sau: + Về cơ chế cho vay đối với nu&ocirc;i t&ocirc;m được thực hiện theo ch&iacute;nh s&aacute;ch t&iacute;n dụng ph&aacute;t triển n&ocirc;ng nghiệp, n&ocirc;ng th&ocirc;n theo Nghị định 55/2015/NĐ-CP c&oacute; hiệu lực từ ng&agrave;y 25/7/2015 (trước đ&acirc;y l&agrave; NĐ 41/2010/NĐ-CP) đ&atilde; quy định r&otilde; về mức cho vay, l&atilde;i suất cho vay, cơ chế xử l&yacute; rủi ro t&iacute;n dụng, cơ chế bảo đảm tiền vay, về hồ sơ thủ tục vay vốn... v&agrave; mang t&iacute;nh ch&iacute;nh s&aacute;ch khuyến kh&iacute;ch cao hơn c&aacute;c lĩnh vực kh&aacute;c. Tuy nhi&ecirc;n, về điều kiện vay vốn vẫn kh&ocirc;ng c&oacute; sự nới lỏng (phương &aacute;n sản xuất kinh doanh phải khả thi, c&oacute; hiệu quả, chứng minh được khả năng trả nợ ng&acirc;n h&agrave;ng nhằm đảm bảo an to&agrave;n vốn t&iacute;n dụng); Điều kiện n&agrave;y c&agrave;ng được c&aacute;c NHTM kiểm so&aacute;t chặt chẽ hơn khi thực hiện Đề &aacute;n t&aacute;i cơ cấu lại hoạt động của c&aacute;c NHTM v&agrave; Đề &aacute;n xử l&yacute; nợ xấu theo chủ trương của Ch&iacute;nh phủ. Trong điều kiện hoạt động của c&aacute;c DN, HTX đang c&ograve;n nhiều kh&oacute; khăn, th&igrave; đ&acirc;y thực sự đang l&agrave; c&aacute;c kh&oacute; khăn đối với cả c&aacute;c TCTD v&agrave; c&aacute;c DN, HTX. Thời gian qua, c&aacute;c NHTM cũng đ&atilde; thực hiện theo đ&uacute;ng c&aacute;c quy định n&ecirc;u tr&ecirc;n v&agrave; tr&ecirc;n thực tế đ&atilde; c&oacute; nhiều linh động trong việc vận dụng c&aacute;c điều kiện vay vốn, về hồ sơ, đ&atilde; c&ugrave;ng kh&aacute;ch h&agrave;ng t&igrave;m biện ph&aacute;p để th&aacute;o gỡ. NHNN tỉnh ghi nhận kiến nghị n&agrave;y để kiến nghị NHNN VN v&agrave; Ch&iacute;nh phủ tiếp tục c&oacute; cơ chế cho vay th&ocirc;ng tho&aacute;ng hơn để đảm bảo cho cả ng&acirc;n h&agrave;ng v&agrave; doanh nghiệp ph&aacute;t triển an to&agrave;n. + Về vấn đề thế chấp t&agrave;i sản: DN đề nghị n&ecirc;n cho ph&eacute;p sử dụng ao đầm, c&ocirc;ng tr&igrave;nh nu&ocirc;i l&agrave;m t&agrave;i sản thế chấp để vay vốn: Theo c&aacute;c quy định hiện nay của Ch&iacute;nh phủ v&agrave; của NHNN th&igrave; về nguy&ecirc;n tắc trường hợp gi&aacute; trị quyền sử dụng đất (bao gồm cả ao, đầm) của DN nếu trả tiền h&agrave;ng năm th&igrave; kh&ocirc;ng đủ điều kiện để thế chấp t&agrave;i sản. Trường hợp trả tiền thu&ecirc; đất 1 lần m&agrave; thời hạn thu&ecirc; đất đ&atilde; trả tiền c&ograve;n lại t&iacute;nh từ thời điểm vay vốn từ 5 năm trở l&ecirc;n th&igrave; c&aacute;c TCTD c&oacute; thể xem x&eacute;t để nhận l&agrave;m t&agrave;i sản thế chấp. Đối với c&aacute;c c&ocirc;ng tr&igrave;nh, t&agrave;i sản tr&ecirc;n đất (khi đ&atilde; được cấp giấy chứng nhận QSD đất v&agrave; quyền sở hữu t&agrave;i sản tr&ecirc;n đất) cũng được c&aacute;c TCTD xem x&eacute;t để nhận thế chấp (gi&aacute; trị t&ocirc;n tạo ao, đầm c&ugrave;ng sẽ được t&iacute;nh to&aacute;n khi x&aacute;c định gi&aacute; trị t&agrave;i sản thế chấp). C&ograve;n về sản phẩm trong ao, đầm (t&ocirc;m, hải sản,...nu&ocirc;i trong hồ đầm) th&igrave; hiện nay c&aacute;c TCTD chưa nhận l&agrave;m t&agrave;i sản thế chấp v&igrave; thiếu cơ sở để x&aacute;c định gi&aacute; trị t&agrave;i sản thế chấp v&agrave; việc quản l&yacute; t&agrave;i sản thế chấp hết sức kh&oacute; khăn. Việc xem x&eacute;t để chấp nhận c&aacute;c yếu tố tr&ecirc;n l&agrave;m t&agrave;i sản thế chấp, gi&aacute; trị t&agrave;i sản thế chấp trong từng trường hợp cụ thể sẽ do DN v&agrave; NHTM b&agrave;n bạc v&agrave; thống nhất. (Trong NĐ 55/2015/NĐ-CP hạn mức cho vay kh&ocirc;ng c&oacute; t&agrave;i sản bảo đảm chỉ quy định với C&aacute; nh&acirc;n, hộ gia đ&igrave;nh, tổ hợp t&aacute;c, hộ kinh doanh, hợp t&aacute;c x&atilde;, li&ecirc;n hiệp hợp t&aacute;c x&atilde; v&agrave; chủ trang trại. C&ograve;n đối với DN do NHTM xem x&eacute;t cho kh&aacute;ch h&agrave;ng vay tr&ecirc;n cơ sở c&oacute; bảo đảm hoặc kh&ocirc;ng c&oacute; bảo đảm bằng t&agrave;i sản theo quy định của ph&aacute;p luật). Hoạt động nu&ocirc;i trồng thủy sản thường c&oacute; vốn đầu tư lớn, c&oacute; hiệu quả cao nhưng rủi ro cũng kh&aacute; lớn. V&igrave; vậy mức cho vay kh&ocirc;ng c&oacute; t&agrave;i sản bảo đảm, việc xem x&eacute;t nhận t&agrave;i sản thế chấp đối với lĩnh vực n&agrave;y thường được c&aacute;c NHTM t&iacute;nh to&aacute;n rất chặt chẽ. Về c&aacute;c nội dung cụ thể, NHNN tỉnh đề nghị DN tiếp tục phối hợp với c&aacute;c NHTM (NH Ngoại Thương) để b&agrave;n bạc, thống nhất trong thực hiện.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Theo CV 1896/SNN, DN phản &aacute;nh thiếu vốn (chung) v&agrave; đề nghị ng&acirc;n h&agrave;ng cho vay vốn th&ocirc;ng tho&aacute;ng ph&ugrave; hợp với đặc th&ugrave; nu&ocirc;i t&ocirc;m (n&ecirc;n cho thế chấp t&agrave;i sản ao đầm, c&ocirc;ng tr&igrave;nh nu&ocirc;i để vay vốn&hellip;)</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty Sao Đại Dương</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=15" onclick="GoToLink(this);return false;" target="_self">Doanh nghiệp tư nh&acirc;n thủy sản Hương Xu&acirc;n<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Thạch Kim, Lộc H&agrave;</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; doanh nghiệp: + DNTN thủy sản Hương Xu&acirc;n hiện chưa c&oacute; quan hệ vay vốn tại c&aacute;c TCTD. Từ năm 2010 đến nay, &ocirc;ng Nguyễn Đ&igrave;nh B&igrave;nh &ndash; chủ doanh nghiệp đ&atilde; c&oacute; quan hệ t&iacute;n dụng tại NHCT HT theo tư c&aacute;ch thể nh&acirc;n. Dư nợ hiện tại của &ocirc;ng B&igrave;nh tại NHCT HT l&agrave; 1,6 tỷ đồng, mục đ&iacute;ch sử dụng vốn l&agrave; chế biến c&aacute;c loại mắm, ruốc. Hiện nay &ocirc;ng B&igrave;nh đ&atilde; đặt vấn đề doanh nghiệp vay vốn NHCT HT với nhu cầu vốn 02 tỷ đồng để bổ sung vốn lưu động phục vụ hoạt động chế biến mắm, ruốc. Theo b&aacute;o c&aacute;o của NHCT HT, doanh nghiệp đ&aacute;p ứng được c&aacute;c điều kiện vay vốn theo quy định v&agrave; ng&acirc;n h&agrave;ng đ&atilde; hướng dẫn doanh nghiệp cung cấp hồ sơ ph&aacute;p l&yacute;, hồ sơ t&agrave;i sản đảm bảo, hồ sơ phương &aacute;n vay vốn để ho&agrave;n thiện gửi ng&acirc;n h&agrave;ng trong thời gian tới v&agrave; xem x&eacute;t hỗ trợ l&atilde;i suất đối với doanh nghiệp theo quy định của Quyết định 23/2014/QĐ-UBND. - &Yacute; kiến của NHNN tỉnh: + Để vay vốn đề nghị doanh nghiệp phối hợp với NHCT HT tiếp tục ho&agrave;n thiện c&aacute;c hồ sơ, thủ tục cần thiết, hội đủ c&aacute;c điều kiện vay vốn để ng&acirc;n h&agrave;ng thẩm định v&agrave; cho vay. + Về đề xuất việc hỗ trợ l&atilde;i suất thực hiện trực tiếp qua ng&acirc;n h&agrave;ng, kh&ocirc;ng th&ocirc;ng qua địa phương: Một trong những chỉ đạo của UBND tỉnh trong hỗ trợ l&atilde;i suất từ ngu&ocirc;ng XDNTM theo QĐ 23/2014/UBND l&agrave; gi&agrave;nh quyền tự chủ cho cơ sở (cả về chỉ ti&ecirc;u nguồn vốn, theo d&otilde;i, chi trả) v&agrave; để n&acirc;ng cao tr&aacute;ch nhiệm của cấp x&atilde; do đ&oacute; phương thức hỗ trợ l&atilde;i suất được quy định l&agrave; giao cho BQLXDNTM cấp x&atilde; nhận tiền từ ng&acirc;n s&aacute;ch v&agrave; trực tiếp chi trả cho kh&aacute;ch h&agrave;ng (kh&aacute;c với hỗ trợ l&atilde;i suất theo c&aacute;c QĐ 03/2013/QĐ-UBND v&agrave; QĐ 14/2015/QĐ-UBND từ nguồn ng&acirc;n s&aacute;ch tỉnh do c&aacute;c NH trực tiếp chi trả cho kh&aacute;ch h&agrave;ng). NHNN tỉnh ghi nhận đề xuất n&agrave;y để b&aacute;o c&aacute;o UBND tỉnh xem x&eacute;t khi bổ sung, sửa đổi QĐ 23 về hỗ trợ l&atilde;i suất từ nguồn XDNTM. Nếu c&oacute; sự điều chỉnh của UBND tỉnh, đề nghị DN v&agrave; Ng&acirc;n h&agrave;ng thực hiện theo đ&uacute;ng QĐ 23.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: DNTN thủy sản Hương Xu&acirc;n (Địa chỉ: Long Hải, Thạch Kim, Lộc H&agrave;. Lĩnh vực hoạt động ch&iacute;nh: chế biến thủy hải sản) c&oacute; nhu cầu vay vốn 2 tỷ đồng, đề nghị được hỗ trợ l&atilde;i suất cho doanh nghiệp v&agrave; đề xuất việc hỗ trợ l&atilde;i suất thực hiện trực tiếp qua ng&acirc;n h&agrave;ng, kh&ocirc;ng th&ocirc;ng qua địa phương.</p>
        </td>
        <td>&nbsp;</td>
        <td>Doanh nghiệp tư nh&acirc;n thủy sản Hương Xu&acirc;n</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=16" onclick="GoToLink(this);return false;" target="_self">Doanh nghiệp tư nh&acirc;n chế biến gỗ v&agrave; dịch vụ tổng hợp Minh Khu&ecirc;<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Th&aacute;i Y&ecirc;n, Đức Thọ:</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; doanh nghiệp: + Doanh nghiệp đ&atilde; c&oacute; quan hệ t&iacute;n dụng tại Ng&acirc;n h&agrave;ng TMCP &Aacute; Ch&acirc;u &ndash; PGD Hồng Lĩnh (ACB) từ th&aacute;ng 05/2013 v&agrave; thuộc diện được hỗ trợ l&atilde;i suất theo Quyết định 23/2014/QĐ-UBND của UBND tỉnh. Doanh số cho vay đ&atilde; giải ng&acirc;n cho doanh nghiệp kể từ th&aacute;ng 05/2013 đến nay l&agrave; 03 tỷ đồng. Dư nợ của doanh nghiệp tại thời điểm l&agrave;m việc l&agrave; 01 tỷ đồng v&agrave; dư bảo l&atilde;nh 11,57 triệu đồng. To&agrave;n bộ dư nợ được hỗ trợ l&atilde;i suất. Số tiền l&atilde;i đ&atilde; hỗ trợ cho doanh nghiệp l&agrave; 49,33 triệu đồng. Hằng năm doanh nghiệp được ng&acirc;n h&agrave;ng cấp hạn mức t&iacute;n dụng 01 tỷ đồng để bổ sung vốn lưu động phục vụ hoạt động sản xuất kinh doanh. Thời gian duy tr&igrave; hạn mức 12 th&aacute;ng (hết 12 th&aacute;ng doanh nghiệp được xem x&eacute;t cấp mới hạn mức), thời gian cho vay mỗi khế ước l&agrave; 6 th&aacute;ng. + Trong thời gian qua, Ng&acirc;n h&agrave;ng &Aacute; Ch&acirc;u &ndash; PGD Hồng Lĩnh lu&ocirc;n tạo điều kiện thuận lợi cho doanh nghiệp trong mọi giao dịch. Doanh nghiệp hiện c&oacute; quan hệ tốt với ng&acirc;n h&agrave;ng. Theo b&aacute;o c&aacute;o của Ng&acirc;n h&agrave;ng &Aacute; Ch&acirc;u &ndash; PGD Hồng Lĩnh, hiện nay nguy&ecirc;n liệu v&agrave; h&agrave;ng h&oacute;a tồn kho của doanh nghiệp c&ograve;n kh&aacute; nhiều n&ecirc;n trong thời gian tới doanh nghiệp chưa c&oacute; nhu cầu vay vốn phục vụ hoạt động sản xuất kinh doanh. &Yacute; kiến của NHNN tỉnh: Theo Bi&ecirc;n bản l&agrave;m việc giữa 2 b&ecirc;n, quan hệ t&iacute;n dụng giữa NH v&agrave; DN đ&uacute;ng quy chế. Về tạo điều kiện tiếp cận vay vốn dễ d&agrave;ng hơn: Về c&aacute;c điều kiện t&iacute;n dụng th&igrave; DN vẫn phải tiếp tục đ&aacute;p ứng v&agrave; tăng chất lượng c&aacute;c phương &aacute;n SXKD để đảm bảo an to&agrave;n vốn cho cả NH v&agrave; DN. NHNN sẽ chỉ đạo NHTM thực hiện đ&uacute;ng c&aacute;c quy định, thẩm định v&agrave; trả lời kịp thời, r&otilde; r&agrave;ng kết quả giải quyết đề xuất của DN để đ&aacute;p ứng nhu cầu vốn c&oacute; hiệu quả của DN.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: DNTN chế biến gỗ v&agrave; DVTH Minh Khu&ecirc; (Địa chỉ: x&atilde; Th&aacute;i Y&ecirc;n, huyện Đức Thọ, tỉnh H&agrave; Tĩnh. Lĩnh vực hoạt động ch&iacute;nh: sản xuất mộc d&acirc;n dụng) c&oacute; nhu cầu vốn 01 tỷ đồng để mua sắm thiết bị, mở rộng nh&agrave; xưởng v&agrave; đề nghị gi&uacute;p doanh nghiệp tiếp cận vốn vay dễ d&agrave;ng hơn.</p>
        </td>
        <td>&nbsp;</td>
        <td>Doanh nghiệp tư nh&acirc;n chế biến gỗ v&agrave; dịch vụ tổng hợp Minh Khu&ecirc;</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=17" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP x&acirc;y lắp điện v&agrave; DVTM Bảo Huy<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Thạch H&agrave;</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; doanh nghiệp: + Doanh nghiệp hiện đang c&oacute; quan hệ t&iacute;n dụng tại ng&acirc;n h&agrave;ng Techcombank HT. Doanh nghiệp đ&atilde; được ng&acirc;n h&agrave;ng cấp hạn mức t&iacute;n dụng 1 tỷ đồng để bổ sung vốn lưu động v&agrave; cấp hạn mức bảo l&atilde;nh 1 tỷ đồng phục vụ bảo l&atilde;nh thi c&ocirc;ng c&aacute;c c&ocirc;ng tr&igrave;nh x&acirc;y lắp điện. Dư nợ hiện tại của Doanh nghiệp tại Techcombank l&agrave; 1,3 tỷ đồng (ng&acirc;n h&agrave;ng cho vay vượt hạn mức 300 triệu đồng để kịp thời đ&aacute;p ứng nhu cầu vốn đột xuất của doanh nghiệp). Theo bi&ecirc;n bản l&agrave;m việc thời gian qua, ng&acirc;n h&agrave;ng lu&ocirc;n tạo điều kiện thuận lợi cho doanh nghiệp trong quan hệ vay vốn v&agrave; sử dụng c&aacute;c dịch vụ thanh to&aacute;n, bảo l&atilde;nh&hellip; Th&ocirc;ng qua việc cấp hạn mức t&iacute;n dụng v&agrave; hạn mức bảo l&atilde;nh, ng&acirc;n h&agrave;ng kịp thời đ&aacute;p ứng nhu cầu vốn t&iacute;n dụng v&agrave; nhu cầu bảo l&atilde;nh phục vụ thi c&ocirc;ng c&aacute;c hợp đồng x&acirc;y lắp điện của doanh nghiệp. Theo b&aacute;o c&aacute;o của Techcombank HT, hiện nay doanh nghiệp đang chờ nguồn thanh to&aacute;n từ đối t&aacute;c của một số hợp đồng đ&atilde; thực hiện, chuyển về để giảm bớt dư nợ vay ng&acirc;n h&agrave;ng v&agrave; c&oacute; vốn để t&aacute;i đầu tư. Doanh nghiệp chưa c&oacute; phương &aacute;n vay vốn trong thời gian tới. Khi ph&aacute;t sinh nhu cầu vay vốn, doanh nghiệp sẽ sử dụng vốn trong hạn mức t&iacute;n dụng đ&atilde; được cấp. Mối quan hệ ng&acirc;n h&agrave;ng &ndash; doanh nghiệp hợp t&aacute;c tốt, doanh nghiệp mong muốn gắn kết l&acirc;u d&agrave;i với ng&acirc;n h&agrave;ng. &Yacute; kiến của NHNN tỉnh: Theo b&aacute;o c&aacute;o, quan hệ giữa DN v&agrave; ng&acirc;n h&agrave;ng l&agrave; thuận lợi v&agrave; đ&uacute;ng quy định. Đề nghị 2 b&ecirc;n tiếp tục phối hợp để giải quyết nhu cầu vay, cho vay tr&ecirc;n cơ sở phương &aacute;n SXKD c&oacute; hiệu quả của DN.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: C&ocirc;ng ty CP x&acirc;y lắp điện v&agrave; DVTM Bảo Huy (Địa chỉ: khối 10, thị trấn Thạch H&agrave;, huyện Thạch H&agrave;, tỉnh H&agrave; Tĩnh. Lĩnh vực hoạt động ch&iacute;nh: thi c&ocirc;ng x&acirc;y lắp điện) c&oacute; đề nghị tạo điều kiện cho doanh nghiệp tiếp cận vốn vay ng&acirc;n h&agrave;ng.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty CP x&acirc;y lắp điện v&agrave; DVTM Bảo Huy</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=18" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH TMXD Phồn Vinh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP. H&agrave; Tĩnh</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; doanh nghiệp: + Doanh nghiệp chưa c&oacute; quan hệ vay vốn tại c&aacute;c TCTD. Trong thời gian qua, b&agrave; Kiều Linh Nh&acirc;m &ndash; Gi&aacute;m đốc doanh nghiệp đ&atilde; c&oacute; quan hệ vay vốn t&iacute;n dụng tại Techcombank HT. Trong thời gian tới, đơn vị tiếp tục vay vốn tại Techcombank theo h&igrave;nh thức c&aacute; nh&acirc;n, chưa c&oacute; nhu cầu vay theo h&igrave;nh thức doanh nghiệp. - &Yacute; kiến của NHNN tỉnh: Khi doanh nghiệp c&oacute; nhu cầu vay vốn phục vụ hoạt động kinh doanh đề nghị doanh nghiệp x&acirc;y dựng phương &aacute;n khả thi, hiệu quả gửi Ng&acirc;n h&agrave;ng để thẩm định, xem x&eacute;t cấp t&iacute;n dụng. Về l&atilde;i suất, NHTM sẽ cho vay đối với DN theo mức l&atilde;i suất th&ocirc;ng thường của NHTM cấp tr&ecirc;n quy định, nếu thuộc đối tượng được hỗ trợ l&atilde;i suất theo c&aacute;c quy định của Ch&iacute;nh phủ v&agrave; UBND tỉnh th&igrave; DN sẽ được hưởng ch&iacute;nh s&aacute;ch. Đề nghị DN tiếp cận c&aacute;c ch&iacute;nh s&aacute;ch hỗ trợ để li&ecirc;n hệ.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: C&ocirc;ng ty TNHH TMXD Phồn Vinh (Địa chỉ: 211 Nguyễn Biểu, TP H&agrave; Tĩnh. Lĩnh vực hoạt động ch&iacute;nh: ph&acirc;n phối v&agrave; b&aacute;n lẻ linh kiện, m&aacute;y lọc nước v&agrave; thiết bị xử l&yacute; nước) c&oacute; nhu cầu vay vốn 300 triệu đồng v&agrave; đề nghị cho tiếp cận vay nguồn vốn c&oacute; l&atilde;i suất thấp, thời gian trả gốc d&agrave;i hạn.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH TMXD Phồn Vinh</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=19" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Th&agrave;nh Nh&acirc;n<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Phố Ch&acirc;u, Hương Sơn</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; doanh nghiệp: + Doanh nghiệp c&oacute; quan hệ tiền gửi v&agrave; tiền vay tại NHNo&amp;PTNT huyện Hương Sơn từ năm 2009 đến nay. Dư nợ hiện tại của doanh nghiệp l&agrave; 650 triệu đồng, thời hạn vay 12 th&aacute;ng, l&atilde;i suất 10%/năm. Trong thời gian qua, ng&acirc;n h&agrave;ng lu&ocirc;n tạo điều kiện thuận lợi cho doanh nghiệp trong c&aacute;c giao dịch, kịp thời đ&aacute;p ứng nhu cầu vốn c&oacute; hiệu quả của doanh nghiệp. C&aacute;c hồ sơ, thủ tục được ng&acirc;n h&agrave;ng hướng dẫn đầy đủ, cụ thể. Quan hệ t&iacute;n dụng của doanh nghiệp tại ng&acirc;n h&agrave;ng kh&ocirc;ng ph&aacute;t sinh kh&oacute; khăn, vướng mắc. Hiện tại doanh nghiệp chưa c&oacute; nhu cầu vay th&ecirc;m vốn. - &Yacute; kiến của NHNN tỉnh: Trong bi&ecirc;n bản l&agrave;m việc phản &aacute;nh mối quan hệ giữa DN v&agrave; ng&acirc;n h&agrave;ng thuận lợi, kh&ocirc;ng thấy phản ảnh kh&oacute; khăn, vướng mắc. Đề nghị DN c&oacute; &yacute; kiến tại Hội nghị để c&ugrave;ng NHNo Hương Sơn trao đổi cụ thể.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: C&ocirc;ng ty TNHH Th&agrave;nh Nh&acirc;n (Địa chỉ: Khối 9, Phố Ch&acirc;u, Hương Sơn. Lĩnh vực hoạt động ch&iacute;nh: x&acirc;y dựng c&aacute;c c&ocirc;ng tr&igrave;nh) c&oacute; nhu cầu vốn 5,01 tỷ đồng để đầu tư v&agrave;o hoạt động kinh doanh của doanh nghiệp v&agrave; kiến nghị tạo điều kiện th&aacute;o gỡ kh&oacute; khăn, vướng mắc cho doanh nghiệp trong việc tiếp cận nguồn vốn.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH Th&agrave;nh Nh&acirc;n</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=20" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH TMDV điện lạnh Hải Đăng<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Thạch H&agrave;</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; doanh nghiệp: + NHNo&amp;PTNT huyện Thạch H&agrave; đ&atilde; trực tiếp l&agrave;m việc với doanh nghiệp. Tuy nhi&ecirc;n hiện nay doanh nghiệp chưa c&oacute; nhu cầu vay vốn ng&acirc;n h&agrave;ng n&ecirc;n chưa cung cấp hồ sơ để ng&acirc;n h&agrave;ng tiếp cận. Khi c&oacute; nhu cầu vay vốn v&agrave; c&oacute; kế hoạch kinh doanh cụ thể, doanh nghiệp sẽ l&agrave;m việc với ng&acirc;n h&agrave;ng để được hướng dẫn, tư vấn. - &Yacute; kiến của NHNN tỉnh: Hiện tại DN chưa c&oacute; nhu cầu vay vốn n&ecirc;n chưa phối hợp cung cấp hồ sơ để ng&acirc;n h&agrave;ng nắm th&ocirc;ng tin. Khi c&oacute; nhu cầu vay vốn phục vụ hoạt động sản xuất kinh doanh đề nghị doanh nghiệp x&acirc;y dựng phương &aacute;n cụ thể, khả thi, hiệu quả v&agrave; phối hợp c&ugrave;ng Ng&acirc;n h&agrave;ng để xem x&eacute;t, thẩm định. Nếu đủ điều kiện vay vốn, NHTM sẽ cho vay đối với doanh nghiệp.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu điều tra của Sở KHĐT: c&ocirc;ng ty TNHH TMDV điện lạnh Hải Đăng (Địa chỉ: Tổ 9, Thạch H&agrave;, H&agrave; Tĩnh. Lĩnh vực hoạt động ch&iacute;nh: kinh doanh điện tử, điện lạnh) kiến nghị cần c&oacute; giải ph&aacute;p để doanh nghiệp c&oacute; thể tiếp cận vốn ng&acirc;n h&agrave;ng phục vụ hoạt động kinh doanh</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH TMDV điện lạnh Hải Đăng</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=21" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Quảng Đại<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Xu&acirc;n Lộc, Can Lộc</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; doanh nghiệp: + Hiện tại doanh nghiệp chưa c&oacute; quan hệ vay vốn tại c&aacute;c TCTD. Năm 2008, c&aacute; nh&acirc;n &ocirc;ng Nguyễn Hữu Khuy&ecirc;n &ndash; Gi&aacute;m đốc doanh nghiệp đ&atilde; được NHNo&amp;PTNT huyện Can Lộc cấp t&iacute;n dụng 300 triệu đồng v&agrave; đ&atilde; được gia hạn nợ. Hiện tại dư nợ của &ocirc;ng Nguyễn Hữu Khuy&ecirc;n l&agrave; 290 triệu đồng. + Tại buổi l&agrave;m việc, doanh nghiệp đề xuất vay vốn 1,6 tỷ đồng, thời hạn vay 24 th&aacute;ng để phục vụ hoạt động khai th&aacute;c đ&aacute; v&agrave; t&agrave;i sản đảm bảo l&agrave; mỏ đ&aacute;. Tuy nhi&ecirc;n hồ sơ ph&aacute;p l&yacute; của doanh nghiệp hiện chưa đầy đủ (thiếu điều lệ doanh nghiệp, quyết định bổ nhiệm kế to&aacute;n trưởng, bi&ecirc;n bản g&oacute;p vốn, chứng nhận g&oacute;p vốn), thiếu hồ sơ kinh tế (b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh 02 năm gần nhất), chưa c&oacute; hồ sơ về phương &aacute;n sản xuất kinh doanh, phương &aacute;n vay vốn, chưa cung cấp được hồ sơ về t&agrave;i sản đảm bảo. Do đ&oacute; ng&acirc;n h&agrave;ng chưa c&oacute; căn cứ để thẩm định. - &Yacute; kiến của NHNN tỉnh: Đề nghị doanh nghiệp bổ sung đầy đủ c&aacute;c hồ sơ ph&aacute;p l&yacute;, hồ sơ kinh tế, hồ sơ t&agrave;i sản đảm bảo, phương &aacute;n sản xuất kinh doanh&hellip; tiếp tục hội đủ c&aacute;c điều kiện vay vốn để tiếp tục l&agrave;m việc với ng&acirc;n h&agrave;ng để thẩm định. Nếu đủ điều kiện vay vốn, ng&acirc;n h&agrave;ng sẽ cho vay theo nhu cầu thực tế của phương &aacute;n. Nếu t&agrave;i sản của doanh nghiệp đủ điều kiện để nhận thế chấp, ng&acirc;n h&agrave;ng sẽ nhận thế chấp t&agrave;i sản theo quy định.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu điều tra của Sở KHĐT: c&ocirc;ng ty TNHH Quảng Đại (Địa chỉ: Mai Long, Xu&acirc;n Lộc, Can Lộc. Lĩnh vực hoạt động ch&iacute;nh: khai th&aacute;c đ&aacute; x&acirc;y dựng d&acirc;n dụng) kiến nghị tạo điều kiện cho doanh nghiệp vay vốn v&agrave; nhận mỏ đ&aacute; l&agrave;m t&agrave;i sản thế chấp.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH Quảng Đại</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=22" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Ho&agrave;ng Gia H&agrave; Tĩnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Kỳ Đồng, Kỳ Anh</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; doanh nghiệp: NHNo&amp;PTNT chi nh&aacute;nh Voi đ&atilde; l&agrave;m việc trực tiếp với doanh nghiệp. Tại thời điểm l&agrave;m việc, doanh nghiệp chưa c&oacute; quan hệ t&iacute;n dụng tại TCTD v&agrave; chưa c&oacute; nhu cầu vay vốn ng&acirc;n h&agrave;ng. NHNo đ&atilde; đề nghị, trong thời gian tới, khi doanh nghiệp c&oacute; nhu cầu vay vốn, đề nghị DN x&acirc;y dựng phương &aacute;n SXKD c&oacute; hiệu quả, phương &aacute;n vay vốn ng&acirc;n h&agrave;ng c&oacute; khả năng trả nợ, ng&acirc;n h&agrave;ng sẽ tiến h&agrave;nh thẩm định, tạo mọi điều kiện hỗ trợ kh&aacute;ch h&agrave;ng theo quy định của ph&aacute;p luật. - &Yacute; kiến của NHNN tỉnh: Đề nghị DN thực hiện c&aacute;c hướng dẫn của NHNo Voi để tiếp cận nguồn vốn vay theo quy định.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: C&ocirc;ng ty TNHH Ho&agrave;ng Gia H&agrave; Tĩnh (Địa chỉ: Đồng Ph&uacute;, Kỳ Đồng, Kỳ Anh. Lĩnh vực hoạt động ch&iacute;nh: kinh doanh m&aacute;y vi t&iacute;nh v&agrave; thiết bị văn ph&ograve;ng) c&oacute; nhu cầu vay vốn 600 triệu đồng để mở rộng quy m&ocirc; kinh doanh v&agrave; đề nghị được vay c&aacute;c g&oacute;i hỗ trợ kinh doanh đối với doanh nghiệp vừa v&agrave; nhỏ, tiếp cận ng&acirc;n h&agrave;ng một c&aacute;ch th&ocirc;ng tho&aacute;ng, giảm thủ tục h&agrave;nh ch&iacute;nh.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH Ho&agrave;ng Gia H&agrave; Tĩnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=23" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH TM H&ograve;a Tiến<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Trung Lễ, Đức Thọ</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; doanh nghiệp: NHNo&amp;PTNT Đức Thọ đ&atilde; l&agrave;m việc trực tiếp với doanh nghiệp. Tại thời điểm l&agrave;m việc, doanh nghiệp chưa từng quan hệ vay vốn tại TCTD, chưa c&oacute; phương &aacute;n sản xuất kinh doanh v&agrave; chưa c&oacute; nhu cầu vay vốn ng&acirc;n h&agrave;ng. - &Yacute; kiến của NHNN tỉnh: Khi c&oacute; nhu cầu vay vốn phục vụ hoạt động sản xuất kinh doanh đề nghị doanh nghiệp x&acirc;y dựng phương &aacute;n cụ thể, khả thi, hiệu quả gửi Ng&acirc;n h&agrave;ng để xem x&eacute;t, thẩm định. Nếu đủ điều kiện vay vốn, NHTM sẽ cho vay đối với doanh nghiệp. Tr&ecirc;n cơ sở đ&aacute;nh gi&aacute; gi&aacute; trị t&agrave;i sản l&agrave; xe &ocirc; t&ocirc;, NHTM sẽ cho vay số tiền ph&ugrave; hợp với nhu cầu vốn thực tế của phương &aacute;n v&agrave; gi&aacute; trị t&agrave;i sản đảm bảo theo quy định của ph&aacute;p luật.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: C&ocirc;ng ty TNHH TM H&ograve;a Tiến (Địa chỉ: th&ocirc;n Trung Nam, Trung Lễ, Đức Thọ. Lĩnh vực hoạt động ch&iacute;nh: vận tải h&agrave;ng h&oacute;a) c&oacute; nhu cầu vay vốn 1,5 tỷ đồng để mua xe cơ giới phục vụ hoạt động vận tải h&agrave;ng h&oacute;a v&agrave; đề nghị thế chấp xe &ocirc; t&ocirc; đ&atilde; mua, đ&aacute;nh gi&aacute; t&agrave;i sản gần bằng gi&aacute; mua để vay vốn ng&acirc;n h&agrave;ng.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH TM H&ograve;a Tiến</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=24" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH DVTH Trung H&ograve;a<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; doanh nghiệp: NHNo&amp;PTNT Hương Sơn đ&atilde; l&agrave;m việc trực tiếp với doanh nghiệp. Tại thời điểm l&agrave;m việc, doanh nghiệp chưa từng quan hệ t&iacute;n dụng tại TCTD, chưa c&oacute; phương &aacute;n sản xuất kinh doanh v&agrave; chưa c&oacute; nhu cầu vay vốn ng&acirc;n h&agrave;ng. - &Yacute; kiến của NHNN tỉnh: Khi c&oacute; nhu cầu vay vốn phục vụ hoạt động sản xuất kinh doanh đề nghị doanh nghiệp x&acirc;y dựng phương &aacute;n cụ thể, khả thi, hiệu quả gửi Ng&acirc;n h&agrave;ng để xem x&eacute;t, thẩm định. Nếu đủ điều kiện vay vốn, NHTM sẽ cho vay đối với doanh nghiệp số tiền ph&ugrave; hợp với nhu cầu vốn thực tế của phương &aacute;n v&agrave; &aacute;p dụng ch&iacute;nh s&aacute;ch ưu đ&atilde;i ph&ugrave; hợp đối với doanh nghiệp hoạt động trong lĩnh vực n&ocirc;ng nghiệp, n&ocirc;ng th&ocirc;n (Nghị định 55/2015/NĐ-CP của Ch&iacute;nh phủ, c&aacute;c ch&iacute;nh s&aacute;ch HTLS của UBND tỉnh&hellip;) theo quy định.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: C&ocirc;ng ty TNHH DVTH Trung H&ograve;a (Địa chỉ: th&ocirc;n Sinh Cờ, Sơn Ch&acirc;u, Hương Sơn. Lĩnh vực hoạt động ch&iacute;nh: kinh doanh thức ăn chăn nu&ocirc;i) c&oacute; nhu cầu vay vốn 500 triệu để phục vụ hoạt động kinh doanh v&agrave; kiến nghị được vay vốn ng&acirc;n h&agrave;ng theo ch&iacute;nh s&aacute;ch d&agrave;nh cho doanh nghiệp kinh doanh trong lĩnh vực n&ocirc;ng nghiệp, n&ocirc;ng th&ocirc;n.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH DVTH Trung H&ograve;a</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=25" onclick="GoToLink(this);return false;" target="_self">DNTN Hải Ng&ocirc;n<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>x&oacute;m Thanh Thủy, Thanh Lộc, Can Lộc</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; Doanh nghiệp: + Doanh nghiệp th&agrave;nh lập từ năm 2011 nhưng do hoạt động kh&oacute; khăn n&ecirc;n tạm ngừng kinh doanh trong 02 năm 2012 v&agrave; 2013, đến năm 2014 mới hoạt động trở lại. Đến nay hồ sơ ph&aacute;p l&yacute; của doanh nghiệp chưa đầy đủ (chưa c&oacute; quyết định bổ nhiệm kế to&aacute;n trưởng), chưa c&oacute; phương &aacute;n sản xuất kinh doanh cụ thể. Giấy chứng nhận quyền sử dụng đất của hộ gia đ&igrave;nh v&agrave; của doanh nghiệp chưa được cấp. + NHNo&amp;PTNT huyện Can Lộc đ&atilde; tạo điều kiện cho vay dưới h&igrave;nh thức hộ gia đ&igrave;nh số tiền 600 triệu đồng phục vụ hoạt động sản xuất kinh doanh. Dư nợ hiện tại c&ograve;n 100 triệu đồng. + Tại buổi l&agrave;m việc, doanh nghiệp đề xuất vay 800 triệu, thời gian 6 th&aacute;ng theo l&atilde;i suất thỏa thuận giữa TCTD v&agrave; doanh nghiệp để phục vụ hoạt động sản xuất kinh doanh. Tuy nhi&ecirc;n hiện chưa hội đủ c&aacute;c điều kiện vay vốn v&agrave; chưa c&oacute; phương &aacute;n sản xuất kinh doanh để ng&acirc;n h&agrave;ng thẩm định. - &Yacute; kiến của NHNN tỉnh: Đề nghị doanh nghiệp tiếp tục hội đủ c&aacute;c điều kiện vay vốn như ho&agrave;n thiện hồ sơ ph&aacute;p l&yacute;, hồ sơ t&agrave;i sản đảm bảo, phương &aacute;n sản xuất kinh doanh hiệu quả, khả thi để ng&acirc;n h&agrave;ng thẩm định. Nếu đủ điều kiện vay vốn, ng&acirc;n h&agrave;ng sẽ cho vay số tiền ph&ugrave; hợp với nhu cầu vốn thực tế của phương &aacute;n v&agrave; &aacute;p dụng ch&iacute;nh s&aacute;ch ưu đ&atilde;i ph&ugrave; hợp đối với doanh nghiệp (Nghị định 55/2015/NĐ-CP của Ch&iacute;nh phủ, c&aacute;c ch&iacute;nh s&aacute;ch HTLS của UBND tỉnh&hellip;) theo đ&uacute;ng quy định.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: DNTN Hải Ng&ocirc;n (Địa chỉ: x&oacute;m Thanh Thủy, Thanh Lộc, Can Lộc. Lĩnh vực hoạt động ch&iacute;nh: sản xuất chế biến l&acirc;m sản, đồ mộc gia dụng) c&oacute; nhu cầu vay vốn 01 tỷ đồng để mua sắm m&aacute;y m&oacute;c phục vụ sản xuất v&agrave; kiến nghị được vay vốn ng&acirc;n h&agrave;ng với l&atilde;i suất ưu đ&atilde;i.</p>
        </td>
        <td>&nbsp;</td>
        <td>DNTN Hải Ng&ocirc;n</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=26" onclick="GoToLink(this);return false;" target="_self">DNTN Duy Ph&aacute;t Th&agrave;nh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>x&oacute;m Hội Th&agrave;nh I, Xu&acirc;n Hội, Nghi Xu&acirc;n</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; Doanh nghiệp: NHNo&amp;PTNT huyện Nghi Xu&acirc;n đ&atilde; l&agrave;m việc trực tiếp với doanh nghiệp. Doanh nghiệp mới th&agrave;nh lập năm 2015, chưa c&oacute; đầy đủ hồ sơ ph&aacute;p l&yacute;. Tại thời điểm l&agrave;m việc, doanh nghiệp chưa từng c&oacute; quan hệ vay vốn tại TCTD, chưa c&oacute; phương &aacute;n sản xuất kinh doanh v&agrave; chưa c&oacute; nhu cầu vay vốn ng&acirc;n h&agrave;ng. Doanh nghiệp hoạt động trong lĩnh vực quản l&yacute; v&agrave; khai th&aacute;c chợ nhưng đến nay chợ chưa được b&agrave;n giao cho doanh nghiệp. - &Yacute; kiến của NHNN tỉnh: Khi c&oacute; nhu cầu vay vốn phục vụ hoạt động sản xuất kinh doanh đề nghị doanh nghiệp x&acirc;y dựng phương &aacute;n cụ thể, khả thi, hiệu quả gửi Ng&acirc;n h&agrave;ng để xem x&eacute;t, thẩm định. Nếu đủ điều kiện vay vốn, NHTM sẽ cho vay đối với doanh nghiệp số tiền ph&ugrave; hợp với nhu cầu vốn thực tế của phương &aacute;n.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: DNTN Duy Ph&aacute;t Th&agrave;nh (Địa chỉ: x&oacute;m Hội Th&agrave;nh I, Xu&acirc;n Hội, Nghi Xu&acirc;n. Lĩnh vực hoạt động ch&iacute;nh: quản l&yacute; khai th&aacute;c chợ, chế biển hải sản đ&ocirc;ng lạnh) c&oacute; nhu cầu vay vốn 500 triệu đồng phục vụ sản xuất kinh doanh v&agrave; kiến nghị được vay vốn ưu đ&atilde;i của Nh&agrave; nước.</p>
        </td>
        <td>&nbsp;</td>
        <td>DNTN Duy Ph&aacute;t Th&agrave;nh</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=27" onclick="GoToLink(this);return false;" target="_self">DNTN Hiền Ho&agrave;i<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>: th&ocirc;n Hữu Chế, x&atilde; Đức An, Đức Thọ</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; Doanh nghiệp: NHNo&amp;PTNT huyện Đức Thọ đ&atilde; l&agrave;m việc trực tiếp với doanh nghiệp. Doanh nghiệp mới th&agrave;nh lập năm 2015, chưa đi v&agrave;o hoạt động v&agrave; chưa c&oacute; đầy đủ hồ sơ ph&aacute;p l&yacute;, hồ sơ kinh tế. Tại thời điểm l&agrave;m việc, doanh nghiệp chưa từng quan hệ t&iacute;n dụng tại TCTD, chưa c&oacute; phương &aacute;n sản xuất kinh doanh v&agrave; chưa c&oacute; nhu cầu vay vốn ng&acirc;n h&agrave;ng. - &Yacute; kiến của NHNN tỉnh: Khi c&oacute; nhu cầu vay vốn phục vụ hoạt động sản xuất kinh doanh đề nghị doanh nghiệp x&acirc;y dựng phương &aacute;n cụ thể, khả thi, hiệu quả gửi Ng&acirc;n h&agrave;ng để xem x&eacute;t, thẩm định. Nếu đủ điều kiện vay vốn, NHTM sẽ cho vay đối với doanh nghiệp.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: DNTN Hiền Ho&agrave;i (Địa chỉ: th&ocirc;n Hữu Chế, x&atilde; Đức An, Đức Thọ. Lĩnh vực hoạt động ch&iacute;nh: chế biến l&acirc;m sản) kiến nghị c&aacute;c cơ quan Nh&agrave; nước tạo điều kiện hỗ trợ về vốn.</p>
        </td>
        <td>&nbsp;</td>
        <td>DNTN Hiền Ho&agrave;i</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=28" onclick="GoToLink(this);return false;" target="_self">DNTN Quang &Aacute;nh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>x&atilde; Đức An, huyện Đức Thọ</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; Doanh nghiệp: NHNo&amp;PTNT huyện Đức Thọ đ&atilde; l&agrave;m việc trực tiếp với doanh nghiệp. Doanh nghiệp mới th&agrave;nh lập năm 2015, chưa đi v&agrave;o hoạt động v&agrave; chưa c&oacute; đầy đủ hồ sơ ph&aacute;p l&yacute;, hồ sơ kinh tế. Tại thời điểm l&agrave;m việc, doanh nghiệp chưa từng quan hệ t&iacute;n dụng tại TCTD, chưa c&oacute; phương &aacute;n sản xuất kinh doanh v&agrave; chưa c&oacute; nhu cầu vay vốn ng&acirc;n h&agrave;ng. - &Yacute; kiến của NHNN tỉnh: Khi c&oacute; nhu cầu vay vốn phục vụ hoạt động sản xuất kinh doanh đề nghị doanh nghiệp x&acirc;y dựng phương &aacute;n cụ thể, khả thi, hiệu quả gửi Ng&acirc;n h&agrave;ng để xem x&eacute;t, thẩm định. Nếu đủ điều kiện vay vốn, NHTM sẽ cho vay đối với doanh nghiệp.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: DNTN Quang &Aacute;nh (Địa chỉ: x&atilde; Đức An, huyện Đức Thọ. Lĩnh vực hoạt động ch&iacute;nh: sản xuất kinh doanh mộc d&acirc;n dụng v&agrave; nội thất) c&oacute; nhu cầu vay vốn 500 triệu để mua sắm m&aacute;y m&oacute;c, thiết bị v&agrave; vật liệu phục vụ sản xuất kinh doanh v&agrave; kiến nghị c&aacute;c cơ quan tạo điều kiện hỗ trợ về vốn.</p>
        </td>
        <td>&nbsp;</td>
        <td>DNTN Quang &Aacute;nh</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=29" onclick="GoToLink(this);return false;" target="_self">DNTN Nguyễn Huy Lam<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>khối 4, thị trấn Ngh&egrave;n, Can Lộc</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; Doanh nghiệp: NHNo&amp;PTNT huyện Can Lộc đ&atilde; trực tiếp l&agrave;m việc với doanh nghiệp. + Doanh nghiệp th&agrave;nh lập năm 2013, chưa c&oacute; quan hệ vay vốn tại c&aacute;c TCTD, hồ sơ ph&aacute;p l&yacute; chưa đầy đủ (thiếu quyết định bổ nhiệm kế to&aacute;n trưởng), hồ sơ kinh tế (thiếu b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh c&oacute; x&aacute;c nhận của cơ quan thuế năm 2013 v&agrave; 2014). Tại thời điểm l&agrave;m việc, doanh nghiệp đề xuất vay vốn 300 triệu đồng, thời hạn 24 th&aacute;ng, l&atilde;i suất 4%/năm nhưng chưa c&oacute; phương &aacute;n vay vốn cụ thể để ng&acirc;n h&agrave;ng thẩm định. + Mặc d&ugrave; doanh nghiệp chưa vay vốn t&iacute;n dụng nhưng &ocirc;ng Nguyễn Huy Lam &ndash; Gi&aacute;m đốc doanh nghiệp đ&atilde; c&oacute; quan hệ vay vốn tại NHNo&amp;PTNT huyện Can Lộc từ năm 2007 v&agrave; đ&atilde; từng được ng&acirc;n h&agrave;ng cơ cấu nợ. Sau khi trả hết khoản nợ được cơ cấu, ng&acirc;n h&agrave;ng tiếp tục tạo điều kiện cho &ocirc;ng Nguyễn Huy Lam vay 450 triệu đồng để phục vụ hoạt động kinh doanh. Dư nợ hiện tại của &ocirc;ng Nguyễn Huy Lam l&agrave; 250 triệu đồng. - &Yacute; kiến của NHNN tỉnh: đề nghị doanh nghiệp tiếp tục hội đủ c&aacute;c điều kiện vay vốn theo quy định (bổ sung hồ sơ ph&aacute;p l&yacute;, hồ sơ kinh tế, hồ sơ t&agrave;i sản đảm bảo, phương &aacute;n sản xuất kinh doanh) để ng&acirc;n h&agrave;ng thẩm định. Nếu đủ điều kiện vay vốn, ng&acirc;n h&agrave;ng sẽ cho vay với số tiền ph&ugrave; hợp với nhu cầu thực tế của phương &aacute;n v&agrave; mức l&atilde;i suất ph&ugrave; hợp theo quy định.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: DNTN Nguyễn Huy Lam (Địa chỉ: khối 4, thị trấn Ngh&egrave;n, Can Lộc. Lĩnh vực hoạt động ch&iacute;nh: bu&ocirc;n b&aacute;n vật liệu, lắp đặt thiết bị x&acirc;y dựng, san lấp mặt bằng,) c&oacute; nhu cầu vay vốn 400 triệu phục vụ hoạt động kinh doanh v&agrave; kiến nghị NHTM tạo điều kiện cho doanh nghiệp vay vốn ưu đ&atilde;i.</p>
        </td>
        <td>&nbsp;</td>
        <td>DNTN Nguyễn Huy Lam</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=30" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP đầu tư ph&aacute;t triển n&ocirc;ng l&acirc;m Ng&agrave;n Phố<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Sơn Kim I, Hương Sơn</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; Doanh nghiệp: + NHNo&amp;PTNT huyện Hương Sơn đ&atilde; l&agrave;m việc trực tiếp với Doanh nghiệp. Doanh nghiệp chưa c&oacute; quan hệ vay vốn tại c&aacute;c TCTD. Tại buổi l&agrave;m việc doanh nghiệp đề xuất vay 500 triệu đồng, thời hạn 5 năm v&agrave; được hỗ trợ l&atilde;i suất, tuy nhi&ecirc;n hiện nay hồ sơ ph&aacute;p l&yacute;, hồ sơ kinh tế của doanh nghiệp chưa đầy đủ, chưa c&oacute; phương &aacute;n sản xuất kinh doanh cụ thể để ng&acirc;n h&agrave;ng thẩm định. - &Yacute; kiến của NHNN tỉnh: Đề nghị doanh nghiệp tiếp tục hội đủ c&aacute;c điều kiện vay vốn theo quy định (bổ sung, ho&agrave;n thiện hồ sơ ph&aacute;p l&yacute;, hồ sơ kinh tế, phương &aacute;n sản xuất kinh doanh theo hướng dẫn của NHNo&amp;PTNT Hương Sơn) để ng&acirc;n h&agrave;ng thẩm định. Nếu đủ điều kiện vay vốn, ng&acirc;n h&agrave;ng sẽ cho vay v&agrave; &aacute;p dụng c&aacute;c ch&iacute;nh s&aacute;ch ưu đ&atilde;i đối với doanh nghiệp theo Nghị định 55/2015/NĐ-CP của Ch&iacute;nh phủ v&agrave; ch&iacute;nh s&aacute;ch hỗ trợ l&atilde;i suất theo Quyết định 23/2014/QĐ-UBND của UBND tỉnh nếu đ&aacute;p ứng điều kiện về quy m&ocirc; trồng rừng theo quy định.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: C&ocirc;ng ty CP ĐT PT n&ocirc;ng l&acirc;m Ng&agrave;n Phố (Địa chỉ: Sơn Kim I, Hương Sơn. Lĩnh vực hoạt động ch&iacute;nh: trồng rừng, trồng c&acirc;y ăn quả) c&oacute; nhu cầu vay vốn 500 triệu để bổ sung vốn lưu động phục vụ sản xuất kinh doanh v&agrave; đề nghị được hưởng ch&iacute;nh s&aacute;ch t&iacute;n dụng ưu đ&atilde;i.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty CP đầu tư ph&aacute;t triển n&ocirc;ng l&acirc;m Ng&agrave;n Phố</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=31" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP Sơn An H&agrave; Tĩnh &ndash; CN Hương Sơn<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Sơn Trung, Hương Sơn</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; Doanh nghiệp: NHNo&amp;PTNT huyện Hương Sơn đ&atilde; l&agrave;m việc trực tiếp với doanh nghiệp. Doanh nghiệp chưa c&oacute; quan hệ vay vốn tại TCTD (mới chỉ c&oacute; quan hệ tiền gửi tại NHĐT&amp;PT huyện Hương Sơn) v&agrave; chưa c&oacute; nhu cầu vay vốn trong thời gian tới. - &Yacute; kiến của NHNN tỉnh: Khi c&oacute; nhu cầu vay vốn phục vụ hoạt động sản xuất kinh doanh đề nghị doanh nghiệp x&acirc;y dựng phương &aacute;n cụ thể, khả thi, hiệu quả gửi Ng&acirc;n h&agrave;ng để xem x&eacute;t, thẩm định. Nếu đủ điều kiện vay vốn, NHTM sẽ cho vay đối với doanh nghiệp v&agrave; &aacute;p dụng ch&iacute;nh s&aacute;ch hỗ trợ l&atilde;i suất theo Quyết định 23/2014/QĐ-UBND của UBND tỉnh nếu doanh nghiệp đ&aacute;p ứng điều kiện về quy m&ocirc; nu&ocirc;i hươu theo quy định.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: C&ocirc;ng ty CP Sơn An HT &ndash; CN Hương Sơn (Địa chỉ: Sơn Trung, Hương Sơn. Lĩnh vực hoạt động ch&iacute;nh: chăn nu&ocirc;i hươu) c&oacute; nhu cầu vay vốn 500 triệu đồng để bổ sung vốn lưu động v&agrave; kiến nghị tạo điều kiện cho doanh nghiệp tiếp cận với nguồn vốn ưu đ&atilde;i.</p>
        </td>
        <td>&nbsp;</td>
        <td>CN Hương Sơn</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=32" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP XD &amp; TM Đ&igrave;nh Đức<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>số 212, đường Hải Thượng L&atilde;n &Ocirc;ng, TP. H&agrave; Tĩnh. Lĩnh</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; doanh nghiệp: NHNo&amp;PTNT TP H&agrave; Tĩnh đ&atilde; l&agrave;m việc trực tiếp với doanh nghiệp. Doanh nghiệp chưa c&oacute; quan hệ vay vốn tại TCTD. Hiện nay c&aacute;c hồ sơ t&agrave;i ch&iacute;nh, hồ sơ t&agrave;i sản đảm bảo chưa đầy đủ. Doanh nghiệp chưa c&oacute; phương &aacute;n sản xuất kinh doanh cụ thể để ng&acirc;n h&agrave;ng thẩm định. - &Yacute; kiến của NHNN tỉnh: Đề nghị doanh nghiệp tiếp tục hội đủ c&aacute;c điều kiện vay vốn theo quy định (bổ sung hồ sơ t&agrave;i ch&iacute;nh, hồ sơ t&agrave;i sản đảm bảo, phương &aacute;n sản xuất kinh doanh hiệu quả, khả thi) để ng&acirc;n h&agrave;ng thẩm định. Nếu đ&aacute;p ứng điều kiện vay vốn, ng&acirc;n h&agrave;ng sẽ cho vay số tiền ph&ugrave; hợp với nhu cầu vốn thực tế của phương &aacute;n.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: C&ocirc;ng ty CP XD &amp; TM Đ&igrave;nh Đức (Địa chỉ: số 212, đường Hải Thượng L&atilde;n &Ocirc;ng, TP. H&agrave; Tĩnh. Lĩnh vực hoạt động ch&iacute;nh: x&acirc;y dựng c&ocirc;ng tr&igrave;nh đường sắt v&agrave; đường bộ) c&oacute; nhu cầu vay vốn 02 tỷ đồng để mua sắm m&aacute;y m&oacute;c, thiết bị phục vụ thi c&ocirc;ng c&ocirc;ng tr&igrave;nh v&agrave; kiến nghị được hỗ trợ về nguồn vốn vay, c&aacute;c hồ sơ thủ tục vay NHTM được nới lỏng, đơn giản h&oacute;a.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty CP XD &amp; TM Đ&igrave;nh Đức</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=33" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH trang tr&iacute; nội thất AF<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>x&oacute;m Thanh Ph&uacute;, x&atilde; Thạch Trung, Thạch H&agrave;</td>
        <td>
            <p>- Theo b&aacute;o c&aacute;o của NHNo&amp;PTNT TP H&agrave; Tĩnh: Ng&acirc;n h&agrave;ng đ&atilde; cử c&aacute;n bộ đến trực tiếp l&agrave;m việc với doanh nghiệp nhưng Gi&aacute;m đốc doanh nghiệp đi c&ocirc;ng t&aacute;c, kh&ocirc;ng c&oacute; mặt để l&agrave;m việc. Ng&acirc;n h&agrave;ng đ&atilde; li&ecirc;n lạc điện thoại để hẹn l&agrave;m việc nhưng Gi&aacute;m đốc doanh nghiệp kh&ocirc;ng sắp xếp được thời gian l&agrave;m việc với ng&acirc;n h&agrave;ng (do đi c&ocirc;ng t&aacute;c) n&ecirc;n ng&acirc;n h&agrave;ng chưa tiếp cận được doanh nghiệp. - &Yacute; kiến của NHNN tỉnh: Chỉ đạo NHNo&amp;PTNT TP H&agrave; Tĩnh tiếp tục l&agrave;m việc với doanh nghiệp khi Gi&aacute;m đốc doanh nghiệp sắp xếp được thời gian. Chủ động nắm bắt th&ocirc;ng tin về t&igrave;nh h&igrave;nh hoạt động kinh doanh của doanh nghiệp, nhu cầu vay vốn trong thời gian tới. Hướng dẫn doanh nghiệp c&aacute;c hồ sơ thủ tục cần thiết, tư vấn x&acirc;y dựng phương &aacute;n kinh doanh hiệu quả, khả thi để ng&acirc;n h&agrave;ng thẩm định. Nếu doanh nghiệp c&oacute; nhu cầu vay vốn v&agrave; hội đủ điều kiện theo quy định, ng&acirc;n h&agrave;ng sẽ cho vay đối với doanh nghiệp.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: C&ocirc;ng ty TNHH trang tr&iacute; nội thất AF (Địa chỉ: x&oacute;m Thanh Ph&uacute;, x&atilde; Thạch Trung, Thạch H&agrave;. Lĩnh vực hoạt động ch&iacute;nh: kinh doanh nội thất, đồ điện gia dụng) c&oacute; nhu cầu vay vốn 300 triệu để bổ sung vốn lưu động phục vụ hoạt động kinh doanh v&agrave; kiến nghị hỗ trợ về vốn cho doanh nghiệp từ nguồn ng&acirc;n s&aacute;ch Nh&agrave; nước, ng&acirc;n h&agrave;ng v&agrave; quỹ hỗ trợ.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH trang tr&iacute; nội thất AF</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=34" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH TM v&agrave; DV Xuy&ecirc;n H&agrave;<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>T&acirc;n Long, Việt Xuy&ecirc;n, Thạch H&agrave;</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; Doanh nghiệp: + Doanh nghiệp chưa c&oacute; quan hệ t&iacute;n dụng tại c&aacute;c TCTD v&agrave; trong thời gian tới doanh nghiệp kh&ocirc;ng ph&aacute;t nhu cầu vay vốn. + C&aacute; nh&acirc;n &ocirc;ng Nguyễn Văn T&yacute; &ndash; Gi&aacute;m đốc doanh nghiệp đang c&oacute; quan hệ t&iacute;n dụng tại NHQĐ HT (MB) số tiền vay 300 triệu đồng, thời hạn 12 th&aacute;ng, l&atilde;i suất 8%/năm. + Hồ sơ, thủ tục được NHQĐ thực hiện nhanh ch&oacute;ng, thuận tiện, kịp thời đ&aacute;p ứng nhu cầu vốn cho kh&aacute;ch h&agrave;ng. - &Yacute; kiến của NHNN tỉnh: Khi c&oacute; nhu cầu vay vốn phục vụ hoạt động sản xuất kinh doanh đề nghị doanh nghiệp x&acirc;y dựng phương &aacute;n cụ thể, khả thi, hiệu quả gửi Ng&acirc;n h&agrave;ng để xem x&eacute;t, thẩm định. Nếu đủ điều kiện vay vốn, NHTM sẽ cho vay đối với doanh nghiệp số tiền ph&ugrave; hợp với nhu cầu vốn thực tế của phương &aacute;n v&agrave; &aacute;p dụng ch&iacute;nh s&aacute;ch ưu đ&atilde;i ph&ugrave; hợp (Nghị định 55/2015/NĐ-CP của Ch&iacute;nh phủ, ch&iacute;nh s&aacute;ch hỗ trợ l&atilde;i suất của UBND tỉnh) theo quy định.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: C&ocirc;ng ty TNHH TM v&agrave; DV Xuy&ecirc;n H&agrave; (Địa chỉ: T&acirc;n Long, Việt Xuy&ecirc;n, Thạch H&agrave;. Lĩnh vực hoạt động ch&iacute;nh: khai th&aacute;c v&agrave; chế biến gỗ) c&oacute; nhu cầu vay vốn 300 triệu đồng v&agrave; kiến nghị được vay vốn ưu đ&atilde;i phục vụ sản xuất kinh doanh.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH TM v&agrave; DV Xuy&ecirc;n H&agrave;</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=35" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH XD B&igrave;nh Tiến<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>th&ocirc;n H&ugrave;ng Dũng, Đức Y&ecirc;n, Đức Thọ</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; Doanh nghiệp: NHĐT&amp;PT HT đ&atilde; l&agrave;m việc trực tiếp với doanh nghiệp. + Doanh nghiệp mới th&agrave;nh lập từ th&aacute;ng 01/2015. Đến thời điểm l&agrave;m việc, doanh nghiệp chưa c&oacute; quan hệ t&iacute;n dụng tại c&aacute;c TCTD. Do mới th&agrave;nh lập, doanh thu thấp, chưa c&oacute; nhiều hợp đồng để thực hiện, doanh nghiệp nghĩ sẽ kh&oacute; khăn trong việc vay vốn ng&acirc;n h&agrave;ng n&ecirc;n đưa ra kiến nghị được tạo điều kiện hỗ trợ vay vốn n&ecirc;u tr&ecirc;n. + Tại buổi l&agrave;m việc, doanh nghiệp đề xuất trong thời gian tới vay 01 tỷ đồng, thời hạn 36 th&aacute;ng để đầu tư x&acirc;y dựng cơ sở vật chất cho doanh nghiệp. Về l&atilde;i suất: nếu thời điểm vay vốn c&oacute; ch&iacute;nh s&aacute;ch ưu đ&atilde;i th&igrave; hỗ trợ doanh nghiệp, nếu kh&ocirc;ng th&igrave; &aacute;p dụng theo quy định của ng&acirc;n h&agrave;ng. T&agrave;i sản đảm bảo dự kiến l&agrave; 01 m&aacute;y ủi, 01 m&aacute;y x&uacute;c của doanh nghiệp v&agrave; t&agrave;i sản của b&ecirc;n thứ ba. Nguồn trả nợ từ lợi nhuận thi c&ocirc;ng c&aacute;c c&ocirc;ng tr&igrave;nh. Tuy nhi&ecirc;n đ&acirc;y mới chỉ l&agrave; dự định của doanh nghiệp m&agrave; chưa x&acirc;y dựng phương &aacute;n vay vốn cụ thể để ng&acirc;n h&agrave;ng thẩm định. Đất của doanh nghiệp chưa được thu&ecirc; d&agrave;i hạn. Khi doanh nghiệp thực sự c&oacute; nhu cầu vay vốn, ng&acirc;n h&agrave;ng sẽ hướng dẫn c&aacute;c hồ sơ thủ tục cần thiết v&agrave; tiến h&agrave;nh thẩm định, đ&aacute;nh gi&aacute;, xem x&eacute;t cấp t&iacute;n dụng nếu đủ điều kiện vay vốn. - &Yacute; kiến của NHNN tỉnh: Khi c&oacute; nhu cầu vay vốn đề nghị doanh nghiệp x&acirc;y dựng phương &aacute;n cụ thể, khả thi, hiệu quả gửi Ng&acirc;n h&agrave;ng để xem x&eacute;t, thẩm định. Nếu đủ điều kiện vay vốn, NHTM sẽ cho vay đối với doanh nghiệp số tiền ph&ugrave; hợp với nhu cầu vốn thực tế của phương &aacute;n.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: C&ocirc;ng ty TNHH XD B&igrave;nh Tiến (Địa chỉ: th&ocirc;n H&ugrave;ng Dũng, Đức Y&ecirc;n, Đức Thọ. Lĩnh vực hoạt động ch&iacute;nh: X&acirc;y dựng cơ bản v&agrave; tư vấn kỹ thuật c&oacute; li&ecirc;n quan) c&oacute; nhu cầu vay vốn 2 tỷ đồng v&agrave; kiến nghị được tạo điều kiện hỗ trợ vay vốn.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH XD B&igrave;nh Tiến</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=36" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH MTV Cao Su H&agrave; Tĩnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Ng&otilde; 192, Trần Ph&uacute;, TP.H&agrave; Tĩnh</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; Doanh nghiệp: + Doanh nghiệp hiện c&oacute; quan hệ t&iacute;n dụng tại NHĐT&amp;PT HT. Doanh nghiệp hiện được NHĐT&amp;PT HT duyệt hạn mức vay vốn l&ecirc;n đến hơn 98 tỷ đồng. Trong đ&oacute;: - Hơn 48 tỷ đồng vay vốn trung d&agrave;i hạn phục vụ trồng mới v&agrave; chăm s&oacute;c c&aacute;c diện t&iacute;ch trồng rừng cao su tr&ecirc;n địa b&agrave;n tỉnh H&agrave; Tĩnh v&agrave; L&agrave;o. Thời hạn vay 7 năm (từ 2012 đến 2019). L&atilde;i suất thả nổi, điều chỉnh 3 th&aacute;ng/lần, hiện tại l&agrave; 10%/năm. - Hạn mức t&iacute;n dụng 50 tỷ bao gồm cả vốn vay v&agrave; bảo l&atilde;nh để bổ sung vốn lưu động phục vụ sản xuất kinh doanh. Thời hạn vay dưới 12 th&aacute;ng. L&atilde;i suất &aacute;p dụng theo l&atilde;i suất cho vay c&aacute;c nh&oacute;m ưu ti&ecirc;n (lĩnh vực n&ocirc;ng nghiệp n&ocirc;ng th&ocirc;n) theo quy định của Thống đốc NHNN VN, hiện nay l&agrave; 7%/năm. - Ngo&agrave;i ra, c&ocirc;ng ty c&ograve;n được hưởng ch&iacute;nh s&aacute;ch hỗ trợ l&atilde;i suất từ nguồn ng&acirc;n s&aacute;ch tỉnh theo văn bản 1226, Quyết định 03/2013/QĐ-UBND, quyết định 07/2014/QĐ-UBND v&agrave; Quyết định 14/2015/QĐ-UBND. Với doanh số cho vay được HTLS l&agrave; 218,65 tỷ đồng (trong đ&oacute; theo VB 1226 l&agrave; 7,32 tỷ đồng v&agrave; theo QĐ 03, 07, 14 l&agrave; 211,33 tỷ đồng), số tiền l&atilde;i được hỗ trợ 3,50 tỷ đồng (trong đ&oacute; theo VB 1226 l&agrave; 148 triệu đồng v&agrave; theo QĐ 03, 07, 14 l&agrave; 3,35 tỷ đồng). + Dư nợ hiện tại của doanh nghiệp tại NHĐT&amp;PT HT l&agrave; 53,14 tỷ đồng, trong đ&oacute; ngắn hạn 23,50 tỷ đồng v&agrave; trung d&agrave;i hạn 29,64 tỷ đồng). Hạn mức c&ograve;n lại của c&ocirc;ng ty được sử dụng l&agrave; kh&aacute; lớn v&agrave; kh&ocirc;ng c&oacute; kh&oacute; khăn, vướng mắc trong việc r&uacute;t vốn vay để phục vụ hoạt động sản xuất kinh doanh. + Hiện nay t&agrave;i sản thế chấp của doanh nghiệp tại NHĐT&amp;PT HT chưa ho&agrave;n thiện về thủ tục thế chấp v&agrave; đăng k&yacute; giao dịch bảo đảm v&igrave; chưa đăng k&yacute; được quyền sở hữu t&agrave;i sản tr&ecirc;n đất. Trong thời gian tới doanh nghiệp đề nghị c&aacute;c Sở ng&agrave;nh li&ecirc;n quan tạo điều kiện cho doanh nghiệp thực hiện đăng k&yacute; quyền sở hữu t&agrave;i sản tr&ecirc;n đất tr&ecirc;n doanh nghiệp phối hợp với ng&acirc;n h&agrave;ng tiến h&agrave;nh c&aacute;c giao dịch bảo đảm t&agrave;i sản hiện đang thế chấp. - &Yacute; kiến của NHNN tỉnh: Doanh nghiệp đ&atilde; được NHĐT&amp;PT HT cấp hạn mức t&iacute;n dụng v&agrave; bảo l&atilde;nh l&ecirc;n đến hơn 98 tỷ đồng phục vụ hoạt động sản xuất kinh doanh. Hiện nay hạn mức c&ograve;n lại kh&aacute; lớn, doanh nghiệp thuận tiện trong việc r&uacute;t vốn vay phục vụ SXKD. Về l&atilde;i suất, doanh nghiệp đ&atilde; được &aacute;p dụng l&atilde;i suất ưu đ&atilde;i đối với c&aacute;c nh&oacute;m đối tượng ưu ti&ecirc;n (cụ thể l&agrave; lĩnh vực n&ocirc;ng nghiệp n&ocirc;ng th&ocirc;n) theo quy định của Thống đốc NHNN VN trong từng thời kỳ v&agrave; được hưởng hỗ trợ l&atilde;i suất của UBND tỉnh, l&atilde;i suất doanh nghiệp phải trả ng&acirc;n h&agrave;ng chỉ c&ograve;n khoảng 3%/năm.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: C&ocirc;ng ty TNHH MTV Cao Su H&agrave; Tĩnh (Địa chỉ: Ng&otilde; 192, Trần Ph&uacute;, TP.H&agrave; Tĩnh. Lĩnh vực hoạt động ch&iacute;nh: Trồng v&agrave; sản xuất kinh doanh cao su) c&oacute; nhu cầu vay vốn 40,84 tỷ đồng để đầu tư cơ sở hạ tầng sản xuất, chế biến mủ cao su v&agrave; bổ sung vốn phục vụ hoạt động sản xuất kinh doanh. Doanh nghiệp kiến nghị được hỗ trợ vay vốn l&atilde;i suất thấp để SXKD</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH MTV Cao Su H&agrave; Tĩnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=37" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP Vật liệu x&acirc;y dựng Hồng Lĩnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>phường Trung Lương, thị x&atilde; Hồng Lĩnh</td>
        <td>
            <p>- Theo bi&ecirc;n bản l&agrave;m việc giữa TCTD v&agrave; Doanh nghiệp: NHĐT&amp;PT HT đ&atilde; trực tiếp l&agrave;m việc với doanh nghiệp. + Doanh nghiệp mới th&agrave;nh lập v&agrave; đang trong giai đoạn ho&agrave;n thiện hồ sơ đầu tư dự &aacute;n sản xuất gạch kh&ocirc;ng nung tại thị x&atilde; Hồng Lĩnh (chưa được giao đất). Tại buổi l&agrave;m việc, doanh nghiệp đề xuất vay 05 tỷ đồng, thời hạn 05 năm, l&atilde;i suất 8,5%/năm để đầu tư x&acirc;y dựng nh&agrave; m&aacute;y sản xuất gạch kh&ocirc;ng nung. Doanh nghiệp đ&atilde; c&oacute; phương &aacute;n sản xuất kinh doanh nhưng chưa gửi bất cứ hồ sơ n&agrave;o đến ng&acirc;n h&agrave;ng để thẩm định. -&Yacute; kiến của NHNN tỉnh: Đề nghị doanh nghiệp ho&agrave;n thiện c&aacute;c hồ sơ, thủ tục, phương &aacute;n sản xuất kinh doanh gửi về ng&acirc;n h&agrave;ng để thẩm định. Nếu đủ điều kiện vay vốn, ng&acirc;n h&agrave;ng sẽ cho vay số tiền ph&ugrave; hợp với nhu cầu vốn thực tế của phương &aacute;n v&agrave; ph&ugrave; hợp c&aacute;c quy định của NHNN VN v&agrave; Hội sở ch&iacute;nh TCTD.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo phiếu khảo s&aacute;t của Sở KHĐT: C&ocirc;ng ty CP VLXD Hồng Lĩnh (Địa chỉ: phường Trung Lương, thị x&atilde; Hồng Lĩnh. Lĩnh vực hoạt động ch&iacute;nh: sản xuất v&agrave; kinh doanh vật liệu x&acirc;y dựng (c&aacute;c loại gạch x&acirc;y tường, gạch l&aacute;t s&acirc;n h&egrave;&hellip;)) c&oacute; nhu cầu vay vốn 03 tỷ đồng để đầu tư x&acirc;y dựng nh&agrave; m&aacute;y sản xuất gạch kh&ocirc;ng nung &ndash; xi măng cốt liệu v&agrave; kiến nghị được c&aacute;c NHTM hỗ trợ.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty CP Vật liệu x&acirc;y dựng Hồng Lĩnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=38" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Hồng Hạnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP. H&agrave; Tĩnh</td>
        <td>
            <p>Căn cứ khoản 5, Điều 5 Th&ocirc;ng tư 219/2013/TT-BTC ng&agrave;y 31/12/2013 của Bộ T&agrave;i ch&iacute;nh Hướng dẫn thi h&agrave;nh Luật thuế gi&aacute; trị gia tăng v&agrave; Nghị định số 209/NĐ-CP ng&agrave;y 18/12/2013 của ch&iacute;nh phủ quy định chi tiết v&agrave; hướng dẫn thi h&agrave;nh một số điều của Luật thuế gi&aacute; trị gia tăng &ldquo; 5. Doanh nghiệp, hợp t&aacute;c x&atilde; nộp thuế GTGT theo phương ph&aacute;p khấu trừ b&aacute;n sản phẩm trồng trọt, chăn nu&ocirc;i, thuỷ sản, hải sản chưa chế biến th&agrave;nh c&aacute;c sản phẩm kh&aacute;c hoặc chỉ qua sơ chế th&ocirc;ng thường cho doanh nghiệp, hợp t&aacute;c x&atilde; ở kh&acirc;u kinh doanh thương mại kh&ocirc;ng phải k&ecirc; khai, t&iacute;nh nộp thuế GTGT. Tr&ecirc;n ho&aacute; đơn GTGT, ghi d&ograve;ng gi&aacute; b&aacute;n l&agrave; gi&aacute; kh&ocirc;ng c&oacute; thuế GTGT, d&ograve;ng thuế suất v&agrave; thuế GTGT kh&ocirc;ng ghi, gạch bỏ. Trường hợp doanh nghiệp, hợp t&aacute;c x&atilde; nộp thuế GTGT theo phương ph&aacute;p khấu trừ b&aacute;n sản phẩm trồng trọt, chăn nu&ocirc;i, thuỷ sản chưa chế biến th&agrave;nh c&aacute;c sản phẩm kh&aacute;c hoặc chỉ qua sơ chế th&ocirc;ng thường cho c&aacute;c đối tượng kh&aacute;c như hộ, c&aacute; nh&acirc;n kinh doanh v&agrave; c&aacute;c tổ chức, c&aacute; nh&acirc;n kh&aacute;c th&igrave; phải k&ecirc; khai, t&iacute;nh nộp thuế GTGT theo mức thuế suất 5% hướng dẫn tại khoản 5 Điều 10 Th&ocirc;ng tư n&agrave;y.&rdquo;&hellip; Căn cứ v&agrave;o c&aacute;c quy định n&ecirc;u tr&ecirc;n trường hợp doanh nghiệp nộp thuế GTGT theo phương ph&aacute;p khấu trừ kinh doanh h&agrave;ng n&ocirc;ng sản l&uacute;a, gạo, lạc chưa qua chế biến hoặc chỉ qua sơ chế (h&igrave;nh thức sơ chế bảo quản theo hướng dẫn tại khoản 1, Điều 4 TT số 219/TT-BTC) khi b&aacute;n sản phẩm n&agrave;y cho doanh nghiệp, HTX ở kh&acirc;u thương mại th&igrave; kh&ocirc;ng phải k&ecirc; khai thuế, t&iacute;nh nộp thuế gi&aacute; trị gia tăng; trường hợp doanh nghiệp b&aacute;n sản phẩm n&agrave;y trực tiếp cho người ti&ecirc;u d&ugrave;ng, cho hộ, c&aacute; nh&acirc;n kinh doanh, cho tổ chức, c&aacute; nh&acirc;n kh&aacute;c th&igrave; k&ecirc; khai nộp thuế GTGT theo mức thuế suất thuế GTGt l&agrave; 5 %.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Dương Hồng Lĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; cục trưởng&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:chicucthue@hatinh.gov.vn">chicucthue@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>C&aacute;ch nh&agrave; nước t&iacute;nh thuế cho doanh nghiệp kinh doanh h&agrave;ng n&ocirc;ng sản: l&uacute;a, gạo, lạc?</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH Hồng Hạnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>27</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=39" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Hồng H&agrave;<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP. H&agrave; Tĩnh</td>
        <td>
            <p>Căn cứ khoản 1, Điều 11 Luật thuế thu nhập doanh nghiệp số 14/2008/ QH12 ng&agrave;y 03/6/2008 quy định về phương ph&aacute;p t&iacute;nh thuế Thu nhập doanh nghiệp quy định: &ldquo;Điều 11. Phương ph&aacute;p t&iacute;nh thuế 1. Số thuế thu nhập doanh nghiệp phải nộp trong kỳ t&iacute;nh thuế được t&iacute;nh bằng thu nhập t&iacute;nh thuế nh&acirc;n với thuế suất; trường hợp doanh nghiệp đ&atilde; nộp thuế thu nhập ở ngo&agrave;i Việt Nam th&igrave; được trừ số thuế thu nhập đ&atilde; nộp nhưng tối đa kh&ocirc;ng qu&aacute; số thuế thu nhập doanh nghiệp phải nộp theo quy định của Luật n&agrave;y. &rdquo; Căn cứ v&agrave;o quy định n&ecirc;u tr&ecirc;n trường hợp doanh nghiệp kinh doanh sau khi quyết to&aacute;n thuế m&agrave; bị lỗ, kh&ocirc;ng c&oacute; thu nhập t&iacute;nh thuế n&ecirc;n doanh nghiệp kh&ocirc;ng phải nộp thuế thu nhập doanh nghiệp do kh&ocirc;ng ph&aacute;t sinh số thuế phải nộp v&agrave; cũng kh&ocirc;ng phải trường hợp được miễn trừ thuế như độc giả hỏi.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Dương Hồng Lĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; cục trưởng&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:chicucthue@hatinh.gov.vn">chicucthue@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Doanh nghiệp kinh doanh thua lỗ được miễn trừ thuế như thế n&agrave;o?</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH Hồng H&agrave;</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>27</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=40" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty M&aacute;y t&iacute;nh Vạn Xu&acirc;n<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP. H&agrave; Tĩnh</td>
        <td>
            <p>Nghị định chậm ban h&agrave;nh c&oacute; l&yacute; do ch&iacute;nh l&agrave; c&aacute;c bộ, ng&agrave;nh v&agrave; cơ quan soạn thảo phải r&agrave; so&aacute;t c&aacute;c ng&agrave;nh nghề cấm, c&aacute;c ng&agrave;nh nghề c&oacute; điều kiện, c&ograve;n lại l&agrave; tự do kinh doanh. Theo Bộ trưởng Bộ Kế hoạch v&agrave; Đầu tư, đ&acirc;y l&agrave; một c&ocirc;ng cuộc r&agrave; so&aacute;t khổng lồ, đ&ograve;i hỏi phải tiến h&agrave;nh rất cẩn thận, nhiều thời gian. Theo chỉ đạo của Ch&iacute;nh phủ, dự kiến Nghị định, Th&ocirc;ng tư sẽ được ban h&agrave;nh trong th&aacute;ng 9 n&agrave;y.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng Đăng k&yacute; kinh doanh &quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Sở Kế hoạch v&agrave; Đầu tư&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sokehoach@hatinh.gov.vn">sokehoach@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>. Luật Doanh nghiệp 2014 c&oacute; hiệu lực từ ng&agrave;y 01/7/2015, cho đến nay c&aacute;c Nghị định hướng dẫn thực hiện Luật Doanh nghiệp trong đ&oacute; c&oacute; Nghị định về đăng k&yacute; doanh nghiệp v&agrave; Th&ocirc;ng tư hướng dẫn đ&atilde; được ban h&agrave;nh hay chưa?</p>
        </td>
        <td><a href="mailto:maytinhvanxuan@gmail.com">maytinhvanxuan@gmail.com</a></td>
        <td>C&ocirc;ng ty M&aacute;y t&iacute;nh Vạn Xu&acirc;n</td>
        <td>DN</td>
        <td>public</td>
        <td>0393899777</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=41" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty m&aacute;y t&iacute;nh Vạn Xu&acirc;n<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP. H&agrave; Tĩnh</td>
        <td>
            <p>Những điểm đ&atilde; r&otilde; trong Luật Doanh nghiệp năm 2014 sẽ được &aacute;p dụng ngay. Ngo&agrave;i ra, những quy định tại c&aacute;c Nghị định v&agrave; Th&ocirc;ng tư hướng dẫn thực hiện Luật DN 2005 nhưng kh&ocirc;ng tr&aacute;i với quy định của Luật mới vẫn c&ograve;n hiệu lực.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng Đăng k&yacute; kinh doanh &quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Sở Kế hoạch v&agrave; Đầu tư&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sokehoach@hatinh.gov.vn">sokehoach@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Trong thời gian chờ Nghị định, Th&ocirc;ng tư được ban h&agrave;nh v&agrave; c&oacute; hiệu lực th&igrave; sẽ &aacute;p dụng theo c&aacute;c quy định n&agrave;o?</p>
        </td>
        <td><a href="mailto:maytinhvanxuan@gmail.com">maytinhvanxuan@gmail.com</a></td>
        <td>C&ocirc;ng ty m&aacute;y t&iacute;nh Vạn Xu&acirc;n</td>
        <td>DN</td>
        <td>public</td>
        <td>0393899777</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=42" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty m&aacute;y t&iacute;nh Lam Hồng<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP. H&agrave; Tĩnh</td>
        <td>
            <p>Kh&ocirc;ng bắt buộc doanh nghiệp phải cấp lại. C&aacute;c Giấy chứng nhận đăng k&yacute; doanh nghiệp (kể cả Giấy chứng nhận đầu tư ki&ecirc;m ĐKKD; Giấy ph&eacute;p đầu tư ki&ecirc;m ĐKKD ....) được cấp theo c&aacute;c Luật cũ sẽ c&ograve;n nguy&ecirc;n gi&aacute; trị. Trường hợp doanh nghiệp thay đổi nội dung ĐKKD hoặc c&oacute; nhu cầu đổi sang Giấy chứng nhận theo Luật mới th&igrave; sẽ cấp mới Giấy chứng nhận ĐKDN theo Luật mới.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng Đăng k&yacute; kinh doanh &quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Sở Kế hoạch v&agrave; Đầu tư&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sokehoach@hatinh.gov.vn">sokehoach@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Thực hiện Luật Doanh nghiệp 2014, c&aacute;c doanh nghiệp c&oacute; phải đổi Giấy chứng nhận đăng k&yacute; doanh nghiệp đ&atilde; cấp theo Luật cũ (2005) để được cấp theo Luật mới?</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty m&aacute;y t&iacute;nh Lam Hồng</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=43" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Th&agrave;nh Đạt<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TX Hồng Lĩnh</td>
        <td>
            <p>Doanh nghiệp vẫn phải ghi ng&agrave;nh nghề kinh doanh trong hồ sơ đăng k&yacute; doanh nghiệp v&agrave; mỗi khi thay đổi, bổ sung vẫn phải gửi th&ocirc;ng b&aacute;o đến cơ quan ĐKKD; nhằm mục đ&iacute;ch để cơ quan quản l&yacute; nh&agrave; nước tổng hợp thống k&ecirc; hệ thống ng&agrave;nh nghề kinh doanh, phục vụ hoạch định cơ chế ch&iacute;nh s&aacute;ch hỗ trợ ph&aacute;t triển doanh nghiệp, ph&aacute;t triển kinh tế - x&atilde; hội. Tuy nhi&ecirc;n kh&ocirc;ng ghi ng&agrave;nh nghề kinh doanh trong giấy chứng nhận đăng k&yacute; doanh nghiệp, thể hiện tinh thần doanh nghiệp được tự do kinh doanh c&aacute;c ng&agrave;nh nghề kh&ocirc;ng cấm của Luật Doanh nghiệp 2014.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng Đăng k&yacute; kinh doanh &quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Sở Kế hoạch v&agrave; Đầu tư&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sokehoach@hatinh.gov.vn">sokehoach@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>C&oacute; đ&uacute;ng l&agrave; từ ng&agrave;y 01/7/2015, khi Luật mới c&oacute; hiệu lực, doanh nghiệp sẽ kh&ocirc;ng phải đăng k&yacute; ng&agrave;nh nghề kinh doanh m&agrave; được tự do kinh doanh tất cả những g&igrave; m&agrave; ph&aacute;p luật kh&ocirc;ng cấm?</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH Th&agrave;nh Đạt</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=44" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNTT Nguy&ecirc;n H&agrave;<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP. H&agrave; Tĩnh</td>
        <td>
            <p>To&agrave;n bộ th&ocirc;ng tin về doanh nghiệp được đưa l&ecirc;n Cổng th&ocirc;ng tin đăng k&yacute; doanh nghiệp quốc gia: dangkykinhdoanh.gov.vn ngay sau khi được cấp Giấy chứng nhận đăng k&yacute; doanh nghiệp, th&ocirc;ng tin tr&ecirc;n cổng th&ocirc;ng tin đăng k&yacute; doanh nghiệp quốc gia c&oacute; gi&aacute; trị như th&ocirc;ng tin của văn bản bằng giấy. Đ&acirc;y l&agrave; một trong những điểm mới, đ&ograve;i hỏi doanh nghiệp, đặc biệt l&agrave; cơ quan quản l&yacute; nh&agrave; nước c&oacute; li&ecirc;n quan đến hoạt động sản xuất kinh doanh của doanh nghiệp phải t&igrave;m hiểu kỹ Luật Doanh nghiệp 2014 để tạo thuận lợi cho doanh nghiệp khi l&agrave;m c&aacute;c thủ tục tiếp theo sau khi đăng k&yacute; doanh nghiệp, kh&ocirc;ng được đặt ra c&aacute;c y&ecirc;u cầu tr&aacute;i với quy định của Luật Doanh nghiệp.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng Đăng k&yacute; kinh doanh &quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Sở Kế hoạch v&agrave; Đầu tư&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sokehoach@hatinh.gov.vn">sokehoach@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Trước kia, muốn biết doanh nghiệp kinh doanh g&igrave; chỉ cần xem Giấy CN ĐKDN, vậy b&acirc;y giờ kh&ocirc;ng ghi trong Giấy chứng nhận nữa th&igrave; xem ở đ&acirc;u?</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNTT Nguy&ecirc;n H&agrave;</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=46" onclick="GoToLink(this);return false;" target="_self">HTX Hải H&agrave;<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>x&atilde; Thạch Kim, huyện Lộc H&agrave;</td>
        <td>
            <p>- NHNN tỉnh trả lời: + Về kiến nghị 1: Theo quy định tại NĐ 67/2014/NĐ-CP ng&agrave;y 07/7/2014 của Ch&iacute;nh phủ về ch&iacute;nh s&aacute;ch ph&aacute;t triển thủy sản (Nghị định 67), th&igrave; chủ t&agrave;u c&oacute; thể được vay c&aacute;c loại v&agrave; h&igrave;nh thức đảm bảo nợ vay cụ thể như sau:  Cho vay đ&oacute;ng mới, n&acirc;ng cấp t&agrave;u khai th&aacute;c, hậu cần nghề c&aacute;: được sử dụng ch&iacute;nh con t&agrave;u đ&oacute;ng mới, n&acirc;ng cấp h&igrave;nh th&agrave;nh từ vốn vay để l&agrave;m t&agrave;i sản bảo đảm. (Về nguy&ecirc;n tắc, kh&ocirc;ng cấm sử dụng c&aacute;c t&agrave;i sản kh&aacute;c kể cả t&agrave;u 90CV l&agrave;m t&agrave;i sản thế chấp, nhưng phải c&oacute; tổng gi&aacute; trị t&agrave;i sản c&oacute; t&iacute;nh thanh khoản cao phải lớn hơn gi&aacute; trị t&agrave;u đ&oacute;ng mới. Khi gi&aacute; trị con t&agrave;u đ&oacute;ng mới lớn, chủ t&agrave;u kh&oacute; c&oacute; đủ gi&aacute; trị c&aacute;c t&agrave;i sản kh&aacute;c để thế chấp to&agrave;n bộ, chỉ sử dụng t&agrave;i sản kh&aacute;c để thế chấp một phần th&igrave; kh&ocirc;ng được ph&eacute;p. Để tạo điều kiện cho c&aacute;c chủ t&agrave;u vay vốn, Ch&iacute;nh phủ đ&atilde; quy định được d&ugrave;ng ch&iacute;nh con t&agrave;u đ&oacute; l&agrave;m thế chấp, đ&acirc;y l&agrave; một ch&iacute;nh s&aacute;ch c&oacute; t&iacute;nh ưu đ&atilde;i. Do đ&oacute;, Chủ t&agrave;u kh&ocirc;ng cần thiết phải đặt vấn đề sử dụng t&agrave;u 90CV l&agrave;m thế chấp).  Cho vay vốn lưu động để phục vụ khai th&aacute;c, dịch vụ hậu cần: Chủ t&agrave;u được d&ugrave;ng t&agrave;u 90CV l&agrave;m t&agrave;i sản đảm bảo nếu c&aacute;c TCTD thẩm định đủ điều kiện (về gi&aacute; trị, về thời hạn sử dụng v&agrave; c&aacute;c thủ tục kh&aacute;c của t&agrave;u,...).  Cho vay bổ sung vốn đối ứng (hiện nay BIDV đang triển khai): Chủ t&agrave;u được d&ugrave;ng t&agrave;u 90CV l&agrave;m t&agrave;i sản đảm bảo nếu c&aacute;c TCTD thẩm định đủ điều kiện (về gi&aacute; trị, về thời hạn sử dụng v&agrave; c&aacute;c thủ tục kh&aacute;c của t&agrave;u,...).</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Kiến nghị 1: Được d&ugrave;ng t&agrave;u 90CV l&agrave;m thế chấp vay vốn theo Nghị định 67.</p>
        </td>
        <td>&nbsp;</td>
        <td>HTX Hải H&agrave;</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=47" onclick="GoToLink(this);return false;" target="_self">HTX Hải H&agrave;<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>x&atilde; Thạch Kim, huyện Lộc H&agrave;</td>
        <td>
            <p>- NHNN tỉnh trả lời: + Về kiến nghị 2: Xem x&eacute;t thủ tục hỗ trợ l&atilde;i suất vay vốn h&agrave;ng th&aacute;ng hiện nay của x&atilde;. Hỗ trợ l&atilde;i suất chậm (3-4 th&aacute;ng mới nhận được), thủ tục hỗ trợ rườm r&agrave;.  Đề nghị xem x&eacute;t, hỗ trợ l&atilde;i suất cho c&aacute; nh&acirc;n (hay cho HTX ?): Theo b&aacute;o c&aacute;o của NH N&ocirc;ng nghiệp &amp; Ph&aacute;t triển n&ocirc;ng th&ocirc;n, hiện nay HTX Hải H&agrave; đang c&oacute; dư nợ 500 triệu đồng tại NH N&ocirc;ng nghiệp huyện Lộc H&agrave;, mục đ&iacute;ch vay vốn l&agrave; dịch vụ sửa chữa t&agrave;u, do kh&ocirc;ng thuộc đối tượng theo QĐ 23/2014/QĐ-UBND n&ecirc;n khi vay vốn kh&ocirc;ng được Ban QL XDNTM x&atilde; Thạch Kim x&aacute;c nhận thuộc đối tượng hỗ trợ l&atilde;i suất. V&igrave; vậy số tiền vay n&agrave;y kh&ocirc;ng được hỗ trợ l&atilde;i suất theo Quyết định 23/2014/QĐ-UBND.  Tại địa phương, việc thực hiện hỗ trợ l&atilde;i suất theo QĐ 23/2014/QĐ-UBND chậm, 3-4 th&aacute;ng mới nhận được: Theo quy định hiện nay, trước ng&agrave;y 05 th&aacute;ng sau, c&aacute;c Ng&acirc;n h&agrave;ng chuyển Danh s&aacute;ch cho BQL XDNTM x&atilde;. Chậm nhất 10 ng&agrave;y kể từ khi nhận được danh s&aacute;ch do ng&acirc;n h&agrave;ng gửi, BQLXDNTM x&atilde; phải kiểm tra, nhận tiền v&agrave; chi trả hết cho kh&aacute;ch h&agrave;ng. (theo đ&oacute; thời gian tối đa từ 15-20 ng&agrave;y th&aacute;ng sau l&agrave; kh&aacute;ch h&agrave;ng nhận được tiền hỗ trợ). Qua b&aacute;o c&aacute;o của c&aacute;c Ng&acirc;n h&agrave;ng, h&agrave;ng th&aacute;ng c&aacute;c Ng&acirc;n h&agrave;ng cho vay đều gửi danh s&aacute;ch kịp thời cho BQLXDNTM x&atilde;. Sở dĩ kh&aacute;ch h&agrave;ng chậm nhận được l&atilde;i hỗ trợ l&agrave; do BQLXDNTM x&atilde; thực hiện chi trả chậm (chậm ở 2 c&ocirc;ng đoạn: chậm tập hợp hồ sơ để nhận tiền ng&acirc;n s&aacute;ch về chi trả; chậm do nhận tiền về nhưng kh&ocirc;ng trả ngay cho kh&aacute;ch h&agrave;ng). NHNN tỉnh sẽ tiếp tục chỉ đạo c&aacute;c Ng&acirc;n h&agrave;ng cho vay chấp h&agrave;nh nghi&ecirc;m t&uacute;c việc chuyển danh s&aacute;ch kịp thời về cho BQLXDNTM x&atilde;. Đề nghị Sở NN&amp;PTNT tham mưu cho BCĐ XDNTM tỉnh chỉ đạo BCĐ XDNTM c&aacute;c huyện v&agrave; c&aacute;c BQLXDNTM x&atilde; thực hiện nghi&ecirc;m t&uacute;c quy định của tỉnh. Đề nghị kh&aacute;ch h&agrave;ng trực tiếp đến BQLXDNTM x&atilde; để y&ecirc;u cầu nhận tiền l&atilde;i kịp thời theo quy định.  Phản &aacute;nh về thủ tục hỗ trợ l&atilde;i suất rườm r&agrave;: Cần ph&acirc;n biệt r&otilde;: Thủ tục cho vay v&agrave; Thủ tục hỗ trợ l&atilde;i suất: - Về Hồ sơ, thủ tục cho vay l&agrave; theo quy chế cho vay của TCTD như c&aacute;c m&oacute;n cho vay kh&aacute;c; Ri&ecirc;ng m&oacute;n vay hỗ trợ l&atilde;i suất chỉ th&ecirc;m 1 Giấy đề nghị hỗ trợ l&atilde;i suất để BQL XDNTM x&atilde; x&aacute;c nhận (chỉ nộp khi vay vốn lần đầu). Mặc d&ugrave; c&aacute;c hồ sơ, thủ tục trong cho vay do TCTD cấp tr&ecirc;n quy định, c&ograve;n kh&aacute; phức tạp nhưng c&aacute;c TCTD đ&atilde; cố gắng từng bước đơn giản h&oacute;a c&aacute;c hồ sơ c&oacute; thể để tạo thuận lợi cho kh&aacute;ch h&agrave;ng. NHNN tỉnh sẽ tiếp tục chỉ đạo để c&aacute;c TCTD tiếp tục thực hiện. - Về hồ sơ, thủ tục hỗ trợ l&atilde;i suất: Theo quy định hiện nay th&igrave; việc hỗ trợ l&atilde;i suất theo tuần tự sau: (1) Khi Ng&acirc;n h&agrave;ng thu l&atilde;i của kh&aacute;ch h&agrave;ng, cấp cho kh&aacute;ch h&agrave;ng một Giấy x&aacute;c nhận l&atilde;i phải hỗ trợ. (Do Ng&acirc;n h&agrave;ng thực hiện). (2) Đầu th&aacute;ng sau, ng&acirc;n h&agrave;ng lập danh s&aacute;ch c&aacute;c kh&aacute;ch h&agrave;ng theo từng x&atilde; gửi BQLXDNTM x&atilde;. (Do Ng&acirc;n h&agrave;ng thực hiện). (3) BQLXDNTM x&atilde; kiểm tra, nhận tiền từ ng&acirc;n s&aacute;ch về x&atilde;. (Do BQLXDNTM x&atilde; thực hiện theo hướng dẫn của Sở NN&amp;PTNT theo quy định tại điểm b, khoản 4, Điều 8, QĐ 23). (4) Kh&aacute;ch h&agrave;ng mang Giấy x&aacute;c nhận đến BQLXDNTM x&atilde; nhận tiền. (Do BQL XDNTM x&atilde; thực hiện). Như vậy l&agrave;: Đối với kh&aacute;ch h&agrave;ng: chỉ nhận 01 Giấy x&aacute;c nhận từ ng&acirc;n h&agrave;ng, khi x&atilde; c&oacute; tiền mang Giấy đ&oacute; đến x&atilde; để nhận tiền (Thủ tục hỗ trợ ở kh&acirc;u n&agrave;y hết sức đơn giản). Đối với BQLXDNTM x&atilde;: Hồ sơ, thủ tục để BQLXDNTM x&atilde; kiểm tra trước khi chi trả (theo quy định quản l&yacute; ng&acirc;n s&aacute;ch); hồ sơ, thủ tục nhận tiền từ ng&acirc;n s&aacute;ch (theo quy định quản l&yacute; ng&acirc;n s&aacute;ch); Hồ sơ, thủ tục chi trả tiền cho kh&aacute;ch h&agrave;ng. (Hồ sơ, thủ tục n&agrave;y do c&aacute;c ng&agrave;nh: Sở NN&amp;PTNT, Sở T&agrave;i ch&iacute;nh hướng dẫn thực hiện theo điểm b, c&aacute;c khoản 4, 6, Điều 8, QĐ 23). T&oacute;m lại: Về thủ tục hỗ trợ l&atilde;i suất li&ecirc;n quan đến thẩm quyền của ng&acirc;n h&agrave;ng đơn giản, kh&ocirc;ng rườm r&agrave;; Đề nghị Sở NN&amp;PTNT, Sở T&agrave;i ch&iacute;nh so&aacute;t x&eacute;t lại quy định về ph&acirc;n bổ, quản l&yacute;, sử dụng v&agrave; thanh quyết to&aacute;n nguồn vốn hỗ trợ l&atilde;i suất để so&aacute;t x&eacute;t lại hồ sơ, thủ tục trong giai đoạn n&agrave;y để trả lời kh&aacute;ch h&agrave;ng v&agrave; đơn giản h&oacute;a nếu c&ograve;n rườm r&agrave;.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Kiến nghị 2: Xem x&eacute;t thủ tục hỗ trợ l&atilde;i suất vay vốn h&agrave;ng th&aacute;ng hiện nay của x&atilde;. Hiện nay, thực tế 3-4 th&aacute;ng mới được nhận, thủ tục kh&aacute; rườm r&agrave;?</p>
        </td>
        <td>&nbsp;</td>
        <td>HTX Hải H&agrave;</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=48" onclick="GoToLink(this);return false;" target="_self">HTX TTCN v&agrave; DVTM Cẩm Th&agrave;nh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Cẩm Th&agrave;nh, Cẩm Xuy&ecirc;n</td>
        <td>
            <p>- Trả lời của NHNN tỉnh: Kể cả &yacute; kiến lần n&agrave;y, HTX đ&atilde; 3 lần c&oacute; &yacute; kiến về đề nghị vay vốn: + Th&aacute;ng 6/2015, theo y&ecirc;u cầu tại C&ocirc;ng văn số 253/BC-UBND ng&agrave;y 16/6/2015, trong b&aacute;o c&aacute;o gửi UBND tỉnh, HTX đề nghị vay 3.000 triệu. Ng&agrave;y 24/8/2015 NHNo huyện Cẩm Xuy&ecirc;n đ&atilde; trực tiếp l&agrave;m việc với HTX (c&oacute; Bi&ecirc;n bản thống nhất nội dung l&agrave;m việc giữa 2 b&ecirc;n), tại thời điểm l&agrave;m việc HTX chưa c&oacute; phương &aacute;n vay vốn (mới chỉ l&agrave; dự định). Hai b&ecirc;n đ&atilde; thống nhất HTX sẽ x&acirc;y dựng phuơng &aacute;n để c&ugrave;ng NH xem x&eacute;t, thẩm định. + Tại cuộc tọa đ&agrave;m &ldquo;Ng&acirc;n h&agrave;ng - Doanh nghiệp c&ugrave;ng gỡ kh&oacute; t&iacute;n dụng&rdquo; do NHNN tỉnh chủ tr&igrave; tại UBND tỉnh ng&agrave;y 29/9/2015, đại diện HTX đ&atilde; c&oacute; &yacute; kiến đề nghị vay 3 tỷ, nếu kh&ocirc;ng được th&igrave; cho vay 1,5 tỷ để mua m&aacute;y phục vụ SX (HTX chưa c&oacute; phương &aacute;n vay vốn). Chủ tr&igrave; hội nghị đ&atilde; trả lời đề nghị HTX x&acirc;y dựng phương &aacute;n vay vốn v&agrave; tiếp cận NHNo Cẩm xuy&ecirc;n hoặc c&aacute;c NHTM kh&aacute;c để y&ecirc;u cầu được thẩm định, giải quyết. (Nếu chỉ đề nghị chung chung m&agrave; kh&ocirc;ng c&oacute; phương &aacute;n, kh&ocirc;ng l&agrave;m việc với NHTM th&igrave; chưa c&oacute; cơ sở để trả lời). + Về &yacute; kiến lần n&agrave;y (CV 2059/SNN) của HTX: Do kh&ocirc;ng c&oacute; c&aacute;c th&ocirc;ng tin cụ thể về quy m&ocirc; hoạt động sản xu&acirc;t kinh doanh (để so s&aacute;nh với mức cho vay 500 triệu), nhu cầu vốn của phương &aacute;n SXKD, mức độ đ&aacute;p ứng c&aacute;c điều kiện vay vốn, v&igrave; vậy kh&ocirc;ng r&otilde; vướng mắc ở đ&acirc;u, việc chỉ được vay 500 triệu l&agrave; do nguy&ecirc;n nh&acirc;n từ ph&iacute;a ng&acirc;n h&agrave;ng hay từ ph&iacute;a HTX; Việc HTX đ&atilde; được UBND tỉnh cấp đất v&agrave; HTX đ&atilde; đề nghị thế chấp chưa, hay đ&atilde; đề nghị m&agrave; ng&acirc;n h&agrave;ng trả lời kh&ocirc;ng được thế chấp? nguy&ecirc;n nh&acirc;n v&igrave; sao NH kh&ocirc;ng nhận thế chấp ? Đề nghị HTX l&agrave;m việc với c&aacute;c NHTM (NHNo v&agrave; c&aacute;c NHTM c&oacute; Ph&ograve;ng Giao dịch ở Cẩm Xuy&ecirc;n) để đề nghị mức vay vốn ph&ugrave; hợp với quy m&ocirc; hoạt động sản xuất kinh doanh, theo phương &aacute;n vay cụ thể (c&ograve;n bằng hoặc lớn hơn 500 triệu phụ thuộc v&agrave;o phương &aacute;n), nếu quyền sử dụng đất thuộc diện được thế chấp hợp ph&aacute;p th&igrave; c&aacute;c TCTD sẽ xem x&eacute;t v&agrave; thống nhất với HTX (trường hợp đất trả tiền h&agrave;ng năm th&igrave; kh&ocirc;ng đủ điều kiện để thế chấp). Sau khi l&agrave;m việc với c&aacute;c NHTM, nếu c&oacute; kh&oacute; khăn, c&oacute; vướng mắc cụ thể đề nghị HTX phản &aacute;nh cụ thể với NHNN tỉnh để chỉ đạo kiểm tra v&agrave; giải quyết.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Theo CV 2059/SNN, HTX phản &aacute;nh hạn mức NH cho vay mấy năm li&ecirc;n tục kh&ocirc;ng qu&aacute; 500 triệu đồng, n&ecirc;n phải huy động th&ecirc;m từ c&aacute;c th&agrave;nh vi&ecirc;n. HTX đ&atilde; được UBND tỉnh cấp đất, đề nghị NH xem x&eacute;t, tạo điều kiện cho HTX được d&ugrave;ng đất để l&agrave;m t&agrave;i sản thế chấp vay vốn.</p>
        </td>
        <td>&nbsp;</td>
        <td>HTX TTCN v&agrave; DVTM Cẩm Th&agrave;nh</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=49" onclick="GoToLink(this);return false;" target="_self">HTX Chăn nu&ocirc;i v&agrave; DVTH B&igrave;nh An<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Kỳ Bắc, Kỳ Anh</td>
        <td>
            <p>- &Yacute; kiến tra lời của NH Nh&agrave; nước tỉnh: UBND tỉnh giao cho NHNN tỉnh chủ tr&igrave;, phối hợp với c&aacute;c ng&agrave;nh li&ecirc;n quan tổ chức tọa đ&agrave;m &ldquo;Ng&acirc;n h&agrave;ng - Doanh nghiệp c&ugrave;ng gỡ kh&oacute; t&iacute;n dụng&rdquo; v&agrave;o ng&agrave;y 29/9/2015. Mục ti&ecirc;u tọa đ&agrave;m, đối thoại l&agrave; để giải quyết c&aacute;c kh&oacute; khăn, vướng mắc cụ thể trong vay vốn ng&acirc;n h&agrave;ng (đ&atilde; c&oacute; phương &aacute;n, đ&atilde; đến vay vốn ng&acirc;n h&agrave;ng nhưng c&ograve;n vướng mắc, ...). Do số lượng mời c&aacute;c DN, HTX c&oacute; hạn (ri&ecirc;ng HTX chỉ mời được 43 HTX), n&ecirc;n sau khi thống nhất với LMHTX, NHNN tỉnh chọn danh s&aacute;ch 43 HTX c&oacute; phản &aacute;nh c&aacute;c th&ocirc;ng tin cụ thể về vướng mắc trong vay vốn dự tọa đ&agrave;m. V&igrave; vậy, trong danh s&aacute;ch mời chưa c&oacute; HTX Chăn nu&ocirc;i v&agrave; DVTH B&igrave;nh An. NHNN tỉnh sẽ tiếp thu &yacute; kiến của HTX, nhằm phục vụ việc tổ chức c&aacute;c cuộc đối thoại trong thời gian tới. Đề nghị HTX khi phản &aacute;nh về c&aacute;c Sở ng&agrave;nh ngo&agrave;i đề nghị cho vay vốn cần cụ thể th&ecirc;m c&aacute;c th&ocirc;ng tin về phương &aacute;n vay vốn, về mức độ đ&aacute;p ứng c&aacute;c điều kiện, về những vướng mắc cụ thể,...để c&oacute; cơ sở kiểm tra, trả lời. Đối với HTX B&igrave;nh An: tại CV 1869/SNN-KHTC ng&agrave;y 17/9/2015 của Sở NN&amp;PTNT c&oacute; chuyển &yacute; kiến của HTX &ldquo;phản &aacute;nh nguồn vốn c&ograve;n thiếu, chưa khai th&aacute;c được nguồn vốn ưu đ&atilde;i cho 500 HTX kiểu mới v&agrave; đề nghị c&aacute;c TCTD cho vay th&ecirc;m để x&acirc;y dựng chuồng trại, đầu tư SX&rdquo;. NHNN tỉnh đ&atilde; c&oacute; văn bản số 659/NHNN-HTI4 ng&agrave;y 23/9/2015 gửi Sở NN&amp;PTNT để trả lời cho HTX v&agrave; đ&atilde; đăng tải tr&ecirc;n chuy&ecirc;n mục &ldquo;DN hỏi &ndash; cơ quan nh&agrave; nước trả lời&rdquo; v&agrave; tr&ecirc;n Trang Th&ocirc;ng tin điện tử của NHNN tỉnh.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Theo CV 2059/SNN, HTX phản &aacute;nh ng&agrave;y 29/9/2015 tỉnh chỉ đạo một cuộc họp th&aacute;o gỡ kh&oacute; khăn cho c&aacute;c HTX về tạo điều kiện vay vốn. Nhưng v&igrave; sao t&ocirc;i l&agrave; 1 HTX chăn nu&ocirc;i lợn n&aacute;i của tỉnh đề ra, m&agrave; sao kh&ocirc;ng được tỉnh cho ch&uacute;ng t&ocirc;i tham gia cuộc họp?</p>
        </td>
        <td>&nbsp;</td>
        <td>HTX Chăn nu&ocirc;i v&agrave; DVTH B&igrave;nh An</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=50" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty L&yacute; Thanh Sắc<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP. H&agrave; Tĩnh.</td>
        <td>
            <p>- &Yacute; kiến của NH Nh&agrave; nước tỉnh: Do C&ocirc;ng ty kh&ocirc;ng phản &aacute;nh cụ thể n&ecirc;n kh&ocirc;ng c&oacute; cơ sở để chỉ đạo c&aacute;c TCTD kiểm tra, trả lời C&ocirc;ng ty. Tuy kh&ocirc;ng c&oacute; c&aacute;c th&ocirc;ng tin cụ thể, nhưng NHNN tỉnh đ&atilde; chỉ đạo nắm th&ocirc;ng tin c&oacute; li&ecirc;n quan đến vấn đề vay vốn của C&ocirc;ng ty, th&igrave; c&oacute; kết quả như sau: Theo b&aacute;o c&aacute;o số 789/HTI-KHKD ng&agrave;y 21/10/2015 của NH Ngoại thương H&agrave; Tĩnh: Đến thời điểm 21/10/2015 dư nợ gốc của C&ocirc;ng ty tại VCB H&agrave; Tĩnh l&agrave; 22.132 triệu đồng v&agrave; nợ l&atilde;i l&agrave; 4.028 triệu đồng, to&agrave;n bộ dư nợ của C&ocirc;ng ty l&agrave; nợ xấu nh&oacute;m 5 (nợ kh&oacute; đ&ograve;i). Từ năm 2012 đến nay, VCB H&agrave; Tĩnh kh&ocirc;ng cấp t&iacute;n dụng cho C&ocirc;ng ty, m&agrave; chỉ tập trung xử l&yacute; t&agrave;i sản để thu hồi nợ. Nếu theo thực tế n&agrave;y th&igrave; việc tiếp cận vay vốn kh&oacute; khăn của C&ocirc;ng ty c&oacute; thể kh&ocirc;ng chỉ l&agrave; do thủ tục, m&agrave; C&ocirc;ng ty cần phản &aacute;nh cụ thể th&ecirc;m về c&aacute;c th&ocirc;ng tin kh&aacute;c, như ngo&agrave;i VCB H&agrave; Tĩnh, C&ocirc;ng ty đ&atilde; l&agrave;m việc với TCTD n&agrave;o, về hiệu quả của phương &aacute;n vay vốn, về khả năng trả nợ,... để c&aacute;c TCTD c&ugrave;ng C&ocirc;ng ty đ&aacute;nh gi&aacute;, c&oacute; phương &aacute;n vừa xử l&yacute; được khoản nợ xấu lớn của C&ocirc;ng ty, vừa tạo điều kiện cho C&ocirc;ng ty tiếp cận vay vốn nếu phương &aacute;n vay khả thi v&agrave; c&oacute; hiệu quả. Về thủ tục vay vốn: c&aacute;c TCTD tại địa b&agrave;n thực hiện theo quy chế cho vay do TCTD cấp tr&ecirc;n quy định. Hiện nay, hồ sơ, thủ tục cho vay quy định rất chặt chẽ; C&oacute; một thực tế l&agrave; mặc d&ugrave; đ&atilde; từng bước được cải tiến theo hướng đơn giản h&oacute;a nhưng c&aacute;c hồ sơ về ph&aacute;p l&yacute;, về kinh tế vẫn kh&ocirc;ng được TCTD cấp tr&ecirc;n pho ph&eacute;p giảm bớt, n&ecirc;n nh&igrave;n chung vẫn c&ograve;n c&oacute; phần rườm r&agrave;. Nếu c&aacute;c TCTD y&ecirc;u cầu c&aacute;c hồ sơ, thủ tục ngo&agrave;i quy định th&igrave; đề nghi C&ocirc;ng ty phản &aacute;nh về NHNN tỉnh cụ thể để kiểm tra, xử l&yacute;. Đối với c&aacute;c hồ sơ, thủ tục theo quy định, nếu c&aacute;c điều kiện kh&aacute;c đ&aacute;p ứng tốt (hiệu quả của phương &aacute;n, khả năng trả nợ,...) th&igrave; đề nghị C&ocirc;ng ty c&ugrave;ng c&aacute;c TCTD b&agrave;n bạc để c&oacute; giải ph&aacute;p xử l&yacute; theo hướng tạo điều kiện cho DN.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Theo CV 2059/SNN, DN phản &aacute;nh tiếp cận vay vốn kh&oacute; khăn do thủ tục rườm r&agrave;.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty L&yacute; Thanh Sắc</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=51" onclick="GoToLink(this);return false;" target="_self">Kiến nghị chung về trả lời DN, HTX<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Qua văn bản chuyển &yacute; kiến của c&aacute;c DN, HTX (văn bản của Sở NN&amp;PTNT, của LMHTX) về vấn đề vay vốn ng&acirc;n h&agrave;ng, đại bộ phận c&aacute;c &yacute; kiến đều kh&ocirc;ng c&oacute; th&ocirc;ng tin phản &aacute;nh vướng mắc, kh&ocirc;ng c&oacute; th&ocirc;ng tin về việc đ&atilde; đến NH l&agrave;m việc chưa, đ&atilde; c&oacute; phương &aacute;n vay vốn chưa; nguy&ecirc;n nh&acirc;n của việc chưa vay được vốn, ... Đại bộ phận c&aacute;c c&acirc;u hỏi, kiến nghị, đề xuất của HTX, DN chỉ n&ecirc;u chung 1 c&acirc;u: v&iacute; dụ: thiếu vốn, kh&oacute; khăn trong tiếp cận vốn, hoặc đề nghị Ng&acirc;n h&agrave;ng cho vay vốn để SXKD, m&agrave; kh&ocirc;ng c&oacute; c&aacute;c th&ocirc;ng tin kh&aacute;c li&ecirc;n quan đến việc vay vốn ng&acirc;n h&agrave;ng. (Rất &iacute;t c&aacute;c đơn vị c&oacute; th&ocirc;ng tin cụ thể). Một số HTX c&oacute; c&acirc;u hỏi c&ugrave;ng nội dung đ&atilde; được trả lời trực tiếp tại đối thoại hoặc bằng văn bản nhưng vẫn tiếp tục hỏi (hỏi chung chung) v&agrave; c&aacute;c ng&agrave;nh vẫn tiếp tục chuyển đến để c&aacute;c cơ quan trả lời,... Thực trạng n&agrave;y vừa kh&ocirc;ng giải quyết được vấn đề, hiệu quả giải quyết kh&ocirc;ng cao v&agrave; tạo &aacute;p lực c&ocirc;ng việc cho c&aacute;c cơ quan trả lời. NHNN tỉnh kiến nghị: - Để nghị c&aacute;c Sở, ng&agrave;nh, Hiệp hội DN, Li&ecirc;n minh HTX ... khi tiếp nhận c&aacute;c th&ocirc;ng tin vướng mắc, c&aacute;c đề xuất cụ thể li&ecirc;n quan đến vay vốn ng&acirc;n h&agrave;ng, cần hướng dẫn, y&ecirc;u cầu c&aacute;c HTX, DN cụ thể th&ecirc;m về th&ocirc;ng tin c&oacute; li&ecirc;n quan để c&oacute; cơ sở chỉ đạo việc kiểm tra, xử l&yacute; v&agrave; trả lời. C&aacute;c &yacute; kiến chỉ n&ecirc;u chung chung, kh&ocirc;ng c&oacute; th&ocirc;ng tin cụ thể về vướng mắc, về đề xuất cụ thể th&igrave; y&ecirc;u cầu c&aacute;c HTX, DN bổ sung trước khi chuyển tải cho c&aacute;c ng&agrave;nh trả lời. Khi y&ecirc;u cầu c&aacute;c DN, HTX cung cấp th&ocirc;ng tin &iacute;t nhất phải c&oacute; c&aacute;c nội dung phản ảnh: c&oacute; nhu cầu vay vốn nhưng đ&atilde; đến NH n&agrave;o chưa? đ&atilde; c&oacute; phương &aacute;n vay vốn chưa? nếu đ&atilde; đến ng&acirc;n h&agrave;ng nhưng chưa vay được vốn th&igrave; nguy&ecirc;n nh&acirc;n do đ&acirc;u ...Vướng mắc cụ thể ?... - Đối với c&aacute;c &yacute; kiến chung chung, kh&ocirc;ng c&oacute; th&ocirc;ng tin cụ thể, kh&ocirc;ng n&ecirc;u vướng mắc,... (về tất cả c&aacute;c lĩnh vực) th&igrave; đề nghị c&aacute;c ng&agrave;nh kh&ocirc;ng chuyển đến c&aacute;c cơ quan trả lời ngay, m&agrave; đề nghị c&aacute;c DN, HTX bổ sung cụ thể. (Đối với c&aacute;c &yacute; kiến đ&atilde; được trả lời, kh&ocirc;ng c&oacute; nội dung mới nếu chuyển đến NHNN tỉnh th&igrave; NHNN tỉnh sẽ trả lời ngắn gọn l&agrave;: đề nghị c&aacute;c HTX, DN tiếp cận c&aacute;c NHTM để y&ecirc;u cầu được xem x&eacute;t việc vay vốn, sau khi l&agrave;m việc với c&aacute;c NHTM nếu c&oacute; vướng mắc cụ thể th&igrave; phản ảnh về NHNN tỉnh để chỉ đạo kiểm tra, giải quyết).</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Huy Tiến&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:nganhangnhanuoc@hatinh.gov.vn">nganhangnhanuoc@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Kiến nghị chung về trả lời DN, HTX về việc phối hợp giải đ&aacute;p, trả lời nội dung &yacute; kiến của DN, HTX hỏi tại buổi tọa đ&agrave;m ng&agrave;y 09/10/2015</p>
        </td>
        <td>&nbsp;</td>
        <td>Kiến nghị chung về trả lời DN, HTX</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=52" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty Cổ phần Quốc Thịnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời c&acirc;u hỏi của bạn đọc, Bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến trao đổi như sau: Việc thực hiện thuế gi&aacute; trị gia tăng đề nghị bạn đọc tham khảo thực hiện theo quy định tại Th&ocirc;ng tư số 219/2013/TT-BTC ng&agrave;y 31/12/2013 của Bộ T&agrave;i ch&iacute;nh &ldquo;Hướng dẫn thi h&agrave;nh Luật Thuế gi&aacute; trị gia tăng v&agrave; Nghị định số 209/2013/NĐ-CP ng&agrave;y 18/12/2013 của Ch&iacute;nh phủ quy định chi tiết v&agrave; hướng dẫn thi h&agrave;nh một số điều Luật Thuế gi&aacute; trị gia tăng&rdquo; v&agrave; c&aacute;c văn bản sửa đổi, bổ sung. Cụ thể tại Điều 15 quy định Điều kiện khấu trừ thuế gi&aacute; trị gia tăng đầu v&agrave;o; Điều 16 quy định Điều kiện khấu trừ, ho&agrave;n thuế đầu v&agrave;o của h&agrave;ng h&oacute;a, dịch vụ xuất khẩu... Do kh&ocirc;ng c&oacute; đủ th&ocirc;ng tin ch&uacute;ng t&ocirc;i kh&ocirc;ng c&oacute; cơ sở để trả lời bạn đọc cụ thể. Đề nghị bạn đọc tham khảo thực hiện. Nếu c&ograve;n chưa r&otilde; bạn đọc li&ecirc;n hệ trực tiếp với Chi cục hải quan nơi l&agrave;m thủ tục để được giải đ&aacute;p cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản đ&atilde; n&ecirc;u ở mục VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết./. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Khấu trừ thuế GTGT - C&ocirc;ng ty ch&uacute;ng t&ocirc;i mua than cốc từ 1 c&ocirc;ng ty A ( H&agrave;ng của c&ocirc;ng ty A được nhập khẩu từ Trung Quốc). Hiện tại ch&uacute;ng t&ocirc;i tiến h&agrave;nh xuất khẩu mặt h&agrave;ng than cốc n&agrave;y sang l&agrave;o cho C&ocirc;ng ty B. Vậy xin hỏi thuế GTGT khi c&ocirc;ng ty A xuất h&oacute;a đơn cho ch&uacute;ng t&ocirc;i ch&uacute;ng t&ocirc;i c&oacute; được k&ecirc; khai khấu trừ thuế kh&ocirc;ng?</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty Cổ phần Quốc Thịnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=53" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP ESC Việt Nam<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Vướng mắc của doanh nghiệp, Bộ phận tư vấn Ban Bi&ecirc;n tập Cổng Th&ocirc;ng tin điện tử Hải quan c&oacute; &yacute; kiến trao đổi như sau: Về Nh&atilde;n h&agrave;ng h&oacute;a được quy định cụ thể tại Nghị định số 89/2006/NĐ-CP ng&agrave;y 30 th&aacute;ng 8 năm 2006 của Ch&iacute;nh phủ. - Theo đ&oacute;, tại Khoản 1 Điều 5 Nghị định số 89/2006/NĐ-CP n&ecirc;u tr&ecirc;n quy định: &ldquo;1. H&agrave;ng ho&aacute; lưu th&ocirc;ng trong nước, h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu phải ghi nh&atilde;n theo quy định của Nghị định n&agrave;y, trừ những trường hợp quy định tại c&aacute;c khoản 2, 3 v&agrave; 4 Điều n&agrave;y.&rdquo; - Vị tr&iacute;, k&iacute;ch thước, m&agrave;u sắc, ng&ocirc;n ngữ tem nh&atilde;n quy định cụ thể tại Điều 6, Điều 7, Điều 8, Điều 9 v&agrave; Điều 10 Nghị định số 89/2006/NĐ-CP n&ecirc;u tr&ecirc;n. - Nội dung v&agrave; c&aacute;ch ghi nh&atilde;n h&agrave;ng h&oacute;a được quy định cụ thể tại Chương 2 Nghị định số 89/2006/NĐ-CP n&ecirc;u tr&ecirc;n. Trong đ&oacute;, nội dung bắt buộc phải thể hiện tr&ecirc;n nh&atilde;n h&agrave;ng ho&aacute; được quy định tại Điều 11 như sau: &ldquo;1. Nh&atilde;n h&agrave;ng ho&aacute; bắt buộc phải thể hiện c&aacute;c nội dung sau: a) T&ecirc;n h&agrave;ng ho&aacute;; b) T&ecirc;n v&agrave; địa chỉ của tổ chức, c&aacute; nh&acirc;n chịu tr&aacute;ch nhiệm về h&agrave;ng ho&aacute;; c) Xuất xứ h&agrave;ng ho&aacute;. 2. Ngo&agrave;i nội dung quy định tại khoản 1 Điều n&agrave;y, tuỳ theo t&iacute;nh chất của mỗi loại h&agrave;ng ho&aacute;, phải thể hiện tr&ecirc;n nh&atilde;n h&agrave;ng ho&aacute; c&aacute;c nội dung bắt buộc quy định tại Điều 12 của Nghị định n&agrave;y v&agrave; quy định tại c&aacute;c văn bản luật, ph&aacute;p lệnh chuy&ecirc;n ng&agrave;nh c&oacute; li&ecirc;n quan.&rdquo; Đề nghị doanh nghiệp nghi&ecirc;n cứu kỹ Nghị định số 89/2006/NĐ-CP n&ecirc;u tr&ecirc;n để thực hiện. Doanh nghiệp c&oacute; thể tham khảo văn bản tr&ecirc;n tại mục THƯ VIỆN PH&Aacute;P LUẬT tr&ecirc;n Cổng Th&ocirc;ng tin điện tử Hải quan &ndash; Tổng cục Hải quan địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">www.customs.gov.vn</a>&nbsp;hoặc li&ecirc;n hệ với cơ quan Hải quan địa phương hoặc Bộ Khoa học v&agrave; C&ocirc;ng nghệ để được hỗ trợ cụ thể. Bộ phận tư vấn Ban Bi&ecirc;n tập Cổng Th&ocirc;ng tin điện tử Hải quan th&ocirc;ng b&aacute;o để doanh nghiệp biết./. Tr&acirc;n trọng.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Ch&iacute;nh s&aacute;ch xuất nhập khẩu, Nhập khẩu - Hiện tại c&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; sản phẩm dao cạo r&acirc;u được nhập khẩu từ TQ về để l&agrave;m chương tr&igrave;nh khuyến m&atilde;i. Nhưng ch&uacute;ng t&ocirc;i đang gặp phải vấn đề kh&oacute; khăn trong việc th&ocirc;ng tin tem nh&atilde;n sản phẩm tr&ecirc;n. K&iacute;nh mong qu&yacute; hải quan hỗ trợ tư vấn gi&uacute;p c&ocirc;ng ty ch&uacute;ng t&ocirc;i về th&ocirc;ng tin cần ghi tr&ecirc;n tem nh&atilde;n để đầy đủ v&agrave; ch&iacute;nh x&aacute;c nhất trong kh&acirc;u nhập khẩu sắp tới?</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty CP ESC Việt Nam</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=54" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH ALPS Việt Nam<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: 1. Về m&atilde; HS: Việc x&aacute;c định chi tiết m&atilde; HS của một mặt h&agrave;ng phải căn cứ v&agrave;o t&iacute;nh chất, cấu tạo thực tế của h&agrave;ng h&oacute;a nhập khẩu. Với mặt h&agrave;ng bạn hỏi, theo Danh mục h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu Việt Nam ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 1/7/2015 của Bộ T&agrave;i ch&iacute;nh, bạn c&oacute; thể tham khảo c&aacute;c m&atilde; h&agrave;ng trong nh&oacute;m h&agrave;ng sau: - 85.36: Thiết bị điện để đ&oacute;ng ngắt mạch hay bảo vệ mạch điện, hoặc d&ugrave;ng để đấu nối hay lắp trong mạch điện (v&iacute; dụ, cầu dao, rơ le, c&ocirc;ng tắc, chi tiết đ&oacute;ng ngắt mạch, cầu ch&igrave;, bộ triệt xung điện, ph&iacute;ch cắm, đui đ&egrave;n v&agrave; c&aacute;c đầu nối kh&aacute;c, hộp đấu nối), d&ugrave;ng cho điện &aacute;p kh&ocirc;ng qu&aacute; 1.000V; đầu nối d&ugrave;ng cho sợi quang, b&oacute; sợi hoặc c&aacute;p quang. Đề nghị bạn đọc căn cứ v&agrave;o thực tế t&iacute;nh chất, cấu tạo thực tế h&agrave;ng h&oacute;a nhập khẩu v&agrave; &aacute;p dụng 06 (s&aacute;u) quy tắc ph&acirc;n loại tại Phụ lục II ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 1/7/2015 của Bộ T&agrave;i ch&iacute;nh về việc ban h&agrave;nh Danh mục h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu Việt Nam để x&aacute;c định m&atilde; HS chi tiết ph&ugrave; hợp với thực tế h&agrave;ng h&oacute;a nhập khẩu. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>M&atilde; HS code sản phẩm - C&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; nhập sản phẩm &quot;Bộ cảm biến c&ocirc;ng tắc ch&acirc;n chống b&ecirc;n d&ugrave;ng cho xe gắn m&aacute;y&quot;. Ch&uacute;ng t&ocirc;i muốn hỏi m&atilde; HS code cho sản phẩm n&agrave;y l&agrave; bao nhi&ecirc;u?</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH ALPS Việt Nam</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=55" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH ALPS Việt Nam<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>2. Về việc khai bổ sung hồ sơ hải quan: Bạn đọc tham khảo quy định tại Điều 20 Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu. &ldquo;1. C&aacute;c trường hợp khai bổ sung: a) Người khai hải quan được khai bổ sung hồ sơ hải quan sau khi Hệ thống ph&acirc;n luồng tờ khai nhưng trước thời điểm cơ quan hải quan thực hiện việc kiểm tra trực tiếp hồ sơ hải quan; b) Người khai hải quan, người nộp thuế x&aacute;c định c&oacute; sai s&oacute;t trong việc khai hải quan th&igrave; được khai bổ sung hồ sơ hải quan trong thời hạn 60 ng&agrave;y kể từ ng&agrave;y th&ocirc;ng quan nhưng trước thời điểm cơ quan hải quan quyết định kiểm tra sau th&ocirc;ng quan, thanh tra; c) Người khai hải quan, người nộp thuế ph&aacute;t hiện sai s&oacute;t trong việc khai hải quan sau thời điểm cơ quan hải quan kiểm tra hồ sơ, kiểm tra thực tế h&agrave;ng h&oacute;a nhưng trước khi th&ocirc;ng quan th&igrave; thực hiện khai bổ sung v&agrave; bị xử l&yacute; theo quy định của ph&aacute;p luật về thuế, ph&aacute;p luật về xử l&yacute; vi phạm h&agrave;nh ch&iacute;nh; d) Qu&aacute; thời hạn 60 ng&agrave;y kể từ ng&agrave;y th&ocirc;ng quan hoặc sau khi cơ quan hải quan quyết định kiểm tra sau th&ocirc;ng quan, thanh tra, người khai hải quan, người nộp thuế mới ph&aacute;t hiện sai s&oacute;t trong việc khai hải quan th&igrave; thực hiện khai bổ sung v&agrave; bị xử l&yacute; theo quy định của ph&aacute;p luật về thuế, ph&aacute;p luật về xử l&yacute; vi phạm h&agrave;nh ch&iacute;nh; đ) Người khai hải quan thực hiện khai bổ sung theo y&ecirc;u cầu của cơ quan hải quan khi kiểm tra hồ sơ, kiểm tra thực tế h&agrave;ng h&oacute;a v&agrave; bị xử l&yacute; theo quy định của ph&aacute;p luật về thuế, ph&aacute;p luật về xử l&yacute; vi phạm h&agrave;nh ch&iacute;nh. Việc khai bổ sung theo quy định tại điểm b, điểm d khoản n&agrave;y chỉ được thực hiện đối với h&agrave;ng h&oacute;a xuất nhập khẩu kh&ocirc;ng thuộc Danh mục h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu thuộc đối tượng quản l&yacute; chuy&ecirc;n ng&agrave;nh, Danh mục h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu theo giấy ph&eacute;p, Danh mục h&agrave;ng h&oacute;a cấm xuất khẩu, cấm nhập khẩu, Danh mục h&agrave;ng h&oacute;a tạm ngừng xuất khẩu, tạm ngừng nhập khẩu.&rdquo; Đề nghị bạn đọc tham khảo, thực hiện. Nếu c&ograve;n chưa r&otilde; th&igrave; li&ecirc;n hệ với cơ quan Hải quan nơi l&agrave;m thủ tục hải quan để được hướng dẫn cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản n&agrave;y ở mục THƯ VIỆN VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>&nbsp;. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>M&atilde; HS code sản phẩm - C&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; nhập sản phẩm &quot;Bộ cảm biến c&ocirc;ng tắc ch&acirc;n chống b&ecirc;n d&ugrave;ng cho xe gắn m&aacute;y&quot; - Trong qu&aacute; tr&igrave;nh sản phẩm tr&ecirc;n đang đi ph&acirc;n t&iacute;ch ph&acirc;n loại để x&aacute;c định m&atilde; HS code th&igrave; doanh nghiệp ch&uacute;ng t&ocirc;i vẫn tiếp tục nhập h&agrave;ng về để kịp giao cho kh&aacute;ch h&agrave;ng, l&uacute;c đ&oacute; m&atilde; HS code ch&uacute;ng t&ocirc;i n&ecirc;n khai l&agrave; m&atilde; n&agrave;o để tr&aacute;nh trường hợp c&oacute; thể bị phạt h&agrave;nh ch&iacute;nh (nếu c&oacute;)</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH ALPS Việt Nam</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=56" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH TM v&agrave; DV Hằng Cường<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Căn cứ khoản 2, khoản 4, Điều 60 Luật số 21/2012/QH13 Luật sửa đổi, bổ sung một số Điều của luật Quản l&yacute; thuế &ldquo; 2. Đối với hồ sơ thuộc diện ho&agrave;n thuế trước, kiểm tra sau th&igrave; chậm nhất l&agrave; 06 ng&agrave;yl&agrave;m việc, kể từ ng&agrave;y nhận đủ hồ sơ Ho&agrave;n thuế, cơ quan quản l&yacute; thuế phải quyết định Ho&agrave;n thuế theo đề nghị của người nộp thuế; Trường hợp kh&ocirc;ng đ&aacute;p ứng điều kiện ho&agrave;n thuế trước th&igrave; th&ocirc;ng b&aacute;o bằng văn bản cho người nộp thuế về việc chuyển hồ sơ sang diện kiểm tra trước ho&agrave;n thuế sau, hoặc th&ocirc;ng b&aacute;o l&yacute; do kh&ocirc;ng ho&agrave;n thuế.&rdquo; &ldquo;4. Đối với hồ sơ thuộc diện kiểm tra trước, ho&agrave;n thuế sau th&igrave; chậm nhất l&agrave; 40 (bốn mươi) ng&agrave;y l&agrave;m việc, kể từ ng&agrave;y nhận đủ hồ sơ ho&agrave;n thuế, cơ quan thuế phải quyết định ho&agrave;n thuế hoặc th&ocirc;ng b&aacute;o bằng văn bản cho người nộp thuế l&yacute; do kh&ocirc;ng ho&agrave;n thuế.&rdquo; Căn cứ v&agrave;o c&aacute;c quy định n&ecirc;u tr&ecirc;n quy định thời hạn ho&agrave;n thuế: Đối với hồ sơ ho&agrave;n thuế trước kiểm tra sau th&igrave; thời hạn chậm nhất l&agrave; 06 ng&agrave;y l&agrave;m việc, kể từ ng&agrave;y nhận đủ hồ sơ ho&agrave;n thuế, cơ quan quản l&yacute; thuế phải quyết định ho&agrave;n thuế theo đề nghị của người nộp thuế.(t&ugrave;y từng trường hợp cụ thể, nếu trường hợp hồ sơ đầy đủ, kịp thời, kh&ocirc;ng c&oacute; rũi ro c&oacute; thể được giải quyết trước 06 ng&agrave;y l&agrave;m việc) Đối với hồ sơ thuộc diện kiểm tra trước, ho&agrave;n thuế sau th&igrave; thời hạn chậm nhất l&agrave; 40 (bốn mươi ) ng&agrave;y l&agrave;m việc, cơ quan thuế phải ra quyết định ho&agrave;n thuế (t&ugrave;y từng trường hợp cụ thể, nếu trường hợp hồ sơ đầy đủ, kh&ocirc;ng c&oacute; rủi ro c&oacute; thể được giải quyết trước 40 ng&agrave;y l&agrave;m việc). Vậy cơ quan thuế hướng dẫn để DN được biết v&agrave; thực hi&ecirc;n.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Dương Hồng Lĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; cục trưởng&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:chicucthue@hatinh.gov.vn">chicucthue@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Do mặt h&agrave;ng xuất khẩu nguồn cung cấp chủ yếu ở c&aacute;c tỉnh T&acirc;y nguy&ecirc;n n&ecirc;n kh&ocirc;ng nhận được hổ trợ của tỉnh, thị trường c&ograve;n hẹp, hồ sơ ho&agrave;n thuế k&eacute;o d&agrave;i, ảnh hưởng nguồn vốn.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH TM v&agrave; DV Hằng Cường</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>27</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=57" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH xổ số kiến thiết H&agrave; Tĩnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP. H&agrave; Tĩnh</td>
        <td>
            <p>Căn cứ khoản1, khoản 2 Điều 42 Luật số 21/2012/QH13 của Quốc Hội: Luật sửa đổi,bổ sung một số điều của Luật Quản l&yacute; thuế. &ldquo;1. Trường hợp người nộp thuế t&iacute;nh thuế, thời hạn nộp thuế chậm nhất l&agrave; ng&agrave;y cuối c&ugrave;ng thời hạn nộp tờ khai thuế. 2. Trường hợp cơ quan quản l&yacute; thuế t&iacute;nh thuế hoặc ấn định thuế, thời hạn nộp thuế l&agrave; thời hạn ghi tr&ecirc;n th&ocirc;ng b&aacute;o của cơ quan thuế.&rdquo; Căn cứ điểm a, khoản 3, Điều 10 Th&ocirc;ng tư 156/2013/TT-BTC ng&agrave;y 06/11/2013 của hướng dẫn thi h&agrave;nh một số điều của luật quản l&yacute; thuế, luật sửa đổi bổ sung một số Điều của Luật Quản l&yacute; thuế v&agrave; Nghị định số 83/2013/NĐ-CP ng&agrave;y 22/7/2013 của Ch&iacute;nh phủ. &ldquo;a.) Thời hạn nộp hồ sơ khai thuế th&aacute;ng chậm nhất l&agrave; ng&agrave;y thứ 20 của th&aacute;ng tiếp theo th&aacute;ng ph&aacute;t sinh nghĩa vụ nộp thuế. b.) Thời hạn nộp hồ sơ khai thuế qu&yacute;, tạm t&iacute;nh theo qu&yacute; chậm nhất l&agrave; ng&agrave;y 30 (ba mươi) của qu&yacute; tiếp theo qu&yacute; ph&aacute;t sinh nghĩa vụ nộp thuế.&rdquo; Căn cứ v&agrave;o c&aacute;c quy định n&ecirc;u tr&ecirc;n trường hợp nộp hồ sơ khai thuế th&aacute;ng thời hạn nộp thuế chậm nhất l&agrave; ng&agrave;y thứ 20 của th&aacute;ng tiếp theo đề nghị C&ocirc;ng ty căn cứ quy định n&ecirc;u tr&ecirc;n để thực hiện thực hiện.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Dương Hồng Lĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; cục trưởng&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:chicucthue@hatinh.gov.vn">chicucthue@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Đề nghị Cục thuế tỉnh cho c&ocirc;ng ty được k&eacute;o d&agrave;i thời gian nộp thuế h&agrave;ng th&aacute;ng theo quy định. V&igrave; hoạt động xổ số rủi ro trong khi vốn v&agrave; quỷ dự ph&ograve;ng rủi ro từ trả thưởng qu&aacute; &iacute;t, kh&ocirc;ng thể thanh to&aacute;n cho kh&aacute;ch h&agrave;ngkhi tr&uacute;ng thưởng lớn cũng như nộp NSNN đ&uacute;ng kỳ hạn.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH&nbsp; xổ số kiến thiết H&agrave; Tĩnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>27</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=58" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Thuận Phương<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trong giai đoạn hiện nay ch&iacute;nh s&aacute;ch thuế thường xuy&ecirc;n thay đổi để đ&aacute;p ứng t&igrave;nh h&igrave;nh ph&aacute;t triển kinh tế - x&atilde; hội v&agrave; kinh doanh của doanh nghiệp; đồng thời đ&aacute;p ứng c&aacute;c y&ecirc;u cầu cải c&aacute;ch h&agrave;nh ch&iacute;nh thuế, cải thiện m&ocirc;i trường kinh doanh; hệ thống c&aacute;c c&ocirc;ng cụ hổ trợ cho DN v&agrave; phần mềm hổ trợ cho NNT củng phải thay đổi theo; c&aacute;c phần mềm cung cấp cho NNT thay đổi đ&atilde; được cơ quan thuế n&acirc;ng cấp, cập nhật li&ecirc;n tục cơ bản đ&atilde; đ&aacute;p ứng y&ecirc;u cầu nhiệm vụ về cải c&aacute;ch thủ tục h&agrave;nh ch&iacute;nh thuế tạo điều kiện tốt nhất cho NNT.vậy phần mềm hổ trợ k&ecirc; khai thay đổi l&agrave; để đ&aacute;p ứng tốt nhất cho c&ocirc;ng t&aacute;c hổ trợ DN về k&ecirc; khai thuế.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Dương Hồng Lĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; cục trưởng&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:chicucthue@hatinh.gov.vn">chicucthue@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>- Phần mềm hổ trợ k&ecirc; khai thay đổi nhiều g&acirc;y kh&oacute; khăn cho DN</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH&nbsp; Thuận Phương</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>27</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=59" onclick="GoToLink(this);return false;" target="_self">Cao Thị H&agrave;<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban Bi&ecirc;n tập c&oacute; &yacute; kiến trao đổi như sau: Muốn biết mức thuế phải nộp, trước hết phải x&aacute;c định được m&atilde; số HS chi tiết của h&agrave;ng h&oacute;a. Về m&atilde; số HS: Để x&aacute;c định chi tiết m&atilde; HS của một mặt h&agrave;ng phải căn cứ v&agrave;o t&iacute;nh chất, th&agrave;nh phần cấu tạo, &hellip; của h&agrave;ng h&oacute;a thực tế nhập khẩu. T&ugrave;y theo t&iacute;nh chất, th&agrave;nh phần cấu tạo,... bạn đọc c&oacute; thể tham khảo c&aacute;c mặt h&agrave;ng n&agrave;y tại nh&oacute;m 22.08 &ldquo;Cồn &ecirc;-ti-l&iacute;ch chưa biến t&iacute;nh c&oacute; nồng độ cồn dưới 80% t&iacute;nh theo thể t&iacute;ch; rượu mạnh, rượu m&ugrave;i v&agrave; đồ uống c&oacute; rượu kh&aacute;c.&rdquo;, m&atilde; HS 2208.90.90,... của Danh mục h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu Việt Nam ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 01/7/2015 của Bộ trưởng Bộ T&agrave;i ch&iacute;nh. Đề nghị bạn đọc căn cứ v&agrave;o thực tế t&iacute;nh chất, th&agrave;nh phần cấu tạo,&hellip; của h&agrave;ng h&oacute;a m&agrave; m&igrave;nh nhập khẩu v&agrave; &aacute;p dụng s&aacute;u (6) quy tắc tổng qu&aacute;t giải th&iacute;ch việc ph&acirc;n loại h&agrave;ng h&oacute;a theo Danh mục h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu Việt Nam tại Phụ lục II ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 01/7/2015 của Bộ trưởng Bộ T&agrave;i ch&iacute;nh để x&aacute;c định m&atilde; HS chi tiết ph&ugrave; hợp với thực tế. Để x&aacute;c định ch&iacute;nh x&aacute;c m&atilde; số h&agrave;ng h&oacute;a xuất nhập khẩu, trước khi l&agrave;m thủ tục hải quan, bạn c&oacute; thể đề nghị x&aacute;c định trước m&atilde; số h&agrave;ng h&oacute;a theo quy định tại Điều 7 Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh &ldquo;Quy định thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu&rdquo;. Về thuế nhập khẩu: + Nếu h&agrave;ng h&oacute;a nhập khẩu đ&aacute;p ứng điều kiện quy định tại Th&ocirc;ng tư số 166/2014/TT-BTC ng&agrave;y 14/11/2014 &ldquo;ban h&agrave;nh Biểu thuế nhập khẩu ưu đ&atilde;i đặc biệt của Việt Nam để thực hiện Hiệp định Thương mại h&agrave;ng h&oacute;a ASEAN - Trung Quốc giai đoạn 2015-2018&rdquo;, th&igrave; được &aacute;p dụng mức thuế theo quy định tại Biểu thuế ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư n&agrave;y. Mức thuế &aacute;p dụng đối với h&agrave;ng c&oacute; m&atilde; HS 2208.90.90 l&agrave; 20%. + Nếu h&agrave;ng h&oacute;a nhập khẩu kh&ocirc;ng đ&aacute;p ứng một trong c&aacute;c điều kiện quy định tại Th&ocirc;ng tư số 166/2014/TT-BTC, th&igrave; &aacute;p dụng mức thuế theo quy định tại Biểu thuế nhập khẩu nhập khẩu ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 164/2013/TT-BTC ng&agrave;y 15/11/2013 của Bộ T&agrave;i ch&iacute;nh. Mức thuế &aacute;p dụng đối với h&agrave;ng c&oacute; m&atilde; HS 2208.90.90 l&agrave; 45%. Đề nghị bạn đọc căn cứ quy định n&ecirc;u tr&ecirc;n v&agrave; li&ecirc;n hệ trực tiếp với cơ quan hải quan nơi dự kiến mở tờ khai để được giải đ&aacute;p cụ thể. Bạn c&oacute; thể t&igrave;m nội dung văn bản n&agrave;y ở mục VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết./. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Hỏi về thuế nhập khẩu rượu cocktail Hiện tại em đang muốn nhập 1 l&ocirc; h&agrave;ng rượu cocktail Rio - l&agrave; một loại rượu nh&eacute; 3.8% nồng độ cồn c&oacute; xuất xứ từ Trung Quốc, em muốn hỏi thuế nhập khẩu của loại rượu n&agrave;y l&agrave; bao nhi&ecirc;u ạ? K&iacute;nh mong qu&yacute; cơ quan c&oacute; thể giải đ&aacute;p gi&uacute;p em!</p>
        </td>
        <td>&nbsp;</td>
        <td>Cao Thị H&agrave;</td>
        <td>DN</td>
        <td>public</td>
        <td>0814237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=60" onclick="GoToLink(this);return false;" target="_self">Cty TNHH UL VS Việt Nam<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: Do kh&ocirc;ng c&oacute; hồ sơ cụ thể v&agrave; th&ocirc;ng tin bạn cung cấp chưa đầy đủ n&ecirc;n ch&uacute;ng t&ocirc;i kh&ocirc;ng c&oacute; cơ sở để trả lời ch&iacute;nh x&aacute;c vướng mắc của bạn đọc. Ch&uacute;ng t&ocirc;i gợi &yacute; bạn như sau: * Về m&atilde; loại h&igrave;nh xuất, nhập khẩu: Theo bảng m&atilde; loại h&igrave;nh tr&ecirc;n hệ thống VNACCS v&agrave; hướng dẫn sử dụng ban h&agrave;nh k&egrave;m theo C&ocirc;ng văn số 3283/TCHQ-GSQL ng&agrave;y 31/3/2014 của Tổng cục Hải quan th&igrave;: - Nếu trong trường hợp doanh nghiệp thu&ecirc; mượn m&aacute;y m&oacute;c, thiết bị, phương tiện thi c&ocirc;ng, khu&ocirc;n mẫu từ nước ngo&agrave;i hoặc từ c&aacute;c khu phi thuế quan đưa v&agrave;o Việt Nam để sản xuất, thi c&ocirc;ng c&ocirc;ng tr&igrave;nh, thực hiện dự &aacute;n, thử nghiệm; Tạm nhập t&aacute;i xuất để bảo h&agrave;nh, sửa chữa&hellip; th&igrave; &aacute;p m&atilde; G12 &ldquo;Tạm nhập m&aacute;y m&oacute;c, thiết bị phục vụ dự &aacute;n c&oacute; thời hạn&rdquo;. - M&atilde; loại h&igrave;nh xuất khẩu G22 &ldquo;T&aacute;i xuất m&aacute;y m&oacute;c, thiết bị dự &aacute;n c&oacute; thời hạn&rdquo; được sử dụng trong trường hợp h&agrave;ng h&oacute;a l&agrave; m&aacute;y m&oacute;c, thiết bị đ&atilde; tạm nhập theo m&atilde; G12, khi hết thời hạn thuế, kết th&uacute;c dự &aacute;n phải t&aacute;i xuất. Lưu &yacute;: Doanh nghiệp tự x&aacute;c định v&agrave; khai thời hạn lưu giữ tại Việt Nam tr&ecirc;n tờ khai hải quan. Trường hợp gia hạn phải thực hiện sửa đổi, bổ sung th&ocirc;ng tin quản l&yacute; h&agrave;ng tạm nhập, t&aacute;i xuất. *Về thủ tục nhập khẩu h&agrave;ng tạm nhập, t&aacute;i xuất, đề nghị bạn nghi&ecirc;n cứu c&aacute;c văn bản sau để biết th&ecirc;m chi tiết: - Điều 12 Nghị định số 187/2013/NĐ-CP ng&agrave;y 2/11/2013 của Ch&iacute;nh phủ &ldquo;quy định chi tiết thi h&agrave;nh Luật thương mại về hoạt động mua b&aacute;n h&agrave;ng ho&aacute; quốc tế v&agrave; c&aacute;c hoạt động đại l&yacute; mua, b&aacute;n, gia c&ocirc;ng v&agrave; qu&aacute; cảnh h&agrave;ng ho&aacute; với nước ngo&agrave;i&rdquo;; - Điều 50 Nghị định số 08/2015/NĐ-CP ng&agrave;y 21/01/2015 của Ch&iacute;nh phủ &ldquo;Quy định chi tiết v&agrave; biện ph&aacute;p thi h&agrave;nh Luật Hải quan về thủ tục hải quan, kiểm tra, gi&aacute;m s&aacute;t, kiểm so&aacute;t hải quan&rdquo; quy định về thủ tục hải quan đối với thiết bị, m&aacute;y m&oacute;c, phương tiện thi c&ocirc;ng, khu&ocirc;n, mẫu tạm nhập t&aacute;i xuất, tạm xuất t&aacute;i nhập để sản xuất, thi c&ocirc;ng c&ocirc;ng tr&igrave;nh, thực hiện dự &aacute;n, thử nghiệm. - Trường hợp h&agrave;ng h&oacute;a nhập khẩu phải c&oacute; giấy ph&eacute;p của Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng, c&ocirc;ng ty đ&atilde; được cấp giấy ph&eacute;p nhập khẩu th&igrave; được nhập khẩu. * Về thuế: H&agrave;ng h&oacute;a c&ocirc;ng ty bạn nhập khẩu phải nộp thuế nhập khẩu, thuế gi&aacute; trị gia tăng, lệ ph&iacute; hải quan theo quy định. Trị gi&aacute; t&iacute;nh thuế đối với h&agrave;ng h&oacute;a nhập khẩu l&agrave; h&agrave;ng đi thu&ecirc; được quy định tại khoản 9 Điều 17 Th&ocirc;ng tư số 39/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh &ldquo;Quy định về trị gi&aacute; hải quan đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu&rdquo;, như sau: &quot;9. H&agrave;ng h&oacute;a nhập khẩu l&agrave; h&agrave;ng đi thu&ecirc; th&igrave; trị gi&aacute; hải quan l&agrave; gi&aacute; thực tế đ&atilde; thanh to&aacute;n hay sẽ phải thanh to&aacute;n để thu&ecirc; h&agrave;ng h&oacute;a, ph&ugrave; hợp với c&aacute;c chứng từ c&oacute; li&ecirc;n quan đến việc đi thu&ecirc; h&agrave;ng h&oacute;a.&quot; Đề nghị bạn tham khảo văn bản tr&ecirc;n để biết th&ecirc;m chi tiết. Trong trường hợp vẫn chưa r&otilde;, bạn đọc c&oacute; thể li&ecirc;n hệ với cơ quan hải quan cửa khẩu nơi mở tờ khai để được hướng dẫn cụ thể. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!​</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Tạm nhập T&aacute;i xuất Vừa rồi c&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; hợp đồng với c&ocirc;ng ty nước ngo&agrave;i về đo kiểm thiết bị mạng kh&ocirc;ng d&acirc;y, v&agrave; đ&atilde; c&oacute; giấy ph&eacute;p số 1567/CVT_CL của Cục Viễn th&ocirc;ng - Bộ Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng cho ph&eacute;p tạm nhập h&agrave;ng để đo kiểm trong nước. Vậy xin hỏi ch&uacute;ng t&ocirc;i cần phải c&oacute; th&ecirc;m c&aacute;c giấy ph&eacute;p g&igrave;, v&agrave; &aacute;p m&atilde; loại h&igrave;nh n&agrave;o cho ch&iacute;nh x&aacute;c để nhập khẩu l&ocirc; h&agrave;ng thiết bị mạng kh&ocirc;ng d&acirc;y n&agrave;y? Sau khi đo kiểm xong để phục vụ cho mục đ&iacute;ch xuất trả th&igrave; ch&uacute;ng t&ocirc;i cần c&aacute;c loại giấy tờ g&igrave;, &aacute;p m&atilde; loại h&igrave;nh n&agrave;o? Trong qu&aacute; tr&igrave;nh nhập ch&uacute;ng t&ocirc;i c&oacute; phải chịu thuế g&igrave; kh&ocirc;ng? V&agrave; sau khi xuất ch&uacute;ng t&ocirc;i c&oacute; được ho&agrave;n thuế như thế n&agrave;o?</p>
        </td>
        <td>&nbsp;</td>
        <td>Cty TNHH UL VS Việt Nam</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=61" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Hans World Việt Nam<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Bắc Ninh</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: Theo khoản 1 Điều 58 Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh &ldquo;quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu&rdquo; c&oacute; quy định về &ldquo;Địa điểm l&agrave;m thủ tục hải quan&rdquo; như sau: &quot;1. Địa điểm l&agrave;m thủ tục nhập khẩu: a) Đối với h&agrave;ng h&oacute;a l&agrave; nguy&ecirc;n liệu, vật tư, m&aacute;y m&oacute;c, thiết bị nhập khẩu để gia c&ocirc;ng; nguy&ecirc;n liệu, vật tư nhập khẩu để sản xuất h&agrave;ng h&oacute;a xuất khẩu: Tổ chức, c&aacute; nh&acirc;n được lựa chọn l&agrave;m thủ tục nhập khẩu tại 01 Chi cục Hải quan sau đ&acirc;y: ... b) Đối với doanh nghiệp chế xuất (DNCX): b.1) H&agrave;ng h&oacute;a nhập khẩu của DNCX; h&agrave;ng h&oacute;a l&agrave; m&aacute;y m&oacute;c, thiết bị tạm nhập để phục vụ sản xuất, x&acirc;y dựng nh&agrave; xưởng (kể cả trường hợp nh&agrave; thầu trực tiếp nhập khẩu); h&agrave;ng h&oacute;a bảo h&agrave;nh, sửa chữa l&agrave;m thủ tục hải quan tại Chi cục Hải quan quản l&yacute; DNCX; b.2) Trường hợp DNCX nhập khẩu h&agrave;ng h&oacute;a theo quyền nhập khẩu quy định tại Nghị định số 23/2007/NĐ-CP v&agrave; c&aacute;c quy định của Bộ C&ocirc;ng Thương th&igrave; địa điểm đăng k&yacute; tờ khai hải quan thực hiện theo quy định tại Điều 22 Luật Hải quan, Điều 4 Nghị định số 08/2015/NĐ-CP ng&agrave;y 21/01/2015 của Ch&iacute;nh phủ v&agrave; khoản 1 Điều 19 Th&ocirc;ng tư n&agrave;y.&quot; Như vậy, c&ocirc;ng ty bạn phải l&agrave;m thủ tục hải quan tại Chi cục Hải quan quản l&yacute; DNCX ở Ph&uacute; Thọ. * Về loại h&igrave;nh tờ khai : Theo bảng m&atilde; loại h&igrave;nh tr&ecirc;n hệ thống VNACCS v&agrave; hướng dẫn sử dụng ban h&agrave;nh k&egrave;m theo C&ocirc;ng văn số 3283/TCHQ-GSQL ng&agrave;y 31/3/2014 của Tổng cục Hải quan th&igrave;: M&atilde; loại h&igrave;nh E13 &ldquo;Nhập tạo t&agrave;i sản cố định của doanh nghiệp chế xuất&rdquo; được sử dụng trong trường hợp nhập khẩu tạo t&agrave;i sản cố định của doanh nghiệp chế xuất (bao gồm cả nhập từ nước ngo&agrave;i, từ nội địa hoặc từ doanh nghiệp chế xuất kh&aacute;c). Về thủ tục hải quan, kiểm tra, gi&aacute;m s&aacute;t hải quan đối với h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu của doanh nghiệp chế xuất, đề nghị bạn đọc nghi&ecirc;n cứu Điều 75 của Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh &ldquo;Quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu&rdquo; để biết th&ecirc;m th&ocirc;ng tin. Đề nghị bạn tham khảo văn bản tr&ecirc;n để biết th&ecirc;m chi tiết. Trong trường hợp vẫn chưa r&otilde;, bạn đọc c&oacute; thể li&ecirc;n hệ với cơ quan hải quan tại Chi cục Hải quan Bắc Ninh để được giải đ&aacute;p cụ thể. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>C&ocirc;ng ty ch&uacute;ng t&ocirc;i nh&agrave; c&ocirc;ng ty nh&agrave; thầu 100% vốn nước ngo&agrave;i tại Bắc Ninh. C&oacute; hợp đồng thầu x&acirc;y dựng với c&ocirc;ng ty chế xuất 100% vốn nước ngo&agrave;i tại Ph&uacute; Thọ. Vậy khi c&ocirc;ng ty ch&uacute;ng t&ocirc;i nhập khẩu m&aacute;y m&oacute;c, thiết bị để thi c&ocirc;ng x&acirc;y dựng nh&agrave; xưởng cho c&ocirc;ng ty chế xuất, để cho thuận tiện c&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; thể mở tờ khai tại chi cục Hải Quan Bắc Ninh kh&ocirc;ng? Loại h&igrave;nh tờ khai l&agrave; g&igrave;? Tr&acirc;n trọng cảm ơn.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH Hans World Việt Nam</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=62" onclick="GoToLink(this);return false;" target="_self">Cty Sợi Vĩnh Trường Ph&aacute;t<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: * Về m&atilde; h&agrave;ng của sản phẩm : Để x&aacute;c định được mức thuế nhập khẩu của một mặt h&agrave;ng cần căn cứ tr&ecirc;n m&atilde; HS chi tiết của mặt h&agrave;ng đ&oacute;. Việc x&aacute;c định m&atilde; số HS v&agrave; thuế suất của một mặt h&agrave;ng cụ thể phải căn cứ v&agrave;o th&agrave;nh phần cấu tạo, m&ocirc; tả h&agrave;ng h&oacute;a, v&agrave; thực tế h&agrave;ng h&oacute;a. Tuy nhi&ecirc;n, bạn chỉ cung cấp t&ecirc;n gọi của h&agrave;ng ho&aacute; n&ecirc;n ch&uacute;ng t&ocirc;i kh&ocirc;ng c&oacute; căn cứ để trả lời cụ thể. Căn cứ: - Th&ocirc;ng tư số 14/2015/TT-BTC ng&agrave;y 30/01/2015 của Bộ T&agrave;i ch&iacute;nh, hướng dẫn về ph&acirc;n loại h&agrave;ng h&oacute;a, ph&acirc;n t&iacute;ch để ph&acirc;n loại h&agrave;ng h&oacute;a; ph&acirc;n t&iacute;ch để kiểm tra chất lượng; kiểm tra an to&agrave;n thực phẩm đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu. - Biểu thuế xuất khẩu, Biểu thuế nhập khẩu ưu đ&atilde;i 2014 ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 164/2013/TT-BTC ng&agrave;y 15/11/2013 của Bộ T&agrave;i ch&iacute;nh. - Phụ lục II: S&aacute;u qui tắc tổng qu&aacute;t giải th&iacute;ch việc ph&acirc;n loại h&agrave;ng h&oacute;a theo Danh mục h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu Việt Nam dựa tr&ecirc;n Hệ thống h&agrave;i h&ograve;a m&ocirc; tả v&agrave; m&atilde; h&oacute;a h&agrave;ng h&oacute;a của Tổ chức Hải quan thế giới (ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 01/7/2015 của Bộ T&agrave;i ch&iacute;nh); Bạn đọc c&oacute; thể tham khảo mặt h&agrave;ng tại Chương 90: &ldquo;Dụng cụ, thiết bị quang học, nhiếp ảnh, điện ảnh, đo lường, kiểm tra, ch&iacute;nh x&aacute;c, y tế hoặc phẫu thuật; c&aacute;c bộ phận v&agrave; phụ kiện của ch&uacute;ng&rdquo; , nh&oacute;m 90.24: &ldquo;M&aacute;y v&agrave; thiết bị thử độ cứng, độ bền, độ n&eacute;n, độ đ&agrave;n hồi hoặc c&aacute;c t&iacute;nh chất cơ học kh&aacute;c của vật liệu (v&iacute; dụ, kim loại, gỗ, h&agrave;ng dệt, giấy, plastic&quot;. Để x&aacute;c định ch&iacute;nh x&aacute;c m&atilde; số h&agrave;ng h&oacute;a nhập khẩu, trước khi l&agrave;m thủ tục hải quan, bạn c&oacute; thể đề nghị x&aacute;c định trước m&atilde; số h&agrave;ng h&oacute;a nhập khẩu theo quy định tại Điều 7 Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh &ldquo;Quy định về thủ tục Hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu&rdquo; Đề nghị bạn nghi&ecirc;n cứu văn bản tr&ecirc;n để thực hiện. Trong trường hợp vẫn chưa r&otilde;, bạn đọc c&oacute; thể li&ecirc;n hệ với cơ quan hải quan nơi mở tờ khai để được gi&uacute;p đỡ, hướng dẫn cụ thể. Bộ phận tư vấn của ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>HS code m&aacute;y kiểm tra độ đều sợi Uster Cty t&ocirc;i đang c&oacute; nhu cầu nhập 1 m&aacute;y M&Aacute;Y KIỂM TRA ĐỘ ĐỀU SỢI gọi tắc l&agrave; Uster C&ocirc;ng dụng của m&aacute;y l&agrave; kiểm tra lỗi của sợi, ph&acirc;n t&iacute;ch, đ&aacute;nh gi&aacute; về kỷ thuật... K&iacute;nh mong nhận được sự trả lời của Cơ Quan Hải Quan</p>
        </td>
        <td>&nbsp;</td>
        <td>Cty Sợi Vĩnh Trường Ph&aacute;t</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=63" onclick="GoToLink(this);return false;" target="_self">DNTN TR&Agrave; HO&Agrave;N NGỌC<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>T&Acirc;Y NINH</td>
        <td>
            <p>Nội dung trả lời: Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban Bi&ecirc;n tập c&oacute; &yacute; kiến trao đổi như sau: Do kh&ocirc;ng c&oacute; hồ sơ cụ thể v&agrave; th&ocirc;ng tin bạn cung cấp chưa đầy đủ n&ecirc;n ch&uacute;ng t&ocirc;i kh&ocirc;ng c&oacute; cơ sở để trả lời ch&iacute;nh x&aacute;c vướng mắc của bạn đọc. *Về thủ tục hải quan: Thực hiện theo quy định tại Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu. Trong đ&oacute;, hồ sơ hải quan đối với h&agrave;ng nhập khẩu được quy định cụ thể tại khoản 2, Điều 16 của Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015. *Về ch&iacute;nh s&aacute;ch mặt h&agrave;ng: Nếu mặt h&agrave;ng tr&ecirc;n l&agrave; một loại h&oacute;a chất, th&igrave; theo Phụ lục II &ldquo;Danh mục h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu theo giấu ph&eacute;p v&agrave; thuộc diện quản l&yacute; chuy&ecirc;n ng&agrave;nh&rdquo; ban h&agrave;nh k&egrave;m theo Nghị định số 187/2013/NĐ-CP ng&agrave;y 20/11/2013 của Ch&iacute;nh phủ th&igrave; h&oacute;a chất thuộc Danh mục h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu theo Giấy ph&eacute;p v&agrave; thuộc diện quản l&yacute; chuy&ecirc;n ng&agrave;nh của Bộ C&ocirc;ng thương. Đề nghị bạn nghi&ecirc;n cứu văn bản sau để biết th&ecirc;m chi tiết: 1. Nghị định số 108/2008/NĐ-CP ng&agrave;y 07/10/2008 của Ch&iacute;nh phủ quy định chi tiết v&agrave; hướng dẫn thi h&agrave;nh một số điều của Luật H&oacute;a chất ; 2. Nghị định số 26/2011/NĐ-CP ng&agrave;y 08/4/2011 của Ch&iacute;nh phủ &quot;sửa đổi, bổ sung một số điều của Nghị định số 108/2008/NĐ-CP ng&agrave;y 7/10/2008 của Ch&iacute;nh phủ quy định chi tiết v&agrave; thi h&agrave;nh một số điều của Luật H&oacute;a chất&quot;; 3. Th&ocirc;ng tư 40/2011/TT-BCT ng&agrave;y 14/11/2015 của Bộ C&ocirc;ng thương quy định về khai b&aacute;o h&oacute;a chất. Đề nghị bạn tham khảo văn bản tr&ecirc;n để biết th&ecirc;m chi tiết. Trong trường hợp vẫn chưa r&otilde;, bạn đọc c&oacute; thể li&ecirc;n hệ với cơ quan chức năng thuộc Bộ C&ocirc;ng thương để được gi&uacute;p đỡ hoặc li&ecirc;n hệ với hải quan cửa khẩu nơi mở tờ khai để được hướng dẫn cụ thể. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Hỏi về thủ tục li&ecirc;n quan khi nhập khẩu chất Hydroxypropyl beta cyclodextrin Hiện doanh nghiệp ch&uacute;ng t&ocirc;i c&oacute; nhập khẩu 1 l&ocirc; h&agrave;ng mẫu Tầm 25Kg chất HYDROXYPROPYL BETA CYCLODEXTRIN để phục vụ việc nghi&ecirc;n cứu sản Xuất tr&agrave; thảo mộc. c&ocirc;ng ty ch&uacute;ng t&ocirc;i băn khoan kh&ocirc;ng biết chất tr&ecirc;n c&oacute; cần phải xin ph&eacute;p hay cần những thủ tục li&ecirc;n ngh&agrave;nh g&igrave;.? vậy nay xin đặt c&acirc;u hỏi k&iacute;nh mong Cơ quan c&oacute; thể tư vấn cho c&ocirc;ng ty ch&uacute;ng t&ocirc;i về những thủ tục li&ecirc;n quan để c&ocirc;ng ty ch&uacute;ng t&ocirc;i được biết v&agrave; c&oacute; thể l&agrave;m thủ tục nhận được l&ocirc; h&agrave;ng n&ecirc;u tr&ecirc;n. Xin ch&acirc;n th&agrave;nh cảm ơn v&agrave; k&iacute;nh ch&agrave;o.</p>
        </td>
        <td>&nbsp;</td>
        <td>DNTN TR&Agrave; HO&Agrave;N NGỌC</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=64" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng Ty TNHH T&agrave;i Tiến Ph&aacute;t<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: *Về quyền kinh doanh nhập khẩu: Căn cứ khoản 1 Điều 3 Nghị định số 187/2013/NĐ-CP ng&agrave;y 20/11/2013 của Ch&iacute;nh Phủ &ldquo;quy định chi tiết thi h&agrave;nh Luật Thương mại về hoạt động mua b&aacute;n h&agrave;ng ho&aacute; quốc tế v&agrave; c&aacute;c hoạt động đại l&yacute; mua, b&aacute;n, gia c&ocirc;ng v&agrave; qu&aacute; cảnh h&agrave;ng h&oacute;a với nước ngo&agrave;i&rdquo; quy định về quyền kinh doanh xuất khẩu, nhập khẩu như sau: &ldquo;1. Đối với thương nh&acirc;n Việt Nam kh&ocirc;ng c&oacute; vốn đầu tư trực tiếp của nước ngo&agrave;i (dưới đ&acirc;y gọi tắt l&agrave; thương nh&acirc;n): Trừ h&agrave;ng h&oacute;a thuộc Danh mục h&agrave;ng h&oacute;a cấm xuất khẩu, tạm ngừng xuất khẩu, Danh mục h&agrave;ng h&oacute;a cấm nhập khẩu, tạm ngừng nhập khẩu quy định tại Nghị định n&agrave;y v&agrave; c&aacute;c văn bản ph&aacute;p luật kh&aacute;c, thương nh&acirc;n được xuất khẩu, nhập khẩu h&agrave;ng h&oacute;a kh&ocirc;ng phụ thuộc v&agrave;o ng&agrave;nh nghề đăng k&yacute; kinh doanh. Chi nh&aacute;nh thương nh&acirc;n được xuất khẩu, nhập khẩu h&agrave;ng h&oacute;a theo ủy quyền của thương nh&acirc;n.&rdquo; Theo quy định tr&ecirc;n, nếu h&agrave;ng h&oacute;a C&ocirc;ng ty nhập khẩu kh&ocirc;ng thuộc Danh mục h&agrave;ng h&oacute;a cấm xuất khẩu Danh mục h&agrave;ng h&oacute;a cấm xuất khẩu, tạm ngừng xuất khẩu, Danh mục h&agrave;ng h&oacute;a cấm nhập khẩu, tạm ngừng nhập khẩu quy định tại Nghị định 187/2013/NĐ-CP v&agrave; c&aacute;c văn bản ph&aacute;p luật kh&aacute;c th&igrave; được nhập khẩu kh&ocirc;ng phụ thuộc v&agrave;o ng&agrave;nh nghề đăng k&yacute; kinh doanh. *Ch&iacute;nh s&aacute;ch ưu đ&atilde;i về thuế: - Để biết m&aacute;y m&oacute;c của C&ocirc;ng ty bạn c&oacute; được miễn thuế nhập khẩu hay kh&ocirc;ng, đề nghị bạn đọc nghi&ecirc;n cứu Điều 103: &ldquo;C&aacute;c trường hợp miễn thuế&rdquo; của Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh &ldquo;Quy định về thủ tục Hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu&rdquo; để biết th&ecirc;m chi tiết. - Về việc miễn thuế gi&aacute; trị gia tăng: Đề nghị bạn nghi&ecirc;n cứu Th&ocirc;ng tư số 219/2013/TT-BTC ng&agrave;y 31/12/2013 của Bộ T&agrave;i ch&iacute;nh &ldquo;Hướng dẫn thi h&agrave;nh Luật Thuế gi&aacute; trị gia tăng v&agrave; Nghị định số 209/2013/NĐ-CP ng&agrave;y 18/12/2013 của Ch&iacute;nh phủ quy định chi tiết v&agrave; hướng dẫn thi h&agrave;nh một số điều Luật Thuế gi&aacute; trị gia tăng&rdquo; v&agrave; c&aacute;c văn bản sửa đổi, bổ sung để biết th&ecirc;m th&ocirc;ng tin. *Về thủ tục hải quan: Thực hiện theo quy định tại Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu. Trong đ&oacute;, hồ sơ hải quan đối với h&agrave;ng nhập khẩu được quy định cụ thể tại khoản 2, Điều 16 của Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015. Đề nghị bạn tham khảo văn bản tr&ecirc;n để biết th&ecirc;m chi tiết. Trong trường hợp vẫn chưa r&otilde;, bạn đọc c&oacute; thể li&ecirc;n hệ với cơ quan hải quan cửa khẩu nơi mở tờ khai để được hướng dẫn cụ thể. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!​</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Nhập m&aacute;y m&oacute;c về phục vụ sản xuất C&ocirc;ng ty t&ocirc;i l&agrave; c&ocirc;ng ty tư nh&acirc;n việt nam chuy&ecirc;n sản xuất về c&aacute;c mặt h&agrave;ng cơ kh&iacute;, c&ocirc;ng ty t&ocirc;i nằm ngo&agrave;i khu c&ocirc;ng nghiệp, ngh&agrave;nh nghề kinh doanh theo giấy ph&eacute;p đăng k&yacute; kinh doanh gồm ( chuẩn bị mặt bằng, lắp đặt hệ thống cấp, tho&aacute;t nước, l&ograve; sưởi v&agrave; điều h&ograve;a kh&ocirc;ng kh&iacute;, vệ sinh nh&agrave; cửa v&agrave; c&aacute;c c&ocirc;ng tr&igrave;nh kh&aacute;c, sửa chữa m&aacute;y m&oacute;c thiết bị, lắp đặt m&aacute;y m&oacute;c v&agrave; thiết bị c&ocirc;ng nghiệp, x&acirc;y dựng nh&agrave; c&aacute;c loại, hoạt động x&acirc;y dựng chuy&ecirc;n dụng kh&aacute;c, b&aacute;n bu&ocirc;n vật liệu, thiết bị lắp đặt kh&aacute;c trong x&acirc;y dựng, s&agrave;n xuất c&aacute;c cấu kiện kim loại, lắp đặt hệ thống điện, lắp đặt hệ thống x&acirc;y dựng kh&aacute;c, ho&agrave;n thiện c&ocirc;ng tr&igrave;nh x&acirc;y dựng, s&agrave;n xuất th&ugrave;ng, bể chứa v&agrave; dụng cụ chứa đựng bằng kim loại, sản xuất c&aacute;c sản phẩm kim loại chưa được ph&acirc;n bổ v&agrave;o đ&acirc;u : sản xuất quạt c&ocirc;ng nghiệp, ống gi&oacute;, h&uacute;t bụi, th&ocirc;ng gi&oacute;. ) sắp tới ch&uacute;ng t&ocirc;i dự định nhập mốt số m&aacute;y m&oacute;c từ trung quốc về phục vụ sản xuất gồm : 1. M&aacute;y c&aacute;n ống xoắn 2. m&aacute;y c&aacute;n ống vu&ocirc;ng m&atilde; HS của 2 mặt h&agrave;ng n&agrave;y theo t&ocirc;i tra cứu l&agrave; : 84551000 ( m&aacute;y c&aacute;n ống ) T&ocirc;i muốn hỏi với giấy ph&eacute;p kinh doanh như vậy th&igrave; ch&uacute;ng t&ocirc;i c&oacute; nhập được m&aacute;y m&oacute;c trện về để sản xuất kh&ocirc;ng hay l&agrave; c&ograve;n thiếu những thủ tục v&agrave; c&oacute; cần bổ xung th&ecirc;m ngh&agrave;nh nghề g&igrave; v&agrave;o giấy ph&eacute;p kinh doanh hay kh&ocirc;ng? ngo&agrave;i ra ch&uacute;ng t&ocirc;i c&oacute; được ưu đ&atilde;i g&igrave; về thuế xuất nhập khẩu v&agrave; thuế VAT kh&ocirc;ng? quy tr&igrave;nh nhập khẩu bao gồm những thủ tục g&igrave;?</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng Ty TNHH T&agrave;i Tiến Ph&aacute;t</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=65" onclick="GoToLink(this);return false;" target="_self">Muu Thi Thanh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: - Tại khoản 8, khoản 9 Điều 9 &ldquo;Một số mặt h&agrave;ng xuất khẩu, nhập khẩu theo quy định ri&ecirc;ng&rdquo; của Nghị định số 187/2013/NĐ-CP ng&agrave;y 20/11/2013 của Ch&iacute;nh Phủ &ldquo;Quy định chi tiết thi h&agrave;nh Luật Thương mại về hoạt động mua b&aacute;n h&agrave;ng ho&aacute; quốc tế v&agrave; c&aacute;c hoạt động đại l&yacute; mua, b&aacute;n, gia c&ocirc;ng v&agrave; qu&aacute; cảnh h&agrave;ng h&oacute;a với nước ngo&agrave;i&rdquo; quy định như sau: &ldquo;8. Nhập khẩu h&agrave;ng h&oacute;a theo hạn ngạch thuế quan: Đối với h&agrave;ng h&oacute;a thuộc danh mục quản l&yacute; nhập khẩu theo hạn ngạch thuế quan, Bộ quản l&yacute; chuy&ecirc;n ng&agrave;nh quyết định lượng hạn ngạch thuế quan, Bộ C&ocirc;ng Thương c&ocirc;ng bố cụ thể v&agrave; quy định phương thức điều h&agrave;nh nhập khẩu đối với từng mặt h&agrave;ng sau khi tham khảo &yacute; kiến Bộ T&agrave;i ch&iacute;nh v&agrave; c&aacute;c Bộ quản l&yacute; chuy&ecirc;n ng&agrave;nh li&ecirc;n quan. Việc x&aacute;c định mức thuế nhập khẩu trong hạn ngạch v&agrave; mức thuế ngo&agrave;i hạn ngạch thuế quan đối với từng mặt h&agrave;ng do Bộ T&agrave;i ch&iacute;nh chủ tr&igrave;, phối hợp với c&aacute;c Bộ, cơ quan quản l&yacute; chuy&ecirc;n ng&agrave;nh v&agrave; Bộ C&ocirc;ng Thương để quyết định v&agrave; c&ocirc;ng bố theo quy định của ph&aacute;p luật. 9. Đối với h&agrave;ng h&oacute;a xuất khẩu theo hạn ngạch do nước ngo&agrave;i quy định, Bộ C&ocirc;ng Thương thống nhất với c&aacute;c Bộ quản l&yacute; chuy&ecirc;n ng&agrave;nh v&agrave; Hiệp hội ng&agrave;nh h&agrave;ng c&oacute; li&ecirc;n quan để x&aacute;c định phương thức giao hạn ngạch bảo đảm y&ecirc;u cầu c&ocirc;ng khai, minh bạch, hợp l&yacute;.&rdquo; - Theo Điều 5 Th&ocirc;ng tư 04/2014/TT-BCT ng&agrave;y 27/1/2014 hướng dẫn Nghị định 187/2013/NĐ-CP &ldquo;hướng dẫn Luật Thương mại về hoạt động mua b&aacute;n h&agrave;ng h&oacute;a quốc tế v&agrave; hoạt động đại l&yacute; mua, b&aacute;n, gia c&ocirc;ng v&agrave; qu&aacute; cảnh h&agrave;ng h&oacute;a với nước ngo&agrave;i &ldquo; đường tinh luyện, đường th&ocirc; c&oacute; m&atilde; số HS l&agrave; 1701 thuộc Danh mục h&agrave;ng h&oacute;a nhập khẩu theo hạn ngạch thuế quan. Do vậy, để được kinh doanh tạm nhập t&aacute;i xuất mặt h&agrave;ng n&agrave;y, đề nghị bạn đọc li&ecirc;n hệ trực tiếp với Bộ C&ocirc;ng Thương (cơ quan quản l&yacute; chuy&ecirc;n ng&agrave;nh) để được giải đ&aacute;p cụ thể. Bộ phận tư vấn của ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Kinh doanh h&agrave;ng tạm nhập t&aacute;i xuất đường Th&aacute;i Lan m muốn bi&ecirc;t th&ocirc;ng tin về c&aacute;ch l&agrave;m tạm nhập t&aacute;i xuất mặt h&agrave;ng đường của th&aacute;i xu&aacute;t sang trung quốc theo đường tiểu ngạch: - c&ocirc;ng ty mới th&agrave;nh lập c&oacute; được ph&eacute;p cấp hạn nghạch kinh doanh đường tạm nhập t&aacute;i xuất hay kh&ocirc;ng? - hạn ngạch đ&oacute; đăng k&yacute; th&igrave; thủ tục cần những g&igrave;? - Nếu kh&ocirc;ng được cấp hạn nghạch vậy b&ecirc;n em c&oacute; c&ocirc;ng ty ủy th&aacute;c xuất nhập khẩu c&oacute; phải đ&oacute;ng thuế g&igrave; kh&ocirc;ng? -c&ocirc;ng ty em mới mở n&ecirc;n cũng chưa biết l&agrave;m c&aacute;ch n&agrave;o l&agrave; ph&ugrave; hợp nhất em đ&atilde; t&igrave;m hiểu đọc t&agrave;i liệu nhưng chưa t&igrave;m được th&ocirc;ng tin n&agrave;o ph&ugrave; hợp để hiểu th&ecirc;m. em rất mong được tư vấn cụ thể để biết c&aacute;ch xem h&agrave;ng h&oacute;a nhập t&aacute;i xuất được th&ocirc;ng quan. ​</p>
        </td>
        <td>&nbsp;</td>
        <td>Muu Thi Thanh</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=66" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty Nam Phương<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời c&acirc;u hỏi của C&ocirc;ng ty, Bộ phận tư vấn của Ban Bi&ecirc;n tập c&oacute; &yacute; kiến trao đổi như sau: - Khoản 3 Điều 42 Luật quản l&yacute; thuế năm 2006 (đ&atilde; được sửa đổi, bổ sung năm 2012) quy định: &ldquo;3. Thời hạn nộp thuế đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu được quy định như sau: &hellip;b) H&agrave;ng h&oacute;a kinh doanh tạm nhập, t&aacute;i xuất phải nộp thuế trước khi ho&agrave;n th&agrave;nh thủ tục hải quan tạm nhập khẩu h&agrave;ng h&oacute;a. Trường hợp được tổ chức t&iacute;n dụng bảo l&atilde;nh số thuế phải nộp th&igrave; thời hạn nộp thuế theo thời hạn bảo l&atilde;nh nhưng kh&ocirc;ng qu&aacute; mười lăm ng&agrave;y, kể từ ng&agrave;y hết thời hạn tạm nhập, t&aacute;i xuất v&agrave; kh&ocirc;ng phải nộp tiền chậm nộp trong thời hạn bảo l&atilde;nh&rdquo;. - Khoản 2 Điều 42 Th&ocirc;ng tư 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu quy định: &ldquo;Thời hạn nộp thuế đối với h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu thực hiện theo quy định tại khoản 3 Điều 42 Luật Quản l&yacute; thuế được sửa đổi, bổ sung tại khoản 11 Điều 1 Luật sửa đổi, bổ sung một số điều của Luật quản l&yacute; thuế số 21/2012/QH13 v&agrave; được hướng dẫn cụ thể như sau: ...2. Đối với h&agrave;ng h&oacute;a kinh doanh tạm nhập-t&aacute;i xuất a) Người nộp thuế phải nộp thuế nhập khẩu, c&aacute;c loại thuế kh&aacute;c theo quy định của ph&aacute;p luật (nếu c&oacute;) trước khi ho&agrave;n th&agrave;nh thủ tục hải quan h&agrave;ng tạm nhập. Trường hợp chưa nộp thuế, nếu được tổ chức t&iacute;n dụng nhận bảo l&atilde;nh số tiền thuế phải nộp th&igrave; việc bảo l&atilde;nh thực hiện theo quy định tại Điều 43 Th&ocirc;ng tư n&agrave;y. Thời hạn nộp thuế theo thời hạn bảo l&atilde;nh nhưng tối đa kh&ocirc;ng qu&aacute; 15 ng&agrave;y kể từ ng&agrave;y hết thời hạn tạm nhập-t&aacute;i xuất (kh&ocirc;ng &aacute;p dụng cho thời gian gia hạn thời hạn tạm nhập-t&aacute;i xuất) v&agrave; kh&ocirc;ng phải nộp tiền chậm nộp trong thời hạn bảo l&atilde;nh; b) Trường hợp t&aacute;i xuất ngo&agrave;i thời hạn bảo l&atilde;nh th&igrave; phải nộp tiền chậm nộp kể từ ng&agrave;y hết thời hạn bảo l&atilde;nh đến ng&agrave;y t&aacute;i xuất hoặc đến ng&agrave;y thực nộp thuế (nếu ng&agrave;y thực nộp thuế trước ng&agrave;y thực t&aacute;i xuất); c) Trường hợp đ&atilde; được &aacute;p dụng thời hạn nộp thuế theo thời hạn bảo l&atilde;nh nhưng chuyển ti&ecirc;u thụ nội địa th&igrave; phải nộp đủ c&aacute;c loại thuế theo quy định của ph&aacute;p luật trước khi ho&agrave;n th&agrave;nh thủ tục chuyển ti&ecirc;u thụ nội địa. Thủ tục khai b&aacute;o chuyển ti&ecirc;u thụ nội địa, đăng k&yacute; tờ khai mới v&agrave; t&iacute;nh thuế thực hiện theo quy định tại Điều 21, Điều 40 Th&ocirc;ng tư n&agrave;y&rdquo;. - Ngo&agrave;i ra, khoản 2 Điều 43 Th&ocirc;ng tư 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu quy địnhđiều kiện người nộp thuế được bảo l&atilde;nh như sau: &ldquo;a) Điều kiện người nộp thuế được &aacute;p dụng bảo l&atilde;nh: a.1) Người nộp thuế c&oacute; hoạt động xuất khẩu, nhập khẩu tối thiểu 365 ng&agrave;y t&iacute;nh đến ng&agrave;y đăng k&yacute; tờ khai hải quan cho l&ocirc; h&agrave;ng xuất khẩu, nhập khẩu. Trong thời gian 365 ng&agrave;y trở về trước kể từ ng&agrave;y đăng k&yacute; tờ khai hải quan cho l&ocirc; h&agrave;ng xuất khẩu, nhập khẩu được cơ quan hải quan x&aacute;c định l&agrave;: a.1.1) Kh&ocirc;ng c&oacute; trong danh s&aacute;ch đ&atilde; bị xử l&yacute; về h&agrave;nh vi bu&ocirc;n lậu, vận chuyển tr&aacute;i ph&eacute;p h&agrave;ng ho&aacute; qua bi&ecirc;n giới của cơ quan hải quan; a.1.2) Kh&ocirc;ng c&oacute; trong danh s&aacute;ch đ&atilde; bị xử l&yacute; về h&agrave;nh vi trốn thuế, gian lận thuế của cơ quan hải quan; a.1.3) Kh&ocirc;ng qu&aacute; hai lần bị xử l&yacute; về c&aacute;c h&agrave;nh vi vi phạm kh&aacute;c về hải quan (bao gồm cả h&agrave;nh vi khai sai dẫn đến thiếu số tiền thuế phải nộp hoặc tăng số tiền thuế được miễn, giảm, ho&agrave;n, kh&ocirc;ng thu) với mức phạt tiền vượt thẩm quyền của Chi cục trưởng Chi cục Hải quan theo quy định của Luật Xử l&yacute; vi phạm h&agrave;nh ch&iacute;nh. a.2) Kh&ocirc;ng c&oacute; trong danh s&aacute;ch c&ograve;n nợ tiền thuế qu&aacute; hạn, tiền chậm nộp, tiền phạt tại thời điểm đăng k&yacute; tờ khai hải quan&hellip;&rdquo;. Căn cứ c&aacute;c quy định n&ecirc;u tr&ecirc;n, C&ocirc;ng ty phải nộp thuế (nếu c&oacute;) trước khi ho&agrave;n th&agrave;nh thủ tục hải quan h&agrave;ng tạm nhập; trường hợp C&ocirc;ng ty chưa nộp thuế, nếu C&ocirc;ng ty đ&aacute;p ứng điều kiện được bảo l&atilde;nh v&agrave; C&ocirc;ng ty được tổ chức t&iacute;n dụng bảo l&atilde;nh số tiền thuế phải nộp th&igrave; thời hạn nộp thuế theo thời hạn bảo l&atilde;nh nhưng kh&ocirc;ng qu&aacute; mười lăm ng&agrave;y, kể từ ng&agrave;y hết thời hạn tạm nhập, t&aacute;i xuất v&agrave; kh&ocirc;ng phải nộp tiền chậm nộp trong thời hạn bảo l&atilde;nh; trường hợp C&ocirc;ng ty t&aacute;i xuất h&agrave;ng h&oacute;a ngo&agrave;i thời hạn bảo l&atilde;nh th&igrave; phải nộp tiền chậm nộp kể từ ng&agrave;y hết thời hạn bảo l&atilde;nh đến ng&agrave;y t&aacute;i xuất hoặc đến ng&agrave;y thực nộp thuế (nếu ng&agrave;y thực nộp thuế trước ng&agrave;y thực t&aacute;i xuất). C&ocirc;ng ty c&oacute; thể tham khảo th&ocirc;ng tin v&agrave; c&aacute;c văn bản tr&ecirc;n tại mục THƯ VIỆN VĂN BẢN tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ:&nbsp;<a href="http://www.customs.gov.vn/">www.customs.gov.vn</a>&nbsp;để biết th&ocirc;ng tin chi tiết. Trường hợp cần biết chi tiết hơn, th&igrave; C&ocirc;ng ty c&oacute; thể li&ecirc;n hệ với Chi cục Hải quan địa phương nơi mở tờ khai nhập khẩu h&agrave;ng ho&aacute; để được hướng dẫn cụ thể. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để C&ocirc;ng ty biết./. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Hỏi về ch&iacute;nh s&aacute;ch thuế VAT đối với mặt h&agrave;ng tạm nhập t&aacute;i xuất l&agrave; kho&aacute;ng sản bao gồm c&aacute;c loại hợp kim Fero, hợp kim antimon... C&ocirc;ng ty ch&uacute;ng t&ocirc;i kinh doanh tạm nhập t&aacute;i xuất c&aacute;c mặt h&agrave;ng kho&aacute;ng sản l&agrave; c&aacute;c loại hợp kim Fero, hợp kim Antimon..... d&ugrave;ng trong c&ocirc;ng nghiệp luyện kim. C&aacute;c mặt h&agrave;ng n&agrave;y kh&ocirc;ng chịu thuế nhập khẩu hoặc thuế suất NK l&agrave; 0% v&agrave; chỉ phải tạm nộp thuế VAT trước khi l&agrave;m thủ tục th&ocirc;ng quan. C&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; c&acirc;u hỏi như sau : 1. Đối với sắc thuế VAT phải nộp c&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; thể thay thế bằng bảo l&atilde;nh thuế của Ng&acirc;n hang hay kh&ocirc;ng? 2. Nếu được ph&eacute;p ph&aacute;t h&agrave;nh bảo l&atilde;nh thay thế th&igrave; ch&uacute;ng t&ocirc;i c&oacute; bị t&iacute;nh phạt chậm nộp tiền thuế trong thời gian bảo l&atilde;nh hay kh&ocirc;ng?</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty Nam Phương</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=67" onclick="GoToLink(this);return false;" target="_self">cty TNHH Brenntag Việt Nam<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời c&acirc;u hỏi của C&ocirc;ng ty, Bộ phận tư vấn của Ban Bi&ecirc;n tập c&oacute; &yacute; kiến trao đổi như sau: - Điều 20 Th&ocirc;ng tư 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu quy định: &ldquo;1. C&aacute;c trường hợp khai bổ sung: a) Người khai hải quan được khai bổ sung hồ sơ hải quan sau khi Hệ thống ph&acirc;n luồng tờ khai nhưng trước thời điểm cơ quan hải quan thực hiện việc kiểm tra trực tiếp hồ sơ hải quan; b) Người khai hải quan, người nộp thuế x&aacute;c định c&oacute; sai s&oacute;t trong việc khai hải quan th&igrave; được khai bổ sung hồ sơ hải quan trong thời hạn 60 ng&agrave;y kể từ ng&agrave;y th&ocirc;ng quan nhưng trước thời điểm cơ quan hải quan quyết định kiểm tra sau th&ocirc;ng quan, thanh tra; c) Người khai hải quan, người nộp thuế ph&aacute;t hiện sai s&oacute;t trong việc khai hải quan sau thời điểm cơ quan hải quan kiểm tra hồ sơ, kiểm tra thực tế h&agrave;ng h&oacute;a nhưng trước khi th&ocirc;ng quan th&igrave; thực hiện khai bổ sung v&agrave; bị xử l&yacute; theo quy định của ph&aacute;p luật về thuế, ph&aacute;p luật về xử l&yacute; vi phạm h&agrave;nh ch&iacute;nh; d) Qu&aacute; thời hạn 60 ng&agrave;y kể từ ng&agrave;y th&ocirc;ng quan hoặc sau khi cơ quan hải quan quyết định kiểm tra sau th&ocirc;ng quan, thanh tra, người khai hải quan, người nộp thuế mới ph&aacute;t hiện sai s&oacute;t trong việc khai hải quan th&igrave; thực hiện khai bổ sung v&agrave; bị xử l&yacute; theo quy định của ph&aacute;p luật về thuế, ph&aacute;p luật về xử l&yacute; vi phạm h&agrave;nh ch&iacute;nh; đ) Người khai hải quan thực hiện khai bổ sung theo y&ecirc;u cầu của cơ quan hải quan khi kiểm tra hồ sơ, kiểm tra thực tế h&agrave;ng h&oacute;a v&agrave; bị xử l&yacute; theo quy định của ph&aacute;p luật về thuế, ph&aacute;p luật về xử l&yacute; vi phạm h&agrave;nh ch&iacute;nh. Việc khai bổ sung theo quy định tại điểm b, điểm d khoản n&agrave;y chỉ được thực hiện đối với h&agrave;ng h&oacute;a xuất nhập khẩu kh&ocirc;ng thuộc Danh mục h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu thuộc đối tượng quản l&yacute; chuy&ecirc;n ng&agrave;nh, Danh mục h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu theo giấy ph&eacute;p, Danh mục h&agrave;ng h&oacute;a cấm xuất khẩu, cấm nhập khẩu, Danh mục h&agrave;ng h&oacute;a tạm ngừng xuất khẩu, tạm ngừng nhập khẩu&hellip;&rdquo;. - Theo quy định tại khoản 2 Điều 26 Th&ocirc;ng tư 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu quy định: &ldquo;a) Người khai hải quan nộp chứng từ chứng nhận xuất xứ h&agrave;ng h&oacute;a nhập khẩu cho cơ quan hải quan theo quy định tại điểm g khoản 2 Điều 16 Th&ocirc;ng tư n&agrave;y tại thời điểm nộp bộ hồ sơ hải quan hoặc trong thời hạn theo quy định tại c&aacute;c Điều ước quốc tế m&agrave; Việt Nam l&agrave; th&agrave;nh vi&ecirc;n. Trường hợp chưa nộp được chứng từ chứng nhận xuất xứ tại thời điểm khai hải quan, người khai hải quan khai theo mức thuế suất thuế nhập khẩu ưu đ&atilde;i tối huệ quốc (sau đ&acirc;y gọi tắt l&agrave; thuế suất MFN) hoặc th&ocirc;ng thường. Khi nộp bổ sung chứng từ chứng nhận xuất xứ trong thời hạn theo quy định, người khai hải quan bổ sung theo mức thuế ưu đ&atilde;i đặc biệt&hellip;&rdquo;. Căn cứ quy định n&ecirc;u tr&ecirc;n th&igrave; Chứng từ chứng nhận xuất xứ h&agrave;ng h&oacute;a nhập khẩu được nộp tại thời điểm nộp bộ hồ sơ hải quan hoặc trong thời hạn theo quy định tại c&aacute;c Điều ước quốc tế m&agrave; Việt Nam l&agrave; th&agrave;nh vi&ecirc;n; trường hợp chưa nộp được chứng từ chứng nhận xuất xứ tại thời điểm khai hải quan, người khai hải quan khai theo mức thuế suất nhập khẩu ưu đ&atilde;i tối huệ quốc hoặc th&ocirc;ng thường; khi nộp bổ sung trong thời hạn quy định th&igrave; C&ocirc;ng ty sẽ được hưởng mức thuế ưu đ&atilde;i đặc biệt. Trường hợp của C&ocirc;ng ty kh&ocirc;ng thuộc trường hợp sai s&oacute;t trong việc k&ecirc; khai hải quan, phải khai bổ sung theo quy định Điều 20 Th&ocirc;ng tư số 38/2015/TT-BTC n&ecirc;u tr&ecirc;n. Do đ&oacute;, trường hợp C&ocirc;ng ty nộp bổ sung chứng từ chứng nhận xuất xứ h&agrave;ng h&oacute;a đảm bảo thời hạn theo quy định để được hưởng mức thuế ưu đ&atilde;i đặc biệt nhưng qu&aacute; thời hạn quy định về khai bổ sung, C&ocirc;ng ty sẽ kh&ocirc;ng bị xử phạt vi phạm h&agrave;nh ch&iacute;nh về h&agrave;nh vi khai bổ sung qu&aacute; thời hạn quy định. C&ocirc;ng ty c&oacute; thể tham khảo th&ocirc;ng tin v&agrave; c&aacute;c văn bản tr&ecirc;n tại mục THƯ VIỆN VĂN BẢN tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ:&nbsp;<a href="http://www.customs.gov.vn/">www.customs.gov.vn</a>&nbsp;để biết th&ocirc;ng tin chi tiết. Trường hợp cần biết chi tiết hơn, th&igrave; C&ocirc;ng ty c&oacute; thể li&ecirc;n hệ với Chi cục Hải quan địa phương nơi mở tờ khai nhập khẩu h&agrave;ng ho&aacute; để được hướng dẫn cụ thể. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để C&ocirc;ng ty biết./. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Khai bổ sung tờ khai do bổ sung C/O Hiện nay c&ocirc;ng ty ch&uacute;ng t&ocirc;i đang bị vướng mắc về việc khai bồ sung tờ khai do bồ sung C/O ở một số Chi Cục tại TPHCM. C&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; mở 1 tờ khai v&agrave;o ng&agrave;y 31/8/2015 phần ghi ch&uacute; c&oacute; ghi th&ocirc;ng tin nợ C/O Ng&agrave;y 5/10/2015 ph&iacute;a kh&aacute;ch h&agrave;ng mới gữi bộ C/O cho c&ocirc;ng ty ch&uacute;ng t&ocirc;i để tiến h&agrave;nh nộp C/O v&agrave; khai bồ sung cho tờ khai n&agrave;y. Căn cứ theo Điều 26, khoản 2 điểm a Th&ocirc;ng tư 38/2015/TT-BTC ng&agrave;y 25/3/2015 n&ecirc;u r&otilde; : Trường hợp chưa nộp được giấy chứng nhận xuất xứ (C/O ) tại thời điểm khai HQ th&igrave; khai theo mức thuế suất MFN hoặc thuế suất th&ocirc;ng thường, khi nộp bổ sung giấy chứng nhận xuất xứ (C/O ) trong thời hạn quy định.Căn cứ theo Nghị định 19/2006/NĐ-CP ng&agrave;y 20/2/2006 v&agrave; c&aacute;c th&ocirc;ng tư hướng đẫn của Bộ C&ocirc;ng Thương về thực hiện quy tắc xuất xứ ưu đ&atilde;i v&agrave; kh&ocirc;ng ưu đải th&igrave; Hiệu lực của C/O l&agrave; 1 năm t&iacute;nh từ ng&agrave;y giao h&agrave;ng ( ng&agrave;y t&agrave;u khởi h&agrave;nh ) tuy nhi&ecirc;n tại Điều 20 khoản 1 điểm d Th&ocirc;ng tư 38/2015/TT-BTC ng&agrave;y 25/3/2015 c&oacute; quy định c&aacute;c trường hộp khai bồ sung nếu qu&aacute; 60 ng&agrave;y th&igrave; bị lập bi&ecirc;n bản v&agrave; phạt vi phạm h&agrave;nh ch&iacute;nh, m&agrave; việc khai bổ sung n&agrave;y của c&ocirc;ng ty ch&uacute;ng t&ocirc;i kh&ocirc;ng phải do lỗi sai s&oacute;t ph&aacute;t hiện ra m&agrave; c&ocirc;ng ty thưc hiện khai b&aacute;o theo đ&uacute;ng quy định hướng dẫn của BTC. Căn cứ theo Điều 5 Nghị định 127/2013/NĐ-CP ng&agrave;y 15/10/2013 Nghị định quy định xử phạt vi phạm h&agrave;nh ch&iacute;nh v&agrave; cưỡng chế thi h&agrave;nh quyết định trongb lĩnh vực HQ, th&igrave; những trường hợp kh&ocirc;ng xử phạt vi phạm h&agrave;nh ch&iacute;nh trong lĩnh vực HQ tại khoản 3 l&aacute; C&aacute;c trường hợp được sửa chữa , khai bổ sung theo quy định. như vậy trường hợp của c&ocirc;ng ty em nộp bổ sung C/O trong thời hạn quy định n&ecirc;u tr&ecirc;n c&oacute; bị lập bi&ecirc;n bản v&agrave; phạt vi phạm h&agrave;nh ch&iacute;nh theo Điều 20 khoản 1 điểm d Th&ocirc;ng tư 38/2015/TT-BTCkh&ocirc;ng, K&iacute;nh nhờ anh chị tư vấn v&agrave; hướng dẫn để c&ocirc;ng ty được biết v&agrave; thưc hiện.</p>
        </td>
        <td>&nbsp;</td>
        <td>Phạm Đức Đ&ocirc;ng</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=68" onclick="GoToLink(this);return false;" target="_self">Ch&acirc;u Hiển Linh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban Bi&ecirc;n tập c&oacute; &yacute; kiến trao đổi như sau: Muốn biết mức thuế phải nộp, trước hết phải x&aacute;c định được m&atilde; số HS chi tiết của h&agrave;ng h&oacute;a. Về m&atilde; số HS: Để x&aacute;c định chi tiết m&atilde; HS của một mặt h&agrave;ng phải căn cứ v&agrave;o t&iacute;nh chất, th&agrave;nh phần cấu tạo, &hellip; của h&agrave;ng h&oacute;a thực tế nhập khẩu. Theo Danh mục h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu Việt Nam ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 01/7/2015 của Bộ trưởng Bộ T&agrave;i ch&iacute;nh th&igrave;: * M&atilde; số HS 8466.94.00 d&ugrave;ng để ph&acirc;n loại cho những mặt h&agrave;ng l&agrave;: Bộ phận v&agrave; phụ kiện chỉ d&ugrave;ng hay chủ yếu d&ugrave;ng với c&aacute;c m&aacute;y thuộc nh&oacute;m 84.62 hoặc 84.63, kể cả bộ phận kẹp sản phẩm hay kẹp dụng cụ, đầu cắt ren tự mở, đầu chia độ v&agrave; những bộ phận phụ trợ chuy&ecirc;n d&ugrave;ng kh&aacute;c d&ugrave;ng cho c&aacute;c m&aacute;y c&ocirc;ng cụ; bộ phận kẹp dụng cụ d&ugrave;ng cho mọi loại dụng cụ cầm tay; * Ph&acirc;n nh&oacute;m 8536.90: - M&atilde; số HS 8536.90.12 d&ugrave;ng để ph&acirc;n loại cho những mặt h&agrave;ng l&agrave;: Đầu nối v&agrave; c&aacute;c bộ phận d&ugrave;ng để nối cho d&acirc;y dẫn v&agrave; c&aacute;p; đầu d&ograve; dẹt dưới dạng miếng l&aacute;t nhiều lớp (wafer prober), c&oacute; giới hạn d&ograve;ng danh định kh&ocirc;ng qu&aacute; 16 A; - M&atilde; số HS 8536.90.19 d&ugrave;ng để ph&acirc;n loại cho những mặt h&agrave;ng l&agrave;: Đầu nối v&agrave; c&aacute;c bộ phận d&ugrave;ng để nối cho d&acirc;y dẫn v&agrave; c&aacute;p; đầu d&ograve; dẹt dưới dạng miếng l&aacute;t nhiều lớp (wafer prober), trừ loại c&oacute; giới hạn d&ograve;ng danh định kh&ocirc;ng qu&aacute; 16 A; - M&atilde; số HS 8536.90.21 d&ugrave;ng để ph&acirc;n loại cho những mặt h&agrave;ng l&agrave;: Hộp đấu nối, c&oacute; giới hạn d&ograve;ng danh định kh&ocirc;ng qu&aacute; 16 A; - M&atilde; số HS 8536.90.29 d&ugrave;ng để ph&acirc;n loại cho những mặt h&agrave;ng l&agrave;: Hộp đấu nối, trừ loại c&oacute; giới hạn d&ograve;ng danh định kh&ocirc;ng qu&aacute; 16 A; * Nh&oacute;m 82.03 &ldquo;Giũa, nạo, k&igrave;m (kể cả k&igrave;m cắt), panh, nh&iacute;p, lưỡi cắt kim loại, dụng cụ cắt ống, x&eacute;n bu l&ocirc;ng, khoan v&agrave; c&aacute;c dụng cụ cầm tay tương tự&rdquo; Theo ch&uacute; giải chi tiết nh&oacute;m th&igrave;: &ldquo;Nh&oacute;m n&agrave;y bao gồm c&aacute;c dụng cụ c&oacute; tay cầm như sau: A- Giữa, k&igrave;m v&agrave; c&aacute;c dụng cụ tương tự (kể cả k&igrave;m, giũa đ&atilde; kết hợp) c&oacute; c&aacute;c kiểu h&igrave;nh dạng (phẳng, tr&ograve;n, nửa tr&ograve;n, vu&ocirc;ng, h&igrave;nh tam gi&aacute;c, h&igrave;nh tr&aacute;i xoan...) v&agrave; c&oacute; tất cả c&aacute;c cỡ c&aacute;c chất liệu kim loại, gỗ hoặc kh&aacute;c. B- K&igrave;m (kể cả k&igrave;m cắt) nh&iacute;p v&agrave; dụng cụ tương tự kể cả 1- K&igrave;m (v&iacute; dụ: k&igrave;m kẹp ch&igrave; ni&ecirc;m phong, k&igrave;m đ&aacute;nh dấu tai cừu v&agrave; đ&aacute;nh dấu c&aacute;c động vật kh&aacute;c, k&igrave;m kẹp ống ga, k&igrave;m lồng hoặc r&uacute;t chốt h&atilde;m, k&igrave;m mắt nhỏ (lỗ s&acirc;u) v&agrave; k&igrave;m lỗ x&acirc;u đ&oacute;ng, bộ cưa kiểu k&igrave;m). 2- Kẹp (v&iacute; dụ: kẹp d&ugrave;ng cho thợ đ&oacute;ng m&oacute;ng ngựa v&agrave; kẹp d&ugrave;ng cho thợ r&egrave;n). 3- Nh&iacute;p (v&iacute; dụ: nh&iacute;p cho thợ sửa đồng hồ, người trồng hoa, người sưu tầm tem, nh&iacute;p l&ocirc;ng,...) 4- K&igrave;m nhổ định (kiểu kẹp, l&agrave;m việc theo nguy&ecirc;n tắc cặp nhỏ) C- K&igrave;m cắt kim loại v&agrave; c&aacute;c dụng cụ tương tự, kể cả k&igrave;m cắt t&ocirc;n của thợ thiếc v&agrave; c&aacute;c k&igrave;m cắt tấm kim loại hoặc d&acirc;y th&eacute;p.&rdquo; * Ph&acirc;n nh&oacute;m 7326.20: - M&atilde; số HS 7326.20.50 d&ugrave;ng để ph&acirc;n loại cho những mặt h&agrave;ng l&agrave;: Lồng nu&ocirc;i gia cầm v&agrave; loại tương tự, bằng d&acirc;y sắt hoặc th&eacute;p. - M&atilde; số HS 7326.20.90 d&ugrave;ng để ph&acirc;n loại cho những mặt h&agrave;ng l&agrave;: c&aacute;c sản phẩm bằng d&acirc;y sắt hoặc th&eacute;p, trừ lồng nu&ocirc;i gia cầm v&agrave; loại tương tự * Nh&oacute;m 39.26 d&ugrave;ng để ph&acirc;n loại cho những mặt h&agrave;ng l&agrave; &ldquo;Sản phẩm kh&aacute;c bằng plastic v&agrave; c&aacute;c sản phẩm bằng c&aacute;c vật liệu kh&aacute;c của c&aacute;c nh&oacute;m từ 39.01 đến 39.14&rdquo;. Đối với mặt h&agrave;ng l&agrave; d&acirc;y r&uacute;t nhựa, t&ugrave;y theo th&agrave;nh phần cấu tạo của h&agrave;ng h&oacute;a thực tế nhập khẩu, bạn đọc c&oacute; thể tham khảo nh&oacute;m n&agrave;y, m&atilde; số HS 3926.90.99. Trường hợp h&agrave;ng h&oacute;a l&agrave;m từ c&aacute;c loại sợi từ chương 50 đến chương 55 th&igrave; c&oacute; thể ph&acirc;n loại v&agrave;o m&atilde; HS 5609.00.00. Đề nghị bạn đọc căn cứ v&agrave;o thực tế t&iacute;nh chất, th&agrave;nh phần cấu tạo,&hellip; của h&agrave;ng h&oacute;a m&agrave; m&igrave;nh nhập khẩu v&agrave; &aacute;p dụng s&aacute;u (6) quy tắc tổng qu&aacute;t giải th&iacute;ch việc ph&acirc;n loại h&agrave;ng h&oacute;a theo Danh mục h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu Việt Nam tại Phụ lục II ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 01/7/2015 của Bộ trưởng Bộ T&agrave;i ch&iacute;nh để x&aacute;c định m&atilde; HS chi tiết ph&ugrave; hợp với thực tế. Để x&aacute;c định ch&iacute;nh x&aacute;c m&atilde; số h&agrave;ng h&oacute;a xuất nhập khẩu, trước khi l&agrave;m thủ tục hải quan, bạn c&oacute; thể đề nghị x&aacute;c định trước m&atilde; số h&agrave;ng h&oacute;a theo quy định tại Điều 7 Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh &ldquo;Quy định thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu&rdquo;. Về thuế nhập khẩu: + Đối với h&agrave;ng h&oacute;a c&oacute; xuất xứ Trung Quốc: nếu h&agrave;ng h&oacute;a nhập khẩu đ&aacute;p ứng điều kiện quy định tại Th&ocirc;ng tư số 166/2014/TT-BTC ng&agrave;y 14/11/2014 &ldquo;ban h&agrave;nh Biểu thuế nhập khẩu ưu đ&atilde;i đặc biệt của Việt Nam để thực hiện Hiệp định Thương mại h&agrave;ng h&oacute;a ASEAN - Trung Quốc giai đoạn 2015-2018&rdquo;, th&igrave; được &aacute;p dụng mức thuế theo quy định tại Biểu thuế ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư n&agrave;y. + Đối với h&agrave;ng h&oacute;a c&oacute; xuất xứ từ Th&aacute;i Lan: nếu h&agrave;ng h&oacute;a đ&aacute;p ứng c&aacute;c quy định tại Th&ocirc;ng tư số 165/2014/TT-BTC ng&agrave;y 14/11/2014 của Bộ T&agrave;i ch&iacute;nh ban h&agrave;nh Biểu thuế nhập khẩu ưu đ&atilde;i đặc biệt của Việt Nam để thực hiện Hiệp định thương mại h&agrave;ng h&oacute;a ASEAN giai đoạn 2015-2018, th&igrave; &aacute;p dụng mức thuế quy định tại Biểu thuế ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư n&agrave;y. + Đối với h&agrave;ng h&oacute;a c&oacute; xuất xứ từ Đ&agrave;i Loan v&agrave; h&agrave;ng xuất xứ Trung Quốc, Th&aacute;i Lan kh&ocirc;ng đ&aacute;p ứng một trong c&aacute;c điều kiện quy định tại Th&ocirc;ng tư số 166/2014/TT-BTC, Th&ocirc;ng tư số 165/2014/TT-BTC: &aacute;p dụng mức thuế theo quy định tại Biểu thuế nhập khẩu nhập khẩu ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 164/2013/TT-BTC ng&agrave;y 15/11/2013 của Bộ T&agrave;i ch&iacute;nh. Đề nghị bạn đọc căn cứ quy định n&ecirc;u tr&ecirc;n v&agrave; li&ecirc;n hệ trực tiếp với cơ quan hải quan nơi dự kiến mở tờ khai để được giải đ&aacute;p cụ thể. Bạn c&oacute; thể t&igrave;m nội dung văn bản n&agrave;y ở mục VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết./. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Hỏi về thuế c&aacute;c linh kiện điện c&ocirc;ng nghiệp C&ocirc;ng ty ch&uacute;ng t&ocirc;i l&agrave; c&ocirc;ng ty TNHH TM , chuy&ecirc;n nhập khẩu đầu cốt điện ( đầu nối d&acirc;y điện ) v&agrave; d&acirc;y r&uacute;t nhựa v&agrave; d&acirc;y r&uacute;t inox, Cho t&ocirc;i hỏi về thuế nhập khẩu linh kiện điện c&ocirc;ng nghiệp nhập khẩu từ 3 nước: TH&Aacute;I LAN , TRUNG QUỐC, Đ&Agrave;I LOAN . T&ocirc;i c&oacute; tra m&atilde; HS nhưng kh&ocirc;ng thấy ghi r&otilde; sản phẩm. M&atilde; HS c&aacute;c sản phẩm b&ecirc;n t&ocirc;i + Crimping Machine: 8466.94.00.00-8 + Terminals ( đầu nối điện ): 8536.90.20.00-4 + Tool ( kềm bấm đầu nối điện ): 8205.59.90.90-9 + Stainless Steel Tie ( d&acirc;y r&uacute;t inox ): 7326.20.00.00-9 + Nylon cable tie ( d&acirc;y r&uacute;t nhựa ): 5609.00.40</p>
        </td>
        <td>&nbsp;</td>
        <td>Ch&acirc;u Hiển Linh</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=69" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH SX&amp;KD Nguy&ecirc;n H&ugrave;ng<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Về vấn đề n&agrave;y Bảo hiểm x&atilde; hội tỉnh H&agrave; Tĩnh trả lời như sau: Theo quy định tại tiết đ, khoản 1, Điều 62 Quyết định số 1111/QĐ-BHXH ng&agrave;y 25/10/2011 của Bảo hiểm x&atilde; hội Việt Nam; Quy định tại Điểm b, Khoản 2 c&ocirc;ng văn số 2266/BHXH-BT ng&agrave;y 20/6/2013 của BHXH Việt Nam: &ldquo;Đối với doanh nghiệp thực sự gặp kh&oacute; khăn nợ BHXH, BHYT, nếu Gi&aacute;m đốc doanh nghiệp c&oacute; văn bản gửi cơ quan BHXH cam kết trả đủ tiền nợ BHXH, BHYT v&agrave; thực hiện đ&oacute;ng trước BHXH, BHYT đối với người lao động đủ điều kiện hưởng chế độ BHXH, người lao động th&ocirc;i việc để giải quyết chế độ BHXH v&agrave; chốt sổ BHXH th&igrave; Gi&aacute;m đốc BHXH tỉnh xem x&eacute;t phối hợp với Sở Lao động &ndash; Thương binh v&agrave; X&atilde; hội x&aacute;c nhận thực trạng kh&oacute; khăn của doanh nghiệp để giải quyết&rdquo;. Để c&oacute; cơ sở chốt sổ BHXH đề nghị &ocirc;ng phải li&ecirc;n hệ c&ocirc;ng ty cũ trước đ&acirc;y đ&atilde; c&ocirc;ng t&aacute;c để y&ecirc;u cầu đơn vị l&agrave;m văn bản theo quy định gửi cơ quan Bảo hiểm x&atilde; hội để chốt sổ BHXH đến thời điểm &ocirc;ng đ&oacute;ng nộp BHXH, BHYT. Ch&uacute;c &ocirc;ng sức khỏe./.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Bảo hiểm x&atilde; hội tỉnh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Bảo hiểm x&atilde; hội tỉnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:vanphongbhxhhatinh@gmail.com">vanphongbhxhhatinh@gmail.com</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Thủ tục cắt, chuyển đ&oacute;ng bảo hiểm: T&ocirc;i đang đ&oacute;ng BHXH ở một c&ocirc;ng ty, nhưng c&ocirc;ng ty đ&oacute; hiện nay đang nợ đọng BHXH. Hiện nay t&ocirc;i đ&atilde; nghỉ việc b&ecirc;n c&ocirc;ng ty đ&oacute; v&agrave; l&agrave;m việc ở c&ocirc;ng ty kh&aacute;c. Vậy t&ocirc;i c&oacute; thể cắt BHXH ở c&ocirc;ng ty cũ để nhập đ&oacute;ng ở c&ocirc;ng ty mới khi c&ocirc;ng ty cũ đang nợ bảo hiểm kh&ocirc;ng?</p>
        </td>
        <td><a href="mailto:hatrang200286@gmail.com">hatrang200286@gmail.com</a></td>
        <td>Đặng Xu&acirc;n H&ugrave;ng</td>
        <td>DN</td>
        <td>public</td>
        <td>0976746999</td>
        <td>28</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=70" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty cổ phần đầu tư v&agrave; x&acirc;y dựng Ng&agrave;n Phố<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Khối 4- thị trấn Phố Ch&acirc;u</td>
        <td>
            <p>Sở N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n H&agrave; Tĩnh trả lời như sau: 1. X&eacute;t đề nghị của Ủy ban nh&acirc;n d&acirc;n huyện Vũ Quang tại Văn bản số 908/UBND ng&agrave;y 30/12/2014, tuy địa điểm do UBND huyện đề xuất x&acirc;y dựng trang trại chăn nu&ocirc;i lợn n&aacute;i cấp bố mẹ c&oacute; khoảng c&aacute;ch từ trang trại đến khu d&acirc;n cư kh&ocirc;ng đảm bảo y&ecirc;u cầu theo quy định để đưa v&agrave;o Quy hoạch ph&aacute;t triển trang trại, v&ugrave;ng trang trại chăn nu&ocirc;i lợn tập trung c&ocirc;ng nghiệp H&agrave; Tĩnh đến năm 2020 (Sở N&ocirc;ng nghiệp v&agrave; PTNT c&oacute; văn bản số 5357/SNN-TY ng&agrave;y 29/12/2014), nhưng để đ&aacute;p ứng nhu cầu cung cấp con giống cho c&aacute;c cơ sở chăn nu&ocirc;i quy m&ocirc; vừa v&agrave; nhỏ tr&ecirc;n địa b&agrave;n huyện Vũ Quang, Ủy ban nh&acirc;n d&acirc;n tỉnh đồng &yacute; cho ph&eacute;p UBND huyện Vũ Quang được x&acirc;y dựng trang trại chăn nu&ocirc;i lợn n&aacute;i cấp bố mẹ tại khu vực khe C&acirc;y S&ocirc;ng, th&ocirc;n Hợp L&yacute;, x&atilde; Hương Minh tại Văn bản số 503/UBND-NL1 ng&agrave;y 30/01/2015, với điều kiện UBND huyện Vũ Quang phải c&oacute; cam kết v&agrave; chịu tr&aacute;ch nhiệm về c&aacute;c giải ph&aacute;p đảm bảo m&ocirc;i trường theo quy định; trường hợp kh&ocirc;ng đ&aacute;p ứng c&aacute;c y&ecirc;u cầu về m&ocirc;i trường phải c&oacute; biện ph&aacute;p xử l&yacute; kịp thời, đảm bảo việc chăn nu&ocirc;i kh&ocirc;ng l&agrave;m ảnh hưởng đến sản xuất, đời sống sinh hoạt v&agrave; m&ocirc;i trường trong v&ugrave;ng, nếu để xảy ra vi phạm về m&ocirc;i trường th&igrave; Chủ tịch UBND huyện chịu tr&aacute;ch nhiệm trước nh&acirc;n d&acirc;n v&agrave; Chủ tịch UBND tỉnh. Do vậy, đối chiếu với Khoản 1, Điều 18 Nghị quyết số 90/2014/NQ-HĐND ng&agrave;y 16/7/2014 của Hội đồng nh&acirc;n d&acirc;n tỉnh Ban h&agrave;nh Quy định một số ch&iacute;nh s&aacute;ch khuyến kh&iacute;ch ph&aacute;t triển n&ocirc;ng nghiệp, n&ocirc;ng th&ocirc;n thực hiện T&aacute;i cơ cấu ng&agrave;nh n&ocirc;ng nghiệp H&agrave; Tĩnh theo hướng n&acirc;ng cao gi&aacute; trị gia tăng v&agrave; ph&aacute;t triển bền vững, gắn với x&acirc;y dựng n&ocirc;ng th&ocirc;n mới v&agrave; Điểm a, Khoản 1, Điều 21 Quyết định số 67/2014/QĐ-UBND ng&agrave;y 10/10/2014 của Ủy ban nh&acirc;n d&acirc;n tỉnh về việc ban h&agrave;nh Quy định thực hiện một số ch&iacute;nh s&aacute;ch khuyến kh&iacute;ch ph&aacute;t triển n&ocirc;ng nghiệp, n&ocirc;ng th&ocirc;n thực hiện t&aacute;i cơ cấu ng&agrave;nh n&ocirc;ng nghiệp H&agrave; Tĩnh theo hướng n&acirc;ng cao gi&aacute; trị gia tăng v&agrave; ph&aacute;t triển bền vững gắn với x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, th&igrave; cơ sở n&aacute;i cấp bố mẹ x&acirc;y dựng tại th&ocirc;n Hợp L&yacute;, x&atilde; Hương Minh kh&ocirc;ng thuộc đối tượng được hưởng ch&iacute;nh s&aacute;ch hỗ trợ. Tuy nhi&ecirc;n, t&ugrave;y v&agrave;o điều kiện cụ thể của cơ sở cung cấp giống cho c&aacute;c x&atilde; miền n&uacute;i, UBND huyện Vũ Quang tr&igrave;nh UBND tỉnh xem x&eacute;t về chủ trương được hưởng đặc th&ugrave; ch&iacute;nh s&aacute;ch theo Nghị quyết số 90/2014/NQ-HĐND ng&agrave;y 16/7/2014 của HĐND tỉnh v&agrave; Quyết định số 67/2014/QĐ-UBND ng&agrave;y 10/10/2014 của UBND tỉnh</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Tuấn Thanh &quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sonongnghiep@hatinh.gov.vn">sonongnghiep@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Hỏi về ưu đ&atilde;i trang trại nu&ocirc;i lợn n&aacute;i? Trại lợn n&aacute;i cấp bố mẹ ở th&ocirc;n Hợp l&yacute; x&atilde; Hương Minh huyện Vũ Quang chưa nằm trong quy hoạch ph&aacute;t triển v&ugrave;ng chăn nu&ocirc;i tập trung c&ocirc;ng nghiệp đến năm 2020, nhưng được UBND tỉnh đồng &yacute; cho ph&eacute;p UBND huyện Vũ Quang x&acirc;y dựng trại lợn n&aacute;i tại c&ocirc;ng văn số 503UBND- NL1 ng&agrave;y 30/1/2015 th&igrave; c&oacute; được hưởng c&aacute;c chế độ ch&iacute;nh s&aacute;ch tại nghị quyết số 90- 2014 ng&agrave;y 16/7/2014 của HĐND tỉnh hay kh&ocirc;ng?</p>
        </td>
        <td><a href="mailto:congtynganpho@gmail.com">congtynganpho@gmail.com</a></td>
        <td>C&ocirc;ng ty cổ phần đầu tư v&agrave; x&acirc;y dựng Ng&agrave;n Phố</td>
        <td>DN</td>
        <td>public</td>
        <td>0982875459</td>
        <td>9</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=71" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty cổ phần đầu tư v&agrave; x&acirc;y dựng Ng&agrave;n Phố<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Khối 4- thị trấn Phố Ch&acirc;u</td>
        <td>
            <p>Sở N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n H&agrave; Tĩnh trả lời như sau: 2. Tại Điểm a, Khoản 1, Điều 21 Quyết định số 67/2014/QĐ-UBND ng&agrave;y 10/10/2014 của Ủy ban nh&acirc;n d&acirc;n tỉnh về việc ban h&agrave;nh Quy định thực hiện một số ch&iacute;nh s&aacute;ch khuyến kh&iacute;ch ph&aacute;t triển n&ocirc;ng nghiệp, n&ocirc;ng th&ocirc;n thực hiện t&aacute;i cơ cấu ng&agrave;nh n&ocirc;ng nghiệp H&agrave; Tĩnh theo hướng n&acirc;ng cao gi&aacute; trị gia tăng v&agrave; ph&aacute;t triển bền vững gắn với x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, quy định &lsquo;&lsquo;cơ sở chăn nu&ocirc;i lợn giống ngoại &hellip;, c&oacute; diện t&iacute;ch tối thiểu 3ha ở đồng bằng, 5ha ở miền n&uacute;i; &hellip; &rsquo;&rsquo; ; do vậy c&aacute;c cơ sở chăn nu&ocirc;i ở miền n&uacute;i c&oacute; diện t&iacute;ch tr&ecirc;n 4 ha m&agrave; dưới 5 ha kh&ocirc;ng thuộc đối tưởng được hưởng ch&iacute;nh s&aacute;ch hỗ trợ theo Nghị quyết số 90/2014/NQ-HĐND ng&agrave;y 16/7/2014 v&agrave; Quyết định số 67/2014/QĐ-UBND ng&agrave;y 10/10/2014.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Tuấn Thanh &quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sonongnghiep@hatinh.gov.vn">sonongnghiep@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Diện t&iacute;ch x&acirc;y dựng trại lợn n&aacute;i quy m&ocirc; 300 n&aacute;i trở l&ecirc;n quy định diện t&iacute;ch tối thiểu 3 ha ở đồng bằng, 5 ha ở miền n&uacute;i. Nay trại ở miền n&uacute;i c&oacute; diện t&iacute;ch tr&ecirc;n 4 ha m&agrave; dưới 5 ha th&igrave; c&oacute; được hưởng độ ch&iacute;nh s&aacute;ch tại nghị quyết số 90- 2014 ng&agrave;y 16/7/2014 của HĐND tỉnh hay kh&ocirc;ng?</p>
        </td>
        <td><a href="mailto:congtynganpho@gmail.com">congtynganpho@gmail.com</a></td>
        <td>C&ocirc;ng ty cổ phần đầu tư v&agrave; x&acirc;y dựng Ng&agrave;n Phố</td>
        <td>DN</td>
        <td>public</td>
        <td>0982875459</td>
        <td>9</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=73" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH MASCOT VIET NAM<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>VN</td>
        <td>
            <p>Vướng mắc của doanh nghiệp, Bộ phận tư vấn Ban Bi&ecirc;n tập Cổng Th&ocirc;ng tin điện tử Hải quan c&oacute; &yacute; kiến trao đổi như sau: - Tr&aacute;ch nhiệm của người khai hải quan với thủ tục hải quan đối với h&agrave;ng ho&aacute; xuất kho ngoại quan để xuất ra nước ngo&agrave;i được quy định cụ thể tại Điểm a, Khoản 3, Điều 91 Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ trưởng Bộ T&agrave;i ch&iacute;nh &quot;Quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu&quot;, cụ thể như sau: &ldquo;a.1) Nộp 01 bản chụp Phiếu xuất kho do doanh nghiệp lập theo quy định về ph&aacute;p luật kế to&aacute;n, trong đ&oacute; c&oacute; ghi cụ thể h&agrave;ng h&oacute;a xuất kho của từng tờ khai nhập kho; a.2) Cập nhật th&ocirc;ng tin h&agrave;ng h&oacute;a xuất kho ngoại quan v&agrave;o phần mềm quản l&yacute; h&agrave;ng h&oacute;a nhập, xuất kho ngoại quan của chủ kho ngoại quan v&agrave; gửi đến cơ quan hải quan để quản l&yacute;, theo d&otilde;i a.3) Thực hiện khai vận chuyển độc lập đối với h&agrave;ng h&oacute;a vận chuyển chịu sự gi&aacute;m s&aacute;t hải quan theo quy định tại khoản 1 Điều 51 Th&ocirc;ng tư n&agrave;y.&rdquo;. - Tại Điểm c v&agrave; Điểm d, Điều 91 Th&ocirc;ng tư số 38/2015/TT-BTC n&ecirc;u tr&ecirc;n quy định: &ldquo;c) H&agrave;ng h&oacute;a từ kho ngoại quan đưa ra nước ngo&agrave;i chỉ được xuất qua c&aacute;c cửa khẩu theo quy định của Thủ tướng Ch&iacute;nh phủ v&agrave; hướng dẫn của Bộ C&ocirc;ng Thương; d) H&agrave;ng h&oacute;a từ kho ngoại quan sau khi đưa v&agrave;o khu vực gi&aacute;m s&aacute;t hải quan tại cửa khẩu xuất, Chi cục Hải quan cửa khẩu xuất chịu tr&aacute;ch nhiệm gi&aacute;m s&aacute;t h&agrave;ng h&oacute;a đến khi thực xuất khỏi l&atilde;nh thổ Việt Nam, trường hợp qu&aacute; thời hạn 15 ng&agrave;y kể từ ng&agrave;y h&agrave;ng h&oacute;a đến cửa khẩu xuất nhưng chưa thực xuất hoặc c&oacute; thay đổi cửa khẩu xuất, Chi cục Hải quan cửa khẩu xuất phải th&ocirc;ng b&aacute;o cho Chi cục Hải quan quản l&yacute; kho ngoại quan biết để phối hợp theo d&otilde;i. Ri&ecirc;ng đối với h&agrave;ng h&oacute;a từ kho ngoại quan xuất khẩu qua cửa khẩu bi&ecirc;n giới đường bộ, đường s&ocirc;ng, việc x&aacute;c nhận h&agrave;ng h&oacute;a đ&atilde; qua khu vực gi&aacute;m s&aacute;t qua khu vực cửa khẩu xuất sang nước nhập khẩu.&rdquo; Doanh nghiệp c&oacute; thể tham khảo văn bản tr&ecirc;n tại mục THƯ VIỆN PH&Aacute;P LUẬT tr&ecirc;n Cổng Th&ocirc;ng tin điện tử Hải quan &ndash; Tổng cục Hải quan địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">www.customs.gov.vn</a>&nbsp;hoặc li&ecirc;n hệ với cơ quan Hải quan địa phương để được hỗ trợ. Bộ phận tư vấn Ban Bi&ecirc;n tập Cổng Th&ocirc;ng tin điện tử Hải quan th&ocirc;ng b&aacute;o để doanh nghiệp biết./. Tr&acirc;n trọng.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}</p>
        </td>
        <td>
            <p>Thủ tục hải quan đối với h&agrave;ng ho&aacute; từ kho ngoại quan đưa ra nước ngo&agrave;i v&agrave; theo th&ocirc;ng tư n&agrave;o? Hồ sơ hải quan gồm những g&igrave; ?</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH MASCOT VIET NAM</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=75" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty Hoa Lập<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Số 1 Phạm Ngũ L&atilde;o, Ng&ocirc; Quyền, Hải Ph&ograve;ng</td>
        <td>
            <p>Đầu ti&ecirc;n Sở Khoa học v&agrave; C&ocirc;ng nghệ H&agrave; Tĩnh xin gửi lời cảm ơn đến qu&yacute; độc giả đ&atilde; quan t&acirc;m đến hoạt động khoa học v&agrave; c&ocirc;ng nghệ của tỉnh, nhất l&agrave; hoạt động chuyển giao c&ocirc;ng nghệ m&agrave; cụ thể l&agrave; chuyển giao c&ocirc;ng nghệ sản xuất gạch kh&ocirc;ng nung. Trong những năm gần đ&acirc;y UBND tỉnh H&agrave; Tĩnh đ&atilde; ban h&agrave;nh nhiều chủ trương, ch&iacute;nh s&aacute;ch khuyến kh&iacute;ch c&aacute;c tổ chức, c&aacute; nh&acirc;n v&agrave; doanh nghiệp chuyển giao, đổi mới c&ocirc;ng nghệ sản xuất, chế biến c&aacute;c sản phẩm chủ yếu của tỉnh, trong đ&oacute; c&oacute; ch&iacute;nh s&aacute;ch hỗ trợ đổi mới, chuyển giao c&ocirc;ng nghệ sản xuất gạch kh&ocirc;ng nung; cụ thể về hỗ trợ chuyển giao c&ocirc;ng nghệ sản xuất, chế biến c&aacute;c sản phẩm chủ yếu của tỉnh như sau: 1. Hỗ trợ hoạt động đổi mới, chuyển giao c&ocirc;ng nghệ cho c&aacute;c doanh nghiệp: a) Hỗ trợ kinh ph&iacute; chuyển giao c&ocirc;ng nghệ: - Hợp đồng c&oacute; gi&aacute; trị tr&ecirc;n 01 tỷ đồng, được hỗ trợ 15% gi&aacute; trị hợp đồng, nhưng tối đa kh&ocirc;ng qu&aacute; 300 triệu đồng; - Hợp đồng c&oacute; gi&aacute; trị từ tr&ecirc;n 500 triệu đồng đến 01 tỷ đồng, được hỗ trợ 20% gi&aacute; trị hợp đồng, nhưng tối đa kh&ocirc;ng qu&aacute; 200 triệu đồng; - Hợp đồng c&oacute; gi&aacute; trị từ 100 triệu đồng đến 500 triệu đồng, được hỗ trợ 30% gi&aacute; trị hợp đồng, nhưng tối đa kh&ocirc;ng qu&aacute; 100 triệu đồng. b) Hỗ trợ kinh ph&iacute; đổi mới hoặc ho&agrave;n thiện c&ocirc;ng nghệ: - Đổi mới hoặc ho&agrave;n thiện c&ocirc;ng nghệ c&oacute; gi&aacute; trị tr&ecirc;n 01 tỷ đồng được hỗ trợ 10% gi&aacute; trị c&ocirc;ng nghệ theo dự to&aacute;n đ&atilde; được thẩm định, ph&ecirc; duyệt, nhưng tối đa kh&ocirc;ng qu&aacute; 300 triệu đồng; - Đổi mới hoặc ho&agrave;n thiện c&ocirc;ng nghệ c&oacute; gi&aacute; trị từ tr&ecirc;n 500 triệu đồng đến 01 tỷ đồng được hỗ trợ 20% gi&aacute; trị c&ocirc;ng nghệ theo dự to&aacute;n đ&atilde; được thẩm định, ph&ecirc; duyệt, nhưng tối đa kh&ocirc;ng qu&aacute; 200 triệu đồng; - Đổi mới hoặc ho&agrave;n thiện c&ocirc;ng nghệ c&oacute; gi&aacute; trị từ 100 triệu đồng đến 500 triệu đồng được hỗ trợ 30% gi&aacute; trị c&ocirc;ng nghệ theo dự to&aacute;n đ&atilde; được thẩm định, ph&ecirc; duyệt, nhưng tối đa kh&ocirc;ng qu&aacute; 100 triệu đồng. 2. Đối với dự &aacute;n đầu tư d&acirc;y chuyền sản xuất mới (thiết bị, m&aacute;y m&oacute;c mới): Hỗ trợ đối với dự &aacute;n đầu tư d&acirc;y chuyền sản xuất mới, c&ocirc;ng nghệ ti&ecirc;n tiến, thiết bị hiện đại, tạo ra sản phẩm c&oacute; thương hiệu, thị trường ti&ecirc;u thụ lớn, đảm bảo quy định về bảo vệ m&ocirc;i trường, c&oacute; gi&aacute; trị từ 500 triệu đồng trở l&ecirc;n. Mức hỗ trợ từ 5% đến 10% gi&aacute; trị đầu tư đ&atilde; thực hiện, nhưng tối đa kh&ocirc;ng qu&aacute; 10 tỷ đồng. Ngo&agrave;i c&aacute;c ch&iacute;nh s&aacute;ch hỗ trợ về chuyển giao c&ocirc;ng nghệ c&ograve;n c&oacute; c&aacute;c ch&iacute;nh s&aacute;ch kh&aacute;c được quy định tại Quyết đinh số 26/2014/QĐ-UBND, ng&agrave;y 23/6/2014 của Ủy ban nh&acirc;n d&acirc;n tỉnh về việc ban h&agrave;nh một số ch&iacute;nh s&aacute;ch khuyến kh&iacute;ch ph&aacute;t triển bảo quản, chế biến v&agrave; ti&ecirc;u thụ sản phẩm chủ yếu của tỉnh H&agrave; Tĩnh đến năm 2020. Sở Khoa học v&agrave; C&ocirc;ng nghệ H&agrave; Tĩnh tr&acirc;n trọng cảm ơn C&ocirc;ng ty Hoa Lập - B&ugrave;i Hưng Nguy&ecirc;n, k&iacute;nh ch&uacute;c qu&yacute; độc giả c&ugrave;ng C&ocirc;ng ty mạnh khỏe, hạnh ph&uacute;c v&agrave; ph&aacute;t triển. Mong rằng qu&yacute; độc giả tiếp tục quan t&acirc;m v&agrave; g&oacute;p &yacute; về c&aacute;c hoạt động khoa học v&agrave; c&ocirc;ng nghệ của tỉnh H&agrave; Tĩnh trong thời gian tới, đặc biệt l&agrave; hoạt động chuyển giao, đổi mới c&ocirc;ng nghệ.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng Quản l&yacute; C&ocirc;ng nghệ v&agrave; Sở hữu tr&iacute; tuệ.&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Sở Khoa học v&agrave; C&ocirc;ng nghệ.&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:phongqlcn.skhcn@hatinh.gov.vn">phongqlcn.skhcn@hatinh.gov.vn</a>;&nbsp;<a href="mailto:huytrongkhcn@gmail.com">huytrongkhcn@gmail.com</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0393858865 - 0913045713&quot;}&nbsp;</p>
        </td>
        <td>
            <p>K&iacute;nh gửi anh/chị, Ch&uacute;ng t&ocirc;i chuy&ecirc;n lắp đặt d&acirc;y chuyền gạch kh&ocirc;ng nung. Hiện n&agrave;y ch&uacute;ng t&ocirc;i c&oacute; một số kh&aacute;ch h&agrave;ng tr&ecirc;n địa b&agrave;n Tỉnh nh&agrave; c&oacute; nhu cầu đầu tư d&acirc;y chuyền gạch như sau:&nbsp;<a href="http://huali.vn/shop/day-chuyen-san-xuat-gach-khong-nung-xi-mang-cot-lieu-tu-dong-qt4-15b/">http://huali.vn/shop/day-chuyen-san-xuat-gach-khong-nung-xi-mang-cot-lieu-tu-dong-qt4-15b/</a>. Được biết c&aacute;c Sở Khoa học v&agrave; C&ocirc;ng nghệ tại c&aacute;c địa phương c&oacute; ưu đ&atilde;i cho những người nhập c&ocirc;ng nghệ v&agrave; hỗ trợ kinh ph&iacute; chuyển giao c&ocirc;ng nghệ. K&iacute;nh mong c&aacute;c anh/chị cho ch&uacute;ng t&ocirc;i được biết cụ thể về những ưu đ&atilde;i cho người đầu tư sản xuất gạch kh&ocirc;ng nung tại tỉnh nh&agrave; cũng như những ưu đ&atilde;i về thủ tục cấp đất, thuế sản xuất... Tr&acirc;n trọng ! Nguy&ecirc;n</p>
        </td>
        <td><a href="mailto:huali.vn@gmail.com">huali.vn@gmail.com</a></td>
        <td>B&ugrave;i Hưng Nguy&ecirc;n</td>
        <td>DN</td>
        <td>public</td>
        <td>0986568818</td>
        <td>7</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=76" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH D&acirc;̀u Khí Vũng Tàu Hải Phòng<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Hải ph&ograve;ng</td>
        <td>
            <p>K&iacute;nh gửi: C&ocirc;ng ty TNHH Dầu kh&iacute; Vũng T&agrave;u Hải Ph&ograve;ng Về c&acirc;u hỏi của C&ocirc;ng ty, Cục Hải quan tỉnh H&agrave; Tĩnh trả lời như sau: Khu kinh tế Vũng &Aacute;ng được th&agrave;nh lập được Thủ tướng Ch&iacute;nh phủ th&agrave;nh lập tại Quyết định số 72/2006/QĐ-TTg ng&agrave;y 03/4/2006, gồm hai khu chức năng ch&iacute;nh: Khu phi thuế quan v&agrave; Khu thuế quan, giữa Khu thuế quan v&agrave; nội địa Việt Nam h&agrave;ng h&oacute;a được tự do lưu th&ocirc;ng. C&ocirc;ng ty TNHH Gang th&eacute;p Hưng Nghiệp Formosa H&agrave; Tĩnh nằm trong khu thuế quan thuộc Khu kinh tế Vũng &Aacute;ng, do đ&oacute;, quan hệ mua b&aacute;n h&agrave;ng h&oacute;a giữa C&ocirc;ng ty v&agrave; c&aacute;c doanh nghiệp nội địa Việt Nam kh&ocirc;ng phải mở tờ khai xuất khẩu v&agrave; nộp thuế xuất khẩu. Tr&acirc;n trọng./.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>K&iacute;nh thư ban bi&ecirc;n tập, bộ phận tư vấn của Cục Hải Quan Hà Tĩnh C&ocirc;ng ty chúng t&ocirc;i có trụ sở tại Hải Phòng, và c&ocirc;ng ty ch&uacute;ng t&ocirc;i đang c&oacute; hợp đồng cung cấp đ&aacute; v&ocirc;i d&ugrave;ng cho luyện kim v&agrave;o khu kinh tế FORMOSA H&agrave; Tĩnh. Vậy, C&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; phải mở tờ khai xuất khẩu kh&ocirc;ng? V&agrave; nếu phải mở tờ khai th&igrave; c&oacute; phải nộp thuế xuất khẩu kh&ocirc;ng? Q&uacute;y Hải Quan vui l&ograve;ng tư vấn cho C&ocirc;ng ty ch&uacute;ng t&ocirc;i đ&ecirc;̉ C&ocirc;ng ty chúng t&ocirc;i có th&ecirc;̉ n&ocirc;̣p thu&ecirc;́ đ&acirc;̉y đủ cho hợp đ&ocirc;̀ng bán hàng vào khu kinh tế FORMOSA H&agrave; Tĩnh . Ch&uacute;ng t&ocirc;i xin ch&acirc;n th&agrave;nh cảm ơn!</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH D&acirc;̀u Khí Vũng Tàu Hải Phòng</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=77" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH D&acirc;̀u Khí Vũng Tàu Hải Phòng<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Hải ph&ograve;ng</td>
        <td>
            <p>K&iacute;nh gửi: C&ocirc;ng ty TNHH Dầu kh&iacute; Vũng T&agrave;u Hải Ph&ograve;ng Về c&acirc;u hỏi của C&ocirc;ng ty, Cục Hải quan tỉnh H&agrave; Tĩnh trả lời như sau: Khu kinh tế Vũng &Aacute;ng được th&agrave;nh lập được Thủ tướng Ch&iacute;nh phủ th&agrave;nh lập tại Quyết định số 72/2006/QĐ-TTg ng&agrave;y 03/4/2006, gồm hai khu chức năng ch&iacute;nh: Khu phi thuế quan v&agrave; Khu thuế quan, giữa Khu thuế quan v&agrave; nội địa Việt Nam h&agrave;ng h&oacute;a được tự do lưu th&ocirc;ng. C&ocirc;ng ty TNHH Gang th&eacute;p Hưng Nghiệp Formosa H&agrave; Tĩnh nằm trong khu thuế quan thuộc Khu kinh tế Vũng &Aacute;ng, do đ&oacute;, quan hệ mua b&aacute;n h&agrave;ng h&oacute;a giữa C&ocirc;ng ty v&agrave; c&aacute;c doanh nghiệp nội địa Việt Nam kh&ocirc;ng phải mở tờ khai xuất khẩu v&agrave; nộp thuế xuất khẩu. Tr&acirc;n trọng./.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>K&iacute;nh gửi Cục Hải Quan Hà Tĩnh! C&ocirc;ng ty chúng t&ocirc;i có trụ sở tại Hải Phòng, và c&ocirc;ng ty ch&uacute;ng t&ocirc;i đang c&oacute; hợp đồng cung cấp đ&aacute; v&ocirc;i d&ugrave;ng cho luyện kim v&agrave;o khu kinh tế FORMOSA H&agrave; Tĩnh. Vậy, C&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; phải mở tờ khai xuất khẩu kh&ocirc;ng? V&agrave; nếu phải mở tờ khai th&igrave; c&oacute; phải nộp thuế xuất khẩu kh&ocirc;ng? Q&uacute;y Hải Quan vui l&ograve;ng tư vấn cho C&ocirc;ng ty ch&uacute;ng t&ocirc;i đ&ecirc;̉ C&ocirc;ng ty chúng t&ocirc;i có th&ecirc;̉ n&ocirc;̣p thu&ecirc;́ đ&acirc;̉y đủ cho hợp đ&ocirc;̀ng bán hàng vào khu kinh tế FORMOSA H&agrave; Tĩnh . Ch&uacute;ng t&ocirc;i xin ch&acirc;n th&agrave;nh cảm ơn!</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH D&acirc;̀u Khí Vũng Tàu Hải Phòng</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=78" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH D&acirc;̀u Khí Vũng Tàu Hải Phòng<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Hải ph&ograve;ng</td>
        <td>
            <p>K&iacute;nh gửi: C&ocirc;ng ty TNHH Dầu kh&iacute; Vũng T&agrave;u Hải Ph&ograve;ng Về c&acirc;u hỏi của C&ocirc;ng ty, Cục Hải quan tỉnh H&agrave; Tĩnh trả lời như sau: Khu kinh tế Vũng &Aacute;ng được th&agrave;nh lập được Thủ tướng Ch&iacute;nh phủ th&agrave;nh lập tại Quyết định số 72/2006/QĐ-TTg ng&agrave;y 03/4/2006, gồm hai khu chức năng ch&iacute;nh: Khu phi thuế quan v&agrave; Khu thuế quan, giữa Khu thuế quan v&agrave; nội địa Việt Nam h&agrave;ng h&oacute;a được tự do lưu th&ocirc;ng. C&ocirc;ng ty TNHH Gang th&eacute;p Hưng Nghiệp Formosa H&agrave; Tĩnh nằm trong khu thuế quan thuộc Khu kinh tế Vũng &Aacute;ng, do đ&oacute;, quan hệ mua b&aacute;n h&agrave;ng h&oacute;a giữa C&ocirc;ng ty v&agrave; c&aacute;c doanh nghiệp nội địa Việt Nam kh&ocirc;ng phải mở tờ khai xuất khẩu v&agrave; nộp thuế xuất khẩu. Tr&acirc;n trọng./.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>K&iacute;nh gửi Cục Hải Quan Hà Tĩnh! C&ocirc;ng ty chúng t&ocirc;i có trụ sở tại Hải Phòng, và c&ocirc;ng ty ch&uacute;ng t&ocirc;i đang c&oacute; hợp đồng cung cấp đ&aacute; v&ocirc;i d&ugrave;ng cho luyện kim v&agrave;o khu kinh tế FORMOSA H&agrave; Tĩnh. Vậy, C&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; phải mở tờ khai xuất khẩu kh&ocirc;ng? V&agrave; nếu phải mở tờ khai th&igrave; c&oacute; phải nộp thuế xuất khẩu kh&ocirc;ng? Q&uacute;y Hải Quan vui l&ograve;ng tư vấn cho C&ocirc;ng ty ch&uacute;ng t&ocirc;i đ&ecirc;̉ C&ocirc;ng ty chúng t&ocirc;i có th&ecirc;̉ n&ocirc;̣p thu&ecirc;́ đ&acirc;̉y đủ cho hợp đ&ocirc;̀ng bán hàng vào khu kinh tế FORMOSA H&agrave; Tĩnh . Ch&uacute;ng t&ocirc;i xin ch&acirc;n th&agrave;nh cảm ơn!</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH D&acirc;̀u Khí Vũng Tàu Hải Phòng</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=79" onclick="GoToLink(this);return false;" target="_self">L&yacute; Thị Hương Giang<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: 1. Về thủ tục hải quan: Bạn đọc tham khảo quy định tại Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu. 2. Về thuế nhập khẩu: Để x&aacute;c định được mức thuế nhập khẩu của h&agrave;ng h&oacute;a, trước hết phải x&aacute;c định được m&atilde; HS của n&oacute;. Việc x&aacute;c định chi tiết m&atilde; HS của một mặt h&agrave;ng phải căn cứ v&agrave;o t&iacute;nh chất, cấu tạo thực tế của h&agrave;ng h&oacute;a nhập khẩu. Đối với mặt h&agrave;ng bạn hỏi, theo Danh mục h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu Việt Nam ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 1/7/2015 của Bộ T&agrave;i ch&iacute;nh, bạn c&oacute; thể tham khảo c&aacute;c m&atilde; h&agrave;ng trong nh&oacute;m h&agrave;ng sau: - 84.31: C&aacute;c bộ phận chỉ sử dụng hoặc chủ yếu sử dụng cho c&aacute;c loại m&aacute;y thuộc c&aacute;c nh&oacute;m từ 84.25 đến 84.30. - 8431.43.00: Bộ phận của m&aacute;y khoan hoặc m&aacute;y đ&agrave;o s&acirc;u thuộc ph&acirc;n nh&oacute;m 8430.41 hoặc 8430.49. Đề nghị bạn đọc căn cứ v&agrave;o thực tế t&iacute;nh chất, cấu tạo thực tế h&agrave;ng h&oacute;a nhập khẩu v&agrave; &aacute;p dụng 06 (s&aacute;u) quy tắc ph&acirc;n loại tại Phụ lục II ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 1/7/2015 của Bộ T&agrave;i ch&iacute;nh về việc ban h&agrave;nh Danh mục h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu Việt Nam để x&aacute;c định m&atilde; HS chi tiết ph&ugrave; hợp với thực tế h&agrave;ng h&oacute;a nhập khẩu. Sau khi x&aacute;c định được m&atilde; HS của h&agrave;ng h&oacute;a, bạn đọc căn cứ v&agrave;o xuất xứ h&agrave;ng h&oacute;a, điều kiện vận chuyển h&agrave;ng h&oacute;a,&hellip; v&agrave; tham khảo mức thuế suất thuế nhập khẩu đối với m&atilde; số HS của h&agrave;ng h&oacute;a (đ&atilde; x&aacute;c định) tại Biểu thuế nhập khẩu ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 182/2015/TT-BTC ng&agrave;y 16/11/2015 của Bộ T&agrave;i ch&iacute;nh . Bạn c&oacute; thể tra cứu mức thuế suất tại mục &ldquo;Tra cứu CSDL Danh mục - Biểu thuế - Ph&acirc;n loại &ndash; HS&rdquo; tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan. Đề nghị bạn đọc tham khảo, thực hiện. Nếu c&ograve;n chưa r&otilde; th&igrave; li&ecirc;n hệ với cơ quan Hải quan nơi l&agrave;m thủ tục xuất nhập khẩu để được hướng dẫn cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản n&agrave;y ở mục THƯ VIỆN VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>&nbsp;. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>T&ocirc;i muốn hỏi về thủ tục hải quan v&agrave; thuế nhập khẩu để được ph&eacute;p nhập khẩu ống khoan,mũi khoan, cho&ograve;ng khoan v&agrave; ống th&eacute;p c&aacute;c loại từ Nga v&agrave; c&aacute;c nước SNG về Việt Nam để kinh doanh. Mong sớm nhận được hồi &acirc;m của qu&yacute; cơ quan.</p>
        </td>
        <td>&nbsp;</td>
        <td>L&yacute; Thị Hương Giang</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=80" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH TM Kim Cương Việt<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: Để x&aacute;c định được mức thuế nhập khẩu của h&agrave;ng h&oacute;a, trước hết phải x&aacute;c định được m&atilde; HS của n&oacute;. 1. Về m&atilde; HS: Việc x&aacute;c định chi tiết m&atilde; HS của một mặt h&agrave;ng phải căn cứ v&agrave;o t&iacute;nh chất, cấu tạo thực tế của h&agrave;ng h&oacute;a nhập khẩu. Đối với mặt h&agrave;ng bạn hỏi, theo Danh mục h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu Việt Nam ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 1/7/2015 của Bộ T&agrave;i ch&iacute;nh, bạn c&oacute; thể tham khảo c&aacute;c m&atilde; h&agrave;ng trong nh&oacute;m h&agrave;ng sau: - 83.02: Gi&aacute;, khung, phụ kiện v&agrave; c&aacute;c sản phẩm tương tự bằng kim loại cơ bản d&ugrave;ng cho đồ nội thất, cho cửa ra v&agrave;o, cầu thang, cửa sổ, m&agrave;nh che, khung vỏ xe, y&ecirc;n cương, rương, h&ograve;m hay c&aacute;c loại tương tự; gi&aacute; để mũ, mắc mũ, ch&acirc;n gi&aacute; đỡ v&agrave; c&aacute;c loại gi&aacute; cố định tương tự; b&aacute;nh xe đẩy loại nhỏ c&oacute; gi&aacute; đỡ bằng kim loại cơ bản; cơ cấu đ&oacute;ng cửa tự động bằng kim loại cơ bản. - 8302.60.00: Cơ cấu đ&oacute;ng cửa tự động Đề nghị bạn đọc căn cứ v&agrave;o thực tế t&iacute;nh chất, cấu tạo thực tế h&agrave;ng h&oacute;a nhập khẩu v&agrave; &aacute;p dụng 06 (s&aacute;u) quy tắc ph&acirc;n loại tại Phụ lục II ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 1/7/2015 của Bộ T&agrave;i ch&iacute;nh về việc ban h&agrave;nh Danh mục h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu Việt Nam để x&aacute;c định m&atilde; HS chi tiết ph&ugrave; hợp với thực tế h&agrave;ng h&oacute;a nhập khẩu. 2. Về thuế nhập khẩu: Sau khi x&aacute;c định được m&atilde; HS của h&agrave;ng h&oacute;a, bạn đọc căn cứ v&agrave;o xuất xứ h&agrave;ng h&oacute;a, điều kiện vận chuyển h&agrave;ng h&oacute;a,&hellip; v&agrave; tham khảo mức thuế suất thuế nhập khẩu đối với m&atilde; số HS của h&agrave;ng h&oacute;a (đ&atilde; x&aacute;c định) tại Biểu thuế nhập khẩu ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 182/2015/TT-BTC ng&agrave;y 16/11/2015 của Bộ T&agrave;i ch&iacute;nh . Với mặt h&agrave;ng nhập khẩu c&oacute; xuất xứ từ H&agrave;n Quốc, nếu đ&aacute;p ứng đủ điều kiện theo quy định tại Th&ocirc;ng tư số 167/2014/TT-BTC ng&agrave;y 14/11/2014 của Bộ T&agrave;i ch&iacute;nh ban h&agrave;nh Biểu thuế nhập khẩu ưu đ&atilde;i đặc biệt của Việt Nam để thực hiện Hiệp định Thương mại h&agrave;ng h&oacute;a ASEAN - H&agrave;n Quốc giai đoạn 2015-2018 hoặc Th&ocirc;ng tư số 201/2015/TT-BTC ng&agrave;y 16/12/2015 của Bộ T&agrave;i ch&iacute;nh ban h&agrave;nh Biểu thuế nhập khẩu ưu đ&atilde;i đặc biệt thực hiện Hiệp định Thương mại tự do Việt Nam - H&agrave;n Quốc giai đoạn 2015-2018 th&igrave; được &aacute;p dụng mức thuế suất thuế nhập khẩu theo quy định tại Biểu thuế ban h&agrave;nh k&egrave;m theo. Bạn c&oacute; thể tra cứu mức thuế suất tại mục &ldquo;Tra cứu CSDL Danh mục - Biểu thuế - Ph&acirc;n loại &ndash; HS&rdquo; tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan. Đề nghị bạn đọc tham khảo, thực hiện. Nếu c&ograve;n chưa r&otilde; th&igrave; li&ecirc;n hệ với cơ quan Hải quan nơi l&agrave;m thủ tục xuất nhập khẩu để được hướng dẫn cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản n&agrave;y ở mục THƯ VIỆN VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>&nbsp;. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>B&ecirc;n c&ocirc;ng ty Kim Cương Việt chuẩn bị nhập khẩu mặt h&agrave;ng tay đẩy hơi (door closer) từ H&agrave;n Quốc. Mong Qu&yacute; cơ quan cung cấp m&atilde; thuế nhập khẩu v&agrave; thuế suất nhập khẩu đối với mặt h&agrave;ng tr&ecirc;n. Tr&acirc;n trọng cảm ơn!</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH TM Kim Cương Việt</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=81" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Hồng Nhung<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: Việc x&aacute;c định chi tiết m&atilde; HS của một mặt h&agrave;ng phải căn cứ v&agrave;o t&iacute;nh chất, cấu tạo thực tế của h&agrave;ng h&oacute;a nhập khẩu. Với mặt h&agrave;ng &ldquo;bộ thực h&agrave;nh vi xử l&yacute;&rdquo;, do bạn đọc kh&ocirc;ng cung cấp th&ocirc;ng tin chi tiết về mặt h&agrave;ng n&ecirc;n ch&uacute;ng t&ocirc;i kh&ocirc;ng đủ cơ sở để trả lời cụ thể. Đối với mặt h&agrave;ng bạn hỏi, theo Danh mục h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu Việt Nam ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 1/7/2015 của Bộ T&agrave;i ch&iacute;nh, bạn c&oacute; thể tham khảo c&aacute;c m&atilde; h&agrave;ng trong nh&oacute;m h&agrave;ng sau: - 84.71: M&aacute;y xử l&yacute; dữ liệu tự động v&agrave; c&aacute;c khối chức năng của ch&uacute;ng; đầu đọc từ t&iacute;nh hay đầu đọc quang học, m&aacute;y truyền dữ liệu l&ecirc;n c&aacute;c phương tiện truyền dữ liệu dưới dạng m&atilde; h&oacute;a v&agrave; m&aacute;y xử l&yacute; những dữ liệu n&agrave;y, chưa được chi tiết hay ghi ở nơi kh&aacute;c. Đề nghị bạn đọc căn cứ v&agrave;o thực tế t&iacute;nh chất, cấu tạo thực tế h&agrave;ng h&oacute;a nhập khẩu v&agrave; &aacute;p dụng 06 (s&aacute;u) quy tắc ph&acirc;n loại tại Phụ lục II ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 1/7/2015 của Bộ T&agrave;i ch&iacute;nh về việc ban h&agrave;nh Danh mục h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu Việt Nam để x&aacute;c định m&atilde; HS chi tiết ph&ugrave; hợp với thực tế h&agrave;ng h&oacute;a nhập khẩu. Đối với h&agrave;ng h&oacute;a nhập khẩu trước khi l&agrave;m thủ tục hải quan, bạn c&oacute; thể đề nghị x&aacute;c định trước m&atilde; số h&agrave;ng h&oacute;a nhập khẩu theo quy định tại Điều 7 Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu. Đề nghị bạn đọc tham khảo, thực hiện. Nếu c&ograve;n chưa r&otilde; th&igrave; li&ecirc;n hệ với cơ quan Hải quan nơi l&agrave;m thủ tục xuất nhập khẩu để được hướng dẫn cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản n&agrave;y ở mục THƯ VIỆN VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>&nbsp;. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>K&iacute;nh gửi tổng cục Hải Quan H&agrave; Tĩnh. Hiện tại doanh nghiệp ch&uacute;ng t&ocirc;i đang nhập khẩu mặt h&agrave;ng l&agrave; bộ thực h&agrave;nh vi xử l&yacute;. Thiết bị n&agrave;y d&ugrave;ng để cung cấp cho trường học để thực h&agrave;nh c&aacute;c th&iacute; nghiệm. Vậy qu&yacute; tổng cục cho hỏi, khi khai b&aacute;o tờ khai nhập khẩu mặt h&agrave;ng n&agrave;y, doanh nghiệp khai b&aacute;o theo m&atilde; HS code n&agrave;o? Cảm ơn qu&yacute; tổng cục.</p>
        </td>
        <td>&nbsp;</td>
        <td>Nguyễn Thị Hồng Nhung</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=82" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Ngọc Sơn<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: Mặt h&agrave;ng &quot;khung n&acirc;ng di động, cầu trục trong giao th&ocirc;ng vận tải, thiết bị n&acirc;ng&quot; khi nhập khẩu phải kiểm tra về chất lượng theo Quyết định số 50/2006/QĐ-TTg ng&agrave;y 07/03/2006 của Thủ tướng Ch&iacute;nh phủ về việc ban h&agrave;nh Danh mục sản phẩm, h&agrave;ng h&oacute;a phải kiểm tra về chất lượng. Như vậy, khi nhập khẩu mặt h&agrave;ng tr&ecirc;n, ngo&agrave;i thủ tục hải quan theo quy định hiện h&agrave;nh th&igrave; doanh nghiệp phải thực hiện kiểm tra về chất lượng theo quy định. Với mặt h&agrave;ng bạn hỏi, bạn c&oacute; thể tham khảo quy định tại Th&ocirc;ng tư 05/2014/TT-BLĐTBXH ng&agrave;y 6/3/2014 của Bộ Lao động - Thương binh v&agrave; X&atilde; hội ban h&agrave;nh danh mục m&aacute;y, thiết bị, vật tư c&oacute; y&ecirc;u cầu nghi&ecirc;m ngặt về an to&agrave;n lao động; Th&ocirc;ng tư số 41/2015/TT-BCT ng&agrave;y 24/11/2015 quy định Danh mục sản phẩm, h&agrave;ng h&oacute;a c&oacute; khả năng g&acirc;y mất an to&agrave;n thuộc tr&aacute;ch nhiệm quản l&yacute; của Bộ C&ocirc;ng Thương. Bạn c&oacute; thể li&ecirc;n hệ trực tiếp với Bộ C&ocirc;ng Thương, Bộ Lao động - Thương binh v&agrave; X&atilde; hội để t&igrave;m hiểu quy định cụ thể về kiểm tra chất lượng mặt h&agrave;ng. Đề nghị bạn đọc tham khảo, thực hiện. Nếu c&ograve;n chưa r&otilde; th&igrave; li&ecirc;n hệ với cơ quan Hải quan nơi l&agrave;m thủ tục xuất nhập khẩu để được hướng dẫn cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản n&agrave;y ở mục THƯ VIỆN VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>&nbsp;. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>C&ocirc;ng ty ch&uacute;ng t&ocirc;i hiện tại đang nhập một l&ocirc; h&agrave;ng ở cảng Hải Ph&ograve;ng. Trong l&ocirc; h&agrave;ng n&agrave;y c&oacute; mục h&agrave;ng : Xe n&acirc;ng mặt b&agrave;n, tải trọng 350kg, n&acirc;ng cao l&ecirc;n 1m. Vậy khi l&agrave;m thủ tục hải quan lấy h&agrave;ng, b&ecirc;n c&ocirc;ng ty c&oacute; phải kiểm tra chất lượng mục h&agrave;ng n&agrave;y ? Xin ch&acirc;n th&agrave;nh cảm ơn qu&yacute; cơ quan!</p>
        </td>
        <td>&nbsp;</td>
        <td>Nguyễn Ngọc Sơn</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=85" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty tr&aacute;ch nhiệm hữu hạn Trang Thơ<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Cơ quan trả lời : Cục thuế tỉnh H&agrave; Tĩnh trả lời như sau : Căn cứ v&agrave;o Điểm c, Khoản 1, Điều 31, Th&ocirc;ng tư số 156/2013/TT-BTC ng&agrave;y 06/ 11/2013 của Bộ T&agrave;i ch&iacute;nh hướng dẫn thi h&agrave;nh một số điều của Luật quản l&yacute; thuế ; Luật sửa đổi, bổ sung một số điều của Luật quản l&yacute; thuế v&agrave; Nghị định số 83/2013/NĐ-CP ng&agrave;y 22/7/2013 của Ch&iacute;nh phủ. &ldquo;Điều 31. Gia hạn nộp thuế 1. Trường hợp được gia hạn nộp thuế: c) Chưa được thanh to&aacute;n vốn đầu tư x&acirc;y dựng cơ bản đ&atilde; được ghi trong dự to&aacute;n ng&acirc;n s&aacute;ch nh&agrave; nước.&rdquo; Căn cứ Điểm c, Khoản 2, Điều 31, Th&ocirc;ng tư số 156/2013/TT-BTC ng&agrave;y 06/ 11/2013 của Bộ T&agrave;i ch&iacute;nh hướng dẫn thi h&agrave;nh một số điều của Luật quản l&yacute; thuế ; Luật sửa đổi, bổ sung một số điều của Luật quản l&yacute; thuế v&agrave; Nghị định số 83/2013/NĐ-CP ng&agrave;y 22/7/2013 của Ch&iacute;nh phủ. Đ&atilde; được sửa đổi, bổ sung tại Điểm c Khoản 2, Điều 21, Th&ocirc;ng tư số 151/2014 ng&agrave;y 10/10/ 2014 của Bộ T&agrave;i ch&iacute;nh hướng dẫn thi h&agrave;nh Nghị định số 91/2014/NĐ-CP ng&agrave;y 01/10/2014 của Ch&iacute;nh phủ về việc sửa đổi, bổ sung một số điều tại c&aacute;c Nghị định về thuế. &ldquo;c) Người nộp thuế n&ecirc;u tại điểm c khoản 1 Điều n&agrave;y được gia hạn số tiền thuế nợ t&iacute;nh đến thời điểm đề nghị gia hạn. Số thuế được gia hạn tối đa kh&ocirc;ng vượt qu&aacute; số tiền ng&acirc;n s&aacute;ch nh&agrave; nước chưa thanh to&aacute;n bao gồm cả gi&aacute; trị của c&aacute;c hoạt động tư vấn, gi&aacute;m s&aacute;t, khảo s&aacute;t thiết kế, lập kế hoạch dự &aacute;n đối với c&aacute;c hợp đồng của c&ocirc;ng tr&igrave;nh, hạng mục c&ocirc;ng tr&igrave;nh x&acirc;y dựng cơ bản được người nộp thuế k&yacute; trực tiếp với chủ đầu tư, do ng&acirc;n s&aacute;ch nh&agrave; nước cấp ph&aacute;t hoặc c&oacute; nguồn vốn từ ng&acirc;n s&aacute;ch nh&agrave; nước. Thời gian gia hạn nộp thuế tối đa kh&ocirc;ng qu&aacute; 02 (hai) năm, kể từ ng&agrave;y hết thời hạn nộp thuế.&rdquo; (K&egrave;m theo c&aacute;c v&iacute; dụ minh họa) &ldquo;c.2) Trong thời gian đang được gia hạn m&agrave; ng&acirc;n s&aacute;ch nh&agrave; nước thanh to&aacute;n vốn đầu tư x&acirc;y dựng cơ bản c&ograve;n nợ th&igrave; người nộp thuế c&oacute; tr&aacute;ch nhiệm nộp số tiền thuế v&agrave;o ng&acirc;n s&aacute;ch nh&agrave; nước ngay sau ng&agrave;y được thanh to&aacute;n, cụ thể như sau: - Nếu vốn đầu tư được thanh to&aacute;n bằng hoặc lớn hơn số tiền thuế được gia hạn th&igrave; người nộp thuế c&oacute; tr&aacute;ch nhiệm nộp ngay số tiền thuế đang được gia hạn v&agrave;o ng&acirc;n s&aacute;ch nh&agrave; nước&rdquo;. - Nếu vốn đầu tư được thanh to&aacute;n nhỏ hơn số tiền thuế được gia hạn th&igrave; người nộp thuế c&oacute; tr&aacute;ch nhiệm nộp ngay số tiền thuế bằng số vốn được thanh to&aacute;n. Người nộp thuế c&oacute; thể lựa chọn nộp to&agrave;n bộ hoặc một phần số tiền thuế của một loại thuế n&agrave;o đ&oacute; trong c&aacute;c khoản thuế được gia hạn. &hellip; c.3) Trường hợp cơ quan c&oacute; thẩm quyền ph&aacute;t hiện người nộp thuế kh&ocirc;ng nộp tiền thuế được gia hạn khi được ng&acirc;n s&aacute;ch nh&agrave; nước thanh to&aacute;n th&igrave; phải t&iacute;nh tiền chậm nộp đối với số tiền thuế được gia hạn kể từ ng&agrave;y kế tiếp ng&agrave;y được thanh to&aacute;n theo quy định tại Điều 34 Th&ocirc;ng tư số 156/2013/TT-BTC.&rdquo; Căn cứ v&agrave;o quy định n&ecirc;u tr&ecirc;n: Nếu C&ocirc;ng ty TNHH Trang Thơ đang được gia hạn nợ thuế do chưa được thanh to&aacute;n vốn đầu tư x&acirc;y dựng cơ bản đ&atilde; được ghi trong dự to&aacute;n ng&acirc;n s&aacute;ch nh&agrave; nước (Kh&ocirc;ng ph&acirc;n biệt từng c&ocirc;ng tr&igrave;nh x&acirc;y dựng); Trong thời gian đang được gia hạn m&agrave; ng&acirc;n s&aacute;ch nh&agrave; nước thanh to&aacute;n vốn đầu tư th&igrave; c&ocirc;ng ty c&oacute; tr&aacute;ch nhiệm nộp to&agrave;n bộ số tiền thuế đang được gia hạn v&agrave;o ng&acirc;n s&aacute;ch nh&agrave; nước. Cục Thuế tỉnh H&agrave; Tĩnh gửi trả lời để Chuy&ecirc;n mục &ldquo; Doanh nghiệp hỏi cơ quan nh&agrave; nước trả lời&rdquo; Cổng Th&ocirc;ng tin điện tử tỉnh, chuyển đến Đọc giả được biết./. Địa chỉ người/ cơ quan trả lời: Đặng T&ugrave;ng Dương - Ph&ograve;ng Tuy&ecirc;n truyền - hổ trợ người nộp thuế, Cục thuế tỉnh H&agrave; Tĩnh, số 179 đường Xu&acirc;n Diệu, th&agrave;nh phố H&agrave; Tĩnh, tỉnh H&agrave; Tĩnh. Địa chỉ email: (Th&ocirc;ng qua Địa chỉ):&nbsp;<a href="mailto:dangtungduong.hti@gdt.gov.vn">dangtungduong.hti@gdt.gov.vn</a>Điện thoại: 0393890062</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Đặng T&ugrave;ng Dương&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&ograve;ng Tuy&ecirc;n truyền - hổ trợ người nộp thuế&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:chicucthue@hatinh.gov.vn">chicucthue@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0393890062&quot;}</p>
        </td>
        <td>
            <p>C&ocirc;ng Ty ch&uacute;ng t&ocirc;i hoạt động trong lĩnh vực x&acirc;y dựng cơ bản năm 2015 quyết to&aacute;n thuế GTGT , c&ocirc;ng ty ch&uacute;ng t&ocirc;i được gia hạn ba c&ocirc;ng tr&igrave;nh, 3 kh&aacute;ch h&agrave;ng (chủ đầu tư kh&aacute;c nhau A, B,C) C&ocirc;ng tr&igrave;nh chủ đầu tư A gi&aacute; trị nghiệm thu 200 triệu, tiền thuế gia hạn l&agrave; 20 triệu, C&ocirc;ng tr&igrave;nh chủ đầu tư B gi&aacute; trị nghiệm thu 300 triệu, tiền thuế gia hạn l&agrave; 30 triệu, C&ocirc;ng tr&igrave;nh Chủ đầu tư C gi&aacute; trị nghiệm thu 400 triệu, tiền thuế gia hạn l&agrave; 40 triệu. Thời gian gia hạn l&agrave; 12 th&aacute;ng, nay được chủ đầu tư A thanh to&aacute;n 200 triệu. Cơ quan thuế bắt nộp to&agrave;n bộ thuế đ&atilde; gia hạn cả ba c&ocirc;ng tr&igrave;nh l&agrave; 90 triệu c&oacute; đ&uacute;ng ko???</p>
        </td>
        <td><a href="mailto:quocdung968@gmail.com">quocdung968@gmail.com</a></td>
        <td>Trần Quốc Dũng</td>
        <td>DN</td>
        <td>public</td>
        <td>0916783325</td>
        <td>27</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=86" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Quốc Tr&iacute;<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: Để x&aacute;c định được mức thuế nhập khẩu của h&agrave;ng h&oacute;a, trước hết phải x&aacute;c định được m&atilde; HS của n&oacute;. 1. Về m&atilde; HS: Việc x&aacute;c định chi tiết m&atilde; HS của một mặt h&agrave;ng phải căn cứ v&agrave;o t&iacute;nh chất, cấu tạo thực tế của h&agrave;ng h&oacute;a nhập khẩu. Đối với mặt h&agrave;ng bạn hỏi, theo Danh mục h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu Việt Nam ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 1/7/2015 của Bộ T&agrave;i ch&iacute;nh, bạn c&oacute; thể tham khảo c&aacute;c m&atilde; h&agrave;ng trong nh&oacute;m h&agrave;ng sau: - 87.02: &Ocirc; t&ocirc; chở 10 người trở l&ecirc;n, kể cả l&aacute;i xe. Đề nghị bạn đọc căn cứ v&agrave;o thực tế t&iacute;nh chất, cấu tạo thực tế h&agrave;ng h&oacute;a nhập khẩu v&agrave; &aacute;p dụng 06 (s&aacute;u) quy tắc ph&acirc;n loại tại Phụ lục II ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 1/7/2015 của Bộ T&agrave;i ch&iacute;nh về việc ban h&agrave;nh Danh mục h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu Việt Nam để x&aacute;c định m&atilde; HS chi tiết ph&ugrave; hợp với thực tế h&agrave;ng h&oacute;a nhập khẩu. 2. Về thuế nhập khẩu: Sau khi x&aacute;c định được m&atilde; HS của h&agrave;ng h&oacute;a, bạn đọc căn cứ v&agrave;o xuất xứ h&agrave;ng h&oacute;a, điều kiện vận chuyển h&agrave;ng h&oacute;a,&hellip; v&agrave; tham khảo mức thuế suất thuế nhập khẩu đối với m&atilde; số HS của h&agrave;ng h&oacute;a (đ&atilde; x&aacute;c định) tại Biểu thuế nhập khẩu ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 182/2015/TT-BTC ng&agrave;y 16/11/2015 của Bộ T&agrave;i ch&iacute;nh . Với mặt h&agrave;ng nhập khẩu c&oacute; xuất xứ từ Trung Quốc, nếu đ&aacute;p ứng đủ điều kiện theo quy định tại Th&ocirc;ng tư số 166/2014/TT-BTC ng&agrave;y 14/11/2014 ban h&agrave;nh Biểu thuế nhập khẩu ưu đ&atilde;i đặc biệt của Việt Nam để thực hiện Hiệp định Thương mại h&agrave;ng h&oacute;a ASEAN - Trung Quốc giai đoạn 2015-2018 th&igrave; được &aacute;p dụng mức thuế suất thuế nhập khẩu theo quy định tại Biểu thuế ban h&agrave;nh k&egrave;m theo. Bạn c&oacute; thể tra cứu mức thuế suất tại mục &ldquo;Tra cứu CSDL Danh mục - Biểu thuế - Ph&acirc;n loại &ndash; HS&rdquo; tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan. Đề nghị bạn đọc tham khảo, thực hiện. Nếu c&ograve;n chưa r&otilde; th&igrave; li&ecirc;n hệ với cơ quan Hải quan nơi l&agrave;m thủ tục xuất nhập khẩu để được hướng dẫn cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản n&agrave;y ở mục THƯ VIỆN VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>&nbsp;. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>XIN CHO T&Ocirc;I HỎI MỨC THUẾ XE BU&Yacute;T MỚI 100% , NGUY&Ecirc;N CHIẾC TỪ TRUNG QUỐC VỀ VIỆT NAM L&Agrave; BAO NHI&Ecirc;U ? V&Agrave; NHƯ THẾ N&Agrave;O ĐỐI VỚI D&Ograve;NG XE KH&Aacute;CH 45 CHỖ NGỒI ? XIN CẢM ƠN</p>
        </td>
        <td>&nbsp;</td>
        <td>L&Ecirc; QUỐC TR&Iacute;</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=87" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty cố phần thiết bị nặng Minh Ph&uacute;<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: Việc x&aacute;c định chi tiết m&atilde; HS của một mặt h&agrave;ng phải căn cứ v&agrave;o t&iacute;nh chất, cấu tạo thực tế của h&agrave;ng h&oacute;a nhập khẩu. Đối với mặt h&agrave;ng bạn hỏi, theo Danh mục h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu Việt Nam ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 1/7/2015 của Bộ T&agrave;i ch&iacute;nh, bạn c&oacute; thể tham khảo c&aacute;c m&atilde; h&agrave;ng trong nh&oacute;m h&agrave;ng sau: - 84.31: C&aacute;c bộ phận chỉ sử dụng hoặc chủ yếu sử dụng cho c&aacute;c loại m&aacute;y thuộc c&aacute;c nh&oacute;m từ 84.25 đến 84.30. - 8431.43.00: Bộ phận của m&aacute;y khoan hoặc m&aacute;y đ&agrave;o s&acirc;u thuộc ph&acirc;n nh&oacute;m 8430.41 hoặc 8430.49 Đề nghị bạn đọc căn cứ v&agrave;o thực tế t&iacute;nh chất, cấu tạo thực tế h&agrave;ng h&oacute;a nhập khẩu v&agrave; &aacute;p dụng 06 (s&aacute;u) quy tắc ph&acirc;n loại tại Phụ lục II ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 1/7/2015 của Bộ T&agrave;i ch&iacute;nh về việc ban h&agrave;nh Danh mục h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu Việt Nam để x&aacute;c định m&atilde; HS chi tiết ph&ugrave; hợp với thực tế h&agrave;ng h&oacute;a nhập khẩu. Đối với h&agrave;ng h&oacute;a nhập khẩu trước khi l&agrave;m thủ tục hải quan, bạn c&oacute; thể đề nghị x&aacute;c định trước m&atilde; số h&agrave;ng h&oacute;a nhập khẩu theo quy định tại Điều 7 Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu. Đề nghị bạn đọc tham khảo, thực hiện. Nếu c&ograve;n chưa r&otilde; th&igrave; li&ecirc;n hệ với cơ quan Hải quan nơi l&agrave;m thủ tục xuất nhập khẩu để được hướng dẫn cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản n&agrave;y ở mục THƯ VIỆN VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>&nbsp;. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Xin ch&agrave;o Hải Quan H&agrave; Tĩnh, c&ocirc;ng ty t&ocirc;i sắp tới c&oacute; nhập khẩu 1 l&ocirc; h&agrave;ng về thiết bị m&aacute;y khoan. T&ocirc;i muốn hỏi với thiết bị piston dầu thủy lực l&agrave; bộ phận cho m&aacute;y khoan đ&aacute; th&igrave; t&ocirc;i n&ecirc;n &aacute;p m&atilde; hs n&agrave;o? Xin cảm ơn!</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty cố phần thiết bị nặng Minh Ph&uacute;</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=88" onclick="GoToLink(this);return false;" target="_self">C&Ocirc;NG TY CỔ PHẦN SẢN XUẤT TH&Eacute;P VINA ONE<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: Với mặt h&agrave;ng nhập khẩu c&oacute; xuất xứ từ Trung Quốc, nếu đ&aacute;p ứng đủ điều kiện theo quy định tại Th&ocirc;ng tư số 166/2014/TT-BTC ng&agrave;y 14/11/2014 ban h&agrave;nh Biểu thuế nhập khẩu ưu đ&atilde;i đặc biệt của Việt Nam để thực hiện Hiệp định Thương mại h&agrave;ng h&oacute;a ASEAN - Trung Quốc giai đoạn 2015-2018 th&igrave; được &aacute;p dụng mức thuế suất thuế nhập khẩu theo quy định tại Biểu thuế ban h&agrave;nh k&egrave;m theo. &quot;Điều 2. Điều kiện để h&agrave;ng h&oacute;a nhập khẩu được &aacute;p dụng thuế suất ACFTA H&agrave;ng h&oacute;a nhập khẩu để được &aacute;p dụng thuế suất thuế ACFTA phải đ&aacute;p ứng đủ c&aacute;c điều kiện sau: 1. Thuộc Biểu thuế nhập khẩu ưu đ&atilde;i đặc biệt ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư n&agrave;y. 2. Được nhập khẩu v&agrave;o Việt Nam từ c&aacute;c nước l&agrave; th&agrave;nh vi&ecirc;n của Hiệp định Thương mại h&agrave;ng h&oacute;a ASEAN - Trung Quốc, bao gồm c&aacute;c nước sau: T&ecirc;n nước K&yacute; hiệu t&ecirc;n nước Bru-n&acirc;y Đa-ru-sa-lam BN Vương quốc Cam-pu-chia KH Cộng h&ograve;a In-đ&ocirc;-n&ecirc;-xi-a ID Cộng h&ograve;a d&acirc;n chủ nh&acirc;n d&acirc;n L&agrave;o LA Ma-lai-xi-a MY Li&ecirc;n bang Mi-an-ma MM Cộng h&ograve;a Phi-l&iacute;p-pin PH Cộng h&ograve;a Xinh-ga-po SG Vương quốc Th&aacute;i Lan TH Cộng h&ograve;a Nh&acirc;n d&acirc;n Trung Hoa CN Cộng h&ograve;a X&atilde; hội Chủ nghĩa Việt Nam (H&agrave;ng h&oacute;a từ khu phi thuế quan nhập khẩu v&agrave;o thị trường trong nước) VN 3. Được vận chuyển trực tiếp từ nước xuất khẩu, quy định tại khoản 2 Điều n&agrave;y, đến Việt Nam, theo quy định của Bộ C&ocirc;ng Thương. 4. Thỏa m&atilde;n c&aacute;c quy định về xuất xứ h&agrave;ng h&oacute;a trong Hiệp định Thương mại h&agrave;ng h&oacute;a ASEAN - Trung Quốc, c&oacute; Giấy chứng nhận xuất xứ h&agrave;ng h&oacute;a ASEAN - Trung Quốc (viết tắt l&agrave; C/O - Mẫu E) theo quy định của Bộ C&ocirc;ng Thương.&quot; Đề nghị bạn đọc tham khảo, thực hiện. Nếu c&ograve;n chưa r&otilde; th&igrave; li&ecirc;n hệ với cơ quan Hải quan nơi l&agrave;m thủ tục xuất nhập khẩu để được hướng dẫn cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản n&agrave;y ở mục THƯ VIỆN VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>&nbsp;. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>THEO CH&Uacute; GIẢI CHƯƠNG 98110000 THUẾ SUẤT ƯU Đ&Atilde;I ĐẶC BIỆT THEO TT182/T2015/TT-BTC NGAY 16/11/2015 &Aacute;P DỤNG THUẾ SUẤT 10%. CTY XIN HỎI NĂM 2016 M&Atilde; H&Agrave;NG N&Agrave;Y C&Oacute; ĐƯỢC &Aacute;P DỤNG C/O FORM E ĐỂ ĐƯỢC HƯỞNG THUẾ SUẤT ƯU Đ&Atilde;I 0% THEO ACFTA HAY KH&Ocirc;NG ? V&Agrave; VĂN BẢN DẪN CHIẾU N&Agrave;O? C&Ocirc;NG TY XIN CH&Acirc;N TH&Agrave;NH C&Aacute;M ƠN.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&Ocirc;NG TY CỔ PHẦN SẢN XUẤT TH&Eacute;P VINA ONE</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=89" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Giao Nhận ABC<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Trả lời c&acirc;u hỏi của bạn đọc, Bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: 1. Về ch&iacute;nh s&aacute;ch nhập khẩu: C&ocirc;ng ty bạn chỉ được nhập khẩu phế liệu thuộc Phụ lục II- Danh mục phế liệu thu được trong qu&aacute; tr&igrave;nh sản xuất của doanh nghiệp chế xuất, doanh nghiệp trong khu phi thuế quan được ph&eacute;p nhập khẩu v&agrave;o nội địa để l&agrave;m nguy&ecirc;n liệu sản xuất Ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 01/2013/TT-BTNMT ng&agrave;y 28 th&aacute;ng 01 năm 2013 của Bộ trưởng Bộ T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường, th&igrave; chỉ những mặt h&agrave;ng phế liệu c&oacute; trong danh mục tr&ecirc;n đồng thời phải thoả c&aacute;c điều kiện quy định k&egrave;m theo th&igrave; doanh nghiệp chế xuất mới được ph&eacute;p b&aacute;n v&agrave;o nội địa Ngo&agrave;i ra, để được nhập khẩu phế liệu được ph&eacute;p nhập khẩu theo quy định dẫn tr&ecirc;n th&igrave; c&ocirc;ng ty bạn phải đ&aacute;p ứng điều kiện quy định tại Th&ocirc;ng tư số 41/2015/TT-BTNMT ng&agrave;y 09/9/2015 của Bộ trưởng Bộ T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường &ldquo;Về bảo vệ m&ocirc;i trường trong nhập khẩu phế liệu l&agrave;m nguy&ecirc;n liệu sản xuất&rdquo; Nếu c&ograve;n vướng mắc, đề nghị bạn li&ecirc;n hệ trực tiếp với Bộ T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường để được hướng dẫn cụ thể. 2. Điều kiện &aacute;p dụng thuế suất ATIGA: Với mặt h&agrave;ng nhập khẩu c&oacute; xuất xứ c&aacute;c nước th&agrave;nh vi&ecirc;n ASEAN, nếu đ&aacute;p ứng đủ điều kiện theo quy định tại Th&ocirc;ng tư số 165/2014/TT-BTC ng&agrave;y 14/11/2014 của Bộ T&agrave;i ch&iacute;nh ban h&agrave;nh Biểu thuế nhập khẩu ưu đ&atilde;i đặc biệt của Việt Nam để thực hiện Hiệp định thương mại h&agrave;ng h&oacute;a ASEAN giai đoạn 2015-2018, th&igrave; &aacute;p dụng mức thuế suất thuế nhập khẩu theo quy định tại Biểu thuế n&agrave;y. &quot;Điều 2: Điều kiện để h&agrave;ng h&oacute;a nhập khẩu được &aacute;p dụng thuế suất ATIGA H&agrave;ng h&oacute;a nhập khẩu để được &aacute;p dụng thuế suất thuế ATIGA phải đ&aacute;p ứng đủ c&aacute;c điều kiện sau: 1) Thuộc Biểu thuế nhập khẩu ưu đ&atilde;i đặc biệt ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư n&agrave;y. 2) Được nhập khẩu v&agrave;o Việt Nam từ c&aacute;c nước l&agrave; th&agrave;nh vi&ecirc;n ASEAN, bao gồm c&aacute;c nước sau: - Bru-n&acirc;y Đa-ru-sa-lam; - Vương quốc Cam-pu-chia; - Cộng ho&agrave; In-đ&ocirc;-n&ecirc;-xi-a; - Cộng ho&agrave; d&acirc;n chủ nh&acirc;n d&acirc;n L&agrave;o; - Ma-lai-xi-a; - Li&ecirc;n bang Mi-an-ma; - Cộng ho&agrave; Phi-l&iacute;p-pin; - Cộng ho&agrave; Xinh-ga-po; - Vương quốc Th&aacute;i Lan; - Cộng h&ograve;a X&atilde; hội Chủ nghĩa Việt Nam (H&agrave;ng h&oacute;a từ khu phi thuế quan nhập khẩu v&agrave;o thị trường trong nước). 3) Được vận chuyển trực tiếp từ nước xuất khẩu, quy định tại khoản 2 Điều n&agrave;y, đến Việt Nam, theo quy định của Bộ C&ocirc;ng Thương. 4) Thoả m&atilde;n c&aacute;c quy định về xuất xứ h&agrave;ng h&oacute;a trong Hiệp định Thương mại h&agrave;ng h&oacute;a ASEAN, c&oacute; Giấy chứng nhận xuất xứ h&agrave;ng ho&aacute; ASEAN mẫu D (viết tắt l&agrave; C/O - Mẫu D) theo quy định của Bộ C&ocirc;ng Thương.&quot; Đề nghị bạn đọc tham khảo, thực hiện. Nếu c&ograve;n chưa r&otilde; th&igrave; li&ecirc;n hệ với cơ quan Hải quan nơi l&agrave;m thủ tục xuất nhập khẩu để được hướng dẫn cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản n&agrave;y ở mục THƯ VIỆN VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>&nbsp;. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Ch&uacute;ng t&ocirc;i đang l&agrave;m thủ tục nhập khẩu tại chỗ cho một doanh nghiệp Việt Nam, mặt h&agrave;ng: phế liệu c&aacute;c loại (đủ điều kiện được nhập khẩu theo th&ocirc;ng tư 01/2013/TT-BTNMT, kh&ocirc;ng thuộc danh mục chất thải nguy hại theo th&ocirc;ng tư 36/2015/TT-BTNMT) từ một doanh nghiệp chế xuất trong khu chế xuất. Theo quy định tại khoản 3, điều 1, nghị định 38/2015/NĐ-CP, khi l&agrave;m thủ tục hải quan nhập khẩu cho l&ocirc; h&agrave;ng n&oacute;i tr&ecirc;n: 1. Doanh nghiệp nội địa c&oacute; cần xuất tr&igrave;nh Giấy chứng nhận đủ điều kiện nhập khẩu phế liệu từ doanh nghiệp chế xuất n&oacute;i tr&ecirc;n hay kh&ocirc;ng? (Hiện tại, ở một số chi cục Hải quan m&agrave; doanh nghiệp tham khảo &yacute; kiến, c&ocirc;ng chức hải quan vẫn y&ecirc;u cầu xuất tr&igrave;nh Giấy chứng nhận đủ điều kiện nhập khẩu phế liệu khi l&agrave;m thủ tục hải quan) 2. Nếu doanh nghiệp nội địa c&oacute; thể xuất tr&igrave;nh C/O form D khi l&agrave;m thủ tục hải quan nhập khẩu, đạt ti&ecirc;u ch&iacute; xuất xứ &quot;WO&quot; th&igrave; c&oacute; được hưởng ưu đ&atilde;i thuế quan theo hiệp định ATIGA hay kh&ocirc;ng? Xin ch&acirc;n th&agrave;nh cảm ơn.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH Giao Nhận ABC</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=90" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Việt Dũng<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: Để biết được thuế suất thuế nhập khẩu của một mặt h&agrave;ng, trước hết bạn đọc phải x&aacute;c định được m&atilde; HS của mặt h&agrave;ng đ&oacute;. Để x&aacute;c định m&atilde; HS chi tiết theo đ&uacute;ng quy định ph&ugrave; hợp với thực tế h&agrave;ng h&oacute;a, bạn đọc phải căn cứ v&agrave;o t&iacute;nh chất, cấu tạo h&agrave;ng h&oacute;a m&agrave; c&ocirc;ng ty nhập khẩu v&agrave; &aacute;p dụng 06 (s&aacute;u) quy tắc ph&acirc;n loại tại Phụ lục II ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 1/7/2015 của Bộ T&agrave;i ch&iacute;nh về việc ban h&agrave;nh Danh mục h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu Việt Nam. Với mặt h&agrave;ng bạn hỏi, theo Danh mục h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu Việt Nam ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 103/2015/TT-BTC ng&agrave;y 1/7/2015 của Bộ T&agrave;i ch&iacute;nh, bạn c&oacute; thể tham khảo c&aacute;c m&atilde; h&agrave;ng trong nh&oacute;m h&agrave;ng sau: - 90.04: K&iacute;nh đeo, k&iacute;nh bảo hộ v&agrave; c&aacute;c loại tương tự, k&iacute;nh thuốc, k&iacute;nh bảo vệ mắt hoặc loại kh&aacute;c Sau khi x&aacute;c định được m&atilde; HS của h&agrave;ng h&oacute;a, bạn đọc căn cứ v&agrave;o xuất xứ h&agrave;ng h&oacute;a, điều kiện vận chuyển h&agrave;ng h&oacute;a,&hellip; v&agrave; tham khảo mức thuế suất thuế nhập khẩu đối với m&atilde; số HS của h&agrave;ng h&oacute;a (đ&atilde; x&aacute;c định) tại Biểu thuế nhập khẩu ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 182/2015/TT-BTC ng&agrave;y 16/11/2015 của Bộ T&agrave;i ch&iacute;nh. Theo Biểu thuế nhập khẩu ưu đ&atilde;i theo danh mục mặt h&agrave;ng chịu thuế ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 182/2015/TT-BTC ng&agrave;y 16/11/2015 của Bộ T&agrave;i ch&iacute;nh th&igrave; thuế suất thuế nhập khẩu mặt h&agrave;ng trong nh&oacute;m 90.04, t&ugrave;y m&atilde; HS cụ thể m&agrave; mức thuế dao động từ 0% đến 20%. Bạn c&oacute; thể tra cứu mức thuế suất tại mục &ldquo;Tra cứu CSDL Danh mục - Biểu thuế - Ph&acirc;n loại &ndash; HS&rdquo; tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan. Đề nghị bạn đọc tham khảo, thực hiện. Nếu c&ograve;n chưa r&otilde; th&igrave; li&ecirc;n hệ với cơ quan Hải quan nơi l&agrave;m thủ tục xuất nhập khẩu để được hướng dẫn cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản n&agrave;y ở mục THƯ VIỆN VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>&nbsp;. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Cho m&igrave;nh hỏi thuế nhập khẩu k&iacute;nh thực tế ảo&nbsp;<a href="http://www.homido.com/">http://www.homido.com/</a>l&agrave; bao nhi&ecirc;u %?</p>
        </td>
        <td>&nbsp;</td>
        <td>Nguyen Viet Dung</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=91" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Cao Cường<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: 1. Giấy ph&eacute;p, bản k&ecirc; l&acirc;m sản: Điều 7, Điều 8 Th&ocirc;ng tư số 04/2015/TT-BNNPTNT ng&agrave;y 12/02/2015 của Bộ trưởng Bộ N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n hướng dẫn thực hiện một số nội dung của Nghị định số 187/2013/NĐ-CP ng&agrave;y 20/11/2013 của Ch&iacute;nh phủ quy định chi tiết thi h&agrave;nh Luật Thương mại về hoạt động mua b&aacute;n h&agrave;ng ho&aacute; quốc tế v&agrave; c&aacute;c hoạt động đại l&yacute;, mua, b&aacute;n, gia c&ocirc;ng v&agrave; qu&aacute; cảnh h&agrave;ng ho&aacute; với nước ngo&agrave;i trong lĩnh vực n&ocirc;ng nghiệp, l&acirc;m nghiệp v&agrave; thủy sản, quy định: &ldquo;Điều 7. Cấm xuất khẩu Cấm xuất khẩu gỗ v&agrave; sản phẩm chế biến từ gỗ thuộc c&aacute;c trường hợp sau: 1. Gỗ tr&ograve;n, gỗ xẻ c&aacute;c loại từ rừng tự nhi&ecirc;n trong nước. 2. Xuất khẩu v&igrave; mục đ&iacute;ch thương mại sản phẩm l&agrave;m từ gỗ thuộc Nh&oacute;m IA do Ch&iacute;nh phủ quy định (trừ gỗ l&agrave; tang vật xử l&yacute; tịch thu theo quy định hiện h&agrave;nh của Nh&agrave; nước v&agrave; những trường hợp quy định tại Điều 8 Th&ocirc;ng tư n&agrave;y) v&agrave; Phụ lục I của CITES khai th&aacute;c từ tự nhi&ecirc;n. Điều 8. Xuất khẩu theo điều kiện hoặc theo giấy ph&eacute;p 1. Gỗ v&agrave; sản phẩm chế biến từ gỗ chỉ được xuất khẩu khi c&oacute; hồ sơ l&acirc;m sản hợp ph&aacute;p theo quy định hiện h&agrave;nh của ph&aacute;p luật. Khi xuất khẩu, thương nh&acirc;n k&ecirc; khai h&agrave;ng ho&aacute; với cơ quan Hải quan về số lượng, chủng loại v&agrave; chịu tr&aacute;ch nhiệm về nguồn gốc gỗ hợp ph&aacute;p. &hellip;&rdquo; Đề nghị bạn đọc tham khảo, thực hiện. Nếu c&ograve;n vướng mắc th&igrave; li&ecirc;n hệ với Bộ N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n (cơ quan quản l&yacute; chuy&ecirc;n ng&agrave;nh) để được giải đ&aacute;p cụ thể. 2. Kiểm dịch thực vật: Theo quy định tại Th&ocirc;ng tư số 30/2014/TT-BNNPTNT &ldquo;Danh mục vật thể thuộc diện kiểm dịch thực vật; Danh mục phải ph&acirc;n t&iacute;ch nguy cơ dịch hại trước khi nhập khẩu&rdquo; do Bộ trưởng Bộ N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n ban h&agrave;nh ng&agrave;y 05 th&aacute;ng 09 năm 2014 th&igrave; khoản 1 Điều 1 &ldquo;Danh mục vật thể thuộc diện kiểm dịch thực vật&rdquo; c&oacute; mục &ldquo;đ) Gỗ tr&ograve;n, gỗ xẻ, pallet gỗ, m&ugrave;n cưa, m&ugrave;n dừa;&rdquo; thuộc diện phải kiểm dịch. Mặt h&agrave;ng của bạn kh&ocirc;ng thuộc v&agrave;o mục n&agrave;y th&igrave; kh&ocirc;ng phải kiểm dịch thực vật. 3. Về thủ tục hải quan: Bạn đọc tham khảo quy định tại Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu. Trường hợp mặt h&agrave;ng gỗ thuộc diện phải kiểm dịch khi xuất khẩu (căn cứ theo quy định, y&ecirc;u cầu của nước nhập khẩu, theo thỏa thuận trong hợp đồng mua b&aacute;n giữa 2 nước hoặc theo y&ecirc;u cầu của chủ h&agrave;ng xuất khẩu) th&igrave; ngo&agrave;i bộ hồ sơ hải quan theo quy định, chủ h&agrave;ng c&ograve;n phải nộp 01 bản sao, xuất tr&igrave;nh bản ch&iacute;nh Giấy chứng nhận kiểm dịch hoặc giấy tờ chứng minh đủ điều kiện kiểm dịch xuất khẩu do cơ quan Kiểm dịch cấp cho Chi cục Hải quan nơi đăng k&yacute; tờ khai để l&agrave;m thủ tục xuất khẩu l&ocirc; h&agrave;ng. Đề nghị bạn đọc tham khảo, thực hiện. Nếu c&ograve;n chưa r&otilde; th&igrave; li&ecirc;n hệ với cơ quan Hải quan nơi l&agrave;m thủ tục xuất nhập khẩu để được hướng dẫn cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản n&agrave;y ở mục THƯ VIỆN VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>&nbsp;. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>M&igrave;nh c&oacute; l&ocirc; h&agrave;ng gỗ keo xuất khẩu đang mắc về c&aacute;c chứng từ khi mở thủ tục hải quan . C&oacute; thể hỗ trợ gi&uacute;p m&igrave;nh đc ko ?</p>
        </td>
        <td>&nbsp;</td>
        <td>Nguyen Cao CUong</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=92" onclick="GoToLink(this);return false;" target="_self">Cty TNHH Li&ecirc;n Thụy<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Kỳ Thịnh, Kỳ Anh, H&agrave; Tĩnh</td>
        <td>
            <p>K&iacute;nh gửi: C&ocirc;ng ty TNHH Li&ecirc;n Thụy Do nội dung c&acirc;u hỏi kh&ocirc;ng cụ thể đối với doanh nghiệp n&agrave;o (t&ecirc;n, m&atilde; số doanh nghiệp) n&ecirc;n Ph&ograve;ng Đăng k&yacute; kinh doanh H&agrave; tĩnh kh&ocirc;ng c&oacute; cơ sở để tra cứu hồ sơ lưu tại cơ sở dữ liệu của hệ thống đăng k&yacute; kinh doanh quốc gia để trả lời cụ thể nội dung c&acirc;u hỏi n&ecirc;n Ph&ograve;ng Đăng k&yacute; kinh doanh chỉ trả lời về mặt nguy&ecirc;n tắc như sau: Căn cứ Khoản 21 Điều 4 Luật Doanh nghiệp năm 2014 th&igrave; &ldquo;phần vốn g&oacute;p l&agrave; tổng gi&aacute; trị t&agrave;i sản c&aacute;c th&agrave;nh vi&ecirc;n đ&atilde; g&oacute;p hoặc cam kết g&oacute;p v&agrave;o c&ocirc;ng ty tr&aacute;ch nhiệm hữu hạn,&hellip;&rdquo;; căn cứ Khoản 1 Điều 53 Luật Doanh nghiệp năm 2014 về việc chuyển nhượng phần vốn g&oacute;p của C&ocirc;ng ty TNHH 2 th&agrave;nh vi&ecirc;n trở l&ecirc;n th&igrave; c&aacute;c th&agrave;nh vi&ecirc;n của C&ocirc;ng ty TNHH 2 th&agrave;nh vi&ecirc;n n&ecirc;u tr&ecirc;n được quyền chuyển nhượng phần vốn g&oacute;p; Việc chuyển nhượng phải đảm bảo đ&uacute;ng theo quy định tại Điều 53 Luật Doanh nghiệp năm 2014 về việc chuyển nhượng phần vốn g&oacute;p của C&ocirc;ng ty TNHH 2 th&agrave;nh vi&ecirc;n trở l&ecirc;n v&agrave; Điều 45, Nghị định số 78/2015/NĐ-CP của Ch&iacute;nh phủ ng&agrave;y 14/9/2015 về đăng k&yacute; doanh nghiệp. Ngo&agrave;i ra, theo nội dung c&acirc;u hỏi, c&ocirc;ng ty chuyển nhượng vốn cho c&ocirc;ng ty nước ngo&agrave;i, do vậy, cần phải đảm bảo c&aacute;c quy định tại Điều 25, Điều 26 Luật Đầu tư năm 2014 v&agrave;Điều 46, Nghị định số 118/2015/NĐ-CP ng&agrave;y 12/11/2015 quy định chi tiết v&agrave; hướng dẫn thi h&agrave;nh một số điều của Luật Đầu tư. Trong trường hợp cụ thể, đề nghị c&ocirc;ng ty đến Trung t&acirc;m giao dịch một cửa, sở Kế hoạch v&agrave; Đầu tư để được hướng dẫn thủ tục thực hiện v&agrave; cung cấp c&aacute;c mẫu biểu cần thiết. T&ecirc;n cơ quan trả lời: Ph&ograve;ng ĐKKD - Sở Kế hoạch v&agrave; Đầu tư tỉnh H&agrave; Tĩnh Địa chỉ: Số 16 Đại lộ X&ocirc; viết Nghệ Tĩnh, Phường Nguyễn Du, TP H&agrave; Tĩnh Địa chỉ email:&nbsp;<a href="mailto:phongdkkdht@gmail.com">phongdkkdht@gmail.com</a>Điện thoại: 0393881263</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng Đăng k&yacute; kinh doanh &quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Sở Kế hoạch v&agrave; Đầu tư&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sokehoach@hatinh.gov.vn">sokehoach@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0393881263&quot;}</p>
        </td>
        <td>
            <p>Cty TNHH 2 th&agrave;nh vi&ecirc;n, th&agrave;nh lập 3/2015 vốn điều l&ecirc;n 10 tỷ, nếu đ&atilde; g&oacute;p đc 6 tỷ th&igrave; c&oacute; thể chuyển nhượng 5 tỷ cho cty nước ngo&agrave;i được kh&ocirc;ng? hay cứ phải g&oacute;p đủ 10 tỷ mới được chuyển nhượng? xin c&aacute;m ơn!</p>
        </td>
        <td><a href="mailto:thuhangsonca@gmail.com">thuhangsonca@gmail.com</a></td>
        <td>Ng Thi Thu Hằng</td>
        <td>DN</td>
        <td>public</td>
        <td>09129 66778</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=93" onclick="GoToLink(this);return false;" target="_self">Cty TNHH Ducon H&agrave; Tĩnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Kỳ Long, Kỳ Anh, H&agrave; Tĩnh</td>
        <td>
            <p>- Trả lời: Vấn đề c&ocirc;ng ty Ducon H&agrave; Tĩnh hỏi, Ph&ograve;ng Đăng k&yacute; kinh doanh- Sở Kế hoạch v&agrave; Đầu tư trả lời như sau: Việc soạn thảo Điều lệ C&ocirc;ng ty, tr&iacute;ch lập quỹ doanh nghiệp thực hiện theo điều 25 Luật Doanh nghiệp 2014; cụ thể, về chế độ thực hiện theo Th&ocirc;ng tư số 200/2014/TT/BTC ng&agrave;y 22/12/2014 của Bộ T&agrave;i ch&iacute;nh, ban h&agrave;nh chế độ kế to&aacute;n doanh nghiệp. Việc tr&iacute;ch lập quỹ với tỷ lệ % do doanh nghiệp (chủ sở hữu) quyết định./.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng Đăng k&yacute; kinh doanh &quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Sở Kế hoạch v&agrave; Đầu tư&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sokehoach@hatinh.gov.vn">sokehoach@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Cty Ducon 100% vốn Đ&agrave;i Loan, đ&atilde; đc cấp ph&eacute;p đầu tư v&agrave; đang xin th&agrave;nh lập cty. Xin hỏi c&oacute; qui định n&agrave;o n&oacute;i r&otilde; l&agrave; tr&iacute;ch &quot;Quỹ dự ph&ograve;ng t&agrave;i ch&iacute;nh, Quỹ khen thưởng, ph&uacute;c lợi v&agrave; c&aacute;c quĩ kh&aacute;c&quot; phải l&agrave; mấy %? nếu c&oacute; xin qu&iacute; Sở cho biết cụ thể qui định n&agrave;o? điều mấy?. Nếu kh&ocirc;ng c&oacute; qui định n&agrave;y, th&igrave; ch&uacute;ng t&ocirc;i c&oacute; thể cắt bỏ nội dung n&agrave;y, k đưa v&agrave;o điều lệ c&ocirc;ng ty c&oacute; được kh&ocirc;ng? xin c&aacute;m ơn.</p>
        </td>
        <td><a href="mailto:thuhangsonca@gmail.com">thuhangsonca@gmail.com</a></td>
        <td>Ng Thi Thu Hằng</td>
        <td>DN</td>
        <td>public</td>
        <td>0912966778</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=94" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Quang Trưởng<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Vướng mắc của &Ocirc;ng (B&agrave;), Bộ phận tư vấn Ban Bi&ecirc;n tập Cổng Th&ocirc;ng tin điện tử Hải quan &ndash; Tổng cục Hải quan c&oacute; &yacute; kiến trao đổi như sau: H&agrave;ng h&oacute;a &Ocirc;ng (B&agrave;) đề cập khi xuất khẩu phải thực hiện thủ tục hải quan, được miễn thuế xuất khẩu. Về số lượng v&agrave; phương thức vận chuyển: Văn bản hiện thời kh&ocirc;ng hạn chế số lượng xuất khẩu, kh&ocirc;ng quy định cụ thể phương thức vận chuyển. * Căn cứ ph&aacute;p l&yacute;: 1/ Hồ sơ hải quan đối với h&agrave;ng h&oacute;a xuất khẩu: Thực hiện theo quy định tại Khoản 1 Điều 16 Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ trưởng Bộ T&agrave;i ch&iacute;nh Quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu: &ldquo;a) Tờ khai h&agrave;ng h&oacute;a xuất khẩu theo c&aacute;c chỉ ti&ecirc;u th&ocirc;ng tin tại Phụ lục II ban h&agrave;nh k&egrave;m Th&ocirc;ng tư n&agrave;y. Trường hợp thực hiện tr&ecirc;n tờ khai hải quan giấy theo quy định tại khoản 2 Điều 25 Nghị định số 08/2015/NĐ-CP, người khai hải quan khai v&agrave; nộp 02 bản ch&iacute;nh tờ khai h&agrave;ng h&oacute;a xuất khẩu theo mẫu HQ/2015/XK Phụ lục IV ban h&agrave;nh k&egrave;m Th&ocirc;ng tư n&agrave;y; b) Giấy ph&eacute;p xuất khẩu đối với h&agrave;ng h&oacute;a phải c&oacute; giấy ph&eacute;p xuất khẩu: 01 bản ch&iacute;nh nếu xuất khẩu một lần hoặc 01 bản chụp k&egrave;m theo Phiếu theo d&otilde;i trừ l&ugrave;i nếu xuất khẩu nhiều lần; c) Giấy th&ocirc;ng b&aacute;o miễn kiểm tra hoặc giấy th&ocirc;ng b&aacute;o kết quả kiểm tra của cơ quan kiểm tra chuy&ecirc;n ng&agrave;nh theo quy định của ph&aacute;p luật: 01 bản ch&iacute;nh. Đối với chứng từ quy định tại điểm b, điểm c khoản n&agrave;y, nếu &aacute;p dụng cơ chế một cửa quốc gia, cơ quan quản l&yacute; nh&agrave; nước chuy&ecirc;n ng&agrave;nh gửi giấy ph&eacute;p xuất khẩu, văn bản th&ocirc;ng b&aacute;o kết quả kiểm tra, miễn kiểm tra chuy&ecirc;n ng&agrave;nh dưới dạng điện tử th&ocirc;ng qua Cổng th&ocirc;ng tin một cửa quốc gia, người khai hải quan kh&ocirc;ng phải nộp khi l&agrave;m thủ tục hải quan.&rdquo;. 2/ Về thuế xuất khẩu: Theo quy định tại Điều 1 Th&ocirc;ng tư số 90/2011/TT-BTC ng&agrave;y 20 th&aacute;ng 06 năm 2011 của Bộ T&agrave;i ch&iacute;nh Hướng dẫn miễn thuế xuất khẩu mặt h&agrave;ng trầm hương được sản xuất, tạo ra từ c&acirc;y d&oacute; bầu trồng. &ldquo;Miễn thuế xuất khẩu đối với mặt h&agrave;ng trầm hương được sản xuất, tạo ra từ c&acirc;y D&oacute; bầu trồng.&rdquo; Nếu h&agrave;ng h&oacute;a của doanh nghiệp thỏa m&atilde;n quy định tr&ecirc;n th&igrave; được miễn thuế xuất khẩu. &Ocirc;ng (B&agrave;) c&oacute; thể tham khảo c&aacute;c văn bản tr&ecirc;n tại mục THƯ VIỆN PH&Aacute;P LUẬT tr&ecirc;n Cổng Th&ocirc;ng tin điện tử Hải quan &ndash; Tổng cục Hải quan địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">www.customs.gov.vn</a>&nbsp;hoặc li&ecirc;n hệ với cơ quan Hải quan địa phương để được hỗ trợ. Tr&acirc;n trọng.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>T&ocirc;i c&ugrave;ng một số n&ocirc;ng d&acirc;n ở địa phương c&oacute; trồng c&acirc;y D&oacute; bầu nay được 12 năm đ&atilde; khoan cấy tạo trầm,kết quả khả quan trầm đ&atilde; c&oacute; (chỉ được loại 6), một c&acirc;y b&igrave;nh qu&acirc;n từ 5 đến 7 kg, nhưng b&aacute;n trong nước rất rẽ, t&ocirc;i c&oacute; nhiều bạn ở Trung Quốc, MaLayxia, Th&aacute;i Lan bảo t&ocirc;i mang qua b&aacute;n (v&igrave; t&ocirc;i đ&atilde; gửi h&igrave;nh ảnh cho bạn). Vậy t&ocirc;i cần l&agrave;m những thủ tục Hải quan g&igrave;, khai b&aacute;o nộp thuế như thế n&agrave;o? mang bao nhi&ecirc;u l&agrave; ph&ugrave; hợp? đi đường h&agrave;ng kh&ocirc;ng c&oacute; được kh&ocirc;ng? hay phải đi đường bộ? mong c&aacute;c Anh, chị hướng dẫn hộ gửi qua Email t&ocirc;i cảm ơn nhiều.</p>
        </td>
        <td>&nbsp;</td>
        <td>L&ecirc; Quang Trưởng</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=95" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH x&acirc;y dựng Trường Lợi<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>X&oacute;m Nghĩa Sơn -Gia Hanh - Can Lộc - h&agrave; Tĩnh</td>
        <td>
            <p>Sở Kế hoạch v&agrave; Đầu tư trả lời như sau: Ph&uacute;c đ&aacute;p &yacute; kiến của C&ocirc;ng ty TNHH x&acirc;y dựng Trường Lợi về một số vấn đề li&ecirc;n quan đến c&ocirc;ng t&aacute;c lựa chọn nh&agrave; thầu, ch&uacute;ng t&ocirc;i xin trả lời như sau: Ch&uacute;ng t&ocirc;i ghi nhận những đ&oacute;ng g&oacute;p của doanh nghiệp, gia đ&igrave;nh v&agrave; bản th&acirc;n &ocirc;ng trong việc x&acirc;y dựng n&ocirc;ng th&ocirc;n mới tại x&atilde; Gia Hanh, huyện Can Lộc. Về nội dung C&ocirc;ng ty TNHH x&acirc;y dựng Trường Lợi n&ecirc;u, việc triển khai thi c&ocirc;ng c&aacute;c c&ocirc;ng tr&igrave;nh XDCB tại địa phương x&atilde; Gia Hanh, huyện Can Lộc doanh nghiệp kh&ocirc;ng được nhận c&ocirc;ng tr&igrave;nh thi c&ocirc;ng so với c&ocirc;ng đ&oacute;ng g&oacute;p của doanh nghiệp cho nh&acirc;n d&acirc;n x&atilde; nh&agrave;. Theo quy định của Luật Đấu thầu số 43/2013/QH13 ng&agrave;y 26/11/2013; Nghị định số 63/2014/NĐ-CP ng&agrave;y 26/6/2014 của Ch&iacute;nh phủ quy định chi tiết một số điều của Luật Đấu thầu về lựa chọn nh&agrave; thầu, c&aacute;c g&oacute;i thầu x&acirc;y lắp c&oacute; gi&aacute; trị tr&ecirc;n 1,0 tỷ đồng phải &aacute;p dụng h&igrave;nh thức đấu thầu rộng r&atilde;i, theo đ&oacute; trước khi tổ chức đấu thầu chủ đầu tư phải thực hiện đăng tải tr&ecirc;n tr&ecirc;n B&aacute;o Đấu thầu, hệ thống mạng đấu thầu quốc gia (<a href="http://muasamcong.mpi.gov.vn/">http://muasamcong.mpi.gov.vn</a>) theo quy định tại Điều 8 Luật Đấu thầu 2013, Điều 7 Nghị định số 63/2014/NĐ-CP ng&agrave;y 26/6/2014 của Ch&iacute;nh phủ. Nguy&ecirc;n tắc &aacute;p dụng h&igrave;nh thức đấu thầu rộng r&atilde;i l&agrave; đảm bảo c&ocirc;ng bằng, c&ocirc;ng khai v&agrave; minh bạch, kh&ocirc;ng hạn chế số lượng nh&agrave; thầu tham gia, do đ&oacute; doanh nghiệp cần cập nhật th&ocirc;ng tin về c&aacute;c g&oacute;i thầu tr&ecirc;n c&aacute;c phương tiện th&ocirc;ng tin đại ch&uacute;ng n&ecirc;u tr&ecirc;n đối với tất cả c&aacute;c g&oacute;i thầu tr&ecirc;n phạm vi to&agrave;n quốc để lựa chọn c&aacute;c g&oacute;i thầu c&oacute; quy m&ocirc; ph&ugrave; hợp với năng lực của m&igrave;nh để tham gia đấu thầu. Đối với c&aacute;c g&oacute;i thầu x&acirc;y lắp c&oacute; gi&aacute; trị dưới 1,0 tỷ đồng, chủ đầu tư được &aacute;p dụng h&igrave;nh thức chỉ định thầu, theo đ&oacute; việc lựa chọn nh&agrave; thầu để &aacute;p dụng h&igrave;nh thức n&agrave;y thuộc thẩm quyền của chủ đầu tư. Doanh nghiệp li&ecirc;n hệ trực tiếp với chủ đầu tư, đề xuất nguyện vọng, nếu đủ điều kiện về năng lực v&agrave; kinh nghiệm theo quy định của Luật Đấu thầu, th&igrave; doanh nghiệp được b&igrave;nh đẳng trong việc lựa chọn thi c&ocirc;ng c&ocirc;ng tr&igrave;nh. Ch&agrave;o th&acirc;n &aacute;i! Ch&uacute;ng t&ocirc;i rất mong được sự tham gia g&oacute;p &yacute; c&aacute;c th&ocirc;ng tin bổ &iacute;ch của doanh nghiệp.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng Đăng k&yacute; kinh doanh &quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Sở Kế hoạch v&agrave; Đầu tư&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sokehoach@hatinh.gov.vn">sokehoach@hatinh.gov.vn</a>&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0393856750&quot;}</p>
        </td>
        <td>
            <p>Xin ch&agrave;o c&aacute;c anh chị, c&ocirc;ng ty t&ocirc;i th&agrave;nh lập đ&atilde; gần 2 năm về lĩnh vực x&acirc;y dựng, đ&oacute;ng g&oacute;p chỉ ti&ecirc;u n&ocirc;ng th&ocirc;n mới, tạo c&ocirc;ng ăn việc l&agrave;m cho anh chị em v&agrave; đ&oacute;ng g&oacute;p thuế cho địa phương, nhưng từ khi th&agrave;nh lập đến giờ ở x&atilde; nh&agrave; hằng năm vẫn c&oacute; nguồn vốn tr&ecirc;n cấp về như x&acirc;y nh&agrave; đa chức năng trường tiểu học Gia Hanh, hệ th&ocirc;ng m&aacute;i che của trường cũng như sữa chữa chợ v&agrave; hệ thống k&ecirc;nh mương chống hạn ở tr&ecirc;n chuyển về.... , nhưng t&ocirc;i kh&ocirc;ng được biết để l&agrave;m, t&ocirc;i xin hỏi phải chăng đang c&oacute; một lợi &iacute;ch nh&oacute;m n&agrave;o đ&acirc;y, doanh nghiệp n&agrave;o thế n&agrave;o t&ocirc;i cũng vậy, địa phương phải gi&uacute;p đỡ doanh nghiệp ở địa phương ph&aacute;t triển chứ? m&agrave; địa phương đang l&agrave;m mất đi c&ocirc;ng ăn việc l&agrave;m của con em địa phương, cũng như l&agrave;m mất đi nguồn thuế khi để doanh nghiệp nơi kh&aacute;c đến l&agrave;m, nếu như nguồn vốn doanh nghiệp nơi kh&aacute;c họ xin về th&igrave; bản th&acirc;n t&ocirc;i kh&ocirc;ng c&oacute; &yacute; kiến g&igrave;, nhưng đ&acirc;y la nguồn vốn cấp tr&ecirc;n ph&acirc;n về v&agrave; cũng một phần đ&oacute;ng g&oacute;p của nh&acirc;n d&acirc;n x&atilde; t&ocirc;i v&agrave; bản th&acirc;n gia đ&igrave;nh t&ocirc;i? v&igrave; vậy t&ocirc;i xin hỏi c&aacute;c cơ quan v&igrave; sao c&ocirc;ng ty t&ocirc;i ở địa phương thiếu s&oacute;t g&igrave; khi kh&ocirc;ng được l&agrave;m những nguồn vốn tr&ecirc;n chuyển về? t&ocirc;i xin cảm ơn, ch&uacute;c sức khỏe c&aacute;c anh chị.</p>
        </td>
        <td><a href="mailto:tranquan1910@gmail.com">tranquan1910@gmail.com</a></td>
        <td>Trần Văn Qu&acirc;n</td>
        <td>DN</td>
        <td>public</td>
        <td>0947856336</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=96" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Thu Uy&ecirc;n<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban Bi&ecirc;n tập c&oacute; &yacute; kiến trao đổi như sau: Qu&aacute; 15 ng&agrave;y m&agrave; h&agrave;ng h&oacute;a c&ocirc;ng ty bạn kh&ocirc;ng thực xuất khẩu th&igrave; phải hủy tờ khai hải quan: Căn cứ ph&aacute;p l&yacute;: Điều 22 Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh &ldquo;Quy định thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu&rdquo; quy định: &ldquo;1. C&aacute;c trường hợp hủy tờ khai: a) Qu&aacute; thời hạn 15 ng&agrave;y kể từ ng&agrave;y đăng k&yacute; tờ khai, h&agrave;ng h&oacute;a được miễn kiểm tra thực tế nhưng kh&ocirc;ng c&oacute; h&agrave;ng nhập khẩu đến cửa khẩu nhập hoặc h&agrave;ng xuất khẩu chưa đưa v&agrave;o khu vực gi&aacute;m s&aacute;t hải quan tại cửa khẩu xuất; b) Qu&aacute; thời hạn 15 ng&agrave;y kể từ ng&agrave;y đăng k&yacute; tờ khai m&agrave; người khai hải quan kh&ocirc;ng xuất tr&igrave;nh hồ sơ hải quan trong trường hợp phải xuất tr&igrave;nh hồ sơ hải quan để cơ quan hải quan kiểm tra; c) Qu&aacute; thời hạn 15 ng&agrave;y kể từ ng&agrave;y đăng k&yacute; tờ khai m&agrave; người khai hải quan chưa xuất tr&igrave;nh h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu phải kiểm tra thực tế để cơ quan hải quan kiểm tra; d) C&aacute;c trường hợp hủy tờ khai theo y&ecirc;u cầu của người khai hải quan: d.1) Tờ khai hải quan đ&atilde; được đăng k&yacute; nhưng chưa được th&ocirc;ng quan do Hệ thống xử l&yacute; dữ liệu điện tử hải quan c&oacute; sự cố;...&rdquo; Thủ tục hủy tờ khai được thực hiện theo hướng dẫn tại khoản 2 Điều n&agrave;y. Đề nghị bạn đọc tham khảo, nếu c&ograve;n vướng mắc th&igrave; li&ecirc;n hệ trực tiếp với Chi cục Hải quan nơi mở tờ khai để được giải đ&aacute;p cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản n&agrave;y ở mục VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết./. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>C&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; thực hiện Hợp đồng gia c&ocirc;ng với thương nh&acirc;n nước ngo&agrave;i Sau khi được chỉ đinh, C&ocirc;ng ty ch&uacute;ng t&ocirc;i đ&atilde; mở tờ khai xuất khẩu loại h&igrave;nh E52 v&agrave; đ&atilde; được ph&acirc;n luồng xanh th&ocirc;ng quan. L&ocirc; h&agrave;ng lẻ n&agrave;y đ&atilde; được giao v&agrave;o kho CFS ngay ng&agrave;y sau đ&oacute;. Nhưng sau đ&oacute; Forwarder c&oacute; th&ocirc;ng b&aacute;o cho ch&uacute;ng t&ocirc;i l&ocirc; h&agrave;ng n&agrave;y đ&atilde; kh&ocirc;ng bắt kịp t&agrave;u dự kiến v&igrave; container kết hợp kh&ocirc;ng c&ograve;n đủ chỗ đ&oacute;ng h&agrave;ng v&agrave; l&ocirc; h&agrave;ng vẫn nằm lại tại kho CFS. Sau đ&oacute; l&ocirc; h&agrave;ng được đặt chỗ cho chuyến t&agrave;u tiếp theo. Tuy nhi&ecirc;n v&igrave; l&agrave; h&agrave;ng kết hợp n&ecirc;n l&ocirc; h&agrave;ng phải chờ c&aacute;c l&ocirc; h&agrave;ng kh&aacute;c đi c&ugrave;ng để đủ đ&oacute;ng v&agrave;o container xu&aacute;t khẩu. Đợi đến l&uacute;c h&agrave;ng l&ecirc;n được chuyến t&agrave;u dự kiến tiếp theo mất khoảng 20 ng&agrave;y kể từ ng&agrave;y mở tờ khai xuất khẩu. K&iacute;nh mong Bộ phận tư vấn Tổng cục Hải quan sớm giải đ&aacute;p thắc mắc cho ch&uacute;ng t&ocirc;i - Ch&uacute;ng t&ocirc;i c&oacute; phải hủy tờ khai xuất đ&oacute; v&agrave; mở tờ khai kh&aacute;c kh&ocirc;ng? Nếu c&oacute; th&igrave; theo những điều khoản n&agrave;o? Xin c&aacute;m ơn v&agrave; mong chờ phản hồi sớm nhất để ch&uacute;ng t&ocirc;i kịp thời l&agrave;m c&aacute;c thủ tục giao h&agrave;ng cho ph&iacute;a nước ngo&agrave;i</p>
        </td>
        <td>&nbsp;</td>
        <td>Nguyễn Thu Uy&ecirc;n</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=97" onclick="GoToLink(this);return false;" target="_self">Cty TNHH Vat Nuoc va Cong Nghiep An Thinh Phat<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban Bi&ecirc;n tập c&oacute; &yacute; kiến trao đổi như sau: Thủ tục nộp, tiếp nhận v&agrave; xử l&yacute; hồ sơ x&eacute;t ho&agrave;n thuế, kh&ocirc;ng thu thuế được thực hiện theo quy định tại Điều 129 Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh &ldquo;Quy định thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu&rdquo;. Trong đ&oacute;, hồ sơ thuộc diện kiểm tra trước, ho&agrave;n thuế sau hay thuộc diện ho&agrave;n thuế trước, kiểm tra sau được hướng dẫn cụ thể tại khoản 5, khoản 6 Điều n&agrave;y: &ldquo;5. Hồ sơ thuộc diện ho&agrave;n thuế, kh&ocirc;ng thu thuế trước kiểm tra sau l&agrave; hồ sơ của người nộp thuế đ&aacute;p ứng đầy đủ c&aacute;c điều kiện sau: a) Người nộp thuế c&oacute; hoạt động xuất khẩu, nhập khẩu tối thiểu 365 ng&agrave;y t&iacute;nh đến ng&agrave;y đăng k&yacute; tờ khai hải quan cho l&ocirc; h&agrave;ng xuất khẩu, nhập khẩu. Trong thời gian 365 ng&agrave;y trở về trước, kể từ ng&agrave;y đăng k&yacute; tờ khai hải quan cho l&ocirc; h&agrave;ng xuất khẩu, nhập khẩu được cơ quan hải quan x&aacute;c định l&agrave;: a.1) Kh&ocirc;ng c&oacute; trong danh s&aacute;ch đ&atilde; bị xử l&yacute; về h&agrave;nh vi bu&ocirc;n lậu, vận chuyển tr&aacute;i ph&eacute;p h&agrave;ng ho&aacute; qua bi&ecirc;n giới của cơ quan hải quan; a.2) Kh&ocirc;ng c&oacute; trong danh s&aacute;ch đ&atilde; bị xử l&yacute; về h&agrave;nh vi trốn thuế, gian lận thuế của cơ quan hải quan; a.3) Kh&ocirc;ng qu&aacute; hai lần bị xử l&yacute; về c&aacute;c h&agrave;nh vi vi phạm kh&aacute;c về hải quan (bao gồm cả h&agrave;nh vi khai sai dẫn đến thiếu số tiền thuế phải nộp hoặc tăng số tiền thuế được miễn, giảm, ho&agrave;n, kh&ocirc;ng thu) với mức phạt tiền vượt thẩm quyền của Chi cục trưởng Chi cục Hải quan theo quy định của Luật Xử l&yacute; vi phạm h&agrave;nh ch&iacute;nh; b) Kh&ocirc;ng c&oacute; trong danh s&aacute;ch c&ograve;n nợ tiền thuế qu&aacute; hạn, tiền chậm nộp, tiền phạt tại thời điểm đăng k&yacute; tờ khai hải quan; c) Thực hiện thanh to&aacute;n qua ng&acirc;n h&agrave;ng (n&ecirc;u r&otilde; t&ecirc;n ng&acirc;n h&agrave;ng, số t&agrave;i khoản giao dịch trong c&ocirc;ng văn đề nghị ho&agrave;n thuế). d) Kh&ocirc;ng thuộc c&aacute;c trường hợp sau: d.1) Hồ sơ ho&agrave;n thuế thuộc diện kiểm tra trước, ho&agrave;n thuế sau theo quy định của ph&aacute;p luật về quản l&yacute; thuế; d.2) H&agrave;ng h&oacute;a nhập khẩu l&agrave; h&agrave;ng h&oacute;a thuộc đối tượng chịu thuế ti&ecirc;u thụ đặc biệt theo quy định của Luật thuế ti&ecirc;u thụ đặc biệt; d.3) H&agrave;ng h&oacute;a xuất khẩu, nhập khẩu thuộc c&aacute;c trường hợp ho&agrave;n thuế quy định tại khoản 4, 5, 6, 7, 8, 9 Điều 114 Th&ocirc;ng tư n&agrave;y; d.4) Hồ sơ đề nghị ho&agrave;n thuế, kh&ocirc;ng thu thuế nhập khẩu trong trường hợp người nhập khẩu kh&ocirc;ng phải l&agrave; người xuất khẩu; d.5) Hồ sơ đề nghị ho&agrave;n thuế, kh&ocirc;ng thu thuế xuất khẩu, nhập khẩu của doanh nghiệp mới được th&agrave;nh lập trong v&ograve;ng 24 th&aacute;ng t&iacute;nh từ ng&agrave;y nộp hồ sơ đề nghị ho&agrave;n thuế trở về trước; d.6) Trường hợp c&oacute; hồ sơ đề nghị ho&agrave;n tiền chậm nộp thuế gi&aacute; trị gia tăng theo quy định tại điểm d.1 khoản 2 Điều n&agrave;y. 6. Hồ sơ thuộc diện kiểm tra trước, ho&agrave;n thuế, kh&ocirc;ng thu thuế sau l&agrave; hồ sơ của người nộp thuế kh&ocirc;ng thuộc c&aacute;c trường hợp ho&agrave;n thuế, kh&ocirc;ng thu thuế trước, kiểm tra sau quy định tại khoản 5 Điều n&agrave;y. Việc kiểm tra thực hiện tại trụ sở người nộp thuế theo quy định tại Điều 130 Th&ocirc;ng tư n&agrave;y. Trường hợp qua kiểm tra x&aacute;c định thuộc đối tượng ho&agrave;n thuế, kh&ocirc;ng thu thuế, k&ecirc; khai của người nộp thuế l&agrave; ch&iacute;nh x&aacute;c th&igrave; cơ quan hải quan ban h&agrave;nh quyết định ho&agrave;n thuế, kh&ocirc;ng thu thuế theo k&ecirc; khai của người nộp thuế chậm nhất trong thời hạn 40 ng&agrave;y, kể từ ng&agrave;y nhận được đủ hồ sơ ho&agrave;n thuế, kh&ocirc;ng thu thuế.&rdquo; Đề nghị bạn đọc nghi&ecirc;n cứu nội dung quy định đ&atilde; n&ecirc;u để biết v&agrave; thực hiện. Nếu c&ograve;n chưa r&otilde;, đề nghị bạn đọc li&ecirc;n hệ với cơ quan hải quan nơi dự kiến l&agrave;m thủ tục xuất khẩu để được hướng dẫn cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản đ&atilde; n&ecirc;u ở mục VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết./. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>K&iacute;nh gửi : Cơ Quan Hải Quan C&ocirc;ng ty ch&uacute;ng t&ocirc;i l&agrave; c&ocirc;ng ty thương mại c&oacute; nhập khẩu một l&ocirc; h&agrave;ng từ Trung Quốc về Hải Ph&ograve;ng, khi tiến h&agrave;nh khai b&aacute;o HQ cho tờ khai nhập khẩu do CO Form E gốc chưa về kịp để xuất tr&igrave;nh khai HQ, Doanh nghiệp ch&uacute;ng t&ocirc;i đ&atilde; l&agrave;m c&ocirc;ng văn xin nợ CO v&agrave; tạm t&iacute;nh thuế NK cho h&agrave;ng h&oacute;a theo mức thuế th&ocirc;ng thường v&agrave; đ&atilde; đ&oacute;ng đầy đủ số thuế của TK Nhập Khẩu. Sau 1 tuần C&ocirc;ng ty ch&uacute;ng t&ocirc;i đ&atilde; l&agrave;m c&ocirc;ng văn xin được h&ograve;an thuế NK khi trả CO bản gốc v&agrave; được C&aacute;n Bộ Hải Quan hướng dẫn cần kiểm tra Cơ Sở của Doanh nghiệp nhập khẩu theo quy định tại: &quot;5. Hồ sơ thuộc diện ho&agrave;n thuế, kh&ocirc;ng thu thuế trước kiểm tra sau l&agrave; hồ sơ của người nộp thuế đ&aacute;p ứng đầy đủ c&aacute;c điều kiện sau:&quot; Chi tiết theo: d.5) Hồ sơ đề nghị ho&agrave;n thuế, kh&ocirc;ng thu thuế xuất khẩu, nhập khẩu của doanh nghiệp mới được th&agrave;nh lập trong v&ograve;ng 24 th&aacute;ng t&iacute;nh từ ng&agrave;y nộp hồ sơ đề nghị ho&agrave;n thuế trở về trước; Đại Diện Doanh nghiệp ch&uacute;ng t&ocirc;i xin được hỏi như vậy hướng dẫn h&ograve;an thuế khi trả nợ CO Form E gốc như vậy l&agrave; đ&uacute;ng theo quy định hay ko? Tr&acirc;n Trọng ! Hoang Thanh Truong</p>
        </td>
        <td>&nbsp;</td>
        <td>Cty TNHH Vat Nuoc va Cong Nghiep An Thinh Phat</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=98" onclick="GoToLink(this);return false;" target="_self">CTY TNHH AVANTCHEM VIỆT NAM<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Trả lời c&acirc;u hỏi của bạn đọc, Bộ phận tư vấn Ban Bi&ecirc;n tập c&oacute; &yacute; kiến trao đổi như sau: Trường hợp h&agrave;ng h&oacute;a thực tế của c&ocirc;ng ty bạn nhập khẩu được ph&acirc;n loại v&agrave;o nh&oacute;m 29.24 th&igrave; thuộc Phụ lục V &ldquo;Danh mục h&oacute;a chất phải khai b&aacute;o được sửa đổi, bổ sung&rdquo; ban h&agrave;nh k&egrave;m theo Nghị định số 26/2011/NĐ-CP ng&agrave;y 08/4/2011 của Ch&iacute;nh phủ &ldquo;Sửa đổi, bổ sung một số điều của Nghị định số 108/2008/NĐ-CP ng&agrave;y 07/10/2008 của Ch&iacute;nh phủ Quy định chi tiết v&agrave; hướng dẫn thi h&agrave;nh một số điều của Luật H&oacute;a chất&rdquo;. Khi nhập khẩu c&aacute;c mặt h&agrave;ng thuộc nh&oacute;m tr&ecirc;n, c&ocirc;ng ty bạn phải khai b&aacute;o h&oacute;a chất theo Th&ocirc;ng tư số 40/2011/TT-BCT ng&agrave;y 14/11/2011 của Bộ C&ocirc;ng Thương &ldquo;Quy định về khai b&aacute;o h&oacute;a chất&rdquo;. Đề nghị bạn đọc tham khảo c&aacute;c quy định tr&ecirc;n để thực hiện. Đề nghị bạn đọc gửi hồ sơ h&agrave;ng h&oacute;a tới Bộ C&ocirc;ng Thương (cơ quan quản l&yacute; chuy&ecirc;n ng&agrave;nh) để c&oacute; văn bản cụ thể. Bạn đọc c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản n&agrave;y ở mục VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết./. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Sắp tới cty ch&uacute;ng t&ocirc;i c&oacute; nhập khẩu l&ocirc; h&agrave;ng h&oacute;a chất l&agrave; nguy&ecirc;n liệu th&ocirc; d&ugrave;ng trong sản xuất sản phẩm gia dụng chống c&ocirc;n tr&ugrave;ng v&agrave; xua muổi ( DEET (N,N-DIETHYL-M-TOLUAMIDE) c&oacute; m&atilde; HS Code do đầu nước ngo&agrave;i cung cấp (29242998). Xin cho ch&uacute;ng t&ocirc;i được hỏi khi nhập chất n&agrave;y về c&oacute; cần xin giấy ph&eacute;p g&igrave; kh&ocirc;ng,bộ phận n&agrave;o sẽ cấp giấy cho ph&eacute;p nhập khẩu v&agrave; hồ sơ để xin giấy ph&eacute;p bao gồm giấy tờ g&igrave;? Rất mong Hải Quan tư vấn hỗ trợ cty ch&uacute;ng t&ocirc;i. Ch&acirc;n th&agrave;nh cảm ơn qu&yacute; cơ quan</p>
        </td>
        <td>&nbsp;</td>
        <td>CTY TNHH AVANTCHEM VIỆT NAM</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=99" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH MTV Th&aacute;i Đại Ph&aacute;t<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: Theo quy định tại Th&ocirc;ng tư 23/2015/TT-BKHCN ng&agrave;y 23/11/2015 của Bộ Khoa học v&agrave; C&ocirc;ng nghệ quy định việc nhập khẩu m&aacute;y m&oacute;c, thiết bị, d&acirc;y chuyền c&ocirc;ng nghệ đ&atilde; qua sử dụng, về nguy&ecirc;n tắc quản l&yacute; việc nhập khẩu th&igrave; đối với c&aacute;c thiết bị đ&atilde; qua sử dụng nhập khẩu đ&atilde; được quản l&yacute; trong c&aacute;c văn bản của c&aacute;c Bộ, cơ quan ngang Bộ th&igrave; &aacute;p dụng theo quy định của c&aacute;c Bộ, cơ quan ngang Bộ; c&aacute;c trường hợp c&ograve;n lại thực hiện theo quy định tại Th&ocirc;ng tư n&agrave;y. Việc kiểm tra chất lượng an to&agrave;n kỹ thuật v&agrave; bảo vệ m&ocirc;i trường xe m&aacute;y chuy&ecirc;n d&ugrave;ng được quy định tại Th&ocirc;ng tư số 89/2015/TT-BGTVT ng&agrave;y 31/12/2015 của Bộ Giao th&ocirc;ng vận tải quy định về kiểm tra chất lượng an to&agrave;n kỹ thuật v&agrave; bảo vệ m&ocirc;i trường xe m&aacute;y chuy&ecirc;n d&ugrave;ng, c&oacute; hiệu lực thi h&agrave;nh từ 1/7/2016. Do đ&oacute;, khi thực hiện việc nhập khẩu xe m&aacute;y chuy&ecirc;n d&ugrave;ng kể từ ng&agrave;y 1/7/2016, bạn thực hiện theo quy định tại Th&ocirc;ng tư số 89/2015/TT-BGTVT. Đề nghị bạn đọc tham khảo, thực hiện. Nếu c&ograve;n chưa r&otilde; th&igrave; li&ecirc;n hệ với Bộ Giao th&ocirc;ng vận tải, Bộ Khoa học C&ocirc;ng nghệ, cơ quan Hải quan nơi l&agrave;m thủ tục xuất nhập khẩu để được hướng dẫn cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản n&agrave;y ở mục THƯ VIỆN VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>&nbsp;. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>k&iacute;nh gửi tổng cục hải quan c&ocirc;ng ty ch&uacute;ng t&ocirc;i chuy&ecirc;n nhập v&agrave; kinh doanh xe m&aacute;y chuy&ecirc;n d&ugrave;ng hoạt động trong phạm vi hẹp ( xe m&aacute;y đ&agrave;o ,m&aacute;y ủi ,m&aacute;y x&uacute;c,m&aacute;y san đất) nhửng mặt h&agrave;ng n&agrave;y thuộc chương 84-85 theo biểu thuế xnk,vừa rồi sau khi tham khảo với cơ quan hải quan th&igrave; sẻ bị vướng v&agrave;o th&ocirc;ng tư 23 của bkhcn n&ecirc;n sẻ bị kiểm tra tuổi nhập khẩu kh&ocirc;ng qu&aacute; 10 năm v&agrave; chất lượng an to&agrave;n nk. -vậy doanh nghiệp xin hỏi khi nhập h&agrave;ng về th&igrave; cty ch&uacute;ng t&ocirc;i sẻ phải đi kiểm tra đến 2 cơ quan bộ ngh&agrave;nh nh&agrave; nước về chất lượng an to&agrave;n hay sao ,v&igrave; vối tt 23 bkhcn c&oacute; nghi rỏ ( Thiết bị đ&atilde; qua sử dụng khi nhập khẩu phải ph&ugrave; hợp với c&aacute;c y&ecirc;u cầu về an to&agrave;n, tiết kiệm năng lượng v&agrave; bảo vệ m&ocirc;i trường theo quy định của ph&aacute;p luật hiện h&agrave;nh.) v&agrave; kiểm theo cục đăng kiểm( Quyết định số 50/2006/QĐ-TTg ng&agrave;y 07 th&aacute;ng 3 năm 2006 của Thủ tướng Ch&iacute;nh phủ) c&aacute;i n&agrave;y th&igrave; củng l&agrave; kiểm tra chất lượng an to&agrave;n bảo vệ m&ocirc;i trường. -với c&acirc;u hỏi n&agrave;y xin tổng cục hải quan hảy hướng dẩn v&agrave; trả lời thấu đ&aacute;o cho doanh nghiệp biết v&agrave; cho biết tại sao 1 loại h&agrave;ng m&agrave; lại phải kiểm tra tới 2 bộ ng&agrave;nh -trong khi chờ đợi rất cảm ơn sự gi&uacute;p đở v&agrave; tư vấn của tổng cục hải quan</p>
        </td>
        <td>&nbsp;</td>
        <td>c&ocirc;ng ty tnhh mtv th&aacute;i đại ph&aacute;t</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=100" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Đoan Chinh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: Bạn đọc kh&ocirc;ng n&ecirc;u r&otilde; bưu kiện được gửi về theo đường bưu ch&iacute;nh hay theo đường chuyển ph&aacute;t nhanh, do đ&oacute; bạn đọc c&oacute; thể tham khảo c&aacute;c trường hợp sau: 1. Nếu h&agrave;ng h&oacute;a gửi về theo đường bưu ch&iacute;nh: Căn cứ Đi&ecirc;m 3.3 Khoản 3 Điều 4 Th&ocirc;ng tư số 99/2010/TT-BTC ng&agrave;y 09/7/2010 của Bộ T&agrave;i ch&iacute;nh &ldquo;Quy định thủ tục hải quan đối với bưu phẩm, bưu kiện, h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu gửi qua dịch vụ bưu ch&iacute;nh&rdquo; th&igrave; Tổng c&ocirc;ng ty Bưu ch&iacute;nh Việt Nam thay mặt chủ h&agrave;ng trực tiếp l&agrave;m thủ tục hải quan cho h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu (trừ thư, t&uacute;i ngoại giao, t&uacute;i l&atilde;nh sự), chịu tr&aacute;ch nhiệm thực hiện ch&iacute;nh s&aacute;ch về quản l&yacute; h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu, ch&iacute;nh s&aacute;ch thuế, lệ ph&iacute;, thu kh&aacute;c theo quy định của ph&aacute;p luật v&agrave; thực hiện đầy đủ c&aacute;c quyền, nghĩa vụ sau đ&acirc;y của chủ h&agrave;ng: - Khai hải quan; - Xuất tr&igrave;nh h&agrave;ng ho&aacute; để c&ocirc;ng chức hải quan kiểm tra; - Nộp thuế, lệ ph&iacute;, c&aacute;c khoản thu kh&aacute;c theo quy định hiện h&agrave;nh (nếu c&oacute;); - Nhận h&agrave;ng xuất khẩu để xuất ra nước ngo&agrave;i, nhận h&agrave;ng nhập khẩu để chuyển trả cho chủ h&agrave;ng. 2. Nếu h&agrave;ng h&oacute;a gửi về qua dịch vụ chuyển ph&aacute;t nhanh đường h&agrave;ng kh&ocirc;ng th&igrave;: - Căn cứ quy định tại Điểm 3.1 khoản 3 Điều 4 Th&ocirc;ng tư số 100/2010/TT-BTC ng&agrave;y 09/7/2010 của Bộ T&agrave;i ch&iacute;nh &quot;Quy định thủ tục hải quan đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu gửi qua dịch vụ chuyển ph&aacute;t nhanh đường kh&ocirc;ng quốc tế&quot;, th&igrave; Doanh nghiệp kinh doanh dịch vụ chuyển ph&aacute;t nhanh tự tổ chức ph&aacute;t h&agrave;ng h&oacute;a nhập khẩu đ&atilde; được th&ocirc;ng quan cho chủ h&agrave;ng - Căn cứ quy định tại Điều 6 Th&ocirc;ng tư 100 đ&atilde; n&ecirc;u th&igrave;: Doanh nghiệp kinh doanh dịch vụ chuyển ph&aacute;t nhanh thay mặt chủ h&agrave;ng trực tiếp l&agrave;m thủ tục hải quan cho h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu (trừ thư, t&uacute;i ngoại giao, t&uacute;i l&atilde;nh sự), chịu tr&aacute;ch nhiệm thực hiện ch&iacute;nh s&aacute;ch về quản l&yacute; h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu, ch&iacute;nh s&aacute;ch thuế, lệ ph&iacute;, thu kh&aacute;c v&agrave; c&aacute;c quyền, nghĩa vụ của chủ h&agrave;ng theo quy định của ph&aacute;p luật. Do đ&oacute;, đề nghị bạn đọc li&ecirc;n hệ với người gửi h&agrave;ng để biết m&atilde; số bưu kiện, sau đ&oacute; li&ecirc;n hệ trực tiếp với Tổng c&ocirc;ng ty Bưu ch&iacute;nh, doanh nghiệp kinh doanh dịch vụ chuyển ph&aacute;t nhanh, Chi cục Hải quan Bưu điện quốc tế, Chi cục Hải quan S&acirc;n bay quốc tế- nơi h&agrave;ng đến để biết th&ocirc;ng tin h&agrave;ng h&oacute;a. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản đ&atilde; n&ecirc;u ở mục VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết./. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>K&iacute;nh gửi qu&yacute; cơ quan, T&ocirc;i c&oacute; một bưu kiện gửi từ nước ngo&agrave;i về với tracking number l&agrave; RR645110020SE, đ&atilde; đến Việt Nam 2 tuần. t&ocirc;i đ&atilde; tracking v&agrave; được biết &quot;20/06/2016 17:12 EME: Đ&atilde; giao HQ (handed over to Customs) VNSGNA&quot;. vậy bao l&acirc;u nữa t&ocirc;i mới nhận được h&agrave;ng?</p>
        </td>
        <td>&nbsp;</td>
        <td>Nguyễn Đoan Chinh</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=101" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Đoan Chinh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: Bạn đọc kh&ocirc;ng n&ecirc;u r&otilde; bưu kiện được gửi về theo đường bưu ch&iacute;nh hay theo đường chuyển ph&aacute;t nhanh, do đ&oacute; bạn đọc c&oacute; thể tham khảo c&aacute;c trường hợp sau: 1. Nếu h&agrave;ng h&oacute;a gửi về theo đường bưu ch&iacute;nh: Căn cứ Đi&ecirc;m 3.3 Khoản 3 Điều 4 Th&ocirc;ng tư số 99/2010/TT-BTC ng&agrave;y 09/7/2010 của Bộ T&agrave;i ch&iacute;nh &ldquo;Quy định thủ tục hải quan đối với bưu phẩm, bưu kiện, h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu gửi qua dịch vụ bưu ch&iacute;nh&rdquo; th&igrave; Tổng c&ocirc;ng ty Bưu ch&iacute;nh Việt Nam thay mặt chủ h&agrave;ng trực tiếp l&agrave;m thủ tục hải quan cho h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu (trừ thư, t&uacute;i ngoại giao, t&uacute;i l&atilde;nh sự), chịu tr&aacute;ch nhiệm thực hiện ch&iacute;nh s&aacute;ch về quản l&yacute; h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu, ch&iacute;nh s&aacute;ch thuế, lệ ph&iacute;, thu kh&aacute;c theo quy định của ph&aacute;p luật v&agrave; thực hiện đầy đủ c&aacute;c quyền, nghĩa vụ sau đ&acirc;y của chủ h&agrave;ng: - Khai hải quan; - Xuất tr&igrave;nh h&agrave;ng ho&aacute; để c&ocirc;ng chức hải quan kiểm tra; - Nộp thuế, lệ ph&iacute;, c&aacute;c khoản thu kh&aacute;c theo quy định hiện h&agrave;nh (nếu c&oacute;); - Nhận h&agrave;ng xuất khẩu để xuất ra nước ngo&agrave;i, nhận h&agrave;ng nhập khẩu để chuyển trả cho chủ h&agrave;ng. 2. Nếu h&agrave;ng h&oacute;a gửi về qua dịch vụ chuyển ph&aacute;t nhanh đường h&agrave;ng kh&ocirc;ng th&igrave;: - Căn cứ quy định tại Điểm 3.1 khoản 3 Điều 4 Th&ocirc;ng tư số 100/2010/TT-BTC ng&agrave;y 09/7/2010 của Bộ T&agrave;i ch&iacute;nh &quot;Quy định thủ tục hải quan đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu gửi qua dịch vụ chuyển ph&aacute;t nhanh đường kh&ocirc;ng quốc tế&quot;, th&igrave; Doanh nghiệp kinh doanh dịch vụ chuyển ph&aacute;t nhanh tự tổ chức ph&aacute;t h&agrave;ng h&oacute;a nhập khẩu đ&atilde; được th&ocirc;ng quan cho chủ h&agrave;ng - Căn cứ quy định tại Điều 6 Th&ocirc;ng tư 100 đ&atilde; n&ecirc;u th&igrave;: Doanh nghiệp kinh doanh dịch vụ chuyển ph&aacute;t nhanh thay mặt chủ h&agrave;ng trực tiếp l&agrave;m thủ tục hải quan cho h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu (trừ thư, t&uacute;i ngoại giao, t&uacute;i l&atilde;nh sự), chịu tr&aacute;ch nhiệm thực hiện ch&iacute;nh s&aacute;ch về quản l&yacute; h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu, ch&iacute;nh s&aacute;ch thuế, lệ ph&iacute;, thu kh&aacute;c v&agrave; c&aacute;c quyền, nghĩa vụ của chủ h&agrave;ng theo quy định của ph&aacute;p luật. Do đ&oacute;, đề nghị bạn đọc li&ecirc;n hệ với người gửi h&agrave;ng để biết m&atilde; số bưu kiện, sau đ&oacute; li&ecirc;n hệ trực tiếp với Tổng c&ocirc;ng ty Bưu ch&iacute;nh, doanh nghiệp kinh doanh dịch vụ chuyển ph&aacute;t nhanh, Chi cục Hải quan Bưu điện quốc tế, Chi cục Hải quan S&acirc;n bay quốc tế- nơi h&agrave;ng đến để biết th&ocirc;ng tin h&agrave;ng h&oacute;a. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản đ&atilde; n&ecirc;u ở mục VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết./. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>K&iacute;nh gửi qu&yacute; cơ quan, T&ocirc;i c&oacute; một bưu kiện gửi từ nước ngo&agrave;i về với tracking number l&agrave; RR645110020SE, đ&atilde; đến Việt Nam 2 tuần. t&ocirc;i đ&atilde; tracking v&agrave; được biết &quot;20/06/2016 17:12 EME: Đ&atilde; giao HQ (handed over to Customs) VNSGNA&quot;. vậy bao l&acirc;u nữa t&ocirc;i mới nhận được h&agrave;ng?</p>
        </td>
        <td>&nbsp;</td>
        <td>Nguyễn Đoan Chinh</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=102" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Nguy&ecirc;n Hiếu<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến như sau: Về quy định nh&atilde;n m&aacute;c h&agrave;ng h&oacute;a, đề nghị bạn đọc tham khảo quy định tại Nghị định 89/2006/NĐ-CP ng&agrave;y 30/8/2006 của Ch&iacute;nh phủ về d&aacute;n nh&atilde;n h&agrave;ng h&oacute;a. &quot;Điều 20. C&aacute;c nội dung kh&aacute;c thể hiện tr&ecirc;n nh&atilde;n h&agrave;ng ho&aacute; Tổ chức, c&aacute; nh&acirc;n chịu tr&aacute;ch nhiệm về h&agrave;ng ho&aacute; được ph&eacute;p ghi l&ecirc;n nh&atilde;n những nội dung kh&aacute;c. Những nội dung ghi th&ecirc;m kh&ocirc;ng được tr&aacute;i với ph&aacute;p luật v&agrave; phải đảm bảo trung thực, ch&iacute;nh x&aacute;c, phản &aacute;nh đ&uacute;ng bản chất của h&agrave;ng ho&aacute;, kh&ocirc;ng che khuất, kh&ocirc;ng l&agrave;m sai lệch những nội dung bắt buộc ghi tr&ecirc;n nh&atilde;n.&quot; Đề nghị bạn đọc tham khảo, thực hiện. Nếu c&ograve;n chưa r&otilde; th&igrave; li&ecirc;n hệ với cơ quan Hải quan nơi l&agrave;m thủ tục hải quan để được hướng dẫn cụ thể. Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản ở mục THƯ VIỆN VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>&nbsp;. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc được biết. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Hiện tại C&ocirc;ng ty chuẩn bị nhập h&agrave;ng từ TH&Aacute;I LAN: t&uacute;i bao tr&aacute;i c&acirc;y bằng carton. Nhưng c&oacute; vấn đề em xin hỏi như sau ạ: Thực tế sản phẩm b&ecirc;n nước xuất khẩu chỉ c&oacute; 1 logo nhưng do b&ecirc;n c&ocirc;ng ty em y&ecirc;u cầu b&ecirc;n c&ocirc;ng ty nước xuất khẩu l&agrave;m th&ecirc;m 1 c&aacute;i logo của c&ocirc;ng ty em tr&ecirc;n bao b&igrave; nữa. Vậy cho em hỏi l&agrave; khi nhập h&agrave;ng về Việt Nam th&igrave; sản phẩm c&oacute; 2 logo: 1 của Th&aacute;i, 1 của Việt Nam liệu c&oacute; được chấp nhận hay kh&ocirc;ng ạ? Em xin ch&acirc;n th&agrave;nh cảm ơn ạ!</p>
        </td>
        <td>&nbsp;</td>
        <td>Nguy&ecirc;n Hiếu</td>
        <td>DN</td>
        <td>public</td>
        <td>0914237788</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=103" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Vật liệu chịu lửa Đại Đỉnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>C&ocirc;ng ty t&ocirc;i l&agrave; c&ocirc;ng ty c&oacute; vốn đầu tư nước ngo&agrave;i 100%, mới th&agrave;nh lập ng&agrave;y 08/06/2016 tại H&agrave; Tĩnh, cơ quan quản l&yacute; l&agrave; Cục thuế tỉnh H&agrave; Tĩnh. Vậy c&ocirc;ng ty t&ocirc;i muốn đưa người nước ngo&agrave;i sang Việt Nam l&agrave;m việc th&igrave; c&ocirc;ng ty t&ocirc;i cần thực hiện những thủ tục g&igrave;, xin c&ocirc;ng văn g&igrave;, c&oacute; cần đăng b&aacute;o tuyển dụng hay y&ecirc;u cầu g&igrave; kh&aacute;c kh&ocirc;ng? mong được giải đ&aacute;p sớm, t&ocirc;i xin cảm ơn</p>
        </td>
        <td><a href="mailto:daidinh668.vn@gmail.com">daidinh668.vn@gmail.com</a></td>
        <td>Lee, Wen - Hung</td>
        <td>DN</td>
        <td>public</td>
        <td>01659 039 861</td>
        <td>8</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=104" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty cổ phần khai th&aacute;c đ&aacute; Hưng Thịnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Hồng sơn, Phường Kỳ Phương, thị x&atilde; Kỳ Anh, tỉnh h&agrave; Tĩnh</td>
        <td>
            <p>Cục Thuế tỉnh H&agrave; Tĩnh trả lời như sau: Căn cứ khoản 3, Điều 16, Nghị định số 29/2008/NĐ-CP ng&agrave;y 14/3/2008 của Ch&iacute;nh phủ quy định về khu c&ocirc;ng nghiệp, khu chế xuất v&agrave; khu kinh tế v&agrave; Nghị định số 164/2013/NĐ-CP ng&agrave;y 12 th&aacute;ng 11 năm 2013 của Ch&iacute;nh phủ về sửa đổi, bổ sung một số điều của Nghị định số 29/2008/NĐ-CP ng&agrave;y 14 th&aacute;ng 3 năm 2008 của Ch&iacute;nh phủ quy định về khu c&ocirc;ng nghiệp, khu chế xuất v&agrave; khu kinh tế : &ldquo;..3. Nh&agrave; đầu tư c&oacute; dự &aacute;n đầu tư v&agrave;o khu kinh tế, kể cả dự &aacute;n đầu tư mở rộng, được hưởng ch&iacute;nh s&aacute;ch ưu đ&atilde;i &aacute;p dụng đối với địa b&agrave;n thuộc Danh mục địa b&agrave;n c&oacute; điều kiện kinh tế - x&atilde; hội đặc biệt kh&oacute; khăn v&agrave; c&aacute;c ch&iacute;nh s&aacute;ch ưu đ&atilde;i kh&aacute;c theo quy định của Nghị định n&agrave;y.&rdquo; Nếu đơn vị c&oacute; dự &aacute;n đầu tư sản xuất tại Khu kinh tế Vũng &Aacute;ng, l&agrave; địa b&agrave;n thuộc Danh mục c&oacute; điều kiện kinh tế x&atilde; hội đặc biệt kh&oacute; khăn th&igrave; được hưởng c&aacute;c ưu đ&atilde;i về ch&iacute;nh s&aacute;ch thuế theo quy định của ph&aacute;p luật. Về Thuế TNDN: Căn cứ điểm a, khoản 1, khoản 6 Điều 19; điểm a, khoản 1, khoản 5 Điều 20 Th&ocirc;ng tư số 78/2014/TT-BTC ng&agrave;y 18/6/2014 của Bộ T&agrave;i ch&iacute;nh Hướng dẫn thi h&agrave;nh Nghị định số 218/2013/NĐ-CP ng&agrave;y 26/12/2013 của Ch&iacute;nh phủ quy định v&agrave; hướng dẫn thi h&agrave;nh Luật Thuế thu nhập doanh nghiệp: &ldquo;Điều 19. Thuế suất ưu đ&atilde;i 1. Thuế suất ưu đ&atilde;i 10% trong thời hạn mười lăm năm (15 năm) &aacute;p dụng đối với: a) Thu nhập của doanh nghiệp từ thực hiện dự &aacute;n đầu tư mới tại: địa b&agrave;n c&oacute; điều kiện kinh tế - x&atilde; hội đặc biệt kh&oacute; khăn quy định tại Phụ lục ban h&agrave;nh k&egrave;m theo Nghị định số 218/2013/NĐ-CP, Khu kinh tế, Khu c&ocirc;ng nghệ cao kể cả khu c&ocirc;ng nghệ th&ocirc;ng tin tập trung được th&agrave;nh lập theo Quyết định của Thủ tướng Ch&iacute;nh phủ&hellip; ..6. Thời gian &aacute;p dụng thuế suất ưu đ&atilde;i quy định tại điều n&agrave;y được t&iacute;nh li&ecirc;n tục từ năm đầu ti&ecirc;n doanh nghiệp c&oacute; doanh thu từ dự &aacute;n đầu tư mới được hưởng ưu đ&atilde;i thuế&rdquo;. &ldquo;Điều 20. Ưu đ&atilde;i về thời gian miễn thuế, giảm thuế 1. Miễn thuế bốn năm (04 năm), giảm 50% số thuế phải nộp trong ch&iacute;n năm (09 năm) tiếp theo đối với: a) Thu nhập của doanh nghiệp từ thực hiện dự &aacute;n đầu tư mới quy định tại khoản 1 Điều 19 Th&ocirc;ng tư n&agrave;y. ..5. Năm miễn thuế, giảm thuế x&aacute;c định ph&ugrave; hợp với kỳ t&iacute;nh thuế. Thời điểm bắt đầu t&iacute;nh thời gian miễn thuế, giảm thuế t&iacute;nh li&ecirc;n tục kể từ kỳ t&iacute;nh thuế đầu ti&ecirc;n doanh nghiệp bắt đầu c&oacute; thu nhập chịu thuế (chưa trừ số lỗ c&aacute;c kỳ t&iacute;nh thuế trước chuyển sang). Trường hợp, trong kỳ t&iacute;nh thuế đầu ti&ecirc;n c&oacute; thu nhập chịu thuế m&agrave; dự &aacute;n đầu tư mới của doanh nghiệp c&oacute; thời gian hoạt động sản xuất, kinh doanh được hưởng ưu đ&atilde;i thuế dưới 12 (mười hai) th&aacute;ng, doanh nghiệp được lựa chọn hưởng ưu đ&atilde;i thuế đối với dự &aacute;n đầu tư mới ngay kỳ t&iacute;nh thuế đầu ti&ecirc;n đ&oacute; hoặc đăng k&yacute; với cơ quan thuế thời gian bắt đầu được hưởng ưu đ&atilde;i thuế từ kỳ t&iacute;nh thuế tiếp theo. Trường hợp doanh nghiệp đăng k&yacute; thời gian ưu đ&atilde;i thuế v&agrave;o kỳ t&iacute;nh thuế tiếp theo th&igrave; phải x&aacute;c định số thuế phải nộp của kỳ t&iacute;nh thuế đầu ti&ecirc;n để nộp v&agrave;o Ng&acirc;n s&aacute;ch Nh&agrave; nước theo quy định.&rdquo;</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng Tuy&ecirc;n truyền Hỗ trợ Người nộp thuế&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chi cục thuế H&agrave; Tĩnhi&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:cucthuehatinh.hti@gdt.gov.vn">cucthuehatinh.hti@gdt.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0393.890.062&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Xin hỏi ưu đ&atilde;i thuế TNDN cho dự &aacute;n đầu tư v&agrave;o khu kinh tế Vũng &aacute;ng</p>
        </td>
        <td><a href="mailto:conecomtkp@gmail.com">conecomtkp@gmail.com</a></td>
        <td>Nguyễn Thế Hải</td>
        <td>DN</td>
        <td>public</td>
        <td>0979846210</td>
        <td>27</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=105" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty cổ phần khai th&aacute;c đ&aacute; Hưng Thịnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Hồng Sơn, Phường Kỳ Phương, thị x&atilde; Kỳ Anh, tỉnh H&agrave; Tĩnh</td>
        <td>
            <p>Cục Thuế tỉnh H&agrave; Tĩnh trả lời như sau: Căn cứ Khoản 2, Điều 19, Nghị định số 124/2008/NĐ-CP ng&agrave;y 11 th&aacute;ng 12 năm 2008. &ldquo;Điều 19. Điều kiện &aacute;p dụng ưu đ&atilde;i thuế thu nhập doanh nghiệp Điều kiện &aacute;p dụng ưu đ&atilde;i thuế thu nhập doanh nghiệp thực hiện theo quy định tại Điều 18 Luật Thuế thu nhập doanh nghiệp... 2. Thu nhập kh&ocirc;ng được &aacute;p dụng quy định về ưu đ&atilde;i thuế thu nhập doanh nghiệp gồm: C&aacute;c khoản thu nhập được quy định tại điểm a, b v&agrave; c khoản 3 Điều 18 Luật Thuế thu nhập doanh nghiệp v&agrave; thu nhập từ hoạt động khai th&aacute;c kho&aacute;ng sản&rdquo;. Căn cứ Khoản 2.6 Mục I, phần H, Th&ocirc;ng tư số 130/2008/TT-BTC ng&agrave;y 26/12/2008 của Bộ t&agrave;i ch&iacute;nh. Đ&atilde; được sửa đổi, bổ sung tại khoản 8, Điều 18, Th&ocirc;ng tư số 123/2012/TT-BTC ng&agrave;y 27/7 2012 của Bộ t&agrave;i ch&iacute;nh &ldquo;Hướng dẫn thi h&agrave;nh một số điều của Luật Thuế thu nhập doanh nghiệp số 14/2008/QH12 v&agrave; hướng dẫn thi h&agrave;nh Nghị định số 124/2008/NĐ-CP ng&agrave;y 11/12/2008; Nghị định số 122/2011/NĐ-CP ng&agrave;y 27/12/2011 của Ch&iacute;nh phủ quy định chi tiết thi h&agrave;nh một số điều của Luật Thuế thu nhập doanh nghiệp&rdquo;. &ldquo;Điều 18. Điều kiện, nguy&ecirc;n tắc &aacute;p dụng ưu đ&atilde;i thuế thu nhập doanh nghiệp. ..... 8. Việc ưu đ&atilde;i thuế thu nhập doanh nghiệp kh&ocirc;ng &aacute;p dụng đối với: a) C&aacute;c khoản thu nhập kh&aacute;c quy định tại Điều 7 Th&ocirc;ng tư n&agrave;y. b) Thu nhập từ hoạt động t&igrave;m kiếm, thăm d&ograve;, khai th&aacute;c dầu kh&iacute; v&agrave; t&agrave;i nguy&ecirc;n qu&iacute; hiếm kh&aacute;c. c) Thu nhập từ kinh doanh tr&ograve; chơi c&oacute; thưởng, c&aacute; cược theo quy định của ph&aacute;p luật. d) Thu nhập từ hoạt động khai th&aacute;c kho&aacute;ng sản. e) Thu nhập từ kinh doanh dịch vụ thuộc đối tượng chịu thuế ti&ecirc;u thụ đặc biệt theo quy định của Luật thuế ti&ecirc;u thụ đặc biệt&rdquo;. Căn cứ khoản 1, Khoản 7, Điều 23, Th&ocirc;ng tư số 123/2012/TT-BTC ng&agrave;y 27/7 2012 của Bộ t&agrave;i ch&iacute;nh: &ldquo;Điều 23. Hiệu lực thi h&agrave;nh 1. Th&ocirc;ng tư n&agrave;y c&oacute; hiệu lực từ ng&agrave;y 10 th&aacute;ng 9 năm 2012 v&agrave; &aacute;p dụng cho kỳ t&iacute;nh thuế thu nhập doanh nghiệp từ năm 2012 trở đi. &hellip;&hellip;. 7. Kh&ocirc;ng &aacute;p dụng ưu đ&atilde;i thuế thu nhập doanh nghiệp đối với thu nhập từ hoạt động khai th&aacute;c kho&aacute;ng sản của c&aacute;c doanh nghiệp được th&agrave;nh lập v&agrave; cấp giấy ph&eacute;p đầu tư về hoạt động khai th&aacute;c kho&aacute;ng sản từ ng&agrave;y 01/01/2009. Trường hợp doanh nghiệp khai th&aacute;c kho&aacute;ng sản hoạt động trước ng&agrave;y 01/01/2009 đang hưởng ưu đ&atilde;i thuế thu nhập doanh nghiệp theo quy định tại c&aacute;c văn bản quy phạm ph&aacute;p luật trước đ&acirc;y về thuế thu nhập doanh nghiệp hoặc theo Giấy ph&eacute;p đầu tư hoặc Giấy chứng nhận ưu đ&atilde;i đầu tư đ&atilde; cấp th&igrave; tiếp tục được hưởng c&aacute;c mức ưu đ&atilde;i n&agrave;y cho thời gian c&ograve;n lại&rdquo;. C&ocirc;ng ty CP khai th&aacute;c đ&aacute; Hưng Thịnh được cấp giấy chứng nhận đăng k&yacute; kinh doanh năm 2004. Dự &aacute;n Khai th&aacute;c v&agrave; chế biến đ&aacute; x&acirc;y dựng tại Khe Đ&aacute; B&agrave;n, x&atilde; Kỳ Phương, huyện Kỳ Anh, tỉnh H&agrave; Tĩnh, được cấp Giấy chứng nhận đầu tư số 28121000181 của UBND tỉnh H&agrave; Tĩnh cấp ng&agrave;y 24/9/2012, tại thời điểm &aacute;p dụng Nghị định số 124/2008/NĐ-CP ng&agrave;y 11/12/2008 v&agrave; c&aacute;c Th&ocirc;ng tư hướng dẫn n&ecirc;u tr&ecirc;n. Căn cứ v&agrave;o c&aacute;c quy định tr&ecirc;n, Dự &aacute;n Khai th&aacute;c v&agrave; chế biến đ&aacute; x&acirc;y dựng của C&ocirc;ng ty cổ phần khai th&aacute;c đ&aacute; Hưng Thịnh kh&ocirc;ng được hưởng ưu đ&atilde;i thuế TNDN đối với thu nhập từ hoạt động khai th&aacute;c kho&aacute;ng sản; Do: C&ocirc;ng ty được cấp Giấy chứng nhận đầu tư về hoạt động khai th&aacute;c kho&aacute;ng sản v&agrave; thời gian triển khai thực hiện dự &aacute;n sau ng&agrave;y 01/01/2009./.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng Tuy&ecirc;n truyền Hỗ trợ Người nộp thuế&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chi cục thuế H&agrave; Tĩnhi&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:cucthuehatinh.hti@gdt.gov.vn">cucthuehatinh.hti@gdt.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0393.890.062&quot;}</p>
        </td>
        <td>
            <p>T&ocirc;i: Nguyễn Thế Hải (sđt 0979846210), h&ograve;m thư điện tử:&nbsp;<a href="mailto:conecomtkp@gmail.com">conecomtkp@gmail.com</a>Lời đầu ti&ecirc;n, T&ocirc;i xin gửi lời ch&agrave;o sức khỏe đến c&aacute;c Đồng Ch&iacute; tr&ecirc;n chương tr&igrave;nh hỏi đ&aacute;p ch&iacute;nh s&aacute;ch. C&acirc;u hỏi của t&ocirc;i gửi đến như sau: C&ocirc;ng ty t&ocirc;i được cấp giấy chứng nhận kinh doanh năm 2004,ng&agrave;nh nghề l&agrave; khai th&aacute;c v&agrave; chế biến đ&aacute;, c&aacute;t, sỏi; Th&aacute;ng 09/2012 Cty được UBND tỉnh cấp Giấy chứng nhận đầu tư cho dự &aacute;n khai th&aacute;c v&agrave; chế biến đ&aacute; tại x&atilde; Kỳ Phương, huyện Kỳ Anh, tỉnh H&agrave;; tổng gi&aacute; trị đầu tư 84 tỷ đồng; thời gian thực hiện dự &aacute;n 16 năm bắt đầu từ th&aacute;ng 09/2012 . Th&aacute;ng 11/2012 C&ocirc;ng ty được UBND tỉnh H&agrave; Tĩnh cấp giấy ph&eacute;p khai th&aacute;c kho&aacute;ng sản; C&ocirc;ng suất 490 000 m3/năm; thời hạn khai th&aacute;c 15 năm. Căn cứ khoản 1, điều 14, quyết định 72/2006/QĐ-TTg ng&agrave;y 03/04/2006 của Thủ Tướng Ch&iacute;nh phủ quy định: &ldquo;1. Tất cả c&aacute;c dự &aacute;n đầu tư của c&aacute;c tổ chức, c&aacute; nh&acirc;n trong nước v&agrave; nước ngo&agrave;i đầu tư v&agrave;o KKT Vũng &Aacute;ng được hưởng mức thuế suất thuế thu nhập doanh nghiệp 10% &aacute;p dụng trong 15 năm, kể từ khi dự &aacute;n đầu tư bắt đầu hoạt động kinh doanh; được miễn thuế thu nhập doanh nghiệp 04 năm, kể từ khi c&oacute; thu nhập chịu thuế v&agrave; giảm 50% số thuế phải nộp cho 09 năm tiếp theo; được hưởng c&aacute;c ưu đ&atilde;i về c&aacute;c loại thuế kh&aacute;c &aacute;p dụng đối với địa b&agrave;n c&oacute; điều kiện kinh tế - x&atilde; hội đặc biệt kh&oacute; khăn theo quy định của Luật Đầu tư, c&aacute;c luật thuế kh&aacute;c v&agrave; c&aacute;c ưu đ&atilde;i kh&aacute;c theo Điều ước quốc tế m&agrave; Việt Nam l&agrave; th&agrave;nh vi&ecirc;n.&rdquo; Căn cứ điều 4, Quyết định 19/2010/QĐ-TTg ng&agrave;y 03/03/2010 ban h&agrave;nh thay thế quy chế k&egrave;m theo Quyết định 72/2006/QĐ-TTg quy định: &ldquo; C&aacute;c tổ chức, c&aacute; nh&acirc;n Việt Nam thuộc mọi th&agrave;nh phần kinh tế, người Việt Nam định cư ở nước ngo&agrave;i v&agrave; c&aacute;c nh&agrave; đầu tư nước ngo&agrave;i được khuyến kh&iacute;ch đầu tư v&agrave;o KKT Vũng &Aacute;ng trong c&aacute;c lĩnh vực: đầu tư kinh doanh kết cấu hạ tầng, ph&aacute;t triển c&ocirc;ng nghiệp, ph&aacute;t triển đ&ocirc; thị, cảng biển, kinh doanh thương mại, dịch vụ, du lịch, vui chơi, giải tr&iacute;, t&agrave;i ch&iacute;nh - ng&acirc;n h&agrave;ng, vận tải, bảo hiểm, gi&aacute;o dục, đ&agrave;o tạo, văn h&oacute;a, thể dục thể thao, khoa học c&ocirc;ng nghệ, y tế, nh&agrave; ở, xuất khẩu, nhập khẩu h&agrave;ng h&oacute;a v&agrave; c&aacute;c hoạt động sản xuất kinh doanh kh&aacute;c được bảo hộ theo quy định của ph&aacute;p luật Việt Nam v&agrave; c&aacute;c điều ước quốc tế c&oacute; li&ecirc;n quan.&rdquo; Căn cứ điểm a, khoản 1, điều 6, quyết định 16/2007/QĐ-UBND ng&agrave;y 27/04/2007 quy định: &ldquo; Điều 6. Ch&iacute;nh s&aacute;ch ưu đ&atilde;i đầu tư: 1. Tất cả c&aacute;c dự &aacute;n đầu tư v&agrave;o KKT Vũng &Aacute;ng của c&aacute;c tổ chức, c&aacute; nh&acirc;n trong nước v&agrave; nước ngo&agrave;i đều được hưởng ưu đ&atilde;i về thuế suất thuế thu nhập doanh nghiệp v&agrave; c&aacute;c loại thuế kh&aacute;c theo quy định tại khoản 1, khoản 2 v&agrave; khoản 3, Điều 14 Quy chế 72/2006/QĐ-TTg ng&agrave;y 03/4/2006, cụ thể: a) Được hưởng mức thuế suất thuế thu nhập doanh nghiệp 10% &aacute;p dụng trong 15 năm, kể từ khi dự &aacute;n bắt đầu hoạt động kinh doanh; Được miễn thuế thu nhập doanh nghiệp trong 04 năm, kể từ khi c&oacute; thu nhập chịu thuế v&agrave; giảm 50% số thuế phải nộp cho 9 năm tiếp theo;&rdquo; Căn cứ khoản 3, điều 1, quyết định 07/2012/QĐ-UBND ng&agrave;y 21/03/2012 quy định: &ldquo; C&aacute;c dự &aacute;n đầu tư v&agrave;o khu kinh tế, khu c&ocirc;ng nghiệp của tỉnh được hưởng c&aacute;c ch&iacute;nh s&aacute;ch ưu đ&atilde;i theo Quyết định 16/2007/QĐ-UBND &hellip;&rdquo; Căn cứ quy định tại Khoản 1 Điều 13 v&agrave; Khoản 1 Điều 14 Luật thuế thu nhập doanh nghiệp số 14/2008/QH12 ng&agrave;y 03/06/2008, doanh nghiệp th&agrave;nh lập mới từ dự &aacute;n đầu tư tại Khu kinh tế th&agrave;nh lập theo Quyết định của Thủ tướng Ch&iacute;nh phủ được &aacute;p dụng thuế suất 10% trong 15 năm, miễn thuế tối đa kh&ocirc;ng qu&aacute; bốn năm v&agrave; giảm 50% số thuế phải nộp tối đa kh&ocirc;ng qu&aacute; ch&iacute;n năm tiếp theo. Vậy xin hỏi l&agrave; Cty t&ocirc;i đăng k&yacute; lần đầu v&agrave;o năm 2004, nhưng đến năm 2012 mới được cấp Giấy chứng nhận đầu tư đầu ti&ecirc;n cho dự &aacute;n đầu tư n&oacute;i tr&ecirc;n, như vậy dự &aacute;n tr&ecirc;n c&oacute; được hưởng c&aacute;c ch&iacute;nh s&aacute;ch ưu đ&atilde;i về thuế thu nhập doanh nghiệp hay kh&ocirc;ng ? Nếu được th&igrave; x&aacute;c định thời gian bắt đầu v&agrave; được hưởng ưu đ&atilde;i như thế n&agrave;o ? Rất mong sớm nhận được c&acirc;u trả lời từ Ban bi&ecirc;n tập chương tr&igrave;nh! Xin ch&acirc;n th&agrave;nh cảm ơn !</p>
        </td>
        <td><a href="mailto:conecomtkp@gmail.com">conecomtkp@gmail.com</a></td>
        <td>Nguyễn Thế hải</td>
        <td>DN</td>
        <td>public</td>
        <td>0979846210</td>
        <td>27</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=106" onclick="GoToLink(this);return false;" target="_self">Cty TNHH Ducon Ha Tinh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Địa chỉ: P 223, nh&agrave; B3, kh&aacute;ch sạn Polaris, Phường Kỳ Thịnh, Thị x&atilde; Kỳ Anh, tỉnh H&agrave; Tĩnh, Vi&ecirc;t Nam.</td>
        <td>
            <p>I. Về Quy hoạch điện v&agrave; v&agrave; x&aacute;c nhận sự ph&ugrave; hợp với quy hoạch ph&aacute;t triển điện lực. Nội dung n&agrave;y Sở C&ocirc;ng Thương đ&atilde; trả lời C&ocirc;ng ty TNHH DUCON H&agrave; Tĩnh tại Văn bản số 1430/SCT-QLNL ng&agrave;y 23/9/2016 v&egrave; việc quy hoạch TBA 110 kV cung cấp điện cho C&ocirc;ng ty TNHH DUCON, cụ thể như sau: 1. Theo đề nghị của C&ocirc;ng ty, Sở C&ocirc;ng Thương đ&atilde; đưa danh mục Trạm biến &aacute;p 110 kV cấp điện cho C&ocirc;ng ty TNHH DUCON H&agrave; Tĩnh v&agrave;o &ldquo;Dự thảo Quy hoạch PTĐL tỉnh H&agrave; Tĩnh giai đoạn 2016-2025, c&oacute; x&eacute;t đến năm 2035 - Hợp phần I: Quy hoạch ph&aacute;t triển hệ thống điện 110 kV&rdquo; (Trạm 110kV DAKTAI), giai đoạn thực hiện: 2021-2025. Hiện nay tỉnh H&agrave; Tĩnh đang tr&igrave;nh Bộ C&ocirc;ng Thương ph&ecirc; duyệt. 2. Đ&acirc;y l&agrave; Trạm biến &aacute;p cung cấp điện ri&ecirc;ng cho C&ocirc;ng ty TNHH DUCON H&agrave; Tĩnh n&ecirc;n sau khi Quy hoạch được ph&ecirc; duyệt, C&ocirc;ng ty c&oacute; tr&aacute;ch nhiệm l&agrave;m việc với Tổng C&ocirc;ng ty Điện lực Miền Bắc để thỏa thuận c&aacute;c nội dung về đầu tư x&acirc;y dựng đường d&acirc;y v&agrave; trạm biến &aacute;p, phương thức b&aacute;n điện. 3. Nếu dự &aacute;n triển khai sớm v&agrave; nhu cầu cung cấp điện từ nguồn kh&aacute;c kh&ocirc;ng đ&aacute;p ứng nhu cầu của dự &aacute;n th&igrave; C&ocirc;ng ty b&aacute;o c&aacute;o Sở C&ocirc;ng Thương, để Sở C&ocirc;ng Thương hướng dẫn l&agrave;m c&aacute;c thủ tục điều chỉnh quy hoạch ph&aacute;t triển điện lực tỉnh H&agrave; Tĩnh (đưa tiến độ thực hiện l&ecirc;n trước giai đoạn 2021-2025). Về kiểm tra, x&aacute;c nhận sự ph&ugrave; hợp với Quy hoạch ph&aacute;t triển điện lực: Khi triển khai thực hiện dự &aacute;n, C&ocirc;ng ty t&iacute;nh to&aacute;n cụ thể nhu cầu cung cấp điện, dự kiến điểm đấu nối, phương &aacute;n tuyến, kết cấu trạm biến &aacute;p v&agrave; gửi hồ sơ Sở C&ocirc;ng Thương để Sở C&ocirc;ng Thương kiểm tra, x&aacute;c nhận. II. Về kiểm tra sự ph&ugrave; hợp quy hoạch ng&agrave;nh đối với Nh&agrave; m&aacute;y sản xuất Silic-Mangan của C&ocirc;ng ty TNHH DUCON: 1. Sản phẩm của Nh&agrave; m&aacute;y Silic &ndash; Mangan tại Khu Kinh tế Vũng &Aacute;ng l&agrave; nguy&ecirc;n liệu cho dự &aacute;n Nh&agrave; m&aacute;y sản xuất th&eacute;p; đầu tư trong Khu c&ocirc;ng nghiệp, dịch vụ phụ trợ ph&iacute;a T&acirc;y Nam đường tr&aacute;nh Quốc lộ 1A thuộc Khu kinh tế Vũng &Aacute;ng, ph&ugrave; hợp với định hướng ph&aacute;t triển CN-TTCN của tỉnh v&agrave; ph&aacute;t triển c&ocirc;ng nghiệp hỗ trợ của cả nước. 2. Thủ tục, c&aacute;c bước đầu tư tại Khu Kinh tế Vũng &Aacute;ng, đề nghị C&ocirc;ng ty li&ecirc;n hệ với BQL Khu Kinh tế Vũng &Aacute;ng để được hướng dẫn cụ thể. Li&ecirc;n quan đến dự &aacute;n, Sở C&ocirc;ng Thương đ&atilde; nhận được Văn bản số 800/KKT-QHXD của BQL Khu kinh tế tỉnh về việc xin &yacute; kiến g&oacute;p &yacute; Đồ &aacute;n Quy hoạch chi tiết x&acirc;y dựng Nh&agrave; m&aacute;y sản xuất Silic - Mangan tỷ lệ 1/500 của C&ocirc;ng ty TNHH Ducon H&agrave; Tĩnh tại Khu kinh tế Vũng &Aacute;ng, thị x&atilde; Kỳ Anh; sau khi nghi&ecirc;n cứu, Sở C&ocirc;ng Thương đ&atilde; c&oacute; &yacute; kiến g&oacute;p &yacute; tại Văn bản số 1680/SCT - QLCN ng&agrave;y 04/11/2016, đề nghị C&ocirc;ng ty bổ sung, giải tr&igrave;nh để ho&agrave;n thiện. L&agrave; dự &aacute;n c&ocirc;ng nghiệp thuộc lĩnh vực c&ocirc;ng nghiệp hỗ trợ, Sở C&ocirc;ng Thương H&agrave; Tĩnh đề nghị C&ocirc;ng ty TNHH DUCON H&agrave; Tĩnh đẩy nhanh c&aacute;c thủ tục để thực hiện dự &aacute;n (Quy hoạch; lập, thẩm định v&agrave; ph&ecirc; duyệt dự &aacute;n đầu tư; thu&ecirc; đất&hellip;) sớm đưa dự &aacute;n v&agrave;o vận h&agrave;nh, khai th&aacute;c. Sở C&ocirc;ng Thương H&agrave; Tĩnh th&ocirc;ng b&aacute;o để C&ocirc;ng ty TNHH DU CON H&agrave; Tĩnh biết v&agrave; chủ động thực hiện.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Sở C&ocirc;ng Thương H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Số 02, Trần Ph&uacute;, th&agrave;nh phố H&agrave; Tĩnh, tỉnh H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:socongthuong@hatinh.gov.vn">socongthuong@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0393 857 084&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Cty TNHH Ducon H&agrave; Tĩnh, c&oacute; giấy ph&eacute;p đầu tư 12/2015, th&agrave;nh lập ty 6/2016, để đầu tư dự &aacute;n sx Silic mangan, điện sản xuất gđ 1 l&agrave; 34.000KVA. 1, k&iacute;nh đề nghị Sở C&ocirc;ng Thương kiểm tra, x&aacute;c nhận sự ph&ugrave; hợp với qui hoạch điện v&agrave; đ&atilde; qui hoạch trạm biến &aacute;p cho cty Ducon hay chưa? 2. mong qu&iacute; sở kiểm nh&agrave; m&aacute;y sx silic mangan tại Kỳ Long, Kỳ Li&ecirc;n c&oacute; ph&ugrave; hợp với qui hoạch ng&agrave;nh hay chưa? nếu qui hoạch điện v&agrave; qui hoạch chưa c&oacute;, th&igrave; thủ tục xin ph&eacute;p thế n&agrave;o? xin ch&acirc;n th&agrave;nh c&aacute;m qui sở!</p>
        </td>
        <td><a href="mailto:thuhangsonca@gmail.com">thuhangsonca@gmail.com</a></td>
        <td>Tạ Kim Ph&uacute;c</td>
        <td>DN</td>
        <td>public</td>
        <td>0975759777</td>
        <td>3</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=107" onclick="GoToLink(this);return false;" target="_self">hội ND x&atilde; lộc y&ecirc;n<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>x&atilde; Lộc Y&ecirc;n Huyện Hương Kh&ecirc;&nbsp; tỉnh H&agrave; Tĩnh</td>
        <td>
            <p>Sở N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n trả lời như sau: Hiện nay, to&agrave;n tỉnh, c&oacute; 198 trang trại đạt ti&ecirc;u ch&iacute; theo quy định Th&ocirc;ng tư số 27/2011/TT-BNN ng&agrave;y 13/4/2011 của Bộ N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n, trong đ&oacute;: C&oacute; 9 trang trại trồng trọt, 157 trang trại chăn nu&ocirc;i, 6 trang trại l&acirc;m nghiệp, 18 trang trại thuỷ sản v&agrave; 8 trang trại tổng hợp.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Chi cục Ph&aacute;t triển n&ocirc;ng th&ocirc;n&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Sở N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:phongptnt.ht@gmail.com">phongptnt.ht@gmail.com</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0393.855.442&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Xin hỏi hiện nay số lượng trang trại ph&acirc;n theo ng&agrave;nh hoạt động ở H&agrave; Tĩnh l&agrave; bao nhi&ecirc;u ạ?</p>
        </td>
        <td><a href="mailto:canhcoi1981@gmail.com">canhcoi1981@gmail.com</a></td>
        <td>Đinh Hữu Cảnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0978002102</td>
        <td>9</td>
    </tr>

    <tr>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=113" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Vật liệu chịu lửa Đại Đỉnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="Edit" src="http://www.hatinh.gov.vn/_layouts/images/menudark.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TDP Nh&acirc;n Thắng, Phường Kỳ Phương, TX Kỳ ANh, Tỉnh H&agrave; Tỉnh</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Bản vẽ qui hoạch 1/500 c&oacute; qui định n&agrave;o về c&acirc;y xanh trồng xung quanh dự &aacute;n đầu tư phải tối thiểu c&oacute; chiều rộng l&agrave; 3.5m hay kh&ocirc;ng? xin cảm ơn</p>
        </td>
        <td><a href="mailto:daidinh668.vn@gmail.com">daidinh668.vn@gmail.com</a></td>
        <td>LEE WEN HUNG</td>
        <td>DN</td>
        <td>public</td>
        <td>01659039861</td>
        <td>22</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=115" onclick="GoToLink(this);return false;" target="_self">c&ocirc;ng ty vật liệu x&acirc;y dựng ho&agrave;ng hiệp<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Th&ocirc;n b&agrave;u l&aacute;ng, x&atilde; thạch đ&agrave;i, huyện thạch h&agrave;, tỉnh h&agrave; tĩnh</td>
        <td>
            <p>Sở Giao th&ocirc;ng vận tải trả lời như sau: Đường cao tốc đi qua địa phận 11 x&atilde; tr&ecirc;n địa b&agrave;n huyện Thạch H&agrave;, tỉnh H&agrave; Tĩnh, gồm : Việt Xuy&ecirc;n, Thạch Ngọc, Thạch Tiến, Thạch Vĩnh, Thạch Lưu, Thạch Đ&agrave;i, Thạch Xu&acirc;n,Thạch T&acirc;n, Thạch Hương, Thạch L&acirc;m, Thạch Điền (c&oacute; bản vẽ gửi k&egrave;m theo)</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;L&ecirc; Th&agrave;nh Trung&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Sở Giao th&ocirc;ng Vận tải H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ductralyk6@gmail.com">ductralyk6@gmail.com</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0967723214&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Cho ch&uacute;ng t&ocirc;i hỏi l&agrave; đường cao tốc đường bộ sẽ đia qua những x&atilde; n&agrave;o của huyện thạch h&agrave;? v&igrave; C&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; &yacute; định x&acirc;y dựng trang trại ở địa b&agrave;n gần đ&acirc;y m&agrave; nghe n&oacute;i chuẩn bị c&oacute; đường cao tốc đi qua</p>
        </td>
        <td><a href="mailto:hoanganhhiepga@gmail.com">hoanganhhiepga@gmail.com</a></td>
        <td>ho&agrave;ng anh hiệp</td>
        <td>DN</td>
        <td>public</td>
        <td>0979804038</td>
        <td>5</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=116" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP tư vấn v&agrave; x&acirc;y dựng Đại Ph&uacute; Hưng<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Tầng 3 số 162- H&agrave; Huy Tập- TP H&agrave; Tĩnh</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Doanh nghiệp xin hỏi: - Đầu năm 2012, c&ocirc;ng ty c&oacute; vay vốn của c&aacute; nh&acirc;n để phục vụ cho sản xuất kinh doanh trong năm 2012. việc vay vốn giữa c&ocirc;ng ty v&agrave; c&aacute; nh&acirc;n được thể hiện qua hợp đồng vay với thời hạn 10 năm v&agrave; với l&atilde;i suất bằng 1,2 lần l&atilde;i suất ng&acirc;n h&agrave;ng. Do kh&oacute; khăn n&ecirc;n đến 31/12/2012 c&ocirc;ng ty chưa thể thanh to&aacute;n tiền l&atilde;i vay năm 2012 cho c&aacute; nh&acirc;n n&agrave;y nhưng c&ocirc;ng ty vẫn hạch to&aacute;n chi ph&iacute; l&atilde;i vay n&agrave;y v&agrave;o chi ph&iacute; để được trừ t&iacute;nh thuế trong năm 2012. đến nay( 20/11/2016) khoản l&atilde;i vay vẫn chưa được trả vậy xin hỏi c&ocirc;ng ty c&oacute; được đưa v&agrave;o chi ph&iacute; để t&iacute;nh thu nhập chịu thuế trong năm 2012,2013,2014,2015, 2016 chi ph&iacute; l&atilde;i vay phải trả m&agrave; chưa thanh to&aacute;n hay kh&ocirc;ng? Xin ch&acirc;n th&agrave;nh cảm ơn!</p>
        </td>
        <td><a href="mailto:daiphuhungcjc@gmail.com">daiphuhungcjc@gmail.com</a></td>
        <td>L&ecirc; Văn Nam</td>
        <td>DN</td>
        <td>public</td>
        <td>0943764886</td>
        <td>27</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=117" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Lộc Ph&aacute;t 68<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>X&atilde; Kỳ Bắc</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Hiện nay một số HTX th&agrave;nh lập tại x&atilde; Kỳ Bắc nhưng kh&ocirc;ng được cấp đất để sản xuất kinh doanh, c&oacute; 02 HTX gửi hồ sơ l&ecirc;n UBND x&atilde; nhưng kh&ocirc;ng c&oacute; quỹ đất cho thu&ecirc;.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH Lộc Ph&aacute;t 68</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>39</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=118" onclick="GoToLink(this);return false;" target="_self">Hợp t&aacute;c x&atilde; chế biến thủy sản Kỳ Xu&acirc;n<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Kỳ Xu&acirc;n</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Hiện nay HTX c&oacute; 05 cơ sở sản xuất nhưng chưa được cấp đất, đề nghị quan t&acirc;m tạo điều kiện cấp đất cho HTX hoạt động.</p>
        </td>
        <td>&nbsp;</td>
        <td>Hợp t&aacute;c x&atilde; chế biến thủy sản Kỳ Xu&acirc;n</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>39</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=119" onclick="GoToLink(this);return false;" target="_self">Hợp t&aacute;c x&atilde; chế biến thủy sản Kỳ Xu&acirc;n<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Kỳ Xu&acirc;n</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Sự cố m&ocirc;i trường ảnh hưởng lớn đến hoạt động của HTX, đề nghị c&oacute; ch&iacute;nh s&aacute;ch hỗ trợ người lao động chuyển đổi nghề; c&oacute; sự quan t&acirc;m hỗ trợ HTX trong giai đoạn n&agrave;y.</p>
        </td>
        <td>&nbsp;</td>
        <td>Hợp t&aacute;c x&atilde; chế biến thủy sản Kỳ Xu&acirc;n</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>39</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=120" onclick="GoToLink(this);return false;" target="_self">Hợp t&aacute;c x&atilde; chế biến thủy sản Kỳ Xu&acirc;n<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Kỳ Xu&acirc;n</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Sự cố m&ocirc;i trường ảnh hưởng lớn đến hoạt động của HTX, đề nghị c&oacute; ch&iacute;nh s&aacute;ch hỗ trợ người lao động chuyển đổi nghề; c&oacute; sự quan t&acirc;m hỗ trợ HTX trong giai đoạn n&agrave;y.</p>
        </td>
        <td>&nbsp;</td>
        <td>Hợp t&aacute;c x&atilde; chế biến thủy sản Kỳ Xu&acirc;n</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>39</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=121" onclick="GoToLink(this);return false;" target="_self">Doanh nghiệp tư nh&acirc;n thương mại v&agrave; dịch vụ Văn Phương (x&atilde; Kỳ Ninh)<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>x&atilde; Kỳ Ninh</td>
        <td>
            <p>Sở N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n sau khi r&agrave; so&aacute;t, kiểm tra c&oacute; &yacute; kiến như sau: 1. Quy định đối tượng, định mức bồi thường thiệt hại do sự cố m&ocirc;i trường biển thuộc thẩm quyền của Ch&iacute;nh phủ v&agrave; c&aacute;c Bộ, ng&agrave;nh Trung ương. 2. Về c&aacute;c nội dung kiến nghị, đề xuất của Doanh nghiệp tư nh&acirc;n thương mại v&agrave; dịch vụ Văn Phương: UBND tỉnh đ&atilde; kiến nghị c&aacute;c nội dung tr&ecirc;n đề xuất tới Ch&iacute;nh phủ v&agrave; c&aacute;c Bộ, ng&agrave;nh li&ecirc;n quan, tuy nhi&ecirc;n những nội dung đề xuất của c&aacute;c doanh nghiệp về hỗ trợ: kinh doanh xăng, dầu, nhờn, bếp ga, phụ t&ugrave;ng m&aacute;y m&oacute;c; thiệt hại kh&aacute;c như doanh thu giảm s&uacute;t của c&aacute;c doanh nghiệp, chi ph&iacute; quản l&yacute;... chưa được Ch&iacute;nh phủ v&agrave; c&aacute;c Bộ, ng&agrave;nh Trung ương bổ sung.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;L&ecirc; Đức Nh&acirc;n&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; gi&aacute;m đốc Sở&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sonongnghiep@hatinh.gov.vn">sonongnghiep@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0945777368&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Doanh nghiệp hoạt động kinh doanh xăng, dầu, nhờn, bếp ga; lưới ngư cụ; phụ t&ugrave;ng m&aacute;y m&oacute;c chủ yếu phục vụ cho ngư d&acirc;n. Do sự cố m&ocirc;i trường ảnh hưởng lớn đến hoạt động đ&aacute;nh bắt c&aacute; của c&aacute;c ngư d&acirc;n, dẫn tới ảnh hưởng đến kết quả kinh doanh, thu nhập của doanh nghiệp nhưng chưa được nằm trong diện k&ecirc; khai đền b&ugrave; thiệt hại, đề nghị UBND tỉnh, c&aacute;c ng&agrave;nh chức năng xem x&eacute;t, tạo điều kiện hỗ trợ doanh nghiệp.</p>
        </td>
        <td>&nbsp;</td>
        <td>Doanh nghiệp tư nh&acirc;n thương mại v&agrave; dịch vụ Văn Phương</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>9</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=122" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP XNK Thủy sản Nam H&agrave; Tĩnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>thị x&atilde; Kỳ Anh</td>
        <td>
            <p>Sở N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n sau khi r&agrave; so&aacute;t, kiểm tra c&oacute; &yacute; kiến như sau: 1. Quy định đối tượng, định mức bồi thường thiệt hại do sự cố m&ocirc;i trường biển thuộc thẩm quyền của Ch&iacute;nh phủ v&agrave; c&aacute;c Bộ, ng&agrave;nh Trung ương. 2. Về c&aacute;c nội dung kiến nghị, đề xuất của C&ocirc;ng ty CPXNK Nam Kỳ Anh: UBND tỉnh đ&atilde; kiến nghị c&aacute;c nội dung tr&ecirc;n đề xuất tới Ch&iacute;nh phủ v&agrave; c&aacute;c Bộ, ng&agrave;nh li&ecirc;n quan, tuy nhi&ecirc;n những nội dung đề xuất của c&aacute;c doanh nghiệp về hỗ trợ: kinh doanh xăng, dầu, nhờn, bếp ga, phụ t&ugrave;ng m&aacute;y m&oacute;c; thiệt hại kh&aacute;c như doanh thu giảm s&uacute;t của c&aacute;c doanh nghiệp, chi ph&iacute; quản l&yacute;... chưa được Ch&iacute;nh phủ v&agrave; c&aacute;c Bộ, ng&agrave;nh Trung ương bổ sung.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Đức Nh&acirc;n&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; gi&aacute;m đốc sở&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sonongnghiep@hatinh.gov.vn">sonongnghiep@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0945777368&quot;}&nbsp;</p>
        </td>
        <td>
            <p>C&ocirc;ng ty hoạt động trong lĩnh vực thu mua, chế biến, xuất khẩu thủy sản n&ecirc;n sự cố m&ocirc;i trường ảnh hưởng rất lớn đến hoạt động của c&ocirc;ng ty (C&ocirc;ng ty phải ngừng hoạt động 03 th&aacute;ng v&agrave; 05 th&aacute;ng chỉ hoạt động cầm chừng). Tuy nhi&ecirc;n, tại văn bản số 7433/BNN-TCTS ng&agrave;y 01/9/2016 của Bộ N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n chỉ hỗ trợ cho người l&agrave;m thu&ecirc; v&agrave; thủy sản c&ograve;n lưu kho được thu mua trước ng&agrave;y 30/8/2016, kh&ocirc;ng hỗ trợ về c&aacute;c khoản thiệt hại kh&aacute;c như doanh thu giảm s&uacute;t của doanh nghiệp, chi ph&iacute; quản l&yacute;,... Đề nghị UBND tỉnh, Sở N&ocirc;ng nghiệp v&agrave; PTNT c&oacute; &yacute; kiến với Bộ N&ocirc;ng nghiệp v&agrave; PTNT về vấn đề n&agrave;y, tạo điều kiện hỗ trợ doanh nghiệp.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty CP XNK Thủy sản Nam H&agrave; Tĩnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>9</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=123" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP x&acirc;y lắp v&agrave; thương mại &ocirc; t&ocirc; Ho&agrave;ng H&agrave;<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>th&agrave;nh phố H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời: Quy hoạch tổng thể c&aacute;c điểm đấu nối v&agrave;o c&aacute;c quốc lộ qua địa b&agrave;n tỉnh H&agrave; Tĩnh đ&atilde; được ƯBND tỉnh ph&ecirc; duyệt tại Quyết định số 975/QĐ-UBND ng&agrave;y 05/04/2010; Quy hoạch tổng thể c&aacute;c điểm đấu nối v&agrave;o Quốc lộ 15B v&agrave; c&aacute;c đường tỉnh, cập nhật, bổ sung c&aacute;c điểm đấu nối v&agrave;o cửa h&agrave;ng xăng dầu tr&ecirc;n c&aacute;c quốc lộ đ&atilde; được ƯBND tỉnh ph&ecirc; duyệt tại Quyết định số 3427/QĐ-ƯBND ng&agrave;y 23/9/2015. C&aacute;c quy hoạch n&ecirc;u tr&ecirc;n đ&atilde; được Sở GTVT đăng tải tr&ecirc;n trang Web của Sở GTVT l&agrave;&nbsp;<a href="http://www.gtvthatinh.gov.vn/">http://www.gtvthatinh.gov.vn</a>, đề nghị c&aacute;c doanh nghiệp đăng nhập để biết th&ocirc;ng tin chi tiết (trong c&aacute;c quy hoạch n&agrave;y c&oacute; quy hoạch đầy đủ đường gom cho tất cả c&aacute;c đường, kể cả đường Quốc lộ 1 tr&aacute;nh th&agrave;nh phố H&agrave; Tĩnh). Theo điều 29 Nghị định 11/2010/NĐ-CP ng&agrave;y 24/02/2010 th&igrave; &ldquo;Đường nh&aacute;nh được nối v&agrave;o quốc lộ phải th&ocirc;ng qua điểm đấu nối thuộc Quy hoạch c&aacute;c điểm đấu nối đ&atilde; được ủy ban nh&acirc;n d&acirc;n cấp tỉnh ph&ecirc; duyệt, sau khi c&oacute; văn bản thoả thuận của Bộ Giao th&ocirc;ng vận tải. Cơ quan quản l&yacute; nh&agrave; nước về đường bộ thuộc ủy ban nh&acirc;n d&acirc;n cấp tỉnh c&oacute; tr&aacute;ch nhiệm thống k&ecirc; c&aacute;c đường đ&atilde; đấu nối v&agrave; lập kế hoạch xử l&yacute; ph&ugrave; hợp với quy hoạch c&aacute;c điểm đấu nối đ&atilde; được ph&ecirc; duyệt.&rdquo; Theo khoản 3, Điều 10 Th&ocirc;ng tư 50/2015/TT-BGTVT ng&agrave;y 23/9/2015 của Bộ GTVT th&igrave; &ldquo;Trước khi mở rộng địa giới khu vực nội th&agrave;nh, nội thị c&oacute; đường bộ đi qua, ủy ban nh&acirc;n d&acirc;n tỉnh, th&agrave;nh phố trực thuộc Trung ương phải x&acirc;y dựng đường gom v&agrave; c&aacute;c điểm đấu nối theo quy định tại Th&ocirc;ng tư n&agrave;y đổi với đoạn đường bộ sẽ nằm trong nội th&agrave;nh, nội thị&rdquo;; tuy nhi&ecirc;n do điều kiện ng&acirc;n s&aacute;ch hạn chế n&ecirc;n đến nay, tr&ecirc;n địa b&agrave;n H&agrave; Tĩnh mới chỉ triển khai được khoảng 500m trước Cụm c&ocirc;ng nghiệp cẩm Xuy&ecirc;n, đang c&oacute; kế hoạch triển khai khoảng 45Om trước Cụm c&ocirc;ng nghiệp Thạch Việt, ở những đoạn kh&aacute;c chưa c&oacute; kế hoạch. Đe tạo điều kiện thuận lợi cho c&aacute;c doanh nghiệp c&oacute; nhu cầu đầu tư dọc theo đường tr&aacute;nh Quốc lộ 1 qua th&agrave;nh phồ H&agrave; Tĩnh, đề nghị ƯBND huyện Thạch H&agrave;, ƯBND th&agrave;nh phố H&agrave; Tĩnh, ƯBND huyện cẩm Xuy&ecirc;n c&oacute; kế hoạch x&acirc;y dựng đường gom trước khi cấp đất cho c&aacute;c doanh nghiệp. Trong l&uacute;c tuyến đường tr&aacute;nh Quốc lộ 1 qua th&agrave;nh phố H&agrave; Tĩnh chưa x&acirc;y dựng được đường gom, tỉnh đ&atilde; quy hoạch v&agrave; x&acirc;y dựng cơ sở hạ tầng một số khu c&ocirc;ng nghiệp, thương mại dịch vụ, đề nghị c&aacute;c doanh nghiệp thu&ecirc; đất trong c&aacute;c khu đ&atilde; quy hoạch hoặc nghi&ecirc;n cứu kỹ quy hoạch đấu nối đ&atilde; n&ecirc;u tr&ecirc;n để xin được vị tr&iacute; ph&ugrave; hợp.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Lương Văn Kỳ&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sogiaothong@hatinh.gov.vn">sogiaothong@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Đề nghị tỉnh c&oacute; quy hoạch đường gom tại c&aacute;c tuyến đường tr&aacute;nh th&agrave;nh phố, thị x&atilde; v&igrave; nhiều doanh nghiệp c&oacute; nhu cầu thu&ecirc; đất để hoạt động sản xuất kinh doanh nhưng kh&ocirc;ng đấu nối được.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty CP x&acirc;y lắp v&agrave; thương mại &ocirc; t&ocirc; Ho&agrave;ng H&agrave;</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>5</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=124" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP x&acirc;y lắp v&agrave; thương mại &ocirc; t&ocirc; Ho&agrave;ng H&agrave;<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>th&agrave;nh phố H&agrave; Tĩnh</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Việc quy hoạch y&ecirc;u cầu x&acirc;y dựng nh&agrave; cao tầng tại n&uacute;t giao th&ocirc;ng x&atilde; Thạch Long trong giai đoạn suy tho&aacute;i của nền kinh tế hiện nay g&acirc;y kh&oacute; khăn cho c&aacute;c doanh nghiệp c&oacute; nhu cầu đầu tư, đề nghị cho ph&acirc;n giai đoạn để triển khai thực hiện dự &aacute;n.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty CP x&acirc;y lắp v&agrave; thương mại &ocirc; t&ocirc; Ho&agrave;ng H&agrave;</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>17</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=125" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP H&agrave; Tĩnh</td>
        <td>
            <p>Sở C&ocirc;ng thương trả lời: Để giải quyết nội dung kiến nghị của C&ocirc;ng ty, ng&agrave;y 21/11/2016, Sở C&ocirc;ng Thương đ&atilde; chủ tr&igrave; buổi l&agrave;m việc với sự tham gia của c&aacute;c Sở, ng&agrave;nh, đơn vị: Sở X&acirc;y dựng, Trung t&acirc;m Hỗ trợ ph&aacute;t triển DN &amp; X&uacute;c tiến ĐT tỉnh H&agrave; Tĩnh, Chi nh&aacute;nh lưới điện cao thế H&agrave; Tĩnh, C&ocirc;ng ty Điện lực H&agrave; Tĩnh, C&ocirc;ng ty Cổ phần cấp nước H&agrave; Tĩnh v&agrave; C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh. Sau khi tiến h&agrave;nh kiểm tra, khảo s&aacute;t hiện trường về nguồn cấp điện, cấp nước cho Nh&agrave; m&aacute;y Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh; tại Văn ph&ograve;ng C&ocirc;ng ty TNHH MTV bia S&agrave;i g&ograve;n - H&agrave; Tĩnh, Sở C&ocirc;ng Thương đ&atilde; chủ tr&igrave; buổi l&agrave;m việc; đặt vấn đề, n&ecirc;u r&otilde; c&aacute;c nội dung li&ecirc;n quan đến kiến nghị của C&ocirc;ng ty TNHH MTV bia S&agrave;i g&ograve;n - H&agrave; Tĩnh về t&igrave;nh h&igrave;nh cấp điện, cấp nước cho Nh&agrave; m&aacute;y theo đề nghị của Trung t&acirc;m Hỗ trợ ph&aacute;t triển doanh nghiệp v&agrave; X&uacute;c tiến đầu tư tại Văn bản số 28/TTHTDN ng&agrave;y 11/11/2016. C&ocirc;ng ty TNHH MTV bia S&agrave;i G&ograve;n - H&agrave; Tĩnh, C&ocirc;ng ty Điện lực H&agrave; Tĩnh, C&ocirc;ng ty Cổ phần cấp nước H&agrave; Tĩnh đ&atilde; b&aacute;o c&aacute;o c&aacute;c nội dung li&ecirc;n quan đến t&igrave;nh h&igrave;nh cấp nước, cấp điện cho Nh&agrave; m&aacute;y bia S&agrave;i G&ograve;n - H&agrave; Tĩnh trong thời gian qua v&agrave; đề xuất phương &aacute;n xử l&yacute; vướng mắc. Đại diện c&aacute;c cơ quan, đơn vị tham gia đ&atilde; ph&aacute;t biểu &yacute; kiến, thảo luận, đ&aacute;nh gi&aacute;, nhận x&eacute;t về c&aacute;c nội dung li&ecirc;n quan đến t&igrave;nh h&igrave;nh cấp điện, cấp nước cho Nh&agrave; m&aacute;y (c&oacute; Bi&ecirc;n bản l&agrave;m việc gửi k&egrave;m). Sau khi nghe b&aacute;o c&aacute;o, &yacute; kiến đề xuất của c&aacute;c đơn vị li&ecirc;n quan đến t&igrave;nh h&igrave;nh cấp điện v&agrave; cấp nước cho Nh&agrave; m&aacute;y bia S&agrave;i G&ograve;n - H&agrave; Tĩnh; xem x&eacute;t &yacute; kiến thảo luận của c&aacute;c Sở, ng&agrave;nh, c&aacute;c đơn vị li&ecirc;n quan. C&aacute;c đơn vị tham gia buổi l&agrave;m việc đ&atilde; đi đến thống nhất về phương &aacute;n xử l&yacute; như sau: 1. Về cung cấp điện - C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh được cấp điện từ tuyến đường d&acirc;y 373-E18.1. Tuyến đường d&acirc;y n&agrave;y, ngo&agrave;i cấp điện cho C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh c&ograve;n cấp điện cho một số phụ tải của huyện Thạch H&agrave; v&agrave; huyện Cẩm Xuy&ecirc;n. C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh l&agrave; hộ sử dụng điện lớn nằm ph&iacute;a đầu đường d&acirc;y. Do ph&iacute;a sau đường d&acirc;y (địa b&agrave;n c&aacute;c x&atilde;) thường xẩy ra sự cố n&ecirc;n tuyến đường d&acirc;y n&agrave;y thường bị ngừng cấp điện, ảnh hưởng đến việc cấp điện cho C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n &ndash; H&agrave; Tĩnh. - Để xử l&yacute; sự cố n&agrave;y, C&ocirc;ng ty Điện lực H&agrave; Tĩnh đ&atilde; đầu tư, cải tạo tuyến đường d&acirc;y 373, đồng thời lắp đặt 01 m&aacute;y cắt tự động ngay sau nh&aacute;nh rẽ đường d&acirc;y cấp điện cho C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh để nếu xảy ra sự cố ph&iacute;a sau th&igrave; m&aacute;y cắt sẽ tự động t&aacute;ch phần đường d&acirc;y ph&iacute;a sau ra khỏi hệ thống v&agrave; việc cung cấp điện cho C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh vẫn b&igrave;nh thường. - Trong thời gian qua, C&ocirc;ng ty Điện lực H&agrave; Tĩnh đ&atilde; c&oacute; nhiều cố gắng trong việc đầu tư n&acirc;ng cấp, cải tạo tuyến đường d&acirc;y v&agrave; phối hợp xử l&yacute; c&aacute;c sự cố để đảm bảo cung cấp điện phục vụ sản xuất cho Nh&agrave; m&aacute;y bia; việc phối hợp trong việc th&ocirc;ng b&aacute;o ngừng cấp điện của c&aacute;c đơn vị với Nh&agrave; m&aacute;y được thực hiện đầy đầy đủ, kịp thời n&ecirc;n thời gian, số lần mất điện đ&atilde; giảm đ&aacute;ng kể, chất lượng cung cấp điện được cải thiện. Tuy vậy, t&igrave;nh h&igrave;nh sự cố xẩy ra vẫn c&ograve;n nhiều, đặc biệt l&agrave; trong c&aacute;c th&aacute;ng 9, 10 năm 2016 (th&aacute;ng mưa lũ); chất lượng điện &aacute;p kh&ocirc;ng ổn định ảnh hưởng đến chế độ l&agrave;m việc của một số thiết bị trong Nh&agrave; m&aacute;y, chưa đ&aacute;p ứng được y&ecirc;u cầu của C&ocirc;ng ty . - C&aacute;c vấn đề li&ecirc;n quan về t&igrave;nh h&igrave;nh cấp điện, cấp nước trong năm 2016, C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh chưa thực hiện b&aacute;o c&aacute;o kịp thời cho Sở C&ocirc;ng Thương v&agrave; c&aacute;c cơ quan, đơn vị li&ecirc;n quan để kiểm tra, đề xuất phương &aacute;n v&agrave; phối hợp xử l&yacute;. Để khắc phục những tồn tại, n&acirc;ng cao chất lượng cung cấp điện cho C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh, c&aacute;c đơn vị li&ecirc;n quan triển khai thực hiện một số nội dung sau: - C&ocirc;ng ty Điện lực H&agrave; Tĩnh tiếp tục cải tạo, n&acirc;ng cấp tuyến đường d&acirc;y 373-E18.1 v&agrave; phối hợp với địa phương xử l&yacute; triệt để vi phạm h&agrave;nh lang an to&agrave;n lưới điện để n&acirc;ng cao chất lượng cung cấp điện cho c&aacute;c hộ phụ tải n&oacute;i chung v&agrave; C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh n&oacute;i ri&ecirc;ng. - C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh phối hợp tốt với C&ocirc;ng ty Điện lực H&agrave; Tĩnh, Chi nh&aacute;nh lưới điện cao thế H&agrave; Tĩnh kiểm tra hiện tượng điện &aacute;p kh&ocirc;ng ổn định (theo phản &aacute;nh của C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh), t&igrave;m nguy&ecirc;n nh&acirc;n, đề xuất phương &aacute;n xử l&yacute; để đảm bảo cung cấp điện cho C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh được tốt hơn. - Về phương &aacute;n l&acirc;u d&agrave;i: Đề xuất bổ sung v&agrave;o Quy hoạch ph&aacute;t triển điện lực tỉnh H&agrave; Tĩnh giai đoạn 2016-2025, c&oacute; x&eacute;t đến năm 2035 một tuyến đường d&acirc;y trung &aacute;p cấp điện ri&ecirc;ng cho C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh. 2. Về cung cấp nước - C&ocirc;ng ty Cổ phần Cấp nước H&agrave; Tĩnh đ&atilde; l&agrave;m việc, thống nhất với C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh bổ sung th&ecirc;m hệ thống cấp nước dự ph&ograve;ng nhằm tăng th&ecirc;m c&ocirc;ng suất truyền tải nước để c&oacute; thể chủ động khi cần ưu ti&ecirc;n cấp nước. Hiện nay đang triển khai thiết kế v&agrave; sẽ thi c&ocirc;ng khi thủ tục đầu tư thực hiện xong, dự kiến cuối năm 2016. Kinh ph&iacute; do C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh bố tr&iacute;. - Để khắc phục ti&ecirc;u chuẩn về chất lượng nước, C&ocirc;ng ty Cổ phần Cấp nước H&agrave; Tĩnh sẽ cho theo d&otilde;i v&agrave; phối hợp với bộ phận kỹ thuật Nh&agrave; m&aacute;y Bia để c&ugrave;ng nhau xử l&yacute;. - Về &yacute; kiến đề xuất của C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh cho ph&eacute;p khảo s&aacute;t, x&acirc;y dựng phương &aacute;n khai th&aacute;c nguồn nước ngầm để phục vụ sản xuất của Nh&agrave; m&aacute;y, Sở C&ocirc;ng Thương đề nghị UBND tỉnh giao c&aacute;c cơ quan c&oacute; thẩm quyền li&ecirc;n quan xem x&eacute;t, giải quyết. 3. Kiến nghị, đề xuất Đề nghị C&ocirc;ng ty TNHH MTV bia S&agrave;i g&ograve;n - H&agrave; Tĩnh thực hiện đầy đủ chế độ b&aacute;o c&aacute;o định kỳ, b&aacute;o c&aacute;o đột xuất c&aacute;c vấn đề li&ecirc;n quan đến t&igrave;nh h&igrave;nh cấp điện, cấp nước cho c&aacute;c cơ quan, đơn vị li&ecirc;n quan để tham mưu phương &aacute;n xử l&yacute;; Khi c&oacute; kiến nghị, đề xuất của C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh c&aacute;c cơ quan đơn vị li&ecirc;n quan cần chủ động, phối hợp thực hiện. Những nội dung vượt khả năng, thẩm quyền b&aacute;o c&aacute;o UBND tỉnh xem x&eacute;t, chỉ đạo.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Hiền Lương&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:socongthuong@hatinh.gov.vn">socongthuong@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Hệ thống thiết bị c&ocirc;ng nghệ của C&ocirc;ng ty được đầu tư hiện đại nhưng nguồn điện cung cấp kh&ocirc;ng ổn định, cần cải thiện, đề nghị cho nguồn cấp điện ri&ecirc;ng. Ngo&agrave;i ra, trong năm nay c&oacute; 02 lần nguồn nước cung cấp kh&ocirc;ng đạt chất lượng, C&ocirc;ng ty phải tạm ngừng sản xuất, ảnh hưởng lớn đến hoạt động của C&ocirc;ng ty, đề nghị c&oacute; giải ph&aacute;p l&acirc;u d&agrave;i về nguồn nước cấp cho C&ocirc;ng ty.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>3</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=126" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP H&agrave; Tĩnh</td>
        <td>
            <p>Dự &aacute;n n&acirc;ng c&ocirc;ng suất Nh&agrave; m&aacute;y Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh từ 40 triệu l&iacute;t/năm l&ecirc;n 50 triệu l&iacute;t/năm: C&ocirc;ng ty TNHH MTV bia S&agrave;i G&ograve;n - H&agrave; Tĩnh đ&atilde; lập b&aacute;o c&aacute;o đ&aacute;nh gi&aacute; t&aacute;c động m&ocirc;i trường v&agrave; được Bộ t&agrave;i nguy&ecirc;n v&agrave; m&ocirc;i trường ph&ecirc; duyệt b&aacute;o c&aacute;o đ&aacute;nh gi&aacute; t&aacute;c động m&ocirc;i trường tại Quyết định số 1492/QĐ-BTNMT ng&agrave;y 21/7/2014 v&agrave; đ&atilde; được Tổng cục m&ocirc;i trường cấp giấy x&aacute;c nhận ho&agrave;n th&agrave;nh c&aacute;c c&ocirc;ng tr&igrave;nh xử l&yacute; m&ocirc;i trường số 97/GXN-TCMT ng&agrave;y 07/10/2015. Ng&agrave;y 19/9/2016 Bộ T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường đ&atilde; thanh tra c&ocirc;ng t&aacute;c BVMT tại C&ocirc;ng ty TNHH MTV bia S&agrave;i G&ograve;n - H&agrave; Tĩnh theo Quyết định số 2031/QĐ-BTNMT ng&agrave;y 05/9/2016 của Bộ T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường. Theo b&aacute;o c&aacute;o của C&ocirc;ng ty th&igrave; kết quả sản xuất năm 2015 tại nh&agrave; m&aacute;y đ&atilde; sản xuất với c&ocirc;ng suất 58 triệu l&iacute;t bia v&agrave; kế hoạch sản xuất năm 2016 của c&ocirc;ng ty l&agrave; 58 triệu l&iacute;t, vượt qu&aacute; c&ocirc;ng suất sản xuất theo b&aacute;o c&aacute;o đ&aacute;nh gi&aacute; t&aacute;c động m&ocirc;i trường đ&atilde; được ph&ecirc; duyệt (50 triệu l&iacute;t/năm), theo quy định tại khoản 2 điều 26 của Luật bảo vệ m&ocirc;i trường năm 2014 th&igrave; tr&aacute;ch nhiệm của chủ đầu tư dự &aacute;n sau khi b&aacute;o c&aacute;o đ&aacute;nh gi&aacute; t&aacute;c động m&ocirc;i trường được ph&ecirc; duyệt &quot;Trường hợp thay đổi quy m&ocirc;, c&ocirc;ng suất, c&ocirc;ng nghệ l&agrave;m tăng t&aacute;c động xấu đến m&ocirc;i trường so với phương &aacute;n trong b&aacute;o c&aacute;o đ&aacute;nh gi&aacute; t&aacute;c đ&ocirc;ng m&ocirc;i trường nhưng chưa đến mức phải lập lại b&aacute;o c&aacute;o đ&aacute;nh gi&aacute; t&aacute;c động 1 m&ocirc;i trường theo quy định tại điểm c khoản 1 điều 20 của Luật BVMT, chủ đầu tư dự &aacute;n phải giải tr&igrave;nh với cơ quan ph&ecirc; duyệt v&agrave; chỉ được thực hiện sau khi c&oacute; văn bản chấp thuận của cơ quan ph&ecirc; duyệt b&aacute;o c&aacute;o đ&aacute;nh gi&aacute; t&aacute;c động m&ocirc;i trường&quot; như vậy dự &aacute;n sản xuất bia của C&ocirc;ng ty TNHH MTV bia S&agrave;i G&ograve;n - H&agrave; Tĩnh được Bộ T&agrave;i nguy&ecirc;n v&agrave; m&ocirc;i trường ph&ecirc; duyệt b&aacute;o c&aacute;o đ&aacute;nh gi&aacute; t&aacute;c động m&ocirc;i trường đề nghị C&ocirc;ng ty b&aacute;o c&aacute;o bằng văn bản gửi Bộ T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường về việc tăng c&ocirc;ng suất để Bộ c&oacute; &yacute; kiến hướng dẫn c&ocirc;ng ty thực hiện tốt c&ocirc;ng t&aacute;c bảo vệ m&ocirc;i trường theo đ&uacute;ng quy định của Luật bảo vệ m&ocirc;i trường năm 2014.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;V&otilde; T&aacute; Đinh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sotainguyen_moitruong@hatinh.gov.vn">sotainguyen_moitruong@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0915550004&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Đo&agrave;n kiểm tra của Bộ T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường c&oacute; &yacute; kiến về việc c&ocirc;ng suất thiết kế của nh&agrave; m&aacute;y l&agrave; 50 triệu l&iacute;t/năm nhưng sản lượng thực tế sản xuất năm 2015 v&agrave; kế hoạch năm 2016 l&agrave; 58 triệu/l&iacute;t/năm. Việc tăng sản lượng sản xuất thực tế so với c&ocirc;ng suất thiết kế do khi thiết kế th&igrave; sản xuất loại bia c&oacute; nồng độ cồn cao hơn (5 độ) nhưng thực tế lại sản xuất loại bia c&oacute; độ cồn thấp hơn (4,3 độ) n&ecirc;n sản lượng tăng l&ecirc;n, kh&ocirc;ng l&agrave;m ảnh hưởng đến vấn đề m&ocirc;i trường. Khi sản lượng tăng l&ecirc;n sẽ tăng th&ecirc;m doanh thu v&agrave; nộp ng&acirc;n s&aacute;ch cho nh&agrave; nước được nhiều hơn, đề nghị UBND tỉnh c&oacute; &yacute; kiến với Đo&agrave;n kiểm tra của Bộ T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường về vấn đề n&agrave;y, tạo điều kiện hỗ trợ doanh nghi&ecirc;p hoạt động.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty TNHH MTV Bia S&agrave;i G&ograve;n - H&agrave; Tĩnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>13</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=127" onclick="GoToLink(this);return false;" target="_self">Hợp t&aacute;c x&atilde; B&igrave;nh An<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>x&atilde; Kỳ Bắc</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Đường v&agrave;o trang trại chăn nu&ocirc;i lợn n&aacute;i của HTX B&igrave;nh An, x&atilde; Kỳ Bắc (đoạn nối từ trang trại của HTX Ho&agrave;ng Ch&acirc;u d&agrave;i khoảng 1 Km) c&ograve;n kh&oacute; khăn, lầy lội ảnh hưởng tới việc vận chuyển lợn, thức ăn, h&agrave;ng h&oacute;a n&ecirc;n đề nghị tỉnh xem x&eacute;t, đầu tư đoạn đường giao th&ocirc;ng n&ecirc;u tr&ecirc;n.</p>
        </td>
        <td>&nbsp;</td>
        <td>Hợp t&aacute;c x&atilde; B&igrave;nh An</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>39</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=128" onclick="GoToLink(this);return false;" target="_self">Chi nh&aacute;nh Tổng c&ocirc;ng ty điện lực dầu kh&iacute; Việt Nam - C&ocirc;ng ty điện lực dầu kh&iacute; H&agrave; Tĩnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Kỳ Anh</td>
        <td>
            <p>Ng&agrave;y 23/9/2014, Thủ tướng Ch&iacute;nh phủ ban h&agrave;nh Quyết định số 1696/QĐ- TTg ng&agrave;y 23/9/2014 về một số giải ph&aacute;p thực hiện xử l&yacute; tro, xỉ, thạch cao của c&aacute;c nh&agrave; m&aacute;y nhiệt điện, nh&agrave; m&aacute;y h&oacute;a chất ph&acirc;n b&oacute;n để l&agrave;m nguy&ecirc;n liệu sản xuất vật liệu x&acirc;y dựng. Ng&agrave;y 02/7/2016, Tổng cục M&ocirc;i trường c&oacute; văn bản số 1737/TCMT-QLCT&amp;CTMT gửi UBND tỉnh, Sở T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường, C&ocirc;ng ty điện lực dầu kh&iacute; H&agrave; Tĩnh về việc thu gom, vận chuyển v&agrave; sử dụng tro bay, thạch cao nh&acirc;n tạo của Nh&agrave; m&aacute;y nhiệt điện l&agrave;m nguy&ecirc;n liệu sản xuất. Theo đ&oacute; tro bay, thạch cao (trường hợp đ&atilde; ph&acirc;n định l&agrave; chất thải c&ocirc;ng nghiệp th&ocirc;ng thường) phải được chuyển giao cho đơn vị c&oacute; chức năng vận chuyển, xử l&yacute; chất thải rắn c&ocirc;ng nghiệp th&ocirc;ng thường v&agrave; phải đ&aacute;p ứng c&aacute;c điều kiện theo quy định tại Điều 96 Luật Bảo vệ m&ocirc;i trường v&agrave; Điều 31 Nghị định 38/2015/NĐ-CP; đơn vị vận chuyển chất thải phải chuyển giao chất thải cho cơ sở xử l&yacute; chất thải rắn c&ocirc;ng nghiệp th&ocirc;ng thường được ph&eacute;p hoạt động theo quy định. Theo Quyết định số 181/QĐ-XPVPHC ng&agrave;y 21/9/2016 của Tổng cục M&ocirc;i trường về việc xử phạt vi phạm h&agrave;nh ch&iacute;nh về bảo vệ m&ocirc;i trường th&igrave; C&ocirc;ng ty điện lực dầu kh&iacute; H&agrave; Tĩnh bị xử phạt đối với h&agrave;nh vi chuyển giao tro bay cho đơn vị kh&ocirc;ng c&oacute; chức năng, năng lực xử l&yacute; chất thải rắn th&ocirc;ng thường theo quy định. Về trường hợp chuyển giao chất thải rắn th&ocirc;ng thường từ 100m3 (hoặc tấn) trở l&ecirc;n, quy định tại điểm n Khoản 4 Điều 20 Nghị định số 179/2013/NĐ-CP. Ng&agrave;y 10/10/2016, C&ocirc;ng ty Điện lực dầu kh&iacute; H&agrave; Tĩnh cũng đ&atilde; c&oacute; văn bản số 1967/ĐLDKHT-ATSKMT gửi Bộ TNMT v&agrave; Tổng cục M&ocirc;i trường trong đ&oacute; đề nghị xem x&eacute;t kh&ocirc;ng xử phạt vi phạm h&agrave;nh ch&iacute;nh về bảo vệ m&ocirc;i trường đối với h&agrave;nh vi n&ecirc;u tr&ecirc;n v&agrave; văn bản số 1909/ĐLDKHT-ATSKMT ng&agrave;y 05/10/2016 gửi UBND tỉnh đề nghị kiến nghị Bộ TNMT kh&ocirc;ng xử phạt đối với C&ocirc;ng ty về h&agrave;nh vi n&agrave;y. Thực hiện &yacute; kiến chỉ đạo của UBND tỉnh tại văn bản số 3528/UBND- NL2 ng&agrave;y 14/10/2016, ng&agrave;y 18/10/2016 Sở T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường đ&atilde; tổ chức cuộc họp về nội dung n&agrave;y v&agrave; c&oacute; văn bản gửi Bộ T&agrave;i nguy&ecirc;n v&agrave; m&ocirc;i trường. Tuy nhi&ecirc;n, ng&agrave;y 3/11/2016, Tổng cục M&ocirc;i trường đ&atilde; c&oacute; văn bản số 265 1/TCMT-KsMt khẳng định Quyết định 181/QĐ-xPvPHC ng&agrave;y 21/9/2016 về việc xử phạt vi phạm h&agrave;nh ch&iacute;nh về bảo vệ m&ocirc;i trường đối với C&ocirc;ng ty điện lực dầu kh&iacute; H&agrave; Tĩnh l&agrave; đ&uacute;ng quy định của ph&aacute;p luật. Li&ecirc;n quan đến vấn đề xử l&yacute; tro xỉ của c&aacute;c nh&agrave; m&aacute;y nhiệt điện, ng&agrave;y 07/11/2016 Sở TN v&agrave; MT đ&atilde; c&oacute; văn bản số 3133/STNMT-CCMT gửi Tổng cục M&ocirc;i trường đề nghị th&aacute;o gỡ những vướng mắc trong c&aacute;c quy định về xử l&yacute; tro xỉ của c&aacute;c nh&agrave; m&aacute;y nhiệt điện nhằm đảm bảo ph&ugrave; hợp với quan điểm, mục ti&ecirc;u khuyến kh&iacute;ch sử dụng tro xỉ l&agrave;m nguy&ecirc;n vật liệu x&acirc;y dựng theo Quyết định số 1696/QĐ-TTg ng&agrave;y 23/9/2014 của Thủ tướng Ch&iacute;nh phủ đồng thời vừa đảm bảo c&aacute;c quy định về bảo vệ m&ocirc;i trường. Tuy nhi&ecirc;n đến nay Tổng cục M&ocirc;i trường đang x&acirc;y dựng Th&ocirc;ng tư hướng dẫn thi h&agrave;nh Nghị định 38/2015/NĐ-CP v&igrave; vậy sau khi c&oacute; hướng dẫn của Bộ T&agrave;i nguy&ecirc;n v&agrave; m&ocirc;i trường, Sở T&agrave;i nguy&ecirc;n v&agrave; m&ocirc;i trường sẽ gửi C&ocirc;ng ty để thực hiện theo đ&uacute;ng quy định của ph&aacute;p luật.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;V&otilde; T&aacute; Đinh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sotainguyen_moitruong@hatinh.gov.vn">sotainguyen_moitruong@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0915550004&quot;}&nbsp;<br />
                &nbsp;</p>
        </td>
        <td>
            <p>Hiện nay Ch&iacute;nh phủ đang khuyến kh&iacute;ch thực hiện xử l&yacute; tro, xỉ, thạch cao của c&aacute;c nh&agrave; m&aacute;y nhiệt điện, nh&agrave; m&aacute;y h&oacute;a chất ph&acirc;n b&oacute;n để l&agrave;m nguy&ecirc;n liệu sản xuất vật liệu x&acirc;y dựng (Quyết định số 1696/QĐ-TTg ng&agrave;y 23/9/2014 của Thủ tướng Ch&iacute;nh phủ). C&ocirc;ng ty đ&atilde; thực hiện việc kiểm nghiệm đối với c&aacute;c loại tro, xỉ của C&ocirc;ng ty v&agrave; được x&aacute;c định l&agrave; chất thải c&ocirc;ng nghiệp kh&ocirc;ng độc hại n&ecirc;n đ&atilde; cấp cho một số cơ sở sản xuất vật liệu x&acirc;y dựng tr&ecirc;n địa b&agrave;n tỉnh, việc vận chuyển được thực hiện bằng xe bồn, đảm bảo đ&uacute;ng quy định nhưng Đo&agrave;n kiểm tra của Bộ T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường lại xử phạt C&ocirc;ng ty về việc chuyển giao tro, xỉ cho đơn vị kh&ocirc;ng c&oacute; giấy ph&eacute;p. Đề nghị UBND tỉnh, Sở T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường c&oacute; &yacute; kiến về vấn đề n&agrave;y với Bộ T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường.</p>
        </td>
        <td>&nbsp;</td>
        <td>Nh&agrave; m&aacute;y Nhiệt điện Vũng &Aacute;ng I</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>13</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=130" onclick="GoToLink(this);return false;" target="_self">Hiệp hội Doanh nghiệp thị x&atilde; Kỳ Anh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Kỳ Anh</td>
        <td>
            <p>Việc UBND tỉnh ban h&agrave;nh Văn bản số 2932/UBND-CN1 ng&agrave;y 9/7/2014 của UBND tỉnh về r&agrave; so&aacute;t c&aacute;c điểm mỏ chuẩn bị th&agrave;nh lập thị x&atilde; Kỳ Anh l&agrave; trong thời gian chuẩn bị th&agrave;nh lập thị x&atilde; mới. Hiện nay, huyện Kỳ Anh được Ch&iacute;nh phủ nhất tr&iacute; cho t&aacute;ch th&agrave;nh 02 đơn vị h&agrave;nh ch&iacute;nh (Thị x&atilde; Kỳ Anh v&agrave; huyện Kỳ Anh). Vừa qua, để xử l&yacute; nội dung n&agrave;y, UBND tỉnh đ&atilde; giao cho UBND thị x&atilde; Kỳ Anh r&agrave; so&aacute;t điều chỉnh quy hoạch ph&aacute;t triển kinh tế x&atilde; hội. Tr&ecirc;n cơ sở quy hoạch được ph&ecirc; duyệt, những mỏ n&agrave;o kh&ocirc;ng nằm trong quy hoạch kho&aacute;ng sản l&agrave;m VLXD th&ocirc;ng thường phải chấp dứt hoạt động. Ngo&agrave;i ra, để xử l&yacute; kiến nghị của doanh nghiệp li&ecirc;n quan đến hoạt động kho&aacute;ng sản, ng&agrave;y 16/11/2016, Sở T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường đ&atilde; chủ tr&igrave;, phối hợp với c&aacute;c Sở, ng&agrave;nh li&ecirc;n quan tổ chức buổi l&agrave;m việc v&agrave; thống nhất đề nghị UBND tỉnh hướng xử l&yacute; cho ph&eacute;p c&aacute;c đơn vị được thực hiện hồ sơ, thủ tục để giảm c&ocirc;ng suất khai th&aacute;c theo quy định. Tuy nhi&ecirc;n, c&ocirc;ng suất khai th&aacute;c hằng năm kh&ocirc;ng thấp hơn 100.000 m3 ^ (theo quy định số 1469/QĐ-TTg ng&agrave;y 22/8/2014 của Thủ tướng Ch&iacute;nh phủ về ph&ecirc; duyệt quy hoạch tổng thể ph&aacute;t triển vật liệu x&acirc;y dựng Việt Nam đến năm 2020 v&agrave; định hướng đến năm 2030); đồng thời đề nghị điều chỉnh lại trữ lượng khai th&aacute;c, nhưng thời hạn khai th&aacute;c vẫn thực hiện theo giấy ph&eacute;p khai th&aacute;c đ&atilde; được cấp. Việc điều chỉnh thời hạn khai th&aacute;c chỉ thực hiện sau khi thị x&atilde; Kỳ Anh r&agrave; so&aacute;t lại quy hoạch những khu vực kh&ocirc;ng nằm trong quy hoạch kho&aacute;ng sản phải chấp dứt hoạt động.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;V&otilde; T&aacute; Đinh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sotainguyen_moitruong@hatinh.gov.vn">sotainguyen_moitruong@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0915550004&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Một số doanh nghiệp khai th&aacute;c kho&aacute;ng sản chưa đồng t&igrave;nh với Văn bản số 2932/UBND-CN1 ng&agrave;y 09/7/2014 của UBND tỉnh về phương &aacute;n xử l&yacute; c&aacute;c điểm mỏ kho&aacute;ng sản tr&ecirc;n địa b&agrave;n huyện Kỳ Anh phục vụ chuẩn bị th&agrave;nh lập thị x&atilde; mới. Theo đ&oacute;, c&aacute;c doanh nghiệp khi đầu tư khai th&aacute;c được y&ecirc;u cầu phải thực hiện chế biến s&acirc;u n&ecirc;n đ&atilde; đầu tư nhiều trang thiết bị hiện đại với số vốn lớn nhưng theo Văn bản tr&ecirc;n th&igrave; một số điểm mỏ chỉ được khai th&aacute;c đến năm 2018, ảnh hưởng đến hoạt động của doanh nghiệp, kh&oacute; thu hồi vốn đầu tư.</p>
        </td>
        <td>&nbsp;</td>
        <td>Hiệp hội Doanh nghiệp thị x&atilde; Kỳ Anh</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>13</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=131" onclick="GoToLink(this);return false;" target="_self">Hợp t&aacute;c x&atilde; m&ocirc;i trường thị trấn Ngh&egrave;n, huyện Can Lộc<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Thị trấn Ngh&egrave;n, huyện Can Lộc</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>HTX hoạt động lĩnh vực thu gom, vận chuyển, xử l&yacute;, ch&ocirc;n lấp r&aacute;c thải sinh hoạt cho 100% khối phố, đơn vị, cơ quan tr&ecirc;n địa b&agrave;n thị trấn Ngh&egrave;n v&agrave; c&aacute;c x&atilde; l&acirc;n cận, g&oacute;p phần quan trọng trong chỉnh trang đ&ocirc; thị, bảo vệ m&ocirc;i trường nhưng đến nay vẫn chưa được hưởng c&aacute;c ch&iacute;nh s&aacute;ch hỗ trợ về chi ph&iacute; vận chuyển, chi ph&iacute; xử l&yacute; ch&ocirc;n lấp r&aacute;c thải. Đề nghị tỉnh quan t&acirc;m, tạo điều kiện hỗ trợ c&aacute;c khoản chi ph&iacute; tr&ecirc;n, thao gỡ kh&oacute; khăn về nguồn vốn cho HTX tiếp tục hoạt động.</p>
        </td>
        <td>&nbsp;</td>
        <td>Hợp t&aacute;c x&atilde; m&ocirc;i trường thị trấn Ngh&egrave;n, huyện Can Lộc</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>33</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=132" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP L&yacute; Ng&acirc;n &ndash; Vina<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời: Việc Quản l&yacute; hệ thống đường giao th&ocirc;ng trong th&agrave;nh phố H&agrave; Tĩnh thuộc thẩm quyền của ƯBND th&agrave;nh phố H&agrave; Tĩnh; để đảm bảo an ninh trật tự v&agrave; trật tự an to&agrave;n giao th&ocirc;ng đ&ocirc; thị, ng&agrave;y 10/9/2015 ƯBND th&agrave;nh phố H&agrave; Tĩnh đ&atilde; c&oacute; Tờ tr&igrave;nh số 196/TTr-ƯBND (K&egrave;m theo &yacute; kiến của Sở GTVT tại Văn bản sổ 2853/SGTVT ng&agrave;y 27/8/2015; Văn bản số 1673/CAT-PC67 ng&agrave;y 28/8/2015 của C&ocirc;ng an tỉnh; B&aacute;o c&aacute;o thẩm định số 1456/BC-STP ng&agrave;y 04/9/2015 của Sở Tư ph&aacute;p) gửi ƯBND tỉnh. Ng&agrave;y 01/10/2015 ƯBND tỉnh đ&atilde; ban h&agrave;nh Quyết định số 50/QĐ-ƯBND Ban h&agrave;nh Quy định về tuyến đường, thời gian hạn chế lưu lượng của c&aacute;c phương tiện tham gia giao th&ocirc;ng tr&ecirc;n địa b&agrave;n th&agrave;nh phố H&agrave; Tĩnh, tỉnh H&agrave; Tĩnh (gửi k&egrave;m theo Quyết định số 50/2015/QĐ-ƯBND ng&agrave;y 01/10/2015 của ƯBND tỉnh H&agrave; Tĩnh). Tuy nhi&ecirc;n, qua phản &aacute;nh của C&ocirc;ng ty cố phần L&yacute; Ng&acirc;n - Vina v&agrave; xem x&eacute;t danh mục c&aacute;c tuyến đường tr&ecirc;n địa b&agrave;n th&agrave;nh phố H&agrave; Tĩnh cấm xe tải c&oacute; trọng lượng từ 13 tấn trở l&ecirc;n v&agrave; xe kh&aacute;ch từ 16 chổ ngồi trở l&ecirc;n, Sở GTVT thấy rằng c&oacute; một số tuyến đường bị cấm lưu h&agrave;nh 24h/24h l&agrave; chưa họp l&yacute; v&agrave; c&oacute; kh&oacute; khăn cho c&aacute;c doanh nghiệp trong vận chuyển h&agrave;ng h&oacute;a. Để tạo điều kiện thuận lợi cho c&aacute;c doanh nghiệp, Sở GTVT đề nghị ƯBND ƯBND th&agrave;nh phố H&agrave; Tĩnh phối hợp với c&aacute;c Sở, ng&agrave;nh li&ecirc;n quan r&agrave; so&aacute;t lại, theo hướng cấm phương tiện theo từng khung thời gian hợp l&yacute;, tạo điều kiện cho doanh nghiệp vận chuy&ecirc;n h&agrave;ng h&oacute;a v&agrave;o nội thi, nhất l&agrave; thời gian từ 24h đ&ecirc;m đ&ecirc;n 4 h s&aacute;ng.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Lương Văn Kỳ&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sogiaothong@hatinh.gov.vn">sogiaothong@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Việc quy định cấm &ocirc; t&ocirc; vận chuyển h&agrave;ng h&oacute;a v&agrave;o đ&ocirc; thị g&acirc;y kh&oacute; khăn cho c&aacute;c doanh nghiệp ph&acirc;n phối h&agrave;ng h&oacute;a, nhất l&agrave; c&aacute;c doanh nghiệp nhỏ kh&ocirc;ng c&oacute; xe vận chuyển trung gian, phải thu&ecirc; xe n&ecirc;n tăng chi ph&iacute;. Đề nghị c&oacute; quy định cho ph&eacute;p c&aacute;c xe vận tải h&agrave;ng của c&aacute;c h&atilde;ng v&agrave;o đ&ocirc; thị trong khoảng thời gian nhất định, giảm chi ph&iacute; cho c&aacute;c doanh nghiệp.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty CP L&yacute; Ng&acirc;n &ndash; Vina</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>5</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=133" onclick="GoToLink(this);return false;" target="_self">Quỹ t&iacute;n dụng nh&acirc;n d&acirc;n Cương Gi&aacute;n<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Cương Gi&aacute;n</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Hiệu quả hoạt động của c&aacute;c quỹ t&iacute;n dụng nh&acirc;n d&acirc;n tr&ecirc;n địa b&agrave;n tỉnh l&agrave; rất tốt, đề nghị Ng&acirc;n h&agrave;ng Nh&agrave; nước quan t&acirc;m th&agrave;nh lập c&aacute;c quỹ t&iacute;n dụng tại c&aacute;c địa phương chưa c&oacute; v&agrave; cho c&aacute;c Quỹ mở rộng địa b&agrave;n hoạt động sang c&aacute;c x&atilde; l&acirc;n cận. Đề nghị Ng&acirc;n h&agrave;ng Nh&agrave; nước tỉnh kiến nghị Ng&acirc;n h&agrave;ng Nh&agrave; nước Việt Nam sửa đổi Th&ocirc;ng tư 04/2015/TT-NHNN ng&agrave;y 31/3/2015 do một số bất cập như việc quy định tổng mức cho vay của quỹ t&iacute;n dụng nh&acirc;n d&acirc;n đối với một th&agrave;nh vi&ecirc;n l&agrave; ph&aacute;p nh&acirc;n kh&ocirc;ng được vượt qu&aacute; tổng số vốn g&oacute;p v&agrave; số dư tiền gửi của ph&aacute;p nh&acirc;n đ&oacute; tại quỹ t&iacute;n dụng nh&acirc;n d&acirc;n tại thời điểm quyết định cho vay v&agrave; thời hạn cho vay kh&ocirc;ng được vượt qu&aacute; thời hạn c&ograve;n lại của tiền gửi; quy định n&agrave;y kh&ocirc;ng ph&ugrave; hợp v&igrave; nếu c&aacute;c doanh nghiệp, hợp t&aacute;c x&atilde; chỉ được vay vốn kh&ocirc;ng vượt qu&aacute; số vốn đ&atilde; g&oacute;p v&agrave; số dư tiền gửi th&igrave; c&aacute;c doanh nghiệp, HTX sẽ r&uacute;t tiền gửi, kh&ocirc;ng cần phải vay.</p>
        </td>
        <td>&nbsp;</td>
        <td>Quỹ t&iacute;n dụng nh&acirc;n d&acirc;n Cương Gi&aacute;n</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>26</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=134" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP Th&aacute;i Ph&aacute;t Đạt<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP H&agrave; Tĩnh</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Từ 01/9/2016 Luật Thuế XK, thuế NK số 107/2016/QH13 c&oacute; hiệu lực, Khu kinh tế CK Cầu Treo kh&ocirc;ng c&ograve;n được coi l&agrave; Khu phi thuế quan. Vậy, DN c&oacute; thể đầu tư x&acirc;y dựng Khu phi thuế quan (c&oacute; ranh giới địa l&yacute; x&aacute;c định, ngăn c&aacute;ch với khu vực b&ecirc;n ngo&agrave;i bằng h&agrave;ng r&agrave;o cứng, bảo đảm điều kiện cho hoạt động kiểm tra, gi&aacute;m s&aacute;t, kiểm so&aacute;t hải quan của cơ quan hải quan...) trong Khu kinh tế cửa khẩu quốc tế Cầu Treo được kh&ocirc;ng? Thủ tục v&agrave; c&aacute;c ch&iacute;nh s&aacute;ch ưu đ&atilde;i, hỗ trợ như thế n&agrave;o?</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty CP Th&aacute;i Ph&aacute;t Đạt</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>22</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=135" onclick="GoToLink(this);return false;" target="_self">Sở Giao th&ocirc;ng Vận tải<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP H&agrave; Tĩnh</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>C&aacute;c Sở, ban ng&agrave;nh, địa phương lập trang web hỗ trợ doanh nghiệp để kịp thời th&ocirc;ng b&aacute;o, hướng dẫn quy định, quy tr&igrave;nh, ch&iacute;nh s&aacute;ch hỗ trợ.</p>
        </td>
        <td>&nbsp;</td>
        <td>Sở Giao th&ocirc;ng Vận tải</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>14</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=136" onclick="GoToLink(this);return false;" target="_self">Sở Giao th&ocirc;ng Vận tải<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP H&agrave; Tĩnh</td>
        <td>
            <p>Thời gian qua, quy hoạch được lập qu&aacute; nhiều nhưng chất lượng quy hoạch thấp, thiếu gắn kết, kh&ocirc;ng thống nhất v&agrave; c&ograve;n nhiều chồng ch&eacute;o, m&acirc;u thuẫn l&agrave;m giảm hiệu lực, hiệu quả của quy hoạch. Hiện nay, Quốc hội đ&atilde; th&ocirc;ng qua Luật Quy hoạch (c&oacute; hiệu lực từ ng&agrave;y 01/01/2018. Theo đ&oacute; từ năm 2017 sẽ kh&ocirc;ng lập mới c&aacute;c quy hoạch ng&agrave;nh, sản phẩm v&agrave; chỉ điều chỉnh c&aacute;c quy hoạch ng&agrave;nh, sản phẩm kh&ocirc;ng c&ograve;n ph&ugrave; hợp v&agrave; thực sự cần thiết. Thay v&igrave; lập c&aacute;c quy hoạch ng&agrave;nh, sản phẩm sẽ tập trung x&acirc;y dựng c&aacute;c c&ocirc;ng cụ quản l&yacute; bằng điều kiện, ti&ecirc;u chuẩn để định hướng ph&aacute;t triển ph&ugrave; hợp tinh thần Luật Đầu tư, Luật Doanh nghiệp v&agrave; theo cơ chế thị trường. Như vậy, c&aacute;c sở, ng&agrave;nh chủ động, tiến h&agrave;nh r&agrave; so&aacute;t, lập hồ sơ tr&igrave;nh cấp c&oacute; thẩm quyền ph&ecirc; duyệt điều chỉnh theo quy định hiện h&agrave;nh (nếu thực sự cần thi&ecirc;t).</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Trần T&uacute; Anh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc sở&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sokehoach@hatinh.gov.vn">sokehoach@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Hiện nay, quy hoạch chưa s&aacute;t với thực tế, việc điều chỉnh QH mang t&iacute;nh chủ quan, g&acirc;y chồng ch&eacute;o. Đề nghị h&agrave;ng năm cho ph&eacute;p c&aacute;c ng&agrave;nh kịp thời điều chỉnh QH cho ph&ugrave; hợp với thực tế, kh&aacute;ch quan tr&ecirc;n nguy&ecirc;n tắc điều chỉnh đảm bảo t&iacute;nh kh&aacute;ch quan, khoa học.</p>
        </td>
        <td>&nbsp;</td>
        <td>Sở Giao th&ocirc;ng Vận tải</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=137" onclick="GoToLink(this);return false;" target="_self">UBND Th&agrave;nh phố H&agrave; Tĩnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP H&agrave; Tĩnh</td>
        <td>
            <p>Sở Kế hoạch v&agrave; Đầu tư trả lời: Thực hiện Luật Đầu tư c&ocirc;ng, Nghị định số 77/2015/NĐ-CP ng&agrave;y 10/9/2015 của Ch&iacute;nh phủ, Quyết định số 40/2015/QĐ-TTg ng&agrave;y 14/9/2015 v&agrave; Chỉ thị số 23/CT-TTg ng&agrave;y 05/8/2014 của Thủ tướng Ch&iacute;nh phủ, tỉnh đang x&acirc;y dựng kế hoạch đầu tư c&ocirc;ng trung hạn giai đoạn 2016-2020 với ti&ecirc;u ch&iacute; ưu ti&ecirc;n bố tr&iacute; vốn cho c&aacute;c dự &aacute;n đ&atilde; ho&agrave;n th&agrave;nh v&agrave; b&agrave;n giao đưa v&agrave;o sử dụng (ưu ti&ecirc;n cho c&aacute;c dự &aacute;n đ&atilde; c&oacute; quyết định ph&ecirc; duyệt quyết to&aacute;n) nhưng chưa bố tr&iacute; đủ vốn; c&aacute;c dự &aacute;n chuyển tiếp bố tr&iacute; theo tiến độ được ph&ecirc; duyệt; chỉ khởi c&ocirc;ng mới số vốn c&ograve;n lại sau khi bố tr&iacute; cho c&aacute;c nội dung n&oacute;i tr&ecirc;n. Như vậy, việc thanh to&aacute;n nợ đọng XDCB sẽ được tỉnh ưu ti&ecirc;n xử l&yacute; dứt điểm trong kế hoạch đầu tư c&ocirc;ng trung hạn. Thực tế như năm 2016, UBND tỉnh kh&ocirc;ng bố tr&iacute; nguồn ng&acirc;n s&aacute;ch địa phương để khởi c&ocirc;ng mới dự &aacute;n n&agrave;o m&agrave; tập trung bố tr&iacute; thanh to&aacute;n nợ, c&aacute;c khoản ứng trước v&agrave; c&aacute;c dự &aacute;n chuyển tiếp để sớm đưa v&agrave;o sử dụng, ph&aacute;t huy hiệu quả.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Trần T&uacute; Anh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc sở&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sokehoach@hatinh.gov.vn">sokehoach@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Đề nghị tỉnh quan t&acirc;m bố tr&iacute; ng&acirc;n s&aacute;ch để hỗ trợ thanh to&aacute;n kịp thời nợ XDCB c&aacute;c c&ocirc;ng tr&igrave;nh, tạo điều kiện cho doanh nghiệp để thu hồi vốn v&agrave; tiếp tục ph&aacute;t triển kinh doanh.</p>
        </td>
        <td>&nbsp;</td>
        <td>UBND Th&agrave;nh phố H&agrave; Tĩnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=138" onclick="GoToLink(this);return false;" target="_self">UBND Th&agrave;nh phố H&agrave; Tĩnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP H&agrave; Tĩnh</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Tạo điều kiện giải quyết nhanh c&aacute;c TTHC cho c&aacute;c DN được thu&ecirc; đất để x&acirc;y dựng trụ sở, kho t&agrave;ng...Xem x&eacute;t bố tr&iacute; quy hoạch đất đai để tạo thuận lợi cho c&aacute;c DN c&oacute; nhu cầu thu&ecirc; đất x&acirc;y dựng trụ sở, nh&agrave; kho. Đối với c&aacute;c quỹ đất đ&atilde; giao c&aacute;c DN nhưng đến nay kh&ocirc;ng triển khai đầu tư x&acirc;y dựng th&igrave; phải tiến h&agrave;nh thu hồi để giao cho c&aacute;c DN kh&aacute;c đang c&oacute; nhu cầu thực hiện.</p>
        </td>
        <td>&nbsp;</td>
        <td>UBND Th&agrave;nh phố H&agrave; Tĩnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>13</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=139" onclick="GoToLink(this);return false;" target="_self">Sở Giao th&ocirc;ng vận tải<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP H&agrave; Tĩnh</td>
        <td>
            <p>Tỉnh đ&atilde; th&agrave;nh lập Trung t&acirc;m Hỗ trợ doanh nghiệp v&agrave; X&uacute;c tiến đầu tư tỉnh H&agrave; Tĩnh trực thuộc Văn ph&ograve;ng UBND tỉnh (Quyết định số 2274/QĐ-UBND ng&agrave;y 12/8/2016) nhằm tăng cường chỉ đạo, kiện to&agrave;n tổ chức bộ m&aacute;y, n&acirc;ng cao hiệu quả hoạt động hỗ trợ doanh nghiệp, x&uacute;c tiến đầu tư; l&agrave;m đầu mối tiếp nhận tổng hợp &yacute; kiến, phản &aacute;nh kiến nghị của nh&agrave; đầu tư, doanh nghiệp; tham mưu đề xuất UBND tỉnh, Chủ tịch UBND tỉnh chỉ đạo giải quyết kịp thời kh&oacute; khăn vướng mắc cho doanh nghiệp, nh&agrave; đầu tư. Hiện nay, tỉnh đang tập trung chỉ đạo th&agrave;nh lập Trung t&acirc;m h&agrave;nh ch&iacute;nh c&ocirc;ng cấp tỉnh, th&iacute; điểm Trung t&acirc;m h&agrave;nh ch&iacute;nh c&ocirc;ng cấp huyện; nhằm thiết lập cơ chế li&ecirc;n th&ocirc;ng, một đầu mối hỗ trợ ph&aacute;t triển doanh nghiệp, giải quyết hồ sơ, thủ tục h&agrave;nh ch&iacute;nh đối với dự &aacute;n đầu tư của doanh nghiệp.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Trần T&uacute; Anh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc sở&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sokehoach@hatinh.gov.vn">sokehoach@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Đề nghị c&aacute;c Sở, ban ng&agrave;nh c&oacute; sự phối hợp chặt chẽ, đồng bộ trong qu&aacute; tr&igrave;nh xử l&yacute; c&aacute;c thủ tục cho DN</p>
        </td>
        <td>&nbsp;</td>
        <td>Sở Giao th&ocirc;ng vận tải</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=140" onclick="GoToLink(this);return false;" target="_self">UBND Th&agrave;nh phố H&agrave; Tĩnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP. H&agrave; Tĩnh</td>
        <td>
            <p>Thời gian qua, tỉnh đ&atilde; tập trung chỉ đạo đẩy mạnh cải c&aacute;ch thủ tục h&agrave;nh ch&iacute;nh. Đ&atilde; ban h&agrave;nh mới 64/64 quyết định chuẩn h&oacute;a TTHC, c&ocirc;ng khai v&agrave; ni&ecirc;m yết 1.465/1.465 TTHC tr&ecirc;n Cơ sở dữ liệu quốc gia; 100% đơn vị cấp x&atilde;, huyện, tỉnh thực hiện cơ chế một cửa, một cửa li&ecirc;n th&ocirc;ng. Cập nhật, c&ocirc;ng khai văn bản chỉ đạo điều h&agrave;nh, cơ chế ch&iacute;nh s&aacute;ch của tỉnh tr&ecirc;n hệ thống điều h&agrave;nh t&aacute;c nghiệp, hệ thống c&ocirc;ng b&aacute;o điện tử của tỉnh v&agrave; c&aacute;c trang điện tử của c&aacute;c Sở, ban, ng&agrave;nh, địa phương, tạo điều kiện thuận lợi cho c&aacute;c DN truy cập, t&igrave;m kiếm v&agrave; nghi&ecirc;n cứu. Thực hiện Nghị quyết 19-2016 v&agrave; Nghị quyết 35 của Ch&iacute;nh phủ, UBND tỉnh đ&atilde; tổ chức Hội nghị đối thoại giữa Chủ tịch UBND tỉnh với doanh nghiệp ng&agrave;y 13/8/2016, chỉ đạo khẩn trương giải quyết, trả lời c&aacute;c kiến nghị đề xuất của doanh nghiệp. H&agrave; Tĩnh c&ugrave;ng đ&atilde; k&yacute; cam kết với Ph&ograve;ng Thương mại v&agrave; C&ocirc;ng nghiệp Việt Nam (VCCI) về tạo lập m&ocirc;i trường kinh doanh thuận lợi cho DN, cam kết đơn giản h&oacute;a tối đa thủ tục v&agrave; thời gian đăng k&yacute; DN, đăng k&yacute; đầu tư; tạo điều kiện thuận lợi cho khởi sự DN, gia nhập thị trường; thiết lập cơ chế đối thoại định kỳ, thường xuy&ecirc;n với doanh nghiệp; sắp xếp, tinh giản bộ m&aacute;y, bi&ecirc;n chế, n&acirc;ng cao hiệu lực, hiệu quả hoạt động bộ m&aacute;y ch&iacute;nh quyền.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Trần T&uacute; Anh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sokehoach@hatinh.gov.vn">sokehoach@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0982 325758&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Tăng cường chỉ đạo c&ocirc;ng t&aacute;c tuy&ecirc;n truyền, hỗ trợ doanh nghiệp về c&aacute;c ch&iacute;nh s&aacute;ch mới, gi&uacute;p doanh nghiệp tiếp cận kịp thời c&aacute;c thay đổi về ch&iacute;nh s&aacute;ch ph&aacute;p luật, thủ tục h&agrave;nh ch&iacute;nh,... Tổ chức tốt v&agrave; thường xuy&ecirc;n hơn việc đối thoại giữa ch&iacute;nh quyền c&aacute;c cấp với doanh nghiệp, doanh nh&acirc;n</p>
        </td>
        <td>&nbsp;</td>
        <td>UBND Th&agrave;nh phố H&agrave; Tĩnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=141" onclick="GoToLink(this);return false;" target="_self">UBND Th&agrave;nh phố H&agrave; Tĩnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP. H&agrave; Tĩnh</td>
        <td>
            <p>Sở KH-ĐT trả lời: Hiện nay, tỉnh đang tập trung r&agrave; so&aacute;t, đ&aacute;nh gi&aacute; t&igrave;nh h&igrave;nh thực hiện c&aacute;c cơ chế, ch&iacute;nh s&aacute;ch của tỉnh giai đoạn 2011 &ndash; 2015 để bổ sung, sửa đổi c&aacute;c ch&iacute;nh s&aacute;ch cho ph&ugrave; hợp với điều kiện thực tế của địa phương, đảm bảo nguồn lực thực hiện trong giai đoạn tới, tạo điều kiện thuận lợi cho c&aacute;c doanh nghiệp ph&aacute;t triển.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Trần T&uacute; Anh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sokehoach@hatinh.gov.vn">sokehoach@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0982 325758&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Tiếp tục c&oacute; c&aacute;c ch&iacute;nh s&aacute;ch hỗ trợ c&aacute;c doanh nghiệp (nhất l&agrave; c&aacute;c doanh nghiệp mới th&agrave;nh lập) ph&aacute;t triển sản xuất kinh doanh như: ch&iacute;nh s&aacute;ch về vốn, đất đai .... hỗ trợ c&aacute;c doanh nghiệp trong vấn đề tiếp cận c&ocirc;ng nghệ mới</p>
        </td>
        <td>&nbsp;</td>
        <td>UBND Th&agrave;nh phố H&agrave; Tĩnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=142" onclick="GoToLink(this);return false;" target="_self">UBND Th&agrave;nh phố H&agrave; Tĩnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>TP. H&agrave; Tĩnh</td>
        <td>
            <p>Để x&acirc;y dựng th&agrave;nh phố H&agrave; Tĩnh đạt ti&ecirc;u ch&iacute; đ&ocirc; thị loại II, Hội đồng nh&acirc;n d&acirc;n tỉnh đ&atilde; ban h&agrave;nh Nghị quyết số 10/2016/NQ-HĐND ng&agrave;y 28/6/2016 về một số cơ chế ch&iacute;nh s&aacute;ch, tạo nguồn lực x&acirc;y dựng th&agrave;nh phố H&agrave; Tĩnh đạt ti&ecirc;u ch&iacute; đ&ocirc; thị loại II v&agrave;o năm 2018, UBND tỉnh đ&atilde; ph&ecirc; duyệt Quyết định số 2139/QĐ-UBND ng&agrave;y 02/8/2016 về Đề &aacute;n x&atilde; hội h&oacute;a huy động nguồn lực x&acirc;y dựng th&agrave;nh phố H&agrave; Tĩnh đạt ti&ecirc;u ch&iacute; đ&ocirc; thị loại II v&agrave;o năm 2018. Theo đ&oacute;, tỉnh sẽ tập trung huy động tối đa nguồn lực, trong đ&oacute; nguồn vốn x&atilde; hội h&oacute;a l&agrave; chủ yếu v&agrave; cho thực hiện một số cơ chế, ch&iacute;nh s&aacute;ch đặc th&ugrave; nhằm tạo nguồn lực đầu tư x&acirc;y dựng kết cấu hạ tầng, phục vụ x&acirc;y dựng th&agrave;nh phố H&agrave; Tĩnh đạt ti&ecirc;u ch&iacute; đ&ocirc; thị loại II v&agrave;o năm 2018.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Trần T&uacute; Anh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sokehoach@hatinh.gov.vn">sokehoach@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0982 325758&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Quan t&acirc;m đầu tư n&acirc;ng cấp kết cấu hạ tầng đ&ocirc; thị, tạo thuận lợi cho c&aacute;c hoạt động sản xuất, KD</p>
        </td>
        <td>&nbsp;</td>
        <td>UBND Th&agrave;nh phố H&agrave; Tĩnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=143" onclick="GoToLink(this);return false;" target="_self">Li&ecirc;n minh Hợp t&aacute;c x&atilde; tỉnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Tại kỳ họp thứ 15 Hội đồng nh&acirc;n d&acirc;n tỉnh Kh&oacute;a XVI, UBND tỉnh đ&atilde; tr&igrave;nh Hội đồng nh&acirc;n d&acirc;n tỉnh Đề &aacute;n Ph&aacute;t triển kinh tế tập thể H&agrave; Tĩnh giai đoạn 2016-2020 nhưng chưa được th&ocirc;ng qua do nguồn kinh ph&iacute; thực hiện Đề &aacute;n lớn trong khi điều kiện ng&acirc;n s&aacute;ch tỉnh c&ograve;n kh&oacute; khăn. Việc tiếp tục &aacute;p dụng cơ chế ch&iacute;nh s&aacute;ch của Nghị quyết 122 để hỗ trợ cho c&aacute;c HTX khi chưa được HĐND tỉnh ban h&agrave;nh Nghị quyết thay thế l&agrave; tr&aacute;i quy định. Hiện nay, Ch&iacute;nh phủ đ&atilde; ban h&agrave;nh Quyết định số 2261/QĐ-UBND ng&agrave;y 15/12/2014 ph&ecirc; duyệt Chương tr&igrave;nh hỗ trợ ph&aacute;t triển hợp t&aacute;c x&atilde; giai đoạn 2015 &ndash; 2020 với nhiều ch&iacute;nh s&aacute;ch hỗ trợ HTX như: hỗ trợ bồi dưỡng nguồn nh&acirc;n lực; x&uacute;c tiến thương mại, mở rộng thị trường; ứng dụng khoa học, kỹ thuật v&agrave; c&ocirc;ng nghệ mới; th&agrave;nh lập mới, tổ chức lại hoạt động của HTX; ch&iacute;nh s&aacute;ch ri&ecirc;ng đối với HTX n&ocirc;ng, l&acirc;m, ngư, di&ecirc;m nghiệp. Đề nghị Li&ecirc;n minh Hợp t&aacute;c x&atilde; tỉnh tăng cường c&ocirc;ng t&aacute;c tuy&ecirc;n truyền, hưỡng dẫn c&aacute;c HTX tiếp cận c&aacute;c ch&iacute;nh s&aacute;ch n&ecirc;u tr&ecirc;n.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Trần T&uacute; Anh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sokehoach@hatinh.gov.vn">sokehoach@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0982 325758&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Đề nghị trong thời gian HĐND tỉnh chưa ban h&agrave;nh Nghị quyết thay thế Nghị quyết số 122/2010/NQ-HĐND ng&agrave;y 30/7/2010 của Hội đồng nh&acirc;n d&acirc;n tỉnh về ph&aacute;t triển kinh tế tập thể tỉnh H&agrave; Tĩnh giai đoạn 2010-2015 th&igrave; vẫn cho &aacute;p dụng cơ chế ch&iacute;nh s&aacute;ch của Nghị quyết 122 để hỗ trợ cho c&aacute;c HTX (đặc biệt l&agrave; ch&iacute;nh s&aacute;ch hỗ trợ th&agrave;nh lập mới, hỗ trợ &ocirc; t&ocirc; chở r&aacute;c, hỗ trợ c&aacute;n bộ đ&agrave;o tạo d&agrave;i hạn)</p>
        </td>
        <td>&nbsp;</td>
        <td>Li&ecirc;n minh Hợp t&aacute;c x&atilde; tỉnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=144" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP x&acirc;y dựng đường bộ số I<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời: 3.1. Dự &aacute;n cải tạo, n&acirc;ng cấp QL15 đoạn nối QL1A (TP H&agrave; Tĩnh) - đường Hồ Ch&iacute; Minh (Ph&uacute;c Đồng) được Bộ GTVT ph&ecirc; duyệt tại Quyết định số 2987/QĐ-BGTVT ng&agrave;y 14/10/2009 v&agrave; giao cho Sở GTVT H&agrave; Tĩnh l&agrave;m Chủ đầu tư; với tổng chiều d&agrave;i l&agrave; 32,89km v&agrave; c&oacute; TMĐT l&agrave; 681,641 tỷ đồng. Dự &aacute;n được ph&acirc;n chia th&agrave;nh 10 g&oacute;i thầu x&acirc;y lắp, được khởi c&ocirc;ng x&acirc;y dựng v&agrave;o th&aacute;ng 10/2010 v&agrave; đ&atilde; thi c&ocirc;ng ho&agrave;n th&agrave;nh, b&agrave;n giao đưa v&agrave;o khai th&aacute;c, sử dụng từ th&aacute;ng 9/2014, Đến nay, Chủ đầu tư v&agrave; c&aacute;c nh&agrave; thầu đă thực hiện xong c&ocirc;ng t&aacute;c quyết to&aacute;n A- B; đồng thời Sở GTVT đ&atilde; tr&igrave;nh Bộ GTVTph&ecirc; duyệt điều chỉnh Tổng mức đầu tư v&agrave; thẩm tra, ph&ecirc; duyệt quyết to&aacute;n dự &aacute;n ho&agrave;n th&agrave;nh (Tờ tr&igrave;nh số 3390/SGTVT-TTr ng&agrave;y 19/9/2014, số 2649/TTr-SGTVT ng&agrave;y 19/8/2016) với gi&aacute; trị đề nghị quyết to&aacute;n l&agrave; 765,806 tỷ đồng. Tuy nhi&ecirc;n do nguồn vốn của dự &aacute;n mới được bố tr&iacute; 641,175 tỷ đồng (hiện đ&atilde; giải ng&acirc;n hết) n&ecirc;n số nợ đọng XDCB của dự &aacute;n đến nay l&agrave; 124,631 tỷ đồng. Hiện Bộ GTVT. Bộ KHĐT đ&atilde; tr&igrave;nh Thủ tướng Ch&iacute;nh phủ bổ tr&iacute; nguồn vốn trả nợ khối lượng x&acirc;y lắp ho&agrave;n th&agrave;nh trong kế hoạch đầu tư c&ocirc;ng trung hạn giai đoạn 2016 - 2020 cho dự &aacute;n l&agrave; 40,5 tỷ đồng. C&ocirc;ng ty CPXD đường bộ 1 H&agrave; Tĩnh l&agrave; đơn vị thi c&ocirc;ng g&oacute;i thầu số 07 (thuộc Li&ecirc;n danh C&ocirc;ng ty TNHH MTV 185 - C&ocirc;ng ty CP TVĐT&amp;XDMiền Trung - C&ocirc;ng ty CP ph&aacute;t triển c&ocirc;ng nghiệp, XL&amp;TM H&agrave; Tĩnh - C&ocirc;ng ty CPXD đường bộ số 1 H&agrave; Tĩnh) với gi&aacute; trị họp đồng do C&ocirc;ng ty CPXD đường bộ 1 H&agrave; Tĩnh thi c&ocirc;ng được quyết to&aacute;n A-B l&agrave; 15,211 tỷ đồng; đến nay Chủ đầu tư đ&atilde; thanh to&aacute;n cho nh&agrave; thầu l&agrave; 8,83 tỷ đồng, số c&ograve;n nợ l&agrave; 6,381 tỷ đồng. Sau khi được Bộ GTVT bố tr&iacute; nguồn vốn trả nợ l&agrave; 40,5 tỷ đồng n&ecirc;u tr&ecirc;n, Sở GTVT sẽ c&acirc;n đối để trả một phần vốn c&ograve;n nợ cho C&ocirc;ng ty CPXD đường bộ 1 H&agrave; Tĩnh v&agrave; c&aacute;c nh&agrave; thầu theo quy định; phần c&ograve;n lại sẽ chờ đến khi Bộ GTVT ph&ecirc; duyệt quyết to&aacute;n dự &aacute;n ho&agrave;n th&agrave;nh v&agrave; bố tr&iacute; nguồn vốn th&igrave; Chủ đầu tư mới c&oacute; cơ sở thanh to&aacute;n hết số nợ cho nh&agrave; thầu. 3.2 Dự &aacute;n đường Nam cầu C&agrave;y đến cầu Thạch Đồng, TP H&agrave; Tĩnh được ƯBND tỉnh ph&ecirc; duyệt tại Quyết định số 300 QĐ/UB-CN1 ng&agrave;y 22/2/2005 v&agrave; giao cho Sở GTVT H&agrave; Tĩnh l&agrave;m Chủ đầu tư. Dự &aacute;n đi qua địa b&agrave;n th&agrave;nh phố H&agrave; Tĩnh với tổng chiều d&agrave;i l&agrave; 6,35km v&agrave; c&oacute; TMĐT l&agrave; 209,778 tỷ đồng. Dự &aacute;n được chia l&agrave;m 12 g&oacute;i thầu x&acirc;y lắp, được khởi c&ocirc;ng x&acirc;y dựng v&agrave;o th&aacute;ng 6/2006 v&agrave; đ&atilde; thi c&ocirc;ng ho&agrave;n th&agrave;nh, b&agrave;n giao đưa v&agrave;o khai th&aacute;c, sử dụng từ th&aacute;ng 10/2012. Đến nay, dự &aacute;n đ&atilde; được ƯBND tỉnh ph&ecirc; duyệt quyết to&aacute;n dự &aacute;n ho&agrave;n th&agrave;nh (Quyết định số 2561/QD-UBND ng&agrave;y 29/8/2014) với gi&aacute; trị quyết to&aacute;n l&agrave; 173,594 tỷ đồng. Tuy nhi&ecirc;n do nguồn vốn của dự &aacute;n mới được bố tr&iacute; 169,143 tỷ đồng (đ&atilde; giải ng&acirc;n hết) n&ecirc;n số nợ đọng XDCB của dự &aacute;n đến nay l&agrave; 4,451 tỷ đồng. C&ocirc;ng ty CPXD đường bộ 1 H&agrave; Tĩnh l&agrave; đơn vị thi c&ocirc;ng g&oacute;i thầu số 03 của tuyến ch&iacute;nh v&agrave; đường c&ocirc;ng vụ M&ocirc;n Đỉnh với gi&aacute; trị họp đồng được quyết to&aacute;n A-B l&agrave; 19,112 tỷ đồng (trong đ&oacute;: phần tuyến ch&iacute;nh l&agrave; 18,901 tỷ đồng v&agrave; đường c&ocirc;ng vụ M&ocirc;n Đỉnh l&agrave; 0,211 tỷ đồng); đến nay Chủ đầu tư đ&atilde; thanh to&aacute;n cho nh&agrave; thầu l&agrave; 18,641 tỷ đồng, số c&ograve;n nợ l&agrave; của g&oacute;i thầu l&agrave; 0,471 tỷ đồng (trong đ&oacute;: phần tuyến ch&iacute;nh l&agrave; 0,260 tỷ đồng v&agrave; đường c&ocirc;ng vụ M&ocirc;n Đỉnh l&agrave; 0,211 tỷ đồng). K&iacute;nh đề nghị UBND tỉnh bố tr&iacute; nguồn vốn trả nợ, sau khi được bố tr&iacute; vốn, Sở GTVT sẽ thanh to&aacute;n hết số tiền c&ograve;n nợ cho C&ocirc;ng ty CPXD đường bộ 1 H&agrave; Tĩnh theo quy định.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Lương Văn Kỳ&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Gi&aacute;m đốc&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sogiaothong@hatinh.gov.vn">sogiaothong@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Đề nghị ƯBND tỉnh chỉ đạo Ban Quản l&yacute; dự &aacute;n CTGT H&agrave; Tĩnh trả nợ c&aacute;c c&ocirc;ng tr&igrave;nh: Đường 15A Ph&uacute;c Đồng, Đường Nam Cầu C&agrave;y + M&ocirc;n Đỉnh&rdquo;</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty CP x&acirc;y dựng đường bộ số I</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>5</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=145" onclick="GoToLink(this);return false;" target="_self">VPDD ALPS LOGISTICS CO., LTD TẠI H&Agrave; NỘI<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Nội</td>
        <td>
            <p>Trả lời c&acirc;u hỏi của bạn đọc, bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến trao đổi như sau: Căn cứ khoản 8 Điều 91 Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh Quy định về thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng ho&aacute; xuất khẩu, nhập khẩu th&igrave;: &ldquo;8. Việc chuyển quyền sở hữu h&agrave;ng ho&aacute; gửi kho ngoại quan do chủ h&agrave;ng ho&aacute; thực hiện khi c&oacute; h&agrave;nh vi mua b&aacute;n h&agrave;ng ho&aacute; theo quy định tại khoản 8 Điều 3 Luật Thương mại. Chủ kho ngoại quan c&oacute; văn bản th&ocirc;ng b&aacute;o cho Chi cục Hải quan quản l&yacute; kho ngoại quan về việc chuyển quyền sở hữu h&agrave;ng h&oacute;a đang gửi kho ngoại quan để quản l&yacute; theo d&otilde;i, kh&ocirc;ng phải l&agrave;m thủ tục nhập, xuất kho ngoại quan. Thời hạn h&agrave;ng ho&aacute; gửi kho ngoại quan được t&iacute;nh kể từ ng&agrave;y h&agrave;ng ho&aacute; đưa v&agrave;o kho ngoại quan theo hợp đồng thu&ecirc; kho k&yacute; giữa chủ kho ngoại quan v&agrave; chủ h&agrave;ng cũ&rdquo;. Ngo&agrave;i ra, bạn đọc tham khảo quy định về quyền kinh doanh xuất khẩu, nhập khẩu, ph&acirc;n phối của doanh nghiệp c&oacute; vốn đầu tư nước ngo&agrave;i tại Th&ocirc;ng tư số 08/2013/TT-BCT để thực hiện. Nếu c&ograve;n vướng mắc th&igrave; li&ecirc;n hệ trực tiếp với cơ quan hải quan quản l&yacute; kho ngoại quan để được giải đ&aacute;p cụ thể. Bạn đọc c&oacute; thể tham khảo c&aacute;c văn bản tr&ecirc;n tại mục THƯ VIỆN PH&Aacute;P LUẬT tr&ecirc;n Cổng Th&ocirc;ng tin điện tử Hải quan &ndash; Tổng cục Hải quan địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">www.customs.gov.vn</a>. Bộ phận tư vấn Ban Bi&ecirc;n tập Cổng Th&ocirc;ng tin điện tử Hải quan th&ocirc;ng b&aacute;o để &Ocirc;ng (B&agrave;) biết./. Tr&acirc;n trọng.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng Nghiệp vụ&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục Hải Quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:info@htcustoms.gov.vn">info@htcustoms.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0983 305678&quot;}&nbsp;</p>
        </td>
        <td>
            <p>K&iacute;nh gửi Chuy&ecirc;n mục, Hiện nay c&ocirc;ng ty ch&uacute;ng t&ocirc;i đang gặp vấn đề như dưới đ&acirc;y, cần tư vấn: Ch&uacute;ng t&ocirc;i c&oacute; kh&aacute;ch h&agrave;ng l&agrave; doanh nghiệp FDI, c&oacute; nhập h&agrave;ng từ nước ngo&agrave;i về gửi ở kho ngoại quan chờ b&aacute;n cho doanh nghiệp chế xuất. Ch&uacute;ng t&ocirc;i muốn hỏi, trong trường hợp kh&aacute;ch h&agrave;ng FDI muốn thực hiện chuyển quyền sở hữu h&agrave;ng h&oacute;a đ&oacute; trong kho ngoại quan cho DNCX th&igrave; c&oacute; được ph&eacute;p kh&ocirc;ng? Nếu được ph&eacute;p th&igrave; điều kiện l&agrave; g&igrave;? Tr&ecirc;n đ&acirc;y l&agrave; những vướng mắc c&ocirc;ng ty t&ocirc;i đang gặp phải. K&iacute;nh mong Chuy&ecirc;n mục giải đ&aacute;p gi&uacute;p ch&uacute;ng t&ocirc;i. Tr&acirc;n trọng cảm ơn!</p>
        </td>
        <td>&nbsp;</td>
        <td>VPDD ALPS LOGISTICS CO., LTD TẠI H&Agrave; NỘI</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=146" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty Tứ Đỉnh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời c&acirc;u hỏi của bạn đọc, bộ phận tư vấn của Ban bi&ecirc;n tập c&oacute; &yacute; kiến trao đổi như sau: * Về thuế nhập khẩu đối với nguy&ecirc;n liệu: Nguy&ecirc;n liệu nhập khẩu để sản xuất h&agrave;ng xuất khẩu được miễn thuế nếu đ&aacute;p ứng điều kiện quy định tại Điều 12 Nghị định 134/2016/NĐ-CP ng&agrave;y 1/9/2016 của Ch&iacute;nh phủ về việc quy định chi tiết một số điều v&agrave; biện ph&aacute;p thi h&agrave;nh luật thuế xuất khẩu, thuế nhập khẩu. &ldquo;Điều 12. Miễn thuế đối với h&agrave;ng h&oacute;a nhập khẩu để sản xuất h&agrave;ng h&oacute;a xuất khẩu 1. Nguy&ecirc;n liệu, vật tư, linh kiện, b&aacute;n th&agrave;nh phẩm, sản phẩm ho&agrave;n chỉnh nhập khẩu để sản xuất h&agrave;ng h&oacute;a xuất khẩu được miễn thuế nhập khẩu theo quy định tại khoản 7 Điều 16 Luật thuế xuất khẩu, thuế nhập khẩu, bao gồm: a) Nguy&ecirc;n liệu, vật tư (bao gồm cả vật tư l&agrave;m bao b&igrave; hoặc bao b&igrave; để đ&oacute;ng g&oacute;i sản phẩm xuất khẩu), linh kiện, b&aacute;n th&agrave;nh phẩm nhập khẩu trực tiếp cấu th&agrave;nh sản phẩm xuất khẩu hoặc tham gia trực tiếp v&agrave;o qu&aacute; tr&igrave;nh sản xuất h&agrave;ng h&oacute;a xuất khẩu nhưng kh&ocirc;ng trực tiếp chuyển h&oacute;a th&agrave;nh h&agrave;ng h&oacute;a; b) Sản phẩm ho&agrave;n chỉnh nhập khẩu để gắn, lắp r&aacute;p v&agrave;o sản phẩm xuất khẩu hoặc đ&oacute;ng chung th&agrave;nh mặt h&agrave;ng đồng bộ với sản phẩm xuất khẩu; c) Linh kiện, phụ t&ugrave;ng nhập khẩu để bảo h&agrave;nh cho sản phẩm xuất khẩu; d) H&agrave;ng h&oacute;a nhập khẩu kh&ocirc;ng sử dụng để mua b&aacute;n, trao đổi hoặc ti&ecirc;u d&ugrave;ng m&agrave; chỉ d&ugrave;ng l&agrave;m h&agrave;ng mẫu. 2. Cơ sở để x&aacute;c định h&agrave;ng h&oacute;a được miễn thuế: a) Tổ chức, c&aacute; nh&acirc;n sản xuất h&agrave;ng h&oacute;a xuất khẩu c&oacute; cơ sở sản xuất h&agrave;ng h&oacute;a xuất khẩu tr&ecirc;n l&atilde;nh thổ Việt Nam; c&oacute; quyền sở hữu hoặc quyền sử dụng đối với m&aacute;y m&oacute;c, thiết bị tại cơ sở sản xuất ph&ugrave; hợp với nguy&ecirc;n liệu, vật tư, linh kiện nhập khẩu để sản xuất h&agrave;ng h&oacute;a xuất khẩu v&agrave; thực hiện th&ocirc;ng b&aacute;o cơ sở sản xuất theo quy định của ph&aacute;p luật về hải quan; b) Nguy&ecirc;n liệu, vật tư, linh kiện nhập khẩu được sử dụng để sản xuất sản phẩm đ&atilde; xuất khẩu. Trị gi&aacute; hoặc lượng nguy&ecirc;n liệu, vật tư, linh kiện nhập khẩu được miễn thuế l&agrave; trị gi&aacute; hoặc lượng nguy&ecirc;n liệu, vật tư, linh kiện nhập khẩu thực tế được sử dụng để sản xuất sản phẩm thực tế xuất khẩu, được x&aacute;c định khi quyết to&aacute;n việc quản l&yacute;, sử dụng nguy&ecirc;n liệu, vật tư, linh kiện nhập khẩu để sản xuất sản phẩm xuất khẩu theo quy định của ph&aacute;p luật về hải quan. Khi quyết to&aacute;n, người nộp thuế c&oacute; tr&aacute;ch nhiệm k&ecirc; khai ch&iacute;nh x&aacute;c, trung thực trị gi&aacute; hoặc lượng nguy&ecirc;n liệu, vật tư, linh kiện xuất khẩu thực tế sử dụng để sản xuất sản phẩm gia c&ocirc;ng thực tế nhập khẩu đ&atilde; được miễn thuế khi l&agrave;m thủ tục hải quan. 3. Hồ sơ, thủ tục miễn thuế thực hiện theo quy định tại Điều 31 Nghị định n&agrave;y&rdquo;. * Về thuế xuất khẩu: theo quy định kh&ocirc;ng được ho&agrave;n thuế xuất khẩu (nếu h&agrave;ng h&oacute;a xuất khẩu thuộc đối tượng phải nộp thuế). Bạn đọc c&oacute; thể tham khảo c&aacute;c văn bản tr&ecirc;n tại mục THƯ VIỆN PH&Aacute;P LUẬT tr&ecirc;n Cổng Th&ocirc;ng tin điện tử Hải quan &ndash; Tổng cục Hải quan địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">www.customs.gov.vn</a>&nbsp;hoặc li&ecirc;n hệ cơ quan hải quan dự kiến l&agrave;m thủ tục để được hỗ trợ. Bộ phận tư vấn Ban Bi&ecirc;n tập Cổng Th&ocirc;ng tin điện tử Hải quan th&ocirc;ng b&aacute;o để &Ocirc;ng (B&agrave;) biết./. Tr&acirc;n trọng.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng Nghiệp vụ&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục Hải Quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:info@htcustoms.gov.vn">info@htcustoms.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0983 305678&quot;}&nbsp;</p>
        </td>
        <td>
            <p>K&iacute;nh gửi Anh/Chị C&ocirc;ng ty ch&uacute;ng t&ocirc;i hoạt động chủ yếu trong lĩnh vực sản xuất. V&agrave; thực hiện hoạt động nhập khẩu nguy&ecirc;n liệu vật tư để sản xuất sản phẩm xuất khẩu. Hiện nay c&ocirc;ng ty ch&uacute;ng t&ocirc;i đang vướng mắc về việc thực hiện ch&iacute;nh s&aacute;ch thuế đối với sản phẩm xuất khẩu được sản xuất từ to&agrave;n bộ nguy&ecirc;n liệu nhập khẩu. Theo nội dung của nghị định 134/2016/NĐ-CP ng&agrave;y 01/09/2016 kh&ocirc;ng đề cập đến việc ho&agrave;n thuế đối với sản phẩm xuất khẩu được sản xuất từ to&agrave;n bộ nguy&ecirc;n liệu nhập khẩu. Theo th&ocirc;ng tư 38/2015/TT-BTC th&igrave; việc ho&agrave;n thuế xuất khẩu đối với sản phẩm thực hiện theo điều 114 của th&ocirc;ng tư n&agrave;y. Xin cảm ơn.</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty Tứ Đỉnh</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=147" onclick="GoToLink(this);return false;" target="_self">Diana Nguyễn<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Texas Hoa Kỳ</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Xin hỏi t&ocirc;i l&agrave; người Mỹ gốc Việt. T&ocirc;i mong muốn được về Việt Nam mua nh&agrave; vậy c&oacute; cần phải xin quốc tịch Việt Nam, hay l&agrave; phải nhờ người kh&aacute;c đứng t&ecirc;n ? Xin cảm ơn</p>
        </td>
        <td><a href="mailto:diananguyenabc129@gmail.com">diananguyenabc129@gmail.com</a></td>
        <td>Diana Nguyễn</td>
        <td>DN</td>
        <td>public</td>
        <td>6133383879</td>
        <td>6</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=148" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty V&igrave; D&acirc;n<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>
            <p>Trả lời: Cảm ơn bạn đ&atilde; tham gia chuy&ecirc;n mục. N&ocirc;̣i dung c&acirc;u hỏi tr&ecirc;n của quý c&ocirc;ng ty được quy định: I. Theo Lu&acirc;̣t Quảng cáo Tại &ldquo;Điều 23. Quảng c&aacute;o tr&ecirc;n b&aacute;o điện tử v&agrave; trang th&ocirc;ng tin điện tử 1. Quảng c&aacute;o tr&ecirc;n b&aacute;o điện tử phải tu&acirc;n theo c&aacute;c quy định sau: a) Kh&ocirc;ng được thiết kế, bố tr&iacute; phần quảng c&aacute;o lẫn v&agrave;o phần nội dung tin; b) Đối với những quảng c&aacute;o kh&ocirc;ng ở v&ugrave;ng cố định, phải thiết kế để độc giả c&oacute; thể chủ động tắt hoặc mở quảng c&aacute;o, thời gian chờ tắt hoặc mở quảng c&aacute;o tối đa l&agrave; 1,5 gi&acirc;y. 2. Quảng c&aacute;o tr&ecirc;n trang th&ocirc;ng tin điện tử của cơ quan nh&agrave; nước thực hiện theo quy định tại khoản 1 Điều n&agrave;y. 3. Quảng c&aacute;o tr&ecirc;n trang th&ocirc;ng tin điện tử của tổ chức, c&aacute; nh&acirc;n nước ngo&agrave;i kinh doanh dịch vụ quảng c&aacute;o xuy&ecirc;n bi&ecirc;n giới c&oacute; ph&aacute;t sinh doanh thu quảng c&aacute;o tại Việt Nam phải tu&acirc;n thủ c&aacute;c quy định của Luật n&agrave;y v&agrave; c&aacute;c quy định kh&aacute;c của ph&aacute;p luật c&oacute; li&ecirc;n quan. 4. Ch&iacute;nh phủ quy định chi tiết khoản 3 Điều n&agrave;y.&rdquo; II. Theo Luật C&ocirc;ng nghệ th&ocirc;ng tin số 67/2006/QH11 ng&agrave;y 29/6/ 2006, Nghị định số 64/2007/NĐ-CP ng&agrave;y 10/4/2007 của Ch&iacute;nh phủ về ứng dụng c&ocirc;ng nghệ th&ocirc;ng tin trong hoạt động của cơ quan nh&agrave; nước, Nghị định số 43/2011/NĐ-CP ng&agrave;y 13/6/2011 của Ch&iacute;nh phủ quy định về việc cung cấp th&ocirc;ng tin v&agrave; dịch vụ c&ocirc;ng trực tuyến tr&ecirc;n trang th&ocirc;ng tin điện tử hoặc cổng th&ocirc;ng tin điện tử của cơ quan nh&agrave; nước kh&ocirc;ng quy định về việc cấm quảng c&aacute;o thương mại tr&ecirc;n Cổng (trang) th&ocirc;ng tin điện tử của c&aacute;c cơ quan nh&agrave; nước. Như v&acirc;̣y, cơ quan nh&agrave; nước được phép quảng cáo thương mại tr&ecirc;n Cổng (trang) th&ocirc;ng tin điện tử của cơ quan m&igrave;nh nhưng phải ch&acirc;́p hành nghi&ecirc;m các quy định của pháp lu&acirc;̣t; nghi&ecirc;m c&acirc;́m quảng c&aacute;o, tuy&ecirc;n truyền h&agrave;ng ho&aacute;, dịch vụ thuộc danh mục cấm đ&atilde; được ph&aacute;p luật quy định. Đ&ecirc;̉ thực hi&ecirc;̣n đúng quy định của pháp lu&acirc;̣t, đ&ecirc;̀ nghị quý cơ quan tìm hi&ecirc;̉u cụ th&ecirc;̉ tại Lu&acirc;̣t Quảng cáo s&ocirc;́ 16/2012/QH13 ng&agrave;y 21 th&aacute;ng 6 năm 2012 được Quốc hội nước Cộng h&ograve;a x&atilde; hội chủ nghĩa Việt Nam kh&oacute;a XIII, kỳ họp thứ 3 th&ocirc;ng qua ng&agrave;y 21 th&aacute;ng 6 năm 2012; Nghị định s&ocirc;́ 181/2013/NĐ-CP ng&agrave;y 14 th&aacute;ng 11 năm 2013 của Chính phủ; Th&ocirc;ng tư s&ocirc;́ 10/2013/TT-BVHTTDL ng&agrave;y 06 th&aacute;ng 12 năm 2013 của B&ocirc;̣ Văn hóa - Th&ecirc;̉ thao và Du lịch.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;B&ugrave;i Đắc Thế&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; gi&aacute;m đốc Sở&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:sott_tt@hatinh.gov.vn">sott_tt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0916 987868&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Cổng (trang) th&ocirc;ng thin điện tử của c&aacute;c cơ quan nh&agrave; nước c&oacute; được Quảng c&aacute;o Thương mại kh&ocirc;ng? Văn bản ph&aacute;p l&yacute; n&agrave;o qui định?</p>
        </td>
        <td>&nbsp;</td>
        <td>Đặng Quốc Kh&aacute;nh</td>
        <td>DN</td>
        <td>public</td>
        <td>0913559999</td>
        <td>14</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=149" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP tư vấn v&agrave; x&acirc;y dựng Đại Ph&uacute; Hưng<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Tầng 3- Số 162- H&agrave; Hu Tập- TP H&agrave; Tĩnh</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Cho doanh nghiệp xin hỏi: Hiện c&ocirc;ng ty đang thiết kế BVTC một dự &aacute;n Lĩnh vực C&ocirc;ng tr&igrave;nh ph&aacute;t triển n&ocirc;ng nghi&ecirc;p ph&aacute;t triển n&ocirc;ng th&ocirc;n c&oacute; tổng x&acirc;y lắp khoảng 42 tỷ đồng, trong đ&oacute; chi ph&iacute; x&acirc;y lắp c&oacute; 3 hạng mục thuộc 3 lĩnh vực kh&aacute;c nhau như: Giao th&ocirc;ng 20 tỷ, Thuỷ lợi 18 tỷ, Điện 4 tỷ. Doanh nghiệp xin hỏi: - Chi ph&iacute; thiết kế được t&iacute;nh như thế n&agrave;o cho đ&uacute;ng theo quyết định 957 ? hiện doanh nghiệp đang t&iacute;nh tỷ lệ chi ph&iacute; thiết kế theo c&aacute;c hạng mục tr&ecirc;n như sau: V&iacute; dụ với lĩnh vực giao th&ocirc;ng doanh nghiệp t&iacute;nh tỷ lệ &aacute;p dụng theo tổng mức 20 tỷ, lĩnh vực thuỷ lợi &aacute;p dụng cho tỷ lệ (quyết định 957) theo tổng mức 18 tỷ, lĩnh vực điện &aacute;p dụng cho tỷ lệ (quyết định 957) cho tổng mức 4 tỷ .(Tỷ lệ của tổng mức từng loại c&ocirc;ng tr&igrave;nh) . kh&ocirc;ng &aacute;p dụng tỷ lệ cho tổng gi&aacute; trị c&ocirc;ng tr&igrave;nh 42 tỷ, vậy doanh nghiệp xin hỏi việcdoanh nghiệp &aacute;p dụng hệ số cho từng loại c&ocirc;ng tr&igrave;nh như tr&ecirc;n c&oacute; hợp l&yacute; kh&ocirc;ng?(kh&ocirc;ng &aacute;p dụng cho hệ số t&iacute;nh theo của tổng c&ocirc;ng tr&igrave;nh) . (Theo tinh thần của quyết định 957 th&igrave; trường hợp dự &aacute;n gồm nhiều loại c&ocirc;ng tr&igrave;nh th&igrave; chi ph&iacute; thiết kế được x&aacute;c định ri&ecirc;ng theo từng loại c&ocirc;ng tr&igrave;nh v&agrave; t&iacute;nh theo quy m&ocirc; chi ph&iacute; x&acirc;y dựng trong dự to&aacute;n của từng c&ocirc;ng tr&igrave;nh được duyệt) nếu chưa hợp l&yacute; th&igrave; l&yacute; do v&igrave; sao?</p>
        </td>
        <td><a href="mailto:daiphuhungcjc@gmail.com">daiphuhungcjc@gmail.com</a></td>
        <td>L&ecirc; Văn Nam</td>
        <td>DN</td>
        <td>public</td>
        <td>0943764886</td>
        <td>17</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=151" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty tr&aacute;ch nhiệm hữu hạn OOO FBK<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Trả lời c&acirc;u hỏi bạn đọc, Bộ phận tư vấn của Ban Bi&ecirc;n tập c&oacute; &yacute; kiến trao đổi như sau để bạn đọc tham khảo: * Về thuế nhập khẩu: Mức thuế suất thuế nhập khẩu của mặt h&agrave;ng c&oacute; m&atilde; HS 2301.20.20 v&agrave; HS 2301.20.10 đều l&agrave; 0% (theo quy định tại Biểu thuế nhập khẩu ưu đ&atilde;i ban h&agrave;nh theo Nghị định số 122/2016/NĐ-CP ng&agrave;y 01/9/2016 của Ch&iacute;nh phủ về Biểu thuế xuất khẩu, Biểu thuế nhập khẩu ưu đ&atilde;i, Danh mục h&agrave;ng h&oacute;a v&agrave; mức thuế tuyệt đối, thuế hỗn hợp, thuế nhập khẩu ngo&agrave;i hạn ngạch thuế quan). * Về thuế suất thuế gi&aacute; trị gia tăng của mặt h&agrave;ng c&oacute; m&atilde; HS 2301.20.20 v&agrave; 2301.20.10 đều l&agrave; 5% (theo quy định tại Biểu thuế gi&aacute; trị gia tăng theo Danh mục h&agrave;ng h&oacute;a nhập khẩu ban h&agrave;nh k&egrave;m theo Th&ocirc;ng tư số 83/2014/TT-BTC ng&agrave;y 26/6/2014 của Bộ T&agrave;i ch&iacute;nh &ldquo;hướng dẫn thực hiện thuế gi&aacute; trị gia tăng theo Danh mục h&agrave;ng h&oacute;a nhập khẩu Việt Nam). * Về thủ tục hải quan (hồ sơ, giấy tờ): Thực hiện theo Khoản 2 Điều 16 Th&ocirc;ng tư số 38/2015/TT-BTC ng&agrave;y 25/3/2015 của Bộ T&agrave;i ch&iacute;nh &ldquo;Quy định thủ tục hải quan; kiểm tra, gi&aacute;m s&aacute;t hải quan; thuế xuất khẩu, thuế nhập khẩu v&agrave; quản l&yacute; thuế đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu&rdquo;. Cụ thể hồ sơ hải quan gồm: - Tờ khai h&agrave;ng h&oacute;a nhập khẩu theo c&aacute;c chỉ ti&ecirc;u th&ocirc;ng tin tại Phụ lục II ban h&agrave;nh k&egrave;m Th&ocirc;ng tư 38/2015/TT-BTC. - H&oacute;a đơn thương mại (trường hợp người mua phải thanh to&aacute;n cho người b&aacute;n): 01 bản chụp. Người khai hải quan kh&ocirc;ng phải nộp h&oacute;a đơn thương mại trong c&aacute;c trường hợp sau: + Người khai hải quan l&agrave; doanh nghiệp ưu ti&ecirc;n; + H&agrave;ng h&oacute;a nhập khẩu để thực hiện hợp đồng gia c&ocirc;ng cho thương nh&acirc;n nước ngo&agrave;i, người khai hải quan khai gi&aacute; tạm t&iacute;nh tại &ocirc; &ldquo;Trị gi&aacute; hải quan&rdquo; tr&ecirc;n tờ khai hải quan; + H&agrave;ng h&oacute;a nhập khẩu kh&ocirc;ng c&oacute; h&oacute;a đơn v&agrave; người mua kh&ocirc;ng phải thanh to&aacute;n cho người b&aacute;n, người khai hải quan khai trị gi&aacute; hải quan theo hướng dẫn của Bộ T&agrave;i ch&iacute;nh về x&aacute;c định trị gi&aacute; hải quan. - Vận tải đơn hoặc c&aacute;c chứng từ vận tải kh&aacute;c c&oacute; gi&aacute; trị tương đương đối với trường hợp h&agrave;ng h&oacute;a vận chuyển bằng đường biển, đường h&agrave;ng kh&ocirc;ng, đường sắt, vận tải đa phương thức theo quy định của ph&aacute;p luật (trừ h&agrave;ng ho&aacute; nhập khẩu qua cửa khẩu bi&ecirc;n giới đường bộ, h&agrave;ng ho&aacute; mua b&aacute;n giữa khu phi thuế quan v&agrave; nội địa, h&agrave;ng h&oacute;a nhập khẩu do người nhập cảnh mang theo đường h&agrave;nh l&yacute;): 01 bản chụp. - Giấy th&ocirc;ng b&aacute;o miễn kiểm tra hoặc Giấy th&ocirc;ng b&aacute;o kết quả kiểm tra của cơ quan kiểm tra chuy&ecirc;n ng&agrave;nh theo quy định của ph&aacute;p luật: 01 bản ch&iacute;nh - Tờ khai trị gi&aacute;: Người khai hải quan khai tờ khai trị gi&aacute; theo mẫu, gửi đến Hệ thống dưới dạng dữ liệu điện tử hoặc nộp cho cơ quan hải quan 02 bản ch&iacute;nh (đối với trường hợp khai tr&ecirc;n tờ khai hải quan giấy). C&aacute;c trường hợp phải khai tờ khai trị gi&aacute; v&agrave; mẫu tờ khai trị gi&aacute; thực hiện theo Th&ocirc;ng tư của Bộ T&agrave;i ch&iacute;nh quy định về việc x&aacute;c định trị gi&aacute; hải quan đối với h&agrave;ng h&oacute;a xuất khẩu, nhập khẩu; - Chứng từ chứng nhận xuất xứ h&agrave;ng h&oacute;a (Giấy chứng nhận xuất xứ h&agrave;ng h&oacute;a hoặc Chứng từ tự chứng nhận xuất xứ): 01 bản ch&iacute;nh hoặc chứng từ dưới dạng dữ liệu điện tử (trong trường hợp h&agrave;ng ho&aacute; c&oacute; xuất xứ từ nước hoặc nh&oacute;m nước c&oacute; thoả thuận về &aacute;p dụng thuế suất ưu đ&atilde;i đặc biệt với Việt Nam theo quy định của ph&aacute;p luật Việt Nam v&agrave; theo c&aacute;c Điều ước quốc tế m&agrave; Việt Nam k&yacute; kết hoặc tham gia, nếu c&ocirc;ng ty bạn muốn được hưởng c&aacute;c chế độ ưu đ&atilde;i đ&oacute;) Ngo&agrave;i ra, khi nhập khẩu thức ăn chăn nu&ocirc;i, đề nghị bạn đọc tham khảo hướng dẫn tại c&aacute;c văn bản sau: - Th&ocirc;ng tư số 04/2015/TT-BNNPTNT ng&agrave;y 12/02/2015 của Bộ trưởng Bộ N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n &ldquo;Hướng dẫn thực hiện một số nội dung của Nghị định số 187/2013/NĐ-CP ng&agrave;y 20/11/2013 của Ch&iacute;nh phủ quy định chi tiết thi h&agrave;nh Luật Thương mại về hoạt động mua b&aacute;n h&agrave;ng ho&aacute; quốc tế v&agrave; c&aacute;c hoạt động đại l&yacute;, mua, b&aacute;n, gia c&ocirc;ng v&agrave; qu&aacute; cảnh h&agrave;ng ho&aacute; với nước ngo&agrave;i trong lĩnh vực n&ocirc;ng nghiệp, l&acirc;m nghiệp và thủy sản&rdquo; (Điều 25,...). - Th&ocirc;ng tư 66/2011/TT-BNNPTNT ng&agrave;y 10/10/2011 của Bộ trưởng Bộ N&ocirc;ng nghiệp v&agrave; Ph&aacute;t triển n&ocirc;ng th&ocirc;n &ldquo;Quy định chi tiết một số điều Nghị định số 08/2010/NĐ-CP ng&agrave;y 05/02/2010 của Ch&iacute;nh phủ về quản l&yacute; thức ăn chăn nu&ocirc;i&rdquo; (Điều 6,...) v&agrave; c&aacute;c văn bản sửa đổi, bổ sung. * Về lệ ph&iacute; hải quan: 20.000 đồng/ tờ khai hải quan Bạn c&oacute; thể t&igrave;m nội dung c&aacute;c văn bản đ&atilde; n&ecirc;u ở mục VĂN BẢN PH&Aacute;P LUẬT tr&ecirc;n Cổng th&ocirc;ng tin điện tử Hải quan theo địa chỉ&nbsp;<a href="http://www.customs.gov.vn/">http://www.customs.gov.vn</a>&nbsp;hoặc li&ecirc;n hệ trực tiếp với Chi cục Hải quan nơi dự kiến mở tờ khai để được hỗ trợ chi tiết. Bộ phận tư vấn của Ban bi&ecirc;n tập th&ocirc;ng b&aacute;o để bạn đọc biết./. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Ph&ograve;ng QLGD&amp;TTĐT&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Cục hải quan H&agrave; Tĩnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:webmaster@customs.gov.vn">webmaster@customs.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0914237788&quot;}</p>
        </td>
        <td>
            <p>K&iacute;nh gửi hải quan việt nam C&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; dự định nhập khẩu h&agrave;ng bột c&aacute; l&agrave;m thức ăn chăn nu&ocirc;i từ Nga, m&atilde; HS 2301.20.20 v&agrave; HS 2301.20.10 Xin cho về thuế nhập khẩu, VAT, v&agrave; c&aacute;c loại giấy tờ, lệ ph&iacute; để th&ocirc;ng quan. Do c&ocirc;ng ty nhập khẩu lần đầu, c&ograve;n nhiều vấn đề chưa r&otilde;, k&iacute;nh mong hải quan hướng dẫn c&aacute;c quy định. Ch&uacute;ng t&ocirc;i xin ch&acirc;n th&agrave;nh cảm ơn!</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty tr&aacute;ch nhiệm hữu hạn OOO FBK</td>
        <td>DN</td>
        <td>public</td>
        <td>0888119989</td>
        <td>25</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=152" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty THHH tập đo&agrave;n Sơn Hải<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Đồng Hới</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <p>Tập đo&agrave;n Sơn Hải l&agrave; l&agrave; nh&agrave; thầu Thi coonggois thầu</p>
        </td>
        <td>&nbsp;</td>
        <td>C&ocirc;ng ty THHH tập đo&agrave;n Sơn Hải</td>
        <td>DN</td>
        <td>&nbsp;</td>
        <td>0888119989</td>
        <td>27</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=153" onclick="GoToLink(this);return false;" target="_self">CTCP đầu tư GD&amp;ĐT Tr&iacute; Đức<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>
            <p>Bảo hiểm x&atilde; hội tỉnh H&agrave; Tĩnh trả lời như sau: Theo Quyết định số 959/QĐ - BHXH ng&agrave;y 09/09/2015 ban h&agrave;nh quy định về quản l&yacute; thu BHXH, BHYT, BHTN; Quản l&yacute; sổ BHXH, thẻ BHYT của Bảo hiểm x&atilde; hội Việt Nam tại điểm 5.1 điều 46. Cấp v&agrave; quản l&yacute; sổ ghi: Nếu trường hợp một người c&oacute; từ 2 sổ BHXH trở l&ecirc;n ghi thời gian đ&oacute;ng BHXH kh&ocirc;ng tr&ugrave;ng nhau th&igrave; cơ quan BHXH thu hồi tất cả c&aacute;c sổ BHXH ho&agrave;n chỉnh lại cơ sở dữ liệu in thời gian đ&oacute;ng, hưởng BHXH, BHTN của c&aacute;c sổ BHXH v&agrave;o sổ mới. Về thủ tục hồ sơ được quy định tại điều 29 điểm1 : hồ sơ cấp lại sổ BHXH do mất, hỏng ,thay đổi số sổ, gộp sổ BHXH: a.Tờ khai cung cấp v&agrave; thay đổi th&ocirc;ng tin người tham gia BHXH, BHYT(Mẫu số TK1- TS) b.Sổ BHXH đ&atilde; cấp. C&ocirc;ng ty nộp thủ tục hồ sơ tại cơ quan BHXH nơi C&ocirc;ng ty tham gia đ&oacute;ng BHXH. Thủ tục hồ sơ c&oacute; thể tham khảo tại trang : bhxhhatinh.gov.vn.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Phạm Bảo Cường&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Bảo hiểm x&atilde; hội tỉnh&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:vanphongbhxhhatinh@gmail.com">vanphongbhxhhatinh@gmail.com</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0393.855853&quot;}&nbsp;</p>
        </td>
        <td>
            <p>K&iacute;nh gửi Qu&yacute; cơ quan! Đơn vị ch&uacute;ng t&ocirc;i muốn thực hiện gộp sổ bảo hiểm cho người lao động (1 sổ cũ v&agrave; 1 sổ tại c&ocirc;ng ty ch&uacute;ng t&ocirc;i) theo sổ cũ. Nhờ cơ quan bảo hiểm hướng dẫn thủ tục cụ thể. Xin cảm ơn. Tr&acirc;n trọng!</p>
        </td>
        <td><a href="mailto:maitrinhthingoc@gmail.com">maitrinhthingoc@gmail.com</a></td>
        <td>CTCP đầu tư GD&amp;ĐT Tr&iacute; Đức</td>
        <td>DN</td>
        <td>public</td>
        <td>091446889</td>
        <td>28</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=154" onclick="GoToLink(this);return false;" target="_self">Nguyễn Kh&aacute;nh H&ograve;a<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Th&agrave;nh phố H&agrave; Tĩnh</td>
        <td>
            <p>C&acirc;u hỏi của bạn kh&ocirc;ng thuộc chức năng Tổ vận h&agrave;nh chuy&ecirc;n mục &quot;Doanh nghiệp hỏi - Cơ quan nh&agrave; nước trả lời&quot; mong bạn h&atilde;y gửi c&acirc;u hỏi tới địa chỉ:&nbsp;<a href="http://hatinhcity.gov.vn/Questions/Index.aspx">http://hatinhcity.gov.vn/Questions/Index.aspx</a>hoặc gặp trực tiếp tại bộ phận 1 của của UBND Th&agrave;nh phố H&agrave; Tĩnh để được giải đ&aacute;p. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Gia đ&igrave;nh ch&uacute;ng t&ocirc;i đang sử dụng thửa đất theo giấy chứng nhận quyền sử dụng đất do UBND Th&agrave;nh phố H&agrave; Tĩnh cấp năm 2005; diện t&iacute;ch 190 m2; Nhưng đến nay, qua kết quả đo đạc theo dự &aacute;n &ldquo; X&acirc;y dựng hệ thống HSĐC v&agrave; CSDL quản l&yacute; đất đai của tỉnh H&agrave; Tĩnh&rdquo;. Thực hiện đo nguy&ecirc;n trạng của thửa đất (đo đạc theo đ&uacute;ng sơ đồ, ranh giới của thửa đất tại giấy chứng nhận quyền sử dụng đất do UBND Th&agrave;nh phố H&agrave; Tĩnh cấp năm 2005 n&ecirc;u tr&ecirc;n) th&igrave; c&oacute; tổng diện t&iacute;ch thực tế lớn hơn so với diện t&iacute;ch được ghi tại giấy chứng nhận quyền sử dụng đất (lớn hơn 45m2) Căn cứ luật đất đai số 45/2013/QH13 ng&agrave;y 29/11/2013, c&oacute; hiệu lực từ ng&agrave;y 01/7/2014. Tại khoản 5 Điều 98. Nguy&ecirc;n tắc cấp Giấy chứng nhận quyền sử dụng đất, quyền sở hữu nh&agrave; ở v&agrave; t&agrave;i sản kh&aacute;c gắn liền với đất. Quy định: &ldquo;5. Trường hợp c&oacute; sự ch&ecirc;nh lệch diện t&iacute;ch giữa số liệu đo đạc thực tế với số liệu ghi tr&ecirc;n giấy tờ quy định tại Điều 100 của Luật n&agrave;y hoặc Giấy chứng nhận đ&atilde; cấp m&agrave; ranh giới thửa đất đang sử dụng kh&ocirc;ng thay đổi so với ranh giới thửa đất tại thời điểm c&oacute; giấy tờ về quyền sử dụng đất, kh&ocirc;ng c&oacute; tranh chấp với những người sử dụng đất liền kề th&igrave; khi cấp hoặc cấp đổi Giấy chứng nhận quyền sử dụng đất, quyền sở hữu nh&agrave; ở v&agrave; t&agrave;i sản kh&aacute;c gắn liền với đất diện t&iacute;ch đất được x&aacute;c định theo số liệu đo đạc thực tế. Người sử dụng đất kh&ocirc;ng phải nộp tiền sử dụng đất đối với phần diện t&iacute;ch ch&ecirc;nh lệch nhiều hơn nếu c&oacute;&rdquo; Đối chiếu với thực tế thửa đất gia đ&igrave;nh t&ocirc;i đang sử dụng, c&oacute; ranh giới thửa đất đang sử dụng kh&ocirc;ng thay đổi so với ranh giới thửa đất tại thời điểm c&oacute; giấy tờ về quyền sử dụng đất (đ&uacute;ng theo sơ đồ, vị tr&iacute; thửa đất được cấp tại giấy chứng nhận quyền sử dụng đất), kh&ocirc;ng c&oacute; tranh chấp với những người sử dụng đất liền kề. Vậy cho t&ocirc;i hỏi: Khi xin chuyển đổi lại giấy chứng nhận quyền sử dụng đất, th&igrave; gia đ&igrave;nh t&ocirc;i c&oacute; phải nộp tiền sử dụng đất phần diện t&iacute;ch ch&ecirc;nh lệch kh&ocirc;ng ? Tr&igrave;nh tự c&aacute;c csthuwcj hiện ?, hồ sơ xin chuyển đổi giấy chứng nhận quyền sử dụng đất gồm hồ sơ, giấy tờ g&igrave; ? v&agrave; thời gian chờ để được chuyển đổi lại giấy chứng nhận quyền sử dụng đất l&agrave; bao nhi&ecirc;u ng&agrave;y ?</p>
        </td>
        <td><a href="mailto:khanhhoa1112@gmail.com">khanhhoa1112@gmail.com</a></td>
        <td>Nguyễn Kh&aacute;nh H&ograve;a</td>
        <td>DN</td>
        <td>public</td>
        <td>0919139799</td>
        <td>30</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=155" onclick="GoToLink(this);return false;" target="_self">Nguyễn Kh&aacute;nh H&ograve;a<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>th&agrave;nh phố H&agrave; Tĩnh</td>
        <td>
            <p>C&acirc;u hỏi của bạn kh&ocirc;ng thuộc chức năng Tổ vận h&agrave;nh chuy&ecirc;n mục &quot;Doanh nghiệp hỏi - Cơ quan nh&agrave; nước trả lời&quot; mong bạn h&atilde;y gửi c&acirc;u hỏi tới địa chỉ:&nbsp;<a href="http://sotnmt.hatinh.gov.vn/vi/faq/">http://sotnmt.hatinh.gov.vn/vi/faq/</a>&nbsp;hoặc gặp trực tiếp tại bộ phận 1 của của Sở T&agrave;i nguy&ecirc;n v&agrave; M&ocirc;i trường để được giải đ&aacute;p. Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Gia đ&igrave;nh ch&uacute;ng t&ocirc;i đang sử dụng thửa đất theo giấy chứng nhận quyền sử dụng đất do UBND Th&agrave;nh phố H&agrave; Tĩnh cấp năm 2005; diện t&iacute;ch 190 m2; Nhưng đến nay, qua kết quả đo đạc theo dự &aacute;n &ldquo; X&acirc;y dựng hệ thống HSĐC v&agrave; CSDL quản l&yacute; đất đai của tỉnh H&agrave; Tĩnh&rdquo;. Thực hiện đo nguy&ecirc;n trạng của thửa đất (đo đạc theo đ&uacute;ng sơ đồ, ranh giới của thửa đất tại giấy chứng nhận quyền sử dụng đất do UBND Th&agrave;nh phố H&agrave; Tĩnh cấp năm 2005 n&ecirc;u tr&ecirc;n) th&igrave; c&oacute; tổng diện t&iacute;ch thực tế lớn hơn so với diện t&iacute;ch được ghi tại giấy chứng nhận quyền sử dụng đất (lớn hơn 45m2) Căn cứ luật đất đai số 45/2013/QH13 ng&agrave;y 29/11/2013, c&oacute; hiệu lực từ ng&agrave;y 01/7/2014. Tại khoản 5 Điều 98. Nguy&ecirc;n tắc cấp Giấy chứng nhận quyền sử dụng đất, quyền sở hữu nh&agrave; ở v&agrave; t&agrave;i sản kh&aacute;c gắn liền với đất. Quy định: &ldquo;5. Trường hợp c&oacute; sự ch&ecirc;nh lệch diện t&iacute;ch giữa số liệu đo đạc thực tế với số liệu ghi tr&ecirc;n giấy tờ quy định tại Điều 100 của Luật n&agrave;y hoặc Giấy chứng nhận đ&atilde; cấp m&agrave; ranh giới thửa đất đang sử dụng kh&ocirc;ng thay đổi so với ranh giới thửa đất tại thời điểm c&oacute; giấy tờ về quyền sử dụng đất, kh&ocirc;ng c&oacute; tranh chấp với những người sử dụng đất liền kề th&igrave; khi cấp hoặc cấp đổi Giấy chứng nhận quyền sử dụng đất, quyền sở hữu nh&agrave; ở v&agrave; t&agrave;i sản kh&aacute;c gắn liền với đất diện t&iacute;ch đất được x&aacute;c định theo số liệu đo đạc thực tế. Người sử dụng đất kh&ocirc;ng phải nộp tiền sử dụng đất đối với phần diện t&iacute;ch ch&ecirc;nh lệch nhiều hơn nếu c&oacute;&rdquo; Đối chiếu với thực tế thửa đất gia đ&igrave;nh t&ocirc;i đang sử dụng, c&oacute; ranh giới thửa đất đang sử dụng kh&ocirc;ng thay đổi so với ranh giới thửa đất tại thời điểm c&oacute; giấy tờ về quyền sử dụng đất (đ&uacute;ng theo sơ đồ, vị tr&iacute; thửa đất được cấp tại giấy chứng nhận quyền sử dụng đất), kh&ocirc;ng c&oacute; tranh chấp với những người sử dụng đất liền kề. Vậy cho t&ocirc;i hỏi: Khi xin chuyển đổi lại giấy chứng nhận quyền sử dụng đất, th&igrave; gia đ&igrave;nh t&ocirc;i c&oacute; phải nộp tiền sử dụng đất phần diện t&iacute;ch ch&ecirc;nh lệch kh&ocirc;ng ? Tr&igrave;nh tự c&aacute;c csthuwcj hiện ?, hồ sơ xin chuyển đổi giấy chứng nhận quyền sử dụng đất gồm hồ sơ, giấy tờ g&igrave; ? v&agrave; thời gian chờ để được chuyển đổi lại giấy chứng nhận quyền sử dụng đất l&agrave; bao nhi&ecirc;u ng&agrave;y ?</p>
        </td>
        <td><a href="mailto:khanhhoa1112@gmail.com">khanhhoa1112@gmail.com</a></td>
        <td>Nguyễn Kh&aacute;nh H&ograve;a</td>
        <td>DN</td>
        <td>public</td>
        <td>&nbsp;0919139799</td>
        <td>13</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=156" onclick="GoToLink(this);return false;" target="_self">Huy Nam<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>thị x&atilde; hồng lĩnh</td>
        <td>
            <p>UBND Thị x&atilde; Hồng Lĩnh xin trả lời như sau: Trong những năm qua, triển khai Nghị định 158/2017/NĐ-CP của Ch&iacute;nh phủ, UBND Thị x&atilde; Hồng Lĩnh thực hiện nghi&ecirc;m t&uacute;c. Việc chuyển đổi việc thực hiện chuyển đổi vị tr&iacute; c&ocirc;ng t&aacute;c được thực hiện theo kế hoạch v&agrave; được c&ocirc;ng bố c&ocirc;ng khai. C&aacute;c vị tr&iacute; thuộc diện phải chuyển đổi đến thời hạn chuyển đổi đều được thực hiện chuyển đổi quy định tại Điều 6 Nghị định 158/NĐ-CP. - Đối với c&ocirc;ng chức kế to&aacute;n phường x&atilde; đến thời điểm hiện nay, những trường hợp đến thời hạn chuyển đổi theo quy định đ&atilde; được chuyển đổi; c&ograve;n những trường hợp đến thời hạn chuyển đổi nhưng chưa thực hiện chuyển đổi, v&igrave; c&aacute;c trường hợp n&agrave;y đang mang thai hoặc nu&ocirc;i con nhỏ dưới 36 th&aacute;ng. - Đối với c&ocirc;ng chức Địa ch&iacute;nh phường, x&atilde; do y&ecirc;u cầu của việc cấp giấy chứng nhận quyền sử dụng đất, tr&ecirc;n cơ sở &yacute; kiến của Sở TN-MT v&agrave; đề nghị của chủ tịch UBND x&atilde;, phường, UBND Thị x&atilde; đ&atilde; l&ugrave;i thời gian chuyển đổi sau khi ho&agrave;n th&agrave;nh việc cấp giấy chứng nhận quyền sử dụng đất. Hiện nay Uỷ ban nh&acirc;n d&acirc;n thị x&atilde; đ&atilde; ban h&agrave;nh Kế hoạch 22/KH-UBND ng&agrave;y 24/02/2017 về việc thực hiện chuyển đổi vị tr&iacute; c&ocirc;ng t&aacute;c theo Nghị định 158/NĐ-CP ng&agrave;y 27/10/2007 của Ch&iacute;nh phủ v&agrave; sẽ thực hiện chuyển đổi theo lộ tr&igrave;nh đ&atilde; đề ra. Tr&ecirc;n đ&acirc;y l&agrave; c&acirc;u trả lời của &ocirc;ng Nguyễn Huy Nam; nếu c&ograve;n vấn đề g&igrave; chưa r&otilde;, xin mời &ocirc;ng c&oacute; thể trực tiếp đến ph&ograve;ng Nội vụ, UBND thị x&atilde; để được giải đ&aacute;p đầy đủ hơn.</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;L&ecirc; Văn B&igrave;nh&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Ph&oacute; chủ tịch&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ubhonglinh@hatinh.gov.vn">ubhonglinh@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0983 029984&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Theo nghị định 158/2007/NĐ-CP của ch&iacute;nh phủ ng&agrave;y 27/10/2007 th&igrave; c&ocirc;ng chức phường x&atilde; lĩnh vực địa ch&iacute;nh v&agrave; kế to&aacute;n c&ocirc;ng t&aacute;c 5 năm th&igrave; phải chuyển đổi nhưng ở thị x&atilde; hồng lĩnh c&ograve;n chưa thực hiện nghi&ecirc;m t&uacute;c. Đề nghị Sở kiểm tra y&ecirc;u cầu thực hiện nghi&ecirc;m t&uacute;c để tr&aacute;nh &yacute; kiến nh&acirc;n d&acirc;n</p>
        </td>
        <td><a href="mailto:Nguyenhuynam@gmail.com">Nguyenhuynam@gmail.com</a></td>
        <td>Huy Nam</td>
        <td>DN</td>
        <td>public</td>
        <td>0393867899</td>
        <td>31</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=157" onclick="GoToLink(this);return false;" target="_self">c&aacute; nh&acirc;n<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>th&aacute;i b&igrave;nh</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <p>k&iacute;nh gửi qu&yacute; cơ quan ! T&ocirc;i c&oacute; đọc được th&ocirc;ng b&aacute;o tuyển dụng 75 c&ocirc;ng chức, vi&ecirc;n chức cơ quan Đảng, mặt trận tổ quốc của tỉnh H&agrave; Tĩnh. Tuy nhi&ecirc;n, t&ocirc;i muốn t&igrave;m hiểu th&ecirc;m th&ocirc;ng tin về thời gian v&agrave; địa điểm mua hồ sơ v&agrave; nộp hồ sơ. T&ocirc;i đ&atilde; t&igrave;m kiếm th&ocirc;ng tin nhưng chưa c&oacute; kết quả. K&iacute;nh mong qu&yacute; cơ quan cho t&ocirc;i biết th&ecirc;m th&ocirc;ng tin, v&agrave; để theo d&otilde;i th&ocirc;ng tin th&igrave; xem ở đ&acirc;u? xin ch&acirc;n th&agrave;nh cảm ơn !</p>
        </td>
        <td><a href="mailto:minhthu326@gmail.com">minhthu326@gmail.com</a></td>
        <td>Phạm Thị Minh Thu</td>
        <td>DN</td>
        <td>&nbsp;</td>
        <td>0945700368</td>
        <td>10</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=158" onclick="GoToLink(this);return false;" target="_self">Huy Nam<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>phường thạch linh, tp h&agrave; tĩnh</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <p>sở c&oacute; 7 ph&oacute; gi&aacute;m đốc sở sai quy định sao chưa xử l&yacute;</p>
        </td>
        <td><a href="mailto:phamthiquy23@gmail.com">phamthiquy23@gmail.com</a></td>
        <td>nguyễn anh nam</td>
        <td>DN</td>
        <td>&nbsp;</td>
        <td>0915890987</td>
        <td>9</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=159" onclick="GoToLink(this);return false;" target="_self">Huy Nam<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>phường thạch linh, tp h&agrave; tĩnh</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <p>sở c&oacute; 7 ph&oacute; gi&aacute;m đốc sở sai quy định sao chưa xử l&yacute;</p>
        </td>
        <td><a href="mailto:phamthiquy23@gmail.com">phamthiquy23@gmail.com</a></td>
        <td>nguyễn anh nam</td>
        <td>DN</td>
        <td>&nbsp;</td>
        <td>0915890987</td>
        <td>9</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=160" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP Tư vấn v&agrave; x&acirc;y dựng Đại Ph&uacute; Hưng<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Tầng 3- Số 162- Đường H&agrave; Huy Tập- TP H&agrave; Tĩnh</td>
        <td>
            <p>C&acirc;u hỏi của bạn Tổ vận h&agrave;nh chuy&ecirc;n mục đ&atilde; chuyển đến đơn vị Chi cụ Thuế H&agrave; Tĩnh trả lời v&agrave; sẽ trả lời bạn sớm nhất! Tr&acirc;n trọng!</p>
        </td>
        <td>
            <p>{&quot;UserName&quot;:&quot;Nguyễn Thanh L&acirc;m&quot;,&nbsp;<br />
                &nbsp;&quot;Level&quot;:&quot;Chuy&ecirc;n mục Doanh nghiệp hỏi &ndash; Cơ quan nh&agrave; nước trả lời&quot;,&nbsp;<br />
                &nbsp;&quot;Email&quot;:&quot;<a href="mailto:ntlam.stttt@hatinh.gov.vn">ntlam.stttt@hatinh.gov.vn</a>&nbsp;&quot;,&nbsp;<br />
                &nbsp;&quot;Phone&quot;:&quot;0888119989&quot;}&nbsp;</p>
        </td>
        <td>
            <p>Doanh nghiệp xin hỏi lần 2 ( V&igrave; lần 1 đ&atilde; hỏi ng&agrave;y 29/11/2016 chưa trả lời) Đầu năm 2012, c&ocirc;ng ty c&oacute; vay vốn của c&aacute; nh&acirc;n để phục vụ cho sản xuất kinh doanh trong năm 2012. việc vay vốn giữa c&ocirc;ng ty v&agrave; c&aacute; nh&acirc;n được thể hiện qua hợp đồng vay với thời hạn 10 năm v&agrave; với l&atilde;i suất bằng 1,2 lần l&atilde;i suất ng&acirc;n h&agrave;ng. Do kh&oacute; khăn n&ecirc;n đến 31/12/2012 c&ocirc;ng ty chưa thể thanh to&aacute;n tiền l&atilde;i vay năm 2012 cho c&aacute; nh&acirc;n n&agrave;y nhưng c&ocirc;ng ty vẫn hạch to&aacute;n chi ph&iacute; l&atilde;i vay n&agrave;y v&agrave;o chi ph&iacute; để được trừ t&iacute;nh thuế trong năm 2012. đến nay( 20/11/2016) khoản l&atilde;i vay vẫn chưa được trả vậy xin hỏi c&ocirc;ng ty c&oacute; được đưa v&agrave;o chi ph&iacute; để t&iacute;nh thu nhập chịu thuế trong năm 2012,2013,2014,2015, 2016 chi ph&iacute; l&atilde;i vay phải trả m&agrave; chưa thanh to&aacute;n hay kh&ocirc;ng? Xin ch&acirc;n th&agrave;nh cảm ơn! (Doanh nghiệp hỏi: C&ocirc;ng ty CP tư vấn v&agrave; x&acirc;y dựng Đại Ph&uacute; Hưng| Địa chỉ: Tầng 3 số 162- H&agrave; Huy Tập- TP H&agrave; Tĩnh | Ng&agrave;y hỏi: 29/11/2016)- Xin hỏi lần 2</p>
        </td>
        <td><a href="mailto:Daiphuhungcjc@gmail.com">Daiphuhungcjc@gmail.com</a></td>
        <td>Ho&agrave;ng Thị Thẩm</td>
        <td>DN</td>
        <td>public</td>
        <td>02393695586</td>
        <td>27</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=189" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty CP Thanh L&acirc;m<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>H&agrave; Tĩnh</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <p>Test thử</p>
        </td>
        <td><a href="mailto:ntlamht@gmail.com">ntlamht@gmail.com</a></td>
        <td>Nguyễn Thanh L&acirc;m</td>
        <td>DN</td>
        <td>&nbsp;</td>
        <td>0888119989</td>
        <td>3</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=190" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH Ho&agrave;ng Sa<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Số 23-Phan Đ&igrave;nh Ph&ugrave;ng - TP H&agrave; Tĩnh</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <p>T&ocirc;i muốn hỏi đơn vị t&ocirc;i muốn th&agrave;nh lập C&ocirc;ng đo&agrave;n th&igrave; li&ecirc;n hệ với ai v&agrave; thủ tục như thế n&agrave;o?</p>
        </td>
        <td><a href="mailto:tvbinh.hs@gmail.com">tvbinh.hs@gmail.com</a></td>
        <td>Trần Văn B&igrave;nh</td>
        <td>DN</td>
        <td>&nbsp;</td>
        <td>0989256643</td>
        <td>1</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=191" onclick="GoToLink(this);return false;" target="_self">Hhhhh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <p>Hhjjjjjjjjj</p>
        </td>
        <td>&nbsp;</td>
        <td>Hhhh</td>
        <td>DN</td>
        <td>&nbsp;</td>
        <td>0986242487</td>
        <td>1</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=192" onclick="GoToLink(this);return false;" target="_self">C&ocirc;ng ty TNHH TM&amp;DV Ho&agrave;ng Minh Ph&aacute;t<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <p>C&ocirc;ng ty t&ocirc;i th&agrave;nh lập đầu ti&ecirc;n th&aacute;ng 3 năm 2016. Thuộc Thị trấn kỳ anh- Huyện Kỳ Anh cũ. Sau đ&oacute; Huyện t&aacute;ch ra thị x&atilde; v&agrave; Huyện. C&ocirc;ng ty t&ocirc;i vẫn ở địa điểm cũ giờ thuộc thị x&atilde; Kỳ Anh. 2 năm đầu ti&ecirc;n c&ocirc;ng ty t&ocirc;i c&oacute; được miễn thuế thu nhập theo ph&aacute;p luật hay ko? Nay c&ocirc;ng ty t&ocirc;i chuyển v&agrave;o vị trị mới l&agrave; Phường Kỳ Li&ecirc;n - Tx Kỳ Anh. Thuộc khu c&ocirc;ng nghiệp. Vậy c&oacute; được miễn thuế 4 năm theo quy định nh&agrave; nước cho c&aacute;c c&ocirc;ng ty thuộc khu c&ocirc;ng nghiệp hay ko? T&ocirc;i xin cảm ơn</p>
        </td>
        <td><a href="mailto:Cthoangminhphat@gmail.com">Cthoangminhphat@gmail.com</a></td>
        <td>V&otilde; Ho&agrave;ng Trường</td>
        <td>DN</td>
        <td>&nbsp;</td>
        <td>0898456123</td>
        <td>27</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=193" onclick="GoToLink(this);return false;" target="_self">c&ocirc;ng ty tnhh an ph&aacute;t bg<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>tdp li&ecirc;n sơn, p. kỳ li&ecirc;n, tx. kỳ anh, t. h&agrave; tĩnh</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <p>hỏi về hồ sơ thay đổi gi&aacute;m đốc c&ocirc;ng ty v&agrave; cần những giấy tờ g&igrave;?</p>
        </td>
        <td><a href="mailto:nguyenthihoa221290@gmail.com">nguyenthihoa221290@gmail.com</a></td>
        <td>nguyễn thị hoa</td>
        <td>DN</td>
        <td>&nbsp;</td>
        <td>0931380092</td>
        <td>8</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=194" onclick="GoToLink(this);return false;" target="_self">Nguyễn Trọng B&igrave;nh<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Thạch Hưng- Thạch H&agrave;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <p>D&ograve;ng họ t&ocirc;i c&oacute; rất nhiều anh em, ch&uacute; b&aacute;c c&ugrave;ng hội l&agrave;m thơ, văn. T&ocirc;i muốn xuất bản một tập san gồm c&aacute;c t&aacute;c phẩm ti&ecirc;u bi&ecirc;u của c&aacute;c th&agrave;nh vi&ecirc;n trong họ. T&ocirc;i phải l&agrave;m những thủ tục g&igrave;, ở đ&acirc;u</p>
        </td>
        <td><a href="mailto:binh12@gmail.com">binh12@gmail.com</a></td>
        <td>Nguyễn Trọng B&igrave;nh</td>
        <td>DN</td>
        <td>&nbsp;</td>
        <td>0945833756</td>
        <td>7</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=195" onclick="GoToLink(this);return false;" target="_self">Đặng Huy Ba<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Thạch B&igrave;nh</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <p>Xin hỏi H&agrave; Tĩnh c&oacute; mấy đơn vị được cấp ph&eacute;p thi cấp chứng chỉ Tin học mới</p>
        </td>
        <td><a href="mailto:Dhba56@gmail.com">Dhba56@gmail.com</a></td>
        <td>C&ocirc;ng ty Du lịch dịch vụ</td>
        <td>DN</td>
        <td>&nbsp;</td>
        <td>0946379433</td>
        <td>4</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <table cellspacing="0" style="height:100%">
                <tbody>
                <tr>
                    <td><a href="http://www.hatinh.gov.vn/doithoai/Lists/Question_Store/DispForm.aspx?ID=196" onclick="GoToLink(this);return false;" target="_self">L&ecirc; &Acirc;n Nhi<img alt="Use SHIFT+ENTER to open the menu (new window)." src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="height:1px; width:1px" /></a></td>
                    <td><img alt="" src="http://www.hatinh.gov.vn/_layouts/images/blank.gif" style="width:13px" /></td>
                </tr>
                </tbody>
            </table>
        </td>
        <td>Đại N&agrave;i - TP. H&agrave; Tĩnh</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <p>B&ocirc; t&ocirc;i l&agrave; c&aacute;n bộ c&aacute;ch mạng tiền khởi nghia đ&atilde; bị thất lạc giấy tờ từ l&acirc;u. Nay bố t&ocirc;.i đ&atilde; mất gia đ&igrave;nh mới t&igrave;m lại giấy tờ Xn hỏi gia đ&igrave;nh t&ocirc;i c&oacute; được hưởng chế độ hay kh&ocirc;ng</p>
        </td>
        <td><a href="mailto:Nhi455@gmail.com">Nhi455@gmail.com</a></td>
        <td>L&ecirc; &Acirc;n Nhi</td>
        <td>DN</td>
        <td>&nbsp;</td>
        <td>01253889347</td>
        <td>8</td>
    </tr>
    </tbody>
</table>


</body>
</html>

