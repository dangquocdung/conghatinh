
<div id="cssmenu" class="visible-sm visible-md visible-lg">

        <ul>
            <li class="{{ Request::is('/') ? 'active' : ''  }}"><a href="/"><i class="fa fa-university" aria-hidden="true"></i></a></li>
            @foreach ($chuyenmuc as $cm)
                @if ($cm->vitri == 1)

                        <li class="{{ Request::is($cm->path.'/'.$cm->slug) ? 'active' : ''  }}"><a href="javascript:void(0);">{{ $cm->name }}</a>


{{--                            <li class="{{ Request::is($cm->path.'/'.$cm->slug) ? 'active' : ''  }}"><a href="{{ $cm->path}}/{{ $cm->slug}}">{{ $cm->name }}</a>--}}

                        <ul>
                            @if ( $cm->path == 'van-ban')
                                @foreach($cm->loaitin as $lt)
                                    <li><a href="van-ban/{{ $lt->slug}}">{{ $lt->name }}</a></li>
                                @endforeach
                            @else
                                @foreach($cm->loaitin as $lt)
                                    <li><a href="loai-tin/{{ $lt->slug}}">{{ $lt->name }}</a></li>
                                @endforeach
                            @endif

                        </ul>
                    </li>
                @endif
            @endforeach
            <li><a href="http://dichvucong.hatinh.gov.vn/portaldvc/Home/default.aspx" target="_blank">DVC trực tuyến</a></li>
        </ul>

</div>

<script>
    (function($) {
        $.fn.menumaker = function(options) {
            var cssmenu = $(this), settings = $.extend({
                format: "dropdown",
                sticky: false
            }, options);
            return this.each(function() {
                $(this).find(".button").on('click', function(){
                    $(this).toggleClass('menu-opened');
                    var mainmenu = $(this).next('ul');
                    if (mainmenu.hasClass('open')) {
                        mainmenu.slideToggle().removeClass('open');
                    }
                    else {
                        mainmenu.slideToggle().addClass('open');
                        if (settings.format === "dropdown") {
                            mainmenu.find('ul').show();
                        }
                    }
                });
                cssmenu.find('li ul').parent().addClass('has-sub');
                multiTg = function() {
                    cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                    cssmenu.find('.submenu-button').on('click', function() {
                        $(this).toggleClass('submenu-opened');
                        if ($(this).siblings('ul').hasClass('open')) {
                            $(this).siblings('ul').removeClass('open').slideToggle();
                        }
                        else {
                            $(this).siblings('ul').addClass('open').slideToggle();
                        }
                    });
                };
                if (settings.format === 'multitoggle') multiTg();
                else cssmenu.addClass('dropdown');
                if (settings.sticky === true) cssmenu.css('position', 'fixed');
                resizeFix = function() {
                    var mediasize = 700;
                    if ($( window ).width() > mediasize) {
                        cssmenu.find('ul').show();
                    }
                    if ($(window).width() <= mediasize) {
                        cssmenu.find('ul').hide().removeClass('open');
                    }
                };
                resizeFix();
                return $(window).on('resize', resizeFix);
            });
        };
    })(jQuery);

    (function($){
        $(document).ready(function(){
            $("#cssmenu").menumaker({
                format: "multitoggle"
            });
        });
    })(jQuery);

</script>