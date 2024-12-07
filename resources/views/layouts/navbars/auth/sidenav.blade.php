<aside class="bg-white border-0 sidenav navbar navbar-vertical navbar-expand-xs fixed-start" id="sidenav-main">
  @include('components.sidenav-header')
  <hr class="mt-0 mb-2 horizontal dark">
  <div class="w-auto collapse navbar-collapse " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
          <div
            class="text-center icon icon-shape icon-sm border-radius-sm me-2 d-flex align-items-center justify-content-center">
            <i class="text-sm ni ni-tv-2 text-primary opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="mt-3 nav-item">
        <h6 class="text-xs ps-4 ms-2 text-uppercase font-weight-bolder opacity-6">Accounts</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}" href="{{ route('profile') }}">
          <div
            class="text-center icon icon-shape icon-sm border-radius-sm me-2 d-flex align-items-center justify-content-center">
            <i class="text-sm ni ni-single-02 text-dark opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">My Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ str_contains(request()->url(), 'user-management') == true ? 'active' : '' }}"
          href="{{ route('page', ['page' => 'user-management']) }}">
          <div
            class="text-center icon icon-shape icon-sm border-radius-sm me-2 d-flex align-items-center justify-content-center">
            <i class="text-sm ni ni-bullet-list-67 text-dark opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">User Management</span>
        </a>
      </li>
      <li class="mt-3 nav-item">
        <h6 class="text-xs ps-4 ms-2 text-uppercase font-weight-bolder opacity-6">Pages</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ str_contains(request()->url(), 'tables') == true ? 'active' : '' }}"
          href="{{ route('page', ['page' => 'tables']) }}">
          <div
            class="text-center icon icon-shape icon-sm border-radius-sm me-2 d-flex align-items-center justify-content-center">
            <i class="text-sm ni ni-calendar-grid-58 text-warning opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{  str_contains(request()->url(), 'billing') == true ? 'active' : '' }}"
          href="{{ route('page', ['page' => 'billing']) }}">
          <div
            class="text-center icon icon-shape icon-sm border-radius-sm me-2 d-flex align-items-center justify-content-center">
            <i class="text-sm ni ni-credit-card text-success opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Billing</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'virtual-reality' ? 'active' : '' }}"
          href="{{ route('virtual-reality') }}">
          <div
            class="text-center icon icon-shape icon-sm border-radius-sm me-2 d-flex align-items-center justify-content-center">
            <i class="text-sm ni ni-app text-info opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Virtual Reality</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'rtl' ? 'active' : '' }}" href="{{ route('rtl') }}">
          <div
            class="text-center icon icon-shape icon-sm border-radius-sm me-2 d-flex align-items-center justify-content-center">
            <i class="text-sm ni ni-world-2 text-danger opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">RTL</span>
        </a>
      </li>
      <li class="mt-3 nav-item">
        <h6 class="text-xs ps-4 ms-2 text-uppercase font-weight-bolder opacity-6">Account pages</h6>
      </li>
    </ul>
  </div>
</aside>
