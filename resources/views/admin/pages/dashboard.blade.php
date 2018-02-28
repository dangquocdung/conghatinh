@extends('admin.html')

@section('breadcrumb')
  <section class="content-header">
    <h1>Hoạt động<small>Control panel</small></h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Trang quản trị</a></li>
      <li class="active">Hoạt động</li>
    </ol>
  </section>
@endsection

@section('content')
  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green">
          <i class="fa fa-check"></i>
        </span> 
        <div class="info-box-content counter">
          <span class="info-box-text">Số tin đã duyệt </span> 
          <span class="info-box-number timer count-title count-number" data-to="{{$dashboardData['sotin_daduyet']}}" data-speed="1000"></span>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red">
          <i class="fa fa-hourglass"></i>
        </span> 
        <div class="info-box-content counter">
          <span class="info-box-text">Số tin chưa duyệt </span> 
          <span class="info-box-number timer count-title count-number" data-to="{{$dashboardData['sotin_chuaduyet']}}" data-speed="1000"></span>
        </div>
      </div>
    </div>
  
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green">
          <i class="fa fa-check"></i>
        </span> 
        <div class="info-box-content counter">
          <span class="info-box-text">Số văn bản đã duyệt </span> 
          <span class="info-box-number timer count-title count-number" data-to="{{$dashboardData['sovb_daduyet']}}" data-speed="1000"></span>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red">
            <i class="fa fa-hourglass"></i>
          </span> 
          <div class="info-box-content counter">
            <span class="info-box-text">Số văn bản chưa duyệt </span> 
            <span class="info-box-number timer count-title count-number" data-to="{{$dashboardData['sovb_chuaduyet']}}" data-speed="1000"></span>
          </div>
        </div>
      </div>
  </div>

  
  {{--End first row--}}

  <div class="row">
    <div class="col-sm-12">
      <activity-graph></activity-graph>
    </div>
  </div>
  {{--End second row--}}

  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <info-box
        text="Đang chờ"
        number="{{$dashboardData['activation_pending']}}"
        color="bg-red"
        icon="fa-hourglass"
      ></info-box>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <info-box
        text="Hoạt động"
        number="{{$dashboardData['my_recent_activities']}}"
        color="bg-blue"
        icon="fa-line-chart"
      ></info-box>
    </div>
  </div>


  <marquee>@{{ message }}</marquee>
@endsection

@section('js')

<script>
  (function ($) {
    $.fn.countTo = function (options) {
      options = options || {};
      
      return $(this).each(function () {
        // set options for current element
        var settings = $.extend({}, $.fn.countTo.defaults, {
          from:            $(this).data('from'),
          to:              $(this).data('to'),
          speed:           $(this).data('speed'),
          refreshInterval: $(this).data('refresh-interval'),
          decimals:        $(this).data('decimals')
        }, options);
        
        // how many times to update the value, and how much to increment the value on each update
        var loops = Math.ceil(settings.speed / settings.refreshInterval),
          increment = (settings.to - settings.from) / loops;
        
        // references & variables that will change with each update
        var self = this,
          $self = $(this),
          loopCount = 0,
          value = settings.from,
          data = $self.data('countTo') || {};
        
        $self.data('countTo', data);
        
        // if an existing interval can be found, clear it first
        if (data.interval) {
          clearInterval(data.interval);
        }
        data.interval = setInterval(updateTimer, settings.refreshInterval);
        
        // initialize the element with the starting value
        render(value);
        
        function updateTimer() {
          value += increment;
          loopCount++;
          
          render(value);
          
          if (typeof(settings.onUpdate) == 'function') {
            settings.onUpdate.call(self, value);
          }
          
          if (loopCount >= loops) {
            // remove the interval
            $self.removeData('countTo');
            clearInterval(data.interval);
            value = settings.to;
            
            if (typeof(settings.onComplete) == 'function') {
              settings.onComplete.call(self, value);
            }
          }
        }
        
        function render(value) {
          var formattedValue = settings.formatter.call(self, value, settings);
          $self.html(formattedValue);
        }
      });
    };
    
    $.fn.countTo.defaults = {
      from: 0,               // the number the element should start at
      to: 0,                 // the number the element should end at
      speed: 1000,           // how long it should take to count between the target numbers
      refreshInterval: 100,  // how often the element should be updated
      decimals: 0,           // the number of decimal places to show
      formatter: formatter,  // handler for formatting the value before rendering
      onUpdate: null,        // callback method for every time the element is updated
      onComplete: null       // callback method for when the element finishes updating
    };
    
    function formatter(value, settings) {
      return value.toFixed(settings.decimals);
    }
  }(jQuery));
  
  jQuery(function ($) {
    // custom formatting example
    $('.count-number').data('countToOptions', {
    formatter: function (value, options) {
      return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
    });
    
    // start all the timers
    $('.timer').each(count);  
    
    function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
    $this.countTo(options);
    }
  });
</script>


@endsection