<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion" style="background-color: #6A040F" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading" style="color: #FFBA08">Core</div>
                <a class="nav-link" href="{{ url('dashboard') }}" style="color: #fae0e4">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading" style="color: #FFBA08">Interface</div>
                <a class="nav-link collapsed" href="{{ url(' ') }}" target="_blank" style="color: #fae0e4" aria-expanded="false" aria-controls="pagesCollapseAuth">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-right-to-bracket"></i></div>
                    Homepage
                </a>
                <a class="nav-link collapsed" href="{{ url('dashboard-announcements') }}" style="color: #fae0e4" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-bullhorn"></i></div>
                    Announcements
                </a>
                @can('isAdmin')
                    <a class="nav-link collapsed" href="{{ url('dashboard-users') }}" style="color: #fae0e4" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                        Users
                    </a>
                @endcan
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small" style="color: #edf2f4">Logged in as:</div>
            @php
                    $user = Auth::user(); 
            @endphp
            <div style="color: #edf2f4">{{ $user->name }}</div>
        </div>
    </nav>
</div>