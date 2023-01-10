@extends('layouts.landingPage')
 
@section('content')
    <body style="background: url('assets-homepage/assets/img/header-bg2.jpg'); background-repeat:no-repeat; background-size:cover">
        <div id="layoutAuthentication_content">
            <main>
                <div class="row justify-content-center pt-5">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4 text-dark">Register Account</h3></div>
                            <div class="card-body">
                                <form  method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <!--Name-->
                                    <div class="form-floating mb-3 ">
                                        <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                                        <label for="name" :value="__('Name')"  class="text-dark" >Name</label>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>

                                    <!--Email address-->
                                    <div class="form-floating mb-3">
                                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                                        <label for="email" :value="__('Email')"  class="text-dark">Email address</label>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!--Password-->
                                    <div class="row mb-3">
                                        <!--password-->
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input id="password" class="form-control"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="new-password" />
                                                <label for="password" :value="__('Password')"  class="text-dark">Password</label>
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                        </div>
                                        <!--confirm password-->
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input id="password_confirmation" class="form-control"
                                                        type="password"
                                                        name="password_confirmation" required />
                                                <label for="password_confirmation" :value="__('Confirm Password')"  class="text-dark">Confirm Password</label>
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <!--Create Account-->
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button class="btn btn-primary btn-block">Create Account</button></div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="{{ url('/login') }}">Have an account? Go to login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
        
@endsection