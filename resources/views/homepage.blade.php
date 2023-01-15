@include('layouts.navbar')
@extends('layouts.landingPage')

@section('content')
        <!-- Masthead-->
        <header class="masthead" style="background-image: url('assets-homepage/assets/img/background-intro.jpg')">
            <div class="container bg-secondary opacity-75 pt-4 pb-4 rounded-3">
                <div class="masthead-subheading text-warning" data-aos="fade-up">Welcome To Snack Attack!</div>
                <div class="masthead-heading text-uppercase text-warning" data-aos="fade-up" data-aos-delay="100">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services" data-aos="fade-up" data-aos-delay="150">Tell Me More</a>
            </div>
        </header>

        @include('page-parts.page-slogan')
        @include('page-parts.page-services')
        @include('page-parts.page-products')
        @include('page-parts.page-abouts')
        @include('page-parts.page-owner')
        @include('page-parts.page-contacts')
        @include('page-parts.page-announcement')
        @include('page-parts.page-footer')
@endsection