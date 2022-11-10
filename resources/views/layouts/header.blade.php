  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{!! asset('/new-style/images/logo.png') !!}" class="mr-2" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/new-style/images/favicon.png" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
      </button>

      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="{!! asset('/new-style/images/faces/avatar.png') !!}" alt="profile"/>
          </a>
          <span>{{ session()->get('names') }}</span>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            {{-- <a class="dropdown-item" href="{{route('settings', Auth::user()->id)}}">
              <i class="ti-info-alt text-primary"></i>
              {{Auth::user()->lastname.' '.Auth::user()->firstname}}
            </a> --}}
            <a class="dropdown-item" href="{{route('compagny.profile' , session()->get('names'))}}">
              <i class="mdi mdi-account-circle text-primary"></i>
              Mon profile
            </a>
            <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{route('logout')}}">
              <i class="ti-power-off text-primary"></i>
              Déconnexion
            </a>
          </div>
          <form id="logout-form" class="d-none" action="{{ route('logout') }}" method="POST">
              @csrf
          </form>
        </li>
      </ul>
      
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>

    </div>
  </nav>