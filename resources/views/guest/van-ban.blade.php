@extends('guest.layout.main')
@section('title')
  {{-- <title>{{ $lt->chuyenmuc->name}} >> {{ $lt->name }}</title> --}}
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

                            <a href="/van-ban/van-ban-qppl">
                                <h4 class="portlet-header-title no-pd-top"> Tất cả Văn Bản </h4>
                            </a>


                            @if ($lt != 'van-ban-qppl')

                                <a href="javascript:void(0);">
                                    <h4 class="portlet-header-title no-pd-top">/ {{ $lt->name }}</h4>
                                </a>

                            @endif

                        </div>


                        <div id="app" style="padding: 5px;">

                            @if ($lt != 'van-ban-qppl')

                                <van-ban-viewer source="/api/van-ban-all/{{$lt->id}}" title="Danh sách {{$lt->name}}" />
                            @else
                                <van-ban-viewer source="/api/van-ban-all" title="Tất cả văn bản" />

                            @endif



                        </div>

                    </div>

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




