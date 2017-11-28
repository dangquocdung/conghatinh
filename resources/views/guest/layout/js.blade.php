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

<!-- main js -->
{{-- <script type="text/javascript" src="guest/js/main.js"></script> --}}

<!-- countdown js -->
<script type="text/javascript" src="guest/js/countdown.js"></script>

<script type="text/javascript" src="guest/js/jquery-scrolltofixed-min.js"></script>

<script type="text/javascript" src="guest/js/jquery.jscroll.js"></script>

<script type="text/javascript" src="guest/js/jssor.slider.min.js"></script>

<script type="text/javascript" src="guest/js/jquery.fancybox.min.js"></script>



<script>
    jssor_slider1_init = function (containerId) {
        //Define an array of slideshow transition code
        var _SlideshowTransitions = [

            {$Duration:1200,y:-1,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Top:[0.5,0.5],$Clip:[0,0.5]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$ScaleClip:0.5},
            {$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:513,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}},
            {$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}},
            {$Duration:1500,x:-1,y:0.5,$Delay:100,$Cols:10,$Rows:5,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:{$Left:$Jease$.$Linear,$Top:$Jease$.$OutJump},$Round:{$Top:1.5}},
            {$Duration:1500,x:-1,y:-0.5,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Assembly:260,$Easing:{$Left:$Jease$.$Swing,$Top:$Jease$.$InJump},$Round:{$Top:1.5}}

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

        var MAX_WIDTH = 980;

        function ScaleSlider() {
            var containerElement = jssor_slider1.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
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

    jssor_slider2_init = function (containerId) {
        //Define an array of slideshow transition code
        var _SlideshowTransitions = [

            {$Duration:1200,y:-1,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Top:[0.5,0.5],$Clip:[0,0.5]},$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$ScaleClip:0.5}

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
        var jssor_slider2 = new $JssorSlider$(containerId, options);

        function ScaleSlider() {
            var bodyWidth = document.body.clientWidth;
            if (bodyWidth)
                jssor_slider2.$ScaleWidth(Math.min(bodyWidth, 1920));
            else
                window.setTimeout(ScaleSlider, 30);
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
    }
</script>



{{--gmapsjs--}}

{{--<script src="http://maps.google.com/maps/api/js"></script>--}}

{{--<script type="text/javascript" src="guest/js/gmaps.js"></script>--}}

{{--<script src="{{mix('/js/guest.js')}}"></script>--}}

