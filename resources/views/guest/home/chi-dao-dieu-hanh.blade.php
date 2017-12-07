@php
    $cm = $chuyenmuc->where('slug','chi-dao-dieu-hanh')->first();


@endphp


<div class="block3" id="{{ $cm->slug }}">

    <div class="portlet-header">
        <img src="/images/background/lotus.ico">
        <a href="{{ route('chuyen-muc',$cm->slug) }}">
            <h4 class="portlet-header-title no-pd-top">{{ $cm->name }}</h4>
        </a>
    </div>

    @php $i=0 @endphp

    @foreach ($cm->loaitin->sortby('thutu') as $lt)

        @php
            $tins = $lt->tintuc->where('daduyet','1')->sortByDesc('id')->take(4);
        @endphp

        <div class="col-md-12 col-sm-12 col-xs-12" style="float:left">
            <div class="row">
                <div class="breadcrumb" style="margin: 3px">
                    <span class="breadcrumb-item active">
                      <a href="{{ route('loai-tin',[$cm->slug,$lt->slug]) }}" style="text-decoration: none;">
                        <span class="glyphicon glyphicon-share-alt"></span>
                        <strong>{{ $lt->name }}</strong>
                      </a>
                    </span>
                    <span class="pull-right">
                      <a href="{{ route('loai-tin',[$cm->slug,$lt->slug]) }}" style="text-decoration: none;"><em><small><i class="fa fa-angle-double-right" aria-hidden="true"></i>Xem tiếp...</small></em></a>
                    </span>
                </div>

                @if (count($tins)>0)
                    <div class="col-md-12">
                        <ul class="news-block">
                            @foreach($tins as $tin)
                                <li>
                                    <i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #ce663f"></i>

                                    <a href="{{  route('chi-tiet-tin', [$tin->loaitin->chuyenmuc->slug,$tin->loaitin->slug,$tin->slug]) }}" class="news-title">
                                        {{ $tin->name }} <small><em>({{ \Carbon\Carbon::parse($tin->ngaydang)->format('d-m-Y H:i:s')}})</em></small>
                                    </a>

                                    <img src="{{$tin->avatar}}" alt="{{ $tin->name }}" style="display:none;">

                                    <div class="gioithieu" style="display:none;">{{$tin->gioithieu}}</div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

        </div>


    @endforeach

</div>


@if ($cm->banner_id != null)

    <div class="block2">

        @foreach($banner as $bn)
            @if ($bn->id == $cm->banner_id)
                <a href="{{$bn->lienket}}">
                    <img src="{{$bn->banner}}" alt="{{$bn->name}}" width="100%">
                </a>
            @endif
        @endforeach
    </div>
@endif


<script>
    $(document).ready(function () {

        var isMobile = $(window).width() < 768;
        console.log("isMobile");
        console.log(isMobile);

        if(!isMobile) {



            $('#{{ $cm->slug }} .news-block').hover(function () {

                $('#{{ $cm->slug }} .cms-container-tintuc a').attr({href: $(this).find('a').attr('href')});

                $('#{{ $cm->slug }} .cms-container-tintuc a .tin_title_text').html($(this).find('a').html());

                $('#{{ $cm->slug }} .cms-container-tintuc a img').attr({src: $(this).find('img').attr('src')});

                $('#{{ $cm->slug }} .cms-container-tintuc tin_title_abstract').html($(this).find('.gioithieu').html());

            })


        }




    })
</script>

