@include('page-parts.page-announcement')
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="margin-top: 40px"   id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">fast food business</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                @if (url()->current() == url('\n'))
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item btn btn-warning"><a class="nav-link" href="#login">Login</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#contact">Contact</a></li>
                    <li class="nav-item btn btn-warning"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>