@extends('guest.layout.main')
@section('title')
  <title>{{ $vb->sovb.'/'.$vb->kihieuvb }}</title>
@endsection

@section('content')
  <div class="container">
    <div class="row nen-trang">

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">




                <div class="van-ban">
                    <div class="block3">
                        <div class="breadcrumb">
                            <a class="breadcrumb-item" href="/"><i class="glyphicon glyphicon-home"></i></a>
                            <a class="breadcrumb-item" href="{{$vb->loaitin->chuyenmuc->slug}}">{{$vb->loaitin->chuyenmuc->name}}</a>
                            <a class="breadcrumb-item" href="{{$vb->loaitin->chuyenmuc->slug}}/{{$vb->loaitin->slug}}">{{$vb->loaitin->name}}</a>
                            <span class="breadcrumb-item active">{{ $vb->kihieuvb }}</span>
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
                                    <td>{{ $vb->ngaybanhanh}}</td>
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
                                    <td style="width:30%;">Lĩnh vực văn bản</td>
                                    <td>{{  $vb->linhvuc->name }}</td>
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
                    </div>
                </div>
            </div>

            <div class="col-md-3 hidden-xs">
                @include('guest.van-ban.right-box')
            </div>

    </div>
  </div>
@endsection






