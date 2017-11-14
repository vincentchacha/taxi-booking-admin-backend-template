@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ 'https://placehold.it/160x160/00a65a/ffffff/&text='.Auth::user()->name[0] }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="{{ url(config('backpack.base.route_prefix').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
           <li><a href="{{ url(config('backpack.base.route_prefix').'/maps') }}"><i class="fa fa-map-marker"></i> <span>Map Tracks</span></a></li>
            <li><a href="{{ url(config('backpack.base.route_prefix').'/request') }}"><i class="fa fa-info-circle"></i> <span>Requests</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/car-types') }}"><i class="fa fa-car"></i> <span>Car Types</span></a></li>
             <li><a href="{{ url(config('backpack.base.route_prefix').'/providers') }}"><i class="fa fa-user-plus"></i> <span>Providers</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/owners') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
             
                <li><a href="{{ url(config('backpack.base.route_prefix').'/promo-codes') }}"><i class="fa fa-code"></i> <span>Promo codes</span></a></li>
                 <li><a href="{{ url(config('backpack.base.route_prefix').'/payments') }}"><i class="fa fa-money"></i> <span>Payment Details</span></a></li>
                 <li><a href="{{ url(config('backpack.base.route_prefix').'/general-settings') }}"><i class="fa fa-check-circle-o"></i> <span>General Settings</span></a></li>

          <!-- Users, Roles Permissions -->
          <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>User Control</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix').'/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix').'/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
            </ul>
          </li>

          <li class="treeview">
              <a href="#"><i class="fa fa-cogs"></i> <span>Advanced</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url(config('backpack.base.route_prefix').'/elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
              </ul>
          </li>



          <!-- ======================================= -->
          {{-- <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li> --}}
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
