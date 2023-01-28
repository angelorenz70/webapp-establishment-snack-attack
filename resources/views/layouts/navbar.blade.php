
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #370617; padding-bottom: 4px; padding-top: 4px"  id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"> <img style = "height:70px; width:100px" src="{{ url('assets-homepage/assets/img/logos/logo.png') }}" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                @if (url()->current() == url('\n'))
                    <li class="nav-item"><a class="nav-link" href="#announcement">Announcement</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Owner</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-warning" href="{{ url('/login') }}">Login</a></li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#announcement">Announcement</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#portfolio">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#team">Owner</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-warning" href="{{ url('/login') }}">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>