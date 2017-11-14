<div class="list-image-view">
    <ul style="padding: 0;">

            @foreach($albums as $ab)
                <li class="col-md-3 col-sm-3 col-xs-6">
                    <div class="album-item">
                        <a href="{{ Request::path().'/'.$ab->slug }}">

                        <img src="{{ $ab->cover_image }}" alt="{{ $ab->name }}" title="{{ $ab->name }}">

                            <h5>{{ $ab->name }}</h5>
                        </a>
                    </div>
                </li>
            @endforeach


    </ul>
</div>



<script>
    $(document).ready(function() {

        /* This is basic - uses default settings */

        $("a.single_image").fancybox();


    });
</script>