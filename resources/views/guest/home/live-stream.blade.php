@if (strlen(Setting::get('video_livestream')) > 10 )

    <div class="block4" id="live-stream" style="border-radius: 5px">

        <div class="embed-responsive embed-responsive-16by9">

            <iframe class="embed-responsive-item" src="{!! Setting::get('video_livestream') !!}"></iframe>

        </div>

    </div>
@endif