@php

    $chuyenmuc = \App\ChuyenMuc::whereIn('id', array(6,7,8,9))->get();

@endphp

@foreach($chuyenmuc as $cm)


<div class="block3">

    <div class="portlet-header">
        <a href="#">
            <h4 class="portlet-header-title no-pd-top">{{ $cm->name }}</h4>
        </a>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">

            <div class="chuyen-trang">
                <ul>

                    @foreach($cm->loaitin as $lt)

                        <li class="col-md-6">

                            <div class="news-block"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $lt->name }}</div>
                        </li>

                    @endforeach

                </ul>
            </div>
        </div>
    </div>

</div>

    @endforeach





