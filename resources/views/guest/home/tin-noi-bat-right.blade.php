<div class="btn-pref-tnb btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
    <div class="btn-group" role="group">
        <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab">
            <i class="fa fa-bars"></i>  <span class="hidden-xs">Nổi bật </span>
        </button>
    </div>
    <div class="btn-group" role="group">
        <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab">
            <i class="fa fa-users"></i>  <span class="hidden-xs">Đọc nhiều </span>
        </button>
    </div>
</div>

<div>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
            <div id="tin-noi-bat">
                <ul>
                    {{--@foreach($chuyenmuc->whereIn('id',['2','5']) as $cm)--}}
{{--                        @foreach ($cm->tintuc->where('daduyet','1')->where('noibat','1')->sortbydesc('id')->take(7) as $tnb)--}}
                        @foreach($tinnoibat as $tnb)
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
                    {{--@endforeach--}}
                </ul>
                <div class="xem-tiep" style="float:right; padding-bottom: 8px;">
                    <a href="/vi/tin-noi-bat" style="text-decoration: none;"><em>Xem tiếp... <i class="fa fa-angle-double-right" aria-hidden="true"></i></em></a>
                </div>
            </div>
        </div>
        <div class="tab-pane fade in" id="tab2">
            <div id="tin-noi-bat">
                <ul>
                    @foreach($chuyenmuc->where('id','2') as $cm)
                        @foreach ($cm->tintuc->where('daduyet','1')->sortbydesc('counter')->take(5) as $tnb)
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
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".btn-pref-tnb .btn").click(function () {

            $(".btn-pref-tnb .btn").removeClass("btn-primary").addClass("btn-default");

            // $(".tab").addClass("active"); // instead of this do the below

            $(this).removeClass("btn-default").addClass("btn-primary");

        });
    });
</script>