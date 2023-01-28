@include('layouts.navbar')
@extends('layouts.landingPage')

@section('content')
        <!-- Masthead-->
        <header class="masthead" style="background-image: url('assets-homepage/assets/img/background-image.jpg')">
            <div class="container pt-4 pb-4 rounded-3" style="background-color: #6a040f; border-style: hidden" data-aos="fade-right">
                <div class="masthead-subheading text-warning pt-3" style="color: #faa307" data-aos="fade-up">Welcome To Snack Attack!</div>
                <div class="masthead-heading text-uppercase text-warning" style="color: #faa307" data-aos="fade-up" data-aos-delay="100">It's Nice To Meet You</div>
        </header>
        @include('page-parts.page-announcement')
        @include('page-parts.page-slogan')
        @include('page-parts.page-services')
        @include('page-parts.page-products')
        @include('page-parts.page-abouts')
        @include('page-parts.page-owner')
        @include('page-parts.page-contacts')
        {{-- @include('page-parts.page-footer') --}}
@endsection