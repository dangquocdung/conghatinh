<div class="card">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#tinnoibat" aria-controls="tinnoibat" role="tab" data-toggle="tab"><i class="fa fa-bars"></i>  <span>Nổi bật </span></a>
        </li>

        <li role="presentation">
            <a href="#tindocnhieu" aria-controls="tindocnhieu" role="tab" data-toggle="tab"><i class="fa fa-newspaper-o" aria-hidden="true"></i>  <span>Tin đọc nhiều </span></a>
        </li>

    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="tinoibat">
            <div id="tin-noi-bat">
                <ul>
                    @foreach($chuyenmuc->whereIn('id',['2','16']) as $cm)
                        @foreach ($cm->tintuc->where('daduyet','1')->where('noibat','1')->sortbydesc('id')->take(6) as $tnb)
                            <li>
                                <div class="hot-news-block">

                                    <a href="{{  route('chi-tiet-tin', [$tnb->loaitin->chuyenmuc->slug,$tnb->loaitin->slug,'tin-tuc',$tnb->id,$tnb->slug]) }}" class="news-title">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $tnb->name }}
                                        {{--<small><em style="font-weight: normal">({{ \Carbon\Carbon::parse($tnb->ngaydang)->format('d-m-Y H:i:s')}})</em></small>--}}

                                        @if ($tnb->tinanh == '1')
                                            &nbsp;<i class="fa fa-picture-o" title="Tin ảnh"></i>

                                        @endif

                                        @if ($tnb->tinvideo == '1')
                                            &nbsp;<i class="fa fa-film" title="Tin Video"></i>

                                        @endif


                                    </a>

                                    <img src="{{$tnb->avatar}}" alt="{{ $tnb->name }}" title="{{ $tnb->name }}" style="display: none;">

                                    <div class="item-desc" style="display: none;">{{ $tnb->gioithieu }}</div>

                                </div>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
                <div class="xem-tiep" style="float:right; padding-bottom: 8px;">
                    <a href="/vi/tin-noi-bat" style="text-decoration: none;"><em>Xem tiếp... <i class="fa fa-angle-double-right" aria-hidden="true"></i></em></a>
                </div>
            </div>

        </div>
        {{--<div role="tabpanel" class="tab-pane" id="tinmoi">--}}

        {{--<div id="tin-moi-nhat">--}}
        {{--<ul>--}}
        {{--@foreach($chuyenmuc->whereIn('id',['2','16']) as $cm)--}}
        {{--@foreach ($cm->tintuc->where('daduyet','1')->sortbydesc('id')->take(8) as $tnb)--}}
        {{--<li>--}}
        {{--<div class="hot-news-block">--}}

        {{--<a href="{{  route('chi-tiet-tin', [$tnb->loaitin->chuyenmuc->slug,$tnb->loaitin->slug,'tin-tuc',$tnb->id,$tnb->slug]) }}" class="news-title">--}}
        {{--<i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $tnb->name }}--}}
        {{--<small><em style="font-weight: normal">({{ \Carbon\Carbon::parse($tnb->ngaydang)->format('d-m-Y H:i:s')}})</em></small>--}}
        {{--</a>--}}

        {{--<img src="{{$tnb->avatar}}" alt="{{ $tnb->name }}" title="{{ $tnb->name }}" style="display: none;">--}}

        {{--<div class="item-desc" style="display: none;">{{ $tnb->gioithieu }}</div>--}}

        {{--</div>--}}
        {{--</li>--}}
        {{--@endforeach--}}
        {{--@endforeach--}}
        {{--</ul>--}}
        {{--<div class="xem-tiep" style="float:right; padding-bottom: 8px;">--}}
        {{--<a href="/vi/tin-moi-nhat" style="text-decoration: none;"><em>Xem tiếp... <i class="fa fa-angle-double-right" aria-hidden="true"></i></em></a>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--</div>--}}
    </div>
</div>