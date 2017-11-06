@php

    $chuyenmuc = \App\ChuyenMuc::orderby('thutu','asc')->get();

@endphp




@foreach($chuyenmuc as $cm)


<div class="block4">

    <div class="block-header">
        <a href="/chuyen-muc/{{ $cm->slug }}" style="text-decoration: none">
            <h4>{{ $cm->name }}</h4>
        </a>
        
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






