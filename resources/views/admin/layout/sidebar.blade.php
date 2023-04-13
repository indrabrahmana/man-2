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
    <img src="{{url('public')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">  SIBI</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{url('public')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
        <li class="nav-item {{ checkRouteActive('admin/dashboard') }}">
          <a href="{{ url('admin/dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
             Dashboard
             
            </p>
          </a>
        </li>
        <li class="nav-item {{ checkRouteActive('admin/admin') }} {{ checkRouteActive('admin/admin/create') }}{{ checkRouteActive('admin/admin/{admin}/edit') }}">
          <a href="{{ url('admin/admin')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
             Admin Web
             
            </p>
          </a>
        </li>
        <li class="nav-item {{ checkRouteActive('admin/datasekolah') }} {{ checkRouteActive('admin/datasekolah/create') }} {{ checkRouteActive('admin/datasekolah/{datasekolah}') }} {{ checkRouteActive('admin/datasekolah/{datasekolah}/edit') }}">
          <a href="{{ url('admin/datasekolah') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
             Data Sekolah
             
            </p>
          </a>
        </li>
        <li class="nav-item {{ checkRouteActive('admin/kelas') }} {{ checkRouteActive('admin/kelas/create') }} {{ checkRouteActive('admin/kelas/{kelas}') }} {{ checkRouteActive('admin/datasekolah/{datasekolah}/edit') }}">
          <a href="{{ url('admin/kelas') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            Kelas
            </p>
          </a>
        </li>
        <li class="nav-item {{ checkRouteActive('admin/mapel') }} {{ checkRouteActive('admin/mapel/create') }} {{ checkRouteActive('admin/mapel/{mapel}') }} {{ checkRouteActive('admin/datasekolah/{datasekolah}/edit') }}">
          <a href="{{ url('admin/mapel') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
          Mata Pelajaran
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
