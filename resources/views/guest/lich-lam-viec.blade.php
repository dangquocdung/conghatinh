@extends('guest.layout.main')
@section('title')
  <title>Lịch làm việc</title>
@endsection


@section('style')
    <link rel="stylesheet" href="/guest/css/fullcalendar.min.css"/>
@endsection


@section('content-main')
    <div class="block3">
        <div class="portlet-header">

            <a href="/chuyen-muc/chi-dao-dieu-hanh">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Chỉ đạo - điều hành / </h4>
            </a>

            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top">Lịch công tác</h4>
            </a>


        </div>

        <div class="lich" style="padding: 60px 15px">

            <style>
                .fc-day-grid-event .fc-content {

                    white-space: normal !important;


                }
            </style>

            {!! $calendar->calendar() !!}

        </div>



    </div>
@endsection

@section('content-right')
    @include('guest.menu-right.chuyen-trang')
@stop

@section('script')
    <script src="/guest/js/moment.min.js"></script>
    <script src="/guest/js/fullcalendar.min.js"></script>
    <script src="/guest/js/vi.js"></script>
    {!! $calendar->script() !!}
@endsection





