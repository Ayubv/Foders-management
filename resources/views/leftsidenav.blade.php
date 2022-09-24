<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
@if(Auth::user()->role_type =='admin' && Auth::user()->status ==1)


                <a class="nav-link" href="{{url('dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                {{-- Foders --}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-snowflake"></i></div>
                    Foders
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('foders/index')}}">Show Foders</a>
                        <a class="nav-link" href="{{url('foders/create')}}">Add Foders</a>
                    </nav>
                </div>
                 {{-- Foders end --}}
                
                   {{-- Cows --}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#CowcollapseLayouts" aria-expanded="false" aria-controls="CowcollapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-cow"></i></div>
                    Cows
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="CowcollapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('cows/index')}}">Show Cows</a>
                        <a class="nav-link" href="{{url('cows/create')}}">Add Cows</a>
                    </nav>
                </div>
                 {{-- Cows end --}}
                   {{-- Admin --}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#admincollapseLayouts" aria-expanded="false" aria-controls="CowcollapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-cow"></i></div>
                    Admin
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="admincollapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('users/index')}}">Approve</a>
                       
                    </nav>
                </div>
                 {{-- Admin end --}}



             @endif
             @if(Auth::user()->role_type =='user' && Auth::user()->status ==1)


                <a class="nav-link" href="{{url('dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                {{-- Foders --}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-snowflake"></i></div>
                    Foders
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('foders/index')}}">Show Foders</a>
                        <a class="nav-link" href="{{url('foders/create')}}">Add Foders</a>
                    </nav>
                </div>
                 {{-- Foders end --}}
                
                   {{-- Cows --}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#CowcollapseLayouts" aria-expanded="false" aria-controls="CowcollapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-cow"></i></div>
                    Cows
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="CowcollapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('cows/index')}}">Show Cows</a>
                        <a class="nav-link" href="{{url('cows/create')}}">Add Cows</a>
                    </nav>
                </div>
                 {{-- Cows end --}}
                 


             @endif
            </div><!-- nav end-->
        </div>
        
    </nav>
</div>


