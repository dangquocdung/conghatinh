@extends('guest.layout.main')
@section('title')
  Ban Biên Tập
@endsection



@section('content-main')

    <div class="block3">
        {{--<div class="breadcrumb">--}}
        {{--<a class="breadcrumb-item" href="#"><i class="fa fa-university" aria-hidden="true"></i></a>--}}
        {{--<span class="breadcrumb-item active">{{ $cm->name }}</span>--}}
        {{--</div>--}}

        <div class="portlet-header">

            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Giới thiệu Ban biên tập</h4>
            </a>

            {{--<a class="breadcrumb-item" href="#"><i class="fa fa-university" aria-hidden="true"></i></a>--}}
            {{--<span class="breadcrumb-item active">{{ $cm->name }}</span>--}}

        </div>

        <div class="col-md-6">
            <img src="images/QD-710_1.jpg" alt="" width="100%">
        </div>
        <div class="col-md-6">
            <img src="images/QD-710_2.jpg" alt="" width="100%">
        </div>
    </div>

@endsection







