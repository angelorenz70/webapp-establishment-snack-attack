@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@extends('layouts.app-dashboard')

@section('content')
    <div id="layoutSidenav">
        @include('layouts.sidemenu-dashboard')
        <div id="layoutSidenav_content">
            <main>
                <div class="card">
                    <div class="card-header"><b>ADD ANNOUNCEMENT</b></div>
                    <div class="card-body">
                        <form method="post" action="{{ route('announcements.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Header Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="header" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Sub-Header Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="sub_header" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Image</label>
                                <div class="col-sm-10">
                                    <input type="text" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" name="description" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">User_id</label>
                                <div class="col-sm-10">
                                    <input type="text" name="user_id" class="form-control">
                                </div>
                            </div>
                            <div class="text-;eft">
                                <input class="btn btn-primary" type="submit" name="append" id="append" value="APPEND">
                            </div>
                        </form>
                    </div>
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
@endsection