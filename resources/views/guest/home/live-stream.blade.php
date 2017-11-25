@if (strlen(Setting::get('video_livestream')) > 100 )

    <div class="block4" id="live-stream" style="border-radius: 5px">

        <div class="embed-responsive embed-responsive-16by9">

            <iframe src="{!! Setting::get('video_livestream') !!}" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>

        </div>

    </div>
@endif