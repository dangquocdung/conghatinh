<div class="col-md-9">

    {{-- <ul class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">Vehicles</a></li>
      <li><a href="#">Vans</a></li>
      <li><a href="#">Camper Vans</a></li>
      <li><a href="#">1989 VW Westfalia Vanagon</a></li>
    </ul> --}}




    <div class="block3">
        <div class="breadcrumb">
            <a class="breadcrumb-item" href="#"><i class="glyphicon glyphicon-home"></i></a>
            <a class="breadcrumb-item" href="chuyen-muc/{{ $tin->loaitin->chuyenmuc->slug }}">{{ $tin->loaitin->chuyenmuc->name }}</a>
            <a class="breadcrumb-item" href="chuyen-muc/{{ $tin->loaitin->slug }}">{{ $tin->loaitin->name }}</a>
            <span class="breadcrumb-item active">{{ $tin->name }}</span>
        </div>
        
    
        <div class="col-md-12">

            <div class="row">

                <div class="tieu-de-tin">

                    <h1 class="main-title cms-title">{{ $tin->name }}</h1>
                    <div class="meta clearfix">
                        <time><i class="fa fa-clock-o"></i>{{ $tin->created_at }}</time>
                    </div>
                </div>

                <div class="col-md-3">

                    <div class="row">

                        @include('guest.chi-tiet.tin-noi-bat')

                    </div>

                </div>

                <div class="col-md-9">



                    <div class="chi-tiet-tin">

                        <div class="chi-tiet-avatar" style="margin-bottom: 10px;">
                            <img src="{{$tin->avatar}}" alt="{{ $tin->name }}">
                        </div>



                        <div class="gioi-thieu">
                            {{ $tin->gioithieu }}
                        </div>


                        <div class="noi-dung">
                            {!! $tin->noidung !!}
                        </div>
                    </div>

                    <div id="tag">
                    <ul class="tags">
                        <li><i class="fa fa-tags" aria-hidden="true"></i></li>
                        <span class="badge badge-default">Default</span>
                        <span class="badge badge-primary">Primary</span>
                        <span class="badge badge-success">Success</span>
                        <span class="badge badge-info">Info</span>
                        <span class="badge badge-warning">Warning</span>
                        <span class="badge badge-danger">Danger</span>
                    </ul>
                </div>


                </div>
            </div>

            <div class="tien-ich">
                {{-- <a class="in" href="javascript:newOpenWindows();"><i class="fa fa-print" aria-hidden="true"></i> In bài viết</a> --}}
                <a class="in" href="javascript:window.print();"><i class="fa fa-print" aria-hidden="true"></i> In bài viết</a>

                &nbsp;
                <a class="quaylai" href="javascript:goBack();"><i class="fa fa-reply" aria-hidden="true"></i> Quay lại</a>
            </div>

        </div>

    

    </div>
    

           
</div>


<div class="col-md-3 hidden-xs">
    @include('guest.chi-tiet.right-box')
</div>
