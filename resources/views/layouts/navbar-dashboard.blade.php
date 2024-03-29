<nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #370617">
    <!-- Navbar Brand-->
    <div class="container-fluid" style="position:relative; left:30px; object-fit: fill;">
        <a class="navbar-brand ps-3" href="{{ url('dashboard') }}" >
        <img style="width: 70px;height: 50px" src="{{ url('assets-homepage/assets/img/logos/logo.png') }}" alt="..." /></a>
    </div>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('profile.update') }}">Profile</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="text-decoration-none text-dark">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form></li>
            </ul>
        </li>
    </ul>
</nav>