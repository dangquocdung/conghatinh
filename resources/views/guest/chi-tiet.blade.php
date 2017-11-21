@extends('guest.layout.main')
@section('title')
  <title>{{ $tin->name }}</title>
@endsection
@section('header-menu-item')
  active
@endsection
@section('content-main')
	<div class="block3">

		<div class="portlet-header">

			<a href="chuyen-muc/{{ $tin->loaitin->chuyenmuc->slug }}">
				<h4 class="portlet-header-title no-pd-top"><img src="/images/background/lotus.ico" alt="" width="26px"> {{ $tin->loaitin->chuyenmuc->name }} / </h4>
			</a>

			<a href="loai-tin/{{ $tin->loaitin->slug }}">
				<h4 class="portlet-header-title no-pd-top">{{ $tin->loaitin->name }}</h4>
			</a>

		</div>


		<div class="col-md-12">

			<div class="row">

				<div class="tieu-de-tin">

					<h1 class="main-title cms-title">{{ $tin->name }}</h1>
					<div class="meta clearfix">
						<em>
							<time><i class="fa fa-clock-o"></i> Đăng ngày {{ \Carbon\Carbon::parse($tin->ngaydang)->format('d-m-Y H:i:s') }}</time>
						</em>
					</div>
				</div>

				<div class="col-md-3">

					<div class="row">

						@include('guest.chi-tiet.tin-noi-bat')

					</div>

				</div>

				<div class="col-md-9">


					<div class="chi-tiet-tin">

						<div class="gioi-thieu">
							<strong><em>{{ $tin->gioithieu }}</em></strong>
						</div>


						<div class="noi-dung">
							{!! $tin->noidung !!}
						</div>

						<div class="noi-dung">
							@foreach($tin->teptintuc as $ttt)
								<embed src= "{{ $ttt->path }}" width="100%" height="640px">
							@endforeach
						</div>


						<div class="pull-right" style="display: block; text-align:center; margin: 10px 0 10px 0">
							<strong>{{ $tin->tacgia  }}</strong>
							<br>
							@if ($tin->nguon)
								<em><small>Nguồn: {{ $tin->nguon }}</small></em>
							@endif
						</div>
					</div>

					<div id="tag">
						<ul class="tags">

						</ul>
					</div>
				</div>
			</div>

			@include('guest.layout.tien-ich')

			@include('guest.chi-tiet.lien-quan-new')

			<br>

			@include('guest.chi-tiet.lien-quan-old')


		</div>



	</div>

@endsection

@section('content-right')
	@include('guest.chi-tiet.right-box')
@endsection

@section('js')

	<script>

		function newOpenWindows(url){

			var windowprops = "width=100,height=100,scrollbars=yes,status=yes,resizable=no";
			var heightspeed = 20; // vertical scrolling speed (higher = slower)
			var widthspeed = 20;  // horizontal scrolling speed (higher = slower)
			var leftdist = 10;    // distance to left edge of window
			var topdist = 10;     // distance to top edge of window
			var winwidth = 670;
			var winheight = 700;
			if (window.resizeTo && navigator.userAgent.indexOf("Opera") == -1) {
				var sizer = window.open("", "", "left=" + leftdist + ",top=" + topdist + "," + windowprops);
				for (sizeheight = 1; sizeheight < winheight; sizeheight += heightspeed) {
					sizer.resizeTo("1", sizeheight);
				}
				for (sizewidth = 1; sizewidth < winwidth; sizewidth += widthspeed) {
					sizer.resizeTo(sizewidth, sizeheight);
				}
				sizer.location = url;
			} else {

				window.open(url, "mywindow");
			}
		}


	</script>

@stop

