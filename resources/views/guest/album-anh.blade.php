@extends('guest.layout.main')
@section('title')
  {{-- <title>{{ $lt->chuyenmuc->name}} >> {{ $lt->name }}</title> --}}
@endsection

@section('content-main')

    <div class="block3">
        <div class="portlet-header">
            <a href="/loai-tin/album-hinh-anh">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Tất cả Album hình ảnh</h4>
            </a>
        </div>


        <div class="list-image-view">
            <ul style="padding: 0;">
                @foreach($albums as $ab)
                    <li class="col-md-6 col-sm-6 col-xs-6">
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
    </div>

    @if (count($albums) > 1)

        <div class="text-center">

        {{ $albums->render() }}

        </div>

    @endif

@endsection

@section('content-right')
    @include('guest.menu-right.thong-bao')
@stop





