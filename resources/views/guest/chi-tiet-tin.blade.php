@extends('guest.layout.main')
@section('title')
  {{ $tin->name }}
@endsection
@section('desc')
	{{ $tin->gioithieu }}
@stop
@section('header-menu-item')
  active
@endsection
@section('content-main')
	<div class="block3">

		<div class="portlet-header">

			<a href="{{  route('chuyen-muc', $tin->loaitin->chuyenmuc->slug) }}">
				<h4 class="portlet-header-title no-pd-top">
					<img src="/images/background/lotus.ico" alt="" width="26px"> {{ $tin->loaitin->chuyenmuc->name }} /
				</h4>
			</a>

			<a href="{{ route('loai-tin',[$tin->loaitin->chuyenmuc->slug,$tin->loaitin->slug]) }}">
				<h4 class="portlet-header-title no-pd-top">{{ $tin->loaitin->name }} /</h4>
			</a>

			<a href="javascript:void(0);">
				<h4 class="portlet-header-title no-pd-top">{{ $tin->name }}</h4>
			</a>

		</div>

		@if ($type == 'tin-tuc')
			<div class="col-md-12">

				<div class="row">

					<div class="tieu-de-tin">

						<h1 class="main-title cms-title">
							@if ($tin->tinanh == '1')
								&nbsp;<i class="fa fa-camera" title="Tin ảnh "></i>

							@endif
							@if ($tin->tinvideo == '1')
								&nbsp;<i class="fa fa-video-camera" title="Tin Video "></i>

							@endif
								&nbsp;{{ $tin->name }}
						</h1>
						<div class="meta clearfix">
							<small>
								<em>
									<time>
										<i class="fa fa-clock-o"></i> Đăng ngày {{ \Carbon\Carbon::parse($tin->ngaydang)->format('d-m-Y H:i:s') }} &nbsp;|
										&nbsp;<i class="fa fa-eye"></i> {{ $tin->counter }}
									</time>

								</em>
							</small>
						</div>
					</div>

					<div class="col-md-3">

						<div class="row">

							<div id="tin-noi-bat-left" class="hidden-xs hidden-sm">

								<h4 class="label">Tin nổi bật</h4>


								@foreach ($tinnoibat_left as $tinnb)
									<article>
										<a href="{{route('chi-tiet-tin',[$tinnb->loaitin->chuyenmuc->slug,$tinnb->loaitin->slug,'tin-tuc',$tinnb->id,$tinnb->slug])}}" title="{{$tinnb->name}}">
											<img src="{{$tinnb->avatar}}" alt="{{$tinnb->name}}">
										</a>

										<h6 style="text-align: center">
											<a class="title" href="{{route('chi-tiet-tin',[$tinnb->loaitin->chuyenmuc->slug,$tinnb->loaitin->slug,'tin-tuc',$tinnb->id,$tinnb->slug])}}" title="{{$tinnb->name}}">{{ $tinnb->name }}</a>
											@if ($tinnb->tinanh == '1')
												&nbsp;<i class="fa fa-picture-o" title="Tin ảnh "></i>

											@endif
											@if ($tinnb->tinvideo == '1')
												&nbsp;<i class="fa fa-film" title="Tin Video "></i>

											@endif
										</h6>
									</article>
								@endforeach


							</div>


							<script>

//                                $(document).ready(function () {
//
//                                    $('#tin-noi-bat-left').scrollToFixed({
//                                        marginTop: 50,
                                        // neither of these fixes the problem:
                                        // removeOffset, offsets
//                                        limit: function() {
//                                            var limit = $('#tag').offset().top + $('#tag').outerHeight(true) - $('#tin-noi-bat-left').outerHeight(true);
//                                            return limit;
//                                        },
//                                        removeOffsets: true,
//                                        zIndex: 999
//                                    });
//                                });


							</script>

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


							@if (count($tin->teptintuc) > 0)
								<div class="noi-dung-tep" style="height: 640px">
									@foreach($tin->teptintuc as $ttt)
										<iframe src="{{ $ttt->path }}" width="100%" height="640px"> </iframe>
									@endforeach
								</div>
							@endif



							<div class="pull-right" style="display: block; text-align:right; margin: 10px 0 10px 0">
								<strong>{{ $tin->tacgia  }}</strong>
								<br>
								@if ($tin->nguon)
									<em><small>Nguồn: {!! $tin->nguon !!} </small></em>
								@endif
							</div>
						</div>

						<div id="tag"></div>
					</div>
				</div>
				<hr>

				@include('guest.layout.tien-ich')

				<div class="nhom-tin-lien-quan">

					<div class="lienquan-header">

						<a href="{{ route('loai-tin',[$tin->loaitin->chuyenmuc->slug,$tin->loaitin->slug])  }}">Tin mới đăng</a>

					</div>

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">

							<div class="tin-lien-quan" style="margin-top: 10px">
								<ul>


									@foreach($tin->loaitin->chuyenmuc->tintuc->where('daduyet','1')->sortbydesc('id')->take(5) as $tlq)

										<li>
											<a href="{{route('chi-tiet-tin',[$tlq->loaitin->chuyenmuc->slug,$tlq->loaitin->slug,'tin-tuc',$tlq->id,$tlq->slug])}}">

												<div class="news-block" style="line-height: 25px">
													<i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $tlq->name }} <small><em>({{ \Carbon\Carbon::parse($tlq->ngaydang)->format('d/m/Y H:i:s') }})</em></small>
													@if ($tlq->tinanh == '1')
														&nbsp;<i class="fa fa-picture-o" title="Tin ảnh "></i>

													@endif
													@if ($tlq->tinvideo == '1')
														&nbsp;<i class="fa fa-film" title="Tin Video "></i>

													@endif
												</div>


											</a>
										</li>

									@endforeach

								</ul>
							</div>
						</div>
					</div>

					<br>

					<div class="lienquan-header">

						<a href="{{ route('loai-tin',[$tin->loaitin->chuyenmuc->slug,$tin->loaitin->slug]) }}">Tin cùng loại</a>

					</div>

					<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="row">

						<div class="tin-lien-quan" style="margin-top: 10px">
							<ul>


								@foreach($tin->loaitin->tintuc->where('daduyet','1')->sortbydesc('id')->take(5) as $tlq)

									<li>
										<a href="{{route('chi-tiet-tin',[$tlq->loaitin->chuyenmuc->slug,$tlq->loaitin->slug,'tin-tuc',$tlq->id,$tlq->slug])}}">

											<div class="news-block" style="line-height: 25px">
												<i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $tlq->name }} <small><em>({{ \Carbon\Carbon::parse($tlq->ngaydang)->format('d/m/Y H:i:s') }})</em></small>
												@if ($tlq->tinanh == '1')
													&nbsp;<i class="fa fa-picture-o" title="Tin ảnh "></i>

												@endif
												@if ($tlq->tinvideo == '1')
													&nbsp;<i class="fa fa-film" title="Tin Video "></i>

												@endif
											</div>

										</a>
									</li>

								@endforeach

							</ul>
						</div>
					</div>
				</div>
				</div>


			</div>

		@elseif ($type=='van-ban')
			<div class="col-md-12">
				<div class="dv-body">
					<table class="dv-table">
						<tbody>
						<tr>
							<td style="width:30%;">Kí hiệu văn bản</td>
							<td>{{ $tin->kihieuvb }}</td>
						</tr>
						<tr>
							<td style="width:30%;">Ngày ban hành</td>
							<td>{{ \Carbon\Carbon::parse($tin->ngaybanhanh)->format('d-m-Y')}}</td>
						</tr>
						{{--<tr>--}}
							{{--<td style="width:30%;">Người kí</td>--}}
							{{--<td>{{ $tin->nguoiki->name }}</td>--}}
						{{--</tr>--}}
						<tr>
							<td style="width:30%;">Trích yếu</td>
							<td>{{  $tin->trichyeu}}</td>
						</tr>
						{{--<tr>--}}
							{{--<td style="width:30%;">Cơ quan</td>--}}
							{{--<td>{{  $tin->nguoiki->cqbh->name }}</td>--}}
						{{--</tr>--}}
						<tr>
							<td style="width:30%;">Tệp tin đính kèm</td>
							<td>
								@foreach($tin->tepvanban as $tvb)

									<a href="{{ $tvb->path }}" target="_blank">

										<img src="/images/pdf-file-512.png" alt="" width="30px" title="{{ $tin->kihieuvb }}">

									</a>
								@endforeach
							</td>
						</tr>
						</tbody>
					</table>
				</div>

				@if (count($tin->tepvanban) > 0)

					@foreach($tin->tepvanban as $tvb)

						<object data="{{ $tvb->path }}" type="application/pdf" width="100%" height="640px">
							<p><b>Thông báo: </b> Trình duyệt bạn đang dùng không hỗ trợ xem trực tiếp. Vui lòng tải tệp tại đây để xem nội dung: <a href="{{ $tvb->path }}">Tải về</a>.</p>
						</object>

						<hr>

					@endforeach
				@endif

				@include('guest.layout.tien-ich')

				<div class="nhom-tin-lien-quan">



					<div class="lienquan-header">

						<a href="#">Văn bản cùng loại</a>

					</div>

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">

							<div class="tin-lien-quan" style="margin-top: 10px">
								<ul>

									@php

										$lvb = $tin->loaitin;

									@endphp



									@foreach($lvb->vanban->sortbydesc('id')->take(5) as $vbcl)

										@if ($vbcl->id <> $tin->id)

											<li>
												<a href="{{ route('chi-tiet-tin',[$lvb->chuyenmuc->slug,$lvb->slug,'van-ban',$vbcl->id,$vbcl->slug]) }}">

													<div class="news-block" style="line-height: 25px"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $vbcl->kihieuvb }} - {{ $vbcl->trichyeu }} <small><em>({{ \Carbon\Carbon::parse($vbcl->ngaydang)->format('d/m/Y H:i:s') }})</em></small></div>

												</a>
											</li>

										@endif

									@endforeach

								</ul>
							</div>
						</div>
					</div>

					<br>

					<div class="lienquan-header">

						<a href="#">Văn bản mới đăng</a>

					</div>

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">

							<div class="tin-lien-quan" style="margin-top: 10px">
								<ul>

									@foreach($vbmoinhat as $vbmd)

										@if ($vbmd->id <> $tin->id)

											<li>
												<a href="{{ route('chi-tiet-tin',[$vbmd->loaitin->chuyenmuc->slug,$vbmd->loaitin->slug,'van-ban',$vbmd->id,$vbmd->slug]) }}">

													<div class="news-block" style="line-height: 25px"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $vbmd->kihieuvb }} - {{ $vbmd->trichyeu }} <small><em>({{ \Carbon\Carbon::parse($vbmd->created_at)->format('d/m/Y H:i:s') }})</em></small></div>

												</a>
											</li>

										@endif
									@endforeach
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>

		@elseif ($type=='van-ban-khac')
			<div class="col-md-12">
				<div class="dv-body" style="padding: 10px">


					{!! $tin->noidung !!}

{{--					<a href="{{ $tin->noidung }}"><i class="fa fa-file-word-o fa-2x"></i> Tải về</a> &nbsp;&nbsp;--}}
				</div>

				{{--@if (!empty($tin->media_id))--}}

					{{--@if ($tin->media->extension == 'pdf')--}}
						{{--<object data="{{ $tin->media->directory.'/'.$tin->media->filename.'.'.$tin->media->extension }}" type="application/pdf" width="100%" height="640px">--}}
							{{--<p><b>Example fallback content</b>: This browser does not support PDFs. Please download the PDF to view it: <a href="{{ $tin->media->directory.'/'.$tin->media->filename.'.'.$tin->media->extension }}">Download PDF</a>.</p>--}}
						{{--</object>--}}
					{{--@endif--}}

				{{--@endif--}}

				{{--@if (count($tin->tepvanban) > 0)--}}

					{{--@foreach($tin->tepvanban as $tvb)--}}

						{{--<a href="{{ $tvb->path }}"><i class="fa file-word-o"></i> Tải về</a> &nbsp;&nbsp;--}}

					{{--@endforeach--}}
				{{--@endif--}}


				@if (count($tin->tepvanbankhac) > 0)

					@foreach($tin->tepvanbankhac as $tvb)

						<a href="{{ $tvb->path }}" style="text-decoration: none"><i class="fa fa-file-word-o fa-2x"></i> Tải về</a> &nbsp;&nbsp;

						{{--<object data="{{ $tvb->path }}" type="application/pdf" width="100%" height="640px">--}}
							{{--<p><b>Thông báo: </b>: Trình duyệt bạn đang dùng không hỗ trợ xem trực tiếp. Vui lòng tải tệp tại đây để xem nội dung: <a href="{{ $tvb->path }}">Tải về</a>.</p>--}}
						{{--</object>--}}

						{{--<hr>--}}

					@endforeach
				@endif

				<div class="clearfix"></div>


				@include('guest.layout.tien-ich')

				<div class="nhom-tin-lien-quan">

					<div class="lienquan-header">

						<a href="#">Tin cùng loại</a>

					</div>

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">

							<div class="tin-lien-quan" style="margin-top: 10px">
								<ul>

									@php

										$lvb = $tin->loaitin;

									@endphp



									@foreach($lvb->vanbankhac->sortbydesc('id')->take(5) as $vbcl)

										@if ($vbcl->id <> $tin->id)

											<li>
												<a href="{{ route('chi-tiet-tin',[$lvb->chuyenmuc->slug,$lvb->slug,'van-ban-khac',$vbcl->id,$vbcl->slug]) }}">

													<div class="news-block" style="line-height: 25px"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $vbcl->name }} <small><em>({{ \Carbon\Carbon::parse($vbcl->created_at)->format('d/m/Y H:i:s') }})</em></small></div>

												</a>
											</li>

										@endif

									@endforeach

								</ul>
							</div>
						</div>
					</div>

					<br>

					<div class="lienquan-header">

						<a href="#">Tin mới đăng</a>

					</div>

					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="tin-lien-quan" style="margin-top: 10px">
								<ul>

									@foreach($lctmoinhat as $vbcl)

										@if ($vbcl->id <> $tin->id)

											<li>
												<a href="{{ route('chi-tiet-tin',[$lvb->chuyenmuc->slug,$lvb->slug,'van-ban-khac',$vbcl->id,$vbcl->slug]) }}">

													<div class="news-block" style="line-height: 25px"><i class="fa fa-angle-double-right" aria-hidden="true"></i> &nbsp;{{ $vbcl->name }} <small><em>({{ \Carbon\Carbon::parse($vbcl->ngaydang)->format('d/m/Y H:i:s') }})</em></small></div>

												</a>
											</li>

										@endif

									@endforeach
								</ul>
							</div>
						</div>
					</div>

				</div>


			</div>

		@endif


	</div>

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

        $(document).ready(function () {
			$('.ckeditor-html5-video').addClass('embed-responsive embed-responsive-16by9');
			$('video').addClass('embed-responsive-item');
			$('iframe').addClass('embed-responsive-item');
			$('iframe').parent().addClass('embed-responsive embed-responsive-16by9');
		})


	</script>

@stop

