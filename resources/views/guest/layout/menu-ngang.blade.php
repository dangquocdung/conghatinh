<style>
    .menu-main, .menu-bottom {
        width: 100%;
        position: inherit;
        /*background: #b74841;*/
        /* Old browsers */
        /*background: -moz-linear-gradient(top, #b74841 30%, #bd1208 100%);*/
        /* FF3.6+ */
        /*background: -webkit-gradient(linear, left top, left bottom, color-stop(30%, #b74841), color-stop(100%, #bd1208));*/
        /* Chrome,Safari4+ */
        /*background: -webkit-linear-gradient(top, #b74841 30%, #bd1208 100%);*/
        /* Chrome10+,Safari5.1+ */
        /*background: -o-linear-gradient(top, #b74841 30%, #bd1208 100%);*/
        /* Opera 11.10+ */
        /*background: -ms-linear-gradient(top, #b74841 30%, #bd1208 100%);*/
        /* IE10+ */
        /*background: linear-gradient(to bottom, #b74841 30%, #bd1208 100%);*/
        /* W3C */
        background: linear-gradient(to bottom, #0494da 0, #095b8c 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#b74841', endColorstr='#bd1208',GradientType=0 ); }

    .ddsmoothmenu {
        /*background of menu bar (default state)*/
        width: 100%;
        height: 37px;
        display: block;
        margin: 0 auto;
        position: relative; }

    .ddsmoothmenu ul {
        z-index: 100;
        height: 37px;
        padding: 0px  0 0;
        list-style-type: none;
        }

    /*Top level list items*/
    .ddsmoothmenu ul li {
        position: relative;
        display: inline;
        float: left;
        font-size: 100%;
        padding: 0;
        width: 20%;
        text-align: center;
        background: url(/images/menu/border.png) no-repeat right;
    }

    .ddsmoothmenu ul li:last-child {
        /*background: url(/images/menu/border.png) no-repeat left, url(/images/menu/border.png) no-repeat right; */
        background: none;
    }
        /*background: none }*/


    /*Top level menu link items style*/
    .ddsmoothmenu ul li a {
        display: block;
        background: none;
        /*background of menu items (default state)*/
        color: #fff;
        padding: 0;
        text-decoration: none;
        line-height: 37px;
        text-transform: uppercase;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-weight: 600;
    }

    * html .ddsmoothmenu ul li a {
        /*IE6 hack to get sub menu links to behave correctly*/
        display: inline-block; }

    .ddsmoothmenu ul li a:link, .ddsmoothmenu ul li a:visited {
        color: #fff; }

    .ddsmoothmenu ul li.selected a {
        /*CSS class that's dynamically added to the currently active menu items' LI A element*/
        color: #fae2ad; }

    .ddsmoothmenu ul li a:hover {
        /*background of menu items during onmouseover (hover state)*/
        color: #fae2ad; }

    /*1st sub level menu*/
    .ddsmoothmenu ul li ul {
        position: absolute;
        left: 0;
        display: none;
        /*collapse all sub menus to begin with*/
        visibility: hidden;
        top: 37px;
        width: 100% !important; }

    /*Sub level menu list items (undo style from Top level List Items)*/
    .ddsmoothmenu ul li ul li {
        display: list-item;
        float: none;
        background-color: #e04d58 !important;
        color: #fff;
        padding: 0 !important;
        background-image: none !important;
        font-size: 13px;
        text-align: left !important;
        width: 100%;
        min-width: 190px;
        border-bottom: 1px solid #ccc; }

    .ddsmoothmenu ul li ul li:last-child {
        width:10% !important;
        background: #e04d58;
        border-bottom: 0; }

    /*All subsequent sub menu levels vertical offset after 1st level sub menu */
    .ddsmoothmenu ul li ul li ul {
        top: 0 !important; }

    /* Sub level menu links style */
    .ddsmoothmenu ul li ul li a {
        /*width of sub menus*/
        margin: 0;
        line-height: 20px;
        color: #fff;
        padding: 6px 10px !important; }

    .ddsmoothmenu ul li ul li a:hover {
        background: #a40000;
        border-radius: 0; }

</style>

<div class="menu-main hidden-xs" style="margin-bottom: 5px;">
    <div id="top_nav" class="ddsmoothmenu">
        <ul>
            <li class="">
                <a href="/">
                    <span>Trang chủ</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('chuyen-muc','gioi-thieu') }}">
                    <span>Giới thiệu </span>
                </a>
            </li>
            <li class="">
                <a href="{{ url('http://congbao.hatinh.gov.vn') }}">
                    <span>Văn bản QPPL</span>
                </a>
            </li>
            <li class="">
                <a href="{{ url('http://dichvucong.hatinh.gov.vn') }}">
                    <span>DVC trực tuyến</span>
                </a>
            </li>
            <li class="last">
                <a href="{{ route('chuyen-muc','dau-tu-phat-trien') }}">
                    <span>Đầu tư Phát triển</span>
                </a>
            </li>
        </ul>
    </div>
</div>