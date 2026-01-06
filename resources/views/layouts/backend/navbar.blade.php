<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav align-items-center">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block ml-3">
      <div class="input-group input-group-sm bg-light" style="border-radius: 10px; width: 300px; padding: 2px 10px;">
        <div class="input-group-prepend">
          <span class="input-group-text border-0 bg-transparent text-muted"><i class="fas fa-search"></i></span>
        </div>
        <input type="text" class="form-control border-0 bg-transparent" placeholder="Search data...">
      </div>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto align-items-center">
    <li class="nav-item mr-3">
      <a href="#" class="nav-link text-muted"><i class="far fa-bell"></i></a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link p-0" data-toggle="dropdown" href="#">
        <div class="d-flex align-items-center">
          <div class="avatar-circle overflow-hidden bg-light" style="width: 35px; height: 35px; border-radius: 10px;">
            <img src="https://ui-avatars.com/api/?name={{ Auth::user()->username }}&background=f26b52&color=fff"
              alt="User" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <i class="fas fa-chevron-down text-xs ml-2 text-muted"></i>
        </div>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right border-0 shadow-sm mt-3"
        style="border-radius: 15px;">
        <div class="p-3 text-center border-bottom">
          <p class="font-weight-bold mb-0">{{ Auth::user()->username }}</p>
          <p class="text-xs text-muted mb-0">{{ Auth::user()->email }}</p>
        </div>
        <a href="{{ route('profile.index') }}" class="dropdown-item py-2">
          <i class="fas fa-fw fa-user mr-2 text-muted"></i> Profile
        </a>
        <div class="dropdown-divider"></div>
        <a href="javascript:void(0)" class="dropdown-item py-2 text-danger" data-toggle="modal"
          data-target="#modal-default">
          <i class="fas fa-fw fa-sign-out-alt mr-2"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Yakin Logout?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer justify-content-right">
        <form method="POST" action="{{ route('logout') }}">
          <button type="button" class="btn btn-default mr-2" data-dismiss="modal">Close</button>
          @csrf
          <button type="submit" class="btn btn-primary">Logout</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->