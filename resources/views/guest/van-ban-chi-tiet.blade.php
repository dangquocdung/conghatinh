@extends('guest.layout.main')
@section('title')
  <title>{{ $vb->kihieuvb }}</title>
@endsection

@section('content-main')
    <div class="block3">

        <div class="portlet-header">

            <a href="{{$vb->loaitin->chuyenmuc->slug}}">
                <h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> {{$vb->loaitin->chuyenmuc->name}} / </h4>
            </a>

            <a href="{{$vb->loaitin->chuyenmuc->slug}}/{{$vb->loaitin->slug}}">
                <h4 class="portlet-header-title no-pd-top">{{$vb->loaitin->name}}</h4>
            </a>

        </div>


        <div class="dv-body">
            <table class="dv-table">
            <tbody>
                <tr>
                    <td style="width:30%;">Kí hiệu văn bản</td>
                    <td>{{ $vb->kihieuvb }}</td>
                </tr>
                <tr>
                    <td style="width:30%;">Ngày ban hành</td>
                    <td>{{ \Carbon\Carbon::parse($vb->ngaybanhanh)->format('d-m-Y')}}</td>
                </tr>
                <tr>
                    <td style="width:30%;">Người kí</td>
                    <td>{{ $vb->nguoiki->name }}</td>
                </tr>
                <tr>
                    <td style="width:30%;">Trích yếu</td>
                    <td>{{  $vb->trichyeu}}</td>
                </tr>
                <tr>
                    <td style="width:30%;">Cơ quan</td>
                    <td>{{  $vb->nguoiki->cqbh->name }}</td>
                </tr>
                <tr>
                    <td style="width:30%;">Thể loại </td>
                    <td>{{  $vb->loaivb->name }}</td>
                </tr>
                <tr>
                    <td style="width:30%;">Tệp tin đính kèm</td>
                    <td>
                        @foreach($vb->tepvanban as $tvb)

                            <a href="{{ $tvb->path }}" target="_blank">

                                <img src="/images/pdf-file-512.png" alt="" width="30px" title="{{ $vb->kihieuvb }}">

                            </a>
                        @endforeach
                    </td>
                </tr>
            </tbody>
            </table>
        </div>

        @include('guest.layout.tien-ich')



        <div class="lienquan-header">

            <a href="{{ route('van-ban',$vb->loaitin->slug) }}">Văn bản cùng loại</a>

        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">

                <div class="tin-lien-quan" style="margin-top: 10px">
                    <ul>

                        @php

                            $lvb = $vb->loaitin;

                        @endphp



                        @foreach($lvb->vanban as $vbcl)

                            @if ($vbcl->id <> $vb->id)

                                <li>
                                    <a href="{{ route('chi-tiet-van-ban',[$lvb->slug,$vbcl->id]) }}">

                                        <div class="news-block" style="line-height: 25px"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $vbcl->kihieuvb }} - {{ $vbcl->trichyeu }} <small><em>({{ \Carbon\Carbon::parse($vbcl->ngaydang)->format('d/m/Y H:i:s') }})</em></small></div>

                                    </a>
                                </li>

                            @endif

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>

        <br>

        <div class="lienquan-header">

            <a href="{{ route('van-ban') }}">Văn bản mới đăng</a>

        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">

                <div class="tin-lien-quan" style="margin-top: 10px">
                    <ul>

                        @foreach($vanban as $vbmd)

                            @if ($vbmd->id <> $vb->id)

                                <li>
                                    <a href="{{ route('chi-tiet-van-ban',[$vbmd->loaitin->slug,$vbmd->id]) }}">

                                        <div class="news-block" style="line-height: 25px"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $vbmd->kihieuvb }} - {{ $vbmd->trichyeu }} <small><em>({{ \Carbon\Carbon::parse($vbmd->ngaydang)->format('d/m/Y H:i:s') }})</em></small></div>

                                    </a>
                                </li>

                            @endif

                        @endforeach




                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content-right')
    @include('guest.menu-right.thong-bao')
@stop






