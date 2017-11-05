@extends('guest.layout.main')
@section('title')
    <title>Doanh nghiệp hỏi, CQNN trả lời</title>
@endsection

@section('content')
    <div class="container">
        <div class="row nen-trang">

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">




                <div class="van-ban">
                    <div class="block3">
                        <div class="breadcrumb">
                            <a class="breadcrumb-item" href="/"><i class="glyphicon glyphicon-home"></i></a>
                            {{--<a class="breadcrumb-item" href="/van-ban">Doan</a>--}}
                             <span class="breadcrumb-item active">Doanh nghiệp hỏi - CQNN trả lời</span>

                                <button class="pull-right btn btn-info btn-sm" id="themCauHoi">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Đặt câu hỏi
                                </button>

                        </div>
                        
                        <div class="input-box" style="padding: 5px">
                            <div class="dv" style="padding-bottom: 5px">

                                <div class="breadcrumb">

                                    <span class="breadcrumb-item active">
                                        <i class="fa fa-question-circle" aria-hidden="true"></i> Đặt câu hỏi
                                    </span>

                                </div>

                                <form action="#" method="post">
                                    {{ csrf_field() }}
                                <div class="box-body">


                            
                                    <div class="form-group">
                                        <label>Hỏi đơn vị </label>
                                        <select name="" id="" class="form-control">
                                            <option value="" selected disabled > Chọn đơn vị</option>
                                            @foreach($coquan as $cq)
                                                <option value="{{ $cq->id }}">{{ $cq->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Doanh nghiệp </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Người đại diện </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Điện thoại </label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email </label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Câu hỏi </label>
                                        <textarea class="form-control" ></textarea>
                                    </div>

                                    <button class="btn btn-success btn-sm pull-right" type="submit"><i class="fa fa-envelope" aria-hidden="true"></i> Gửi câu hỏi</button>
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
                            <doanh-nghiep-hoi source="/api/doanh-nghiep-hoi-all" title="Tất cả câu hỏi" />
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-3 hidden-xs">
                <div class="right-box">
                    @include('guest.doanh-nghiep-hoi.right-box')
                </div>
            </div>

        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{mix('/js/guest.js')}}"></script>
@stop




