
<div class="container nen-trang">
    <div class="porlet-main-footer">

        @include('guest.layout.menu-bottom')
        {{--<div class="main-footer-header-wrapper">--}}


                {{--<ul class="main-footer-menu" style="margin-left: 0; padding-left: 0">--}}
                    {{--<li class="main-footer-menu-item">--}}
                        {{--<a href="/"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Trang chủ</a>--}}
                    {{--</li>--}}
                    {{--<li class="main-footer-menu-item">--}}
                        {{--<a href="ban-bien-tap">Ban Biên Tập</a>--}}
                    {{--</li>--}}
                    {{--<li class="main-footer-menu-item">--}}
                        {{--<a href="gop-y">Góp ý</a>--}}
                    {{--</li>--}}
                    {{--<li class="main-footer-menu-item">--}}
                        {{--<a href="dang-nhap">Đăng nhập</a>--}}
                    {{--</li>--}}
                    {{--<li class="main-footer-menu-item">--}}
                        {{--<a href="/rss-feed" target="_blank"><i class="fa fa-rss-square" aria-hidden="true"></i>&nbsp;RSS</a>--}}
                    {{--</li>--}}

                {{--</ul>--}}

        {{--</div>--}}


        <div class="main-footer-footer-wrapper">
            <div class="main-footer-footer-bg">
                <div class="container">
                    <div class="main-footer-logo hidden-xs">
                        <img src="./images/logo-footer.png">
                    </div>
                    <div class="main-footer-footer-content">
                        <p class="license">
                            &copy; Cổng thông tin điện tử tỉnh Hà Tĩnh
                        </p>
                        <p class="main-footer-info-text">
                            Giấy phép số 48/GP-BVHTT cấp ngày 18/02/2003 của Bộ Văn hóa Thông tin
                            <br>
                            <strong>Trưởng ban Ban biên tập: Phan Tấn Linh, Giám Đốc Sở Thông tin - Truyền Thông</strong>
                            <br>
                            <em>Địa chỉ: 66 Phan Đình Phùng, TP. Hà Tĩnh. Email: <a style="color:#FFF" href="mailto:portalhatinh@hatinh.gov.vn">portalhatinh@hatinh.gov.vn</a></em>
                            <br>
                            <em>Điện thoại: (+84.239) 3686586, Fax:(+84.239) 3850288</em>
                            <br> Ghi rõ nguồn Cổng Thông tin điện tử tỉnh Hà Tĩnh hoặc <a style="color:#FFF" href="http://www.hatinh.gov.vn/">www.hatinh.gov.vn</a> khi bạn phát hành lại thông tin từ Website này.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="back-top" style="z-index:10000;">
  <a href="#"> <img src="./images/btt.png" alt="Top" width=100%> </a>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    
    // hide #back-top first
    $("#back-top").hide();

      //Initialize Select2 Elements
      $('.select2').select2()

    // fade in #back-top
    $(function () {
      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          $('#back-top').fadeIn();
        } else {
          $('#back-top').fadeOut();
        }
      });

      // scroll body to 0px on click
      $('#back-top').click(function () {
        $('body,html').animate({
          scrollTop: 0
        }, 800);
        return false;
      });
    });


//      $('#banner-main-top').css('margin-top',$('#admin_bar').height());

    $('.menu-main').scrollToFixed();


//      $('#live-stream').scrollToFixed({
//          marginTop: $('.menu-main').height()
//      });

//    $('.menu-bottom').scrollToFixed( {
//
//      bottom: 0,
//
//      limit: $('.menu-bottom').offset().top
//
//    });

    $('[data-toggle="offcanvas-mb"]').click(function () {
      $('.row-offcanvas').toggleClass('active')
    });

    $('div.alert').delay(3000).slideUp(300);
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/weather/0.0.2/weather.min.js"></script>
<script>
    Weather.getCurrent( "Guntersville", function( current ) {
        $( "#current" ).html( "Temperature: " + current.temperature() + "&deg;K or " +
            Weather.kelvinToFahrenheit( current.temperature() ) + "&deg;F or " +
            Weather.kelvinToCelsius( current.temperature() ) + "&deg;C" +
            "<br />Current Conditions: " + current.conditions() );
    });
    Weather.getForecast( "Guntersville", function ( forecast ) {
        $( "#forecast" ).html( "High: " + forecast.high() + "&deg;K or " +
            Weather.kelvinToFahrenheit( forecast.high() ) + "&deg;F or " +
            Weather.kelvinToCelsius( forecast.high() ) + "&deg;C<br />Low: " +
            forecast.low() + "&deg;K or " +
            Weather.kelvinToFahrenheit( forecast.low() ) + "&deg;F or " +
            Weather.kelvinToCelsius( forecast.low() ) + "&deg;C" );
    });
</script>
