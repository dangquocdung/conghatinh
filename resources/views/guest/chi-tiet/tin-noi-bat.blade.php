<div id="tin-noi-bat-left">

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

        var top = $('#tin-noi-bat-left').offset().top - parseFloat($('#tin-noi-bat-left').css('marginTop').replace(/auto/, 0));

        $(window).scroll(function (event) {

            // what the y position of the scroll is
            var y = $(this).scrollTop();

            // whether that's below the form
            if (y >= top) {
                // if so, ad the fixed class
                $('#tin-noi-bat-left').addClass('fixed');
            } else {
                // otherwise remove it
                $('#tin-noi-bat-left').removeClass('fixed');
            }
        });
    });


</script>