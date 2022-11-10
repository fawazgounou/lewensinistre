<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          @if (session()->get('role') == "admin")

            <li class="nav-item">
              <a class="nav-link" href="{{route('compagny.index')}}">
                <i class="mdi mdi-view-dashboard menu-icon"></i>
                <span class="menu-title">Tableau de bord</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Compagnies</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                @php 
                  $compagnies = Http::get(env('APP_URL_API').'/user/getusers')->json();
                @endphp
                <ul class="nav flex-column sub-menu">
                  @if($compagnies != null)
                    @foreach ($compagnies as $compagny )
                      @if ($compagny['name'] != "Administrateur")
                        <li class="nav-item"> <a class="nav-link" href="{{ route('sinistre.index' , $compagny['name']) }}">{{ $compagny['name'] }}</a></li>
                      @endif
                    @endforeach
                  @endif
                </ul>
              </div>
            </li>

          @else
            <li class="nav-item">
              <a class="nav-link" href="{{route('sinistre.index' , session()->get('name'))}}">
                <i class="mdi mdi-account-multiple-plus menu-icon"></i>
                <span class="menu-title">Mes sinistrers</span>
              </a>
            </li>
          @endif

        </ul>
      </nav>