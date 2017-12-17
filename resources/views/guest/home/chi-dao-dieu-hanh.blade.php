@php
    $cm = $chuyenmuc->where('slug','chi-dao-dieu-hanh')->first();


@endphp


<div class="block3">

    <div class="portlet-header">
        <img src="/images/background/lotus.ico">
        <a href="{{ route('chuyen-muc',$cm->slug) }}">
            <h4 class="portlet-header-title no-pd-top">{{ $cm->name }}</h4>
        </a>
    </div>

    <div class="tab-doc">

        <div class="col-xs-1 tieu-de">
            <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left vertical-text">
                @foreach($cm->loaitin->sortBy('thutu')->take(4) as $lt)
                    @if ($lt->thutu == 1)
                        <li class="active">
                            <a href="#{{$lt->slug}}" data-toggle="tab">
                                {{$lt->name}}
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="#{{$lt->slug}}" data-toggle="tab">
                                {{$lt->name}}
                            </a>
                        </li>
                    @endif

                @endforeach
            </ul>
        </div>
        <div class="col-xs-11 noi-dung-chi-dao">
            <!-- Tab panes -->
            <div class="tab-content">
                @foreach($cm->loaitin as $lt)
                    <div class="chidao-dieuhanh tab-pane
                            @if ($lt->thutu == 1)
                            active " id="{{$lt->slug}}">

                        @else
                            " id="{{$lt->slug}}">

                        @endif

                        @if ($lt->thutu == 1 or $lt->thutu == 3)
                                <table id="example1" class="table table-striped table-bordered table-responsive table-sm">
                                <thead>
                                <tr>
                                    <th>
                                        Số/Kí hiệu
                                    </th>
                                    <th>
                                        Ngày ban hành
                                    </th>

                                    <th>
                                        Nơi ban hành
                                    </th>

                                    <th class="col-md-6">
                                        Trích yếu
                                    </th>
                                    <th class="col-md-1">
                                        Đính kèm
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach($lt->vanban->where('daduyet','1')->sortByDesc('id')->take(8) as $vb)
                                        <tr>


                                            <td>
                                                <a href="{{ route('chi-tiet-van-ban',[$lt->slug,$vb->id]) }}" class="news-title bold">
                                                    {{ $vb->kihieuvb }}
                                                </a>
                                            </td>
                                            <td>
                                                {{\Carbon\Carbon::parse($vb->ngaybanhanh)->format('d-m-Y')}}
                                            </td>
                                            <td></td>
                                            <td>
                                                {{$vb->trichyeu}}
                                            </td>
                                            <td>
                                                @foreach($vb->tepvanban as $tvb)
                                                    <a href="{{ $tvb->path }}" target="_blank">
                                                        <img src="/images/pdf-file-512.png" alt="" width="20px" style="float: right" title="{{ $vb->kihieuvb }}">
                                                    </a>
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <ul>

                                @foreach($lt->lichct->sortByDesc('thang') as $lct)
                                    <li>

                                        <a href="{{ route('lich-cong-tac-show',$lct->id) }}"><i class="fa fa-calendar fa-2x" aria-hidden="true"></i> &nbsp;Lịch công tác UBND tỉnh tháng {{ $lct->thang }}</a>

                                    </li>
                                @endforeach
                            </ul>
                            @endif
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>

<div class="hot-item" style="background-color:#ffffff">
    <ul>
        @foreach ($banner->where('vitri','6') as $bn)
            <li class="col-md-3 col-xs-6">
                <div class="block2">
                    <a href="{{$bn->lienket}}" target="_blank">
                        <img src="{{ $bn->banner}}" alt="{{ $bn->name}}" title="{{ $bn->name}}" width="100%">
                    </a>
                </div>
            </li>
        @endforeach

    </ul>
</div>



<div class="clearfix"></div>


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

