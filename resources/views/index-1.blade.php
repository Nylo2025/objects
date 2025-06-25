@extends('layouts.landing')

@section('css')
@endsection

@section('content')

@include('layouts.partials/navbar', ['isLight' => true ])

<section class="hero-1" id="home">
    <div class="bg-overlay-img"></div>
    <div class="container">
        <div class="row align-items-center hero-content">
            <div class="col-lg-6">
                <h1 class="hero-title fw-bold mb-4 pb-3 text-white">Here is the best way to present your apps</h1>
                <p class="text-white opacity-75 mb-4 pb-3 fs-17">Maecenas tempus, tellus eget condimentum rhoncus quam semper libero sit amet adipiscing sem neque sed ipsum nam quam nunc blandit vel luctus pulvinar.</p>
                <div class="subscribe-form me-lg-5 mb-5 mb-lg-0">
                    <i class="mdi mdi-email-outline form-icon"></i>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email Address" />
                    <a href="javascript:void(0);" class="btn btn-success form-btn"><span>Download Now</span> <i class="mdi mdi-download download-icon"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <img src="images/heros/hero-1-img.png" alt="" class="img-fluid" />
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="hero-bottom-shape">
                    <img src="images/heros/hero-1-bottom-shape.png" alt="" class="w-100" />
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="down-arrow-btn">
                    <a href="#how-it-work" class="down-arrow"><i class="mdi mdi-arrow-down"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
@endsection