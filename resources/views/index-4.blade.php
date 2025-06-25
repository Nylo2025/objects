@extends('layouts.landing')

@section('css')
@endsection

@section('content')

@include('layouts.partials/navbar', ['isLight' => true ])

<section class="hero-4" id="home">
    <div class="bg-overlay-img"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="avatar avatar-xl rounded-circle bg-soft-light text-white shadow-sm mb-4">
                    <i class="mdi mdi-shield-lock mb-0 h2"></i>
                </div>
                <h1 class="hero-title text-white fw-bold mb-4 display-5">Secure Your <span class="text-primary">Payment</span> Application</h1>
                <p class="text-white-50 mb-4 pb-2 fs-17">Maecenas tempus, tellus eget condimentum rhoncus quam semper libero sit amet adipiscing sem neque sed.</p>
                <p class="text-white-50 mb-2"><i class="mdi mdi-lock-check fs-20 me-2 text-success"></i> Nemo enim ipsam voluptatem voluptas aspernatur.</p>
                <p class="text-white-50 mb-5"><i class="mdi mdi-lock-check fs-20 me-2 text-success"></i> Quis autem vel eum iure reprehenderit.</p>
                <!-- <p class="text-white-50 mb-5"><i class="mdi mdi-lock-check fs-20 me-2 text-success"></i> At vero eos et accusamus et iusto odio dignissimos.</p> -->
                <a href="javascript:void(0);" class="btn btn-lg btn-primary">Get Started <i class="mdi mdi-arrow-right-thin ms-1 fs-22 right-arrow"></i></a>
            </div>

            <div class="col-lg-6">
                <div class="mt-5 mt-lg-0">
                    <img src="images/heros/hero-4-img.png" alt="" class="img-fluid d-block mx-auto">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection