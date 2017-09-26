<div class="col-lg-2 col-md-2 hidden-xs hidden-sm">

      <section class="zone-topview leftfloating" id="topviewleft698000" style="top: 40px; width: 160px;">

          <h4 class="label">Tin nổi bật</h4>

        @foreach ($tinnoibat5 as $tin)

           <article>

              <a href="chi-tiet/{{$tin->slug}}" title="{{$tin->name}}">
                  <img src="{{$tin->avatar}}" alt="{{$tin->name}}">
              </a>

              <h6>
                  <a class="title" href="chi-tiet/{{$tin->slug}}" title="{{$tin->name}}">{{ $tin->name }}</a>
              </h6>
           </article>
        @endforeach

      </section>

</div>

<style>
    .fix-box-zone-topview{
        position: fixed;
        top:20px !important;
    }
</style>


<script>
    $(document).ready(function () {
        $(window).bind("scroll", function(e) {
            var top = $(window).scrollTop();
            if (top > 200) { //Khoảng cách đã đo được
                console.log(top);
                $(".zone-topview").addClass("fix-box-zone-topview");
            } else {
                console.log(top);

                $(".zone-topview").removeClass("fix-box-zone-topview");
            }
        });
    });
</script>
