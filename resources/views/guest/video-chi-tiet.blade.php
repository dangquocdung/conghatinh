@extends('guest.layout.main')
@section('title')
  {{-- <title>{{ $lt->chuyenmuc->name}} >> {{ $lt->name }}</title> --}}
@endsection

@section('content')
  <div class="container">
    <div class="row nen-trang">

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">




                <div class="van-ban">
                    <div class="block3">
                        <div class="breadcrumb">
                            <a class="breadcrumb-item" href="/"><i class="glyphicon glyphicon-home"></i></a>
                            <a class="breadcrumb-item" href="/van-ban/van-ban-qppl">Tất cả Video</a>
                            <span class="breadcrumb-item active">Video</span>
                        </div>

                        @include('guest.video.video')


                    </div>

                </div>

            </div>
        <div class="col-md-3 hidden-xs">
            <div class="right-box">
                @include('guest.chi-tiet.right-box')
            </div>
        </div>



    </div>
  </div>
@endsection





