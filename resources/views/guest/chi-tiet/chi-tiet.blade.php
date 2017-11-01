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
            <a class="breadcrumb-item" href="#"><i class="fa fa-university" aria-hidden="true"></i></a>
            <a class="breadcrumb-item" href="chuyen-muc/{{ $tin->loaitin->chuyenmuc->slug }}">{{ $tin->loaitin->chuyenmuc->name }}</a>
            <a class="breadcrumb-item" href="loai-tin/{{ $tin->loaitin->slug }}">{{ $tin->loaitin->name }}</a>
            {{-- <span class="breadcrumb-item active">{{ $tin->name }}</span> --}}
        </div>
        
    
        <div class="col-md-12">

            <div class="row">

                <div class="tieu-de-tin">

                    <h1 class="main-title cms-title">{{ $tin->name }}</h1>
                    <div class="meta clearfix">
                        <em>
                            <time><i class="fa fa-clock-o"></i> Đăng ngày {{ \Carbon\Carbon::parse($tin->ngaydang)->format('d-m-Y H:i:s') }}</time>
                        </em>
                    </div>
                </div>

                <div class="col-md-3">

                    <div class="row">

                        @include('guest.chi-tiet.tin-noi-bat')

                    </div>

                </div>

                <div class="col-md-9">


                    <div class="chi-tiet-tin">

                        {{--<div class="chi-tiet-avatar" style="margin-bottom: 10px;">--}}
                            {{--<img src="{{$tin->avatar}}" alt="{{ $tin->name }}">--}}
                        {{--</div>--}}


                        <div class="gioi-thieu">
                            <strong><em>{{ $tin->gioithieu }}</em></strong>
                        </div>


                        <div class="noi-dung">
                            {!! $tin->noidung !!}
                        </div>

                        <div class="noi-dung">

                            @foreach($tin->teptintuc as $ttt)

                                {{--<object data="data/test.pdf" type="application/pdf" width="300" height="200">--}}
                                    {{--<a href="data/test.pdf">test.pdf</a>--}}
                                {{--</object>--}}



                                {{--<object data="{{ $ttt->path }}" type="application/pdf" width="100%" height="100%">--}}

                                    <embed src= "{{ $ttt->path }}" width="100%" height="640px">

                                {{--</object>--}}

                            @endforeach

                        </div>

                        <div class="pull-right">
                            @foreach($tin->teptintuc as $ttt)
                                <a href="{{ $ttt->path }}" target="_blank">
                                    <i class="fa fa-file-pdf-o fa-2x" aria-hidden="true" style="color:red"></i>
                                </a>
                            @endforeach
                        </div>

                        <div class="pull-right" style="display: block; text-align:center; margin: 10px 0 10px 0">
                            <strong>{{ $tin->tacgia  }}</strong>
                            <br>
                            @if ($tin->nguon)
                                <em><small>Nguồn: {{ $tin->nguon }}</small></em>
                            @endif
                        </div>
                    </div>

                    <div id="tag">
                        <ul class="tags">
                            {{--<li><i class="fa fa-tags" aria-hidden="true"></i></li>--}}

                            {{--<span class="tag-border">Success</span>--}}
                            
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

            
            @include('guest.chi-tiet.lien-quan-new')

            <br>

            @include('guest.chi-tiet.lien-quan-old')
            

        </div>

    

    </div>

    
    

           
</div>


<div class="col-md-3 hidden-xs">
    @include('guest.chi-tiet.right-box')
</div>
