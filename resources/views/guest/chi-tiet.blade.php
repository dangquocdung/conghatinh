@extends('guest.layout.main')
@section('title')
  <title>Chi tiết tin</title>
@endsection
@section('header-menu-item')
  active
@endsection
@section('content')
  <div class="container">
    <div class="row nen-trang">
{{--      @include('guest.chi-tiet.tin-noi-bat')--}}
      @include('guest.chi-tiet.chi-tiet')
{{--      @include('guest.chi-tiet.tin-moi-nhat')--}}
    </div>
  </div>
@endsection

@section('js')

<script>

	function goBack() {
 	    window.history.back();
 	} 

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

