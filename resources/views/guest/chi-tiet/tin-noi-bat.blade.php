<div id="tin-noi-bat-left" class="hidden-xs hidden-sm">

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

</div>


<script>

    $(document).ready(function () {

        $('#tin-noi-bat-left').scrollToFixed({
            marginTop: 10,
            // neither of these fixes the problem:
            // removeOffset, offsets
            limit: function() {
                var limit = $('#tag').offset().top + $('#tag').outerHeight(true) - $('#tin-noi-bat-left').outerHeight(true);
                return limit;
            },
            removeOffsets: true,
            zIndex: 999
        });
    });


</script>