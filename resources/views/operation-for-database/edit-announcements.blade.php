@extends('layouts.app-dashboard')

@section('content')
    <div id="layoutSidenav">
        @include('layouts.sidemenu-dashboard')
        <div id="layoutSidenav_content" style="background-color: #edf2f4">
            <main style="background-color: #edf2f4">
                <div class="card" style="background-color: #edf2f4">
                    <div class="card-header"><b>UPDATE ANNOUNCEMENT</b></div>
                    <div class="card-body">
                        <form method="post" action="{{ route('announcements.update', $announcement->id ) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Header</label>
                                <div class="col-sm-10">
                                    <input type="text" name="header" class="form-control" value="{{ $announcement->header }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Sub-Header</label>
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
                            @php
                                    $user = Auth::user(); 
                            @endphp
                            <div>
                                <input type="hidden" name="user_id" class="form-control" value="{{ $user->id }}">
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control">
                                    <img src="{{ asset('images/' . $announcement->image ) }}" width="100" alt="" class="img-thumbnail">
                                    <input type="hidden" name="hidden_image" value="{{ $announcement->image }}">
                                </div>
                            </div>
                            <div class="text-left">
                                <input type="hidden" name="hidden_id" value="{{ $announcement->id }}">
                                <input class="btn btn-primary" type="submit" name="update" id="update" value="UPDATE">
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
        </div>
    </div>
@endsection