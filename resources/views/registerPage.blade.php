@extends('layouts.landingPage')
 
@section('content')
    <header class="masthead" style="background-image: url('assets-homepage/assets/img/header-bg2.jpg')">
        <div id="layoutAuthentication_content">
            <main>
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4 text-dark">Register Account</h3></div>
                            <div class="card-body">
                                <form>
                                    <div class="form-floating mb-3 ">
                                        <input class="form-control text-dark" id="inputFirstName" type="text" placeholder="Enter your name" />
                                        <label for="inputName"  class="text-dark" >Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control text-dark" id="inputEmail" type="email" placeholder="name@example.com" />
                                        <label for="inputEmail"  class="text-dark">Email address</label>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control text-dark" id="inputPassword" type="password" placeholder="Create a password" />
                                                <label for="inputPassword"  class="text-dark">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control text-dark" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                <label for="inputPasswordConfirm"  class="text-dark">Confirm Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </header>
        
@endsection