@extends('layouts.landingPage')
 
@section('content')
    <body style="background:url('assets-homepage/assets/img/header-bg3.jpg'); background-repeat:no-repeat; background-size:cover">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container pt-5">
                    <div class="row justify-content-center" style="margin-top: 50px;  opacity: 1;">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header" style="background-color: #6A040F; text-align:center"><img style="width: 100px;height: 70px" src="{{ url('assets-homepage/assets/img/logos/logo.png') }}" alt="..." /></a></div>
                                <div class="card-body" style="background-color: #9D0208">
                                    <!-- Session Status -->
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                                    
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <!--Email address-->
                                        <div class="form-floating mb-3">
                                            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus/>
                                            <label for="email" class="text-dark" :value="__('Email')">Email address</label>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-light" />
                                        </div>
                                        <!--Password-->
                                        <div class="form-floating mb-3">
                                            <input id="password" class="form-control"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password" />
                                            <label for="password" :value="__('Password')" class="text-dark">Password</label>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-light" />
                                        </div>
                                        <!--Remember Password-->
                                        <div class="form-check mb-3">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                                <span class="ml-2 text-sm text-dark dark:text-gray-400">Remember Password</span>
                                            </label>
                                        </div>
                                        <!--Forgot Password-->
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            {{-- @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif --}}
                                            <x-primary-button class="ml-3 btn-primary">
                                                <span class="text-dark">log in</span>
                                            </x-primary-button>
                                        </div>
                                    </form>
                                </div>
                                {{-- <div class="card-footer text-center py-3">
                                    <div class="small"><a href="{{ url('/register') }}">Need an account? Sign up!</a></div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
@endsection