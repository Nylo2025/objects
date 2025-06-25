@extends('layouts.base')

@section('css')
@endsection

@section('content')

<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top admin-nav">
    <div class="container">
        <a class="navbar-brand me-lg-3 me-auto" href="/">
            <img src="images/logo-dark.png" height="22" class="d-inline-block align-middle" alt="" />
        </a>

        <a href="#" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content4" aria-controls="topnav-menu-content4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fs-16 align-middle"></span>
        </a>

        <div class="collapse navbar-collapse" id="topnav-menu-content4">
            <ul class="navbar-nav mx-auto nav-custom">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('any', 'admin-dashboard')}}">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-gauge fs-20 flex-shrink-0 me-2 align-middle lh-1 text-primary"></i>
                            <span class="flex-grow-1">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-folder fs-20 flex-shrink-0 me-2 align-middle lh-1 text-primary"></i>
                            <span class="flex-grow-1">Projects</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-chart-donut-variant fs-20 flex-shrink-0 me-2 align-middle lh-1 text-primary"></i>
                            <span class="flex-grow-1">Tasks</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-chart-tree fs-20 flex-shrink-0 me-2 align-middle lh-1 text-primary"></i>
                            <span class="flex-grow-1">Reports</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('any', 'ui-component')}}">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-compass-rose fs-20 flex-shrink-0 me-2 align-middle lh-1 text-primary"></i>
                            <span class="flex-grow-1">Component</span>
                        </div>
                    </a>
                </li>
            </ul>

            <ul class="d-none d-lg-flex navbar-nav align-items-lg-center mt-4 mt-lg-0">
                <!-- notification start -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="notifications" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-grid fs-22 text-primary"></i>
                    </a>
                    <div class="dropdown-menu dropdown-lg dropdown-menu-end" aria-labelledby="notifications">
                        <div class="p-2">
                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="images/brands/github.png" alt="Github">
                                        <span>GitHub</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="images/brands/bitbucket.png" alt="bitbucket">
                                        <span>Bitbucket</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="images/brands/dropbox.png" alt="dropbox">
                                        <span>Dropbox</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="images/brands/slack.png" alt="slack">
                                        <span>Slack</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="images/brands/dribbble.png" alt="dribbble">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="images/brands/behance.png" alt="Behance">
                                        <span>Behance</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- view all start -->
                        <!-- <a href="#" class="mt-2 text-center bg-light fs-13 btn btn-light btn-sm d-block">View All</a> -->
                        <!-- view all end -->
                    </div>
                </li>
                <!-- notification end -->

                <!-- profile dropdown start -->
                <li class="nav-item dropdown">
                    <a class="nav-link py-0" href="#" id="user" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="images/users/user-1.jpg" class="avatar avatar-xs rounded-circle me-2" alt="" />
                            </div>
                            <div class="flex-grow-1 ms-1 lh-base">
                                <span class="fw-semibold fs-13 d-block line-height-normal">Jesica B</span>
                                <span class="text-muted fs-13">Admin</span>
                            </div>
                        </div>
                    </a>

                    <div class="dropdown-menu p-2 dropdown-menu-end" aria-labelledby="user">
                        <!-- item start -->
                        <a class="dropdown-item p-2" href="#">
                            <i class="mdi mdi-account-outline fs-20 lh-1 align-middle me-1"></i>
                            Profile
                        </a>
                        <!-- item end -->

                        <!-- item start -->
                        <a class="dropdown-item p-2" href="#">
                            <i class="mdi mdi-cog-outline fs-20 lh-1 align-middle me-1"></i>
                            Settings
                        </a>
                        <!-- item end -->

                        <!-- item start -->
                        <a class="dropdown-item p-2" href="#">
                            <i class="mdi mdi-microphone fs-20 lh-1 align-middle me-1"></i>
                            Support
                        </a>
                        <!-- item end -->

                        <div class="dropdown-divider"></div>

                        <!-- item start -->
                        <a class="dropdown-item p-2" href="#">
                            <i class="mdi mdi-lock-open-outline fs-20 lh-1 align-middle me-1"></i>
                            Sign Out
                        </a>
                        <!-- item end -->
                    </div>
                </li>
                <!-- profile dropdown end -->
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar end -->

<!-- page-content start -->
<section class="position-relative overflow-hidden bg-gradient2 py-3 px-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h5 class="mb-0">Ui Components</h5>
                    <p class="mt-1 fw-medium">Welcome to Appexy!</p>
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-1">Alerts</h5>
                        <p class="mb-0">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages</p>
                    </div>
                    <div class="card-body">
                        <h5 class="">Default Aleart</h5>
                        <div role="alert" class="alert alert-primary alert-dismissible">
                            This is a primary alert—check it out!
                        </div>
                        <div role="alert" class="alert alert-secondary alert-dismissible">
                            This is a secondary alert—check it out!
                        </div>
                        <div role="alert" class="alert alert-success alert-dismissible">
                            This is a success alert—check it out!
                        </div>
                        <div role="alert" class="alert alert-danger alert-dismissible">
                            This is a danger alert—check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div role="alert" class="alert alert-warning alert-dismissible">
                            This is a warning alert—check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div role="alert" class="alert alert-info alert-dismissible">
                            This is a info alert—check it out!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <h5 class="">Outline Aleart</h5>
                        <div role="alert" class="alert text-primary bg-white border alert-dismissible">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-primary-subtle text-primary align-self-center me-3">Info</span>
                                <div class="w-100">You should select the desired categories while creating listing</div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div role="alert" class="alert text-success bg-white border alert-dismissible">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-success-subtle text-success align-self-center me-3">Success</span>
                                <div class="w-100">Your booking is confirmed by <a href="" class="text-success alert-link">Mr. Shreyan</a></div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div role="alert" class="alert text-danger bg-white border alert-dismissible">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-danger-subtle text-danger align-self-center me-3">Ohh no!</span>
                                <div class="w-100">Please check the input you have specified</div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div role="alert" class="alert text-warning bg-white border alert-dismissible">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-warning-subtle text-warning align-self-center me-3">Warning!</span>
                                <div class="w-100">The number of tickets you have selected might not get confirmed</div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div role="alert" class="alert text-info bg-white border alert-dismissible">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-info-subtle text-info align-self-center me-3">Info</span>
                                <div class="w-100">You might want to book return flight to save 25% on overall booking amount</div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div><!-- end col-12 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-1">Accordions</h5>
                        <p class="mb-0">Toggle the visibility of content across your project with a few classes and our JavaScript plugins.</p>
                    </div>
                    <div class="card-body">
                        <div class="accordion custom-accordionwitharrow mt-3" id="accordionExample">
                            <div class="card mb-1 shadow-none border">
                                <a href="" class="text-dark" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="card-header d-flex justify-content-between" id="headingOne">
                                        <h5 class="my-1">What is Lorem Ipsum?</h5>
                                        <i class="mdi mdi-chevron-down ms-auto fs-20"></i>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="card-body text-muted pt-1">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                        terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                        skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                        single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                        keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                        occaecat craft beer farm-to-table, raw denim aesthetic synth
                                        nesciunt you probably haven't heard of them accusamus labore
                                        sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1 shadow-none border">
                                <a href="" class="text-dark collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="card-header d-flex justify-content-between" id="headingTwo">
                                        <h5 class="my-1">Why do we use it?</h5>
                                        <i class="mdi mdi-chevron-down ms-auto fs-20"></i>
                                    </div>
                                </a>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="card-body text-muted pt-1">
                                        Anim pariatur cliche reprehenderit,
                                        enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                        moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                        butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                        denim aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.</div>
                                </div>
                            </div>
                            <div class="card mb-0 shadow-none border">
                                <a href="" class="text-dark collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="card-header d-flex justify-content-between" id="headingThree">
                                        <h5 class="my-1">Where does it come from?</h5>
                                        <i class="mdi mdi-chevron-down ms-auto fs-20"></i>
                                    </div>
                                </a>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="card-body text-muted pt-1">
                                        Anim pariatur cliche reprehenderit,
                                        enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                                        moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                        aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                        butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                        denim aesthetic synth nesciunt you probably haven't heard of them
                                        accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col-12 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-1">Badge</h5>
                        <p class="mb-0">Badges scale to match the size of the immediate parent element by using relative font sizing and em units.</p>
                    </div>
                    <div class="card-body">
                        <h1>Example heading <span class="badge bg-secondary">New</span></h1>
                        <h2>Example heading <span class="badge bg-secondary">New</span></h2>
                        <h3>Example heading <span class="badge bg-secondary">New</span></h3>
                        <h4>Example heading <span class="badge bg-secondary">New</span></h4>
                        <h5>Example heading <span class="badge bg-secondary">New</span></h5>
                        <h6>Example heading <span class="badge bg-secondary">New</span></h6>


                        <p class="mt-4">Badges can be used as part of links or buttons to provide a counter.</p>
                        <button type="button" class="btn btn-primary">
                            Notifications <span class="badge bg-light text-dark">4</span>
                        </button>

                        <p class="mt-4">
                            Add any of the below mentioned modifier classes to change the appearance of a badge.
                        </p>

                        <span class="badge bg-primary">Primary</span>
                        <span class="badge bg-secondary">Secondary</span>
                        <span class="badge bg-success">Success</span>
                        <span class="badge bg-danger">Danger</span>
                        <span class="badge bg-warning">Warning</span>
                        <span class="badge bg-info">Info</span>
                        <span class="badge bg-light text-dark">Light</span>
                        <span class="badge bg-dark">Dark</span>

                        <p class="mt-4">
                            Use the <code>.rounded-pill</code> modifier class to make badges more
                            rounded (with a larger border-radius and additional horizontal padding).
                        </p>
                        <span class="badge bg-primary rounded-pill">Pill</span>
                        <span class="badge bg-primary rounded-pill badge-md">Badge-md</span>
                        <span class="badge bg-primary rounded-pill badge-lg">Badge-lg</span>

                        <p class="mt-4">
                            Use the <code>.badge .bg-{color}-subtle</code> modifier class to make badges soft</p>
                        <span class="badge bg-primary-subtle text-primary">Primary</span>
                        <span class="badge bg-secondary-subtle text-secondary">Secondary</span>
                        <span class="badge bg-success-subtle text-success">Success</span>
                        <span class="badge bg-danger-subtle text-danger">Danger</span>
                        <span class="badge bg-warning-subtle text-warning">Warning</span>
                        <span class="badge bg-info-subtle text-info">Info</span>
                        <span class="badge bg-dark-subtle text-dark">Dark</span>
                    </div>
                </div>
            </div><!-- end col-12 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-1">Breadcrumb</h5>
                        <p class="mb-0">Indicate the current page's location within a navigational hierarchy that automatically adds separators via CSS.</p>
                    </div>
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-light p-3">
                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-light p-3">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-light p-3">
                                <li class="breadcrumb-item">
                                    <a href="#"><i class="mdi mdi-home fs-22 align-middle lh-1"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div><!-- end col-12 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Buttons</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <h5 class="card-title mb-0"></h5>
                            <p class="sub-header">
                                Use the button classes on an <code>&lt;a&gt;</code>,
                                <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
                            </p>

                            <div class="button-list">
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-primary">Primary</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-secondary">Secondary</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-success">Success</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-danger">Danger</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-warning">Warning</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-info">Info</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-dark">Dark</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-link">Link</button>
                            </div>

                            <p class="sub-header pt-2">
                                In need of a button, but not the hefty background colors they bring? Replace the
                                default modifier classes with the <code>.btn-outline-*</code> ones to remove all
                                background images and colors on any button.
                            </p>

                            <div class="button-list">
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-outline-primary">Primary</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-outline-secondary">Secondary</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-outline-success">Success</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-outline-danger">Danger</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-outline-warning">Warning</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-outline-info">Info</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-outline-dark">Dark</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-outline-link">Link</button>
                            </div>

                            <p class="sub-header pt-2">
                                Add a class <code>.btn-rounded</code> with the default modifier classes to have rounded edges.
                            </p>

                            <div class="button-list mt-2">
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-primary rounded-pill">Primary</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-secondary rounded-pill">Secondary</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-success rounded-pill">Success</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-danger rounded-pill">Danger</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-warning rounded-pill">Warning</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-info rounded-pill">Info</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-dark rounded-pill">Dark</button>
                                <button type="button" class="me-2 mb-2 mb-xl-0 btn btn-link rounded-pill">Link</button>
                            </div>

                            <p class="sub-header pt-2">
                                Fancy larger or smaller buttons? Add <code>.btn-lg</code> or
                                <code>.btn-sm</code> for additional sizes.
                            </p>
                            <div class="button-list">
                                <button type="button" class="btn mb-2 mb-sm-0 btn-primary btn-lg me-2">Button Large</button>
                                <button type="button" class="btn mb-2 mb-sm-0 btn-primary me-2">Button Regular</button>
                                <button type="button" class="btn mb-2 mb-sm-0 btn-primary btn-sm">Button Small</button>
                            </div>

                            <p class="sub-header pt-2">Buttons with icon - variations</p>
                            <div class="button-list">
                                <button type="button" class="me-2 mb-2 mb-sm-0 btn btn-primary">
                                    <i class="mdi mdi-play fs-22 me-1"></i>
                                </button>
                                <button type="button" class="me-2 mb-2 mb-sm-0 btn btn-primary">
                                    Button with icon on right <i class="mdi mdi-play fs-22 ms-1"></i>
                                </button>

                                <button type="button" class="me-2 mb-2 mb-sm-0 btn btn-primary btn-icon d-inline-flex">
                                    <i class="mdi mdi-play fs-22"></i>
                                </button>

                                <button type="button" class="btn btn-primary btn-rounded-circle btn-icon d-inline-flex">
                                    <i class="mdi mdi-play fs-22"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col-12 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Card</h5>
                        <p class="mb-0"> Bootstrap's cards provide a flexible and extensible content container with multiple variants and options. Check out <a href="https://getbootstrap.com/docs/4.4/components/card/">Bootstrap's Doc</a> for more examples.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Simple card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="images/counter-bg.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text text-muted">
                                            Some quick example text to build on the card title and make up the bulk of the card's content.
                                        </p>
                                        <a href="javascript:void(0);" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-md-5">
                                            <img src="images/counter-bg.jpg" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title mb-0">Card title</h5>
                                                <p class="card-text text-muted">
                                                    This is a wider card with supporting text lead-in to additional content.
                                                </p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title fs-16">Card title</h5>
                                                <p class="card-text text-muted">This is a wider card with supporting text lead-in to additional content.</p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <img src="images/counter-bg.jpg" class="card-img" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div><!-- end col-12 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Carousel</h5>
                        <p class="mb-0"> A slideshow component for cycling through elements—images or slides of text—like a carousel.</p>
                    </div>
                    <div class="card-body">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/photos/1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/photos/2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/photos/3.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="card-header border-top">
                        <h5 class="card-title mb-0">Carousel with Captions</h5>
                        <p class="mb-0">You can add captions to your slides with the <code>.carousel-caption</code> element within any <code>.carousel-item</code>. They can be easily hidden on smaller viewports, as shown below, with optional <a href="https://getbootstrap.com/">Bootstrap utilities</a>. We hide them initially with <code>.d-none</code> and bring them back on medium-sized devices with <code>.d-md-block</code>.</p>
                    </div>
                    <div class="card-body">
                        <div id="carouselExampleCaptions" class="carousel carousel-dark slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/photos/1.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/photos/2.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/photos/3.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div><!-- end col-12 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Dropdowns</h5>
                        <p class="mb-0">Toggle contextual overlays for displaying lists of links and more with the Bootstrap dropdown plugin.</p>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-1 mb-2">
                            <div class="dropdown mb-sm-0">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="btn-group dropdown">
                                <button type="button" class="btn btn-secondary">Split Button Dropdown</button>
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent"></button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                        <p class="">Dropdown menu position variations</p>
                        <div class="d-flex flex-wrap gap-1 mb-2">
                            <div class="dropdown dropstart">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Left Align
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class="dropdown dropend">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Right Align
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class="dropdown dropup">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Right Align
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col-12 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Form Elements</h5>
                        <p class="mb-0">Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="default-1">Text Input</label>
                                    <input type="text" class="form-control" id="default-1" placeholder="A text input">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="default-5">Password Input</label>
                                    <input type="password" class="form-control" id="default-5" placeholder="A password input" value="12345678">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="default-textarea">Textarea</label>
                                    <textarea class="form-control" id="default-textarea" rows="5">text are content goes here...</textarea>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="default-3">Default Select</label>
                                    <select class="form-select" id="default-3">
                                        <option value="default_option">Default Option</option>
                                        <option value="option_select_name">Option select name</option>
                                        <option value="option_select_name">Option select name</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="default-2">File Upload</label>
                                    <div class="">
                                        <label class="form-label" for="customFile">Choose file</label>
                                        <input type="file" multiple="" class="form-control" id="customFile">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="default-4">Default Select Multiple</label>
                                <select class="form-select" id="default-4" multiple="">
                                    <option value="option_select0">Default Option</option>
                                    <option value="option_select1">Option select name</option>
                                    <option value="option_select2">Option select name</option>
                                    <option value="option_select2">Option select name</option>
                                    <option value="option_select2">Option select name</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label" for="default7">Input with icon</label>
                                <div class="input-group">
                                    <input type="text" id="default7" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                    <span class="input-group-text mdi mdi-magnify"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="default8">Input with hint text</label>
                                    <div class="input-group">
                                        <input type="text" id="default8" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                        <span class="input-group-text">USD</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="sub-header pt-2">
                            Set heights using classes like <code>.form-control-lg</code> and
                            <code>.form-control-sm</code>.
                        </p>
                        <div class="row">
                            <div class="col-md-4 mb-2 mb-md-0">
                                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                            </div>
                            <div class="col-md-4 mb-2 mb-md-0">
                                <input class="form-control" type="text" placeholder="Default input">
                            </div>
                            <div class="col-md-4 mb-2 mb-md-0">
                                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                            </div>
                        </div>

                        <p class="sub-header pt-4">
                            Custom controls including Checkboxes, Radios, Select, Range, etc.
                        </p>

                        <div class="row">
                            <div class="col-md-6 mb-2 mb-md-0">
                                <div class="form-check">
                                    <input type="checkbox" id="customcheck1" name="customRadioInline1" class="form-check-input">
                                    <label class="form-check-label" for="customcheck1">Check this custom checkbox</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="customcheck2" name="customRadioInline1" class="form-check-input">
                                    <label class="form-check-label" for="customcheck2">Check this custom checkbox 2</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="form-check-input">
                                    <label class="form-check-label" for="customRadioInline1">Toggle this custom radio</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="form-check-input">
                                    <label class="form-check-label" for="customRadioInline2">Or toggle
                                        this other custom radio</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3 align-items-center">
                            <div class="col-md-6 mb-2 mb-md-0">
                                <select class="form-select" id="form-select">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="range" class="form-range" id="customRange1">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col-12 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Nav Tabs</h5>
                        <p class="mb-0">Takes the basic nav and adds the <code>.nav-tabs</code> class to generate a tabbed interface.</p>
                    </div>
                    <div class="card-body">
                        <div class="row row-cols-lg-2">
                            <div class="">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <span class="d-block d-sm-none"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home icon icon-xxs">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg></span>
                                            <span class="d-none d-sm-block">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                            <span class="d-block d-sm-none"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user icon icon-xxs">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg></span>
                                            <span class="d-none d-sm-block">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#messages" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <span class="d-block d-sm-none"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail icon icon-xxs">
                                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg></span>
                                            <span class="d-none d-sm-block">Messages</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content p-3 text-muted">
                                    <div class="tab-pane" id="home">
                                        <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate
                                            eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                            justo. Nullam dictum felis eu pede mollis pretium. Integer
                                            tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                                            eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                                            eleifend ac, enim.</p>
                                    </div>
                                    <div class="tab-pane show active" id="profile">
                                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                            enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                            dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus.
                                            Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean
                                            leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p class="mb-0">Vakal text here dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                            penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                                            quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                                            consequat massa quis enim.</p>
                                    </div>
                                    <div class="tab-pane" id="messages">
                                        <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate
                                            eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                            justo. Nullam dictum felis eu pede mollis pretium. Integer
                                            tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                                            eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                                            eleifend ac, enim.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <ul class="nav nav-pills navtab-bg nav-justified p-1">
                                    <li class="nav-item">
                                        <a href="#home1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <span class="d-block d-sm-none"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home icon icon-xxs">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg></span>
                                            <span class="d-none d-sm-block">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile1" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                            <span class="d-block d-sm-none"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user icon icon-xxs">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg></span>
                                            <span class="d-none d-sm-block">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#messages1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                            <span class="d-block d-sm-none"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail icon icon-xxs">
                                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg></span>
                                            <span class="d-none d-sm-block">Messages</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content text-muted">
                                    <div class="tab-pane" id="home1">
                                        <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate
                                            eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                            justo. Nullam dictum felis eu pede mollis pretium. Integer
                                            tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                                            eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                                            eleifend ac, enim.</p>
                                    </div>
                                    <div class="tab-pane show active" id="profile1">
                                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                            enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                            dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus.
                                            Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean
                                            leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p class="mb-0">Vakal text here dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                            penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                                            quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                                            consequat massa quis enim.</p>
                                    </div>
                                    <div class="tab-pane" id="messages1">
                                        <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                            magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                            quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate
                                            eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                            justo. Nullam dictum felis eu pede mollis pretium. Integer
                                            tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                                            eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                                            eleifend ac, enim.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col-12 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Modals</h5>
                        <p class="mb-0">A modal plugin allows to add dialogs to your site for lightboxes, user notifications, or completely custom content, etc.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary mb-2 mb-sm-0" data-bs-toggle="modal" data-bs-target="#myModal">Standard modal</button>

                                <!-- Extra large modal -->
                                <button type="button" class="btn btn-secondary ms-2" data-bs-toggle="modal" data-bs-target="#bs-example-modal-xl">Extra large</button>

                                <!-- Large modal -->
                                <button type="button" class="btn btn-success ms-0 ms-sm-2" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Large</button>

                                <!-- Small modal -->
                                <button type="button" class="btn btn-info ms-2" data-bs-toggle="modal" data-bs-target="#bs-example-modal-sm">Small</button>
                            </div>
                            <!-- Col End -->
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <p class="sub-header">
                                    Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center the modal.
                                </p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#centermodal">Vertically center</button>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <p class="sub-header">
                                    You can also create a scrollable modal that allows scroll the modal body by adding
                                    <code>.modal-dialog-scrollable</code> to <code>.modal-dialog</code>.
                                </p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">Scrollable</button>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <p class="sub-header">
                                    A modal can be used to show contexual messages including success, error, warning, information messages, etc.
                                </p>
                                <button type="button" class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#modal-success">Success</button>
                                <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#modal-error">Error</button>
                            </div>
                        </div>

                        <div class="card-body">
                            <!-- sample modal content -->
                            <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Add more storage</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>You are out of storage space.</h5>
                                            <p>To upload more data, please add additional storage space.</p>
                                            <form class="d-flex text-align-center">
                                                <label class="my-auto me-2" for="selectSize">Select Size: </label>
                                                <select class="form-select my-1 me-sm-2 w-50" id="selectSize">
                                                    <option selected="">Choose...</option>
                                                    <option value="1">1 GB</option>
                                                    <option value="10">10 GB</option>
                                                    <option value="50">50 GB</option>
                                                    <option value="100">100 GB</option>
                                                    <option value="500">500 GB</option>
                                                    <option value="1000">1 TB</option>
                                                </select>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Upgrade</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                            <div class="modal fade" id="bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myExtraLargeModalLabel">Extra large modal</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->

                            <!--  Modal content for the above example -->
                            <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                            <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                            <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myCenterModalLabel">Center modal</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>Overflowing text to show scroll behavior</h5>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                risus, porta ac consectetur ac, vestibulum at eros.</p>
                                            <p class="mb-0">Praesent commodo cursus magna, vel scelerisque nisl
                                                consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
                                                faucibus dolor auctor.</p>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                            <!-- Long Content Scroll Modal -->
                            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalScrollableTitle">Modal title
                                            </h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                risus, porta ac consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                                dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                risus, porta ac consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                                dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                risus, porta ac consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                                dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                risus, porta ac consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                                dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                risus, porta ac consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                                dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                                risus, porta ac consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                                                dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->

                            <div class="modal fade" id="modal-success" tabindex="-1" role="dialog" aria-labelledby="modal-successLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom-0 pb-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center pt-0">
                                            <span class="icon icon-xl text-success">
                                                <!--?xml version="1.0" encoding="UTF-8"?-->
                                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                                    <title>Stockholm-icons / Communication / Mail-attachment</title>
                                                    <desc>Created with Sketch.</desc>
                                                    <g id="Stockholm-icons-/-Communication-/-Mail-attachment" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                        <path d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z" id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                                                        <path d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z" id="Combined-Shape" fill="#335EEA"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <h4 class="text-success mt-0">Awesome!</h4>
                                            <p class="mx-auto text-muted">We receieved your application and will process it shortly.</p>
                                            <div class="mt-4">
                                                <a href="#" class="btn btn-light btn-sm" data-bs-dismiss="modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left icon-xxs me-1">
                                                        <line x1="19" y1="12" x2="5" y2="12"></line>
                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                    </svg>Back
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <div class="modal fade" id="modal-error" tabindex="-1" role="dialog" aria-labelledby="modal-errorLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header border-bottom-0 pb-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center pt-0">
                                            <span class="icon icon-xl text-danger">
                                                <!--?xml version="1.0" encoding="UTF-8"?-->
                                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                                    <title>Stockholm-icons / General / Sad</title>
                                                    <desc>Created with Sketch.</desc>
                                                    <g id="Stockholm-icons-/-General-/-Sad" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                        <rect id="Combined-Shape" fill="#335EEA" opacity="0.3" x="2" y="2" width="20" height="20" rx="10"></rect>
                                                        <path d="M6.16794971,14.5547002 C5.86159725,14.0951715 5.98577112,13.4743022 6.4452998,13.1679497 C6.90482849,12.8615972 7.52569784,12.9857711 7.83205029,13.4452998 C8.9890854,15.1808525 10.3543313,16 12,16 C13.6456687,16 15.0109146,15.1808525 16.1679497,13.4452998 C16.4743022,12.9857711 17.0951715,12.8615972 17.5547002,13.1679497 C18.0142289,13.4743022 18.1384028,14.0951715 17.8320503,14.5547002 C16.3224187,16.8191475 14.3543313,18 12,18 C9.64566871,18 7.67758127,16.8191475 6.16794971,14.5547002 Z" id="Path-56" fill="#335EEA" transform="translate(12.000000, 15.499947) scale(1, -1) translate(-12.000000, -15.499947) "></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <h4 class="text-danger mt-0">Something went wrong.</h4>
                                            <p class="mx-auto text-muted mt-2">
                                                We are unable to process your request at the moment. Our appologies, try back in about 5 minutes.
                                            </p>
                                            <div class="mt-4">
                                                <a href="#" class="btn btn-light btn-sm" data-bs-dismiss="modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left icon-xxs me-1">
                                                        <line x1="19" y1="12" x2="5" y2="12"></line>
                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                    </svg>Back
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                    </div>
                </div>
            </div><!-- end col-12 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Progress</h5>
                        <p class="mb-0">Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels</p>
                    </div>
                    <div class="card-body">
                        <div class="">


                            <div>
                                <div class="progress mb-3">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                            </div>



                            <div class="mt-3">
                                <p class="sub-header">
                                    Add <code>.progress-bar-striped</code> to any <code>.progress-bar</code> to apply a stripe via CSS gradient over the progress bar's background color.
                                    Additionally you can add <code>.progress-bar-animated</code> to make it animated as well.
                                </p>

                                <div>
                                    <div class="progress mb-3">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-3">
                                <p class="sub-header">
                                    Set a height value on the <code>.progress</code>. The inner <code>.progress-bar</code> will automatically resize accordingly.
                                </p>

                                <div>
                                    <div class="progress mb-3" style="height: 2px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress" style="height: 16px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- end col-12 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Pagination</h5>
                        <p class="mb-0">Examples for showing pagination to indicate a series of related content exists across multiple pages</p>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>

                            <p class="sub-header mt-4">
                                You can use icon instead of showing text label for previous and next actions
                            </p>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                            <p class="sub-header mt-4">
                                Just add class modifier <code>.pagination-rounded</code> to <code>.pagination</code> in order to have rounded page action link
                            </p>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-rounded">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div><!-- end col-12 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Spinners</h5>
                        <p class="mb-0">Indicate the loading state of a component or page with Bootstrap spinners, built entirely with HTML, CSS, and no JavaScript.</p>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="spinner-border text-primary m-2" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-secondary m-2" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-success m-2" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-danger m-2" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-warning m-2" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-border text-info m-2" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>

                        <p class="sub-header mt-4">
                            If you don't fancy a border spinner, switch to the grow spinner. While it doesn't technically spin, it does repeatedly grow!
                        </p>

                        <div>
                            <div class="spinner-grow text-primary m-2" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-secondary m-2" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-success m-2" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-danger m-2" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-warning m-2" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-info m-2" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col-12 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Offcanvas</h5>
                        <p class="mb-0">Use the buttons below to show and hide an offcanvas element via JavaScript that toggles the <code>.show</code> class on an element with the <code>.offcanvas</code> class.</p>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <button class="btn btn-primary me-1 mb-2 mb-xl-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasExample">
                                Top Offcanvas
                            </button>
                            <button class="btn btn-primary me-1 mb-2 mb-xl-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasExample">
                                Bottom Offcanvas
                            </button>
                            <button class="btn btn-primary me-1 mb-2 mb-xl-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasExample">
                                Left Offcanvas
                            </button>
                            <button class="btn btn-primary me-1 mb-2 mb-xl-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasExample">
                                Right Offcanvas
                            </button>


                            <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div>Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.</div>
                                </div>
                            </div>
                            <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div>Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.</div>
                                </div>
                            </div>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div>Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.</div>
                                </div>
                            </div>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasLeft" aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div>Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col-12 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Tooltips</h5>
                        <p class="mb-0">Examples for adding custom Bootstrap tooltips with CSS and JavaScript using CSS3 for animations and data-attributes for local title storage.</p>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                Tooltip on top
                            </button>
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right">
                                Tooltip on right
                            </button>
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">
                                Tooltip on bottom
                            </button>
                            <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Tooltip on left">
                                Tooltip on left
                            </button>
                        </div>
                    </div>
                </div>
            </div><!-- end col-12 -->
        </div><!-- end row -->
    </div>
</section>
<!-- page-content end -->

<!-- footer start -->
<section class="py-4 position-relative border-top border-light-subtle">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <ul class="list-inline list-with-separator mb-0">
                    <li class="list-inline-item me-0"><a href="#">About</a></li>
                    <li class="list-inline-item me-0"><a href="#">Privacy</a></li>
                    <li class="list-inline-item me-0"><a href="#">Terms</a></li>
                    <li class="list-inline-item me-0"><a href="#">Developers</a></li>
                    <li class="list-inline-item me-0"><a href="#">Support</a></li>
                    <li class="list-inline-item me-0"><a href="#">Careers <span class="align-middle badge bg-info-subtle text-info rounded-pill fw-normal fs-11 px-2 py-1">We're hiring</span></a></li>
                </ul>
            </div>
            <div class="col-md-auto text-md-end mt-2 mt-md-0">
                <p class="fs-14 mb-0">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Appexy. All rights reserved. Crafted by <a href="https://coderthemes.com/">Coderthemes</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- footer end -->

@endsection

@section('script')
@endsection