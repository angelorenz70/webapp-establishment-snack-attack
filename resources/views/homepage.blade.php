@extends('layouts.landingPage')

@section('content')
        <!-- Masthead-->
        <header class="masthead" style="background-image: url('assets-homepage/assets/img/background-intro.jpg')">
            <div class="container bg-secondary opacity-75 pt-4 pb-4 rounded-3">
                <div class="masthead-subheading text-warning">Welcome To Snack Attack!</div>
                <div class="masthead-heading text-uppercase text-warning">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>

        @include('page-parts.page-slogan')
        @include('page-parts.page-services')
        @include('page-parts.page-products')
        @include('page-parts.page-abouts')
        @include('page-parts.page-owner')

        
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets-homepage/assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets-homepage/assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets-homepage/assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets-homepage/assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        
        @include('page-parts.page-contacts')
        @include('page-parts.page-announcement')
        @include('page-parts.page-footer')
@endsection