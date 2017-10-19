<div class="block3">
    <div class="portlet-header">
        <a href="#" class="portlet-danh-muc-title">
            <h4 class="portlet-header-title no-pd-top">Video</h4>
        </a>
    </div>

    <div id="video_carousel" class="owl-carousel video-logo">
      @foreach ($tinvideo as $tin)
      <div class="item text-center item-video-owl">
        <a href="/chi-tiet/{{$tin->slug}}">
          <img class="news-image" src="{{$tin->avatar}}" style="position: absolute; z-index: -1; width: 100%">
          <img class="news-image" src="/images/tv-19.png" style="width: 125%">

          <span class="icon-play-vid" style="top: 50%;left: 50%;margin-top: -15px;margin-left: -15px;"></span>
          {{-- <span class="icon-play-vid"></span> --}}

        </a>
      </div>
      @endforeach
      
    </div>
</div>
