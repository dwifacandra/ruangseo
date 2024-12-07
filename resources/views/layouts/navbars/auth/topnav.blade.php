<nav class="px-0 mx-4 shadow-none navbar navbar-main navbar-expand-lg border-radius-xl" id="navbarBlur"
  data-scroll="false">
  <div class="px-3 py-1 container-fluid">
    @include('components.breadcrumbs')
    <div class="mt-2 collapse navbar-collapse mt-sm-0 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
          <input type="text" class="form-control" placeholder="Type here...">
        </div>
      </div>
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item d-flex align-items-center">
          <form role="form" method="post" action="{{ route('logout') }}" id="logout-form">
            @csrf
            <a href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
              class="px-0 text-white nav-link font-weight-bold">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Log out</span>
            </a>
          </form>
        </li>
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="p-0 text-white nav-link" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="bg-white sidenav-toggler-line"></i>
              <i class="bg-white sidenav-toggler-line"></i>
              <i class="bg-white sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
        <li class="px-3 nav-item d-flex align-items-center">
          <a href="javascript:;" class="p-0 text-white nav-link">
            <i class="cursor-pointer fa fa-cog fixed-plugin-button-nav"></i>
          </a>
        </li>
        @include('components.notification-panel')
      </ul>
    </div>
  </div>
</nav>
