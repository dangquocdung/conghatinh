@php

    $chuyenmuc = \App\ChuyenMuc::whereIn('id', array(6,7,8,9))->get();

@endphp

@foreach($chuyenmuc as $cm)


<div class="block4">

    <div class="block-header">
        
        <h4>{{ $cm->name }}</h4>
        
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">

            <div class="news-rightbox">
                <ul>

                    @foreach($cm->loaitin as $lt)

                        <li>

                            <div class="news-block">
                                <a href="/loai-tin/{{ $lt->slug }}">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $lt->name }}
                                </a>
                            </div>
                        </li>

                    @endforeach

                </ul>
            </div>
        </div>
    </div>

</div>

    @endforeach





