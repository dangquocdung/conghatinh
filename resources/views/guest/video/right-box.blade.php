<div class="right-box">
    <div class="block4">
        <div class="block-header">
            <a href="">
                <h4><img src="/images/background/lotus.ico" alt="" width="26px"> Video nổi bật</h4>
            </a>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            @foreach($video->sortByDesc('id') as $vd)
            <div class="row" style="padding-bottom: 10px">
                <div class="news-rightbox">

                    <div class="clip col-md-7">
                        <div class="row">

                            <div class="embed-responsive embed-responsive-16by9">

                                {!! $vd->src !!}

                            </div>
                        </div>


                    </div>
                    <div class="col-md-5">

                        <div style="text-align: justify">
                            <strong>{{ $vd->loaivideo->name }} ngày {{ \Carbon\Carbon::parse($vd->ngayphat)->format('d-m-Y') }}</strong>
                        </div>


                    </div>

                </div>


            </div>

            @endforeach
        </div>
    </div>
</div>



<script>
    $(document).ready(function () {

//        var src = $('.embed-responsive').find('iframe').attr('src');
//
//        src = src + '?rel=0&showinfo=0&controls=1&autohide=1';


        $('.embed-responsive').find('iframe').each(function () {

            $(this).removeAttr('height').removeAttr('width').addClass('embed-responsive-item');
            var src = $(this).attr('src');
            src = src + '?rel=0&showinfo=0&controls=1&autohide=1';

            $(this).attr('src',src);

        })
//        $('.embed-responsive').find('iframe').attr('src',src);


    })
</script>







