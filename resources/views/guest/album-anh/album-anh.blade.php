<div class="list-image-view">
    <ul style="padding: 0;">

        @if (count($albums) > 1)
            @foreach($albums as $ab)
                <li class="col-md-4 col-sm-4 col-xs-6">
                    <div class="album-item">
                        <a href="{{ Request::path().'/'.$ab->slug }}">

                        <img src="{{ $ab->cover_image }}" alt="{{ $ab->name }}" title="{{ $ab->name }}">

                            <h5>{{ $ab->name }}</h5>
                        </a>
                    </div>
                </li>
            @endforeach
        @else




                @include('guest.album-anh.modal')







            <br>
            <br>

            @foreach($albums->Photos as $img)
                <li class="col-md-4 col-sm-4 col-xs-6">
                    <div class="album-item">
                        <a class="single_image" href="{{ $img->image }}">

                            <img src="{{ $img->image }}">

                            <p style="text-align: center"><em>{{ $img->description }}</em></p>
                        </a>
                    </div>
                </li>
            @endforeach



        @endif
    </ul>
</div>

<script>
    $(document).ready(function() {

        /* This is basic - uses default settings */

        $("a.single_image").fancybox();


    });
</script>