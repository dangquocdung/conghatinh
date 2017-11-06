<header class="main-header">
  <!-- Logo -->
  <a href="{{route('dashboard')}}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>{{Setting::get('app_short_name', 'ALT')}}</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>{{Setting::get('app_name', 'admin')}}</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <sidebar-collapse></sidebar-collapse>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="user-dropdown-menu">
            <user-image
              img-class="user-image"
              src="{{Auth::user()->present()->profilePic}}"
              alt="{{Auth::user()->name}}">
            </user-image>
            <span class="hidden-xs">{{Auth::user()->name}}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <user-image
                img-class="img-circle"
                src="{{Auth::user()->present()->profilePic}}"
                alt="{{Auth::user()->name}}">
              </user-image>
              <p>
                {{Auth::user()->name}} - {{Auth::user()->profile->designation}}
                <small>Member since Nov. 2012</small>
              </p>
            </li>

            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="{{route('profile')}}" class="btn btn-default btn-flat" id="user-profile-link">
                  Profile
                </a>
              </div>
              <div class="pull-right">
                <a href="javascript:void(0);"
                   id="logout-button"
                   onclick="document.getElementById('logout-form').submit();"
                   class="btn btn-default btn-flat">Sign out</a>
                <form action="{{route('logout')}}" method="post" id="logout-form" style="display: none;">
                  {{csrf_field()}}
                </form>
              </div>
            </li>
          </ul>
        </li>


      </ul>
    </div>
  </nav>
</header>