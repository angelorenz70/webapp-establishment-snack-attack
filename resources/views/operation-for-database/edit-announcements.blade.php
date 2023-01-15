@extends('layouts.app-dashboard')

@section('content')
    <div id="layoutSidenav">
        @include('layouts.sidemenu-dashboard')
        <div id="layoutSidenav_content">
            <main>
                <div class="card">
                    <div class="card-header"><b>UPDATE ANNOUNCEMENT</b></div>
                    <div class="card-body">
                        <form method="post" action="{{ route('announcements.update', $announcement->id ) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Header Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="header" class="form-control" value="{{ $announcement->header }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Sub-Header Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="sub_header" class="form-control" value="{{ $announcement->sub_header }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" name="description" class="form-control" value="{{ $announcement->description }}" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">User_id</label>
                                <div class="col-sm-10">
                                    <input type="text" name="user_id" class="form-control" value="{{ $announcement->user_id }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control">
                                    <img src="{{ asset('images/' . $announcement->image ) }}" width="100" alt="" class="image-thumbnail">
                                    <input type="hidden" name="hidden_image" value="{{ $announcement->image }}">
                                </div>
                            </div>
                            <div class="text-left">
                                <input type="hidden" name="hidden_id" value="{{ $announcement->id }}">
                                <input class="btn btn-primary" type="submit" name="update" id="update" value="UPDATE">
                            </div>
                        </form>
                    </div>
                    <label for=""><b>MESSAGE: </b></label>
                    @if ($errors->any())
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
@endsection