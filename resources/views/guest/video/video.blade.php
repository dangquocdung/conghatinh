<div id="video-player">

    <iframe width="560" height="315" src="https://www.youtube.com/embed/2EIeUlvHAiM" frameborder="0" allowfullscreen></iframe>

</div>


<script>
    $(document).ready(function () {

        var src = $('#video-player').find('iframe').attr('src');

        src = src + '?rel=0';

        $('#video-player').find('iframe').css('display','block').css('margin','0 auto');
        $('#video-player').find('iframe').attr('width','560').attr('height','315');
        $('#video-player').find('iframe').attr('src',src);

    })
</script>

<div class="tat-ca-video"style="margin-top: 30px">

<div class="row">
    <div  class="col-sm-12">
        <div class="col-xs-3">
            <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left vertical-text">
                @foreach($loaivideo as $lv)
                    @if ($lv->id == 1)
                        <li class="active"><a href="#{{$lv->slug}}" data-toggle="tab">{{ $lv->name }}</a></li>
                    @else
                        <li><a href="#{{$lv->slug}}" data-toggle="tab">{{ $lv->name }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="col-xs-9">
            <!-- Tab panes -->
            <div class="tab-content">
                @foreach($loaivideo as $lv)
                    @if ($lv->id == 1)
                        <div class="tab-pane active" id="{{$lv->slug}}">{{ $lv->name }}</div>
                    @else
                        <div class="tab-pane" id="{{$lv->slug}}">{{ $lv->name }}</div>
                    @endif
                @endforeach

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>

