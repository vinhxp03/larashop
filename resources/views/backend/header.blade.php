<header class="header sticky-top">
  <nav class="navbar navbar-light bg-white px-sm-4 ">
    <a class="navbar-brand py-2 d-md-none  m-0 material-icons toggle-sidebar" href="#">menu</a>
    <ul class="navbar-nav flex-row ml-auto">
      <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Switch Application">
        <a data-toggle="modal" href="#" data-target="#switchApp" class="nav-link"><span class="material-icons align-middle">apps</span></a>
      </li>
      <li class="nav-item notification" >
        <a href="#" id="notificationDropdown" data-toggle="dropdown" class="nav-link"><span class="material-icons align-middle">notifications_none</span></a>
        <div class="dropdown-menu p-0 dropdown-lg notificationDropdown dropdown-menu-right" aria-labelledby="notificationDropdown">
          <a class="dropdown-item py-3 border-bottom" href="#">
            <p class="text-muted mb-1"><small>John Doe Application</small></p>
            <div class="progress" style="height:8px;">
              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </a>
          <a class="dropdown-item py-3 border-bottom" href="#">
            <p class="text-muted mb-1"><small>Akshay Application</small></p>
            <div class="progress" style="height:8px;">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </a>
          <a class="dropdown-item whitespace-normal py-3 border-bottom" href="#">
            <div class="media">
              <img class="mr-3 rounded" width="26" src="backend/images/user.png" >
              <div class="media-body">
                <h6 class="m-0 weight-400">Media heading</h6>
                <small class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante.</small>
              </div>
            </div>
          </a>
          <a class="dropdown-item py-3 border-bottom" href="#">
            <p class="text-muted mb-1"><small>Uploading Documents</small></p>
            <div class="progress" style="height:8px;">
              <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </a>
          <a class="dropdown-item py-3 border-bottom" href="#">
          <span class="badge badge-pill badge-danger mr-2">Warning</span> <small class="text-muted">Somthing went wrong !</small>
          </a>
          <button type="button" class="btn btn-light btn-sm btn-block">View All</button>
        </div>
      </li>
      <li class="nav-item ml-sm-3 user-logedin dropdown">
        <a href="#" id="userLogedinDropdown" data-toggle="dropdown" class="nav-link weight-400 dropdown-toggle"><img src="backend/images/user.png" class="mr-2 rounded" width="28">
          @if (Auth::check())
            {{ Auth::user()->name }}
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userLogedinDropdown">
          <a class="dropdown-item" href="{{ url('admin/profile') }}">Tài khoản</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#change-pass">Đổi mật khẩu</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url('admin/logout') }}">Thoát</a>
        </div>
      </li>
    </ul>
  </nav>
</header>