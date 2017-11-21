@extends('guest.layout.main')
@section('title')
    <title>Doanh nghiệp hỏi, CQNN trả lời</title>
@endsection

@section('content-main')
    <div class="block3">

        <div class="portlet-header">


            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Danh sách người phát ngôn</h4>
            </a>

            @role('tbt')

                <button class="pull-right btn btn-info btn-sm" id="themCauHoi">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm
                </button>

            @endrole


        </div>

        @include('guest.notifications')

        <div class="input-box" style="padding: 5px; display: none">
            <div class="dv" style="padding-bottom: 5px">

                <div class="breadcrumb">

                    <span class="breadcrumb-item active">
                        <i class="fa fa-question-circle" aria-hidden="true"></i> Thêm Người phát ngôn
                    </span>

                </div>


                <form action="{{ route('post-nguoi-phat-ngon') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">



                        <div class="form-group">
                            <label>Cơ quan, đơn vị </label>
                            <select name="coquan_id" id="" class="form-control">
                                <option value="" selected disabled > Chọn đơn vị</option>
                                @foreach($coquan as $cq)
                                    <option value="{{ $cq->id }}">{{ $cq->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Họ và Tên </label>
                            <input type="text" class="form-control" name="name">
                            @if ($errors->has('name'))
                                <div class="error">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Chức danh </label>
                            <input type="text" class="form-control" name="chucdanh">
                            @if ($errors->has('chucdanh'))
                                <div class="error">{{ $errors->first('chucdanh') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>ĐT Cố định </label>
                            <input type="text" class="form-control" name="codinh">
                        </div>
                        <div class="form-group">
                            <label>ĐT Di động </label>
                            <input type="number" class="form-control" name="didong">
                        </div>
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" class="form-control" name="email">
                            @if ($errors->has('email'))
                                <div class="error">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                        <button class="btn btn-success btn-sm pull-right" type="submit"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm</button>
                        <br>
                    </div>
                </form>
            </div>


        </div>

        <script>
            $("#themCauHoi").click(function () {

                if ( $(".input-box").css("display") == "block" ){

                    $(".input-box").css("display","none");

                }else{
                    $(".input-box").css("display","block");
                }



            })
        </script>


        <div id="app" style="padding: 5px;">
            <nguoi-phat-ngon source="/api/nguoi-phat-ngon" title="Danh sách" />
        </div>

    </div>
@endsection


@section('content-right')
    @include('guest.doanh-nghiep-hoi.right-box')
@stop

@section('js')
    <script type="text/javascript" src="{{mix('/js/guest.js')}}"></script>
@stop




