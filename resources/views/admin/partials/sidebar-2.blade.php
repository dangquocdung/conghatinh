<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <user-image
          img-class="img-circle"
          src="{{Auth::user()->present()->profilePic}}"
          alt="{{Auth::user()->name}}">
        </user-image>
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Trực tuyến</a>
      </div>
    </div>
    <!-- search form -->
    {{--<form action="#" method="get" class="sidebar-form">--}}
      {{--<div class="input-group">--}}
        {{--<input type="text" name="q" class="form-control" placeholder="Search...">--}}
        {{--<span class="input-group-btn">--}}
                {{--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
                {{--</button>--}}
              {{--</span>--}}
      {{--</div>--}}
    {{--</form>--}}
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">DANH MỤC</li>

      <li class="{{ Request::is('toa-soan/dashboard') ? 'active' : ''  }} treeview">
        <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i><span>Hoạt động</span></a>
      </li>

      <li class="{{ Request::is('toa-soan/tin-tuc/*') ? 'active' : ''  }} treeview">
        <a href="javascript:void(0)">
          <i class="fa fa-newspaper-o"></i> <span> Tin, Bài</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          {{--<li class="{{ Request::is('toa-soan/tin-tuc/tat-ca') ? 'active' : ''  }}">--}}
            {{--<a href="{{route('tin-tuc-su-kien')}}"><i class="fa fa-circle-o"></i> Danh sách tin, bài</a>--}}
          {{--</li>--}}
          @foreach ($chuyenmuc as $cm)

            @foreach($cm->loaitin as $lt)

              @if (count($lt->tintuc) > 0)

                <li class="{{ Request::is('toa-soan/tin-tuc/'.$lt->slug) ? 'active' : ''  }}">
                  <a href="{{route('tin-tuc-su-kien',$lt->slug)}}"><i class="fa fa-circle-o"></i> {{ $lt->name }}</a>
                </li>
              @endif

              @endforeach

            @endforeach
        </ul>
      </li>

      <li class="{{ Request::is('toa-soan/van-ban/*') ? 'active' : ''  }} treeview">
        <a href="javascript:void(0)">
          <i class="fa fa-file-pdf-o"></i> <span> Văn bản</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          {{--<li class="{{ Request::is('toa-soan/van-ban/them-van-ban') ? 'active' : ''  }}">--}}
            {{--<a href="{{route('tao-van-ban')}}"><i class="fa fa-circle-o"></i> Tạo mới</a>--}}
          {{--</li>--}}
          {{--<li class="{{ Request::is('toa-soan/van-ban/tat-ca') ? 'active' : ''  }}">--}}
            {{--<a href="{{route('index-van-ban')}}"><i class="fa fa-circle-o"></i> Tất cả Văn bản</a>--}}
          {{--</li>--}}

          @foreach ($chuyenmuc as $cm)

            @foreach($cm->loaitin as $lt)

              @if (count($lt->vanban) > 0)

                <li class="{{ Request::is('toa-soan/van-ban/'.$lt->slug) ? 'active' : ''  }}">
                  <a href="{{route('index-van-ban',$lt->slug)}}"><i class="fa fa-circle-o"></i> {{ $lt->name }}</a>
                </li>
              @endif

            @endforeach

          @endforeach
        </ul>
      </li>

      <li class="{{ Request::is('toa-soan/van-ban-khac/*') ? 'active' : ''  }} treeview">

        <a href="javascript:void(0)">
          <i class="fa fa-calendar"></i> <span> Văn bản khác </span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>

        <ul class="treeview-menu">
          {{--<li class="{{ Request::is('toa-soan/van-ban-khac/them-van-ban-khac') ? 'active' : ''  }}">--}}
            {{--<a href="{{route('tao-van-ban-khac')}}"><i class="fa fa-circle-o"></i> Tạo mới</a>--}}
          {{--</li>--}}
          {{--<li class="{{ Request::is('toa-soan/van-ban-khac/tat-ca') ? 'active' : ''  }}">--}}
            {{--<a href="{{route('index-van-ban-khac')}}"><i class="fa fa-circle-o"></i><span> Tất cả</span></a>--}}
          {{--</li>--}}

          @foreach ($chuyenmuc as $cm)

            @foreach($cm->loaitin as $lt)

              @if (count($lt->vanbankhac) > 0)

                <li class="{{ Request::is('toa-soan/van-ban-khac/'.$lt->slug) ? 'active' : ''  }}">
                  <a href="{{route('index-van-ban-khac',$lt->slug)}}"><i class="fa fa-circle-o"></i> {{ $lt->name }}</a>
                </li>
              @endif

            @endforeach

          @endforeach

        </ul>
      </li>

      {{--Chuyên trang--}}

      <li class="{{ Request::is('toa-soan/chuyen-trang/*') ? 'active' : ''  }} treeview">
        <a href="javascript:void(0)">
          <i class="fa fa-pagelines"></i> <span> Chuyên trang</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('toa-soan/chuyen-trang/doanh-nghiep-hoi') ? 'active' : ''  }}">
            <a href="{{route('index-doanh-nghiep-hoi')}}"><i class="fa fa-circle-o"></i> Doanh nghiệp hỏi</a>
          </li>
          <li class="{{ Request::is('toa-soan/chuyen-trang/ho-tro-phap-ly') ? 'active' : ''  }}">
            <a href="{{route('index-ho-tro-phap-ly')}}"><i class="fa fa-circle-o"></i> Hỗ trợ pháp lý</a>
          </li>
          <li class="{{ Request::is('toa-soan/chuyen-trang/gop-y-du-thao-van-ban') ? 'active' : ''  }}">
            <a href="{{ route('index-du-thao-van-ban') }}"><i class="fa fa-circle-o"></i> Góp ý dự thảo văn bản</a>
          </li>
          <li class="{{ Request::is('toa-soan/chuyen-trang/hoi-dap-truc-tuyen') ? 'active' : ''  }}">
            <a href="{{ route('hoi-dap-truc-tuyen.index') }}"><i class="fa fa-circle-o"></i> Hỏi - Đáp trực tuyến</a>
          </li>

          <li class="{{ Request::is('toa-soan/chuyen-trang/lien-he-cong-tac') ? 'active' : ''  }} treeview">
            <a href="{{route('index-lien-he-cong-tac')}}"><i class="fa fa-circle-o"></i><span> Liên hệ công tác</span></a>
          </li>

          <li class="{{ Request::is('toa-soan/chuyen-trang/gop-y') ? 'active' : ''  }} treeview">
            <a href="{{route('index-gop-y')}}"><i class="fa fa-circle-o"></i><span> Góp ý</span></a>
          </li>

        </ul>
      </li>


      <li class="{{ Request::is('toa-soan/da-phuong-tien/*') ? 'active' : ''  }} treeview">
        <a href="javascript:void(0)">
          <i class="fa fa-film"></i> <span> Đa phương tiện</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">

          <li class="{{ Request::is('toa-soan/da-phuong-tien/album-manager') ? 'active' : ''  }} treeview">
            <a href="{{route('album-manager')}}"><i class="fa fa-circle-o"></i><span> Album hình ảnh</span></a>
          </li>

          <li class="{{ Request::is('toa-soan/da-phuong-tien/video') ? 'active' : ''  }} treeview">
            <a href="{{route('video.index')}}"><i class="fa fa-circle-o"></i><span> Video Hà Tĩnh</span></a>
          </li>

          <li class="{{ Request::is('toa-soan/da-phuong-tien/media-manager') ? 'active' : ''  }} treeview">
            <a href="{{route('media-manager')}}"><i class="fa fa-circle-o"></i><span> Quản lý Hình ảnh</span></a>
          </li>

          <li class="{{ Request::is('toa-soan/da-phuong-tien/file-manager') ? 'active' : ''  }} treeview">
            <a href="{{route('file-manager')}}"><i class="fa fa-circle-o"></i><span> Quản lý tệp văn bản</span></a>
          </li>

          <li class="{{ Request::is('toa-soan/da-phuong-tien/icons') ? 'active' : ''  }} treeview">
            <a href="{{route('get-icons')}}"><i class="fa fa-circle-o"></i><span> Icons</span></a>
          </li>

          <li class="{{ Request::is('toa-soan/da-phuong-tien/calendar') ? 'active' : ''  }} treeview">
            <a href="{{route('get-calendar')}}"><i class="fa fa-circle-o"></i><span> Lịch </span></a>
          </li>
        </ul>
      </li>



      @role('tbt')

      <li class="{{ Request::is('toa-soan/lien-ket/*') ? 'active' : ''  }} treeview">
        <a href="javascript:void(0)">
          <i class="fa fa-link"></i> <span>Liên kết</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">

          <li class="{{ Request::is('toa-soan/lien-ket/banner-trang-chu') ? 'active' : ''  }}">
            <a href="{{route('banner-trang-chu')}}"><i class="fa fa-circle-o"></i> Banner liên kết</a>
          </li>

          <li class="divider"></li>
          <li class="{{ Request::is('toa-soan/lien-ket/phim-tat') ? 'active' : ''  }}">
            <a href="{{route('phim-tat.index')}}"><i class="fa fa-circle-o"></i> Liên kết</a>
          </li>
          <li class="divider"></li>

          <li class="{{ Request::is('toa-soan/lien-ket/so-ban-nganh') ? 'active' : ''  }}">
            <a href="{{route('so-ban-nganh')}}"><i class="fa fa-circle-o"></i> Sở, Ban, Ngành</a>
          </li>

        </ul>
      </li>

      @endrole

      <li class="{{ Request::is('toa-soan/cau-hinh/*') ? 'active' : ''  }} treeview">
        <a href="javascript:void(0)">
          <i class="fa fa-gear"></i> <span> Cấu hình</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('toa-soan/cau-hinh/he-thong/my-activities') ? 'active' : ''  }}">
            <a href="{{route('my-activities')}}"><i class="fa fa-circle-o"></i> Tác động</a>
          </li>
          @role('admin')
            <li class="{{ Request::is('toa-soan/cau-hinh/he-thong/activities') ? 'active' : ''  }}">
              <a href="{{route('activities')}}"><i class="fa fa-circle-o"></i> Nhật kí</a>
            </li>
            <li class="{{ Request::is('toa-soan/cau-hinh/he-thong/settings') ? 'active' : ''  }}">
              <a href="{{route('settings')}}"><i class="fa fa-circle-o"></i> Cài đặt</a>
            </li>

            <li class="{{ Request::is('toa-soan/cau-hinh/toppic') ? 'active' : ''  }}">
              <a href="{{route('index-toppic')}}"><i class="fa fa-circle-o"></i> Banner chính</a>
            </li>

            <li class="{{ Request::is('toa-soan/cau-hinh/loai-tin') ? 'active' : ''  }}">
              <a href="{{route('index-loai-tin')}}"><i class="fa fa-circle-o"></i> Quản lý loại tin</a>
            </li>
            <li class="{{ Request::is('toa-soan/cau-hinh/chuyen-muc') ? 'active' : ''  }}">
              <a href="{{route('index-chuyen-muc')}}"><i class="fa fa-circle-o"></i> Quản lý chuyên mục</a>
            </li>
          @endrole
        </ul>
      </li>

      @role('admin')
        <li class="{{ Request::is('toa-soan/config/user/*') ? 'active' : ''  }} treeview">
          <a href="javascript:void(0)">
            <i class="fa fa-user"></i> <span>Users and Roles</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('toa-soan/config/user/manager') ? 'active' : ''  }}">
              <a href="{{route('user')}}"><i class="fa fa-circle-o"></i> Người dùng</a>
            </li>
            {{-- <li class="{{ Request::is('toa-soan/config/user/import') ? 'active' : ''  }}">
              <a href="{{route('import-user')}}"><i class="fa fa-circle-o"></i> Import Users</a>
            </li> --}}
            <li class="{{ Request::is('toa-soan/config/user/roles') ? 'active' : ''  }}">
              <a href="{{route('manage-roles')}}"><i class="fa fa-circle-o"></i> Nhóm quyền</a>
            </li>
            <li class="{{ Request::is('toa-soan/config/user/permissions') ? 'active' : ''  }}">
              <a href="{{route('manage-permissions')}}"><i class="fa fa-circle-o"></i> Quyền hạn</a>
            </li>
            @if(\Setting::get('user_can_register'))
              <li class="{{ Request::is('toa-soan/config/user/activation-pending') ? 'active' : ''  }}">
                <a href="{{route('user-activation-pending')}}"><i class="fa fa-circle-o"></i> Kích hoạt users</a>
              </li>
            @endif
          </ul>
        </li>
      @endrole

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>