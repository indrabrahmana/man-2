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
  <a  class="brand-link ">
    <img src="{{url('public')}}/dist/img/AdminLTELogo.png" alt="Logo" class="brand-image rounded-4"  >
    <span class="brand-text font-weight-light ">
       <h3>SIBI</h3>
       <p>MAN 2 KETAPANG</p>
     </span>
    
          

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
     
        <li class="nav-item {{ checkRouteActive('admin/dashboard') }}">
          <a href="{{ url('admin/dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
             Dashboard
             
            </p>
          </a>
        </li>
        <li class="nav-item {{ checkRouteActive('admin/admin') }} {{ checkRouteActive('admin/admin/create') }}{{ checkRouteActive('admin/admin/{admin}/edit') }}">
          <a href="{{ url('admin/admin')}}" class="nav-link">
            <i class="nav-icon fas fa-id-card"></i>
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
            <i class="nav-icon fas fa-users"></i>
            <p>
            Kelas
            </p>
          </a>
        </li>
        <li class="nav-item {{ checkRouteActive('admin/mapel') }} {{ checkRouteActive('admin/mapel/create') }} {{ checkRouteActive('admin/mapel/{mapel}') }} {{ checkRouteActive('admin/datasekolah/{datasekolah}/edit') }}">
          <a href="{{ url('admin/mapel') }}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
          Mata Pelajaran
            </p>
          </a>
        </li>
        <li class="nav-item {{ checkRouteActive('admin/nilai') }} {{ checkRouteActive('admin/nilai/create') }} {{ checkRouteActive('admin/nilai/{nilai}') }} {{ checkRouteActive('admin/datasekolah/{datasekolah}/edit') }}">
          <a href="{{ url('admin/nilai') }}" class="nav-link">
            <i class="nav-icon fa fa-pen-square"></i>
            <p>
         Nilai
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
