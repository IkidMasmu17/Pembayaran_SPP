<aside class="main-sidebar sidebar-light-primary elevation-1">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="{{ asset('templates/backend/AdminLTE-3.1.0') }}/dist/img/laravel.jpg" alt="AdminLTE Logo"
      class="brand-image img-circle" style="opacity: .8; width: 40px; height: 40px; object-fit: cover;">
    <span class="brand-text font-weight-bold ml-2">SPPR</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ route('dashboard.index') }}"
            class="nav-link {{ Request::segment(2) == 'dashboard' ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        @role('admin')
        <li class="nav-header">MANAJEMEN DATA</li>
        <li class="nav-item">
          <a href="{{ route('siswa.index') }}" class="nav-link {{ Request::segment(2) == 'siswa' ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Siswa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('pembayaran-spp.index') }}"
            class="nav-link {{ Request::segment(2) == 'pembayaran-spp' ? 'active' : '' }}">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('kelas.index') }}" class="nav-link {{ Request::segment(2) == 'kelas' ? 'active' : '' }}">
            <i class="nav-icon fas fa-school"></i>
            <p>
              Kelas
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin-list.index') }}"
            class="nav-link {{ Request::segment(2) == 'admin-list' ? 'active' : '' }}">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
              Admin
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('user.index') }}" class="nav-link {{ Request::segment(2) == 'user' ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              User
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('petugas.index') }}"
            class="nav-link {{ Request::segment(2) == 'petugas' ? 'active' : '' }}">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Petugas
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('spp.index') }}" class="nav-link {{ Request::segment(2) == 'spp' ? 'active' : '' }}">
            <i class="nav-icon fas fa-money-bill"></i>
            <p>
              SPP
            </p>
          </a>
        </li>
        @endrole

        @role('petugas')
        <li class="nav-header">MANAJEMEN DATA</li>
        <li class="nav-item">
          <a href="{{ route('siswa.index') }}" class="nav-link {{ Request::segment(2) == 'siswa' ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Siswa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('pembayaran-spp.index') }}"
            class="nav-link {{ Request::segment(2) == 'pembayaran-spp' ? 'active' : '' }}">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('kelas.index') }}" class="nav-link {{ Request::segment(2) == 'kelas' ? 'active' : '' }}">
            <i class="nav-icon fas fa-school"></i>
            <p>
              Kelas
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('spp.index') }}" class="nav-link {{ Request::segment(2) == 'spp' ? 'active' : '' }}">
            <i class="nav-icon fas fa-money-bill"></i>
            <p>
              SPP
            </p>
          </a>
        </li>
        @endrole

        @role('admin|petugas')
        <li class="nav-header">PEMBAYARAN</li>
        <li class="nav-item">
          <a href="{{ route('pembayaran.index') }}"
            class="nav-link {{ Request::segment(2) == 'bayar' ? 'active' : '' }}">
            <i class="nav-icon fas fa-money-check"></i>
            <p>
              Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('pembayaran.status-pembayaran') }}"
            class="nav-link {{ Request::segment(2) == 'status-pembayaran' ? 'active' : '' }}">
            <i class="nav-icon fas fa-money-bill"></i>
            <p>
              Status Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('pembayaran.history-pembayaran') }}"
            class="nav-link {{ Request::segment(2) == 'history-pembayaran' ? 'active' : '' }}">
            <i class="nav-icon fas fa-history"></i>
            <p>
              History Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('pembayaran.laporan') }}"
            class="nav-link {{ Request::segment(2) == 'laporan' ? 'active' : '' }}">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Laporan Pembayaran
            </p>
          </a>
        </li>
        @endrole

        @role('siswa')
        <li class="nav-header">PEMBAYARAN</li>
        <li class="nav-item">
          <a href="{{ route('siswa.pembayaran-spp') }}"
            class="nav-link {{ Request::segment(2) == 'pembayaran-spp' ? 'active' : '' }}">
            <i class="nav-icon fas fa-money-bill"></i>
            <p>
              Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('siswa.history-pembayaran') }}"
            class="nav-link {{ Request::is('siswa/history-pembayaran') ? 'active' : '' }}">
            <i class="nav-icon fas fa-history"></i>
            <p>
              History Pembayaran
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('siswa.laporan-pembayaran') }}"
            class="nav-link {{ Request::is('siswa/laporan-pembayaran') ? 'active' : '' }}">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Laporan
            </p>
          </a>
        </li>
        @endrole

        @role('admin')
        <li class="nav-header">ROLES - PERMISSIONS</li>
        <li class="nav-item">
          <a href="{{ route('roles.index') }}" class="nav-link {{ Request::segment(2) == 'roles' ? 'active' : '' }}">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
              Roles List
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('permissions.index') }}"
            class="nav-link {{ Request::segment(2) == 'permissions' ? 'active' : '' }}">
            <i class="nav-icon fas fa-key"></i>
            <p>
              Permissions List
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('role-permission.index') }}"
            class="nav-link {{ Request::segment(2) == 'role-permission' ? 'active' : '' }}">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Role - Permission
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('user-role.index') }}"
            class="nav-link {{ Request::segment(2) == 'user-role' ? 'active' : '' }}">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              User - Role
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('user-permission.index') }}"
            class="nav-link {{ Request::segment(2) == 'user-permission' ? 'active' : '' }}">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              User - Permission
            </p>
          </a>
        </li>
        @endrole
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>