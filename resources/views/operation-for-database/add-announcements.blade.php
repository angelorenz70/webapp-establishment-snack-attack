@extends('layouts.app-dashboard')

@section('content')
    <div id="layoutSidenav">
        @include('layouts.sidemenu-dashboard')
        <div id="layoutSidenav_content" style="background-color: #edf2f4">
            <main style="background-color: #edf2f4">
                <div class="card" style="background-color: #edf2f4">
                    <div class="card-header"><b>ADD ANNOUNCEMENT</b></div>
                    <div class="card-body">
                        <form method="post" action="{{ route('announcements.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Header</label>
                                <div class="col-sm-10">
                                    <input type="text" name="header" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Sub-Header</label>
                                <div class="col-sm-10">
                                    <input type="text" name="sub_header" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-label-form">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" name="description" class="form-control">
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
                                </div>
                            </div>
                            <div class="text-left">
                                <input class="btn btn-primary" type="submit" name="append" id="append" value="APPEND">
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