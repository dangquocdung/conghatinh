@if (strlen(Setting::get('video_livestream')) > 50 )

    <div class="block4" id="live-stream" style="border-radius: 5px">

        <div class="embed-responsive embed-responsive-16by9">

            {!! Setting::get('video_livestream') !!}

            {{--<iframe class="embed-responsive-item" src="{{ Setting::get('video_livestream') }}" allowfullscreen></iframe>--}}

            {{--<iframe class="inithd initplay" width="780px" height="466px" src="http://vcplayer.mediacdn.vn/1.1/?_site=vtv&amp;vid=vtv/jt-wmjo-rkiopdqhrxdpw0d6w9mirt/2017/11/23/2311-ky-su-14h-1511422476017-af92f.mp4&amp;location=&amp;_info=62b09912da43495eb57aa4e8d15466f5&amp;mute=false&amp;vtype=8&amp;playType=0&amp;_admParamTvc=0;2;1;2&amp;_listsuggest=http://vtvapi1.cnnd.vn/aj-z816/suggest-videos.htm&amp;postroll=true&amp;replay=true&amp;nonVol=true&amp;volume=0.6&amp;boxVideoID=ifVideo-62b09912da43495eb57aa4e8d15466f5&amp;nopre=true&amp;midroll=0.8;20s" id="ifVideo-62b09912da43495eb57aa4e8d15466f5" frameborder="0" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen="" scrolling="no" playtype="0" data-playstatus="playing"></iframe>--}}

        </div>

    </div>
@endif