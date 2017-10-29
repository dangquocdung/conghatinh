	@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Quản lý Văn bản<small>Các văn bản hiện có trên ứng dụng</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{route('config')}}">Configurations</a></li>
      <li class="active">Văn bản Chỉ đạo, Điều hành</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      {{--Box--}}
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Văn bản Chỉ đạo, Điều hành</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <div class="table-responsive">

          <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <td>#</td>
                <td>Số văn bản</td>
                <td>Nhóm</td>
                <td>Loại văn bản</td>
                <td>Lĩnh vực</td>
                <td>Ngày ban hành</td>
                <td>Ngày đăng</td>
                <td>Trích yếu</td>
                <td>Người kí</td>
                <td>Tệp văn bản</td>
                <td></td>
              </tr>
            </thead>
            <tbody>

              @foreach ($vanban as $vb)

              <tr>
                <td>{{$vb->id}}</td>
                
                <td>
                  {{ $vb->kihieuvb }}
                  <br>

                  @if ($vb->daduyet == '1')
                    <span class="label label-success">Đã duyệt đăng</span>
                  @else
                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                              btn-text='Chờ duyệt đăng...'
                              btn-class="btn-warning"
                              url="{{url('api/v1/duyet-van-ban')}}"
                              :post-data="{{json_encode(['id' => $vb->id])}}"
                              :refresh="true"
                              message="Bạn chắc chắn muốn duyệt đăng văn bản {{$vb->kihieuvb}}?">
                      </confirm-modal>
                    </div>

                    {{--<a href="#"><span class="label label-warning">Chờ duyệt...</span></a>--}}
                  @endif
                </td>
                <td>{{$vb->loaitin->name}}</td>
                <td>{{$vb->loaivb->name}}</td>
                <td>{{ $vb->linhvuc->name }}</td>
                <td>{{ \Carbon\Carbon::parse($vb->ngaybanhanh)->format('d-m-Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($vb->ngaydang)->format('d-m-Y H:i:s') }}</td>
                
                <td>{{$vb->trichyeu}}</td>
                <td>{{ $vb->nguoiki->name }}</td>
                <td>



                  @foreach($vb->tepvanban as $tvb)
                      <a href="{{ $tvb->path }}" target="_blank">
                        <img src="/images/pdf-file-512.png" alt="{{ $vb->kihieuvb }}" title="{{ $vb->kihieuvb }}" width="20px">
                      </a>
                  @endforeach

                </td>
                
                <td class="col-sm-3">
                  
                    <div class="pull-left">
                      <a href="{{route('edit-van-ban', $vb->id)}}" class="btn btn-primary btn-xs">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                    </div>

                    <div class="pull-left gap-left gap-10">
                      <confirm-modal
                        btn-text='<i class="fa fa-trash"></i> Delete'
                        btn-class="btn-danger"
                        url="{{url('api/v1/delete-van-ban')}}"
                        :post-data="{{json_encode(['id' => $vb->id])}}"
                        :refresh="true"
                        message="Bạn chắc chắn muốn xoá văn bản {{$vb->kihieuvb}}?">
                      </confirm-modal>
                    </div>
                  
                </td>
              </tr>

              @endforeach
            
            </tbody>
          </table>

            {{$vanban->render()}}
          </div>

          
        </div>
        <!-- /.box-body -->
      </div>
      {{--End box--}}
    </div>


  </div>
@endsection