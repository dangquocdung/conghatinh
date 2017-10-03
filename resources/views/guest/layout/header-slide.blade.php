<!-- #region Jssor Slider Begin -->
<!-- Generator: Jssor Slider Maker -->
<!-- Source: https://www.jssor.com -->
<script src="guest/js/jssor.slider-26.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_options = {
            $AutoPlay: 1,
            $AutoPlaySteps: 4,
            $SlideDuration: 460,
            $SlideWidth: 200,
            $SlideSpacing: 3,
            $Cols: 5,
            $Align: 390,
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 1200;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
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

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>
<style>
    /* jssor slider loading skin spin css */
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }


    .jssorb057 .i {position:absolute;cursor:pointer;}
    .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
    .jssorb057 .i:hover .b {stroke-opacity:.7;}
    .jssorb057 .iav .b {stroke-opacity: 1;}
    .jssorb057 .i.idn {opacity:.3;}

    .jssora073 {display:block;position:absolute;cursor:pointer;}
    .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
    .jssora073:hover {opacity:.8;}
    .jssora073.jssora073dn {opacity:.4;}
    .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
</style>
<div id="jssor_1">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/013.jpg" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:165px;overflow:hidden;">
        <div>
            <img data-u="image" src="img/001.jpg" />
        </div>
        <div>
            <img data-u="image" src="img/002.jpg" />
        </div>
        <div>
            <img data-u="image" src="img/003.jpg" />
        </div>
        <div>
            <img data-u="image" src="img/004.jpg" />
        </div>
        <div>
            <img data-u="image" src="img/005.jpg" />
        </div>
        <div>
            <img data-u="image" src="img/006.jpg" />
        </div>
        <div>
            <img data-u="image" src="img/007.jpg" />
        </div>
        <div>
            <img data-u="image" src="img/008.jpg" />
        </div>
        <div>
            <img data-u="image" src="img/009.jpg" />
        </div>
        <div>
            <img data-u="image" src="img/010.jpg" />
        </div>
        <div>
            <img data-u="image" src="img/011.jpg" />
        </div>
        <div>
            <img data-u="image" src="img/012.jpg" />
        </div>
        <a data-u="any" href="https://www.jssor.com" style="display:none">carousel html</a>
    </div>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
<!-- #endregion Jssor Slider End -->
