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

      <li class="treeview">
        <a href="{{route('trang-chu')}}"><i class="fa fa-home"></i><span>Trang tin </span></a>
      </li>

      <li class="{{ Request::is('toa-soan/load/*') ? 'active' : ''  }} treeview">
        <a href="javascript:void(0)">
          <i class="fa fa-newspaper-o"></i> <span> Nạp tin tư động </span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">

          <li class="{{ Request::is('toa-soan/load/cddh') ? 'active' : ''  }}">
            <a href="{{route('load-cddh')}}"><i class="fa fa-circle-o"></i> Chỉ đạo, điều hành </a>
          </li>

          <li class="{{ Request::is('toa-soan/load/llv') ? 'active' : ''  }}">
            <a href="{{route('load-llv')}}"><i class="fa fa-circle-o"></i> Lịch làm việc </a>
          </li>

          <li class="{{ Request::is('toa-soan/load/vbm') ? 'active' : ''  }}">
            <a href="{{route('load-vbm')}}"><i class="fa fa-circle-o"></i> Văn bản mới </a>
          </li>
          <li class="divider"></li>
          <li class="{{ Request::is('toa-soan/load/tintt') ? 'active' : ''  }}">
            <a href="{{route('load-tintt')}}"><i class="fa fa-circle-o"></i> Tin trong tỉnh  </a>
          </li>
          <li class="{{ Request::is('toa-soan/load/tintn') ? 'active' : ''  }}">
            <a href="{{route('load-tintn')}}"><i class="fa fa-circle-o"></i> Tin trong nước  </a>
          </li>
          <li class="{{ Request::is('toa-soan/load/tinqt') ? 'active' : ''  }}">
            <a href="{{route('load-tinqt')}}"><i class="fa fa-circle-o"></i> Tin quốc tế  </a>
          </li>

        </ul>
      </li>

      <li class="{{ Request::is('toa-soan/tin-bai/*') ? 'active' : ''  }} treeview">
        <a href="javascript:void(0)">
          <i class="fa fa-newspaper-o"></i> <span> Tin, Bài</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">

          <li class="{{ Request::is('toa-soan/tin-bai/tin-tuc') ? 'active' : ''  }}">
          <a href="{{route('tin-tuc-su-kien')}}"><i class="fa fa-circle-o"></i> Tin tức, sự kiện </a>
          </li>
          <li class="{{ Request::is('toa-soan/tin-bai/van-ban') ? 'active' : ''  }}">
            <a href="{{route('index-van-ban')}}"><i class="fa fa-circle-o"></i> Văn bản CĐ, ĐH </a>
          </li>
          <li class="{{ Request::is('toa-soan/tin-bai/van-ban-khac') ? 'active' : ''  }}">
            <a href="{{route('index-van-ban-khac')}}"><i class="fa fa-circle-o"></i> Văn bản khác </a>
          </li>

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
          {{--<li class="{{ Request::is('toa-soan/chuyen-trang/ho-tro-phap-ly') ? 'active' : ''  }}">--}}
            {{--<a href="{{route('index-ho-tro-phap-ly')}}"><i class="fa fa-circle-o"></i> Hỗ trợ pháp lý</a>--}}
          {{--</li>--}}
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



      @role('admin')
      <li class="{{ Request::is('toa-soan/cau-hinh/users-roles/*') ? 'active' : ''  }} treeview">
        <a href="javascript:void(0)">
          <i class="fa fa-user"></i> <span>Quản trị người dùng </span>
          <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('toa-soan/cau-hinh/users-roles/users') ? 'active' : ''  }}">
            <a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i> Người dùng</a>
          </li>
          <li class="{{ Request::is('toa-soan/cau-hinh/users-roles/roles') ? 'active' : ''  }}">
            <a href="{{route('roles.index')}}"><i class="fa fa-circle-o"></i> Nhóm quyền </a>
          </li>
          <li class="{{ Request::is('toa-soan/cau-hinh/users-roles/permissions') ? 'active' : ''  }}">
            <a href="{{route('permissions.index')}}"><i class="fa fa-circle-o"></i> Quyền </a>
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

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>