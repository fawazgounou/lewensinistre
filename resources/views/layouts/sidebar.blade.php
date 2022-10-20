<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('administrator')}}">
              <i class="mdi mdi-view-dashboard menu-icon"></i>
              <span class="menu-title">Tableau de bord</span>
            </a>
          </li> 
        
          {{-- @if(Auth::user()->status->name == "Administrateur Général")
            <li class="nav-item">
              <a class="nav-link" href="{{ route('session.index') }}">
                <i class="mdi mdi-calendar-multiple-check menu-icon"></i>
                <span class="menu-title">Session</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('abonnement.index') }}">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Types d'abonnement</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('agency.index') }}">
                <i class="mdi mdi-map-marker menu-icon"></i>
                <span class="menu-title">Agences</span>
              </a>
            </li>
          @elseif(Auth::user()->status->name == "Responsable Agence")
            <li class="nav-item">
              <a class="nav-link" href="{{ route('compteur.index') }}">
                <i class="mdi mdi-image-filter-center-focus-weak menu-icon"></i>
                <span class="menu-title">Compteurs</span>
              </a>
            </li>
          @else 
            <li class="nav-item">
              <a class="nav-link" href="{{ route('facture.index') }}">
                <i class="mdi mdi-file-document menu-icon"></i>
                <span class="menu-title">Factures</span>
              </a>
            </li> 
          @endif
          
          
          @if(Auth::user()->status->name == "Administrateur Général" || Auth::user()->status->name == "Responsable Agence")
            <li class="nav-item">
              <a class="nav-link" href="{{route('utilisateur.index')}}">
                <i class="mdi mdi-account-plus menu-icon"></i>
                <span class="menu-title">{!! Auth::user()->status->name=="Responsable Agence" ? "Collaborateur" : "Responsable" !!}</span>
              </a>
            </li> 

            @if (Auth::user()->status->name == "Administrateur Général" && Auth::user()->main)
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.index')}}">
                  <i class="mdi mdi-account-plus menu-icon"></i>
                  <span class="menu-title">Administrateur</span>
                </a>
              </li> 
            @endif

            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-chart-line menu-icon"></i>
              <span class="menu-title">Rapports/Analyses</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('report.index')}}">Par Zone</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('report.entity')}}">Par Entités</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('report.department')}}">Par Département</a></li>
                @if(Auth::user()->status->name == "Administrateur Général") <li class="nav-item"> <a class="nav-link" href="{{route('report.globaldepartment')}}">Global/Département</a></li> @endif
                @if(Auth::user()->status->name == "Administrateur Général") <li class="nav-item"> <a class="nav-link" href="{{route('report.globalannuel')}}">Global/Année</a></li> @endif
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('history.index') }}">
              <i class="mdi mdi-history menu-icon"></i>
              <span class="menu-title">Historique</span>
            </a>
          </li> 

          @endif --}}

        </ul>
      </nav>