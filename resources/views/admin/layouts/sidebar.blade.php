     <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{!! asset('/assets/admin/dist/img/user2-160x160.jpg') !!}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{!! Session::get('sess_fullname') !!}</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
           <li class="header">ORDERS</li>
            <!-- Optionally, you can add icons to the links -->
            <li {!! Request::is('admin') ? 'class="active"' : '' !!}><a href="{!! URL::to('admin/') !!}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
            <li {!! Request::is('admin/orders') ? 'class="active"' : '' !!}><a href="{!! URL::to('/admin/orders') !!}"><i class="fa fa-link"></i> <span>Browse All</span> <span class="badge bg-green pull-right">{!! $pending_orders !!}</span></a></a></li>
            <li><a href="#"><i class="fa fa-link"></i> <span>Shipments</span></a></li>
			<!--
            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li>
			-->
          </ul><!-- /.sidebar-menu -->
		  <ul class="sidebar-menu">
           <li class="header">QUOTES</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="#"><i class="fa fa-link"></i> <span>New Quote</span></a></li>
            <li {!! Request::is('admin/quotes') ? 'class="active"' : '' !!}><a href="{!! URL::to('/admin/quotes') !!}"><i class="fa fa-link"></i> <span>Browse All</span> <span class="badge bg-red pull-right">{!! $pending_quotes !!}</span></a></li>
          </ul><!-- /.sidebar-menu -->
		  <ul class="sidebar-menu">
           <li class="header">CUSTOMERS</li>
            <!-- Optionally, you can add icons to the links -->
            <li {!! Request::is('admin/customers') ? 'class="active"' : '' !!}><a href="{!! URL::to('/admin/customers') !!}"><i class="fa fa-link"></i> <span>Browse</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>