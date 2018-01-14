@extends('guest.layout.main')
@section('title')
    Doanh nghiệp hỏi, CQNN trả lời
@endsection

@section('content-main')
    <div class="block3">

        <div class="portlet-header">

            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Doanh nghiệp hỏi, CQNN trả lời</h4>
            </a>

        </div>

        @include('guest.notifications')

        <div class="input-box" style="padding: 5px">
            <div class="dv" style="padding-bottom: 5px">

                <form action="{{ route('update-doanh-nghiep-hoi',$dnh->id) }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">

                        <div class="form-group">
                            <label>Doanh nghiệp </label>
                            <p>{{ $dnh->doanhnghiep }}</p>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ </label>
                            <p>{{ $dnh->diachi }}</p>
                        </div>
                        <div class="form-group">
                            <label>Câu hỏi </label>
                            <p>{!! $dnh->cauhoi !!} </p>
                        </div>

                        <div class="form-group">
                            <label>Cơ quan trả lời </label>
                            <p>{{ $dnh->coquantraloi }}</p>
                        </div>
                        <div class="form-group">
                            <label>Câu trả lời </label>
                            <p>{!! $dnh->cautraloi !!}</p>
                        </div>

                        @role('tbt')

                            <div class="form-group">
                                <label>Cơ quan trả lời  </label>
                                <input type="text" class="form-control" name="coquantraloi" required value="{{ $dnh->coquantraloi }}">
                                @if ($errors->has('coquantraloi'))
                                    <div class="error">{{ $errors->first('coquantraloi') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Câu trả lời </label>
                                <textarea class="form-control textarea" name="cautraloi" placeholder="Nhập câu trả lời ở đây"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{{ $dnh->cautraloi }}</textarea>
                                @if ($errors->has('cautraloi'))
                                    <div class="error">{{ $errors->first('cautraloi') }}</div>
                                @endif
                            </div>

                            <button class="btn btn-success btn-sm pull-right" type="submit"><i class="fa fa-envelope" aria-hidden="true"></i> Gửi</button>
                            <br>
                        @endrole
                    </div>
                </form>
            </div>


        </div>

        @include('guest.layout.tien-ich')

    </div>
@endsection

@section('js')
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
        $(function () {

            $('.textarea').wysihtml5()
        })
    </script>
@stop
