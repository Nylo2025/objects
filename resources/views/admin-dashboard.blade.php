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
                    <a class="nav-link active" href="{{ route('any', 'admin-dashboard')}}">
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
                    <a class="nav-link" href="{{ route('any', 'ui-component')}}">
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

<section class="position-relative overflow-hidden bg-gradient2 py-3 px-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h5 class="mb-0">Hi Jesica</h5>
                    <p class="mt-1 fw-medium">Welcome to Appexy!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- profile widget star -->
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="d-flex">
                                    <img src="images/users/user-1.jpg" class="img-fluid avatar-sm rounded me-3" alt="..." />
                                    <div class="flex-grow-1">
                                        <h4 class="mb-1 mt-0 fs-16">Ms. Jesica Bronz</h4>
                                        <p class="text-muted pb-0 fs-14">Web & Graphic Designer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto text-end">
                                <div class="dropdown">
                                    <a class="btn-link text-muted" href="#" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-circle-edit-outline me-2"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-refresh me-2"></i>Refresh</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-trash-can-outline me-2"></i>Deactivate</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="list-inline py-3 border-bottom">
                            <li class="list-inline-item mb-sm-0 mb-2 me-sm-2">
                                <a href="#" class="text-muted fs-14"><i class="mdi mdi-email-outline fs-18 align-middle me-1"></i>Jesica@coderthemes.com</a>
                            </li>
                            <li class="list-inline-item mb-sm-0 mb-2">
                                <a href="#" class="text-muted fs-14"><i class="mdi mdi-phone-outline fs-18 align-middle me-2"></i>+00 123-456-789</a>
                            </li>
                        </ul>

                        <div class="row align-items-center pt-1">
                            <div class="col-md-6">
                                <p class="float-end mb-0">85%</p>
                                <h6 class="fw-medium my-0">Project Completion</h6>
                                <div class="progress mt-3" style="height: 6px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-sm-0 mt-4">
                                <p class="float-end mb-0">7.5</p>
                                <h6 class="fw-medium my-0">Overall Rating</h6>
                                <div class="progress mt-3" style="height: 6px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- profile widget end -->

            <!-- stats start -->
            <div class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm rounded bg-success-subtle text-success-emphasis me-3">
                                <span class="mdi mdi-checkbox-marked-circle-outline fs-5"></span>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="mt-0 mb-1">21</h3>
                                <p class="text-muted fs-16 mb-0">Tasks Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm rounded bg-info-subtle text-info-emphasis-emphasis me-3">
                                <i class="mdi mdi-circle-edit-outline fs-5"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="mt-0 mb-1">19</h3>
                                <p class="text-muted fs-16 mb-0">Tasks Inprogress</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- stats end -->

            <!-- revenue start -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h4 class="mb-3 mt-0 fs-16">Revenue</h4>
                            </div>
                            <div class="col-auto text-end">
                                <div class="dropdown">
                                    <a class="btn-link text-muted" href="#" role="button" id="dropdownMenuLink-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-2">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-circle-edit-outline me-2"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-refresh me-2"></i>Refresh</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="mb-3">$2,100.00</h5>
                        <p class="text-muted">Last Week</p>

                        <hr class="mb-1" />
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center mt-2">
                                    <div class="me-3 flex-shrink-0">
                                        <i class="text-success" data-feather="trending-up"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mt-0 mb-0">15%</h5>
                                        <p class="text-muted mb-0 fs-13">Prev Week</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center mt-2">
                                    <div class="me-3 flex-shrink-0">
                                        <i class="text-danger" data-feather="trending-down"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mt-0 mb-0">10%</h5>
                                        <p class="text-muted mb-0 fs-13">Prev Month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- revenue end -->
        </div>

        <!-- recent projects start -->
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col">
                        <h4 class="mb-3 mt-0 fs-20">Recent Projects</h4>
                    </div>
                    <div class="col-auto text-end">
                        <a href="#" class="fw-semibold text-primary fs-13 border-bottom border-primary">View All <i class="mdi mdi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="row my-2">
                    <!-- project start -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- action start -->
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="text-muted fs-13 fw-medium mb-0">Aug 09, 2020</p>
                                    </div>
                                    <div class="col-auto text-end">
                                        <div class="dropdown">
                                            <a class="btn-link text-muted" href="#" role="button" id="dropdownMenuLink-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-3">
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-eye me-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-circle-edit-outline me-2"></i>Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- action end -->

                                <div class="mt-3">
                                    <h5 class="mt-0 mb-1">
                                        <a href="">Shreyu - Design Updates</a>
                                    </h5>
                                    <span class="mb-1 badge bg-primary-subtle text-primary-emphasis">Designing</span>

                                    <p class="text-muted fs-14 mt-3">Update shreyu with modern and latest trends...</p>
                                </div>

                                <!-- progress -->
                                <div class="mt-4">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="mt-0">Progress</h6>
                                        </div>
                                        <div class="col text-end">
                                            <small class="fw-semibold">75%</small>
                                        </div>
                                    </div>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- progress end -->

                                <!-- assignment start -->
                                <div class="row mt-3">
                                    <div class="col">
                                        <div class="avatar-group">
                                            <a href="" class="avatar-group-item mb-0">
                                                <img src="images/users/user-1.jpg" alt="image" class="img-fluid avatar-sm rounded-circle img-thumbnail" />
                                            </a>
                                            <a href="" class="avatar-group-item mb-0">
                                                <img src="images/users/user-5.jpg" alt="image" class="img-fluid avatar-sm rounded-circle img-thumbnail" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- assignment end -->
                            </div>
                        </div>
                    </div>
                    <!-- project end -->

                    <!-- project start -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- action start -->
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="text-muted fs-13 fw-medium mb-0">Aug 10, 2020</p>
                                    </div>
                                    <div class="col-auto text-end">
                                        <div class="dropdown">
                                            <a class="btn-link text-muted" href="#" role="button" id="dropdownMenuLink-4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-4">
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-eye me-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-circle-edit-outline me-2"></i>Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- action end -->

                                <div class="mt-3">
                                    <h5 class="mt-0 mb-1"><a href="">Appexy v2.0</a></h5>
                                    <span class="badge bg-success-subtle text-success-emphasis mb-1">Planning</span>

                                    <p class="text-muted fs-14 mt-3">Plan new features and functionality for Appexy...</p>
                                </div>

                                <!-- progress -->
                                <div class="mt-4">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="mt-0">Progress</h6>
                                        </div>
                                        <div class="col text-end">
                                            <small class="fw-semibold">50%</small>
                                        </div>
                                    </div>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- progress end -->

                                <!-- assignment start -->
                                <div class="row mt-3">
                                    <div class="col">
                                        <div class="avatar-group">
                                            <a href="" class="avatar-group-item mb-0">
                                                <img src="images/users/user-3.jpg" alt="image" class="img-fluid avatar-sm rounded-circle img-thumbnail" />
                                            </a>
                                            <a href="" class="avatar-group-item mb-0">
                                                <img src="images/users/user-2.jpg" alt="image" class="img-fluid avatar-sm rounded rounded-circle img-thumbnail" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- assignment end -->
                            </div>
                        </div>
                    </div>
                    <!-- project end -->

                    <!-- project start -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- action start -->
                                <div class="row align-items-center">
                                    <div class="col">
                                        <p class="text-muted fs-13 fw-medium mb-0">Aug 11, 2020</p>
                                    </div>
                                    <div class="col-auto text-end">
                                        <div class="dropdown">
                                            <a class="btn-link text-muted" href="#"
                                                role="button" id="dropdownMenuLink-5" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuLink-5">
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-eye me-2"></i>View</a>
                                                <a class="dropdown-item" href="#"><i class="mdi mdi-circle-edit-outline me-2"></i>Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- action end -->

                                <div class="mt-3">
                                    <h5 class="mt-0 mb-1"><a href="">Hyper React v4.0</a></h5>
                                    <span class="badge bg-info-subtle text-info-emphasis mb-1">Development</span>

                                    <p class="text-muted fs-14 mt-3">Hyper React with modern and latest trends...</p>
                                </div>

                                <!-- progress -->
                                <div class="mt-4">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="mt-0">Progress</h6>
                                        </div>
                                        <div class="col text-end">
                                            <small class="fw-semibold">60%</small>
                                        </div>
                                    </div>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!-- progress end -->

                                <!-- assignment start -->
                                <div class="row mt-3">
                                    <div class="col">
                                        <div class="avatar-group">
                                            <a href="" class="avatar-group-item mb-0">
                                                <img src="images/users/user-4.jpg" alt="image" class="img-fluid avatar-sm rounded-circle img-thumbnail" />
                                            </a>
                                            <a href="" class="avatar-group-item mb-0">
                                                <img src="images/users/user-3.jpg" alt="image" class="img-fluid avatar-sm rounded-circle img-thumbnail" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- assignment end -->
                            </div>
                        </div>
                    </div>
                    <!-- project end -->
                </div>
            </div>
        </div>
        <!-- recent projects end -->

        <!-- recent projects start -->
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col">
                        <h4 class="mb-3 mt-0 fs-16">Tasks</h4>
                    </div>
                    <div class="col-auto text-end">
                        <a href="#" class="fw-semibold text-primary fs-13 border-bottom border-primary">View All <i class="mdi mdi-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <!-- task start -->
                <div class="row mb-2">
                    <div class="col">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="row align-items-center justify-content-sm-between">
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="task1">
                                            <label class="form-check-label" for="task1">
                                                Draft the new contract document for sales team
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-lg-3">
                                        <span class="badge bg-info-subtle text-info-emphasis rounded-pill">Today 10pm</span>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="list-inline text-sm-end mb-0" id="tooltip-container2">
                                            <li class="list-inline-item pe-3" id="tooltip-container2">
                                                <span class="fs-13 fw-medium" data-bs-toggle="tooltip" data-bs-container="#tooltip-container2" data-bs-placement="bottom" title="10 Subtasks are completed">
                                                    <i class="mdi mdi-format-list-bulleted text-primary fs-22 align-middle"></i>
                                                    3/7
                                                </span>
                                            </li>
                                            <li class="list-inline-item pe-3" id="tooltip-container4">
                                                <span class="fs-13 fw-medium" data-bs-toggle="tooltip" data-bs-container="#tooltip-container4" data-bs-container="#tooltip-container2" data-bs-placement="bottom" title="5 Comments">
                                                    <i class="mdi mdi-email-open text-primary fs-22 align-middle"></i>
                                                    21
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="badge bg-danger-subtle text-danger-emphasis p-1">High</span>
                                            </li>
                                        </ul>
                                    </div> <!-- end col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- task end -->

                <!-- task start -->
                <div class="row mb-2">
                    <div class="col">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="row align-items-center justify-content-sm-between">
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="task2">
                                            <label class="form-check-label" for="task2">
                                                iOS App home page design
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-lg-3">
                                        <span class="badge bg-info-subtle text-info-emphasis rounded-pill">Today 5pm</span>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="list-inline text-sm-end mb-0" id="tooltip-container2">
                                            <li class="list-inline-item pe-3" id="tooltip-container3">
                                                <span class="fs-13 fw-medium" data-bs-toggle="tooltip" data-bs-container="#tooltip-container3" data-bs-placement="bottom" title="10 Subtasks are completed">
                                                    <i class="mdi mdi-format-list-bulleted text-primary fs-22 align-middle"></i>
                                                    10/11
                                                </span>
                                            </li>
                                            <li class="list-inline-item pe-3" id="tooltip-container5">
                                                <span class="fs-13 fw-medium" data-bs-toggle="tooltip" data-bs-container="#tooltip-container5" data-bs-container="#tooltip-container2" data-bs-placement="bottom" title="5 Comments">
                                                    <i class="mdi mdi-email-open text-primary fs-22 align-middle"></i>
                                                    05
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="badge bg-warning-subtle text-warning-emphasis p-1">Medium</span>
                                            </li>
                                        </ul>
                                    </div> <!-- end col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- task end -->

                <!-- task start -->
                <div class="row mb-2">
                    <div class="col">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="row align-items-center justify-content-sm-between">
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="task3">
                                            <label class="form-check-label" for="task3">
                                                Enable analytics tracking
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-lg-3">
                                        <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill">Tomorrow 5pm</span>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="list-inline text-sm-end mb-0">
                                            <li class="list-inline-item pe-3" id="tooltip-container6">
                                                <span class="fs-13 fw-medium" data-bs-toggle="tooltip" data-bs-container="#tooltip-container6" data-bs-placement="bottom" title="5 Subtasks are completed">
                                                    <i class="mdi mdi-format-list-bulleted text-primary fs-22 align-middle"></i>
                                                    5/11
                                                </span>
                                            </li>
                                            <li class="list-inline-item pe-3" id="tooltip-container6">
                                                <span class="fs-13 fw-medium" data-bs-toggle="tooltip" data-bs-container="#tooltip-container5" data-bs-placement="bottom" title="7 Comments">
                                                    <i class="mdi mdi-email-open text-primary fs-22 align-middle"></i>
                                                    07
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="badge bg-warning-subtle text-warning-emphasis p-1">Medium</span>
                                            </li>
                                        </ul>
                                    </div> <!-- end col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- task end -->

                <!-- task start -->
                <div class="row mb-2">
                    <div class="col">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="row align-items-center justify-content-sm-between">
                                    <div class="col-lg-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="task4">
                                            <label class="form-check-label" for="task4">
                                                Kanban board design
                                            </label>
                                        </div> <!-- end checkbox -->
                                    </div> <!-- end col -->
                                    <div class="col-lg-3">
                                        <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill">Sep 11, 3pm</span>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="list-inline text-sm-end mb-0">
                                            <li class="list-inline-item pe-3" id="tooltip-container7">
                                                <span class="fs-13 fw-medium" data-bs-toggle="tooltip" data-bs-container="#tooltip-container7" data-bs-placement="bottom" title="0 Subtasks are completed">
                                                    <i class="mdi mdi-format-list-bulleted text-primary fs-22 align-middle"></i>
                                                    0/5
                                                </span>
                                            </li>
                                            <li class="list-inline-item pe-3" id="tooltip-container8">
                                                <span class="fs-13 fw-medium" data-bs-toggle="tooltip" data-bs-container="#tooltip-container8" data-bs-placement="bottom" title="3 Comments">
                                                    <i class="mdi mdi-email-open text-primary fs-22 align-middle"></i>
                                                    03
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="badge bg-success-subtle text-success-emphasis p-1">Low</span>
                                            </li>
                                        </ul>
                                    </div> <!-- end col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- task end -->

                <div class="row mb-3 mt-4">
                    <div class="col-12">
                        <div class="text-center">
                            <button class="btn btn-outline-primary btn-sm" type="button" style="border-style: dashed !important;">
                                <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true" style="border-style: dashed !important;"></span>
                                Load More
                            </button>
                        </div>
                    </div> <!-- end col-->
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <li class="list-inline-item me-0"><a href="#">Careers <span class="align-middle badge bg-info-subtle text-info-emphasis rounded-pill fw-normal fs-11 px-2 py-1">We're hiring</span></a></li>
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

@endsection

@section('script')
@endsection