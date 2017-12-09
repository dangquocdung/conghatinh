<style>
    #adv-search input{

        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;

    }
    .dropdown.dropdown-lg .dropdown-menu {
        margin-top: -1px;
        padding: 6px 20px;
    }
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
<div class="input-group" id="adv-search">

    <input type="hidden" name="type" class="form-control" value="tieude"/>
    <input type="text" name="search" class="form-control" placeholder="Tìm kiếm..." value="{{ old('search') }}"/>
        <div class="input-group-btn">
            <div class="btn-group" role="group">
                {{--<div class="dropdown dropdown-lg">--}}
                    {{--<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>--}}
                    {{--<div class="dropdown-menu dropdown-menu-right" role="menu">--}}
                        {{--<form class="form-horizontal" role="form">--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="filter">Filter by</label>--}}
                                {{--<select class="form-control">--}}
                                    {{--<option value="0" selected>All Snippets</option>--}}
                                    {{--<option value="1">Featured</option>--}}
                                    {{--<option value="2">Most popular</option>--}}
                                    {{--<option value="3">Top rated</option>--}}
                                    {{--<option value="4">Most commented</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="contain">Contains the words</label>--}}
                                {{--<input class="form-control" type="text" />--}}
                            {{--</div>--}}
                            {{--<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </div>
        </div>




</div>

{!! Form::close() !!}