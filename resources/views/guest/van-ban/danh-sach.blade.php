<div class="block3">


    <div class="breadcrumb">
        <a class="breadcrumb-item" href="#"><i class="glyphicon glyphicon-home"></i></a>
        <span class="breadcrumb-item active">{{ $vb->name }}</span>
    </div>

    <div id="app" style="padding: 5px;">

        <van-ban-viewer source="/api/van-ban-all/{{$vb->slug}}" title="Danh sách văn bản" />



    </div>

</div>