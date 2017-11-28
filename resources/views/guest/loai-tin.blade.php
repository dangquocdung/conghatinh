@extends('guest.layout.main')
@section('title')
  <title>{{ $lt->name }}</title>
@endsection
@section('header-menu-item')
  active
@endsection
@section('content-main')
    <div class="block3">
                    {{--<div class="breadcrumb">--}}
                        {{--<a class="breadcrumb-item" href="#"><i class="fa fa-university" aria-hidden="true"></i></a>--}}
                        {{--<a class="breadcrumb-item" href="chuyen-muc/{{ $lt->chuyenmuc->slug }}">{{ $lt->chuyenmuc->name }}</a>--}}
                        {{--<span class="breadcrumb-item active">{{ $lt->name }}</span>--}}
                    {{--</div>--}}

                    <div class="portlet-header">


                        <a href="chuyen-muc/{{ $lt->chuyenmuc->slug }}">
                            <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> {{ $lt->chuyenmuc->name }} / </h4>
                        </a>

                        <a href="javascript:void(0);">
                            <h4 class="portlet-header-title no-pd-top">{{ $lt->name }}</h4>
                        </a>


                    </div>

                     <div class="loai-tin">
                        @foreach ($tintuc as $tin)

                            <div class="news-main" style="padding: 0;">
                                <div class="row" style="padding: 0 15px 10px 15px; border-bottom: 1px solid #eaeaea;">

                                  <span class="label label-info pull-right hidden-xs" style="margin-left: 15px">{{$tin->loaitin->name}}</span>
                                  <a class="tin_title_text" href="/chi-tiet/{{$tin->slug}}">

                                      @if (strlen(trim($tin->avatar)) > 20)

                                        <img src="{{$tin->avatar}}" alt="{{$tin->name}}" title="{{$tin->name}}" style="display: inline-block; width: 160px; height:auto;" >

                                      @else

                                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWpS3UrDgKd7jcT3BkbPkU4d0mzV7c6PRQ5JmNQIv2Mu2eQ_UpMA" alt="{{$tin->name}}" title="{{$tin->name}}" style="display: inline-block; width: 80px; height:auto;" >


                                      @endif

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

@section('content-right')
    @include('guest.menu-right.loai-tin')
@stop


