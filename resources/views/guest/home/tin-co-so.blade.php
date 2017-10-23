@php
    $cm = $chuyenmuc->where('slug','tin-co-so')->first();

    
@endphp





  

<div class="block3" id="{{ $cm->slug }}">

      <div class="portlet-header">
          <a href="chuyen-muc/{{ $cm->slug }}">
              <h4 class="portlet-header-title no-pd-top">{{ $cm->name }}</h4>
          </a>
      </div>

      @foreach ($cm->loaitin as $lt)

        @php

          $tins = $lt->tintuc->take(5);

          $tin1= $tins->shift();

        @endphp


        @if ($tin1)
            <div class="col-md-6" style="float:left">

                <div class="breadcrumb">
                    <span class="breadcrumb-item active">
                      <a href="loai-tin/{{ $lt->slug }}" style="text-decoration: none;">
                        <span class="glyphicon glyphicon-share-alt"></span>
                        <strong>{{ $lt->name }}</strong>
                      </a>
                    </span>
                    <span class="pull-right">
                      <a href="loai-tin/{{ $lt->slug }}" style="text-decoration: none;"><em><small><i class="fa fa-angle-double-right" aria-hidden="true"></i>Xem tiếp...</small></em></a>
                    </span>
                </div>



                <div class="news-main">
                    <a class="tin_title_text" href="/chi-tiet/{{$tin1->slug}}">
                      <div class="tin_title_text">
                            {{ $tin1->name }}
                        </div>
                        <img style="display: inline-block; width: 160px; height:auto;" src="{{ $tin1->avatar }}" alt="" title="">

                    </a>

                    <div class="tin_title_abstract" style="display:;">

                        {{ $tin1->gioithieu }}

                    </div>
                </div>


            </div>
        


        @endif

      
      
      @endforeach

</div>




<script>
    $(document).ready(function () {

        var isMobile = $(window).width() < 768;
        console.log("isMobile");
        console.log(isMobile);

        if(!isMobile) {

            

            $('#{{ $cm->slug }} .news-block').hover(function () {

                $('#{{ $cm->slug }} .cms-container-tintuc a').attr({href: $(this).find('a').attr('href')});

                $('#{{ $cm->slug }} .cms-container-tintuc a .tin_title_text').html($(this).find('a').html());

                $('#{{ $cm->slug }} .cms-container-tintuc a img').attr({src: $(this).find('img').attr('src')});

                $('#{{ $cm->slug }} .cms-container-tintuc tin_title_abstract').html($(this).find('.gioithieu').html());

            })
            

        }




    })
</script>

