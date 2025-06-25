@extends('layouts.landing')

@section('css')
@endsection

@section('content')

@include('layouts.partials/navbar', ['isLight' => false ])

<section class="hero-2" id="home">
    <div class="bg-overlay-img"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center hero-content">
            <div class="col-lg-6">
                <div class="avatar avatar-xl rounded-circle bg-soft-primary text-primary shadow-sm mb-4">
                    <i class="mdi mdi-rocket-launch mb-0 h2"></i>
                </div>
                <h1 class="hero-title fw-bold mb-4 display-5">Manage Your Activity With <span class="text-primary">Appexy</span></h1>
                <p class="opacity-75 mb-4 pb-3 fs-17">Maecenas tempus, tellus eget condimentum rhoncus quam semper libero sit amet adipiscing sem neque sed ipsum nam quam nunc blandit vel luctus pulvinar.</p>
                <a href="javascript:void(0);" class="btn btn-lg btn-gradient-primary">Get Started Today</a>
                <a href="javascript:void(0);" class="btn btn-lg btn-outline-dark">Download App</a>
            </div>

            <div class="col-md-8 col-lg-5 offset-lg-1">
                <div class="hero-2-img mt-5 mt-lg-0">
                    <img src="images/heros/hero-2-img.png" alt="" class="img-fluid rounded-lg">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
@vite(['resources/js/counter.init.js', 'resources/js/swiper.js'])
@endsection