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
        <div class="clearfix"></div>
        <div class="lich-cong-tac">
            <ul>
                @foreach($lichct as $lct)
                    <li>
                        <div class="pull-left">
                            <a href="{{ route('lich-cong-tac-show',$lct->id) }}"><i class="fa fa-calendar fa-2x" aria-hidden="true"></i> &nbsp;Lịch công tác UBND tỉnh tháng {{ $lct->thang }}</a>
                        </div>

                        <div class="pull-right">
                            @if (!empty($lct->media_id))
                                <a href="{{ $lct->media->directory.'/'.$lct->media->filename.'.'.$lct->media->extension }}"><i class="fa fa-paperclip" aria-hidden="true"></i></a>
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@section('content-right')
    @include('guest.menu-right.thong-bao')
@stop






