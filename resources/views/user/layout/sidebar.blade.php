@php
    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ url('public') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"> SIBI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('public') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            {{-- <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div> --}}
            {{-- <div class="admin-info">
        <div class="font-strong">
            {{request()->user()->nama}}
        </div>
        <small>Administrator</small>
    </div> --}}
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                {{-- <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Starter Pages
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Active Page</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inactive Page</p>
              </a>
            </li>
          </ul>
        </li> --}}
                <li class="nav-item {{ checkRouteActive('user/dashboard') }}">
                    <a href="{{ url('user/dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>
                </li>
                <li
                    class="nav-item {{ checkRouteActive('user/user') }} {{ checkRouteActive('user/user/create') }}{{ checkRouteActive('user/user/{user}/edit') }}">
                    <a href="{{ url('user/user') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Admin Web

                        </p>
                    </a>
                </li>
                <li
                    class="nav-item {{ checkRouteActive('user/pesertadidik') }} {{ checkRouteActive('user/pesertadidik/create') }} {{ checkRouteActive('user/pesertadidik/{pesertadidik}') }} {{ checkRouteActive('user/pesertadidik/{pesertadidik}/edit') }}">
                    <a href="{{ url('user/pesertadidik') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Peserta Didik

                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
