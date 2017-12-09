@extends('guest.layout.main')
@section('title')
    <title>Lịch công tác tháng {{$lct->thang}}</title>
@endsection

@section('content-main')
    <div class="block3">

        <div class="portlet-header">

            <a href="/loai-tin/lich-cong-tac">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Lịch công tác</h4>
            </a>



        </div>


        <div class="dv-body table-responsive" style="padding: 10px">

            {!! $lct->noidung !!}


        </div>

        <script>
            $(document).ready(function () {

                $('table').addClass('table table-bordered table-striped table-hover');
                $('table').removeAttr('style');

            })
        </script>

        @include('guest.layout.tien-ich')

    </div>
@stop

@section('content-right')
    @include('guest.menu-right.thong-bao')
@stop







