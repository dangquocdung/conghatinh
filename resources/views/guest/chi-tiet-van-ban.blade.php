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
                            <a class="breadcrumb-item" href="#"><i class="glyphicon glyphicon-home"></i></a>
                            <a class="breadcrumb-item" href="#">{{$vb->loaitin->chuyenmuc->name}}</a>
                            <a class="breadcrumb-item" href="#">{{$vb->loaitin->name}}</a>
                            <span class="breadcrumb-item active">{{ $vb->sovb.'/'.$vb->kihieuvb }}</span>
                        </div>

                        <div class="dv-body">
                            <table class="dv-table">
                            <tbody>
                                <tr>
                                    <td style="width:30%;">Số văn bản</td>
                                    <td>{{ $vb->sovb }}</td>
                                </tr>
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
                                        <p class="bg_dk">
                                            <a class="dinhkem-pdf" href="http://vanban.hanoi.gov.vn/documents/10182/2518750/CD_16_2017.pdf"> CD_16_2017.pdf</a>
                                        </p>
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






