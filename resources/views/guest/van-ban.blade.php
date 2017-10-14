@extends('guest.layout.main')
@section('title')
  <title>{{ $vb->name }}</title>
@endsection

@section('content')
  <div class="container">
    <div class="row nen-trang">

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">




                <div class="van-ban">

                    @include('guest.van-ban.danh-sach')

                </div>
            </div>

            <div class="col-md-3 hidden-xs">
                @include('guest.van-ban.right-box')
            </div>

    </div>
  </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{mix('/js/guest.js')}}"></script>

    @stop




