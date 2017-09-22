<section id="main-menu">
  <div class="header-menu-wrapper hidden-xs">
      <div class="row">
        <div class="container">
          <ul class="header-menu">
              <li class="header-menu-item @yield('header-menu-item')">
                  <a class="title-menu" href="/">
                      <span>Trang chủ</span>
                  </a>
                  <div class="header-menu-triangle-wrapper hidden"><i class="header-menu-triangle"></i>
                  </div>
              </li>
              @foreach ($chuyenmuc as $cm)
              <li class="header-menu-item">
                  <a class="title-menu" href="chuyen-muc/{{$cm->slug}}">
                      <span>{{$cm->name}}</span>
                  </a>
                  @if (count($cm->loaitin) > 0)
                  <div class="header-menu-triangle-wrapper"><i class="header-menu-triangle"></i>
                  </div>
                  <div class="header-menu-sub-wrapper">
                      <div class="container pad-left-10 pad-right-10">
                          <ul class="header-menu-sub container">
                            @foreach ($cm->loaitin as $lt)
                              <li class="header-menu-sub-item">
                                  <a class="title-menu" href="loai-tin/{{$lt->slug}}">{{$lt->name}}</a>
                              </li>
                            @endforeach
                          </ul>
                      </div>
                  </div>
                  @endif

              </li>
              @endforeach
              
              <li class="header-menu-item">
                  <a class="title-menu" href="http://dulichbien.hatinh.top/" target="_blank">
                      <span>Du khách</span>
                  </a>
                  <div class="header-menu-triangle-wrapper hidden"><i class="header-menu-triangle"></i>
                  </div>
              </li>
          </ul>
        </div>
      </div>
  </div>


  <div class="margin-wrapper hidden-xs">
      <div class="container pad-left-10 pad-right-10">
          <span style="padding-top: 11px;display: block; padding-left: 15px;">
            <span style="margin-top: -1px;display: block;float: left;margin-right: 6px;">
              <i class="fa fa-calendar" aria-hidden="true"></i>
            </span>
          <span class="wd-days hidden-xs ng-binding">
            {{ Carbon\Carbon::now()->formatLocalized('Ngày %d tháng %m năm %Y | %H:%M GMT+7') }}
          </span>
          </span>
      </div>
  </div>


  {{-- <div class="header-menu-wrapper-mb hidden-lg hidden-md hidden-sm">
      <div id="btClickLeftNav" class="humbeger btn-hamburger">
          <span></span>
      </div>
      <div style="width: 40px;float: left;">
          <img src="./images/logo2.png" style="height: 34px;margin-top: 6px;">
      </div>
      <div class="header-menu-name-mb">
          <span>CỔNG TTĐT TỈNH HÀ TĨNH</span>
          <a class="search-icon-mb ">
          </a>
      </div>
  </div>
  <div style="display:none" class="search-container-mb abc hidden-lg hidden-md hidden-sm">
      <form action="http://danang.gov.vn/web/guest/trang-chu?p_p_id=menu_WAR_danangportlet_INSTANCE_ngFkSPRx0arZ&amp;p_p_lifecycle=1&amp;p_p_state=normal&amp;p_p_mode=view&amp;p_p_col_id=column-1&amp;p_p_col_count=1&amp;_menu_WAR_danangportlet_INSTANCE_ngFkSPRx0arZ_javax.portlet.action=sendAction&amp;p_auth=fjhJcexq" method="POST">
          <input type="text" name="_menu_WAR_danangportlet_INSTANCE_ngFkSPRx0arZ_tukhoa" class="header-menu-search-box" placeholder="Tìm kiếm" value="">
          <input type="submit" class="icon-search" value="">
      </form>
  </div> --}}
</section>
