@extends('guest.layout.main')
@section('title')
  <title>{{ $cm->name }}</title>
@endsection
@section('header-menu-item')
  active
@endsection
@section('content-main')
    <div class="block3">
        <div class="portlet-header">
            <img src="/images/background/lotus.ico" alt="">
            <a href="chuyen-muc/{{ $cm->slug }}">
                <h4 class="portlet-header-title no-pd-top">{{ $cm->name }}</h4>
            </a>
        </div>

        <div class="loai-tin">
            @foreach ($cm->loaitin as $lt)

                @if (count($lt->tintuc) > 0)
                    <div class="lienquan-header" style="margin-bottom: 10px">
                        <a href="{{ route('loai-tin',[$cm->slug, $lt->slug])  }}">{{ $lt->name }}</a>
                    </div>

                    <br>

                    @foreach ($lt->tintuc->where('daduyet','1')->sortbydesc('id')->take(5) as $tin)

                        <div class="news-main" style="padding: 0">
                            <div class="row" style="padding: 0 15px 10px 15px; border-bottom: 1px solid #eaeaea;">

                                  <span class="label label-info pull-right hidden-xs" style="margin-left: 15px;">{{$tin->loaitin->name}}</span>

                                  <a class="tin_title_text" href="{{route('chi-tiet-tin',[$tin->loaitin->chuyenmuc->slug,$tin->loaitin->slug,$tin->slug])}}">

                                      {{--@if ($cm->slug <> 'doanh-nghiep-du-an')--}}

                                          {{--<img src="{{$tin->avatar}}" alt="{{$tin->name}}" title="{{$tin->name}}" style="display: inline-block; width: 160px; height:auto;" >--}}

                                      {{--@else--}}

                                          {{--<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWpS3UrDgKd7jcT3BkbPkU4d0mzV7c6PRQ5JmNQIv2Mu2eQ_UpMA" alt="{{$tin->name}}" title="{{$tin->name}}" style="display: inline-block; width: 80px; height:auto;" >--}}


                                      {{--@endif--}}

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
                    <div class="clearfix"></div>
                @endif
            @endforeach
        </div>

        @include('guest.layout.tien-ich')

        {{--<div class="text-center">--}}
            {{--{{ $tintuc->render() }}--}}
        {{--</div>--}}

    </div>
@endsection

@section('content-right')
    @include('guest.menu-right.thong-bao')
@stop

