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
                        <div class="breadcrumb">
                            <a class="breadcrumb-item" href="/"><i class="glyphicon glyphicon-home"></i></a>
                            <a class="breadcrumb-item" href="/van-ban">Tất cả Văn Bản</i></a>
                            {{-- <span class="breadcrumb-item active">{{ $lt->name }}</span> --}}
                        </div>

                        <div id="app" style="padding: 5px;">

                            @if ($lt != 'van-ban')

                                <van-ban-viewer source="/api/van-ban-all/{{$lt->id}}" title="Danh sách {{$lt->name}}" />
                            @else
                                <van-ban-viewer source="/api/van-ban-all" title="Tất cả văn bản" />

                            @endif



                        </div>

                    </div>

                </div>

                <div class="lienquan-header">

                    <a href="/loai-tin/{{$tin->loaitin->slug}}">Các tin mới hơn</a>

                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">

                        <div class="tin-lien-quan" style="margin-top: 10px">
                            <ul>


                                @foreach($tinlq_new as $tlq)

                                    <li>
                                        <a href="/chi-tiet/{{ $tlq->slug }}">

                                            <div class="news-block" style="line-height: 25px"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $tlq->name }} <small><em>({{ \Carbon\Carbon::parse($tlq->ngaydang)->format('d/m/Y H:i:s') }})</em></small></div>

                                        </a>
                                    </li>

                                @endforeach

                            </ul>
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




