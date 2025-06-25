@extends('layouts.base')

@section('css')
@endsection

@section('content')

<nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-dark sticky-dark" id="navbar-sticky">
    <div class="container">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="{{ route('any', 'index-1')}}">
            <img src="images/logo-dark.png" alt="" class="" />
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
                    <a href="#demo" class="nav-link">Demo</a>
                </li>
                <li class="nav-item">
                    <a href="#admin-demo" class="nav-link">Admin Demo</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-center">
                <li class="nav-item">
                    <a href="https://1.envato.market/appexy" target="_blank" class="btn btn-sm nav-btn"><i class="mdi mdi-cart-outline align-middle"></i> Buy Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="section bg-light" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="home-wrapper text-center text-lg-start">
                    <div class="text-tran-box">
                        <h1 class="text-transparent bg-light">Appexy - Landing & Admin Dashboard HTML Template</h1>
                    </div>
                    <p>Appexy is a fully responsive landing template built using the latest bootstrap framework. It’s designed for describing your app, agency or business.</p>

                    <a href="#demo" class="btn btn-sm btn-primary mt-4"><i class="mdi mdi-eye align-middle me-1"></i> Demo</a>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="bg-white p-2 shadow rounded-4 h-100 w-100">
                    <img src="images/demo/1.jpg" alt="" class="img-fluid rounded-3">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>

<section class="section px-lg-5" id="demo">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="title">Available Demos</h2>
                <!-- <p class="title-alt">Looks beautiful & ultra-sharp on Retina Screen Displays. Retina Icons, Fonts & all <br/> others graphics are optimized.</p> -->
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4 col-md-6">
                <div class="demo-box">
                    <a href="{{ route('any', 'index-1')}}" target="_blank">
                        <img src="images/demo/1.jpg" alt="demo-img" class="img-responsive">
                    </a>

                    <h4>Index 1</h4>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="demo-box">
                    <a href="{{ route('any', 'index-2')}}" target="_blank">
                        <img src="images/demo/2.jpg" alt="demo-img" class="img-responsive">
                    </a>

                    <h4>Index 2</h4>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="demo-box">
                    <a href="{{ route('any', 'index-3')}}" target="_blank">
                        <img src="images/demo/3.jpg" alt="demo-img" class="img-responsive">
                    </a>

                    <h4>Index 3</h4>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="demo-box">
                    <a href="{{ route('any', 'index-4')}}" target="_blank">
                        <img src="images/demo/4.jpg" alt="demo-img" class="img-responsive">
                    </a>

                    <h4>Index 4</h4>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="demo-box">
                    <a href="{{ route('any', 'index-5')}}" target="_blank">
                        <img src="images/demo/5.jpg" alt="demo-img" class="img-responsive">
                    </a>

                    <h4>Index 5</h4>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="demo-box">
                    <a href="{{ route('any', 'index-6')}}" target="_blank">
                        <img src="images/demo/6.jpg" alt="demo-img" class="img-responsive">
                    </a>

                    <h4>Index 6</h4>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="px-lg-5 pb-5 mb-5" id="admin-demo">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="title">Admin Demos</h2>
                <!-- <p class="title-alt">Looks beautiful & ultra-sharp on Retina Screen Displays. Retina Icons, Fonts & all <br/> others graphics are optimized.</p> -->
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-lg-4 col-md-6">
                <div class="demo-box">
                    <a href="{{ route('any', 'admin-dashboard')}}" target="_blank">
                        <img src="images/demo/7.png" alt="demo-img" class="img-responsive">
                    </a>

                    <h4>Admin Dashboard</h4>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="demo-box">
                    <a href="{{ route('any', 'ui-component')}}" target="_blank">
                        <img src="images/demo/8.png" alt="demo-img" class="img-responsive">
                    </a>

                    <h4>Ui Components</h4>
                </div>
            </div>
        </div>

    </div>
</section>


<div class="position-relative">
    <div class="shape overflow-hidden text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>

<footer class="bg-light footer-one">
    <div class="footer-one-alt">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <p class="mb-0 fs-14 copyright text-dark">©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Appexy. Design &amp; Develop by Coderthemes
                    </p>
                </div>
                <div class="col-sm-6">
                    <ul class="list-inline footer-social-one mb-0 float-end">
                        <li class="list-inline-item"><a href="https://www.facebook.com/coderthemes" target="_blank"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/coder_themes" target="_blank"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/coderthemes/" target="_blank"><i class="mdi mdi-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/" target="_blank"><i class="mdi mdi-github"></i></a></li>
                        <li class="list-inline-item"><a href="skype:coderthemes" target="_blank"><i class="mdi mdi-skype"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>

@endsection