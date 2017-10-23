<div class="block3">
  <div class="portlet-header">
        <a href="#" class="portlet-danh-muc-title">
            <h4 class="portlet-header-title no-pd-top">Hình ảnh Hà Tĩnh</h4>
        </a>
    </div>
  <div id="brand_carousel" class="owl-carousel brand-logo">
    @foreach ($tinslide as $ts)
    <div class="item text-center">
        <img src="{{ $ts->avatar }}" alt="{{ $ts->name }}" title="{{ $ts->name }}"/>
        
        <div class="content_news">
          <a href="chi-tiet/{{ $ts->slug }}">{{ $ts->name }}</a>
        </div>
    </div>
    @endforeach

  </div>
</div>
