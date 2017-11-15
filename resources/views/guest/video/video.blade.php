<div class="clearfix"></div>

<div class="tieu-de-video" style="text-align: center; text-transform: uppercase">
    <h3>
        {{ $video->loaivideo->name }} ngày {{ \Carbon\Carbon::parse($video->ngayphat)->format('d-m-Y') }}
    </h3>
</div>

<div class="video-player" style="padding: 30px">
    <div class="embed-responsive embed-responsive-16by9">

        {!! $video->src !!}

    </div>
</div>
<br>
<br>




