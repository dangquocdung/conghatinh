@if (strlen(Setting::get('video_livestream')) > 100 )

    <div class="block4" id="live-stream">

        <div class="embed-responsive embed-responsive-16by9">
            {!! Setting::get('video_livestream') !!}
            {{--<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fhttvonline%2Fvideos%2F363374970780871%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>--}}

        </div>

    </div>

    <script>
        $(document).ready(function () {
            $('#live-stream').scrollToFixed({
                marginTop:41
            });
        });
    </script>



@endif