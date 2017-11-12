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
                        <a href="#">

                            <img src="{{ $img->image }}">

                            <p><em>{{ $img->description }}</em></p>
                        </a>
                    </div>
                </li>
            @endforeach



        @endif
    </ul>
</div>
