@extends('guest.layout.main')
@section('title')
  <title>Ban Biên Tập</title>
@endsection



@section('content')

    <div class="container">
        <div class="row nen-trang">

            <div class="col-md-12">


                <div class="block3">
                    {{--<div class="breadcrumb">--}}
                    {{--<a class="breadcrumb-item" href="#"><i class="fa fa-university" aria-hidden="true"></i></a>--}}
                    {{--<span class="breadcrumb-item active">{{ $cm->name }}</span>--}}
                    {{--</div>--}}

                    <div class="portlet-header">

                        <a href="chuyen-muc">
                            <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Giới thiệu Ban biên tập</h4>
                        </a>

                        {{--<a class="breadcrumb-item" href="#"><i class="fa fa-university" aria-hidden="true"></i></a>--}}
                        {{--<span class="breadcrumb-item active">{{ $cm->name }}</span>--}}

                    </div>

                    <iframe src="QD-710.pdf" frameborder="0"></iframe>

                    

                </div>
            </div>



        </div>
    </div>



@endsection








