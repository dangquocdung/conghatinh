@foreach ($chuyenmuc->where('show','1') as $cm)
    @if (count($cm->loaitin) > 0)
        <div class="block3">
            <div class="box box-default">
                <div class="box-header with-border">
                    <img src="/images/background/lotus.ico" width="30px" style="padding: 3px">
                    <h4 class="box-title" title="{{$cm->ghichu}}">{{ $cm->name }}</h4>

                    <div class="box-tools pull-right">
                        <a class="btn btn-box-tool" href="{{ route('chuyen-muc',$cm->slug) }}"><i class="fa  fa-folder-open"></i></a>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        {{--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>--}}
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="card">
                        {{--<ul class="nav nav-tabs" role="tablist" style="border-bottom: none">--}}
                            {{--@foreach($cm->loaitin->sortby('thutu')->where('show','1') as $lt)--}}
                                {{--@if ($lt->thutu == 1)--}}
                                    {{--<li class="active">--}}
                                        {{--<a href="#{{$lt->slug}}" data-toggle="tab" title="{{ $lt->ghichu }}">--}}
                                            {{--{{$lt->name}}--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--@else--}}
                                    {{--<li>--}}
                                        {{--<a href="#{{$lt->slug}}" data-toggle="tab" title="{{ $lt->ghichu }}">--}}
                                            {{--{{$lt->name}}--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--@endif--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}

                        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                            @foreach($cm->loaitin->sortby('thutu')->where('show','1') as $lt)
                                <div class="btn-group" role="group">
                                    <button type="button" id="{{ $lt->slug }}" class="btn @if ($lt->thutu == '1') btn-primary @else btn-default @endif" href="#{{ $lt->slug }}" data-toggle="tab">
                                        <i class="fa {{ $lt->icon }}"></i>  <span class="hidden-xs">{{ $lt->name }} </span>
                                    </button>
                                </div>
                            @endforeach

                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            @foreach($cm->loaitin->sortby('thutu')->where('show','1') as $lt)
                                <div class="tab-pane fade in @if($lt->thutu == '1') active @endif" id="{{ $lt->slug }}">

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

                                                            <a class="tin_title_text" href="{{  route('chi-tiet-tin', [$tin1->loaitin->chuyenmuc->slug,$tin1->loaitin->slug,'tin-tuc',$tin1->id,$tin1->slug]) }}">
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
                                                                            <a href="{{  route('chi-tiet-tin', [$tin->loaitin->chuyenmuc->slug,$tin->loaitin->slug,'tin-tuc',$tin->id,$tin->slug]) }}" class="news-title">
                                                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $tin->name }}
                                                                                {{--<small><em>({{ \Carbon\Carbon::parse($tin->ngaydang)->format('d-m-Y H:i:s')}})</em></small>--}}
                                                                                @if ($tin->tinanh == '1')
                                                                                    &nbsp;<i class="fa fa-picture-o" title="Tin ảnh "></i>

                                                                                @endif
                                                                                @if ($tin->tinvideo == '1')
                                                                                    &nbsp;<i class="fa fa-film" title="Tin Video "></i>

                                                                                @endif
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
                                    @elseif (count($lt->vanban) >0 )

                                        <table class="table table-striped table-bordered table-responsive table-sm" style="margin-bottom: 5px">
                                            <thead>
                                            <tr>
                                                <th>TT</th>
                                                <th>
                                                    Số/Kí hiệu
                                                </th>
                                                <th>
                                                    Ngày ban hành
                                                </th>

                                                <th class="col-md-6">
                                                    Trích yếu
                                                </th>
                                                <th class="col-md-1">
                                                    <i class="fa fa-paperclip" aria-hidden="true">
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($lt->vanban->where('daduyet','1')->sortByDesc('id')->take(3) as $vb)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}

                                                    </td>
                                                    <td>
                                                        <a href="{{ route('chi-tiet-tin',[$cm->slug,$lt->slug,'van-ban',$vb->id,$vb->slug]) }}" class="news-title bold">
                                                            {{ $vb->kihieuvb }}
                                                        </a>
                                                    </td>
                                                    <td style="text-align: center">
                                                        {{\Carbon\Carbon::parse($vb->ngaybanhanh)->format('d-m-Y')}}
                                                    </td>
                                                    <td>
                                                        {{$vb->trichyeu}}
                                                    </td>
                                                    <td style="text-align: center">
                                                        @foreach($vb->tepvanban as $tvb)
                                                            <a href="{{ $tvb->path }}" target="_blank">
                                                                <i class="fa fa-paperclip" title="{{ $vb->kihieuvb }}"></i>
                                                                {{--<img src="/images/pdf-file-512.png" alt="" width="20px" style="float: right" title="{{ $vb->kihieuvb }}">--}}
                                                            </a>
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    @elseif (count($lt->vanbankhac) > 0)

                                        <table class="table table-striped table-bordered table-responsive table-sm" style="margin-bottom: 5px">
                                            <thead>
                                            <tr>
                                                <th>TT</th>
                                                <th>Nội dung </th>
                                                <th class="col-md-2" style="text-align: center">Ngày đăng </th>
                                                <th><i class="fa fa-paperclip" aria-hidden="true"></i></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($lt->vanbankhac->where('daduyet','1')->sortByDesc('ngaybanhanh')->sortByDesc('id')->take(3) as $lct)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}

                                                    </td>
                                                    <td>
                                                        <a href="{{ route('chi-tiet-tin',[$cm->slug,$lt->slug,'van-ban-khac',$lct->id,$lct->slug]) }}" style="text-decoration: none"><i class="fa fa-file-word-o" aria-hidden="true"></i> &nbsp;{{ $lct->name }}&nbsp;{{ $lct->thang }}</a>
                                                    </td>
                                                    <td style="text-align: center">
                                                        {{\Carbon\Carbon::parse($lct->ngaybanhanh)->format('d-m-Y')}}
                                                    </td>
                                                    <td style="text-align: center">

                                                        @if ($lct->tepvanbankhac->count() >0 )
                                                            @foreach($lct->tepvanbankhac as $tvb)
                                                                <a href="{{ $tvb->path }}" target="_blank">
                                                                    <i class="fa fa-paperclip" title="{{ $lct->name }}" style="text-align: center"></i>
                                                                    {{--<img src="/images/pdf-file-512.png" alt="" width="20px" style="float: right" title="{{ $lct->name }}">--}}
                                                                </a>
                                                            @endforeach
                                                        @else

                                                            <a href="{{ $lct->noidung }}" target="_blank">
                                                                <i class="fa fa-paperclip" title="{{ $lct->name }}" style="text-align: center"></i>
                                                                {{--<img src="/images/pdf-file-512.png" alt="" width="20px" style="float: right" title="{{ $lct->name }}">--}}
                                                            </a>

                                                        @endif
                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                @endif
                                <!-- /.box-body -->

                                    <div class="pull-right">

                                        <a href="{{ route('loai-tin',[$cm->slug, $lt->slug]) }}" style="text-decoration: none"><em>Xem tiếp...</em></a>

                                    </div>



                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>

        <div class="clear-fix"></div>

        @if ($cm->thutu == 1)
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
            <div class="clearfix"></div>
        @endif

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
            <div class="clearfix"></div>
        @endif
    @endif
@endforeach


