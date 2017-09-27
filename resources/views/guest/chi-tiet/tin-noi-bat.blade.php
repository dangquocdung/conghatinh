
<section class="zone-topview leftfloating" id="tin-noi-bat-left" style="top: 40px; width: 160px; margin-top: 5px">

  <h4 class="label">Tin nổi bật</h4>

@foreach ($tinnoibat4 as $tin)

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




<script>
    $(document).ready(function() {
        $('#tin-noi-bat-left').scrollToFixed();
    });

</script>