@extends('guest.layout.main')
@section('title')
  <title>Lịch làm việc</title>
@endsection


@section('style')
    <link rel="stylesheet" href="/guest/css/fullcalendar.min.css"/>
@endsection


@section('content')
    <div class="container">
        <div class="row nen-trang">

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">




                <div class="van-ban">
                    <div class="block3">
                        <div class="portlet-header" style="padding-left: 10px">

                            <a href="/">
                                <h4 class="portlet-header-title no-pd-top"><i class="fa fa-university" aria-hidden="true"></i> / </h4>
                            </a>

                            <a href="/chuyen-muc/chi-dao-dieu-hanh">
                                <h4 class="portlet-header-title no-pd-top">Chỉ đạo - điều hành / </h4>
                            </a>

                            <a href="javascript:void(0);">
                                <h4 class="portlet-header-title no-pd-top">Lịch làm việc</h4>
                            </a>


                        </div>

                        <div class="lich" style="padding: 60px 15px">

                            {!! $calendar->calendar() !!}

                        </div>



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


@section('script')
    <script src="/guest/js/moment.min.js"></script>
    <script src="/guest/js/fullcalendar.min.js"></script>
    <script src="/guest/js/vi.js"></script>
    {!! $calendar->script() !!}
@endsection





