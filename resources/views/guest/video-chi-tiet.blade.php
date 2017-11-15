@extends('guest.layout.main')
@section('title')
  {{-- <title>{{ $lt->chuyenmuc->name}} >> {{ $lt->name }}</title> --}}
@endsection

@section('content')
  <div class="container">
    <div class="row nen-trang">

            <div class="col-md-12">

                @if (!empty($video))


                <div class="van-ban">
                    <div class="block3">
                        {{--<div class="breadcrumb">--}}
                            {{--<a class="breadcrumb-item" href="/"><i class="glyphicon glyphicon-home"></i></a>--}}
                            {{--<a class="breadcrumb-item" href="/van-ban/van-ban-qppl">Tất cả Video</a>--}}
                            {{--<span class="breadcrumb-item active">Video</span>--}}
                        {{--</div>--}}


                        <div class="portlet-header" style="padding-left: 10px">

                            <a href="/">
                                <h4 class="portlet-header-title no-pd-top"><i class="fa fa-university" aria-hidden="true"></i> / </h4>
                            </a>

                            <a href="javascript:void (0);">
                                <h4 class="portlet-header-title no-pd-top">Tất cả Video</h4>
                            </a>



                        </div>






                            @include('guest.video.video')





                    </div>

                </div>

                @endif

            </div>

        {{--@if (!empty($vd))--}}
            {{----}}
            {{----}}
            {{----}}

        {{--@else--}}

            @include('guest.video.bottom-box')

        {{--@endif--}}



        @include('guest.video.right-box')





    </div>
  </div>
@endsection





