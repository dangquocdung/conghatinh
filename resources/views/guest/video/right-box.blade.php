
        <div class="block4">
            <div class="block-header">
                <a href="">
                    <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Video nổi bật</h4>
                </a>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                @foreach($vd_noibat->sortByDesc('ngayphat') as $vd)
                    <div class="video-thumbnail">
                        <a href="/loai-tin/thu-vien-video/{{ $vd->id }}">
                            <img data-u="image" src="{{ $vd->loaivideo->cover_image }}" title="{{ $vd->name }}" width="100%" />
                        </a>

                    </div>

                    <div class="tieu-de" style="text-align: center; margin-top: 5px">
                        <a href="loai-tin/thu-vien-video/{{ $vd->id }}">
                            {{ $vd->loaivideo->name }} ngày {{ \Carbon\Carbon::parse($vd->ngayphat)->format('d-m-Y') }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>









