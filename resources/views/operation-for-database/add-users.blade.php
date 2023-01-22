@extends('layouts.app-dashboard')

@section('content')
    <div id="layoutSidenav">
        @include('layouts.sidemenu-dashboard')
        <div id="layoutSidenav_content">
            <main>
                <div class="card">
                    <div class="card-header"><b>ADD USER</b></div>
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
                            <div class="form-floating mb-3">
                                <!--password-->
                                <div class="form-floating mb-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input id="password" class="form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                                        <label for="password" :value="__('Password')"  class="text-dark">Password</label>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                            </div>
                            <!--Confirm Password-->
                            <div class="form-floating mb-3">
                                <!--confirm password-->
                                <div class="form-floating mb-3">
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
                    @if ($errors->any())
                    <label for="" class="text-danger"><b>MESSAGE: </b></label>
                    <div class="container">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsections