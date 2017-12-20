<!-- JS -->

<!-- jquery js -->
<script type="text/javascript" src="guest/js/jquery.min.js"></script>

<!-- bootstrap js -->
<script type="text/javascript" src="guest/js/bootstrap.min.js"></script>

<!-- Slider Js -->
<script type="text/javascript" src="guest/js/revolution-slider.js"></script>

<!-- owl.carousel.min js -->
<script type="text/javascript" src="guest/js/owl.carousel.min.js"></script>

<!-- bxslider js -->
<script type="text/javascript" src="guest/js/jquery.bxslider.js"></script>

<!-- jquery.mobile-menu js -->
<script type="text/javascript" src="guest/js/mobile-menu.js"></script>

<!--jquery-ui.min js -->
<script type="text/javascript" src="guest/js/jquery-ui.js"></script>

<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>

<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="bower_components/bootstrap-datepicker/js/locales/bootstrap-datepicker.vi.js" charset="UTF-8"></script>

<!-- main js -->
{{-- <script type="text/javascript" src="guest/js/main.js"></script> --}}

<!-- countdown js -->
<script type="text/javascript" src="guest/js/countdown.js"></script>

<script type="text/javascript" src="guest/js/jquery-scrolltofixed-min.js"></script>

<script type="text/javascript" src="guest/js/jquery.jscroll.js"></script>

{{--<script type="text/javascript" src="guest/js/jssor.slider.min.js"></script>--}}

<script type="text/javascript" src="guest/js/jquery.fancybox.min.js"></script>

<script src="guest/js/jssor.slider-26.7.0.min.js" type="text/javascript"></script>



<script>
    jssor_slider1_init = function (containerId) {
        //Define an array of slideshow transition code
        var _SlideshowTransitions = [

            {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
            {$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
            {$Duration:1000,x:-0.2,$Delay:20,$Cols:16,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
            {$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
            {$Duration:1200,x:0.2,y:-0.1,$Delay:16,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}},
            {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
            {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}
        ];


        var options = {
            $AutoPlay: 1,
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: _SlideshowTransitions,
                $TransitionsOrder: 1,
                $ShowLink: true
            }
        };
        var jssor_slider1 = new $JssorSlider$(containerId, options);

        var MAX_WIDTH = 1200;

        function ScaleSlider() {
            var containerElement = jssor_slider1.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_slider1.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
    };

</script>

<script type="text/javascript">
    // GoBack
    function goBack() {
        window.history.back();
    };
</script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    })
</script>



{{--gmapsjs--}}

{{--<script src="http://maps.google.com/maps/api/js"></script>--}}

{{--<script type="text/javascript" src="guest/js/gmaps.js"></script>--}}

{{--<script src="{{mix('/js/guest.js')}}"></script>--}}

