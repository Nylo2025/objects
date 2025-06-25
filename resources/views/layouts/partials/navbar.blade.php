<nav class="navbar navbar-expand-lg fixed-top navbar-custom {{ ($isLight ?? true) ? 'navbar-light sticky-dark' : 'sticky-dark'}}" id="navbar-sticky">
    <div class="container">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="{{ route('any', 'index-1')}}">
            <img src="images/logo-dark.png" alt="" class="logo-dark" />
            <img src="images/logo-light.png" alt="" class="logo-light {{!$isLight ? 'd-none' : 'd-block'}}" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#features" class="nav-link">Features</a>
                </li>
                <li class="nav-item">
                    <a href="#screenshot" class="nav-link">Screenshot</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonial" class="nav-link">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a href="#pricing" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-center">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-sm nav-btn" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
