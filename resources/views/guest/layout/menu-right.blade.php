<div class="panel-group" id="menu-right-accordion" style="margin-bottom: 5px">

    @foreach ($chuyenmuc->where('vitri','1') as $cm)
        <div class="panel panel-default">


            <div class="panel-heading" style="border-radius: 3px">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#{{$cm->slug}}"><span class="glyphicon glyphicon-folder-close">
                                </span>{{ $cm->name }}</a>
                </h4>
            </div>


            <div id="{{ $cm->slug }}" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        @foreach($cm->loaitin->sortby('thutu') as $lt)
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-pencil text-primary"></span><a href="{{ route('loai-tin',[$lt->chuyenmuc->slug,$lt->slug]) }}">{{ $lt->name }}</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    @endforeach
</div>