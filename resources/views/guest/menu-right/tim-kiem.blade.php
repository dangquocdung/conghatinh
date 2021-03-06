<style>

    .input-group-btn .btn-group {
        display: flex !important;
    }
    .btn-group .btn {
        border-radius: 0;
        margin-left: -1px;
    }
    .btn-group .btn:last-child {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
    }
    .btn-group .form-horizontal .btn[type="submit"] {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }
    .form-horizontal .form-group {
        margin-left: 0;
        margin-right: 0;
    }
    .form-group .form-control:last-child {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }
</style>
{!! Form::open(['method'=>'GET','url'=>'vi/tim-kiem','role'=>'search'])  !!}
    <div class="input-group" id="adv-search" style="margin-bottom: 4px">

        <div class="input-group-btn search-panel">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span id="search_concept">Tin tức</span> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#gioithieu">Giới thiệu</a></li>
                <li><a href="#ngaydang">Ngày đăng</a></li>
                <li><a href="#noidung">Nội dung</a></li>
                <li class="divider"></li>
                <li><a href="#hinhanh">Hình ảnh</a></li>
                <li><a href="#video">Video</a></li>

            </ul>
        </div>
        <input type="hidden" name="type" value="tieude" id="type" class="form-control"/>
        <input type="text"  name="search" id="search" class="form-control" placeholder="Tìm kiếm..." required/>
        <div class="input-group-btn">
            <div class="btn-group" role="group">
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </div>
        </div>
    </div>

{!! Form::close() !!}

<script>
    $(document).ready(function(e){
        $('.search-panel .dropdown-menu').find('a').click(function(e) {
            e.preventDefault();
            var param = $(this).attr("href").replace("#","");
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('.input-group #type').val(param);
        });
    });
</script>
