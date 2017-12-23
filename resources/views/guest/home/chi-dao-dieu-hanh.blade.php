@foreach ($chuyenmuc->where('vitri','1') as $cm)
    @if (count($cm->loaitin) > 0)
        <div class="block3">
            <div class="box box-default">
                <div class="box-header with-border">
                    <img src="/images/background/lotus.ico" width="30px" style="padding: 3px">
                    <h4 class="box-title">{{ $cm->name }}</h4>

                    <div class="box-tools pull-right">
                        <a class="btn btn-box-tool" href="{{ route('chuyen-muc',$cm->slug) }}"><i class="fa  fa-folder-open"></i></a>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="card">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach($cm->loaitin->sortby('thutu')->where('show','1') as $lt)
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
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-content">
                                @foreach($cm->loaitin->sortby('thutu')->where('show','1') as $lt)
                                    <div class="to-chuc tab-pane
                                    @if ($lt->thutu == 1)
                                            active " id="{{$lt->slug}}">

                                        @else
                                            " id="{{$lt->slug}}">

                                        @endif

                                        @if (count($lt->vanban) >0 )

                                                <table class="table table-striped table-bordered table-responsive table-sm">
                                                    <thead>
                                                    <tr>
                                                        <th>TT</th>
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
                                                    @foreach($lt->vanban->where('daduyet','1')->sortByDesc('id')->take(5) as $vb)
                                                        <tr>
                                                            <td>
                                                                {{ $loop->iteration }}

                                                            </td>
                                                            <td>
                                                                <a href="{{ route('chi-tiet-tin',[$cm->slug,$lt->slug,$vb->id]) }}" class="news-title bold">
                                                                    {{ $vb->kihieuvb }}
                                                                </a>
                                                            </td>
                                                            <td>
                                                                {{\Carbon\Carbon::parse($vb->ngaybanhanh)->format('d-m-Y')}}
                                                            </td>
                                                            <td>
                                                                {{$vb->nguoiki->cqbh->name}}
                                                            </td>
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
                                            @elseif (count($lt->lichct) > 0)

                                                <table class="table table-striped table-bordered table-responsive table-sm">
                                                    <thead>
                                                        <th>TT</th>
                                                        <th>Chương trình công tác </th>
                                                    <th>Ngày đăng </th>
                                                        <th>Tệp đính kèm</th>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($lt->lichct->sortByDesc('thang')->take(5) as $lct)
                                                        <tr>
                                                            <td>
                                                                {{ $loop->iteration }}

                                                            </td>
                                                            <td>
                                                                <a href="{{ route('chi-tiet-tin',[$cm->slug,$lt->slug,$lct->id]) }}" style="text-decoration: none"><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;{{ $lct->name }}&nbsp;{{ $lct->thang }}</a>
                                                            </td>
                                                            <td>
                                                                {{\Carbon\Carbon::parse($lct->created_at)->format('d-m-Y')}}
                                                            </td>
                                                            <td>
                                                                @if (!empty($lct->media_id))
                                                                    <a href="{{ $lct->media->directory.'/'.$lct->media->filename.'.'.$lct->media->extension }}"><i class="fa fa-file-word-o" aria-hidden="true"></i></a>
                                                                @endif
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                        @endif
                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                            <div class="pull-right">

                                                    <a href="{{ route('loai-tin',[$cm->slug, $lt->slug]) }}"><em>Xem tiếp...</em></a>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>

    <div class="clear-fix"></div>
    @endif
@endforeach

<div class="hot-item" style="background-color:#ffffff">
    <ul>
        @foreach ($banner->where('vitri','6') as $bn)
            <li class="col-md-3 col-sm-3 col-xs-6">
                <div class="block2">
                    <a href="{{$bn->lienket}}" target="_blank">
                        <img src="{{ $bn->banner}}" alt="{{ $bn->name}}" title="{{ $bn->name}}" width="100%">
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
</div>

@foreach ($chuyenmuc->where('vitri','2') as $cm)
    @if (count($cm->loaitin) > 0)
        <div class="block3">
            <div class="box box-default">
                <div class="box-header with-border">
                    <img src="/images/background/lotus.ico" width="30px" style="padding: 3px">
                    <h4 class="box-title">{{ $cm->name }}</h4>

                    <div class="box-tools pull-right">
                        <a class="btn btn-box-tool" href="{{ route('chuyen-muc',$cm->slug) }}"><i class="fa  fa-folder-open"></i></a>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="card">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach($cm->loaitin->sortby('thutu')->where('show','1') as $lt)
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
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-content">
                                @foreach($cm->loaitin->sortby('thutu')->where('show','1') as $lt)
                                    <div class="to-chuc tab-pane
                                    @if ($lt->thutu == 1)
                                        active " id="{{$lt->slug}}">

                                    @else
                                        " id="{{$lt->slug}}">

                                    @endif

                                    @if (count($lt->tintuc) > 0)

                                        @php

                                            $tins = $lt->tintuc->where('daduyet','1')->sortByDesc('id')->take(5);

                                            $tin1= $tins->shift();

                                        @endphp

                                        @if ($tin1)
                                            <div class="col-md-12" style="float:left">

                                                <div class="col-md-7 col-sm-7 col-xs-12" style="margin-bottom: 15px">
                                                    <div class="row">
                                                        <div class="news-main" style="margin-left: -15px">

                                                            <a class="tin_title_text" href="{{  route('chi-tiet-tin', [$tin1->loaitin->chuyenmuc->slug,$tin1->loaitin->slug,$tin1->slug]) }}">
                                                                <div class="tin_title_text">
                                                                    {{ $tin1->name }} &nbsp;<small><em style="font-weight: normal">({{ \Carbon\Carbon::parse($tin1->ngaydang)->format('d-m-Y H:i:s')}})</em></small>
                                                                </div>

                                                                <img style="display: inline-block; width: 160px; height:auto;" src="{{ $tin1->avatar }}" alt="" title="">
                                                            </a>
                                                            <div class="thumb">

                                                            </div>

                                                            <div class="tin_title_abstract" style="display:;">
                                                                {{ $tin1->gioithieu }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                @if (count($tins)>0)

                                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                                        <div class="row">

                                                            <div class="news-five">
                                                                <ul class="news-block">
                                                                    @foreach($tins as $tin)
                                                                        <li>
                                                                            <a href="{{  route('chi-tiet-tin', [$tin->loaitin->chuyenmuc->slug,$tin->loaitin->slug,$tin->slug]) }}" class="news-title">
                                                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $tin->name }} <small><em>({{ \Carbon\Carbon::parse($tin->ngaydang)->format('d-m-Y H:i:s')}})</em></small>
                                                                            </a>

                                                                            <img src="{{$tin->avatar}}" alt="{{ $tin->name }}" style="display:none;">

                                                                            <div class="gioithieu" style="display:none;">{{$tin->gioithieu}}</div>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endif

                                            </div>
                                    @endif

                                    @endif

                                    <!-- /.box-body -->
                                        <div class="box-footer">
                                            <div class="pull-right">

                                                <a href="{{ route('loai-tin',[$cm->slug, $lt->slug]) }}"><em>Xem tiếp...</em></a>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>

        <div class="clear-fix"></div>
    @endif
@endforeach