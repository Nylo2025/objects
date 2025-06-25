@extends('layouts.landing')

@section('css')
@endsection

@section('content')

@include('layouts.partials/navbar', ['isLight' => false ])

<section class="hero-3" id="home">
    <div class="bg-overlay-img"></div>
    <div class="container">
        <div class="row align-items-center hero-content">
            <div class="col-lg-6">
                <h1 class="hero-title fw-bold mb-4 display-4">Best Way to Make Online Payments</h1>
                <p class="opacity-75 mb-4 fs-17">Maecenas tempus, tellus eget condimentum rhoncus quam semper libero sit amet adipiscing sem neque sed.</p>

                <p class="text-muted mb-2"><i class="mdi mdi-checkbox-marked-circle-outline text-success me-2"></i> Aenean leo ligula porttitor eu consequat vitae.</p>
                <p class="text-muted mb-2"><i class="mdi mdi-checkbox-marked-circle-outline text-success me-2"></i> Maecenas tempus tellus eget condimentum rhoncus quam.</p>
                <p class="text-muted mb-4 pb-3"><i class="mdi mdi-checkbox-marked-circle-outline text-success me-2"></i> Donec sodales sagittis as consequat.</p>
                <a href="javascript:void(0);" class="btn btn-lg btn-primary">Get Started</a>
            </div>

            <div class="col-lg-6">
                <img src="images/heros/hero-3-img.png" alt="" class="img-fluid mt-5 mt-lg-0">
            </div>
        </div>
    </div>
</section>

@endsection