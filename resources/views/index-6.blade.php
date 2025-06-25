@extends('layouts.landing')

@section('css')
@endsection

@section('content')

@include('layouts.partials/navbar', ['isLight' => true ])

<section class="hero-6" id="home">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image:url('images/heros/hero-6-bg-1.jpg');">
                <div class="bg-overlay"></div>
                <div class="carousel-content text-center hero-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-8">
                                <div class="bg-soft-light text-light avatar avatar-xl rounded-circle mx-auto mb-4">
                                    <i class="mdi mdi-rocket-launch-outline fs-24"></i>
                                </div>
                                <h1 class="text-white display-4 fw-semibold mb-4">Integrate Salesforce with The Apps You Use.</h1>
                                <p class="text-white-50 mx-lg-5 mb-5">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atqued corrupti quos dolores et quas molestias excepturi sintoccaecati cupiditate.</p>
                                <a href="javascript:void(0);" class="btn btn-lg btn-primary">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image:url('images/heros/hero-6-bg-2.jpg');">
                <div class="bg-overlay"></div>
                <div class="carousel-content text-center hero-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-8">
                                <div class="bg-soft-light text-light avatar avatar-xl rounded-circle mx-auto mb-4">
                                    <i class="mdi mdi-currency-usd fs-24"></i>
                                </div>
                                <h1 class="text-white display-4 fw-semibold mb-4">Make Your Transactions even easier with Appexy</h1>
                                <p class="text-white-50 mx-lg-5 mb-5">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atqued corrupti quos dolores et quas molestias excepturi sintoccaecati cupiditate.</p>
                                <a href="javascript:void(0);" class="btn btn-lg btn-primary">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image:url('images/heros/hero-6-bg-3.jpg');">
                <div class="bg-overlay"></div>
                <div class="carousel-content text-center hero-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-8">
                                <div class="bg-soft-light text-light avatar avatar-xl rounded-circle mx-auto mb-4">
                                    <i class="mdi mdi-layers-triple-outline fs-24"></i>
                                </div>
                                <h1 class="text-white display-4 fw-semibold mb-4">Manage all Your Finances Easily with Appexy</h1>
                                <p class="text-white-50 mx-lg-5 mb-5">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atqued corrupti quos dolores et quas molestias excepturi sintoccaecati cupiditate.</p>
                                <a href="javascript:void(0);" class="btn btn-lg btn-primary">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="hero-slider-arrow">
                <i class="mdi mdi-arrow-left-thin"></i>
            </span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="hero-slider-arrow">
                <i class="mdi mdi-arrow-right-thin"></i>
            </span>
        </button>
    </div>
</section>

@endsection