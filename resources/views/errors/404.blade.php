@extends('guest.layout.main')
@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')

    <div class="container">
        <div class="row nen-trang">
            <div class="container">

                <img src="https://blog.socioboard.com/wp-content/uploads/2016/02/design-error-message-240.png" alt="" width="100%" style="padding-top: 15px;">

                @if($exception->getMessage())
                    <p>{{$exception->getMessage()}}</p>
                @else

                    <div class="tien-ich">
                        <a class="quaylai" href="javascript:goBack();"><i class="fa fa-reply" aria-hidden="true"></i> Quay lại</a>
                    </div>

                @endif

            </div>

        </div>
    </div>
@stop


