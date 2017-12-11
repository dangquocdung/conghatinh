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
            <div style="padding: 0;">

                @include('guest.album-anh.modal')

                <br>
                <br>

                <div class="lienquan-header">

                    <a href="javascript:void(0);">Album nổi bật</a>

                </div>
                <br>
                <br>
                @include('guest.album-anh.lienquan')
            </div>
        </div>



        <script>
            $(document).ready(function() {

                /* This is basic - uses default settings */

                $("a.single_image").fancybox();


            });
        </script>
    </div>

@endsection


@section('content-right')
    @include('guest.menu-right.thong-bao')
@stop





