@foreach ($chuyenmuc as $cm)
    @if (count($cm->loaitin) > 0)
    <div class="box box-default">
        <div class="box-header with-border">
            <img src="/images/background/lotus.ico" width="30px">
            <h4 class="box-title">{{ $cm->name }}</h4>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <div class="pull-right">
                <a href="">Xem tiếp...</a>
            </div>

        </div>
    </div>

    <div class="clear-fix"></div>
    @endif
@endforeach