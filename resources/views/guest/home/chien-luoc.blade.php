@php

    $chuyenmuc = \App\ChuyenMuc::where('id', '>','4')->where('id', '<','7')->where('vitri','<>','0')->get();

@endphp



{{--    @if (count($cm->tintuc) >0)--}}

<div class="chien-luoc">

    <ul>
        @foreach($chuyenmuc as $cm)
            <li class="col-md-6 col-xs-12">

                    <div class="block3">
                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="fa  fa-safari" aria-hidden="true"></i> &nbsp;{{ $cm->name }}</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="box-group" id="accordion">
                                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                    @foreach($cm->loaitin as $lt)
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#{{$lt->slug}}">
                                                        {{$lt->name}}
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="{{$lt->slug}}" class="panel-collapse collapse">
                                                <div class="box-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                                                    labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>

            </li>
        @endforeach
    </ul>

</div>



        {{--@if ($cm->banner_id != null)--}}

            {{--<div class="block2">--}}

                {{--@foreach($banner as $bn)--}}
                    {{--@if ($bn->id == $cm->banner_id)--}}
                        {{--<a href="{{$bn->lienket}}">--}}
                            {{--<img src="{{$bn->banner}}" alt="{{$bn->name}}" width="100%">--}}
                        {{--</a>--}}
                    {{--@endif--}}
                {{--@endforeach--}}
            {{--</div>--}}
        {{--@endif--}}
    {{--@endif--}}







