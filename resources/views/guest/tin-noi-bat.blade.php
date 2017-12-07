@extends('guest.layout.main')
@section('title')
  <title>Tin nổi bật</title>
@endsection
@section('header-menu-item')
  active
@endsection
@section('content-main')
    <div class="block3">
        <div class="portlet-header">
            <a href="javascript:void(0);">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> Tin nổi bật</h4>
            </a>
        </div>


        <div class="loai-tin">


            @foreach ($tintuc as $tin)

                <div class="news-main" style="padding: 0">
                    <div class="row" style="padding: 0 15px 10px 15px; border-bottom: 1px solid #eaeaea;">

                        <span class="label label-info pull-right hidden-xs" style="margin-left: 15px;">{{$tin->loaitin->name}}</span>

                        <a class="tin_title_text" href="{{route('chi-tiet-tin',[$tin->loaitin->chuyenmuc->slug,$tin->loaitin->slug,$tin->slug])}}">

                            <img src="{{$tin->avatar}}" alt="{{$tin->name}}" title="{{$tin->name}}" style="display: inline-block; width: 160px; height:auto;" >

                            <div class="tin_title_text">
                                {{$tin->name}} <small><em style="font-weight: normal">({{ \Carbon\Carbon::parse($tin->ngaydang)->format('d-m-Y H:i:s')}})</em></small>
                            </div>

                        </a>

                        <div class="tin_title_abstract" style="display:;">

                            {{ $tin->gioithieu}}
                        </div>

                        <div class="pull-right" style="padding-top: 7px;">
                            @foreach($tin->teptintuc as $ttt)
                                <a href="{{ $ttt->path }}" target="_blank">
                                    <i class="fa fa-file-pdf-o fa-2x" aria-hidden="true" style="color:red"></i>
                                </a>
                            @endforeach
                        </div>
                    </div>



                </div>


            @endforeach
        </div>

        @include('guest.layout.tien-ich')

        <div class="text-center">
            {{ $tintuc->render() }}
        </div>


    </div>
@endsection

