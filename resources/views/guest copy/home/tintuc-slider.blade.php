<div class="portlet">
  <div id="brand_carousel" class="owl-carousel brand-logo">
    @foreach ($tinslide as $ts)
    <div class="item text-center">
        <img src="{{ $ts->avatar }}" alt="{{ $ts->name }}" class="img-responsive" />
        <div class="content_news">
          <a href="{{ $ts->slug }}" target="_blank">{{ $ts->name }}</a>
        </div>
    </div>
    @endforeach

  </div>
</div>
