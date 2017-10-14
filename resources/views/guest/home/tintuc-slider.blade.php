<div class="block3">
  <div id="brand_carousel" class="owl-carousel brand-logo">
    @foreach ($tinnoibat as $ts)
    <div class="item text-center">
        <img src="{{ $ts->avatar }}" alt="{{ $ts->name }}" title="{{ $ts->name }}" />
        <div class="content_news">
          <a href="chi-tiet/{{ $ts->slug }}">{{ $ts->name }}</a>
        </div>
    </div>
    @endforeach

  </div>
</div>
