@extends('layouts.landing')

@section('css')
@endsection

@section('content')

@include('layouts.partials/navbar', ['isLight' => false ])

<section class="hero-5 bg-light" id="home">
    <div class="container">
        <div class="row justify-content-center text-center hero-content">
            <div class="col-lg-8">
                <h1 class="hero-title fw-bold mb-4 display-4">Let's <span class="text-primary">Build Your Products</span> by Appexy App.</h1>
                <p class="opacity-75 mb-4 pb-3 fs-17">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores quas molestias excepturi similique sintnonprovidente sunt in culpa.</p>
                <a href="javascript:void(0);" class="btn btn-lg btn-gradient-primary">Let's Started</a>
            </div>
        </div>
    </div>
    <div class="bottom-shape position-absolute bottom-0 start-0 end-0">
        <img src="images/hero-bottom-shape.png" alt="" class="w-100">
    </div>
</section>

<div class="hero-5-img">
    <div class="container">
        <div class="row justify-content-center hero-content">
            <div class="col-lg-10">
                <div class="hero-5-img-content">
                    <img src="images/heros/hero-5-img.png" alt="" class="img-fluid d-block mx-auto">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection